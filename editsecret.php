<?php
require('config/condb.php');

$item = $_GET["idsecretary"];

// $sql = "SELECT * FROM employee WHERE emp_id=$item";
$sql = " select * FROM payslip.secretary as a where a.idsecretary = '$item'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en">

<head>

<?php include 'head.php'; ?>

</head>

<body>
  <!-- <div class="container my-3">
    <h2 class="text-left">ข้อมูลผู้ติดตามchartที่รับเข้าระบบipdchart</h2>
    <hr>
    <form action="updateeditipdchart.php" method="POST">
      <input type="hidden" value="<?php echo $row["idsecretary"]; ?>" name="idsecretary">
      <div class="form-group col-6">
        <div>
          <div class="form-group">
            <label for="Name"> หมายเลขรับเข้าระบบ :</label>
            <input type="text" name="N" class="form-control" value="<?php echo $row["idsecretary"]; ?>">
          </div>
          <div class="form-group">
            <label for="descrip3">ชื่อผู้ติดตามchart</label>
            <input type="text" name="descrip3" class="form-control" value="<?php echo $row["namesecret"]; ?>">
          </div>
          <div class="form-group">
            <label for="med">แพทย์ที่รับchart</label>
            <select  id="med" name= "record" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row["position"];?></option>
            <option value="พยาบาลวิชาชีพ">พยาบาลวิชาชีพ</option>
            <option value="เวชสถิติ">เวชสถิติ</option>
            <option value="เจ้าหน้าที่ศูนย์ประกัน">เจ้าหน้าที่ศูนย์ประกัน</option>
            <option value="เจ้าหน้าที่ฝ่ายการพยาบาล">เจ้าหน้าที่ฝ่ายการพยาบาล</option>
            </select>
        </div>
          <div class="my-3">
            <input type="submit" value="[บันทึกข้อมูล]" class="btn btn-success">
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
          </div>
    </form>
  </div> -->
  <div class="container my-3">
    <h2 class="text-left">ข้อมูลผู้ติดตามchartที่รับเข้าระบบipdchart</h2>
    <hr>
    <form action="updatesecretary.php" method="POST">
    <input type="hidden" value="<?php echo $row["idsecretary"]; ?>" name="idsecretary">
      <div class="form-group col-6">
        <div>
          <div class="form-group">
            <label for="Name"> หมายเลขบัตรประชาชนหรือใบระกอบวิชาชีพ :</label>
            <input type="text" value="<?php echo $row["idsecretary"]; ?>" name="n" class="form-control"readonly>
          </div>
          <div class="form-group">
            <label for="Name"> ชื่อ-นามสกุล :</label>
            <input type="text" value="<?php echo $row["namesecret"]; ?>"  name="nname" class="form-control" >
          </div>
          <div class="form-group">
            <label for="med">ตำแหน่ง</label>
            <br>
            <select  id="med" name= "record" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row["position"];?></option>
            <option value="พยาบาลวิชาชีพ">พยาบาลวิชาชีพ</option>
            <option value="เวชสถิติ">เวชสถิติ</option>
            <option value="เจ้าหน้าที่ศูนย์ประกัน">เจ้าหน้าที่ศูนย์ประกัน</option>
            <option value="เจ้าหน้าที่ฝ่ายการพยาบาล">เจ้าหน้าที่ฝ่ายการพยาบาล</option>
            </select>
          </div>
          <div class="form-group">
            <label for="med">แผนก</label>
            <br>
            <select  id="med" name= "p" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row["part"];?></option>
            <option value="ห้องคลอด">ห้องคลอด</option>
            <option value="หลังคลอด">หลังคลอด</option>
            <option value="ผู้ป่วยใน">ผู้ป่วยใน</option>
            <option value="โฮมวอร์ด">โฮมวอร์ด</option>
            <option value="subicu">subicu</option>
            <option value="จันทรประสิทธิ์">จันทรประสิทธิ์</option>
            <option value="แอดมิดcenter">แอดมิดcenter</option>
            <option value="งานประกัน">งานประกัน</option>
            <option value="ฝ่ายการพยาบาล">ฝ่ายการพยาบาล</option>
            </select>
          </div>
          <div class="my-3">
            <input type="submit" value="[บันทึกข้อมูล]" class="btn btn-success">
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
          </div>
    </form>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>
