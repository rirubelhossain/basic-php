<?php
$servername = "localhost";
$username = "root";
$pass = "";

$conn = new mysqli($servername , $username , $pass);

if($conn->connect_error)
{
    echo "not connected"."<br>";
}
else{
    echo "yes"."<br>";
}

?>