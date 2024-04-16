<?php
require('config/condb.php');

$item = $_GET["an"];

// $sql = "SELECT * FROM employee WHERE emp_id=$item";
$sql = " select * FROM payslip.ipdstatus as a where a.an = '$item'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<?php
require('config/condb.php');

// $sql = "SELECT * FROM employee WHERE emp_id=$item";
$sql1 = " select * FROM payslip.secretary ";
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
    <h2 class="text-left">ข้อมูลผู้ป่วยที่รับเข้าระบบipdchart</h2>
    <hr>
    <form action="updateeditipdchart.php" method="POST">
      <input type="hidden" value="<?php echo $row["an"]; ?>" name="an">
      <div class="form-group col-6">
        <div>
          <div class="form-group">
            <label for="Name"> หมายเลขรับเข้าระบบ :</label>
            <input type="text" name="N" class="form-control" value="<?php echo $row["idchart"]; ?>"readonly>
          </div>
          <div class="form-group">
            <label for="descrip1">หมายเลข AN :</label>
            <input type="text" name="descrip1" class="form-control" value="<?php echo $row["an"]; ?>"readonly>
          </div>
          <div class="form-group">
            <label for="descrip2">หมายเลขHN</label>
            <input type="text" name="descrip2" class="form-control" value="<?php echo $row["hn"]; ?>"readonly>
          </div>
          <div class="form-group">
            <label for="descrip3">ชื่อผู้ป่วย</label>
            <input type="text" name="descrip3" class="form-control" value="<?php echo $row["fname"]; ?>"readonly>
          </div>
          <div class="form-group">
            <label for="descrip4">วันที่แอดมิด</label>
            <input type="text" name="descrip4" class="form-control" value="<?php echo $row["dateadm"]; ?>"readonly>
          </div>
          <div class="form-group">
            <label for="descrip4">วันที่D/C</label>
            <input type="text" name="descrip5" class="form-control" value="<?php echo $row["datedsc"]; ?>"readonly>
          </div>
          <div class="form-group">
            <label for="des">ผู้รับเข้าระบบ</label> <br> 
            <select  name= "des" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row["adminname"];?></option>
            <?php foreach($result2 as $resu){ ?>
            <option value="<?php echo $resu["namesecret"];?>"><?php echo $resu["namesecret"];?></option>
            <?php } ?>
            </select>
          </div>
          <div class="my-3">
            <input type="submit" value="[บันทึกข้อมูล]" class="btn btn-success">
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
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
</body>

</html>
