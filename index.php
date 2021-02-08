<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
    *{
    padding: 0%;
    margin: 0%;
    
}
body{
    background-color: bisque;
}

h1{
    text-align: center;
    color: brown;
}
    </style>

    <title>Php Mailer Task</title>

  </head>
  <body>
    <h1 class="notify">Registration Form</h1>
    <h3></h3>
  <div class="container-fluid">
  <form method="POST" action="logic.php" id="formData">
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Name :- </label>
  <input type="text" class="form-control" name="name" placeholder="Enter Your Name" aria-label="Username" aria-describedby="basic-addon1" required>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Address :- </label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Your Email id" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
 
  <input type="submit" class="btn btn-primary"  value="submit"/>
</form>

  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  
  </body>
</html>