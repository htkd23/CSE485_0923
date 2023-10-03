<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <?php 
        include "title.php";
    ?>
    <div class="container w-50 bg-secondary mt-5 ">
        <div class="position-relative">
                Sign In
        <div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
            <input type="text" class="form-control" placeholder="username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
            <input type="password" class="form-control" placeholder="password" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
            <label class="form-check-label" for="flexCheckChecked">
                Remember Me
            </label>
        </div>
        <div>
            <a href="admin/index.php" type="submit" class="btn btn-warning text-body">Login</a>
        </div>
        </div>

        <div>
            <center>
            Don't have an account? <a href="#" class="text-warning">Sign up</a> 
            <br><a href="#" class="text-warning">Forgot your password</a></center>
        </div>
        </div>
    </div>
        <?php 
        include "footer_layer.php";
    ?>
</body>
</html>