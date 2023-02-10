<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Floating labels example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body>
    <form class="form-signin" action="sign_up.php" method="POST">

        <div class="text-center mb-4">
            <img class="mb-4" src="img/logo_vs_uce.jpg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Por favor, regístrese</h1>
        </div>

        <div class="form-label-group">
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Dirección de correo electrónico">
            <label for="inputEmail">Dirección de correo electrónico</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contraseña">
            <label for="inputPassword">Contraseña</label>
        </div>

        <div class="text-center mb-4">
            <input type="first_name" id="inputEmail" class="form-control" name="first_name" placeholder="Introduzca su Nombre">

        </div>

        <div class="text-center mb-4">
            <input type="last_name" id="last_name" class="form-control" name="last_name" placeholder="Introduzca su Apellido">
        </div>

        <div class="text-center mb-4">
            <input type="Number" id="mobile_number" class="form-control" name="mobile_number" placeholder="Introduzca su Número de Teléfono">

        </div>

        <div class="text-center mb-4">
            <label for="inputEmail">Fecha de Nacimiento:</label>
            <input type="date" id="dob" class="form-control" name="dob" placeholder="Introduzca su Fecha de Nacimiento">

        </div>


        <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Guardar">
        <div class="form-label-group" style="text-align: center;"><br>
            <a href="job-post.php">¿Ya tienes una cuenta?</a>
        </div>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2022-2023</p>
    </form>
</body>

</html>
<?php
include('connection/db.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $mobile_number = $_POST['mobile_number'];

    $query = mysqli_query($conn, "insert into applicant(email, password, first_name, last_name, dob, mobile_number) 
    values('$email', '$password', '$first_name', '$last_name', '$dob', '$mobile_number')");

    if ($query) {
        echo "<script>alert('Ahora puedes iniciar sesión')</script>";
        header('location:job-post.php');
    } else {
        echo "<script>alert('Por favor, inténtelo de nuevo')</script>";
    }
}
?>