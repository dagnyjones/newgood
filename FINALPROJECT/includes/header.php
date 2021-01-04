<?php

include ("includes/connect.php");

?>
<!-- NAVIGATION -->

<nav>

  <div class="social-call">

    <div class="social">
      <a href="#"><i class='bx bxl-facebook'></i></a>
      <a href="#"><i class='bx bxl-twitter'></i></a>
      <a href="#"><i class='bx bxl-youtube'></i></a>
      <a href="#"><i class='bx bxl-instagram'></i></a>
    </div>
    <!-- phone number -->
    <div class="phone">
      <span></span>
    </div>
  </div>

  <!-- menu bar -->

  <div class="navigation">
    <!-- logo -->
    <a href="index.php" class="logo">
      <img src="images/logo.png" alt="logo">
    </a>
    <!-- menu -->
    <ul class="menu">
      <li><a href="index.php">HOME</a></li>
      <li>
        <a href="shop.php">shop</a>
      </li>
      <li><a href="about.php">about</a></li>
      <li><a href="contact.php">contact</a></li>

    </ul>
    <!-- right menu -->
    <div class="right-menu">
      <!-- search -->
      <a href="javascript:void(0);" class="search"><i class='bx bx-search'></i></a>
      <!-- user -->
      <a href="javascript:void(0);" class="user"><i class='bx bxs-user'></i></a>
      <!-- cart -->
      <a href="cart.php"><i class='bx bx-cart'>
          <!-- number of product in cart -->
          <span class="num-cart-product">0</span>
        </i></a>
    </div>
  </div>
</nav>

<!-- SEARCH BAR -->
<div class="search-bar">

  <div class="search-input">
    <input type="text" placeholder="Search For Product" name="search" />

    <a href="javascript:void(0);" class="search-cancel">
      <i class="fas fa-times"></i>
    </a>

  </div>
</div>