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
                    <h1 class="h3 mb-2 text-gray-800">รายชื่อผู้ติดตามchartในระบบ</h1>
                    <p class="mb-4">รายชื่อติดตามในระบบติดตาม CHART</a>.</p>
                    <a href="record1.php" type="button" class="btn btn-success">++เพิ่มจำนวนผู้ติดตาม++</a>
                    <br>
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ข้อมูลแพทย์ในระบบ Chart IPD ทั้งหมด</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ชื่อผู้ติดตาม</th>
                                            <th>ตำแหน่ง</th>
                                            <th>สถานะ</th>
                                            <th>แก้ไขข้อมูล</th>
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
   $sql6 = "SELECT * from payslip.secretary";
   $result6=mysqli_query($conn,$sql6);
   $conn->query("set names utf8");
   while($row6=mysqli_fetch_array($result6)){
    // $status1 = $row6['status'];
?>
                                        <tr>
                                            <td><?=$row6['idsecretary']?></td>
                                            <td><?=$row6['namesecret']?></td>
                                            <td><?=$row6['position']?></td>
                                           
                                            <td><?php
                                                if($row6['status'] == "0") {
                                                echo"<b style = 'color:red'> ยกเลิก </b>";
                                                 } else {
                                                echo"<b style = 'color:green'> ยังคงอยู่ </b>";
                                            }
                                            ?></td> 
                                             <td><a href="editsecret.php?idsecretary=<?=$row6['idsecretary']?>" type="button" class="btn btn-success">edit</a></td>
                                         
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
        

           

