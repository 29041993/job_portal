<?php
$conn=mysqli_connect("localhost","root","","job_portal");
$query = mysqli_query($conn, "select * from admin_login where admin_email = '{$_SESSION['email']}' and admin_type = '1'"); // Esta parte sirve para poder identificar a los super administradores y solo ellos modifiquen

if (mysqli_num_rows($query)>0) {
    

?>

<div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Tablero de mando <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Ordenes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Productos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customers.php">
                                <span data-feather="users"></span>
                                Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="job_create.php">
                                <span data-feather="bar-chart-2"></span>
                                Creación de Empleo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="create_company.php">
                                <span data-feather="layers"></span>
                                Empresas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apply_jobs.php">
                                <span data-feather="layers"></span>
                                Solicitudes
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="category.php">
                                <span data-feather="file-text"></span>
                                Categoria del empleo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Year-end sale
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

<?php
}else{
?>
<div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Tablero de mando <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Ordenes
                            </a> -->
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Productos
                            </a> -->
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="customers.php">
                                <span data-feather="users"></span>
                                Clientes
                            </a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="job_create.php">
                                <span data-feather="bar-chart-2"></span>
                                Creación de Empleo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apply_jobs.php">
                                <span data-feather="layers"></span>
                                Solicitar Empleo
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Social engagement
                            </a> -->
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Year-end sale
                            </a> -->
                        </li>
                    </ul>
                </div>
            </nav>
<?php
}
?>