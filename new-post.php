<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Publicar un trabajo</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">
</head>

<body>
  <form class="form-signin" action="new-post.php" method="POST">
    <div class="text-center mb-4">
      <img class="mb-4" src="img/logo_vs_uce.jpg" alt="" width="225" height="225" style="border-radius: 8px;">
      <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>
    </div>

    <div class="form-label-group">
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputEmail">Dirección de correo electrónico</label>
    </div>

    <div class="form-label-group">
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <label for="inputPassword">Contraseña</label>
    </div>

    <!-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recuerdarme
        </label>
      </div> -->
    <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Iniciar sesión">
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2022-2023</p>
  </form>
</body>

</html>
<?php
include('connection/db.php');

if (isset($_POST['submit'])) {
  
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $query = mysqli_query($conn, "select * from admin_login where admin_email = '$email' and admin_pass = '$pass' and admin_type = '2' ");

 

    if (mysqli_num_rows($query) > 0) {

      $_SESSION['email'] = $email;
      header('location:admin/admin_dashboard.php');

    } else {
      echo "<script>alert('Email o contraseña incorrecta, intentá de nuevo')</script>";
    }
  
}
?>