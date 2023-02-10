<?php
include('connection/db.php');
$del = $_GET['del'];

$query = mysqli_query($conn,"delete from company where company_id = '$del'");
if ($query) {
    echo "<script>alert('El registro ha sido eliminado con éxito')</script>";
    header('location:create_company.php');
} else {
    echo "<script>alert('El registro ha sido eliminado con éxito')</script>";
}
