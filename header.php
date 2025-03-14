<?php
include("code.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DryFruits & Salajeed Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css"> <!-- Custom CSS File -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body>

<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container">
    <a class="navbar-brand" href="#">DryFruits Website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="index.php" style=" color: #ffffff;" class="home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="allproduct.php">All Product</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Category</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./Almond.php">Almonds (بادام)</a></li>
            <li><a class="dropdown-item" href="./Dates.php">Dates (کھجور) </a></li>
            <li><a class="dropdown-item" href="./Pinenuts.php">Pine Nuts (چلغوزہ)</a></li>
            <li><a class="dropdown-item" href="./Walnuts.php">Walnuts (اخروٹ) </a></li>
            <li><a class="dropdown-item" href="./Salajeet.php">Salajeet </a></li>

          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link cart-icon" href="./carts.php"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
        <?php
        if(isset($_SESSION['username'])){
          echo "
            <li class='nav-item'><a class='nav-link user-name'>".$_SESSION["username"]."</a></li>
            <li class='nav-item'><a class='nav-link' href='./logout.php'><i class='fa-solid fa-right-from-bracket'></i></a></li>
          ";
        }else{
          echo "
            <li class='nav-item'><a class='nav-link user-name'>GUEST</a></li>
            <li class='nav-item'><a class='nav-link' href='./login.php'><i class='fa-solid fa-right-to-bracket'></i></a></li>
          ";
        }
        ?>
      </ul>
      <form class="d-flex search-form">
        <input class="form-control" type="search" placeholder="Search">
        <button class="btn btn-search" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

</body>
</html>
