<?php
if (isset($_GET['prod_id'])) {
    # code...
    include("../../connection.php");

    $prodId = $_GET['prod_id'];

    $getInfo = "SELECT * FROM `product` WHERE prod_id = $prodId";

    $query = mysqli_query($conn, $getInfo);

    $prodInfo = mysqli_fetch_assoc($query);
} else {
    header("location:../../index.html");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="./itemStyles.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <span class="logo navLogo"><img src="../../images/Artboard 1.png" alt=""></span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><img src="../../images/Artboard 1.png" alt=""></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="../../index.html">Home</a></li>
                    <li><a href="../../category/shop.html">Category</a></li>
                    <li><a href="../../About/About.html">About</a></li>
                    <li><a href="../../ContactUsPage/ContactSection.html">Contact US</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">
                    <div class="searchToggle">
                        <i class='bx bx-x cancel'></i>
                        <i class='bx bx-search search'></i>
                    </div>

                    <div class="search-field">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section id="pro-details" class="section-p1">
        <div class="single-pro-img">
            <img src="../products/product1.jpeg" alt="" width="100%" id="main-img">

        </div>
        <div class="single-pro-details">
            <h2><?php echo $prodInfo['prod_name']; ?></h2>
            <h4><?php echo $prodInfo['prod_price'] ."$"; ?></h4>

            <!-- <select>
                <option value="">Select Size</option>
                <option value="">XL</option>
                <option value="">XXL</option>
                <option value="">Small</option>
                <option value="">Meduim</option>
            </select> -->
            
            
            <?php
            if ($prodInfo['quantity'] > 0) {
                echo '<input type="number" name="" id="" value="1" max='. $prodInfo['quantity'].' min=1>';
                echo "<button class=normal>Add to cart</button>";
                echo "<h2>".$prodInfo['quantity']." in stock</h2>";
            }else{
                echo "<h2>out of stock</h2>";
            }
            ?>
            
            <h4>Product Details</h4>
            <p><?php echo $prodInfo['description'];?></p>

        </div>
    </section>


    <footer class="section-p1">
        <div class="col">
            <img src="./img/logo.png" alt="">
            <h4>Contact</h4>
            <p>address : <strong>Tripoli , Lebanon</strong></p>
            <p>phone : <strong>+961 81 189 700</strong></p>
            <p>hours : <strong>10:00 - 18:00 , Mon -Sat</strong></p>
            <div class="follow ">
                <h4>Follow us</h4>
                <div class="icons">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>

        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">
                <p>About US</p>
            </a>
            <a href="#">
                <p>Delevery Info </p>
            </a>
            <a href="#">
                <p>Privacy & Policy</p>
            </a>
            <a href="#">
                <p>Term & Conditions</p>
            </a>
            <a href="#">
                <p>Help</p>
            </a>
        </div>
    </footer>
    <script src="../../script.js"></script>
</body>

</html>