<?php
include 'db.php';

// Assuming you have sanitized the inputs for security
$id = $_POST['id'];
$type = $_POST['type'];
$quantity = $_POST['quantity'];
$unit = $_POST['unit'];
$name = $_POST['name'];
$description = $_POST['description'];
$prop_number = $_POST['prop_number'];
$cost = $_POST['cost'];

$query = "UPDATE equip_pro SET PROGRAM_ID=?, EQUIP_QUANTITY=?, UNIT=?, ARTICLE=?, EQUIP_DESCRIPTION=?, PROPERTY_NO=?, COST=? WHERE id=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("sssssssi", $type, $quantity, $unit, $name, $description, $prop_number, $cost, $id);
$stmt->execute();

mysqli_close($conn);
?>
