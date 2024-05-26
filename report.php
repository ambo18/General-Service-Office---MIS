<h1 class="page-header">Requisition Details for Equipment</h1>

<div class="container">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">
        <a class="btn btn-info" onclick='window.open("pdf_all.php")'>
            <i class="fa fa-fw fa-print"></i>Print All Details
        </a>
        <hr>
    </div>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Order/MR List</h3>
            </div>
            <div class="panel-body">
                <table id="equipment" class="table table-bordered text-center">
                    <thead>
                        <tr id="heads">
                            <th style="width:3%">ID</th>
                            <th style="width:4%">Quantity</th>
                            <th style="width:8%">Article</th>
                            <th style="width:15%">Name & Office</th>
                            <th style="width:10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'db.php';
                        $sql = mysqli_query($conn, "
                            SELECT * 
                            FROM material_requisition 
                            JOIN equip_pro ON equip_pro.ID = material_requisition.EQUIP_ID
                            JOIN program ON program.PROGRAM_ID = equip_pro.PROGRAM_ID 
                            WHERE program.TYPE = 'Equipment'
                        ");
                        while ($row = mysqli_fetch_assoc($sql)) {
                        ?>
                            <tr>
                                <td><?php echo $row['MR_ID']; ?></td>
                                <td><?php echo $row['QUANTITY'] . ' ' . $row['UNIT']; ?></td>
                                <td><?php echo $row['ARTICLE']; ?></td>
                                <td><?php echo $row['NAME'] . ' - ' . $row['DETAILS']; ?></td>
                                <td>
                                    <a class="btn btn-info" onclick='window.open("pdf_solo.php?id=<?php echo $row['MR_ID'] ?>")'>
                                        <i class="fa fa-fw fa-print"></i>Print MR
                                    </a>
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
</div>

<h1 class="page-header">Requisition Details for Supplies</h1>

<div class="container">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">
        <a class="btn btn-info" onclick='window.open("pdf_all_supply.php")'>
            <i class="fa fa-fw fa-print"></i>Print All Details
        </a>
        <hr>
    </div>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Order/MR List</h3>
            </div>
            <div class="panel-body">
                <table id="supplies" class="table table-bordered text-center">
                    <thead>
                        <tr id="heads">
                            <th style="width:3%">ID</th>
                            <th style="width:4%">Quantity</th>
                            <th style="width:8%">Article</th>
                            <th style="width:15%">Name & Office</th>
                            <th style="width:10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'db.php';
                        $sql = mysqli_query($conn, "
                            SELECT * 
                            FROM material_requisition 
                            JOIN equip_pro ON equip_pro.ID = material_requisition.EQUIP_ID
                            JOIN program ON program.PROGRAM_ID = equip_pro.PROGRAM_ID 
                            WHERE program.TYPE = 'Supply'
                        ");
                        while ($row = mysqli_fetch_assoc($sql)) {
                        ?>
                            <tr>
                                <td><?php echo $row['MR_ID']; ?></td>
                                <td><?php echo $row['QUANTITY'] . ' ' . $row['UNIT']; ?></td>
                                <td><?php echo $row['ARTICLE']; ?></td>
                                <td><?php echo $row['NAME'] . ' - ' . $row['DETAILS']; ?></td>
                                <td>
                                    <a class="btn btn-info" onclick='window.open("pdf_solo.php?id=<?php echo $row['MR_ID'] ?>")'>
                                        <i class="fa fa-fw fa-print"></i>Print MR
                                    </a>
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
</div>

<script type="text/javascript">
    $(function() {
        $("#equipment").dataTable({
            "aaSorting": [
                [0, "asc"]
            ]
        });
        $("#supplies").dataTable({
            "aaSorting": [
                [0, "asc"]
            ]
        });
    });
</script>
