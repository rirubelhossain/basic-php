<html>
<head>
</head>


<body>

<?php
echo "hello world" ;

$number = 10 ;
$number_2 = 30 ;

$summation = $number + $number_2 ;

echo $summation ;
echo "\n";
if( $number > $number_2 )
    echo "number 1 is large\n";
else
    echo "The number 2 is large\n";

function function_sum($num )
{
    return($num * 10 );
}

$catch_the_result = function_sum(12) ;
echo $catch_the_result ;


$string = "BUBT" ;
echo "Here is the ".$string." University<br>" ;
// here is the single line comment 

function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest();
  myTest();
  myTest();



?>


</body>


</html>