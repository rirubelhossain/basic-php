<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


	$servername = "localhost";
	$username = "root";
	$pass = "";
//	$dbname = "php_";

	$conn = new mysqli($servername , $username ,$pass );
/*
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
    $sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message')";
    if($conn->query($sql) === true )
	{
		echo "data has been inserted";
	}
	else{
		echo "data not inserted";
	}

*/	
	if($conn->connect_error)
    {
        die("not connected");
    }
    else{
        echo "yes";
    }

	

?>
</body>
</html>