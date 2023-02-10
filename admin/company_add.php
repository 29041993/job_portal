<?php
include('connection/db.php');

$company = $_POST['company'];
$description = $_POST['description'];
$admin = $_POST['admin'];

$query = mysqli_query($conn, "insert into company(company, des, admin) values('$company','$description','$admin')");
// var_dump($query);

if ($query) {
    echo "Los datos han sido insertados con éxito";
} else {
    echo "Algún error, por favor, inténtelo de nuevo";
}

?>