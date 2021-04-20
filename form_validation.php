<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action = "index_call.php" method = "POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name = "name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input name = "email" type="text" class="form-control" id="exampleInputPassword1" placeholder="Email">
    </div>
    
    <button type="submit" class="btn btn-primary" name = "send_message">Submit</button>
    </form>

</body>
</html>