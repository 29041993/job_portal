<?php
include('include/header.php');
include('include/sidebar.php');
?>
<?php
include('connection/db.php');
$query = mysqli_query($conn, "select * from admin_login where admin_type='2'");
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Tablero de mando</a></li>
            <li class="breadcrumb-item"><a href="create_company.php">Empresas</a></li>
            <li class="breadcrumb-item"><a href="#">Agregar Empresas</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Agregar Empresas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">

            </div>
            <!-- <a class="btn btn-primary" href="add_customer.php">Agregar Cliente</a> -->
        </div>
    </div>
    <div style="width: 60%; margin-left: 20%; background-color: #A0A7A8;">

        <!-- Formulario -->
        <form action="" method="POST" style="margin: 3%; padding:3%;" name="company_form" id="company_form">
            <div id="msg"></div>
            <div class="form-group">
                <label for="Customer Email">Nombre de la Empresa</label>
                <input type="text" name="company" id="company" class="form-control" placeholder="Introduzca el nombre de la Empresa">
            </div>
            <div class="form-group">
                <label for="Customer Username">Descripción</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="Customer Username">Seleccione el administrador de la empresa</label> 
                <select name="admin" id="admin" class="form-control">
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <option value="<?php echo $row['admin_email'];?>"><?php echo $row['admin_email'];?></option>;
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-block btn-success" placeholder="Guardar" name="submit" id="submit">
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
<script>
    $(document).ready(function() {
        $("#submit").click(function() {
            var description = $("#description").val();
            var company = $("#company").val();
            if (description == '') {
                alert("por favor, introduzca la descripción");
                return false;
            }

            if (company == '') {
                alert("por favor, introduzca el nombre de la empresa");
                return false;
            }
            var data = $("#company_form").serialize();

            $.ajax({
                type: "POST",
                url: "company_add.php",
                data: data,
                success: function(data) {
                    alert(data); // manda un mensaje que se configuro en customer_add.php para eso sirve ajax 
                    //alert(data); //---> muestra donde esta el error para guardar los datos 
                }
            });
        });
    });
</script>

</body>

</html>