<?php

print "hello"."world";
print "<br>";
echo "hello"."world";



///var_dump() ;
$var = 10 ;
echo "<br>";
var_dump($var) ;
$vc = "Rubelhossain";
$a = var_dump($vc) ;
echo $a ;





$var = "rubelhossain";
$count = strlen($var);
echo "<br>";
echo $count ;

$r = strrev($var);
echo $r ."<br>";

$va = 0 ;
for($i = 0 ; $i < $count ; ++$i )
{
    echo $var[$i]."<br>";
    ++$va ;
}
echo $va ;

echo "<br>";

$ar = array("rubel" , "rasel" , "amin");

foreach ($ar as $value) {
    echo $value." ";
}

echo "<br>";




$rr = array("Rubel"=>"1" , "Rasel"=>"2" , "Amin"=>"3");

foreach($rr as $key => $value) {
    echo $key=$value ;
}



$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br>";

$kal = array("Rubel"=>"1", "Rasel"=>"2" , "Amin"=>"3");



$length = count($kal);

foreach($kal as $z => $l){
    echo $z ." ". $l."<br>";
}

$new_array = array("BUBT", "DU" , "JU");
$count_ar = count($new_array);

foreach ($new_array as $key ) {
    echo "the value is =".$key."<br>" ;
}
///Multidimensional array 

$cars = array(array("volvo" , 1 , 2 ),
array("toytota" , 10 , 20 )
);

for($i = 0 ; $i < 2 ; $i++)
{
    for($j = 0 ; $j < 3 ; $j++)
    {
        echo $cars[$i][$j]."<br>" ;
    }
}

echo "<br>";

$sort_again = array(2, 1, 4 ,3);
rsort($sort_again);

$count_2 = count($sort_again) ;

echo "the total element is = ".$count_2 ;

echo "<br>";

for($i = 0 ; $i < $count_2 ; ++$i)
{
    echo $sort_again[$i] ;
}
echo "<br>";













































 










?>