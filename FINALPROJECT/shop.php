<?php
include ("includes/top.php");
include ("includes/header.php");

?>



<!-- new arrival -->
<section class="new-arrival">

  <!--heading-------->
  <div class="arrival-heading">
    <strong>our products</strong>
    <p>Please feel free to browse our amazing selection of knitted goods!</p>
  </div>


  <!--products----------------------->
  <div class="product-container">

    <?php
    include ("includes/connect.php");

    $sql = "SELECT * FROM products";

    $results = $conn -> query($sql);

    while ($final = $results -> fetch_assoc()) {
      
      ?>

    <!--product-box-1---------->
    <div class="product-box">

      <!--product-img------------>
      <div class="product-img">
        <!--add-cart---->

        <a href="#" class="add-cart"
          onclick="location.href='carthandler.php?cart_id=<?php echo $final['id']?>&cart_name=<?php echo $final['name'] ?>&cart_price=<?php echo $final['price'] ?>'"
          name="addtocart">
          <i class="fas fa-shopping-cart"></i>
        </a>
        <!--img------>
        <img src="uploads/<?php echo $final['picture'] ?>">
      </div>
      <!--product-details-------->
      <div class="product-details">
        <a href="details.php?details_id=<?php echo $final['id'] ?>" class="p-name"><?php echo $final['name'] ?></a>
        <span class="p-price">$<?php echo $final['price'] ?></span>
      </div>


    </div>
    <?php } ?>
  </div>

</section>

<?php include ("includes/footer.php"); ?>

</html>