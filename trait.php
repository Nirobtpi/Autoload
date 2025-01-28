<?php 

trait A{
    function name(){
        echo "Nirob\n";
    }
    function read(){
        echo "Book";
    }
}
class B{
    function eat(){
        echo "Eating\n";
    }
    function play(){
        echo "Playing";
}
}

class C extends B{
    use A;
    
}

$obj=new C();
$obj->eat();
$obj->name();

