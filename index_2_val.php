<?php
include 'text_input.php';

$name = $email = $comment = $website = $gender = "";

if($_SERVER['REQUEST_METHOD'] == "POST")
{   
    if(empty($_POST['name']))
    {
        $nameErr = "Name is Required";
    }else{
        $name = test_input($_POST['name']) ;
    }
    
    $email = test_input($_POST['email']);
    $comment = test_input($_POST['comment']) ;
    $website = test_input($_POST['website']) ;
    $gender = test_input($_POST['gender']);
}

echo "<h2>Your input value</h2>" ;
echo "<br>";

echo "The Name is = ".$name."<br>";
echo "The Email is = ".$email."<br>";
echo "The Comment is = ".$comment."<br>";
echo "The website is = ".$website."<br>";
echo "The gender is = ".$gender."<br>";


?>