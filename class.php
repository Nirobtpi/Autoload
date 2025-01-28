<?php 

class Person{
    public $name;
    public $age;
    public $gender;
    public function __construct($name,$age,$gender){
        $this->name=$name;
        $this->age=$age;
        $this->gender=$gender;
    }
    public function info($name,$age){
        echo $this->name=$name;
        echo $this->age=$age;
    }
};
$person=new Person("Nirob",22,"Male");
// echo $person->name;
// echo $person->age;
// echo $person->gender;
$person->info("Nirob",25);

interface info{
    public function info($name,$age);
}
class Name implements info {
    public function info($name,$age){
        echo "My name is $name and my age is $age";
    }
}
$ojb=new Name();
$ojb->info("Nirob",22);

abstract class Controller{
    function Name(){
        echo "My Name Is Nirob";
    }
}
class Controller2 extends Controller{
    
}
$obj=new Controller2();
$obj->Name();

abstract class Car{
    abstract function run();
}
class BMW extends Car{
    public function run(){
        echo "BMW can run\n";
    }
    public static function stop(){
        echo "BMW can stop";
    }
}
echo "\n";
$bmw=new BMW();
$bmw->run();
BMW::stop();

interface information{
    public static function info($name,$age);
}
class Me implements information{
    public static function info($name,$age){
        echo "My name is $name and my age is $age";
    }
}
Me::info("Nirob",22);


?>