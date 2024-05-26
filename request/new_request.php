<?php
		include 'db.php';
		
if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id=$_POST['equip_id'];
		$quantity=$_POST['quantity'];
		$contact=$_POST['contact'];
		$name=$_POST['name'];
		$department=$_POST['department'];



    


				$sql_insert = mysqli_query($conn, "INSERT into request(EQUIP_ID,REQUEST_QUANTITY,NAME,CONTACT,OFFICE) 
				VALUES ('$id','$quantity','$name','$contact','$department')");
				if ($sql_insert) {
					mysqli_query($conn, "INSERT into history_log (transaction,user_id,date_added) 
				VALUES ('added $name as new requester','$user',NOW() )");
					echo "<script>
				alert('Your request was submitted successfully. Details of the status of your request will be sent to your contact detail.');
				window.location.href='';
				</script>";

				} 



}
  ?>