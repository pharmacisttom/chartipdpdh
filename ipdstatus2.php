<?php include 'config/condb.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

<?php include 'head.php'; ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include 'menun.php'; ?>

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
                    <h1 class="h3 mb-2 text-gray-800">รายชื่อผู้ป่วยที่ d/c แล้วยังไม่สรุปchart แยกตามหอผู้ป่วย</h1>
                    <p class="mb-4"> ข้อมูลในการกรองมาจากข้อมูล ipd.idiag และ ipd.ipd </a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>AN</th>
                                            <th>HN</th>
                                            <th>ชื่อผู้ป่วย</th>
                                            <th>วันที่แอดมิด</th>
                                            <th>วันที่D/C</th>
                                            <th>หอผู้ป่วยที่D/C</th>
                                            <th>จำนวนวันที่ยังไม่สรุปchart</th>
                                            <!-- <th>ระบบติดตาม</th> -->
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
   $dd = $_GET["dd"];
   $sql6 = "select *
   from (select a.regdate,a.hn,a.an,c.cardid,concat(c.pttitle,ptfname,'   ',ptlname)as name1,a.dateadm,a.datedsc,a.now_ward,
      DATEDIFF(date(now()),a.datedsc) as dayresultchart,
      case when DATEDIFF(date(now()),a.datedsc) <= '14' then '0-14 วัน'
           when DATEDIFF(date(now()),a.datedsc) BETWEEN '15' and '30' then '15-30วัน'
           when DATEDIFF(date(now()),a.datedsc) BETWEEN '31' and '60' then '31-60วัน'
           when DATEDIFF(date(now()),a.datedsc) BETWEEN '61' and '90' then '31-60วัน'
           else 'มากกว่า90วัน' end as dd,
      b.`name`,d.typearea,e.roomname,c.descrip
      from ipd.ipd a
      LEFT JOIN hos.hosbed b on a.bed = b.code
      left join pt.pt c on a.hn = c.hn
      LEFT JOIN pcu.person d on a.hn = d.p_code
      left join hos.roomno e on a.now_ward = e.roomcode
      LEFT JOIN ipd.idiag c on c.an = a.an
      where a.datedsc <> '0000-00-00'
      and a.dateadm BETWEEN 20231001 and date(now())
      and a.bed is not NULL
      and c.diag is NULL
      ORDER BY dayresultchart desc ) aa
      where aa.dd = '$dd'";
   $result6=mysqli_query($conn,$sql6);
   $conn->query("set names utf8");
   while($row6=mysqli_fetch_array($result6)){
   $status = $row6['descrip'];
  
?>
                                        <tr>
                                            <td><?=$row6['an']?></td>
                                            <td><?=$row6['hn']?></td>
                                            <td><?=$row6['name1']?></td>
                                            <td><?=$row6['dateadm']?></td>
                                            <td><?=$row6['datedsc']?></td>
                                            <td><?=$row6['roomname']?></td>
                                            <td><?=$row6['dayresultchart']?></td>
                                            <!-- <td><a href="insertdatachart.php?an=<?=$row6['an']?>" class="btn btn-success">รับเข้าระบบติดตาม</a></td> -->
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
            <?php include 'footer.php'; ?>
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