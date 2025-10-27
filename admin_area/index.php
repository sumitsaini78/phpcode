<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel </title>
    <!-- css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-fluid">
        <!-- first child -->
        <div class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/admin-icon.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link text-light">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">
                Manage Details
            </h3>
        </div>
    </div>

    <!-- third child -->
    <div class="row ">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center ">
            <div>
                <a href="#"><img src="../images/admin-icon.jpg" width="110px" alt=""></a>
                <p class="text-light text-center">Admin Name</p>
            </div>
            <div class="button text-center">
                <button><a href="insert_products.php" class="nav-link text-light bg-info">Insert Products</a></button>
                <button><a href="" class="nav-link text-light bg-info">View Products</a></button>
                <button><a href="index.php?insert_categories" class="nav-link text-light bg-info">Insert
                        Categories</a></button>
                <button><a href="" class="nav-link text-light bg-info">View Categories</a></button>
                <button><a href="index.php?insert_brands" class="nav-link text-light bg-info">Insert Brands</a></button>
                <button><a href="" class="nav-link text-light bg-info">View Brands</a></button>
                <button><a href="" class="nav-link text-light bg-info">All Orders</a></button>
                <button><a href="" class="nav-link text-light bg-info">All Payments</a></button>
                <button><a href="" class="nav-link text-light bg-info">List Users</a></button>
                <button><a href="" class="nav-link text-light bg-info">Log Out</a></button>
            </div>
        </div>
    </div>
    <!-- fourth child -->
     <div class="container my-5">
        <?php
        if(isset($_GET['insert_categories'])){
            include("insert_categories.php");
        }
        if(isset($_GET['insert_brands'])){
            include("insert_brands.php");
        }
        ?>
     </div>
    <div class="bg-info p-3 text-center">
        <p>All Rights Reserved Shodioshop@2025</p>
    </div>
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>