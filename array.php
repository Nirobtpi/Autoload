<?php 
$array=['Apple','Banana','Cherry','Durian'];
// $slice=array_splice($array,0,0,"Jackfurits");
// array_splice($array,4,5,['Nirob','Saba','Sara']);
$array_Slice=array_slice($array,3);
print_r($array_Slice);
$furits=['Apple','Banana','Chery'];
array_push($furits,'Durain','Jackfurits');
echo "<br>";
print_r($furits);
// phpinfo();
// echo 'Tomorrow I \'ll learn PHP global variables.';
// echo $_SERVER['HTTP_USER_AGENT'];
$text="hello Wrold";
// $arr=str_split($text);
$red="<span style='color:red'>$text[0]</span>";
$value=substr($text,1);
echo $red.$value;
// print_r($arr);

$d='A00';
for($i=0;$i<5;$i++) {
    echo $d++."<br>";
};

$duplicate=[1,1,2,2,3,4,5,5];
$array=array_unique($duplicate);
print_r($array);
$a=array_push($duplicate,6,6,7,8,9,10,22,14,45,47);
print_r($duplicate);

?>