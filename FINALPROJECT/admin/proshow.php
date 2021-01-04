<!DOCTYPE html>
<html>

<?php 
    include ("includes/session.php");
    include ("includes/top.php");
    
?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php 
 include ("includes/header.php");
?>

    <?php
    include ("includes/sidebar.php");
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="container">




      <!-- Main content -->
      <section class="container">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-sm-9">

            <?php
            include ('../includes/connect.php');

            $id = $_GET['pro_id'];
            $sql = "SELECT * FROM products WHERE id='$id'";

            $results = $conn -> query($sql);

            $final = $results -> fetch_assoc();         
            
            ?>

            <h3>NAME : <?php echo $final['name'] ?></h3>
            <hr><br>

            <h3>PRICE : <?php echo $final['price'] ?></h3>
            <hr><br>

            <h3>DESCRIPTION : <?php echo $final['description'] ?></h3>
            <hr><br>

            <img src="<?php echo $final['picture'] ?>" alt="no file">






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