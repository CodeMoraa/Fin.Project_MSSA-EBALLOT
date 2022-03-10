
<!-----connecting to the db------->
<?php

$con = mysqli_connect('localhost','root','','mssas eballot');

if (!$con){
    die(mysqli_error($con));
}

?>