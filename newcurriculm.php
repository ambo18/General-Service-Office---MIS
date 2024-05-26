<?php 

	include 'db.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$errors = array();

	if(preg_match("/\S+/", $_POST['cur']) === 0){
		$errors['cur'] = "* Type of Equipment is required.";
	}
	if(preg_match("/\S+/", $_POST['des']) === 0){
		$errors['des'] = "* Description is required.";
	}
	if(count($errors) === 0){
	$cur=$_POST['cur'];
	$des=$_POST['des'];
	echo $user = $_SESSION['ID'];
	if(empty($_POST['id'])){
		$sql=mysqli_query($conn, "INSERT into program (EQUIP_TYPE, DESCRIPTION) VALUES ( '$cur', '$des' )");
	}else{
		$sql=mysqli_query($conn, "UPDATE program set EQUIP_TYPE='$cur', DESCRIPTION='$des' where PROGRAM_ID = ".$_POST['id']);
	}
	if ($sql){
		echo "<script>
		alert('New Equipment successfully saved');
		window.location.href='rms.php?page=program';
		</script>";

	} else {
		echo "<script>
		alert('Failed to save record!" .$sql."');
		window.location.href='rms.php?page=program';
		</script>";

	}

}
}	

	mysqli_close($conn);

 ?>