<?php
require('config/condb.php');

$item = $_GET["an"];

// $sql = "SELECT * FROM employee WHERE emp_id=$item";
$sql = "SELECT DATEDIFF(a.datesreturnchart2,c.datedsc)as n,c.*,a.*
FROM payslip.chartstatus a
LEFT JOIN payslip.ipdstatus c on c.an = a.an and c.idchart = a.idchart
where a.an = '$item'";
$result = mysqli_query($conn, $sql);
$row3 = mysqli_fetch_assoc($result);
?>
<?php
require('config/condb.php');
$sql1 = " select * FROM payslip.doctor ";
$result2 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result2);
?>
<!doctype html>
<html lang="en">

<head>

<?php include 'head.php'; ?>

</head>

<body>
  <div class="container my-3">
    <h3 class="text-left">ข้อมูลผู้ป่วยที่่ระบบipdchart พบแพทย์เพื่อสรุปchart  </h3>
    <hr>
    <form action="updatechart1.php" method="POST">
      <input type="hidden" value="<?php echo $row3["an"]; ?>" name="an">
      <div class="form-group col-6">
        <div>
          <div class="form-group">
            <label for="Name"> หมายเลขรับเข้าระบบ :</label>
            <input type="text" name="idchart" class="form-control" value="<?php echo $row3["idchart"]; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="descrip1">หมายเลข AN :</label>
            <input type="text" name="ant" class="form-control" value="<?php echo $row3["an"]; ?>"readonly >
          </div>
          <div class="form-group">
            <label for="descrip3">ชื่อผู้ป่วย</label>
            <input type="text" name="descrip2" class="form-control" value="<?php echo $row3["fname"]; ?>"readonly>
          </div>
          <div class="form-group">
            <label for="descrip4">วันที่แพทย์คนที่1 สรุปchart(ไม่เกิน7วัน)</label>
            <div class="col-5">
            <input name="date1" id="datepicker" type = "date" width="300" value= "<?php echo $row3["datetodoctor"]; ?>"/>
            </div>
		      </div>
          <div class="form-group">
            <label for="med">แพทย์ที่รับchartครั้งที่1</label> <br>
            <select  id="med" name= "med" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row3["doctorchart1"];?></option>
            <?php foreach($result2 as $resu){ ?>
            <option value="<?php echo $resu["ndoctor"];?>"><?php echo $resu["ndoctor"];?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="descrip4">วันที่Auditor-staff สรุปchart(ไม่เกิน14วัน)</label>
            <div class="col-5">
            <input name="date11" id="datepicker" type = "date" width="300" value= "<?php echo $row3["datechart2"]; ?>"/>
            </div>
		      </div>
          <div class="form-group">
            <label for="med">Auditor-staffสรุปchart</label><br>
            <select  id="med" name= "med1" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row3["doctorchart2"];?></option>
            <?php foreach($result2 as $resu){ ?>
            <option value="<?php echo $resu["ndoctor"];?>"><?php echo $resu["ndoctor"];?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="descrip5">วันที่ได้รับchartคืนจากแพทย์</label><br>
            <div class="col-5">
            <input name="date2" id="datepicker1" type = "date" width="300"value="<?php echo $row3["datesreturnchart2"]; ?>"/>
		     </div>
         </div>
          <div class="form-group">
            <label for="comment">หมายเหตุ:</label><br>
            <input type="text" name="text1" rows="5" class="form-control"  id="comment" value="<?php echo $row3["comment2"]; ?>">
          </div>
		     
         <div class="form-group">
            <label for="med">สรุปการแก้ไข</label><br>
            <select  id="med" name= "edit" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row3["edit"];?></option>
            <option value="เสร็จพร้อมส่ง">เสร็จพร้อมส่ง</option>
            <option value="ส่งแก้ไขอีกครั้ง">ส่งแก้ไขอีกครั้ง</option>
            </select>
        </div>
        <div class="form-group">
            <label for="descrip5">วันที่ส่งแก้ไขครั้งที่3</label><br>
            <div class="col-5">
            <input name="date3" id="datepicker2" type = "date" width="300"value="<?php echo $row3["datetodoc3"]; ?>"/>
		     </div>
         </div>
         <div class="form-group">
            <label for="med">แพทย์ที่รับchartครั้งที่3</label><br>
            <select  id="med" name= "doc3" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row3["doctorstaff3"];?></option>
            <?php foreach($result2 as $resu){ ?>
            <option value="<?php echo $resu["ndoctor"];?>"><?php echo $resu["ndoctor"];?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="descrip5">วันที่รับกลับครั้งที่3(staff)</label><br>
          <div class="col-2">
            <input name="date4" id="datepicker3" type = "date" width="300"value="<?php echo $row3["datesreturnchart3"]; ?>"/>
		     </div>
         </div>
         <div class="form-group">
            <label for="comment">หมายเหตุ:</label><br>
            <input type="text" name="text3" rows="5" class="form-control"  id="comment" value="<?php echo $row3["comment3"]; ?>">
          </div>
          <div class="my-3">
            <input type="submit" value="[บันทึกข้อมูล]" class="btn btn-success">
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
          </div>
          </div>
          </div> 
    </form>
  </div>
  <?php mysqli_close($conn);?>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> 
</body>

<!-- <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap',
            format: "yyyy-mm-dd",
            type : "date"
        });

        
</script> -->
<!-- 
<script>
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap',
            format: "yyyy-mm-dd",
            type : "date"
        });
     
</script>
<script>
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap',
            format: "yyyy-mm-dd",
            type : "date"
        });
     
</script>
<script>
        $('#datepicker3').datepicker({
            uiLibrary: 'bootstrap',
            format: "yyyy-mm-dd",
            type : "date"
        });
     
</script> -->

</html>
