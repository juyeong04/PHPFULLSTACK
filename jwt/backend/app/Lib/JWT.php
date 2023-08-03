<?php
namespace App\Lib;

use Exception;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class JWT {
    protected $alg = 'SHA256';
    protected $secret_key = 'php506';
    // JWT 생성
    public function createJWT(Array $data) {
        Log::debug("--------- createJWT Start -----------");
        
        // header 작성
        $header_json = json_encode([
            'alg' => $this->alg,
            'typ' => 'JWT'
        ]);

        $header = base64_encode($header_json);
        Log::debug("header : ". $header);
        // payload 작성
        $iat = time(); // 발급일자
        $exp = $iat + 60;// 유효일자
        $payload_json = json_encode([
            'id' => $data['id'],
            'iat' => $iat,
            'exp' => $exp
        ]);
        $payload = base64_encode($payload_json);

        Log::debug("payload : ". $payload);

        // signature 작성
        $signature = hash($this->alg, $header.$payload.$this->secret_key);
        Log::debug("signature : ". $signature);

        Log::debug("--------- createJWT End -----------");
        return $header.".".$payload.".".$signature;


    }

    public function chkToken($token) {
        Log::debug("--------- chkToken Start -----------");
        Log::debug("1");
        try {
            // 토큰 분리
            $arr_token = explode(".", $token);

            $header = $arr_token[0];
            $payload = $arr_token[1];
            $signature = $arr_token[2];

            // 토큰 유효시간 확인
            $arr_payload = json_decode(base64_decode($payload));
            if(time() > $arr_payload->exp) {
                throw new Exception('exp 초과');
            }
            Log::debug("2");
            Log::debug("signature : ". $signature);
            // 검증용 시그니쳐 생성
            $verify = hash($this->alg, $header.$payload.$this->secret_key);
            Log::debug("3");
            Log::debug("verify : ". $verify);
            if($signature !== $verify) {
                throw new Exception('signature 다름');
            }
        
        } catch(Throwable $th) {
            Log::debug("Error : ".$th->getMessage());
            return false;
        }
        finally {
            Log::debug("--------- chkToken End -----------");

        }
        return true;
        // **** 아래 내용을 try catch문으로 담음
        // //토큰 분리
        // $arr_token = explode(".", $token);

        // $header = $arr_token[0];
        // $payload = $arr_token[1];
        // $signature = $arr_token[2];

        // // 검증용 시그니쳐 생성
        // $verify = hash($this->alg, $header.$payload.$this->secret_key);
        
        // if($signature !== $verify) {
        //     return false;
        // }
        // Log::debug("--------- chkToken End -----------");

        // return true;
    
    }


}

?>