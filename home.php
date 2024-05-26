<?php

session_start();

include("db.php");

// Query to join equip_pro and program tables and select PROGRAM_ID, AVAILABILITY, and EQUIP_TYPE
$get_products = "
    SELECT equip_pro.PROGRAM_ID, equip_pro.AVAILABILITY, program.EQUIP_TYPE
    FROM equip_pro
    JOIN program ON equip_pro.PROGRAM_ID = program.PROGRAM_ID
";
$run_products = mysqli_query($conn, $get_products);
$count_products = mysqli_num_rows($run_products);

$get_products1 = "SELECT * FROM program";
$run_products1 = mysqli_query($conn, $get_products1);
$count_products1 = mysqli_num_rows($run_products1);

$supply = "SELECT * FROM program WHERE TYPE='Supply'";
$get_supply = mysqli_query($conn, $supply);
$total_supply = mysqli_num_rows($get_supply);

$equipment = "SELECT * FROM program WHERE TYPE='Equipment'";
$get_equipment = mysqli_query($conn, $equipment);
$total_equipment= mysqli_num_rows($get_equipment);

$get_products2 = "SELECT * FROM request";
$run_products2 = mysqli_query($conn, $get_products2);
$count_products2 = mysqli_num_rows($run_products2);

$get_products3 = "SELECT * FROM material_requisition";
$run_products3 = mysqli_query($conn, $get_products3);
$count_products3 = mysqli_num_rows($run_products3);
?>

<div class="container">
    <h3 class="page-header"><b>SUPPLY AND PROPERTY MANAGEMENT INFORMATION SYSTEM OF GSO</b></h3>

    <div class="row">

        <!-- Equipments & Properties Panel -->
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-list-alt fa-3x"></i>
                        </div>
                        <div class="col-xs-10 text-right">
                            <div class="huge"> <?php echo $count_products; ?> </div>
                            <div>Equipments & Properties</div>
                        </div>
                    </div>
                </div>
                <a href="rms.php?page=Lists">
                    <div class="panel-footer">
                        <span class="pull-left"> View Details </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-list-alt fa-3x"></i>
                        </div>
                        <div class="col-xs-10 text-right">
                            <div class="huge"> <?php echo $total_supply; ?> </div>
                            <div>Supplies</div>
                        </div>
                    </div>
                </div>
                <a href="rms.php?page=program">
                    <div class="panel-footer">
                        <span class="pull-left"> View Details </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

		<div class="col-lg-3 col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-list-alt fa-3x"></i>
                        </div>
                        <div class="col-xs-10 text-right">
                            <div class="huge"> <?php echo $total_equipment; ?> </div>
                            <div>Equipments</div>
                        </div>
                    </div>
                </div>
                <a href="rms.php?page=program">
                    <div class="panel-footer">
                        <span class="pull-left"> View Details </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
		
    </div>

	<div class="row">

		<!-- Property Type Panel -->
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-list-alt fa-3x"></i>
                        </div>
                        <div class="col-xs-10 text-right">
                            <div class="huge"> <?php echo $count_products1; ?> </div>
                            <div>Property Type</div>
                        </div>
                    </div>
                </div>
                <a href="rms.php?page=program">
                    <div class="panel-footer">
                        <span class="pull-left"> View Details </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Requests Panel -->
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-list-alt fa-3x"></i>
                        </div>
                        <div class="col-xs-10 text-right">
                            <div class="huge"> <?php echo $count_products2; ?> </div>
                            <div>Request/s</div>
                        </div>
                    </div>
                </div>
                <a href="rms.php?page=subjects">
                    <div class="panel-footer">
                        <span class="pull-left"> View Details </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Requisition Records Panel -->
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-list-alt fa-3x"></i>
                        </div>
                        <div class="col-xs-10 text-right">
                            <div class="huge"> <?php echo $count_products3; ?> </div>
                            <div>Requisition Records</div>
                        </div>
                    </div>
                </div>
                <a href="rms.php?page=report">
                    <div class="panel-footer">
                        <span class="pull-left"> View Details </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

	</div>

	<div class="row panel panel-success">
        <div class="col-lg-12">
            <h3 class="page-header">Property Type</h3>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Type of Equipement</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($run_products1)) {
                        echo "<tr>";
                        echo "<td>" . $row['EQUIP_TYPE'] . "</td>";
                        echo "<td>" . $row['DESCRIPTION'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row panel panel-success">
        <div class="col-lg-12">
            <h3 class="page-header">Equipments & Properties Details</h3>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>PROPERTIES/EQUIPMENT</th>
                        <th>AVAILABILITY</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($run_products)) {
                        echo "<tr>";
                        echo "<td>" . $row['EQUIP_TYPE'] . "</td>";
                        echo "<td>" . $row['AVAILABILITY'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
