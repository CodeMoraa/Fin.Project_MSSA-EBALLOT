<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <title>MASOMO SCHOOL LOGIN</title>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 off-md-3">
            <div class="Login-form" >
                <form action="./handle_login.php" method="POST" class="mt-5  border p-5 bg-light shadow" enctype="multipart/form-data">
                    <h2 class="text-success text-center">MASOMO SCHOOL EBALLOT</h2>
                    <h2 class="text-center">LOGIN</h2>
                    <br>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <input type="text"  class="form-control m-auto" name="username"
                                   placeholder="Enter Username" required="required" >
                        </div>
                    </div>
                    <f class="row">
                        <div class="mb-3 col-md-12">
                            <input type="text"  class="form-control  m-auto" name="admission number"
                                   placeholder="Enter Admission Number" required="required" >
                        </div>
                        <div class="mb-3 col-md-12">
                            <input type="password"  class="form-control  m-auto" name="password"
                                   placeholder="Confirm Password" required="required" >
                        </div>
                        <div class="mb-3 col-md-12">
                            <select name="std" id="" class="form-select  m-auto">
                                <option value="Group">Group</option>
                                <option value="Voter">Voter</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-12">
                            <input type="checkbox" name="" id=""> Remember me
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success float-end"> Login</button>

                            <p>Don't have an account? <a href="./partial-files/registration.php" class="text-danger">
                                    Register Here!</a></p>
                        </div>
                        <br>
                        <br>
                        <hr>
                        <div class="col-md-12">
                            <p>Forgot your password?<a href="resetPass.php" class="text-danger">Reset</a></p>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
