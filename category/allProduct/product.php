<?php
include("../../connection.php");
if (isset($_GET['catid']) && isset($_GET['catName'])) {
    # code...
    $id = $_GET['catid'];
    $cat_name = $_GET['catName'];

    $getAllProduct = "SELECT * FROM `product` WHERE category = $id";

    $query = mysqli_query($conn, $getAllProduct);
} else {
    header("location:../../index.html");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../homeStyles.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./productStyle.css">
</head>

<body>
    <header class="header">
        <nav>
            <div class="nav-bar">
                <i class='bx bx-menu sidebarOpen'></i>
                <span class="logo navLogo"><img src="../../images/Artboard 1.png" alt=""></span>

                <div class="menu">
                    <div class="logo-toggle">
                        <span class="logo"><img src="./images/Artboard 1.png" alt=""></span>
                        <i class='bx bx-x siderbarClose'></i>
                    </div>

                    <ul class="nav-links">
                        <li><a href="../../index.html">Home</a></li>
                        <li><a href="#">Category</a></li>
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
    </header>

    <section id="product1" class="section-p1">
        <h2><?php echo $cat_name ;?> 's Product</h2>
        <p>Take a look for our product</p>
        <div class="pro-container">
            <?php
                while ($row = mysqli_fetch_assoc($query)) {
                    echo '
                        <a class="pro" href="../items/item.php?prod_id='.$row['prod_id'].'">
                            <img src="../'.$row['prod_img'].'" alt="">
                            <div class="des">
                                <span></span>
                                <h5>'.$row['prod_name'].'</h5>
                                <h4>'.$row['prod_price'].'$</h4>
                            </div>
                        </a>
                    ';
                }


            ?>
            
        </div>
        </div>

    </section>

    <script src='../../script.js'></script>
</body>

</html>