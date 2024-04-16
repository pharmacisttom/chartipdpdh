<?php
//เชื่อมต่อฐานข้อมูล
require('config/condb.php');

//รับค่าที่มาจากฟอร์มแก้ไข

$sql = "insert ignore into hosdata.send_sms_12day
select date(now()) as regdate,tt.hn,'1' as frequency,tt.an as an,'12day' as chkdup,
concat('ติดตามchart',tt.dd,' HN: ',tt.hn,' ชื่อ/สกุล:: ',tt.fname,'แพทย์ที่รับchart',tt.doctorchart1,'และAUdittor',tt.doctorchart2,':','ผู้ติดตามchart',tt.adminname,':')as descrip,'0'as sms  
from (select a.hn,a.an,fname,a.dateadm,a.datedsc,DATEDIFF(date(now()),a.datedsc) as dayresultchart,a.datechart,
   case when DATEDIFF(date(now()),a.datedsc) = '12' then '12day'
        when DATEDIFF(date(now()),a.datedsc) = '14' then '14day'
        when DATEDIFF(date(now()),a.datedsc) = '20' then '20day'
        when DATEDIFF(date(now()),a.datedsc) BETWEEN '30' and '90' then '30day'
        when DATEDIFF(date(now()),a.datedsc) > '90'then '90day' 
        else '' end as dd,'0' as 'status',a.adminname,b.doctorchart1,b.doctorchart2,b.datesreturnchart2
   from payslip.ipdstatus a
   LEFT JOIN ipd.ipd cc on a.an = cc.an and a.hn = cc.hn
   LEFT JOIN ipd.idiag c on c.an = a.an
   LEFT JOIN payslip.chartstatus b on a.an = b.an
   where a.datedsc <> '0000-00-00'
   and c.diag is NULL
   UNION
   select a.hn,a.an,fname,a.dateadm,a.datedsc,DATEDIFF(date(now()),a.datedsc) as dayresultchart,a.datechart,
    case when DATEDIFF(date(now()),a.datedsc) = '12' then '12day'
        when DATEDIFF(date(now()),a.datedsc) = '14' then '14day'
        when DATEDIFF(date(now()),a.datedsc) = '20' then '20day'
        when DATEDIFF(date(now()),a.datedsc) BETWEEN '30' and '90' then '30day'
        when DATEDIFF(date(now()),a.datedsc) > '90'then '90day'
        else '' end as dd,'0' as 'status',a.adminname,b.doctorchart1,b.doctorchart2,b.datesreturnchart2
   from payslip.ipdstatus a
   LEFT JOIN ipd.ipd cc on a.an = cc.an and a.hn = cc.hn
   LEFT JOIN ipd.idiag c on c.an = a.an
   LEFT JOIN payslip.chartstatus b on a.an = b.an
   where a.datedsc <> '0000-00-00'
   and c.diag is not NULL ) tt
   LEFT JOIN payslip.chartclaim bb on tt.an = bb.an
   where tt.status = '0'
   and tt.datesreturnchart2 is null 
   and tt.dd in ('12day','14day','20day')
   and tt.doctorchart1 is not null
   ORDER BY tt.dayresultchart desc";
$result = mysqli_query($conn, $sql);

if ($result) {
//   header("location:linestart.php");
  echo " ส่งเข้าlinotify สำเร็จ ";
  exit(0);
} else {
  echo "ไม่สามารถเพิ่มข้อมูลได้" . mysqli_error($conn);
}