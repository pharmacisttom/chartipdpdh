<?php
//เชื่อมต่อฐานข้อมูล
require('config/condb.php');

//รับค่าที่มาจากฟอร์มแก้ไข
$des1 = $_POST["ant"];
$des2 = $_POST["pd1"];
$des3 = $_POST["pd2"];
$des4 = $_POST["pd3"];
$des5 = $_POST["pd4"];
$des6 = $_POST["pd5"];
$des7 = $_POST["pd6"];
$des8 = $_POST["pd7"];
$des9 = $_POST["pd8"];
$des10 = $_POST["pd9"];
$des11 = $_POST["pd10"];
$des12 = $_POST["pd11"];


$sql2 = "UPDATE payslip.chartclaim a 
SET a.codename='$des2',a.datetocoding='$des3',a.grouptoclaim='$des4',a.datetoresult='$des5',a.datetosys='$des6',a.datetocliamresult='$des7',a.datestatement='$des8',a.statementname='$des9',a.totalcliam='$des10',a.resultcliam='$des11',a.commentoclaim='$des12',a.dateclaimupdate=now() where a.an ='$des1'";

$result2 = mysqli_query($conn, $sql2);
if ($result2) {
  header("location:chartstatus3.php");
  exit(0);
} else {
  echo "ไม่สามารถแก้ไขข้อมูลได้" . mysqli_error($conn);
}
?>