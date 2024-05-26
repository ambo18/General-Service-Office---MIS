<?php 
include 'db.php';
$id = $_GET['id'];

$user = $_SESSION['ID'];

$sql = "DELETE FROM program WHERE PROGRAM_ID='$id'";
mysqli_query($conn, "INSERT into history_log (transaction,user_id,date_added) 
		VALUES ('delete type of equipment list where ID is $id','$user',NOW() )");

if (mysqli_query($conn, $sql)) {
			echo "<script>
		alert('Type of equipment successfully deleted');
		window.location.href='rms.php?page=program';
		</script>";

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

 ?>