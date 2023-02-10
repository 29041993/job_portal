<?php
include('connection/db.php');
include('include/header.php');
include('include/my_profile.php');
$query = mysqli_query($conn, "SELECT * FROM profiles WHERE user_email = '{$_SESSION['email']}'");
while ($row = mysqli_fetch_array($query)) {
    $img = $row['img'];
    $name = $row['name'];
    $dob = $row['dob'];
    $number = $row['number'];                       
    $email = $row['email'];

}
?>

<div style="margin-left:20%; margin-top:1%; margin-bottom:1%; padding:1% 1%; width:50%; border:1px solid gray;">
    <form action="profile_add.php" method="POST" id="profile_form" name="profile_form" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <img src="profile_img/<?php if(!empty($img)) { echo $img; } else { echo 'logo_profile.png'; } ?>" class="img-thumbnail" alt="Cinque Terre" width="150" height="150">
            </div>
            <div class="col-md-4">
                <input type="file" class="form-control" name="img" id="img">
            </div>
        </div>

        <div style="margin-left: 35%;">
            <div class="row">
                <div class="col-md-6">
                    <td>Ingrese su nombre: </td>
                </div>
                <div class="col-md-6">
                    <td><input type="text" name="name" id="name" value="<?php if(!empty($name)) echo $name; ?>" placeholder="Ingresa tu nombre ..." class="form-group"></td>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <td>Ingrese su fecha de nacimiento: </td>
                </div>
                <div class="col-md-6">
                    <td><input type="date" name="dob" id="dob" value="<?php if(!empty($dob)) echo $dob; ?>" class="form-group"></td>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <td>Ingrese su número: </td>
                </div>
                <div class="col-md-6">
                    <td><input type="number" name="number" id="number" value="<?php if(!empty($number)) echo $number; ?>" placeholder="Ingresa su número ..." class="form-group"></td>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <td>Ingrese su email: </td>
                </div>
                <div class="col-md-6">
                    <td><input type="email" name="email" id="email" value="<?php if(!empty($email)) echo $email; ?>" placeholder="Ingresa su email ..." class="form-group"></td>
                </div>
            </div>

            <div class="form-group">
                <input type="submit" name="submit" id="submit" placeholder="Actualizar" class="btn btn-success" value="Actualizar">
            </div>
        </div>
    </form>
</div>

<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Subcribe to our Newsletter</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                    <div class="row d-flex justify-content-center mt-4 mb-4">
                        <div class="col-md-8">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('include/footer.php');
?>
<!-- <script>
    $(document).ready(function() {
        $("#submit").click(function() {
            var data = $("#profile_form").serialize();

            $.ajax({
                type: "POST",
                url: "profile_add.php",
                data: data,
                success: function(data) {
                    alert(data);
                }
            });
        });
    });
</script> -->