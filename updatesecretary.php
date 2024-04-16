<?php
//เชื่อมต่อฐานข้อมูล
require('config/condb.php');

//รับค่าที่มาจากฟอร์มแก้ไข
$des1 = $_POST["n"];
$des2 = $_POST["nname"];
$des3 = $_POST["record"];
$des4 = $_POST["p"];
$sql2 = "UPDATE payslip.secretary SET namesecret='$des2',position='$des3',part='$des4',dateupdate = now() where idsecretary ='$des1'";
$result2 = mysqli_query($conn, $sql2);
if ($result2) {
  header("location:doctor.php");
  exit(0);
} else {
  echo "ไม่สามารถแก้ไขข้อมูลได้" . mysqli_error($conn);
}
?>