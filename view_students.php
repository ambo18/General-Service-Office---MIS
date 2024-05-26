<div class="modal-body"> 

    <?php
    include 'db.php';
    $id = $_POST['id'];

  if($_POST['id']){
    $sql = mysqli_query($conn, "SELECT * From equip_pro left join program on equip_pro.PROGRAM_ID = program.PROGRAM_ID where equip_pro.ID = '$id'");
    while($row = mysqli_fetch_assoc($sql)){
     ?>
         <input type="hidden" name="id" value="<?php echo $id ?>"
         <div class="row">
           <div class="col-md-5 text-right">
           <label>Type of Equipment:</label>
           </div>
           <div class="col-md-2 text-left">
            <?php echo $row['EQUIP_TYPE'] ?> 
            </div>
          </div>

         <br>
         <div class="row">
         <div class="col-md-5 text-right">
         <label>Unit/Quantity:</label>
         </div>
         <div class="col-md-4 text-left">
         <?php echo $row['UNIT'].", ".$row['EQUIP_QUANTITY']; ?>
    
          </div>
        </div>
         <div class="row">
         <div class="col-md-5 text-right">
         <label>Article:</label>
         </div>
         <div class="col-md-2 text-left">
         <?php echo $row['ARTICLE'] ?>
          <label></label>
            
          </div>

         </div>

        <div class="row">
         <div class="col-md-5 text-right">
         <label>Description:</label>
         </div>
         <div class="col-md-2 text-left">
         <?php echo $row['DESCRIPTION'] ?>
          <label></label>
            
          </div>

         </div>
         <div class="row">
         <div class="col-md-5 text-right">
         <label>Property Number:</label>
         </div>
         <div class="col-md-2 text-left">
        <?php echo $row['PROPERTY_NO'] ?>
            
          </div>

        </div>
         <div class="row">
         <div class="col-md-5 text-right">
         <label>Cost:</label>
         </div>
         <div class="col-md-4 text-left">
          ₱ <?php echo $row['COST']; ?>.00
          <label></label>
            
          </div>

         </div>


        
         <div class="row">
         <div class="col-md-8 text-right">
         <!-- <button type="submit" class="btn btn-info"><i class="fa fa-pencil-square" aria-hidden="true"></i> Update</button> -->
          
          </div>

         </div>
         </div>
         </div>
         <div class="modal-footer">
           <a  class="btn btn-info" href="rms.php?page=order_p&id=<?php echo $id ?>">Issue Order/MR</a>
                  
           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
         </div>
        
       

        

    <?php
    }
    } mysqli_close($conn);
     ?>



 