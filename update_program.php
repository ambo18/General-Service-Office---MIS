<?php 
include 'db.php';
			$id = $_GET['id'];
			$prog = $_GET['prog'];
			$desc = $_GET['desc'];
			$user = $_GET['ID'];

			$sql = "UPDATE program SET EQUIP_TYPE='$prog',DESCRIPTION='$desc' WHERE PROGRAM_ID='$id'";
			mysqli_query($conn, "INSERT into history_log (transaction,user_id,date_added) 
					VALUES ('ID No. $id updated in the Type of Equipment list','$user',NOW() )");

			if (mysqli_query($conn, $sql)) {
						echo "<script>
					alert('Type of equipment successfully updated');
					window.location.href='rms.php?page=program';
					</script>";


			} else {
			    echo "Error updating record: " . mysqli_error($conn);
			}

mysqli_close($conn);

 ?>