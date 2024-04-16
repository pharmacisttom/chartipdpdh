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
                    <p class="mb-4"> ข้อมูลในระบบที่ต้องติดตาม chart IPD (หากไม่มีชื่อให้เช็คการนำเข้าผู้ป่วยติดตามหรือมีการสรุปchartแล้ว)</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ข้อมูลผู้ป่วยในระบบ Chart IPD ทั้งหมด</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>id</th>
                                            <th>AN</th>
                                            <th>ชื่อผู้ป่วย</th>
                                            <th>วันที่D/C</th>
                                            <th>วันที่รับเข้าระบบ</th>
                                            <th>แพทย์คนที่1</th>
                                            <th>แพทย์คนที่2staff</th>
                                            <th>แพทย์คนที่3</th>
                                            <th>ผู้ติดตามchart</th>
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
   $sql6 = "select a.idchart,a.an,c.fname,c.datedsc,c.datechart,a.doctorchart1,a.doctorchart2,a.doctorstaff3,c.adminname
,DATEDIFF(date(now()),datedsc)as l,DATEDIFF(date(now()),datechart)as m,DATEDIFF(date(now()),datetodoctor)as m1,DATEDIFF(datesreturnchart2,datetodoctor)as m2
,DATEDIFF(b.datetoclaim,datetodoctor)as m3,DATEDIFF(datetosys,b.datetoclaim)as m4,DATEDIFF(datetocliamresult,b.datetoclaim)as m5
,DATEDIFF(datetocliamresult,datedsc)as m6
   from payslip.chartstatus a
   LEFT JOIN payslip.ipdstatus c on c.an = a.an and c.idchart = a.idchart
   LEFT JOIN payslip.chartclaim b on b.an = a.an and a.idchart = b.idchart";
   $result6=mysqli_query($conn,$sql6);
   $conn->query("set names utf8");
   while($row6=mysqli_fetch_array($result6)){
    $status1 = $row6['doctorchart1'];
    $status2 = $row6['doctorchart2'];
    $status3 = $row6['doctorstaff3'];
    $status4 = $row6['adminname'];
?>
                                        <tr>
                                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?=$row6['an']?>">
                                             ข้อมูล
                                            </button>
                                         </td>
  <!-- The Modal -->
  <div class="modal" id="myModal<?=$row6['an']?>">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">จำนวนวันตั้งแต่d/c จนถึงวันส่งเคลมในระบบ</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <h4>จำนวนวันตั้งแต่d/cถึงวันปัจจุบัน</h4><br>
        <h6><?=$row6['l']?></h6><br>
        <h4>วันรับchartถึงวันปัจจุบัน</h4><br>
        <h6><?=$row6['m']?></h6><br>
        <h4>จำนวนวันส่งถึงแพทย์ถึงวันปัจจุบัน</h4><br>
        <h6><?=$row6['m1']?></h6><br>
        <h4>วันส่งแพทย์ถึงวันที่ได้รับคืน</h4><br>
        <h6><?=$row6['m2']?></h6><br>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

                                            <td><?=$row6['idchart']?></td>
                                            <td><?=$row6['an']?></td>
                                            <td><?=$row6['fname']?></td>
                                            <td><?=$row6['datedsc']?></td>
                                            <td><?=$row6['datechart']?></td>
                                            <td><?php
                                                if($row6['doctorchart1'] == null) {
                                                echo"<b style = 'color:red'> ยังไม่ได้ระบุ </b>";
                                                 } else {
                                                echo"<b style = 'color:green'> $status1 </b>";
                                            }
                                            ?></td> 
                                           
                                            <td><?php
                                                if($row6['doctorchart2'] == null) {
                                                echo"<b style = 'color:red'> ยังไม่ได้ระบุ </b>";
                                                 } else {
                                                echo"<b style = 'color:green'> $status2 </b>";
                                            }
                                            ?></td>
                                             <td><?php
                                                if($row6['doctorstaff3'] == null) {
                                                echo"<b style = 'color:red'> ยังไม่ได้ระบุ </b>";
                                                 } else {
                                                echo"<b style = 'color:green'> $status3 </b>";
                                            }
                                            ?></td>
                                             <td><?php
                                                if($row6['adminname'] == null) {
                                                echo"<b style = 'color:red'> ยังไม่ได้ระบุ </b>";
                                                 } else {
                                                echo"<b style = 'color:green'> $status4 </b>";
                                            }
                                            ?></td>
                                        
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