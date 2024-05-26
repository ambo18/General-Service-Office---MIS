<?php
include 'newcurriculm.php';
?>
<script>
    $(document).ready(function(){

    $(document).on('click', '#get_sub', function(e){
  
     e.preventDefault();
  
     var prog = $(this).data('id');      
 
     $.ajax({
          url: 'get_subject.php',
          type: 'POST',
          data: 'prog='+prog,
          beforeSend:function()
{
 $("#content").html('Working on Please wait ..');
},
success:function(data)
{
   $("#content").html(data);
},
     })

    });
})
  </script>
  
       <div class="col-md-8">
       <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><h3 class="page-header">Type of Equipment / <small>section</small></h3></h3>
        </div> 
        <div class="panel-body">     
  <table id="students" class="table table-hover table-bordered">
    <thead>
      <tr id="heads">
        <th></th>
        <th style="width:10%">Type of Equipment</th>
        <th style="width:30%">Description</th>
        <th style="width:20%">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'db.php';
    $sql=  mysqli_query($conn, "SELECT * FROM program Order by EQUIP_TYPE");
    while($row = mysqli_fetch_assoc($sql)) {


    ?>
    <form class="" method="post" >
      <tr>
        <td style="width:10%"><?php echo $row['PROGRAM_ID'] ?></td>
        <td style="width:10%"><?php echo $row['EQUIP_TYPE'] ?></td>
        <td style="width:10%"><?php echo $row['DESCRIPTION'] ?></td>
        <td style="width:10%"><center><a href="delete_equiptype.php?id=<?php echo $row['PROGRAM_ID'] ?>" class="btn btn-danger" ><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></center></td>
      </tr>
      </form>
      <?php
    } mysqli_close($conn);
      ?>
      
    </tbody>
  </table>
</div>
</div>
</div>


      <div class="col-md-4">
        
      <div class="container frm-new">
      <div class="row main">
        <div class="main-login main-center">
        <h3>Add New</h3>
          <form class="" method="post" >
            <input type="hidden" name="id">
            <div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">Type of Equipment</label>
              <div class="cols-sm-4">
                <div class="input-group">
                  <input type="text" class="form-control" name="cur" id="sub"
                  style="width:225px"  placeholder="Enter Type of Equipment" value="<?php if(isset($_POST['cur'])){echo $_POST['cur'];} ?>"/>
                  <p>
            <?php if(isset($errors['cur'])){echo "<br><br><div class='erlert'><h5>" .$errors['cur']. "</h5></div>"; } ?>
            </p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="des" class="cols-sm-2 control-label">Description</label>
              <div class="cols-sm-4">
                <div class="input-group">
                  <textarea type="text" class="form-control" name="des" id="des"  
                  style="width:225px;height:50px" placeholder="Enter Description" value="<?php if(isset($_POST['des'])){echo $_POST['des'];} ?>" ></textarea>
                  <p>
            <?php if(isset($errors['des'])){echo "<br><br><br><div class='erlert'><h5>" .$errors['des']. "</h5></div>"; } ?>
            </p>
                </div>
              </div>
            </div>


            <div class="form-group ">
            <input type="reset" class="btn btn-info" id="reset" name="reset" value="Cancel">
              <button  class="btn btn-info" name="submit" id="submit">Add</button>
            </div>
            
          </form>
        </div>
      </div>

    </div>
    <script type="text/javascript">
        $(function() {
            $("#students").dataTable(
        { "aaSorting": [[ 2, "asc" ]] }
      );
        });
    </script>
