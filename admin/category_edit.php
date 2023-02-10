<?php
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');

$id = $_GET['edit'];
$query = mysqli_query($conn, "select * from job_category where id = '$id' ");
while ($row = mysqli_fetch_array($query)) {
    $category = $row['category'];
    $des = $row['des'];
}

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Tablero de mando</a></li>
            <li class="breadcrumb-item"><a href="category.php">Categoria</a></li>
            <li class="breadcrumb-item"><a href="#">Actualizar Datos de Categoria</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Actualizar Datos de Categoria</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">

            </div>

        </div>
    </div>
    <div style="width: 60%; margin-left: 20%; background-color: #A0A7A8;">

        <!-- Formulario -->
        <form action="" method="POST" style="margin: 3%; padding:3%;" name="customer_form" id="customer_form">
            <div id="msg"></div>
            <div class="form-group">
                <label for="Customer Email">Categoria del trabajo</label>
                <input type="category" name="category" id="category" value="<?php echo $category; ?>" class="form-control" placeholder="Introduzca la categoria del trabajo">
            </div>
            <div class="form-group">
                <label for="Customer Username">Descripción</label>
                <textarea name="des" id="des" class="form-control" cols="30" rows="10"><?php echo $des; ?></textarea>
            </div>
                <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit']; ?>">
            <div class="form-group">
                <input type="submit" class="btn btn-block btn-success" placeholder="update" name="submit" id="submit">
            </div>
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

</body>

</html>

<?php
include('connection/db.php');
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $category = $_POST['category'];
    $des = $_POST['des'];

    $query1 = mysqli_query($conn, "update job_category set category = '$category', des = '$des' where id='$id'");
    if ($query1) {
        
        echo "<script>alert('Los datos han sido actualizados con éxito')</script>";
        
    } else {
        echo "<script>alert('Algún error, por favor, inténtelo de nuevo')</script>";
    }
}

?>