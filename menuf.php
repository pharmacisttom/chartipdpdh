
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PDHchartIPD</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                ระบบการติดตามchart ipd
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>DATAพื้นฐาน</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gradient-info py-2 collapse-inner rounded">
                        <h5 class="collapse-header">ข้อมูลพื้นฐาน:</h5>
                        <a class="collapse-item" href="ipdstatusf.php">ข้อมูลผู้ป่วยD/C</a>
                        <a class="collapse-item" href="doctorf.php">ข้อมูลแพทย์</a>
                        <a class="collapse-item" href="recorderf.php">ข้อมูลผู้ติดตามchart</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>ข้อมูลผู้ป่วยที่ติดตามchart</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-gradient-success py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="14f.php">ติดตาม 14 วัน</a>
                        <a class="collapse-item" href="30f.php">ติดตาม 30 วัน</a>
                        <a class="collapse-item" href="60f.php">ติดตาม 60 วัน</a>
                        <a class="collapse-item" href="120f.php">ติดตาม 120 วัน</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>การบันทึกข้อมูล</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>สถานะchart</span>
                </a>
                <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gradient-info py-2 collapse-inner rounded">
                        <h5 class="collapse-header">ข้อมูลติดตาม:</h5>
                        <a class="collapse-item" href="chartboardstatus.php">ข้อมูลchartปัจจุบัน</a>
                    </div>
                </div>

            </li>
            <br>
            <br>
            <center><img src="img/pdh.jpg" class="rounded-circle" href="admin/index.php" alt="Cinque Terre" width="120" height="120"></center>
               <center><a class="text-info" href="indexadmin.php" >โรงพยาบาลปลวกแดง</a> </center>
        </ul>
        <!-- End of Sidebar --> 