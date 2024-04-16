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
                                            <th>id</th>
                                            <th>AN</th>
                                            <th>ชื่อผู้ป่วย</th>
                                            <th>วันที่D/C</th>
                                            <th>ระยะรับเข้า</th>
                                            <th>วันที่แพทย์รับครั้งที่1</th>
                                            <th>วันที่แพทย์คืนchart1</th>
                                            <th>วันที่แพทย์รับchart2</th>
                                            <th>แพทย์ที่รับchart2</th>
                                            <th>หมายเหตุ1</th>
                                            <th>วันที่รับกลับครั้งที่2</th>
                                            <th>หมายเหตุ2</th>
                                            <th>วันที่ส่งให้งานประกัน</th>
                                            <th>เจ้าหน้าที่รับchartเคลม</th>
                                            <th>หมายเหตุเคลม</th>
                                            <th>แก้ไข</th>
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
   $sql6 = "SELECT * FROM payslip.chartstatus a
   LEFT JOIN payslip.ipdstatus c on c.an = a.an and c.idchart = a.idchart";
   $result6=mysqli_query($conn,$sql6);
   $conn->query("set names utf8");
   while($row6=mysqli_fetch_array($result6)){
    $status1 = $row6['datechart2'];
    $status2 = $row6['doctorchart2'];
    $status3 = $row6['datesreturnchart2'];
    $status4 = $row6['datetoclaim'];
    $status5 = $row6['cname'];
?>
                                        <tr>
                                            <td><?=$row6['idchart']?></td>
                                            <td><?=$row6['an']?></td>
                                            <td><?=$row6['fname']?></td>
                                            <td><?=$row6['datedsc']?></td>
                                            <td><?=$row6['datestartchart1']?></td>
                                            <td><?=$row6['datetodoctor']?></td>
                                            <td><?=$row6['datesreturnchart1']?></td>

                                            <td><?php
                                                if($row6['datechart2'] == null) {
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
                                            <td><?=$row6['comment2']?></td>
  
                                            <td><?php
                                                if($row6['datesreturnchart2'] == null) {
                                                echo"<b style = 'color:red'> ยังไม่ได้ระบุ </b>";
                                                 } else {
                                                echo"<b style = 'color:green'> $status3 </b>";
                                            }
                                            ?></td>
                                            <td><?=$row6['commentreturn2']?></td>
                                            <td><?php 
                                                if($row6['datetoclaim'] == null) {
                                                echo"<b style = 'color:red'> ยังไม่ได้ระบุ </b>";
                                                 } else {
                                                echo"<b style = 'color:green'> $status4 </b>";
                                            }
                                            ?></td>
                                            <td><?php 
                                                if($row6['cname'] == null) {
                                                echo"<b style = 'color:red'> ยังไม่ได้ระบุ </b>";
                                                 } else {
                                                echo"<b style = 'color:green'> $status5 </b>";
                                            }
                                            ?></td>
                                            <td><?=$row6['commentclaim']?></td>
                                            <td><a href="editstatus2.php?an=<?=$row6['an']?>" type="button" class="btn btn-success">edit</a><br>
                                                <a href="insertcliamtosend.php?an=<?=$row6['an']?>" type="button" class="btn btn-warning">Claim</a>
                                        
                                           </td>    
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
