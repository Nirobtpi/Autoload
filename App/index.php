<?php 
require_once __DIR__.'/autoload.php';

use App\Student\Student;
use App\Student\Utils\Utils as sUtils;
use App\Teacher\Teacher;
use App\Teacher\Utils\Utils;
// use App\Student\Utils\Utils as Stutils;

// $student=new Student();
// $student->info();
$teacher=new Teacher();
$teacher->info();
$utile=new Utils;
$utile->info();
$Stutils=new sUtils;
$Stutils->info();
$map = [
    "A" => ["B", "C"],
    "B" => ["A", "D", "E"],
    "C" => ["A", "F"],
    "D" => ["B", "G"],
    "E" => ["B", "H"],
    "F" => ["C"],
    "G" => ["D", "H"],
    "H" => ["E", "G"],
];


function dfs($graph, $start, $visited = []) {
    $visited[] = $start;
    foreach ($graph[$start] as $node) {
        if (!in_array($node, $visited)) {
            dfs($graph, $node, $visited);
        }
    }
    return $visited;
}

print_r(dfs($map, "A"));


$numbers=[1,2,3,4,5,6,7,8,9,10,12,11,12,14,15,5];

$total=0;

foreach ($numbers as $value) {
    $total=$total+$value;
}
echo $total;
echo count($numbers);

function arr(){
    $number=func_get_args();
    $total=0;
    foreach ($number as $value) {
        $total=$total+$value;
    }
    return $total;
}
echo $total;

?>