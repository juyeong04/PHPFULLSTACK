<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    // 모델 생성 : php artisan make:model Board -mfs (옵션[-msf] : migration, factory, seeder 한번에 생성)

    // 테이블 정의
    protected $table = 'boards'; // 정의하지 않을 경우, migration table명이 자동으로 class명의 복수형으로 생성됨

    // PK 정의 
    protected $primaryKey = 'bno'; // 정의하지 않을 경우, 'id'컬럼을 pk로 인식함

    // 대량 할당을 이용한 취약성 대책(둘 중 하나만 설정!! 아니면 에러남)
    // 1. 화이트 리스트 방식 : 수정할 수 있는 컬럼을 설정
        // protected $fillable = ['컬럼1', '컬럼2'];
    // 2. 블랙 리스트 방식 : 수정 할 수 '없는' 컬럼을 설정
        // protected $guarded = ['컬럼3', '컬럼4'];
    protected $guarded = [];
        
}
