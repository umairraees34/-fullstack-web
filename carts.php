<?php
include "header.php";
?>
<link rel="stylesheet" href="cart.css">
<div class="container my-5">
    <h1 class="text-center my-3"> Cart Details </h1>
    <hr class="w-50 mx-auto">
    <table class="table table-secondary table-striped">
        <tr>
            <th>S#</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Quantity</th>
            <th>Total Amount</th>
            <th>Check</th>
            <th>Button</th>
        </tr>
        <?php
        $username = $_SESSION['username'];
        $user_select = "SELECT * FROM users WHERE username='$username'";
        $user_run = mysqli_query($con, $user_select);
        $fetch = mysqli_fetch_assoc($user_run);
        $userid = $fetch['id'];
        $query = "SELECT * FROM cart_table WHERE userid=$userid";
        $run = mysqli_query($con,$query);
        if($count = mysqli_num_rows($run) > 0){
            $sno=1;
            while($rows = mysqli_fetch_assoc($run)){
                $proid = $rows['product_id'];
                $product_query = "SELECT * FROM products WHERE id=$proid";
                $product_run = mysqli_query($con,$product_query);
                $product_fetch = mysqli_fetch_assoc($product_run);


            echo "
                <tr>
                    <td>$sno</td>
                    <td>".$product_fetch['title']."</td>
                    <td> <img src='./uploaded images/".$product_fetch['image']."' class='img-fluid' style='width: 100px;'> </td>
                    <td>".$product_fetch['price']."</td>
                    <td>
                        <div class='d-flex'>
                            <input type='number' value='".$rows['qty']."' class='form-control' style='width: 70px;'>
                            <input type='submit' value='edit' class='edit'>
                        </div>
                    </td>
                    <td>".$product_fetch['price']*$rows['qty']."</td>
                    <td>
                        <input type='checkbox' class='form-input-check'>
                    </td>
                    <td>
                        <a href='#' class='delet'> <i class='fa-solid fa-trash'></i> </a>
                    </td>
                </tr>
            ";
            $sno++;
            }

        }else{
            echo "
                <div class='container my-5'> 
                    <h4 class='text-danger text-center'> Cart is Empty </h4>
                </div>
            ";
        }
        ?>
        
    </table>
</div>

<?php
include "footer.php";
?>