<html>

<head>
</head>

<body>

<?php
$x = "Hello World" ;
$y = "hello world_2" ;

echo($x) ;
echo "<br>" ;
echo($y) ;

echo("<br>") ;
$num = 5985 ;
var_dump($num) ;

var_dump("char") ;

var_dump(12.234) ;

echo("<br>");
function bool_chech()
{
    $number_1 = 10 ;
    $number_2 = 30 ;
    
    return($number_1 + $number_2) ;
}

function abul()
{
    $number_1 = true ;
    if( $number_1 == true)
        echo("this is true");
    else
        echo("this is false");
}

function array_test()
{
    $cars = array("Volbo" , "BMW" , "Toyota") ;
    var_dump($cars) ;
    echo("<br>");
    echo($cars[0]);
    echo ("<br>");
}

echo bool_chech() ;
echo("<br>");
abul() ;
echo("<br>") ;
array_test() ;


?>

</body>

</html>