<?php
include ("includes/top.php");
include ("includes/header.php"); ?>


<!-- Page Content -->
<div class="container-2">

  <div class="card">

    <?php 
      include ("includes/connect.php");

      $id = $_GET['details_id'];
      $sql = "SELECT * FROM products WHERE id='$id'";

      $results = $conn -> query($sql);
      $final = $results -> fetch_assoc();
      
      ?>

    <img src="uploads/<?php echo $final['picture'] ?>" alt="pic" style="width:100%">
    <h1><?php echo $final['name']?></h1>
    <p class="price">$ <?php echo $final['price']?></p>
    <p><?php echo $final['description']?></p>

    <p><button
        onclick="location.href='carthandler.php?cart_id=<?php echo $final['id']?>&cart_name=<?php echo $final['name'] ?>&cart_price=<?php echo $final['price'] ?>'"
        name="addtocart">Add to
        Cart</button></p>
  </div>
</div>





<?php include ("includes/footer.php"); ?>