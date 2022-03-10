<?php
session_start();
if (!isset($_SESSION['id'])){
    header('location:../');
}


$data=$_SESSION['data'];
if ($_SESSION['status']==1){
    $status='<b class="text-success">Voted</b>';
}else{
    $status='<b class="text-danger">Not Voted</b>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MASOMO SCHOOL EBALLOT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-success navbar-dark  border px-5  shadow">
    <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">MASOMO SCHOOL EBALLOT</a>
        <img src="../img/LOGO.jpg" alt="Avatar Logo" width="100" height="100" class="rounded-pill">
        <ul class="navbar-nav px-5 navbar-dark">
            <li class="nav-item">
                <a class="nav-link text-white" href="#">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">LOGOUT</a>
            </li>

        </ul>


    </div>
</nav>
<a href="../"><button class="btn btn-success text-white mt-3 mx-5 px-3">BACK</button></a>
<a href="logout.php"><button class="btn btn-success text-white mt-3 mx-5 px-3 float-end">LOGOUT</button></a>
<h1 class="text-center text-success ">MASOMO SCHOOL EBALLOT  </h1>
<h4 class="text-center text-success "><i >Your Vote, Your Voice  </i></h4>
<div class="row my-5">
    <div class="col-md-7">
        <?php
        if (isset($_SESSION['groups'])){
            $groups=$_SESSION['groups'];
            for ($i=0;$i<count($groups);$i++){
        ?>
        <div class="row">
            <div class="col-md-4">
                <img src="../uploads/<?php echo $groups[$i]['photo'] ?>" width="100" height="100" alt="g.img">
            </div>
            <div class="col-md-8">
                <strong class="text-dark h5">Group Name:</strong>
                <?php echo $groups[$i]['username'] ?><br>

                <strong class="text-dark h5">Total_votes:</strong>
                <?php echo $groups[$i]['total_votes'] ?><br>

            </div>
        </div>
                <form action="../actions/voting.php" method="post">
                    <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['total_votes'] ?>">
                    <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id'] ?>">

                <?php
                if ($_SESSION['status']==1){
                    ?>
                        <button class="btn btn-success m-auto px-5"  type="submit">Voted</button>
                    <?php

                }else{
                    ?>
                    <button class="btn btn-success  m-auto px-5" value="submit">Vote</button>
                      <?php

                }
                    ?>
                </form>
                <hr>
        <?php


            }
        }else{
            ?>
        <div class="container">
            <p>No groups display</p>
        </div>
        <?php
        }
            ?>
        <!-----groups--->

    </div>

    <div class="col-md-5"><br><br>
        <!-----voters profile--->
        <img src="../uploads/<?php echo $data['photo'];?>" width="100" height="100" class="" alt="v.img">
        <br>
        <br>
        <strong class="text-dark h5">Username:</strong>
        <?php echo $data['username'];?><br><br>
        <strong class="text-dark h5">Admission_number:</strong>
        <?php  echo $data['admission_number'] ;?><br><br>
        <strong class="text-dark h5">Status:</strong>
        <?php  echo $status ;?><br><br>
    </div>

</div>

</body>
</html>
