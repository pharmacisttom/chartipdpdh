<?php include 'config/condb.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

<?php include 'head.php'; ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include 'menu.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-12 my-12 my-md-0 mw-100 navbar-search">
                        <h5 class="h5 mb-0 text-gray-800">ระบบติดตาม Chart โรงพยาบาลปลวกแดง</h5>
                    </form> 

                    <!-- Topbar Navbar -->
                    <!--  -->

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">รายชื่อผู้ป่วยที่ระบบChart IPD</h1>
                    <p class="mb-4"> ข้อมูลในระบบที่ต้องติดตาม chart IPD (ส่วนการเคลม)</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ข้อมูลผู้ป่วยในระบบ Chart IPD ส่วนเคลม</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>AN</th>
                                            <th>ชื่อผู้ป่วย</th>
                                            <th>วันที่D/C</th>
                                            <th>วันที่รับเข้าระบบ</th>
                                            <th>วันที่รับเคลม</th>
                                            <th>ลงข้อมูล1</th>
                                            <th>วันที่เริ่มให้รหัส</th>
                                            <th>วันที่ให้รหัสเสร็จ</th>
                                            <th>วันที่ส่งเคลมในระบบ</th>
                                            <th>วันที่ได้รับข้อมูลกลับ</th>
                                            
                                            <th>ลงข้อมูล2</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
<?php 

   $sql6 = "SELECT a.idchart,a.an,c.fname,c.datedsc,c.datechart,a.datetoclaim,a.cname,a.charttoward,datetoward,datereturnfromward,a.codename,a.commentoclaim,a.dateclaimupdate,a.datestatement,a.datetoclaim,a.datetocliamresult,a.datetocoding,a.datetoresult
   ,a.datetosys,a.grouptoclaim,a.resultcliam,a.statementname,a.totalcliam,a.remark1
   FROM payslip.chartclaim a
   LEFT JOIN payslip.ipdstatus c on c.an = a.an and c.idchart = a.idchart
   LEFT JOIN payslip.chartstatus b on b.an = a.an and b.idchart = a.idchart";
   $result6=mysqli_query($conn,$sql6);
   $conn->query("set names utf8");
   while($row6=mysqli_fetch_array($result6)){
    // $status1 = $row6['datetoresult'];
    // $status2 = $row6['datetosys'];
    // $status3 = $row6['datetocliamresult'];
    // $status4 = $row6['grouptoclaim'];
    // $status5 = $row6['datetocliamresult'];
    // $status6 = $row6['totalcliam'];
    // $status7 = $row6['statementname'];
    // $status8 = $row6['resultcliam'];
?>
<?php
require('config/condb.php');
$sql1 = " select * FROM payslip.secretary";
$result2 = mysqli_query($conn, $sql1);
$conn->query("set names utf8");
$row1 = mysqli_fetch_assoc($result2);
?>

<?php
require('config/condb.php');
$sql2 = " select * FROM payslip.grpclaim";
$result3 = mysqli_query($conn, $sql2);
$conn->query("set names utf8");
$row2 = mysqli_fetch_assoc($result3);
?>

                                        <tr>
                                            <td><?=$row6['idchart']?></td>
                                            <td><?=$row6['an']?></td>
                                            <td><?=$row6['fname']?></td>
                                            <td><?=$row6['datedsc']?></td>
                                            <td><?=$row6['datechart']?></td>
                                            <td><?=$row6['datetoclaim']?></td>
                                            <td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit1<?=$row6['an']?>">
                                             ลงข้อมูล(1)
                                             </button></td> 
  <!-- The Modal -->
  <div class="modal fade" id="edit1<?=$row6['an']?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">แก้ไขการติดตามระบบเคลม</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="updatechart3.php" method="POST">
        <input type="hidden" value="<?php echo $row6["an"]; ?>" name="ant">
        <div class="form-group">
            <label for="des">ผู้รับเข้าระบบเคลม:</label> <br> 
            <select  name= "des" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row6["cname"];?></option>
            <?php foreach($result2 as $resu){ ?>
            <option value="<?php echo $resu["namesecret"];?>"><?php echo $resu["namesecret"];?></option>
            <?php } ?>
            </select>
          </div>
        <div class="form-group">
        <label for="exampleInputName2">วันที่รับเคลม :</label>
        <input name="d1" id="datepicker" width="270" value= "<?php echo $row6["datetoclaim"];?>"/>
        </div>
        <div class="form-group">
            <label for="med">สถานะchart:</label>
            <select  id="return" name= "re" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row6["charttoward"];?></option>
            <option value="ครบถ้วนสมบูรณ์">ครบถ้วนสมบูรณ์</option>
            <option value="ส่งกลับwardเพื่อแก้ไข">ส่งกลับwardเพื่อแก้ไข</option>
            </select>
        </div>
        <div class="form-group">
        <label for="exampleInputName2">วันที่ส่งกลับward*กรณีแก้ไข*:</label>
        <input name="d2" id="datepicker1" width="270" value= "<?php echo $row6["datetoward"];?>"/>
        </div>
        <div class="form-group">
        <label for="exampleInputName2">วันที่ได้รับคืนจากward:</label>
        <input name="d3" id="datepicker2" width="270" value= "<?php echo $row6["datereturnfromward"];?>"/>
        </div>
        <div class="form-group">
        <label for="text">หมายเหตุ:
            <textarea id="review" name="d4" rows="4" cols="50"><?php echo $row6["remark1"];?></textarea>
        </label>
        </div>
           <button type="submit" class="btn btn-primary">แก้ไข</button>
           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>

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
      </div>
    </div>
  </div>
                                            <td><?=$row6['datetocoding']?></td>
                                            <td><?=$row6['datetocliamresult']?></td>
                                            <td><?=$row6['datetosys']?></td>
                                            <td><?=$row6['datestatement']?></td>

                                          <td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit2<?=$row6['an']?>">
                                             ลงข้อมูลเคลม(2)
                                             </button></td> 
  <!-- The Modal -->
  <div class="modal fade" id="edit2<?=$row6['an']?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">ขั้นตอนการติดตามระบบเคลม</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="updatechart33.php" method="POST">
        <input type="hidden" value="<?php echo $row6["an"]; ?>" name="ant">
        <div class="form-group">
            <label for="des3">ผู้ให้รหัสcoding:</label> <br> 
            <select  name= "pd1" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row6["codename"];?></option>
            <?php foreach($result2 as $resu){ ?>
            <option value="<?php echo $resu["namesecret"];?>"><?php echo $resu["namesecret"];?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
        <label for="exampleInputName2">วันที่ให้รหัสcoding:</label>
        <input name="pd2" id="datepicker3" width="270" value= "<?php echo $row6["datetocoding"];?>"/>
        </div>
        <div class="form-group">
            <label for="des">กลุ่มสิทธิที่เคลม:</label> <br> 
            <select  name= "pd3" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row6["grouptoclaim"];?></option>
            <?php foreach($result3 as $resu2){ ?>
            <option value="<?php echo $resu2["groupclaim"];?>"><?php echo $resu2["groupclaim"];?></option>
            <?php } ?>
            </select>
          </div>
        <div class="form-group">
        <label for="exampleInputName2">วันที่ให้รหัสเสร็จ:</label>
        <input name="pd4" id="datepicker4" width="270" value= "<?php echo $row6["datetoresult"];?>"/>
        </div>
        <div class="form-group">
        <label for="exampleInputName2">วันที่ส่งเคลมในระบบ:</label>
        <input name="pd5" id="datepicker5" width="270" value= "<?php echo $row6["datetosys"];?>"/>
        </div>
        <div class="form-group">
        <label for="exampleInputName2">วันที่ได้รับข้อมูลกลับ:</label>
        <input name="pd6" id="datepicker6" width="270" value= "<?php echo $row6["datetocliamresult"];?>"/>
        </div>
        <div class="form-group">
        <label for="exampleInputName2">วันที่ได้รับจำนวนเงิน:</label>
        <input name="pd7" id="datepicker7" width="270" value= "<?php echo $row6["datestatement"];?>"/>
        </div>
        <div class="form-group">
            <label for="des6">ผู้ส่งเคลม:</label> <br> 
            <select  name= "pd8" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row6["statementname"];?></option>
            <?php foreach($result2 as $resu){ ?>
            <option value="<?php echo $resu["namesecret"];?>"><?php echo $resu["namesecret"];?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
        <label for="exampleInputName2">จำนวนที่เคลม:</label>
        <input name="pd9" id="text1" width="270" value= "<?php echo $row6["totalcliam"];?>"/>
        </div>
        <div class="form-group">
        <label for="exampleInputName2">ได้รับจำนวนเงิน:</label>
        <input name="pd10" id="text2" width="270" value= "<?php echo $row6["resultcliam"];?>"/>
        </div>
        <div class="form-group">
        <label for="text">หมายเหตุ:
            <textarea id="review" name="pd11" rows="4" cols="50"><?php echo $row6["commentoclaim"];?></textarea>
        </label>
        </div>
           <button type="submit" class="btn btn-primary">แก้ไข</button>
           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
        </form>

 <script>
 $('#datepicker3').datepicker({
 uiLibrary: 'bootstrap',
format: "yyyy-mm-dd",
type : "date"
});
</script>
<script>
 $('#datepicker4').datepicker({
 uiLibrary: 'bootstrap',
format: "yyyy-mm-dd",
type : "date"
});
</script>
<script>
 $('#datepicker5').datepicker({
 uiLibrary: 'bootstrap',
format: "yyyy-mm-dd",
type : "date"
});
</script>
<script>
 $('#datepicker6').datepicker({
 uiLibrary: 'bootstrap',
format: "yyyy-mm-dd",
type : "date"
});
</script>
<script>
 $('#datepicker7').datepicker({
 uiLibrary: 'bootstrap',
format: "yyyy-mm-dd",
type : "date"
});
</script>
<script>
 $('#datepicker8').datepicker({
 uiLibrary: 'bootstrap',
format: "yyyy-mm-dd",
type : "date"
});
</script>
      </div>
    </div>
  </div>
                                        </tr>
                                        <?php
                                      }
                                    mysqli_close($conn);
                                   ?> 
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
