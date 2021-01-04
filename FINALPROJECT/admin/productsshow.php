<?php 
    include ("includes/session.php");
    include ("includes/top.php");
    
?>



<?php 
 include ("includes/header.php");
?>

<?php
    include ("includes/sidebar.php");
?>

<!-- Content Wrapper. Contains page content -->
<div class="container">
  <!-- Content Header (Page header) -->




  <!-- Main content -->
  <section class="container">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <a href="product.php">
        <button type="button" class="btn btn-success btn-lg cat-text">CREATE NEW PRODUCT</button>
      </a>

      <div class="col-sm-9">

        <?php
            include ('../includes/connect.php');
            
            $sql = "SELECT * FROM products";

            $results = $conn -> query($sql);
            while($final = $results -> fetch_assoc()){ ?>

        <a class="cat-text" href="proshow.php?pro_id=<?php echo $final['id']?>">

          <h3><?php echo $final['id'] ?> : <?php echo $final['name'] ?></h3>


        </a>

        <a class="cat-text" href="proupdate.php?up_id=<?php echo $final['id']?>">
          <button type="button" class="btn btn-warning">UPDATE</button>

        </a>

        <a class="cat-text" href="prodelete.php?del_id=<?php echo $final['id']?>">
          <button type="button" class="btn btn-danger">DELETE</button>

        </a>
        <hr>







        <?php
            }
            ?>


      </div>

    </div>

    <div class=" col-sm-3">

    </div>

  </section>

  <!-- /.content -->
</div>
<?php
 include ("includes/footer.php");
 ?>
</body>

</html>