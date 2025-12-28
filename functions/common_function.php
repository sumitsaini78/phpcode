<?php
// including connect file
include('./includes/connect.php');

// function for displaying products
function getproducts(){

   $select_query = "select * from `products` order by rand() limit 0,9";
   global $conn;
                    $result_query = mysqli_query($conn, $select_query);
                    // $row=mysqli_fetch_assoc($result_query);
                    // echo $row['product_title'];
                    while ($row = mysqli_fetch_array($result_query)) {
                        $product_id = $row["product_id"];
                        $product_title = $row["product_title"];
                        $product_description = $row["product_description"];
                        $product_image1 = $row["product_image1"];
                        $product_price = $row["product_price"];
                        $category_id = $row["category_id"];
                        $brand_id = $row["brand_id"];   
                        echo "
                         <div class='col-md-4'>
                        <div class='card' style='width: 18rem;'>
                            <img src='$product_image1' width='200px' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title </h5>
                                <p class='card-text'>Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href='' class='btn btn-primary bg-info'>Add To Cart</a>
                                <a href='' class='btn btn-primary  bg-secondary'>View More</a>
                            </div>
                        </div>
                    </div>  
                        ";
                    }

}
// function for displaying brands in side nav
function get_brands(){
    global $conn;
   
                    $select_brands = "SELECT * FROM `brands`";
                    $result_brands = mysqli_query($conn, $select_brands);

                    // Check if query was successful and has results
                    if ($result_brands && mysqli_num_rows($result_brands) > 0) {
                        while ($row_data = mysqli_fetch_assoc($result_brands)) {
                            $brand_id = $row_data['brand_id'];
                            $brand_title = $row_data['brand_title'];
                            echo '<li class="nav-item ">
                    <a href="index.php?brand=' . $brand_id . '" class="text-light nav-link">' . $brand_title . '</a>
                  </li>';
                        }
                    } else {
                        echo '<li class="nav-item ">
                <a href="" class="text-light nav-link">No brands found</a>
              </li>';
                    }
                    
}
// function for displaying categories in side nav
                 function get_categories(){
                    global $conn;
                       $select_categories = "SELECT * FROM `categories`";
                    $result_categories = mysqli_query($conn, $select_categories);

                    // Check if query was successful and has results
                    if ($result_categories && mysqli_num_rows($result_categories) > 0) {
                        while ($row_data = mysqli_fetch_assoc($result_categories)) {
                            $category_id = $row_data['category_id'];
                            $category_title = $row_data['category_title'];
                            echo '<li class="nav-item ">
                    <a href="index.php?categories=' . $category_id . '" class="text-light nav-link">' . $category_title . '</a>
                  </li>';
                        }
                    } else {
                        echo '<li class="nav-item ">
                <a href="" class="text-light nav-link">No categories found</a>
              </li>';
                    }
                }


?>