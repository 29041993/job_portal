<?php
include('connection/db.php');

$category = $_POST['category'];
$description = $_POST['description'];

$query = mysqli_query($conn, "insert into job_category(category, des) values('$category','$description')");

// var_dump($query);

if ($query) {
    echo "Los datos han sido insertados con éxito";
} else {
    echo "Algún error, por favor, inténtelo de nuevo";
}

?>