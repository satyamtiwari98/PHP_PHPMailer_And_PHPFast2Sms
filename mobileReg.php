<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
    
    * {

    padding: 0%;
    margin: 0%;
    
    }
    body {

    background-color: bisque;

    }

    h1 {
    text-align: center;
    color: brown;
    }

    </style>

    <title>Mobile Registeration</title>
</head>
<body>

<h1 class="notify">Registration Form</h1>
   

  <div class="container-fluid">
  <form method="POST" action="VerifyMobile.php" id="formData">
  <div class="mb-3">
  <label  class="form-label">Name :- </label>
  <input type="text" class="form-control" name="name" placeholder="Enter Your Name" aria-label="Username" aria-describedby="basic-addon1" required>
</div>
  <div class="mb-3">
    <label class="form-label">Mobile Number :- </label>
    <input type="number" class="form-control" name="mobile" id="exampleInputEmail1" placeholder="Enter Your Mobile Number" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your Mobile Number with anyone else.</div>
  </div>
 
  <input type="submit" class="btn btn-primary"  value="submit"/>
</form>

  </div>
    
</body>
</html>