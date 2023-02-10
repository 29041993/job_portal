<?php
include('connection/db.php');

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$admin_type = $_POST['admin_type'];

$query = mysqli_query($conn, "insert into admin_login(admin_email, admin_pass, admin_username, first_name, last_name, admin_type)values('$email','$password','$username','$first_name',
'$last_name','$admin_type')");

var_dump($query);

if ($query) {
    echo "<div class='alert alert-success'>Los datos han sido insertados con éxito</div>";
} else {
    echo "<div class='alert alert-danger'>Algún error, por favor, inténtelo de nuevo</div>";
}

?>