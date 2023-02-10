<?php
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Tablero de mando</a></li>
            <li class="breadcrumb-item"><a href="#">Empleos</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Todos los Empleos</h1>
    </div>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#SL</th>
                <th>Titulo del Empleo</th>
                <!-- <th>Descripción</th> -->
                <th>Nombre del Solicitante</th>
                <th>Email del Solicitante</th>
                <!-- <th>Número del Solicitante</th> -->
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('connection/db.php');
            $a = 1;
            $sql = "SELECT * FROM job_apply LEFT JOIN all_jobs ON job_apply.id_job = all_jobs.job_id WHERE customer_email = '{$_SESSION['email']}'";
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $row['job_title']; ?></td>
                    <!-- <td><?php echo $row['des']; ?></td> -->
                    <td><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['applicant']; ?></td>
                    <!-- <td><a href="http://localhost/job_portal/files/<?php //echo $row['file'] ?>">Descargar archivo</a></td> -->
                    <td>
                        <div class="row">
                            <a href="view_applied_jobs.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></a>
                            <!-- <a href="job_delete.php?del=<?php //echo $row['job_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a> -->
                        </div>
                    </td>
                </tr>
            <?php $a++; } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>#SL</th>
                <th>Titulo del Empleo</th>
                <th>Nombre del Solicitante</th>
                <!-- <th>Descripción</th> -->
                <th>Email del Solicitante</th>
                <!-- <th>Número del Solicitante</th>   -->
                <th>Acción</th>             
            </tr>
        </tfoot>
    </table>

    <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
    <div class="table-responsive">

    </div>
</main>
</div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>

<!-- datatables plugin -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

</body>

</html>