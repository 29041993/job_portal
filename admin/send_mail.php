<?php
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');
?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin_dashboard.php">Tablero de mando</a></li>
                        <li class="breadcrumb-item"><a href="job_create.php">Enviar Correo Electrónico</a></li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Enviar Correo Electrónico</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                        </div>
                        <!-- <a class="btn btn-primary" href="add_customer.php">Agregar Cliente</a> -->
                    </div>
                </div>

                <div style="width: 60%; margin-left: 20%; background-color: #A0A7A8;">
                <!-- Formulario -->
                    <form action="phpmailer.php" method="post" style="border:1px solid trasparent; margin:3%; padding:3%;" name="job_form" id="job_form">
                    <?php
                    include('connection/db.php');
                    $id=$_GET['id'];
                    $sql="SELECT * FROM job_apply LEFT JOIN all_jobs ON job_apply.id_job = all_jobs.job_id WHERE id = '$id'";
                    $query = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($query)){

                    ?>
                    <h1><?php echo strtoupper($row['first_name']); ?> <?php echo strtoupper($row['last_name']); ?></h1>
                    <hr>
                    
                    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="">Para: </label>
                        <td><input type="email" name="to" id="to" class="form-control" value="<?php echo $row['applicant']; ?>"></td>
                    </div>

                    <div class="form-group">
                        <label for="">De: </label>
                        <td><input type="email" name="from" id="from" class="form-control" placeholder="De...""></td>
                    </div>

                    <div class="form-group">
                        <label for="">Contenido: </label>
                        <td><textarea type="email" name="body" id="body" class="form-control" cols="30" rows="10">Estimada/o <?php echo strtoupper($row['first_name']); ?><?php echo strtoupper($row['last_name']); ?>
                        </textarea></td>
                    </div>
                    
                    <?php } ?>

                    <input type="submit" name="submit" id="submit" value="Enviar" class="btn btn-success btn-block">

                    </form>
                <!-- Fin Formulario -->

                </div>
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
    <script>
        $(document).ready(function(){
            $("#submit").click(function(){
                var job_title = $("#job_title").val();
                var description = $("#description").val();
                var countryId = $("#countryId").val();
                var stateId = $("#stateId").val();
                var cityId = $("#cityId").val();

                    if (job_title == '') {
                        alert("por favor, introduzca el titulo del empleo");
                        return false;
                    }

                    if (description == '') {
                        alert("por favor, introduzca la descripción");
                        return false;
                    }

                    if (countryId == '') {
                        alert("por favor, introduzca el país");
                        return false;
                    }

                    if (stateId == '') {
                        alert("por favor, introduzca la provincia");
                        return false;
                    }

                    if (cityId == '') {
                        alert("por favor, introduzca las ciudad");
                        return false;
                    }
                var data = $("#job_form").serialize();

                
            });
        });
    </script>

</body>

</html>

<?php
include('connection/db.php');
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $job_title = $_POST['job_title'];
    $description = $_POST['description'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    

    $query1 = mysqli_query($conn, "update all_jobs set job_title = '$job_title', des = '$description', country = '$country', state = '$state', city = '$city' where job_id='$id'");
    if ($query1) {
        echo "<script>alert('Los datos han sido actualizados con éxito')</script>";
    } else {
        echo "<script>alert('Algún error, por favor, inténtelo de nuevo')</script>";
    }
}



?>