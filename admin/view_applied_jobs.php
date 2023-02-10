<?php
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="apply_jobs.php">Todos los Empleos</a></li>
            <li class="breadcrumb-item"><a href="#">Empleos Aplicados</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Empleos Aplicados</h1>
    </div>

            <form action="" style="border: 1px solid gray; width: 80%; margin-left: 10%; padding: 10px;">
            <?php
            include('connection/db.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM job_apply LEFT JOIN all_jobs ON job_apply.id_job = all_jobs.job_id WHERE id = $id ";
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
                
                    
                    <div class="form-group">
                        <label for="" style="font-weight:bolder ;">Título del Empleo: </label>
                        <td><?php echo $row['job_title']; ?></td>
                    </tr>
                    </div>

                    <div class="form-group">
                        <label for="" style="font-weight:bolder ;">Descripción del Empleo: </label>
                        <td><?php echo $row['des']; ?></td> 
                    </div>

                    <div class="form-group">
                        <label for="" style="font-weight:bolder ;">Nombre del Aplicante: </label>
                        <td><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                    </div>

                    <div class="form-group">
                        <label for="" style="font-weight:bolder ;">Email del Aplicante: </label>
                        <td><?php echo $row['applicant']; ?></td>
                    </div>
                    <div class="form-group">
                        <label for="" style="font-weight:bolder ;">Número del Aplicante: </label>
                        <td><?php echo $row['mobile_number']; ?></td>
                    </div>

                    <div class="form-group">
                        <label for="" style="font-weight:bolder ;">CV del Aplicante: </label>
                        <td><a href="http://localhost/job_portal/files/<?php echo $row['file'] ?>">Descargar archivo</a></td>
                    </div>

                    
            <?php } ?>
            <a href="send_mail.php?id=<?php echo $id; ?>" class="btn btn-success">Aceptado</a>
            <a href="reject_job.php?id=<?php echo $id; ?>" class="btn btn-danger">Rechazado</a>
            
            </form>

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