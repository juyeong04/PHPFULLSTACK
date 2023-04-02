<?php

// CLASS : 동종의 객체(각각 역할이 있는 요소)들이 모여있는 집합

    class Student
    {
        // 클래스 멤버 변수
        public $std_name; // 어디서든 접근 가능
        private $std_id; // student class 내에서만 접근 가능
        protected $std_age; // '상속' class 내에서만 접근 가능
        // 접근제어 지시자 : public, private, protected


        // class 안에 있는 function을 'method' 라고 부름
        public function print_student( $param_std_name, $param_std_age )
        {
            $result_name =  "이름 : ".$param_std_name;
            $result_age = "나이 : ".$param_std_age."세";
            echo $result_name;
            echo "\n";
            echo $result_age;
        }

        // private 객체를 사용할 수 있는 방법
            public function set_std_id($param_id) // get, set 2개 함수 쓰는 이유 : 함수는 1개에 1가지 기능 있어야함!!
            { 
                $this->std_id = $param_id;
            }

            public function get_std_id()
            {
                // this 포인터 : class 자기자신을 가리키고 있음
                return $this->std_id;
            }
    }

    

    // // class를 선언
        $obj_Student = new Student;
    // // class의 method를 호출
    //     // $obj_Student->print_student("홍길동", 27);

    // // class의 멤버변수 사용방법
    //     echo $obj_Student->std_name;
    //     $obj_Student->std_name = "갑돌이";
    //     echo $obj_Student->std_name;

    // // 지시자가 private이기 때문에 접근 권한이 없다
    //     $obj_Student->$std_id = "갑돌이id";

    // getter, setter로 private 객체에 접근
        $obj_Student->set_std_id("갑순이id");
        // echo $obj_Student->get_std_id();
    


    //==================

    // 생성자(constructor)

    class food
    {
        private $food_name;

        // 생성자 
        public function __construct( $param_foood_name ) // : 7.4(?) 버전 상위버전부터 __construct 사용해서 생성자 만들어야함
        {
            $this->food_name = $param_foood_name;
        }

        public function print_food_name()
        {
            echo $this->food_name;
        }
    }

    $obj_food = new food( "탕수육" );
    $obj_food->print_food_name();
?>