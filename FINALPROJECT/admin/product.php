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
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-sm-3">

      </div>

      <div class="col-sm-6">
        <form role="form" action="producthandler.php" method="post" enctype="multipart/form-data">
          <h1>PRODUCTS</h1>

          <div class="box-body">

            <div class="form-group">
              <label for="name" class="pro-text">
                Name
              </label>
              <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name">
            </div>

            <div class=" form-group">
              <label for="price" class="pro-text">
                PRICE
              </label>
              <input type="text" class="form-control" id="price" placeholder="Price" name="price">
            </div>

            <div class="form-group">
              <label for="picture" class="pro-text">
                File input
              </label>
              <br>
              <input class="justify-content-right" type="file" id="picture" name="file">
            </div>

            <div class="form-group">
              <label for="description" class="pro-text">
                Description
              </label>
              <textarea id="description" class="form-control" rows="10" placeholder="Enter Description"
                name="description"></textarea>
            </div>

            <div class="form-group">
              <label for="category" class="pro-text">
                Category
              </label>
              <br>
              <select id="category" name="category">
                <?php
                    include ("../includes/connect.php");
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

          <div class="d-flex box-footer justify-content-center">
            <input name="submit" value="INSERT PRODUCT" type="submit" class="btn btn-primary btn-lg">


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
 include ("includes/footer.php");
 ?>
</body>

</html>