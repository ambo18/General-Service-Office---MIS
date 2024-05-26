 
 <script>
  jQuery(document).ready(function(){
    $('#messsage').hide(); 
    
  });  
        </script>
  <div class="row">
    <div class="col-md-1 text-right">
      <a type="button" class="btn btn-info" href="rms.php?page=Lists" ><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back</a>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
    <?php include 'update_student.php'; ?>
    </div>
    <div class="col-md-4">
    </div>
    </div>

    

    <?php
    include 'db.php';
    $id = $_GET['id'];

    $sql = mysqli_query($conn, "SELECT * From equip_pro left join program on equip_pro.PROGRAM_ID=program.PROGRAM_ID where equip_pro.ID = '$id' ");
    while($row = mysqli_fetch_assoc($sql)){
     ?>
     <div class="container">
         <div class="col-md-12">
         <form method="post">
         
         <div class="row">
         <div class="col-md-2 text-right">
         <label>Article Name:</label>
         </div>
         <div class="col-md-4 text-center">
          <h3><label class="text-info text-uppercase"><?php echo $row['ARTICLE']; ?> </label></h3>
          <br><br> 
          </div>
         </div>

         <div class="row">
         <div class="col-md-2 text-right">
         <label>Quantity:</label>
         </div>
         <div class="col-md-2 text-center">
          <input  name="id" value="<?php echo $_GET['id'] ?>" hidden>
         <input type="number" class="form-control input-xs"  name="quantity" required>
          <label style="font-size:10px"><?php echo $row['UNIT'] ?></label><br>
            
          </div><br>
        </div>


         <div class="row">
         <div class="col-md-2 text-right">
         <label>Name of Personnel:</label>
         </div>
         <div class="col-md-4 text-center">
         <input type="text" class="form-control input-xs"  name="name" required>
          <br>
          
            
          </div>

         
        

        </div>
         <div class="row">
         <div class="col-md-2 text-right">
         <label>Office/Department:</label>
         </div>
         <div class="col-md-4 text-center">
          <input type="text" class="form-control input-xs"  name="department" required>
          <label style="font-size:10px">Please make sure not to add apostrophe for the value.</label>
          <label style="font-size:15px"><i class="fa fa-check"></i> ex. Treasurer Office.</label>
          <br>  
          </div>
         </div>

         
         <div class="row">
         <div class="col-md-5 text-right">
          <button type="submit" class="btn btn-info"><i class="fa fa-pencil-square" aria-hidden="true"></i> Issue Order/MR</button>
          
          </div>

         </div>
        </form>
          
          </div> 
        </div>

    <?php
    } mysqli_close($conn);
     ?>

</div>
</div>
</div> 
</div> 


   
