<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styls.css">
    <link rel="stylesheet" href="./shopStyles.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Shop</title>
</head>

<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <span class="logo navLogo"><img src="../images/Artboard 1.png" alt=""></span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><img src="../images/Artboard 1.png" alt=""></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../category/shop.php">Category</a></li>
                    <li><a href="../About/About.html">About</a></li>
                    <li><a href="../ContactUsPage/ContactSection.html">Contact US</a></li>
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

    <section id="product1" class="section-p1">
        <h2>Choose One of Categories</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <?php
            include("./getCategory.php");
            while ($row = mysqli_fetch_assoc($query)) {
                # code...
                echo
                '<div class="pro">
                        <a href="./allProduct/product.php?catid=' . $row['cat_id'] . '&catName=' . $row['cat_name'] . '">
                            <img src="products/' . $row['cat_img'] . '" alt="">
                            <div class="des">
                                <span></span>
                                <h5>' . $row['cat_name'] . '</h5>
                            </div>
                        </a>
                    </div>';
            }
            ?>


        </div>


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
            <a href="#">About Us</a>
            <a href="#">Delevery Info </a>
            <a href="#">Privacy & Policy</a>
            <a href="#">Term & Conditions</a>
            <a href="#">Help</a>
        </div>




    </footer>
    <script src="../script.js"></script>
</body>

</html>