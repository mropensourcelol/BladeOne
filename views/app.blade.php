<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  img {
  width: 490px;
  height: 490px;
  border:2px solid black;
  background: url(img/duck.png) no-repeat;
  -moz-box-shadow: 0px 6px 5px #ccc;
  -webkit-box-shadow: 0px 6px 5px #ccc;
  box-shadow: 0px 6px 5px #ccc;
  -moz-border-radius:190px;
  -webkit-border-radius:190px;
  border-radius:190px;
}
</style>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GibJohn Tutoring</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home Page</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
      <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
    </ul>
  </div>

</nav>

<div class="container my-4">
    <div class="row text-center">
      <!--Grid column-->
      <div class="col-md-6 mb-4">
        <div class= " img"> <h2 class="my-5 h2">Intricate learning environments</h2> </div>
        <img class="rounded-circle " alt="100x100" src="wimage.png"
          data-holder-rendered="true">
      </div>
      <div class="col-md-6 mb-4">

        <h2 class="my-5 h2"><p class="text-right">Welcome to GibJohn Tutoring - The digital tutoring solution for all age ranges and individuals seeking deep learning.</p></h2>

      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>






</body>
</html>
