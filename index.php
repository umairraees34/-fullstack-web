<?php
include("header.php");
?>

<div class="container my-5">
    <h1 class="text-center my-3"> Products </h1>
    <hr class="mx-auto w-50">
    <div class="row my-3">
        <?php
            $query = "SELECT * FROM products ORDER BY RAND() LIMIT 9";
            $run = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($run)){
                echo "
                    <div class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3'> 
                    <div class='card' style='width: 18rem;'>
                    <img src='./uploaded images/".$row['image']."' class='card-img-top'>
                    <div class='card-body'>
                        <h5 class='card-title'>". $row['title'] ."</h5>
                        <p class='card-text'> ".$row['details']." </p>
                        <h6> Price: $".$row['price']."/- </h6>
                        <a href='code.php?proid=".$row['id']."' class='btn btn-primary'>Add to Cart</a>
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