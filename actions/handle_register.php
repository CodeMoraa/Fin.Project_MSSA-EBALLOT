<!-----Registration back-end------>
<?php

include ('connect.php');

$username=$_POST['username'];
$admission_number=$_POST['admission_number'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];




if ($password!=$cpassword){
    echo '<script>
alert("passwords do not match");
window.location="../partial-files/registration.php"
</script>';
}
else{
    move_uploaded_file($tmp_name,"../uploads/$image");

    $sql="INSERT INTO `voterdata`( `username`, `admission_number`, `password`, `photo`, `standard`, `status`, 
     `total_votes`) VALUES ('$username','$admission_number','$password','$image','$std',0,0)";

    $con = mysqli_connect('localhost','root','','mssas eballot');
    $result=mysqli_query($con,$sql);

    if($result){
        echo '<script>
alert("registration success!!");
window.location="../"
</script>';
    }else{
        die(mysqli_error($con));
    }

}

?>