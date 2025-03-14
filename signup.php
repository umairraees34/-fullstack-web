<?php
    $host ="localhost";
    $username ="root";
    $password="";
    $database="dbphp";

    $con = mysqli_connect($host,$username,$password,$database);
    if(!$con){
        die("Database connection failed");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="signup.css"> <!-- Custom CSS File -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <div class="signup-container">
            <h1 class="text-center">Create  Account</h1>
            <hr>
            <form action="./adminpanel/code.php" autocomplete="on">
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
                </div>
                <div class="mb-3">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                </div>
                <div class="mb-3">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword" required>
                </div>
                <div class="mb-3">
                    <label>Address</label>
                    <textarea class="form-control" placeholder="Enter Your Address" name="address" required></textarea>
                </div>
                <div class="mt-3 text-center">
                    <input type="submit" class="button" value="Signup" name="signup">
                </div>
            </form>
        </div>
    </div>
</body>
</html>