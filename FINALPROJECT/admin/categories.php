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

<div class="container">


  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-sm-3">

      </div>
      <div class="col-sm-6">
        <form role="form" action="cathandler.php" method="post">
          <h1>CATEGORIES</h1>
          <div class="box-body">
            <div class="form-group ">
              <label for="category" class=" pro-text">
                Add a new category here:
              </label>
              <input type="text" class="form-control" id="category" placeholder="Enter Category" name="name">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="d-flex box-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
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