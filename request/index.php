<?php
include 'new_request.php';

?>

<div class="container">
  <div class="login-form" id="login_modal" role="dialog" >
    <center><h4><p class="text-center">Please input the necessary details.</p></h4></center><br>

         <form class="form-horizontal" method="post">
         
         <div class="row">
         <div class="col-md-4 text-right">
         <label>Article Name:</label>
         </div>
         <div class="col-md-8 text-center">
          <select name="equip_id" class="form-control input-xs">
            <option>Choose Equipment</option>
          <?php
          include 'db.php';

          $sql = mysqli_query($conn,"SELECT * From equip_pro Order by ARTICLE ASC");
          while($row=mysqli_fetch_assoc($sql)){
          ?>
            <option value="<?php echo $row['ID']; ?>"><?php echo $row['ARTICLE']; ?> - (<?php echo $row['AVAILABILITY']; ?>)</option>
            <?php
          }
          mysqli_close($conn);
            ?>
          </select>
          <br>
          </div>
         </div>

         <div class="row">
         <div class="col-md-4 text-right">
         <label>Quantity:</label>
         </div>
         <div class="col-md-8 text-center">
         <input type="text" class="form-control input-xs"  name="quantity" required>
          <br>
          </div>
        </div>

         <div class="row">
         <div class="col-md-4 text-right">
         <label>Name:</label>
         </div>
         <div class="col-md-8 text-center">
         <input type="text" class="form-control input-xs"  name="name" required>
          <br>
          </div>
        </div>

        <div class="row">
         <div class="col-md-4 text-right">
         <label>Contact:</label>
         </div>
         <div class="col-md-8 text-center">
         <input type="text" class="form-control input-xs"  name="contact" required>
          <br>
          </div>
        </div>

         <div class="row">
         <div class="col-md-4 text-right">
         <label>Office/Department:</label>
         </div>
         <div class="col-md-8 text-center">
          <input type="text" class="form-control input-xs"  name="department" required>
          <label style="font-size:10px">Please make sure not to add apostrophe for the value.</label>
          <label style="font-size:15px"><i class="fa fa-check"></i> ex. Treasurer Office.</label>
          <br>  
          </div>
         </div>

         <br>
         <div class="row">
         <div class="text-center">
          <button type="submit" class="btn btn-info btn-lg">SUBMIT REQUEST</button>
          
          </div>

         </div>
        </form>
   </div>          
</div>


    <script src="assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
