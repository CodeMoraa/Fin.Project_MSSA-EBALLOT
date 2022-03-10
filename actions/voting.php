<?php
session_start();
include('connect.php');

$votes=$_POST['groupvotes'];
$totalvotes=$votes+1;

$grpid=$_POST['groupid'];
$userid=$_SESSION['id'];

$con = mysqli_connect('localhost','root','','mssas eballot');

$updatevotes = mysqli_query($con, "UPDATE `voterdata` SET `total_votes`='$totalvotes' WHERE id=$grpid;");


$updatevotes = mysqli_query($con,"UPDATE `voterdata` SET `status`=1 WHERE id='$userid'");


if ($updatevotes and $updatestatus){

    $getgroups=mysqli_query($con,"SELECT `id`, `username`,  `photo`, `standard`,  `total_votes` FROM `voterdata` 
WHERE standard='group'");

    $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);

    $_SESSION['groups']=$groups;
    $_SESSION['status']=1;
    echo '<script>
alert("voting successful");
window.location="../partial-files/dashboard.php";
</script>';

}

else{
    echo '<script>
alert("technical error occurred!, vote later");
window.location="../partial-files/dashboard.php";
</script>';
}

?>


