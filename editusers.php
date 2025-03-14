<?php
include "code.php";
if (isset($_GET['editbtn'])) {
    $editid = $_GET['editbtn'];

    $query = "SELECT * FROM users WHERE id=$editid";
    $run = mysqli_query($con, $query);

    $row = mysqli_fetch_assoc($run);
    $username = $row["username"];
    $email = $row["email"];
    $password = $row["password"];
    $address = $row["address"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Users</title>
   
    <link rel="stylesheet" href="edituser.css"> <!-- Custom CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center my-3">Update Form Details</h1>
    <hr>
    <div class="container my-5">
        <div class="bg-info p-5 mx-auto w-50 rounded">
            <form autocomplete="on">
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" class="form-control" value="<?php echo $username; ?>" name="username" required>
                </div>
                <div class="mb-3">
                    <label>Email address</label>
                    <input type="email" class="form-control" value="<?php echo $email; ?>" name="email" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="text" class="form-control" value="<?php echo $password; ?>" name="password" required>
                </div>
                <div class="mb-3">
                    <label>Address</label>
                    <input class="form-control" value="<?php echo $address; ?>" name="address" required>
                </div>
                <div class="mt-3 text-center">
                    <input type="hidden" value="<?php echo $editid; ?>" name="id">
                    <input type="submit" class="btn btn-outline-primary w-50" value="Update" name="update">
                </div>
            </form>
        </div>
    </div>
</body>
<?php
    if(isset($_GET['update'])){
        $U_id = $_GET['id'];
        $U_name = $_GET['username'];
        $U_email = $_GET['email'];
        $U_pass = $_GET['password'];
        $U_add = $_GET['address'];

        $update_query = "UPDATE users SET username='$U_name', email='$U_email', password='$U_pass', address='$U_add', date=now() WHERE id=$U_id";
        $update_run = mysqli_query($con,$update_query);

        if($update_run){
            echo "<script> alert('Row Updated') </script>";
            echo "<script> window.open('viewuser.php','_self') </script>";
        }
    }
?>
</html>