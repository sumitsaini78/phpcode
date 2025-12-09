<?php
include('includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<!-- thirs  commit -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopone</title>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  
<body>
    <!-- navbar -->
    <div class="container-fluid ">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"
                                    style="color: #36246b;"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- second-child -->
        <div class="nav navbar navbar-expand-lg navbar-light bg-secondary">
            <ul class="navbar-nav me-auto">
                <a class="nav-link" href="#">Welcome Guest</a>
                <a class="nav-link" href="#">Login</a>
            </ul>

        </div>
        <!-- third-child -->
        <div class="bg-light">
            <h3 class="text-center">
                Shodioshop
            </h3>
            <p class="text-center">
                Communications is at the heart of e commerce and community.
            </p>
        </div>
        <!-- fourth-child -->
        <div class="row">

            <div class="col-md-10">
                <!-- products to displayed -->
                <div class="row px-3">
                    <!-- fetching products -->
                    <?php
                    $select_query = "select * from `products`";
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
                    ?>
                   
                </div>
            </div>
            <!-- sidenav -->
            <div class="col-md-2 p-0 bg-secondary">
                <!-- brands to displayed -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="" class="text-light nav-link">
                            <h4>Delivery Brands</h4>
                        </a>
                    </li>
                    <?php
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
                    ?>

                </ul>
                <!-- categories to displayed -->

                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="" class="text-light nav-link">
                            <h4>categories</h4>
                        </a>
                    </li>
                    <?php
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
                    ?>
                </ul>
            </div>
        </div>
        <!-- last child -->
        <div class="bg-info p-3 text-center">
            <p>All Rights Reserved Shodioshop@2025</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>