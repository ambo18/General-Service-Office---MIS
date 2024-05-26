<?php
		include 'db.php';

		$user = $_SESSION['ID'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$type=$_POST['type'];
		$quantity=$_POST['quantity'];
		$unit=$_POST['unit'];
		$name=$_POST['name'];
		$description=$_POST['description'];
		$prop_num=$_POST['prop_number'];
		$cost=$_POST['cost'];


				$sql = mysqli_query($conn, "INSERT into equip_pro (PROGRAM_ID,EQUIP_QUANTITY,UNIT,ARTICLE,EQUIP_DESCRIPTION,PROPERTY_NO,AVAILABILITY,COST) 
				VALUES ('$type','$quantity','$unit','$name','$description','$prop_num','$quantity','$cost')");
				if ($sql) {
					mysqli_query($conn, "INSERT into history_log (transaction,user_id,date_added) 
				VALUES ('added $name as new Property/Equipment','$user',NOW() )");
					echo "<script>
				alert('Type of property/equipment was successfully added');
				window.location.href='rms.php?page=Lists';
				</script>";

				} else {
				    "<script>
					alert('Failed to Submit.');
					</script>";
				}


}
  ?>