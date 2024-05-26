<?php
include 'db.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
$user = $_SESSION['ID'];
$id=$_POST['id'];
$quantity=$_POST['quantity'];
$name=$_POST['name'];
$department=$_POST['department'];



$search_query = mysqli_query($conn, "SELECT * FROM equip_pro WHERE ID = '$id' ");

		while($row=mysqli_fetch_assoc($search_query)){
			$val1 = $row['AVAILABILITY'];

				if ($quantity > $val1 ) {
					echo "<label class='text-danger bg-red'>Error: Make sure to input value equal or lesser than the quantity.</label>";
				} else {

					$differ = $val1 - $quantity;
					if ($differ == 0) {
						$differ = "OUT OF STOCK/UNAVAILABLE";

						$sql = mysqli_query($conn, "INSERT into material_requisition (EQUIP_ID,NAME,DETAILS,MR_DATE,QUANTITY) 
						VALUES ('$id','$name','$department',NOW(),'$quantity')");
						if ($sql) {
							$update = mysqli_query($conn, "UPDATE equip_pro SET AVAILABILITY='$differ' WHERE ID = '$id' ");
							$history = mysqli_query($conn, "INSERT into history_log (transaction,user_id,date_added) 
						VALUES ('issue order/MR to $name','$user',NOW() )");
							echo "<script>
						alert('Order/MR was successfully issued');
						window.location.href='rms.php?page=subjects';
						</script>";

						} else {
						 $not = mysqli_errno($conn) && mysqli_error($conn);
						 if ($not) {
						  	echo "<h4><p class='bg-danger'>Please make sure not to add apostrophe for the value of office/department.</p></h4>";
						  } 

						}



					}else{
						$sql = mysqli_query($conn, "INSERT into material_requisition (EQUIP_ID,NAME,DETAILS,MR_DATE,QUANTITY) 
						VALUES ('$id','$name','$department',NOW(),'$quantity')");
						if ($sql) {
							$update = mysqli_query($conn, "UPDATE equip_pro SET AVAILABILITY='$differ' WHERE ID = '$id' ");
							$history = mysqli_query($conn, "INSERT into history_log (transaction,user_id,date_added) 
						VALUES ('issue order/MR to $name','$user',NOW() )");
							echo "<script>
						alert('Order/MR was successfully issued');
						window.location.href='rms.php?page=subjects';
						</script>";

						} else {
							$not = mysqli_errno($conn) && mysqli_error($conn);
						 if ($not) {
						  	echo "Error";
						  } 

						}
					}



				}


}		
		//end of num_row
	
	}
mysqli_close($conn);

  ?>