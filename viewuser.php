<?php
    include("header.php");
    include("code.php");
?>

<div class="container my-5">
    <h1 class="text-center">View User in Database</h1>
    <hr class="w-50 mx-auto">

    <div class="container">
        <table class="table table-striped table-info">
            <tr>
                <th>S#</th>
                <th>Username</th>
                <th>Email Address</th>
                <th>Address</th>
                <th>Date</th>
                <th colspan="2">Action Button</th>
            </tr>
            <?php
                $sno =1;
                $query = "SELECT * FROM users";
                $run = mysqli_query($con,$query);
                while($row = mysqli_fetch_assoc($run)){
                    $id = $row["id"];
                    $username = $row["username"];
                    $email = $row["email"];
                    $address = $row["address"];
                    $date = $row["date"];
            ?>
            <tr>
                <td> <?php echo $sno ?> </td>
                <td><?php echo $username ?> </td>
                <td><?php echo $row["email"] ?> </td>
                <td><?php echo $address ?></td>
                <td><?php echo $date ?></td>
                <td>
                    <a href="./editusers.php?editbtn=<?php echo $id ?>"> <i class="fa-solid fa-pen-to-square"></i> </a>
                </td>
                <td>
                    <a href="./code.php?deltbtn=<?php echo $id ?>"> <i class="fa-solid fa-trash"></i> </a>
                </td>
            </tr>
            <?php
            $sno++;
                }
            ?>
        </table>
    </div>
</div>

<?php
    include("footer.php");
?>