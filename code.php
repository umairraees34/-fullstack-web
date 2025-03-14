<?php
if(!isset($_SESSION["username"])){
    session_start();
}
$host = "localhost";
$username = "root";
$password = "";
$database = "dbphp";

$con = mysqli_connect($host, $username, $password, $database);
if (!$con) {
    die("Database connection failed");
}

// Log in form code starting here 

if (isset($_POST['login'])) {
    $useremail = $_POST['useremail'];
    $password = $_POST['password'];

    $login_query = "SELECT * FROM users WHERE username='$useremail' OR email='$useremail'";
    $login_run = mysqli_query($con, $login_query);
    $login_fetch = mysqli_fetch_assoc($login_run);
    $hash_pass = $login_fetch['password'];
    $userid = $login_fetch['id'];


// password hash code starting here 

    if (password_verify($password, $hash_pass)) {
        if ($count = mysqli_num_rows($login_run) > 0) {
            $_SESSION["username"] = $login_fetch['username'];
            echo "<script> alert('Login Successfully') </script>";
            echo "<script> window.open('index.php','_self') </script>";
        } else {
            echo "<script> alert('Login Failed') </script>";
        }
    } else {
        echo "<script> alert('Password not Matched') </script>";
    }
}


if(isset($_GET['proid'])){
    $product_id = $_GET['proid'];
    $username = $_SESSION["username"];

    $product_query = "SELECT * FROM products WHERE id=$product_id";
    $product_run = mysqli_query($con, $product_query);
    $product_fetch = mysqli_fetch_assoc($product_run);
    $price = $product_fetch['price'];

    $user_query = "SELECT * FROM users WHERE username='$username'";
    $user_run = mysqli_query($con,$user_query);
    $user_fetch = mysqli_fetch_assoc($user_run);
    $userid = $user_fetch['id'];


    $cart_insert = "INSERT INTO cart_table VALUES('',$userid,$product_id,$price,1,now())";
    $cart_run = mysqli_query($con,$cart_insert);
    if($cart_run){
        // countCart();
        echo "<script> alert('Product Added') </script>";
        echo "<script> window.open('index.php','_self') </script>";
    }
}

//  Card.phpncode stertning here 



function countCart()
{
    global $con;
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $user_select = "SELECT * FROM users WHERE username='$username'";
        $user_run = mysqli_query($con, $user_select);
        $fetch = mysqli_fetch_assoc($user_run);
        $userid = $fetch['id'];

        $count_query = "SELECT * FROM cart_table WHERE userid=$userid";
        $count_run = mysqli_query($con, $count_query);

        $cartno = mysqli_num_rows($count_run);
        echo $cartno;
        // print_r($cartno);
        // echo "<script> alert('".$cartno."') </script>";
    }
}

?> 

