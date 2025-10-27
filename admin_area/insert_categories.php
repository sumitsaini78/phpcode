<?php
include('../includes/connect.php');
if (isset($_POST['insert_cat'])) {
    $category_title = trim($_POST['cat_title']); // Optional: trim whitespace

    // Check if category already exists
    $select_query = "SELECT * FROM `categories` WHERE category_title = '$category_title'";
    $result_select = mysqli_query($conn, $select_query);
    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
        echo "<script>alert('This Category already Exists');</script>";
    } else {
        // Insert new category
        $insert_query = "INSERT INTO `categories` (category_title) VALUES ('$category_title')";
        $result = mysqli_query($conn, $insert_query);
        if ($result) {
            echo "<script>alert('Category submitted');</script>";
        }
    }
}
?>
<h2 class="text-center">
    Insert Categories
</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group mb-2 w-90">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="categories"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-2 w-10">
        <input type="submit" class="form-control bg-info border-0 p-2 m-auto" name="insert_cat"
            placeholder="Insert Categories" aria-label="Username" value="Insert Categories"
            aria-describedby="basic-addon1">
        <!-- <button class="bg-info m-3 p-3 border-0">
                Insert Categories   
            </button> -->
    </div>
</form>