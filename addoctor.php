<?php
require('config/condb.php');

// $item = $_GET["idsecretary"];

// $sql = "SELECT * FROM employee WHERE emp_id=$item";
$sql = " select * FROM payslip.doctor ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>

<?php include 'head.php'; ?>

</head>

<body>
  <div class="container my-3">
    <h2 class="text-left">ข้อมูลแพทย์ที่รับเข้าระบบipdchart</h2>
    <hr>
    <form action="insertdoctor.php" method="POST">
      <input type="hidden" >
      <div class="form-group col-6">
        <div>
          <div class="form-group">
            <label for="Name"> หมายเลขบัตรประชาชนหรือใบระกอบวิชาชีพเวชกรรม :</label>
            <input type="text" name="n" class="form-control" >
          </div>
          <div class="form-group">
            <label for="Name"> ชื่อ-นามสกุล :</label>
            <input type="text" name="nname" class="form-control" >
          </div>
          <div class="form-group">
            <label for="med">ตำแหน่ง</label>
            <br>
            <select  id="med" name= "record" class="form-select" aria-label="Default select example">
            <option selected>กรุณาเลือก</option>
            <option value="แพทย์ทั่วไป">แพทย์เวชปฏิบัติทั่วไป</option>
            <option value="แพทย์เฉพาะทาง(staff)">แพทย์เฉพาะทาง(staff)</option>
            </select>
          </div>
          <div class="my-3">
            <input type="submit" value="[บันทึกข้อมูล]" class="btn btn-success">
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
          </div>
          </div>
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
