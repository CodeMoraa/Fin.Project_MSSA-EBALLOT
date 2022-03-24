<!---trying to fetch voter data--->
<?php
session_start();
include ('connect.php');


$username = $_POST['username'];

$admission_number = $_POST['admission_number'];

$password = md5( $_POST['password']);

$std= $_POST['std'];



$sql = "SELECT * FROM `voterdata` WHERE username='$username' and admission_number='$admission_number' 
         and password='$password' and standard='$std'";

$con = mysqli_connect('localhost','root','','mssas eballot');


$result=mysqli_query($con,$sql);

if (mysqli_num_rows($result)>0){

     $sql="SELECT `id`, `username`, `photo`, `total_votes` FROM `voterdata` WHERE standard='group'";

     $resultgroup=mysqli_query($con,$sql);

      if(mysqli_num_rows($resultgroup)>0){
        $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
        $_SESSION['groups']=$groups;
    }
    $data = mysqli_fetch_array($result);
      $_SESSION['id']=$data['id'];
      $_SESSION['status']=$data['status'];
      $_SESSION['data']=$data;
       echo '<script>
                window.location="../partial-files/dashboard.php";
             </script>';

}else{

    echo'<script>
alert("invalid credentials");
window.location="../";
</script>';

    }

