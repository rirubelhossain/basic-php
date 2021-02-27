<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="rubel">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['rubel'];
    $check_store = empty($name);
    if (!$check_store) {
        echo $name;
        
    } else {
        echo "Name is empty";
    }
}
?>

</body>
</html>