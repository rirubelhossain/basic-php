<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
</head>
<body>
    <form action = "index_2_val.php" method = "POST">
        Name  : <input type = "text" name = "name"><br><br>
        Email : <input type = "text" name = "email"><br><br>
        website : <input type = "text" name = "website"><br><br>
        Comment : <textarea type = "text" row ="5" cols="40" name = "comment"></textarea><br><br>

        Gender:
                <input type = "radio" name = "gender" value = "female">Female
                <input type = "radio" name = "gender" value = "male">Male
                <input type = "radio" name = "gender" value = "others">Others
                <br>
                <button type = "submit" name = "send_message">Submit</button>



    </form>

</body>
</html>