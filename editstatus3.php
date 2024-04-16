<?php
require('config/condb.php');

$item = $_GET["an"];

// $sql = "SELECT * FROM employee WHERE emp_id=$item";
$sql = "SELECT *
FROM payslip.chartclaim a
LEFT JOIN payslip.ipdstatus c on c.an = a.an and c.idchart = a.idchart
LEFT JOIN payslip.chartstatus b on b.an = a.an and b.idchart = a.idchart
where a.an = '$item'";
$result = mysqli_query($conn, $sql);
$row3 = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>

<?php include 'head.php'; ?>

</head>

<body>
  <div class="container my-3">
    <h3 class="text-left">ข้อมูลผู้ป่วยที่่ระบบipdchart พบแพทย์เพื่อสรุปchart ครั้งที่ 2 </h3>
    <hr>
    <form action="updatechart3.php" method="POST">
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
            <label for="descrip3">วันที่d/c</label>
            <input type="text" name="datedsc" class="form-control" value="<?php echo $row3["datedsc"]; ?>"readonly>
          </div>
          <br>
          <div class="form-group">
            <label for="med">กลุ่มที่เคลม</label>
            <select  id="med" name= "gc" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row3["grouptoclaim"];?></option>
            <option value="ประกันสังคม">ประกันสังคม</option>
            <option value="บัตรทอง">บัตรทอง</option>
            <option value="อุบัติเหต">อุบัติเหต</option>
            <option value="ข้าราชการ">ข้าราชการ</option>
            <option value="อื่นๆ">อื่นๆ</option>
            </select>
          </div>
		</div>
          </div>
           <div class="form-group">
            <label for="descrip5">วันที่ได้สรุปเคลม</label>
            <div class="col-5">
            <input name="date1" id="datepicker" width="270"value="<?php echo $row3["datetoresult"]; ?>"/>
		    </div>
		    </div>
            <div class="form-group">
            <label for="descrip5">วันที่ส่งเคลมในระบบ</label>
            <div class="col-5">
            <input name="date2" id="datepicker1" width="270"value="<?php echo $row3["datetosys"]; ?>"/>
		    </div>
		    </div>
            <div class="form-group">
            <label for="descrip5">วันที่ได้รับผลการเคลมกลับมา</label>
            <div class="col-5">
            <input name="date3" id="datepicker2" width="270"value="<?php echo $row3["datetocliamresult"]; ?>"/>
		    </div>
		    </div>
          <div class="form-group">
            <label for="comment">จำนวนเงินที่เบิก</label>
            <input type="text" name="m1" rows="5" class="form-control"  id="comment" value="<?php echo $row3["totalcliam"]; ?>">
          </div>
          <div class="form-group">
            <label for="comment">จำนวนเงินที่ได้หลังเคลม</label>
            <input type="text" name="m2" rows="5" class="form-control"  id="comment" value="<?php echo $row3["resultcliam"]; ?>">
        </div>
          <div class="form-group">
            <label for="comment">หมายเหตุการเคลมปัญหาการเคลม</label>
            <input type="text" name="c1" rows="5" class="form-control"  id="comment" value="<?php echo $row3["commentoclaim"];?>">
          </div>
        <div class="form-group">
            <label for="namec">ผู้ส่งเคลมงานประกัน</label>
            <select  id="namec" name= "namec" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row3["nameclaim"];?></option>
            <option value="คุณA">คุณเอ</option>
            <option value="คุณB">คุณบี</option>
            <option value="คุณC">คุณซี</option>
            </select>
          </div>
          <div class="my-3">
            <input type="submit" value="[บันทึกข้อมูล]" class="btn btn-success">
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
          </div>
          </div>
          </div> 
        </form>
      v </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap',
            format: "yyyy-mm-dd",
            type : "date"
        });     
</script>

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
</html>
