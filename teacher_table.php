<?php
include "config.php";
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Teacher list| Dashboard</title>
  <?php include("falad2.php"); ?>
  <script src="jquery-3.2.1.js"></script> 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
        if($_SESSION['type']=='Administrator'){
        ?>
       
        <?php
        }else{
        ?>
  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>BC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Nawawi</b>School</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
       
         <?php
        }
        ?>
        
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username'] ?></a></li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Nawawi school</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                 Mhhamed & yahye -> Web Developers
                  <small>1-sept-2017</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Nawawi</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Raxma</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Ridwaan</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                    <a href="#" class="btn btn-default btn-info " style="color:white">User manage</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-primary " style="color:white">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Nawawi school</p>
        <a href="#"><i class="fa fa-circle text-success"></i> educated</a>
      </div>
    </div>
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview"><a href="#"><i class="fa fa-dashboard">
        </i> <span>Dashboard</span><span class="pull-right-container"></span></a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i>
          <span>Student Info</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right" style="color:white"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="register.php"><i class="fa fa-user-plus"  style="color:white"></i> Registration</a></li>
          <li><a href="searchsbyid.php"><i class="fa fa-search" style="color:red"></i> student search: (BYID)</a></li>
          <li><a href="searchclass.php"><i class="fa fa-search-plus" style="color:#f661d8" ></i> search: (by class)</a></li>
          <li><a href="modifyy.php"><i class="fa fa-reorder" style="color:#fcff14" ></i> Student list</a></li>
        </ul>
      </li>
      <li class="treeview">
          <a href="#">
              <i class="fa fa-etsy"></i> <span>Examination Info</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right" style="color:white"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="exam.php"><i class="fa fa-plus-square-o"   style="color:white"></i> Exam Register</a></li>
            <li><a href="table_exam.php"><i class="fa fa-table"  style="color:#dbed79"></i>  Exam List </a></li>
            <li><a href="exam_person.php"><i class="fa fa-edit"  style="color:#f661d8"></i>  Exam Register: (indivital)</a></li>
            <li><a href="exam_class.php"><i class="fa fa-search"  style="color:#fcff14"></i>  Exam Search: (by class)</a></li>
          </ul>
        </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-money"></i>
          <span>financial Info</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right" style="color:white"></i>
          </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="fee_setup.php"><i class="fa fa-money"  style="color:lightgreen"></i> Fee register</a></li>
        <li><a href="fee_group.php"><i class="fa fa-file-text"  style="color:#ffc845"></i> Fee register (Class) </a></li>
        <li><a href="fee_search_class.php"><i class="fa fa-search" style="color:#f661d8"></i>  Fee search (by class)</a></li>
        <li><a href="fee_table.php"><i class="fa fa-clone" style="color:#fcff14"></i>  Fee table </a></li>
    </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Teacher Info</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right" style="color:white"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="teacher_register.php"><i class="fa fa-user-o" style="color:#f661d8"></i> Teacher Registration</a></li>
            <li><a href="teacher_table.php"><i class="fa fa-clone" style="color:#fcff14"></i>Teacher List </a></li>
        </ul>
      </li>
           
      <li class="treeview">
        <a href="#">
     <i class="fa fa-book"></i>
          <span>Courses Info</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right" style="color:white"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="course.php"><i class="fa fa-book" style="color:#fcff14"></i>Course Info</a></li>
            <!-- <li><a href="course_table.php"><i class="fa fa-table"></i>course list </a></li> -->
        </ul>
      </li>
  <li class="treeview">
        <a href="#">
          <i class="fa fa-check"></i>
          <span>Attendances Info</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right" style="color:white"></i>
          </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="attendance_person.php"><i class="fa fa-check-square-o" style="color:#f661d8"></i>Attendance indivitual</a></li>
        <li><a href="attendance_table.php"><i class="fa fa-building-o" style="color:#fcff14"></i>Attendance list </a></li>
        <li><a href="student_attendance.php"><i class="fa fa-check" style="color:#00ffd8"></i>Attendance by class </a></li>
        <li><a href=" attendance_search_class.php"><i class="fa fa-search" style="color:#00bcd8"></i>Attendance Search (Class) </a></li>
    </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i>
          <span>Time table </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right" style="color:white"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="time.php"><i class="fa fa-comment-o" style="color:#00ffd8"></i>Time table Setup</a></li>
            <li><a href="time_table_class_search.php"><i class="fa fa-table"style="color:#c6ff00"></i>Time Table  search class</a></li>
        </ul>
      </li>
    </ul>
  </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
  <div class="row">
  <div class="col-sm-12">
            
  <div class="row">
            <div class="col-sm-10">
                <h4 align="center"> Fee search  :</h4>
                <div class="form-group">
                    <div class="input-group"style="margin : 0 0 0 30px">
                        <span class="input-group-addon">Search</span>
                        <input type="text" name="search_text" id="search_text" 
                        placeholder="Search here" class="form-control">
                    </div>
                </div>
               </div>
                <div class="col-sm-2 pull-right" style="margin:38px 0 0 0 ;">
                <a href="teacher_register.php" class="btn btn-success " role="button">
                   <span class="glyphicon glyphicon-plus"></span> New Teacher</a>
                   </div>       </div>  
           

        <div class="row">
            <div class="col-sm-12">
                <div id="result">
                </div>
            </div>
        </div>
        </div>  </div></div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Designed by ENG: mohamed & ENG: yahye</b> 0.1
  </div>
  <strong>Copyright &copy; NAWAWI .</strong> All rights
  reserved.
</footer>
</div>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>


<script>
        $(document).ready(function(){
        load_data();
        function load_data(query)
        {
            $.ajax({
            url:"teacher_table_code.php",
            method:"POST",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
            });
        }
        $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
                load_data(search);
            }
            else
            {
                load_data();
            }
        });
    });
</script>
</body>
</html>
