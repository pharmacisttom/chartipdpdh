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
$med1 = $_POST["med1"];
$edt = $_POST["edit"];
$des6 = $_POST["date3"];
$med2 = $_POST["doc3"];
$des7 = $_POST["date4"];
$des8 = $_POST["text3"];
$des9 = $_POST["date11"];

$sql2 = "UPDATE payslip.chartstatus a SET a.datetodoctor='$des2',a.doctorchart1='$med',a.doctorchart2='$med1',a.comment2='$des3',a.datesreturnchart2='$des4',a.edit='$edt',a.datetodoc3='$des6',a.doctorstaff3='$med2',datesreturnchart3='$des7',a.datechart2='$des9',a.comment3='$des8',a.dateupdate1 = now() where a.an ='$des1'";

$result2 = mysqli_query($conn, $sql2);
if ($result2) {
  header("location:chartstatus1.php");
  exit(0);
} else {
  echo "ไม่สามารถแก้ไขข้อมูลได้" . mysqli_error($conn);
}
?>
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
$med1 = $_POST["med1"];
$edt = $_POST["edit"];
$des6 = $_POST["date3"];
$med2 = $_POST["doc3"];
$des7 = $_POST["date4"];
$des8 = $_POST["text3"];
$des9 = $_POST["date11"];

$sql2 = "UPDATE payslip.chartstatus a SET a.datetodoctor='$des2',a.doctorchart1='$med',a.doctorchart2='$med1',a.comment2='$des3',a.datesreturnchart2='$des4',a.edit='$edt',a.datetodoc3='$des6',a.doctorstaff3='$med2',datesreturnchart3='$des7',a.datechart2='$des9',a.comment3='$des8',a.dateupdate1 = now() where a.an ='$des1'";

$result2 = mysqli_query($conn, $sql2);
if ($result2) {
  header("location:chartstatus1.php");
  exit(0);
} else {
  echo "ไม่สามารถแก้ไขข้อมูลได้" . mysqli_error($conn);
}
?>