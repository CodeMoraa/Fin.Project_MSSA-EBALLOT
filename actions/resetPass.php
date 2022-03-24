<?php
include ('connect.php');
include ('handle_login.php');
if (isset($_POST['reset'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    //validating password
    if (strlen($password) < 6) {
        $passerror = "<div class='alert alert-danger'>Password cannot be less than 6 characters</div>";
        echo $passerror;
    }
    else {
        $storepass = password_hash($password, PASSWORD_DEFAULT);
    }
    if ($cpassword != $password) {
        $confirmpasserror = "<div class='alert alert-danger'>Passwords do not match</div>";
        echo $confirmpasserror;
    }
    if (empty($passerror) and empty($confirmpasserror)) {
        $sql = " UPDATE `voterdata` SET `password`='$storepass' WHERE password = '$password' ";

        $con = mysqli_connect('localhost','root','','mssas eballot');

        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<div class='alert alert-warning'>Password has been reset</div>";
            header("location: ../");
        }
        else {
            echo "Error executing query $sql".mysqli_error($con);
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Reset Password</title>
</head>
<body >
<div class="container">
    <div class="row">
        <div class="col-md-6 off-md-3">
            <div class="Login-form" >
                <form action="resetPass.php" method="POST" class="mt-5  border p-5 bg-light shadow"">
                <h2 class="text-success text-center">Reset Password</h2>
                <hr>
                <div class="row w-75 m-2">
                    <input class="form-control" type="text" name="username" placeholder="Enter username">
                </div>
                <!--password-->
                <div class="row w-75 m-2">
                    <input class="form-control" type="password" name="password" placeholder="password">
                </div>
                <div class="row w-75 m-2">
                    <input class="form-control" type="password" name="cpassword" placeholder="Confirm password">
                </div>
                <div class="row m-2">
                    <input class="btn btn-success w-50" type="submit" name="reset" value="Reset">
                </div>

                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
