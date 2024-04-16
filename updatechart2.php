<?php
//เชื่อมต่อฐานข้อมูล
require('config/condb.php');

//รับค่าที่มาจากฟอร์มแก้ไข
$des1 = $_POST["ant"];
$des2 = $_POST["date1"];
$des3 = $_POST["text1"];
$des4 = $_POST["date2"];
$des5 = $_POST["text2"];
$med = $_POST["med"];
$cliam1 = $_POST["dateclaim"];
$cliam2 = $_POST["cname"];
$cliam3 = $_POST["textclaim"];

$sql2 = "UPDATE payslip.chartstatus a SET a.cname='$cliam2',a.datechart2='$des2',a.doctorchart2='$med',a.comment2='$des3',a.datesreturnchart2='$des4',a.commentreturn2='$des5',a.datetoclaim ='$cliam1',a.commentclaim='$cliam3',a.dateupdate2 = now() where a.an ='$des1'";

$result2 = mysqli_query($conn, $sql2);
if ($result2) {
  header("location:chartstatus2.php");
  exit(0);
} else {
  echo "ไม่สามารถแก้ไขข้อมูลได้" . mysqli_error($conn);
}
?>