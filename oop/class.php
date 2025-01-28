<?php 

trait Common{
    function start($name){
        return "$name is starting\n";
    }
    function drive($name){
        return "$name is driving\n";
    }
    function run($name){{ 
        return "$name is running\n";
    }}

}
class vehicle{

    protected $name;
    protected $color;
    protected $price;

    function get_color($color){
        $color= $this->color=$color;
        return "The color is $color\n";
    }

}

class Bmw extends vehicle{
    use Common;
}

class Car extends vehicle{
    use Common;

}

$car=new Car();
echo $car->start("Toyota");
echo $car->get_color("Red");
echo $car->drive("Toyota");
echo $car->run("Toyota");

$odys=new Bmw();
echo $odys->start("BMW");

interface Address{
    public function address();
}
class location implements Address{
    public function address(){
        return "Dhaka";
    }
}
$location=new location();
echo $location->address();


?>