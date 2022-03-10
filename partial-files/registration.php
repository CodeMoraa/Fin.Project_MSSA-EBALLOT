<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register to vote</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 off-md-3">
            <div class="signup-form" >
                <form action="../actions/handle_register.php" method="POST" enctype="multipart/form-data"
                      class="mt-5  border p-5 bg-light shadow" >
                    <h1 class="text-center">Create Your Account</h1>
                    <h3 class="text-success text-center"><i>Your Vote, Your Future</i></h3>
                    <br>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <input type="text"  class="form-control m-auto" name="username"
                                   placeholder="Enter Username" required="required" >
                        </div>
                        <div class="mb-3 col-md-12">
                            <input type="text"  class="form-control m-auto" name="admission_number"
                                   placeholder="Enter your admission number" required="required" >
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="password"  class="form-control  m-auto" name="password"
                                   placeholder="Enter your password" required="required" >
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="password"  class="form-control  m-auto" name="cpassword"
                                   placeholder="confirm password" required="required" >
                        </div>
                        <div class="mb-3 col-md-12">
                            <input type="file"  class="form-control  m-auto" name="photo"  >
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
                            <button type="submit" class="btn btn-success float-end"> Register</button>
                            <p>Already have an account? <a href="../" class="text-danger"> Login Here!</a></p>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
