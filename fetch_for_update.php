<?php
include 'db.php';
$id = $_POST['id'];

$query = "SELECT * FROM equip_pro WHERE ID = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

echo json_encode($row);

mysqli_close($conn);
?>
