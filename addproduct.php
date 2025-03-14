<?php
    include "header.php";
?>

<div class="container my-5">
    
    <div class="form-container">
    <h1 class="text-center my-3">Add Product Details</h1>
    <hr>
        <form action="code.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Product Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Product Title">
            </div>
            <div class="mb-3">
                <label>Product Details</label>
                <textarea class="form-control" name="details" rows="3" placeholder="Enter Product Details"></textarea>
            </div>
            <div class="mb-3">
                <label>Product Price</label>
                <input type="number" class="form-control" name="price" placeholder="Enter Product Price">
            </div>
            <div class="mb-3">
                <label>Product Category</label>
                <select name="category" class="form-select">
                    <option   value="">Select Category</option>
                    <option   class="select" value="Almonds">Almonds</option>
                    <option class="select"  value="Dates">Dates</option>
                    <option class="select" value="Pine Nuts">Pine Nuts</option>
                    <option class="select" value="Walnuts">Walnuts</option>
                    <option class="select" value="Salajeet">Salajeet</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Product Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="text-center mt-4">
                <input type="submit" value="Add Product" name="addpro" class="button  w-50">
            </div>
        </form>
    </div>
</div>

<?php
    include "footer.php";
?>
