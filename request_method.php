<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request</title>
</head>
<body>
    
    <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">
        <input type = "text" name = "fname">
        <input type = "submit">
    </form>


    <?php
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = htmlspecialchars($_POST['fname']);
        if(empty($name))
        {
            echo "name is empty";
        }
        else{
            echo $name ;
        }
    }
    
    ?>


</body>
</html>



<?php
echo $_SERVER['HTTP_HOST'] ;

?>