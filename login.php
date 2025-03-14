<?php
include("code.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="login.css"> <!-- Custom CSS File -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  

    <div class="container my-5">
    <h1 class="text-center my-3"> Login - Account </h1>
    <hr class="w-50 mx-auto">
        <div class="w-120 mx-auto rounded  p-5">
            <form action="./code.php" method="post">
                <div class="mb-3">
                    <label>Username / Email Address</label>
                    <input type="text" class="form-control" name="useremail" placeholder="Username / Email Address">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" id="showpass">
                </div>
                <div class="mb-3">
                    <input type="checkbox" class="form-input-check"  onclick="showPassword()">
                    <label> Show Password </label>
                </div>
                <div class="mt-3 text-center">
                    <input type="submit" class="btn button w-50" value="Login" name="login">
                </div>
            </form>
            <div class="container text-center mt-4">
                <p class="text">Create New Account <a href="./signup.php"> Click Here. </a> </p>
            </div>
        </div>
    </div>

    <script>
        function showPassword(){
            let pass = document.getElementById("showpass")

            if(pass.type === "text"){
                pass.type = "password"
            }else{
                pass.type = "text"
            }

        }
    </script>

</body>
</html>