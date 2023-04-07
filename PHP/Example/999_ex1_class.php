<?php

// ------ CLASS -----------

    class Food
    {
        // 접근 제어 지시자
            // public       : 어디서든(class 안팎) 접근 가능
            // private      : 해당 class 내에서만 접근 가능
            // protected    : class 자기 자신과 상속 class 내에서만 접근 가능

        // 멤버변수
            // private $str_name;
            // private $int_price;
            protected $str_name; // 자식 class에서 쓸 수 있게 하기 위해서 protected로 변경
            protected $int_price;

        // 메소드
            // 생성자 : class 사용하고 싶을 때 초기 셋팅 (지금은 private 변수에 접근하기 위해 만듦)
            public function __construct( $param_name, $param_price ) // setter // construct 안적으면 php가 디폴트로 construct 생성해줌 but 내용은 없음
            {
                $this->str_name = $param_name;
                $this->int_price = $param_price;
            }

            public function fnc_print_food() // getter, private 접근하기 위해서 만든 메소드
            {
                $str = $this->str_name. " : ". $this->int_price. "원\n";
                echo $str;
            }

            public function fnc_set_price($udt) // setter
            {
                $this->int_price = $udt;
                // return $udt;
            }
    }

    $obj_food = new Food( "탕수육", 10000 );
    // echo $obj_food->str_name; // Cannot access private property Food 에러뜸
    $obj_food->fnc_print_food();


    // Food class의 멤버 변수 $int_price의 값을 12000 바꿔주세요
        $obj_food->fnc_set_price(12000);
        // echo $obj_food->fnc_set_price(); // echo로 출력하면 에러남 ==> 리턴값 없음 
        $obj_food->fnc_print_food();



// 상속 : 자식class가 부모class에 있는 객체를 상속받아 사용할 수 있음
    class KoreanFood extends Food
    {
        protected $side_dish;

        public function __construct( $param_name, $param_price, $param_side_dish)
        {
            $this->str_name = $param_name;
            $this->int_price = $param_price;
            $this->side_dish = $param_side_dish;
        }

        // 오버라이딩 : 부모클래스에서 정의된 메소드를 자식클래스에서 재정의
            public function fnc_print_food() // getter
            {
                // $str = $this->str_name. " : ". $this->int_price. "원\n"."반찬 : ".$this->side_dish."\n";
                parent::fnc_print_food();
                $str = "반찬 : ".$this->side_dish."\n";
                echo $str;
            }
    }

    

    $obj_Korean_food = new KoreanFood( "치킨", 20000, "치킨무");
    $obj_Korean_food->fnc_print_food();



// -----------[ Practice ]--------------------

class People
{
    protected $name;

    // public function __construct( $param_name )
    // {
    //     $this->$name = $param_name;
    // }

    public function setName( $param_name )
    {
        $this->name = $param_name;
    }

    public function peoplePrint()
    {
        echo "이름 : $this->name \n";
    }
}

class Student extends People
{
    protected $id;

    // public function __construct( $param_name, $param_id )
    // {
    //     $this->name = $param_name;
    //     $this->id = $param_id;
    // }

    public function setid($param_id)
    {
        $this->id = $param_id;
    }

    public function studentPrint()
    {
        parent::peoplePrint();
        echo "아이디 : $this->id \n";
    }

}
$obj_student = new Student();
$obj_student->setName("주영");
$obj_student->setid(12345);
$obj_student->studentPrint();
?>