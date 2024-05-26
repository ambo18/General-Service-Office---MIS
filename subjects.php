<script>
    $(document).ready(function(){

    $(document).on('click', '#getUser', function(e){
  
     e.preventDefault();
  
     var uid = $(this).data('id');      
 
     $.ajax({
          url: 'view_students.php',
          type: 'POST',
          data: 'id='+uid,
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


          <h1 class="page-header">MATERIAL AVAILABILITY<button style="float:right" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
      <i class="glyphicon glyphicon-plus"></i> New Request</button></h1>
       

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Request</h4>
        </div>
        <div class="modal-body">
            <fieldset>
            <div class="container-fluid">

            <div class="col-md-12" style="width:100%;border-bottom:1px solid #333">
            <h4><b>Request Details </b></h4>
            </div>

       <div class="col-md-12">    
        <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">List of Material Availability</h3>
        </div> 
        <div class="panel-body">  

  <table id="students" class="table table-bordered">
    <thead>
      <tr id="heads">
        <th style="width:5%;text-align:center">ARTICLE</th>
        <th style="width:15%;text-align:center">DESCRIPTION</th>
        <th style="width:5%;text-align:center">QUANTITY</th>
        <th style="width:15%;text-align:center">NAME</th>
        <th style="width:15%;text-align:center">CONTACT</th>
        <th style="width:15%;text-align:center">DEPARTMENT</th>
        <th style="width:10%">ACTION</th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'db.php';
    $sql=  mysqli_query($conn, "SELECT * From equip_pro join request on equip_pro.ID = request.EQUIP_ID ");
    while($row = mysqli_fetch_assoc($sql)) {

      $sid = $row['ID'];

    ?>
      <tr>


        <td style="text-align:center"><?php echo $row['ARTICLE']; ?></td> 
        <td style="text-align:center"><?php echo $row['EQUIP_DESCRIPTION']; ?></td>
        <td style="text-align:center"><?php echo $row['REQUEST_QUANTITY']; ?></td>
        <td style="text-align:center"><?php echo $row['NAME']; ?></td>
        <td style="text-align:center"><?php echo $row['CONTACT']; ?></td>
        <td style="text-align:center"><?php echo $row['OFFICE']; ?></td>
     
        <td style="text-align:center"> 
          <?php 
           if ($row['AVAILABILITY'] == 'OUT OF STOCK/UNAVAILABLE') {
             echo '<p class="bg-info">NO ACTION NEEDED</p>';
           } else {?>
            <a  class="btn btn-info" href="mr_insert.php?request_id=<?php echo $row['REQUEST_ID']; ?>">Issue Order</a><?php     
           }
           

           ?>

       </td>
       </tr>

      <?php
    
    } mysqli_close($conn);
      ?>
    </tbody>
  </table>
</div>
</div>
</div>

            </div>
            </fieldset>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
 
</div>


       <div class="col-md-12 ">    
        <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">List of Material Availability</h3>
        </div> 
        <div class="panel-body">  

  <table id="students1" class="table table-bordered table-condensed">
    <thead>
      <tr id="heads">
        <th style="width:5%;text-align:center">ID</th>
        <th style="width:15%;text-align:center">TYPE OF PROPERTY/EQUIPMENT</th>
        <th style="width:15%;text-align:center">ARTICLE</th>
        <th style="width:15%;text-align:center">AVAILABILITY</th>
        <th style="width:10%">ACTION</th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'db.php';
    $sql=  mysqli_query($conn, "SELECT * From equip_pro join program on equip_pro.PROGRAM_ID = program.PROGRAM_ID ");
    while($row = mysqli_fetch_assoc($sql)) {

      $sid = $row['ID'];

    ?>
      <tr>


        <td style="text-align:center"><?php echo $row['ID']; ?></td> 
        <td style="text-align:center"><?php echo $row['EQUIP_TYPE']; ?></td>
        <td style="text-align:center"><?php echo $row['ARTICLE']; ?></td>
        <td style="text-align:center"><?php 
         if ($row['AVAILABILITY'] == 'OUT OF STOCK/UNAVAILABLE') {
           echo '<p class="bg-danger">OUT OF STOCK/UNAVAILABLE</p>';
         } else {
           echo $row['AVAILABILITY']; ?> <?php echo $row['UNIT'];
         }
         

         ?>
         </td>
     
      <td style="text-align:center"> 
        <?php 
         if ($row['AVAILABILITY'] == 'OUT OF STOCK/UNAVAILABLE') {
           echo '<p class="bg-info">NO ACTION NEEDED</p>';
         } else {?>
          <a  class="btn btn-info" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $sid; ?>" id="getUser">Issue Order</a><?php     
         }
         

         ?>

     </td>
       </tr>

      <?php
    
    } mysqli_close($conn);
      ?>
    </tbody>
  </table>
</div>
</div>
</div>

       <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-lg">  
             
                  <div class="modal-header"> 
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                     <h4 class="modal-title">
                     <i class=""></i> View/Update Details
                     </h4> 
                  </div> 
                     <div id="content">

                     </div>
                  
                                 
              </div> 
            </div>
          </div>  

<script>
  function update_subject($i){
    var act,sub,para,desc,i =$i;
      para = $("#para"+i).val();
      $("#id").val($("#id"+i).val());
      $("#sub").val($("#sub"+i).val());
      $("#para").html(para);
      $("#des").val($("#des"+i).val());
      $("#head").html("Update Subject");
      $("#btn_add").html("Update");


  }
</script>



 <script type="text/javascript">
        $(function() {
            $("#students").dataTable(
        { "aaSorting": [[ 0, "asc" ]] }
      );
        });
 </script>
  <script type="text/javascript">
        $(function() {
            $("#students1").dataTable(
        { "aaSorting": [[ 0, "asc" ]] }
      );
        });
 </script>
