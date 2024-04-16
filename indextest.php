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
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-12 my-12 my-md-0 mw-100 navbar-search">
                        <h5 class="h5 mb-0 text-gray-800">ระบบติดตาม Chart โรงพยาบาลปลวกแดง</h5>
                    </form> 

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        </li>

                        <!-- Nav Item - Alerts -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i> -->
                                <!-- Counter - Alerts -->
                                <!-- <span class="badge badge-danger badge-counter">โปรดอ่านก่อนใช้งาน</span>
                            </a> -->
                            <!-- Dropdown - Alerts -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div> -->
                        </li>

                        <!-- Nav Item - Messages -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                 Counter - Messages -->
                                <!-- <span class="badge badge-danger badge-counter">7</span>
                            </a>
                             Dropdown - Messages -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="..."> --> 
                                        <!-- <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="..."> -->
                                        <!-- <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a> -->
                                <!-- <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li> --> 

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <!-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a> -->
                            <!-- Dropdown - User Information -->
                            <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li> -->

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">
<?php 
$sql = "select count(aa.an) as an, max(aa.dayresultchart) as max
from (select a.regdate,a.hn,a.an,c.cardid,concat(c.pttitle,ptfname,'   ',ptlname)as name1,a.dateadm,a.datedsc,a.now_ward,
DATEDIFF(date(now()),a.datedsc) as dayresultchart,
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
ORDER BY dayresultchart desc) aa ";
$result1=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result1);

$sql1 = "SELECT count(an) as anan FROM payslip.ipdstatus";
$result2=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($result2);

?>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                ยังไม่สรุปchart</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$row['an']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                จำนวนวันสูงสุดที่ยังค้าง</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$row['max']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">เข้าระบบipdchart
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$row1['anan']?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                ipdchart สำเร็จ</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ข้อมูลแยกตามวันหลัง d/c</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ระยะเวลา</th>
                                            <th>จำนวนคงค้าง</th>
                                            <th>ดูข้อมูล</th>
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
   $sql6 = "select aa.dd,count(aa.an) as an
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
   GROUP BY aa.dd";
   $result6=mysqli_query($conn,$sql6);
   $conn->query("set names utf8");
   while($row6=mysqli_fetch_array($result6)){
  
?>
                                        <tr>
                                            <td><?=$row6['dd']?></td>
                                            <td><?=$row6['an']?></td>
                                            <td><a href="ipdstatus1.php?dd=<?=$row6['dd']?>" class="btn btn-success">รายชื่อผู้ป่วย</a></td>
                                        </tr>


                                        <?php
                                      }
                                
                                   ?> 
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                        </div>
                        
                        <div class="card shadow mb-4">
                           <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ข้อมูลแยกตามแผนกหลัง d/c <h6>
                           </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                    <thead>
                                        <tr> 
                                            <th>ชื่อแผนก</th>
                                            <th>ระยะเวลา</th>
                                            <th>จำนวนคงค้าง</th>
                                            <th>ดูข้อมูล</th>
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
   $sql5 = "select aa.roomname,aa.dd,count(aa.an) as an
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
   GROUP BY aa.roomname,aa.dd";
   $result5=mysqli_query($conn,$sql5);
   $conn->query("set names utf8");
   while($row5=mysqli_fetch_array($result5)){
  
?>
                                        <tr>
                                            <td><?=$row5['roomname']?></td>
                                            <td><?=$row5['dd']?></td>
                                            <td><?=$row5['an']?></td>
                                            <td><a href="ipdstatus11.php?roomname=<?=$row5['roomname']?>&dd=<?=$row5['dd']?>" class="btn btn-success">รายชื่อผู้ป่วย</a></td>
                               
                                       
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
                    <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">ปัญหาที่พบ</h6>
                                </div>
                                <div class="card-body">
                                    <p>เนื่องจากกระบวนการส่งคืนเวชระเบียน CHART ผู้ป่วยในมีความล่าช้า เช่น แพทย์สรุป Chart ล่าช้า ไม่ทันตามระยะเวลาที่กำหนด  
                                        ไม่ทราบว่า  CHART อยู่ที่ไหน อยู่ที่ใคร ทำให้การส่งข้อมูลเพื่อ 
                                        เคลมตามกองทุนสิทธิ์ต่าง ๆ ไม่เป็นไปตามกำหมดเวลา ทำให้สูญเสียรายรับที่จะเป็นรายได้เข้าสู่โรงพยาบาล </p>
                                    </p>
                                  

                                </div>
                           </div>

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
    <?php include 'footer.php'; ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
     <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>