<?php
include("./getCategory.php");
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel=" stylesheet " href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
  <!-- ===== CSS ===== -->


  <!-- ===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="styls.css" />
  <title>غصن الزيتون</title>
</head>

<body>
  <header class="header">
    <nav>
      <div class="nav-bar">
        <i class='bx bx-menu sidebarOpen'></i>
        <span class="logo navLogo"><img src="./images/Artboard 1.png" alt=""></span>

        <div class="menu">
          <div class="logo-toggle">
            <span class="logo"><img src="./images/Artboard 1.png" alt=""></span>
            <i class='bx bx-x siderbarClose'></i>
          </div>

          <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="./category/shop.php">Category</a></li>
            <li><a href="./About/About.html">About</a></li>
            <li><a href="./ContactUsPage/ContactSection.html">Contact US</a></li>
            <?php
            while ($row = mysqli_fetch_assoc($query)) {
              echo '<li class="navCategory"><a href="./category/allProduct/product.php?catid='.$row['cat_id']. '&catName=' . $row['cat_name'] . '">' . $row['cat_name'] . '</a></li>';
            }
            ?>
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

  


 
  <!--footer-->
  

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="main.js"></script>
</body>

</html>

<script src="script.js"></script>

</body>

</html>