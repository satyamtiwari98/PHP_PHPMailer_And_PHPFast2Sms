<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
    body {

        background-color: bisque;

    }

    h1 {

        text-align: center;
        color: brown;
        padding: 200px;
        
    }
    #msg {

        text-align: center;

    }

    b {
        
        color: orange;
    }
    </style>
    <title>Home</title>
</head>
<body>
<div class="container-fluid">

<h1>Registeration Done SuccessFully !!!!</h1>
<div id="msg">
<?php

if(isset($_SESSION['naam'])&&isset($_SESSION['num'])) {

    echo "<h2>Name : <b>".$_SESSION['naam']."</b></h2><br>";
    echo "<h2>Mobile Number : <b>".$_SESSION['num']."</b></h2><br>";
    
}


?>
</div>
</div>

    
</body>
</html>