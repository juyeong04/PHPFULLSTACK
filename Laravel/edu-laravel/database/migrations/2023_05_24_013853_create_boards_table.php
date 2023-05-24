<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // migration 파일 따로 생성 가능 : php artisan make:migration create_boards_table
    // migration 실행 : php artisan migrate ==> up method 실행됨 (migration 폴더 안에 있는 파일 전부다 실행됨!! 주의!!)
    // reset : 모든 migration 파일의 down()메소드를 실행 ==> 테이블 drop(데이터 복구 xxxxxxxxxxxx) : php artisan migrate:reset
    // rollback : 가장 마지막에 실행한 migration의 내용을 롤백 : php artisan migrate:rollback

    // 시더(초기 데이터 생성) : database\seeders의 각 클래스 파일 확인
    // 팩토리(더미 데이터 생성) : database\factories의 각 클래스 파일 확인

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            // 글번호, 제목, 내용, 작성일, 수정일, 삭제일자, 삭제여부
            $table->id('bno'); // big_int, pk, auto_increment
            $table->char('category', 1)->index(); // char(1), not null, index 추가
            // join 할 때 카테고리 테이블의 번호를 가져올거임 / index는 where절에서 많이 쓸 때 사용, db에서의 찾고자 하는 양이 15% 이하일때 효율적
            $table->string('btitle', 100); // varchar(100글자), not null
            $table->string('bcontent', 4000); // varchar(4000글자), not null / block은 4000자 이상 쓸 때
            $table->timestamps(); 
            // created_at, updated_at 를 생성해줌, null허용
            $table->timestamp('deleted_at')->nullable(); // 라라벨이 기대하는 이름임
            $table->char('deleted_flg', 1)->default('0'); // char(1), default '0', not null
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
