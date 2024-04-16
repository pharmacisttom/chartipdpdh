<?php
//เชื่อมต่อฐานข้อมูล
require('config/condb.php');


//รับค่าที่มาจากฟอร์มแก้ไข
$item = $_GET["an"];

$sql = "INSERT INTO payslip.ipdstatus (idchart,an,hn,fname,dateadm,datedsc,datechart,adminname,status)
SELECT concat(aa.an,'-',aa.hn)as idchart,aa.an,aa.hn,aa.name1 as fname,aa.dateadm,aa.datedsc,now(),'' as adminname,'0' as status
FROM (select a.regdate,a.hn,a.an,c.cardid,concat(c.pttitle,ptfname,'   ',ptlname)as name1,a.dateadm,a.datedsc,a.now_ward,
DATEDIFF(date(now()),a.datedsc) as dayresultchart,
b.`name`,d.typearea,e.roomname,c.descrip
from ipd.ipd a
LEFT JOIN hos.hosbed b on a.bed = b.code
left join pt.pt c on a.hn = c.hn
LEFT JOIN pcu.person d on a.hn = d.p_code
left join hos.roomno e on a.now_ward = e.roomcode
LEFT JOIN ipd.idiag c on c.an = a.an
where a.datedsc <> '0000-00-00'
and a.dateadm BETWEEN 20231001 and date(now())
and c.diag is NULL ) aa
where aa.an = '$item'";
$result = mysqli_query($conn, $sql);
// $sql = "UPDATE hos.itemlist SET Name='$Name',descrip1='$des1',descrip2='$des2',descrip3='$des3',descrip4='$des4' where itemcode='$item' ";
$sql1 = "INSERT INTO payslip.chartstatus (idchart,an,datestartchart1)
SELECT concat(aa.an,'-',aa.hn)as idchart,aa.an as an,now() as datestartchart1
FROM (select a.hn,a.an,c.cardid,concat(c.pttitle,ptfname,'   ',ptlname)as name1
from ipd.ipd a
left join pt.pt c on a.hn = c.hn
LEFT JOIN pcu.person d on a.hn = d.p_code
left join hos.roomno e on a.now_ward = e.roomcode
LEFT JOIN ipd.idiag c on c.an = a.an
where a.datedsc <> '0000-00-00'
and a.dateadm BETWEEN 20231001 and date(now())
and c.diag is NULL ) aa
where aa.an = '$item'";
$result = mysqli_query($conn, $sql1);

if ($result) {
  header("location:datachartipd.php");
  exit(0);
} else {
  echo "ไม่สามารถเพิ่มข้อมูลได้" . mysqli_error($conn);
}

