<?php
include("header.php");
?>

<link rel="stylesheet" href="allproduct.css"> <!-- Custom CSS File -->


<div class="container my-5">
    <h1 class="text-center my-3"> ALL Products </h1>
    <hr class="mx-auto w-50">
    <div class="row my-3">
        <?php
            $query = "SELECT * FROM products";
            $run = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($run)) {
                echo "
                    <div class='col-12 col-sm-6 col-md-4 col-lg-4 my-3'> 
                        <div class='custom-card' style='width: 18rem;'>
                            <img src='./uploaded images/" . $row['image'] . "' class='product-img'>
                            <div class='card-content'>
                                <h5 class='product-title'>" . $row['title'] . "</h5>
                                <p class='product-text'>" . $row['details'] . "</p>
                                <h6 class='product-price'> Price: $" . $row['price'] . "/- </h6>
                                <a href='code.php?proid=" . $row['id'] . "' class='btn btn-add-to-cart'>Add to Cart</a>
                            </div>
                        </div>
                    </div>
                ";
            }
        ?>
    </div>
</div>

<?php
include("footer.php");
?>
