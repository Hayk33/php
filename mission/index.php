<?php
use Hayk\Database\Connection;

require_once('autoload.php');

// $obj = new Connection();
// var_dump($obj);

// class StatFu{
//     public static function dog(){
//         return "dog";
//     }
// }
// echo StatFu::dog();
// echo "<br><br>";



// interface Hayk4{
//     public function roomSize();
//     public function roomColor();
// }
// class Hayk5 implements Hayk4{
//     public function roomSize(){
//         return 55;
//     }
//     public function roomColor(){
//         return "black";
//     }
// }
// $object = new Hayk5;
// echo $object->roomSize();
// echo "<br><br>";




// trait hayk6{
//     function treeSize(){return "hi";}
//     function treeAge(){return " world";}
// }

// class hayk7{
//     use hayk6;
// }
// $obj6= new hayk7;
// echo $obj6->treeSize();
// echo "<br><br>";



// trait hayk8 {
//     function treeSize(){return "hi1";}
//     function treeAge(){return " world1";}
// }
// trait hayk9 {
//     function treeSize(){return "hi2";}
//     function treeAge(){return " world2";}
// }

// class hayk10{
//     use hayk8,hayk9{
//         hayk8::treeSize insteadof hayk9;
//         hayk9::treeAge insteadof hayk8;
//         hayk9::treeAge as age;
//     }
// }
// $obj7 = new hayk10;
// echo $obj7->treeSize();
// echo $obj7->treeAge();
// echo $obj7->age();
// echo "<br><br>";


// trait dog1{
//     public function hi(){
//         return "hi".$this->world();
//     }
//     abstract public function world();
// }
// class dog2{
//     use dog1;
//     public function world(){
//         return " world";
//     }
// }
// $obj8 = new dog2;
// echo $obj8->hi();
// echo "<br><br>";




// abstract class Hayk2{
//     abstract protected function carColor();
//     public function getCarColor(){
//         return $this->carColor();
//     }
// }



// class Hayk3 extends Hayk2{
//     public function carColor(){
//         return "green";
//     }
// }




// $obj5= new Hayk3;
// echo $obj5->carColor();


// class FatherClass {
//     public function sayHello() {
//         echo "Hello from parent!";
//     }

//     public function callStatic() {
//         static::sayHello();
//     }

//     public function callSelf() {
//         self::sayHello();
//     }
// }

// class Child extends FatherClass {
//     public function sayHello() {
//         echo "Hello from child!";
//     }
// }

// $child = new Child();
// $child->callStatic(); //hello from parent!
// $child->callSelf(); //



// interface IA {
//     public function saySomething();
// }

// interface IB {
//     public function saySomething();
// }

// class SomeClass implements IA, IB {
//     public function saySomething() {
//         echo '';
//     }
// }

// class ClassName{
    
//     function __set($name, $surname){
//     echo "$name" . "->" . "$surname not found<br>";
//     }
    
//     function __get($name){
//         echo "$name not found! <br>";
//     }
// }
//     function __call($name, $value){
//     echo "$methodName($value) not found <br>";
// }
// $obj = new ClassName;
// $obj->a;
// $obj->front = 5;
// // $obj->runTest('barev');

// $object= new Hayk\Database\Connection;
// $object->loading();
// $arrayName = ['1' => 'ff','2' => 'yg','3' => 'kj'];
// print_r($arrayName);

include "books.php";

// $array1 = [
//     ["author" => "Гарри Гаррисон", "title" => "К западу от Эдема", "pubDate" => "4/13/2017"],
//     ["author" => "Гарри Гаррисон", "title" => "К западу от Эдема", "pubDate" => "4/13/2017"],
//     ["author" => "Гарри Гаррисон", "title" => "К западу от Эдема", "pubDate" => "4/13/2017"],
// ];

// print_r($array1);

//https://alltop10.org/10-knig-kotoryie-unesut-vas-v-drugoy-mir/
$xml = simplexml_load_file('books.xml');
print_r($xml);
?>









