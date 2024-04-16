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
                                            <th>วันที่รับเข้าระบบ</th>
                                            <th>วันที่ครบ7วัน</th>
                                            <th>วันที่ครบ14วัน</th>
                                            <th>ระบบติดตาม14วัน</th>
                                            <th>ส่งเคลม</th>
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
   $sql6 = "select DATE_ADD(c.datedsc,INTERVAL 7 day)as w,DATE_ADD(c.datedsc,INTERVAL 14 day)as wx,c.*,a.*
   FROM payslip.chartstatus a
   LEFT JOIN payslip.ipdstatus c on c.an = a.an and c.idchart = a.idchart
   LEFT JOIN payslip.chartclaim b on b.an = a.an and b.idchart = a.idchart
   where b.an is null order by a.datestartchart1 asc";
   $result6=mysqli_query($conn,$sql6);
   $conn->query("set names utf8");
   while($row6=mysqli_fetch_array($result6)){
    $status1 = $row6['datetodoctor'];
    $status2 = $row6['doctorchart1'];
    $status3 = $row6['doctorchart2'];
    $status5 = $row6['doctorstaff3'];
    $status4 = $row6['datesreturnchart2'];
    $status6 = $row6['datesreturnchart3'];
    $status7 = $row6['datechart2'];
    $status8 = $row6['w'];
    $status9 = $row6['wx'];
    $newDate = date("Y-m-d", strtotime($status8)); 
    $newDate1 = date("Y-m-d", strtotime($status9));   
  
?>
                                        <tr>
                                            <td><?=$row6['idchart']?></td>
                                            <td><?=$row6['an']?></td>
                                            <td><?=$row6['fname']?></td>
                                            <td><?=$row6['datedsc']?></td>
                                            <td><?=$row6['datestartchart1']?></td>
                                            <td><?=$newDate?></td>
                                            <td><?=$newDate1?></td>
                                            <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit2<?=$row6['an']?>">
                                             ลงข้อมูลติดตาม 14 วัน
                                             </button></td> 
  <!-- The Modal -->
  <div class="modal fade" id="edit2<?=$row6['an']?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">ขั้นตอนการติดตาม14วัน</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
<?php
require('config/condb.php');
$sql1 = " select * FROM payslip.doctor ";
$result2 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result2);
?> 
 <?php
require('config/condb.php');
$sql2 = " select * FROM payslip.secretary where position = 'พยาบาลวิชาชีพ'";
$result3 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result3);
?> 
        <!-- Modal body -->
        <div class="modal-body">
        <form action="updatechart1t.php" method="POST">
        <input type="hidden" value="<?php echo $row6["an"]; ?>" name="an">
      <div class="form-group col-6">
        <div>
          <!-- <div class="form-group">
            <label for="Name"> หมายเลขรับเข้าระบบ :</label>
            <input type="text" name="idchart" class="form-control" value="<?php echo $row6["idchart"]; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="descrip1">หมายเลข AN :</label>
            <input type="text" name="ant" class="form-control" value="<?php echo $row6["an"]; ?>"readonly >
          </div>
          <div class="form-group">
            <label for="descrip3">ชื่อผู้ป่วย</label>
            <input type="text" name="descrip2" class="form-control" value="<?php echo $row6["fname"]; ?>"readonly>
          </div> -->
          <div class="form-group">
            <label for="med">ผู้ติดตามchart</label> <br>
            <select  id="ad" name= "ad" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row6["adminname"];?></option>
            <?php foreach($result3 as $resu1){ ?>
            <option value="<?php echo $resu1["namesecret"];?>"><?php echo $resu1["namesecret"];?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="descrip4">วันที่แพทย์คนที่1 สรุปchart(ไม่เกิน7วัน)</label>
            <div class="col-5">
            <input name="date1" id="datepicker" type = "date" width="300" value= "<?php echo $row6["datetodoctor"]; ?>"/>
            </div>
		      </div>
          <div class="form-group">
            <label for="med">แพทย์ที่รับchartครั้งที่1</label> <br>
            <select  id="med" name= "med" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row6["doctorchart1"];?></option>
            <?php foreach($result2 as $resu){ ?>
            <option value="<?php echo $resu["ndoctor"];?>"><?php echo $resu["ndoctor"];?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="descrip4">วันที่Auditor-staff สรุปchart(ไม่เกิน14วัน)</label>
            <div class="col-5">
            <input name="date11" id="datepicker" type = "date" width="300" value= "<?php echo $row6["datechart2"]; ?>"/>
            </div>
		      </div>
          <div class="form-group">
            <label for="med">Auditor-staffสรุปchart</label><br>
            <select  id="med" name= "med1" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row6["doctorchart2"];?></option>
            <?php foreach($result2 as $resu){ ?>
            <option value="<?php echo $resu["ndoctor"];?>"><?php echo $resu["ndoctor"];?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="descrip5">วันที่ได้รับchartคืนจากแพทย์</label><br>
            <div class="col-5">
            <input name="date2" id="datepicker1" type = "date" width="300"value="<?php echo $row6["datesreturnchart2"]; ?>"/>
		     </div>
         </div>
          <div class="form-group">
            <label for="comment">หมายเหตุ:</label><br>
            <input type="text" name="text1" rows="5" class="form-control"  id="comment" value="<?php echo $row6["comment2"]; ?>">
          </div>
		     
         <div class="form-group">
            <label for="med">สรุปการแก้ไข</label><br>
            <select  id="med" name= "edit" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row6["edit"];?></option>
            <option value="เสร็จพร้อมส่ง">เสร็จพร้อมส่ง</option>
            <option value="ส่งแก้ไขอีกครั้ง">ส่งแก้ไขอีกครั้ง</option>
            </select>
        </div>
        <div class="form-group">
            <label for="descrip5">วันที่ส่งแก้ไขครั้งที่3</label><br>
            <div class="col-5">
            <input name="date3" id="datepicker2" type = "date" width="300"value="<?php echo $row6["datetodoc3"]; ?>"/>
		     </div>
         </div>
         <div class="form-group">
            <label for="med">แพทย์ที่รับchartครั้งที่3</label><br>
            <select  id="med" name= "doc3" class="form-select" aria-label="Default select example">
            <option selected><?php echo $row6["doctorstaff3"];?></option>
            <?php foreach($result2 as $resu){ ?>
            <option value="<?php echo $resu["ndoctor"];?>"><?php echo $resu["ndoctor"];?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="descrip5">วันที่รับกลับครั้งที่3(staff)</label><br>
          <div class="col-2">
            <input name="date4" id="datepicker3" type = "date" width="300"value="<?php echo $row6["datesreturnchart3"]; ?>"/>
		     </div>
         </div>
         <div class="form-group">
            <label for="comment">หมายเหตุ:</label><br>
            <input type="text" name="text3" rows="5" class="form-control"  id="comment" value="<?php echo $row6["comment3"]; ?>">

           <button type="submit" class="btn btn-primary">แก้ไข</button>
           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>
       
      </div>
    </div>
  </div>
  </div>

                                    </td>
                                            <td>
                                            <a href="insertcliamtosend.php?an=<?=$row6['an']?>" type="button" class="btn btn-warning">Claim</a></td>    
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
