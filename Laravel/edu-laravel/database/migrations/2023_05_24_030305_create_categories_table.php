<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration

{   // migration 파일 따로 생성 가능 : php artisan make:migration create_categories_table
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->char('no', 1)->unique();
            $table->string('name', 30)->unique();
            $table->char('active_flg', 1)->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
