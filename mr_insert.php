<?php
include 'db.php';


if(isset($_GET['request_id'])){
$user = $_SESSION['ID'];
$r_id=$_GET['request_id'];

$search_query = mysqli_query($conn, "SELECT * From equip_pro join request on equip_pro.ID = request.EQUIP_ID WHERE request.REQUEST_ID = '$r_id' ");

		while($row=mysqli_fetch_assoc($search_query)){
			$avail = $row['AVAILABILITY'];
			$quant = $row['REQUEST_QUANTITY'];
			$name = $row['NAME'];
			$department = $row['OFFICE'];
			$contact = $row['CONTACT'];
			$id = $row['EQUIP_ID'];

					$differ = $avail - $quant;
					if ($differ == 0) {
						$differ = "OUT OF STOCK/UNAVAILABLE";

						$sql = mysqli_query($conn, "INSERT into material_requisition (EQUIP_ID,NAME,DETAILS,MR_DATE,QUANTITY) 
						VALUES ('$id','$name','$department',NOW(),'$quant')");
						if ($sql) {
							$update = mysqli_query($conn, "UPDATE equip_pro SET AVAILABILITY='$differ' WHERE ID = '$id' ");
							$history = mysqli_query($conn, "INSERT into history_log (transaction,user_id,date_added) 
						VALUES ('issue order/MR to $name','$user',NOW() )");
							$delete_req = mysqli_query($conn, "DELETE FROM request WHERE REQUEST_ID= '$r_id' ");
							echo "<script>
						alert('Order/MR was successfully issued. Contact $name with this contact details $contact to inform him/her.');
						window.location.href='rms.php?page=subjects';
						</script>";

						} 



					}else{
						$sql = mysqli_query($conn, "INSERT into material_requisition (EQUIP_ID,NAME,DETAILS,MR_DATE,QUANTITY) 
						VALUES ('$id','$name','$department',NOW(),'$quant')");
						if ($sql) {
							$update = mysqli_query($conn, "UPDATE equip_pro SET AVAILABILITY='$differ' WHERE ID = '$id' ");
							$history = mysqli_query($conn, "INSERT into history_log (transaction,user_id,date_added) 
						VALUES ('issue order/MR to $name','$user',NOW() )");
							$delete_req = mysqli_query($conn, "DELETE FROM request WHERE REQUEST_ID= '$r_id' ");
							echo "<script>
						alert('Order/MR was successfully issued. Contact $name with this contact details $contact to inform him/her.');
						window.location.href='rms.php?page=subjects';
						</script>";

						}
					}

}		
		//end of num_row
	
	}
mysqli_close($conn);

  ?>