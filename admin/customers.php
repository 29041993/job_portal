<?php
include('include/header.php');
include('include/sidebar.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Tablero de mando</a></li>
            <li class="breadcrumb-item"><a href="#">Clientes</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Clientes</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">

            </div>
            <a class="btn btn-primary" href="add_customer.php">Agregar Cliente</a>
        </div>
    </div>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#SL</th>
                <th>Email</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Tipo de administrador</th>
                <th>Acción</th>

            </tr>
        </thead>
        <tbody>
            <?php
            include('connection/db.php');

            $query = mysqli_query($conn, "select * from admin_login");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['admin_email']; ?></td>
                    <td><?php echo $row['admin_username']; ?></td>
                    <td><?php echo $row['admin_pass']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['admin_type']; ?></td>
                    <td>
                        <div class="row">
                            <a href="customer_edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="customer_delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>#SL</th>
                <th>Email</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Tipo de administrador</th>
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