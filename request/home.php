<?php

session_start();

include("db.php");

$get_products = "SELECT * FROM equip_pro";
$run_products = mysqli_query($conn,$get_products);
$count_products = mysqli_num_rows($run_products);

$get_products1 = "SELECT * FROM program";
$run_products1 = mysqli_query($conn,$get_products1);
$count_products1 = mysqli_num_rows($run_products1);

$get_products2 = "SELECT * FROM request";
$run_products2 = mysqli_query($conn,$get_products2);
$count_products2 = mysqli_num_rows($run_products2);

$get_products3 = "SELECT * FROM material_requisition";
$run_products3 = mysqli_query($conn,$get_products3);
$count_products3 = mysqli_num_rows($run_products3);
?>
<div class="container">
	          <h2 class="page-header">GENERAL SERVICES OFFICE - SUPPLY AND PROPERTY MANAGEMENT INFORMATION SYSTEM OF THE LOCAL GOVERNMENT UNIT OF GEN. MACARTHUR, EASTERN SAMAR</h2>

	          <div class="row">
					<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

					<div class="panel panel-primary"><!-- panel panel-primary Starts -->

					<div class="panel-heading"><!-- panel-heading Starts -->

					<div class="row"><!-- panel-heading row Starts -->

					<div class="col-xs-2"><!-- col-xs-3 Starts -->

					<i class="fa fa-list-alt fa-3x"> </i>

					</div><!-- col-xs-3 Ends -->

					<div class="col-xs-10 text-right"><!-- col-xs-9 text-right Starts -->

					<div class="huge"> <?php echo $count_products; ?> </div>

					<div>Equipments & Properties</div>

					</div><!-- col-xs-9 text-right Ends -->

					</div><!-- panel-heading row Ends -->

					</div><!-- panel-heading Ends -->

					<a href="rms.php?page=Lists">

					<div class="panel-footer"><!-- panel-footer Starts -->

					<span class="pull-left"> View Details </span>

					<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

					<div class="clearfix"></div>

					</div><!-- panel-footer Ends -->

					</a>

					</div><!-- panel panel-primary Ends -->

					</div><!-- col-lg-3 col-md-6 Ends -->

					<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

					<div class="panel panel-success"><!-- panel panel-primary Starts -->

					<div class="panel-heading"><!-- panel-heading Starts -->

					<div class="row"><!-- panel-heading row Starts -->

					<div class="col-xs-2"><!-- col-xs-3 Starts -->

					<i class="fa fa-list-alt fa-3x"> </i>

					</div><!-- col-xs-3 Ends -->

					<div class="col-xs-10 text-right"><!-- col-xs-9 text-right Starts -->

					<div class="huge"> <?php echo $count_products1; ?> </div>

					<div>Property Type</div>

					</div><!-- col-xs-9 text-right Ends -->

					</div><!-- panel-heading row Ends -->

					</div><!-- panel-heading Ends -->

					<a href="rms.php?page=program">

					<div class="panel-footer"><!-- panel-footer Starts -->

					<span class="pull-left"> View Details </span>

					<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

					<div class="clearfix"></div>

					</div><!-- panel-footer Ends -->

					</a>

					</div><!-- panel panel-primary Ends -->

					</div><!-- col-lg-3 col-md-6 Ends -->

					<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

					<div class="panel panel-danger"><!-- panel panel-primary Starts -->

					<div class="panel-heading"><!-- panel-heading Starts -->

					<div class="row"><!-- panel-heading row Starts -->

					<div class="col-xs-2"><!-- col-xs-3 Starts -->

					<i class="fa fa-list-alt fa-3x"> </i>

					</div><!-- col-xs-3 Ends -->

					<div class="col-xs-10 text-right"><!-- col-xs-9 text-right Starts -->

					<div class="huge"> <?php echo $count_products2; ?> </div>

					<div>Request/s</div>

					</div><!-- col-xs-9 text-right Ends -->

					</div><!-- panel-heading row Ends -->

					</div><!-- panel-heading Ends -->

					<a href="rms.php?page=subjects">

					<div class="panel-footer"><!-- panel-footer Starts -->

					<span class="pull-left"> View Details </span>

					<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

					<div class="clearfix"></div>

					</div><!-- panel-footer Ends -->

					</a>

					</div><!-- panel panel-primary Ends -->

					</div><!-- col-lg-3 col-md-6 Ends -->

	          </div>

			  <div class="row">

			  <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

				<div class="panel panel-info"><!-- panel panel-primary Starts -->

				<div class="panel-heading"><!-- panel-heading Starts -->

				<div class="row"><!-- panel-heading row Starts -->

				<div class="col-xs-2"><!-- col-xs-3 Starts -->

				<i class="fa fa-list-alt fa-3x"> </i>

				</div><!-- col-xs-3 Ends -->

				<div class="col-xs-10 text-right"><!-- col-xs-9 text-right Starts -->

				<div class="huge"> <?php echo $count_products3; ?> </div>

				<div>Requisition Records</div>

				</div><!-- col-xs-9 text-right Ends -->

				</div><!-- panel-heading row Ends -->

				</div><!-- panel-heading Ends -->

				<a href="rms.php?page=report">

				<div class="panel-footer"><!-- panel-footer Starts -->

				<span class="pull-left"> View Details </span>

				<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

				<div class="clearfix"></div>

				</div><!-- panel-footer Ends -->

				</a>

				</div><!-- panel panel-primary Ends -->

				</div><!-- col-lg-3 col-md-6 Ends -->

			  </div>
</div>
	