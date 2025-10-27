<?php
include('../includes/connect.php');
if (isset($_POST['insert_brand'])) {
    $brand_title = trim($_POST['brand_title']); // Optional: trim whitespace

    // Check if category already exists
    $select_query = "SELECT * FROM `brands` where brand_title = '$brand_title'";
    $result_select = mysqli_query($conn, $select_query);
    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
        echo "<script>alert('This brand already Exists');</script>";
    } else {
        // Insert new category
        $insert_query = "INSERT INTO `brands` (brand_title) VALUES ('$brand_title')";
        $result = mysqli_query($conn, $insert_query);
        if ($result) {
            echo "<script>alert('brand submitted');</script>";
        }
    }
}
?>
<h2 class="text-center">
    Insert Brands
</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group mb-2 w-90">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="brands"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-2 w-10">
        <input type="submit" class="border-0p-2 my-3 bg-info" name="insert_brand" placeholder="Insert Brands"
            aria-label="Username" value="Insert Brands" aria-describedby="basic-addon1">

    </div>
</form>