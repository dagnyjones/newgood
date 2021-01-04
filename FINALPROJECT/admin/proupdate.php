<!DOCTYPE html>
<html>

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
  <!-- Content Header (Page header) 



  <!-- Main content -->
  <section class="container">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-sm-3">

      </div>

      <div class="col-sm-6">
        <form role="form" action="prodatehandler.php" method="post" enctype="multipart/form-data">
          <?php
              $newid = $_GET['up_id'];
              
              include ("../includes/connect.php");

              $sql = "SELECT * FROM products WHERE id = '$newid'";

              $results = $conn -> query($sql);

              $final = $results -> fetch_assoc();
            


            ?>
          <h1>PRODUCTS</h1>

          <div class="box-body">

            <div class="form-group">
              <label for="name" class="cat-text">
                Name
              </label>
              <input type="text" class="form-control" id="name" placeholder="Enter Product Name"
                value="<?php echo $final['name'] ?>" name="name">
            </div>

            <div class=" form-group">
              <label for="price" class="cat-text">
                PRICE
              </label>
              <input type="text" class="form-control" id="price" placeholder="Price"
                value="<?php echo $final['price'] ?>" name="price">
            </div>

            <div class="form-group">
              <label for="picture" class="cat-text">
                File input
              </label>
              <input type="file" id="picture" name="file" value="<?php echo $final['picture'] ?>">
            </div>

            <div class="form-group">
              <label for="description" class="cat-text">
                Description
              </label>
              <textarea id="description" class="form-control" rows="10" placeholder="Enter Description"
                name="description" value="<?php echo $final['description'] ?>"></textarea>
            </div>

            <div class="form-group">
              <label for="category" class="cat-text">
                Category
              </label>
              <select id="category" name="category" value="<?php echo $final['category'] ?>">
                <?php
                    
                    $cat = "SELECT * FROM categories";
                    $results = mysqli_query($conn, $cat);

                    while($row = mysqli_fetch_assoc($results)){
                    
                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                    }

                      
                            

                  
                  ?>
              </select>
            </div>


          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <input type="hidden" name="form_id" value="<?php echo $final['id'] ?>">
            <button type="submit" class="btn btn-warning btn-lg" name="update">UPDATE</button>


          </div>
        </form>
      </div>
    </div>
  </section>
  <div class="col-sm-3">

  </div>
  <!-- /.content -->
</div>
<?php
 include ("adminincludes/footer.php");
 ?>
</body>

</html>