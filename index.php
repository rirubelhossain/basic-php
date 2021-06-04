<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "POST">
        <h2>Create a account </h2>
        <input type = "text" name = "first_name"><br>
        <input type = "text" name = "last_name"><br>
        <button type = "submit">submit</button>

    </form>
</body>
</html>

<?php

$first_name = $_POST['first_name'] ;
$last_name = $_POST['last_name'] ;

echo $first_name."<br>" ;
echo $last_name."<br>" ;


if($first_name == $last_name)
{
    echo "both are same value" ;
}
else{
    echo "both are not same value";
}





?>






