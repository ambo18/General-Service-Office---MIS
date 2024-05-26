<?php include 'newstudent.php'; ?>

<style>
    #getUser  {
        width: 100px;
        margin-bottom: 10px;
    }
    #updateButton  {
        width: 100px;
    }
</style>
    
<script>
    $(document).ready(function(){
        $(document).on('click', '#getUser', function(e){
            e.preventDefault();
            var uid = $(this).data('id');      
            $.ajax({
                url: 'view_students.php',
                type: 'POST',
                data: {id: uid},
                beforeSend:function() {
                    $("#content").html('Working on Please wait ..');
                },
                success:function(data) {
                    $("#content").html(data);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        $(document).on('click', '#updateButton', function(e){
            e.preventDefault();
            var uid = $(this).data('id');
            $.ajax({
                url: 'fetch_for_update.php',
                type: 'POST',
                data: {id: uid},
                success: function(data) {
                    var result = JSON.parse(data);
                    $('#updateModal #updateProg').val(result.PROGRAM_ID);
                    $('#updateModal #updateQuantity').val(result.EQUIP_QUANTITY);
                    $('#updateModal #updateUnit').val(result.UNIT);
                    $('#updateModal #updateName').val(result.ARTICLE);
                    $('#updateModal #updateDescription').val(result.EQUIP_DESCRIPTION);
                    $('#updateModal #updatePropNumber').val(result.PROPERTY_NO);
                    $('#updateModal #updateCost').val(result.COST);
                    $('#updateModal #updateID').val(uid);
                    $('#updateModal').modal('show');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        $('#updateSubmit').click(function(e) {
            e.preventDefault(); // Prevent default form submission
            var formData = $('#updateForm').serialize();
            $.ajax({
                url: 'update_entry.php',
                type: 'POST',
                data: formData,
                success: function(response) {
                    $('#updateModal').modal('hide');
                    // You may reload the page here if needed
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

<button style="float:right" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
    <i class="glyphicon glyphicon-plus"></i> New Entry
</button>

<!-- New Entry Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        
        
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">New Equipment or Property</h4>
        </div>
        <div class="modal-body">



        
    <form  class="form-horizontal" method="post">
    <fieldset>
    <div class="container">

    <div class="col-md-12" style="width:70%;border-bottom:1px solid #333">
    <h4><b>Properties or Equipment Details </b></h4>
    </div>
    <br>
    <br>

    <br>
    <div class="form-group">
    <label class="col-xs-4 control-label" for="prog">Type of Property,Plant, and Equipment</label>
    <div class="col-xs-8">
    <div class="input-group">
    <select id="prog" name="type" class="form-control input-xs" required="">
    <option>Select Type of Property,Plant, and Equipment</option>
    <?php
    include 'db.php';

    $sql = mysqli_query($conn,"SELECT * from program Order by EQUIP_TYPE ASC");
    while($row=mysqli_fetch_assoc($sql)){
    ?>
        <option value="<?php echo $row['PROGRAM_ID'] ?>"><?php echo $row['EQUIP_TYPE'] ?></option>
        <?php
    }
    mysqli_close($conn);
        ?>
    </select>
    </div>
    </div>
    </div>
    <!-- Prepended text-->
    <div class="form-group">
    <label class="col-xs-4 control-label" for="name">Unit of Measure</label>
    <div class="col-xs-4">
    <div class="input-group">
        <input id="name" class="form-control input-xs"
        style="text-transform: capitalize;" name="quantity" placeholder="Enter Quantity"  type="text" required="">
        <input id="name" class="form-control input-xs"
        style="text-transform: capitalize;" name="unit" placeholder="Enter Unit"  type="text" required="">
    </div>
    </div>
    </div>


    <div class="form-group">
    <label class="col-xs-4 control-label" for="address">Article Name</label>
    <div class="col-xs-8">
    <div class="input-group">
        <input id="address" class="form-control input-xs"
        style="text-transform: capitalize;" name="name" placeholder="Enter Article Name"  type="text" required="">    
    </div>
    </div>
    </div>

    <div class="form-group">
    <label class="col-xs-4 control-label" for="description">Description</label>  
    <div class="col-xs-4">
    <textarea id="description" placeholder="Enter Description" name="description" class="form-control input-xs" required="" rows="4" cols="20"></textarea>
    </div>
    </div>

    <div class="form-group">
    <label class="col-xs-4 control-label" for="prop_number">Property Number</label>  
    <div class="col-xs-8">
    <div class="input-group">
    <input id="prop_number" name="prop_number" type="text" style="text-transform: capitalize;" placeholder="Enter Property Number" class="form-control input-xs" required="">
    </div>
    </div>
    </div>

    <div class="form-group">
    <label class="col-xs-4 control-label" for="cost">Unit Cost</label>
    <div class="col-xs-8">
    <div class="input-group">
    <input class="form-control"  id="cost" name="cost" type="text"
    placeholder="Enter Unit Cost">
    </div>
    </div>
    </div>

    <br>

    </div>
    </fieldset>

    </div>
        <div class="modal-footer">
        <!--<input type="reset" class="btn btn-success " id="reset" name="reset" value="Reset Form">-->
            <input type="submit" class="btn btn-success " name="submit" value="Add New">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        </div>
        </div>
    </form>
</div>

<!-- Update Modal -->
<div class="modal fade" id="updateModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="updateModalLabel">Update Equipment or Property</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Update Modal content goes here -->
                <form id="updateForm" class="form-horizontal" method="post">
                    <fieldset>
                        <div class="container">
                            <div class="col-md-12" style="width:70%;border-bottom:1px solid #333">
                                <h4><b>Properties or Equipment Details</b></h4>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="form-group">
                                <label class="col-xs-4 control-label" for="updateProg">Type of Property, Plant, and Equipment</label>
                                <div class="col-xs-8">
                                    <div class="input-group">
                                        <select id="updateProg" name="type" class="form-control input-xs" required="">
                                            <option>Select Type of Property, Plant, and Equipment</option>
                                            <?php
                                            include 'db.php';
                                            $sql = mysqli_query($conn,"SELECT * from program Order by EQUIP_TYPE ASC");
                                            while($row=mysqli_fetch_assoc($sql)){
                                                ?>
                                                <option value="<?php echo $row['PROGRAM_ID'] ?>"><?php echo $row['EQUIP_TYPE'] ?></option>
                                                <?php
                                            }
                                            mysqli_close($conn);
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Prepended text-->
                            <div class="form-group">
                                <label class="col-xs-4 control-label" for="updateName">Unit of Measure</label>
                                <div class="col-xs-4">
                                    <div class="input-group">
                                        <input id="updateQuantity" class="form-control input-xs" style="text-transform: capitalize;" name="quantity" placeholder="Enter Quantity"  type="text" required="">
                                        <input id="updateUnit" class="form-control input-xs" style="text-transform: capitalize;" name="unit" placeholder="Enter Unit"  type="text" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-4 control-label" for="updateDescription">Description</label>
                                <div class="col-xs-4">
                                    <textarea id="updateDescription" placeholder="Enter Description" name="description" class="form-control input-xs" required="" rows="4" cols="20"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-4 control-label" for="updatePropNumber">Property Number</label>
                                <div class="col-xs-8">
                                    <div class="input-group">
                                        <input id="updatePropNumber" name="prop_number" type="text" style="text-transform: capitalize;" placeholder="Enter Property Number" class="form-control input-xs" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-4 control-label" for="updateCost">Unit Cost</label>
                                <div class="col-xs-8">
                                    <div class="input-group">
                                        <input class="form-control"  id="updateCost" name="cost" type="text" placeholder="Enter Unit Cost">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="updateID" name="id">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="updateSubmit">Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<h1 class="page-header">EQUIPMENTS</h1>

<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">List of Equipments</h3>
        </div>
        <div class="panel-body">
            <table id="equipments" class="table table-bordered table-condensed">
                <!-- Table header -->
                <thead>
                    <tr id="heads">
                        <th style="width:5%;text-align:center">ID</th>
                        <th style="width:5%;text-align:center">UNIT OF MEASURE</th>
                        <th style="width:15%;text-align:center">TYPE OF PROPERTY/EQUIPMENT</th>
                        <th style="width:15%;text-align:center">ARTICLE</th>
                        <th style="width:30%;text-align:center">DESCRIPTION</th>
                        <th style="width:25%;text-align:center">PROPERTY NUMBER</th>
                        <th style="width:25%;text-align:center">UNIT VALUE</th>
                        <th style="width:10%">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'db.php';
                    $sql=  mysqli_query($conn, "SELECT * FROM equip_pro JOIN program ON equip_pro.PROGRAM_ID = program.PROGRAM_ID WHERE TYPE='Equipment'");
                    while($row = mysqli_fetch_assoc($sql)) {
                        $sid = $row['ID'];
                    ?>
                    <tr>
                    <td style="text-align:center"><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['EQUIP_QUANTITY']. ' ' . $row['UNIT']; ?></td>   
                    <td style="text-align:center"><?php echo $row['EQUIP_TYPE']; ?></td>
                    <td style="text-align:center"><?php echo $row['ARTICLE']; ?></td>
                    <td><?php echo $row['EQUIP_DESCRIPTION']; ?></td>
                    <td style="text-align:center"><?php echo $row['PROPERTY_NO']; ?></td>
                    <td style="text-align:center"><?php echo $row['COST']; ?></td>
                
                    <td style="text-align:center"> 
                    <a  class="btn btn-info" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $sid; ?>" id="getUser">View</a>
                    <a  class="btn btn-info" data-toggle="modal" data-target="#updateModal" data-id="<?php echo $sid; ?>" id="updateButton">Update</a>
                    </td>
                    </tr>
                    <?php
                    }
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<h1 class="page-header">Supplies</h1>

<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">List of Supplies</h3>
        </div>
        <div class="panel-body">
            <table id="supplies" class="table table-bordered table-condensed">
                <!-- Table header -->
                <thead>
                    <tr id="heads">
                        <th style="width:5%;text-align:center">ID</th>
                        <th style="width:5%;text-align:center">UNIT OF MEASURE</th>
                        <th style="width:15%;text-align:center">TYPE OF PROPERTY/EQUIPMENT</th>
                        <th style="width:15%;text-align:center">ARTICLE</th>
                        <th style="width:30%;text-align:center">DESCRIPTION</th>
                        <th style="width:25%;text-align:center">PROPERTY NUMBER</th>
                        <th style="width:25%;text-align:center">UNIT VALUE</th>
                        <th style="width:10%">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'db.php';
                    $sql=  mysqli_query($conn, "SELECT * FROM equip_pro JOIN program ON equip_pro.PROGRAM_ID = program.PROGRAM_ID WHERE TYPE='Supply'");
                    while($row = mysqli_fetch_assoc($sql)) {
                        $sid = $row['ID'];
                    ?>
                    <tr>
                    <td style="text-align:center"><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['EQUIP_QUANTITY']. ' ' . $row['UNIT']; ?></td>   
                    <td style="text-align:center"><?php echo $row['EQUIP_TYPE']; ?></td>
                    <td style="text-align:center"><?php echo $row['ARTICLE']; ?></td>
                    <td><?php echo $row['EQUIP_DESCRIPTION']; ?></td>
                    <td style="text-align:center"><?php echo $row['PROPERTY_NO']; ?></td>
                    <td style="text-align:center"><?php echo $row['COST']; ?></td>
                
                    <td style="text-align:center"> 
                    <a  class="btn btn-info" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $sid; ?>" id="getUser">View</a>
                    <a  class="btn btn-info" data-toggle="modal" data-target="#updateModal" data-id="<?php echo $sid; ?>" id="updateButton">Update</a>
                    </td>
                    </tr>
                    <?php
                    }
                    mysqli_close($conn);
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

<script type="text/javascript">
    $(function() {
        $("#equipments").dataTable(
            { "aaSorting": [[ 2, "asc" ]] }
        );
        $("#supplies").dataTable(
            { "aaSorting": [[ 2, "asc" ]] }
        );
    });
</script>
