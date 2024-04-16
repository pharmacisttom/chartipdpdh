<?php
//เชื่อมต่อฐานข้อมูล
require('config/condb.php');

//รับค่าที่มาจากฟอร์มแก้ไข
$des1 = $_POST["n"];
$des2 = $_POST["nname"];
$des3 = $_POST["record"];
$des4 = $_POST["p"];


$sql2 = "insert into payslip.secretary (idsecretary,namesecret,position,part,status,dateupdate) 
value('$des1','$des2','$des3','$des4','1',now())";
$result2 = mysqli_query($conn, $sql2);
if ($result2) {
  header("location:recorder.php");
  exit(0);
} else {
  echo "ไม่สามารถแก้ไขข้อมูลได้" . mysqli_error($conn);
}
?>