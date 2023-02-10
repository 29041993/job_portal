<?php
include('include/header.php');
include('include/sidebar.php');
?>
<?php 
include('connection/db.php');
echo $edit = $_GET['edit'];
$query = mysqli_query($conn,"select * from all_jobs where job_id = '$edit'");
// var_dump($query);
while ($row = mysqli_fetch_array($query)) {    //    row ======>>>>> es fila, 
    $title = $row['job_title'];
    $description = $row['des']; // la parte que esta en comillas simples '' hace referencia a la fila de La Base Datos
    $country = $row['country'];
    $state = $row['state'];
    $city = $row['city'];
}
?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin_dashboard.php">Tablero de mando</a></li>
                        <li class="breadcrumb-item"><a href="job_create.php">Lista de Empleos</a></li>
                        <li class="breadcrumb-item"><a href="#">Editar Empleo</a></li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Editar Empleo</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                        
                        </div>
                        <!-- <a class="btn btn-primary" href="add_customer.php">Agregar Cliente</a> -->
                    </div>
                </div>
                <div style="width: 60%; margin-left: 20%; background-color: #A0A7A8;">

                <!-- Formulario -->
                    <form action="" method="post" style="margin:3%; padding:3%;" name="job_form" id="job_form">
                    <div id="msg"></div>
                        <div class="form-group">
                            <label for="Customer Email">Título del Empleo</label>
                            <input type="text" value="<?php echo $title; ?>" name="job_title" id="job_title" class="form-control" placeholder="Introduzca el Empleo">
                        </div>
                        <div class="form-group">
                            <label for="Customer Username">Descripción</label>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="10"><?php echo $description; ?></textarea>
                        </div>
                        <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit']; ?>">
                        <div class="form-group">
                            <label for="">País</label>
                            <select name="country" class="countries form-control" id="countryId" value="<?php echo $country; ?>">
                                <option value="" hidden>Seleccione el País</option>
                                <option value="Ecuador">Ecuador</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Provincia</label>
                            <select name="state" class="states form-control" id="stateId" value="<?php echo $state; ?>">
                                <option value="" hidden>Seleccione la Provincia</option>
                                <option value="Azuay">Azuay</option>  
                                <option value="Cañar">Cañar</option>  
                                <option value="Loja">Loja</option>  
                                <option value="Carchi">Carchi</option>  
                                <option value="Imbabura">Imbabura</option>  
                                <option value="Pichincha">Pichincha</option>  
                                <option value="Cotopaxi">Cotopaxi</option>  
                                <option value="Tungurahua">Tungurahua</option>  
                                <option value="Bolívar">Bolívar</option>  
                                <option value="Chimborazo">Chimborazo</option>  
                                <option value="Sto. Domingo de los Tsachilas">Sto. Domingo de los Tsachilas</option>  
                                <option value="Esmeraldas">Esmeraldas</option>  
                                <option value="Manabí">Manabí</option>  
                                <option value="Guayas">Guayas</option>  
                                <option value="Los Ríos">Los Ríos</option>  
                                <option value="El Oro">El Oro</option>  
                                <option value="Santa Elena">Santa Elena</option>  
                                <option value="Sucumbíos">Sucumbíos</option>  
                                <option value="Napo">Napo</option>  
                                <option value="Pastaza">Pastaza</option>  
                                <option value="Orellana">Orellana</option>  
                                <option value="Morona Santiago">Morona Santiago</option>  
                                <option value="Zamora Chinchipe">Zamora Chinchipe</option>  
                                <option value="Galápagos">Galápagos</option>  
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Ciudad</label>
                            <input name="city" value="<?php echo $city; ?>" id="cityId" class="cities form-control" onkeyup="capitalizarPrimeraLetra()" placeholder="Introduzca la Ciudad">
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


    <!-- Con este script capitalizamos que la primera letra sea mayuscula siempre -->
    <script>
        var input = document.getElementById('cityId');
        //función que capitaliza la primera letra
        function capitalizarPrimeraLetra() {
        //almacenamos el valor del input
        var palabra = input.value;
        //Si el valor es nulo o undefined salimos
        if(!input.value) return;
        // almacenamos la mayuscula
        var mayuscula = palabra.substring(0,1).toUpperCase();
        //si la palabra tiene más de una letra almacenamos las minúsculas
        if (palabra.length > 0) {
            var minuscula = palabra.substring(1).toLowerCase();
        }
        //escribimos la palabra con la primera letra mayuscula
        input.value = mayuscula.concat(minuscula);
        }
    </script>

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