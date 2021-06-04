<?php

$server_name = "localhost";
$user_name = "root";
$pass = "" ;


$conn = new mysqli($server_name , $user_name , $pass);
if(!$conn)
{
    die("not connected");
}
else{
    echo "yes connected";
}
echo "<br>";
$sql = "CREATE DATABASE test_1";
$result = $conn->query($sql) ;
if($result === true )
{
    echo "database created ";
}else{
    echo "database not created";
}


?>