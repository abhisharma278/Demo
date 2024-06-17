<?php 

// echo "hello" ,"World";
// print "Hello World";
// $name = 'Abhi';
// echo $name;


    // $x = 1;
    // $y =$x;
    // $x= 3;
    // echo $y;

// // because variables are asign by Values


//     $x = 1;
//     $y = &$x;
//     $x= 3;
//     echo $y;

// // because variables are asign by Reference


// $firstName = "Abhi";

// echo "Hello $firstName";


// CONSTANT

// Constant are those Value who Can not change After Define

// $firstName= "Abhi";
// $firstName= "Sharma";
//  define Function are  defined at a runtine  function so  you can not define constant const keyword within your contro struture like loops or if else for exampl
// define('STATUS_PAID','PAID');
// echo STATUS_PAID;

// const STATUS_PAID ='PAID';
// echo STATUS_PAID;
// const     keyword Create a Define at a compile Time


// //STRING

// $firstName= "Abhi";
// $lastName = "{$firstName} Sharma";
// // echo $lastName;

// $name = $firstnName .''. $lastName;
// $name[-2]= 'g';
// echo $name;


// //ARRAY

// $progLang= ['php','java','javascript'];
// print_r($progLang);
// echo $progLang[2];
// var_dump(isset($progLang[2]));

// $x = 1 ;
// while ($x <= 10) {
//     echo $x++;
// }
// $text= ["Hello World","hey"];
// for ($i=0; $i <count($text);  $i++) { 
//     echo $text[$i];
// }

// $progLang = ['php','Java','Javascript','Pyton','c++'];

// foreach ($progLang  as $key => $value) {
//     echo  $value . '</br>';
// }

// function sum ($x , $y){
//     return $x + $y;
// }
// echo sum (5,7);
// return;
// echo "Hello";

// function foo(){
//     return "Hello ";
// }
// $x = foo();
// echo $x;

// declare(strict_types=1);
// function foo($x,$y){  //Parameters
//     return $x*$y;
// }
// echo foo(4.0,6);   // Arguments


// function sub(...$numbers){
//     return array_sum($numbers);
// }
// echo sub(1,5,7,8);
 
// $array = [1,2,3,4];
// print_r(array_map(function($element){
//     return $element * 2;
// }, $array));

// // Arrow Function 

// $array2 = array_map(fn($numbers)=>$numbers*$numbers,$array);
// print_r($array2);


// $currentTime = date('m/d/y');
// echo $currentTime;



// $array = [1,2,3,4,6,7,8,9,10,12];

// $even = array_filter($array, fn($numbers)=> $numbers%2===0);
// $even = array_keys($even);
// print_r($even);


// class Transaction
// {
//     // private flaot $amount;
//     // private string $desc;
//     public function __construct($amount, $desc){
//         $this->amount =  $amount;
//         $this->desc =$desc;
//     }

//     public function addTax( float $rate): Transaction{
//         $this->amount += $this->amount * $rate/100;
//         return $this;
//     }
//     public function applyDiscount(float $rate): Transaction{
//         $this->amount-=$this->amount*$rate/100;
//         return $this;
//     }
//     public function getAmount(): float{
//         return $this->amount;
//     }
// }
// $amount =  (new Transaction(100, 'amo'))
// ->addTax(10)
// ->applyDiscount(5)
// ->getAmount();
// // $trans->amount = 15;s
// var_dump($amount);


// $str = '{"a":1, "b":2,"c":3}';
// $arr = json_decode($str);// second parameter finds a array
// var_dump($arr);

// $obj = [1,3,5];
// var_dump((object) $obj);

// class Transactions
// {
//     public function __construct(
//         private float $amount,
//         private $desc
//         ){
//            $this->amount= $amount;
//             $this->desc = $desc;
//             echo $amount;
        

//     }
// }

// $trans = new Transactions (4,'test');


// class person{
//     public $name ,$age;

//     public function __construct($name= "No Name",$age= 22){
//         $this->name = $name;
//         $this->age = $age;
//     }

//     function show() {

//         echo "my name is " . $this->name. " and age is " . $this->age;
//     }

// }
// $p1= new person("Ram Kumar",25);
// $p2= new person("Shyam",26);
// // $p1->name= "Abhi";
// // $p1->age= 20;
// $p1->show();
// $p2->show();



// class person{
//     public $name;
//     public function __construct($n){
//         $this->name = $n;
//     }
//     function show() {
//         echo "my name is . $this->name";
//     }
// }


class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age = $a;
        $this->salary = $s;

    }
    function info(){
        echo "<h3>Employee Profile</h3>";
        echo  "Employee Name :  $this->name";
        echo "Employee Age :  $this->age";
        echo "employee Salary :  $this->salary";
    }
}

class manager extends employee{
    
}
$e1 = new manager("ram", 25,2000);

$e1->info();

?>

