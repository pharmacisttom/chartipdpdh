<?php 
include 'config/condb.php';
$sql = "SELECT * FROM payslip.doctor";
$results = $conn->query($sql);
$row = $results->fetch_all(MYSQLI_ASSOC);
$results->free_result();
$conn->close();
echo json_encode($row);

?>