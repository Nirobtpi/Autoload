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

?>