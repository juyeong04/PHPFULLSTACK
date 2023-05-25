<?php
// 컨트롤러 생성 : php artisan make:controller TaskController(파일명) --resource

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; // DB 클래스 호출

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //----------
        // *쿼리 빌더
        //----------
        // $result = DB::select('select * from categories');
        // $no = 5;

        // 방법 1
        // $result = DB::select('select * from categories where no = :no'
        //             , ['no' => $no] //! 키 값에 '콜론' xxxxxxxxxx
        // ); 
        // 방법 2
        // $result = DB::select('select * from categories where no = ? and no = ?'
        //             , [$no , 7] 
        // ); 
        

        // $input = ['4', '7', '8']; // categories의 no 컬럼
        //  게시글 번호, 게시글 제목, 카테고리 명 출력해주세요 (게시글 번호로 오름차순 정렬 후 상위 5개만)
        
        //  내가 한거
        // $result = DB::select('SELECT bo.bno, bo.btitle, cat.name
        //                         from categories cat
        //                             INNER JOIN boards bo
        //                             ON cat.`no` = bo.category
        //                     WHERE cat.`no` = ? OR cat.`no` = ? OR cat.`no` = ?
        //                     ORDER BY bo.bno LIMIT 5'
        //         , [$input[0], $input[1], $input[2]]
        // );


        //  여러 방법들 (지향!!!!)
        // $result = DB::select('SELECT bo.bno, bo.btitle, cat.name
        //                         from categories cat
        //                             INNER JOIN boards bo
        //                             ON cat.`no` = bo.category
        //                     WHERE cat.`no` in(?, ?, ?)
        //                     ORDER BY bo.bno 
        //                     LIMIT 5'
        //                     , $input
        // );
        // $result = DB::select('SELECT bo.bno, bo.btitle, cat.name
        //                         from categories cat, boards b
        //                         -- WHERE cat.`no` = b.category AND cat.`no` in(?, ?, ?) -- 방법1
        //                         WHERE cat.`no` = b.category AND cat.`no` in(:no1, :no2, :no3) -- 방법2
        //                         ORDER BY bo.bno LIMIT 5'
        //                         , $input
        // );


    //-------------------------------
    // INSERT

        // $result = DB::insert('
        //     insert into boards (
        //         category
        //         , btitle
        //         , bcontent
        //         , created_at
        //         , updated_at
        //         )
        //         values (
        //             \'1\' //! 이스케이프 홑따옴표
        //             , "testTitle"
        //             , "testtest"
        //             , NOW()
        //             , NOW()
        //             )

        // ');

        // $result = DB::insert('
        //     insert into boards (
        //         category
        //         , btitle
        //         , bcontent
        //         , created_at
        //         , updated_at
        //         )
        //         values (
        //             :category
        //             , :btitle
        //             , :bcontent
        //             , :created_at
        //             , :updated_at
        //             )'
        //     ,[
        //         'category' => '1'
        //         , 'btitle' => 'testTitle'
        //         , 'bcontent' => 'testtest'
        //         , 'created_at' => now() // 라라벨에서 지원하는 now() : utc 기준 시간으로 설정 돼있음
        //         , 'updated_at' => now()
        //     ]

        // );

        // 제목 : test, 내용 : testtest로 변경해 주세요
        // $result = DB::update('update boards set btitle = ?, bcontent = ? updated_at = NOW() where bno = ?', ['test', 'testtest', 30001]);

        // delete
        $result = DB::delete('delete from boards where bno = ?', [30001]); // ! 하나 있어도 [] 필수!!


    //------------
    // *쿼리 빌더 체이닝
    //------------

        $no = 5;
        // $result = DB::table('categories')->where('no', '=', $no)->get(); // ! get() : $result에 값 담음
        //  위, 아래같은 값임!
        // $result = DB::select('select * from categories where no = :no'
        // , ['no' => $no] //! 키 값에 '콜론' xxxxxxxxxx
        // ); 

        // $result = DB::table('categories')->where('no', '=', $no)->dd(); // ! dd : 화면에 쿼리로 보여줌, dd는 return까지 안가고 끝남!
    
        // ! ' = ' 같다 기호 생략 가능!!!
        //! orwhere
        // $result = DB::select('select * from categories where no = ? or no = ?');
        $no1 = '5';
        $no2 = '8';
        // $result = DB::table('categories')->where('no', $no1)->orwhere('no', $no2)->get(); 

        //! AND 연결
        //$result = DB::select('select * from categories where no = AND no = ?');
        // $result = DB::table('categories')->where('no', $no1)->where('no', $no2)->get(); 

        // $result = DB::select('select * from categories where no in(?, ?)');
        // $result = DB::table('categories')->whereIn('no', [$no1, $no2])->dd();
        
        //! whereNotIn
        // $result = DB::select('select * from categories where no NOT in('5', '8')');
        // $result = DB::table('categories')->whereNotIn('no', [$no1, $no2])->dd();

        // ! select
        // select id, no, name from categories
        // $result = DB::table('categores')->select('id', 'no', 'name')->dd();

        //! orderBy
        // select id, no name from categories order by name DESC
        // $result = DB::table('categores')->select('id', 'no', 'name')->orderBy('name', 'desc')->dd();


        // ! ***** 주의해서 사용(지향!!!) ******** whereRaw()
        // $result = DB::table('categories')->whereRaw('no = '.$no1); // 쿼리문을 안에 적어줌(보안성 취약)


    // ------------
    // * 결과 반환 체이닝 메소드
    //-------------

        // ! first() : limit 1과 비슷, 결과 하나만 가져옴, 실패시 false 리턴
        // $result = DB::table('boards')->orderBy('bno', 'desc')->first();

        //! firstOrFail() : first()와 같은 동작, 실패시 결과가 '예외' 발생(디버그 페이지 또는 404 페이지) / 엘로퀀트 모델(라라벨의 orm) 객체에서만 사용가능!!
        // $result = DB::table('boards')->orderBy('bno', 'desc')->firstOrFail();


    // * 집계 메소드

        //! count
        // $result = DB::table('boards')->count(); // 결과의 레코드 수를 반환
        // $result = DB::table('boards')->max('bno'); // 해당 컬럼의 최대치를 반환


    // * 트랜잭션
        // DB::beginTransaction();
        // DB::rollback();
        // DB::commit();


    // 카텥고리가 활성화 되어 있는 게시글의 카테고리 별 갯수를 출력
    // 카테고리 번호, 카테고리명, 갯수 /체이닝 이용!

            //* DB::raw
            $result = DB::table('categories AS cat')
                    ->select('bo.category', 'cat.name', DB::raw('count(*) as cnt'))
                    ->join('boards AS bo', 'cat.no', 'bo.category')
                    ->where('cat.active_flg', '1')
                    ->groupBy('bo.category', 'cat.name')
                    ->get();

            //*selectRaw()
            // $result = DB::table('categories AS cat')
            //         ->selectRaw('bo.category, cat.name, count(*)')
            //         ->join('boards AS bo', 'cat.no', 'bo.category')
            //         ->where('cat.active_flg', '1')
            //         ->groupBy('bo.category', 'cat.name')
            //         ->get();


        return var_dump($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
