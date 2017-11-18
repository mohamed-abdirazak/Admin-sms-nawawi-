<?php
include "config.php";
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
 <?php
$host ="localhost";
$user = "root";
$pswd = "";
$db = "simpledata";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)

function getData()
{
$data =array();
$data[0] =$_POST['ID'];
$data[1] =$_POST['studentname'];
$data[2] =$_POST['date'];
$data[3] =$_POST['month'];
$data[4] =$_POST['year'];
$data[5] =$_POST['att'];
return $data;
}
if (isset($_POST['send'])) {
    $info = getData();
    $sql = "INSERT INTO attendance (st_id,studentname,date,month,year,att)
    VALUES ('$info[0]', '$info[1]', '$info[2]','$info[3]','$info[4]','$info[5]')";
    
      $search_result = mysqli_query($conn,$sql);
   
   if ($search_result) {
     header("location:attendance_person.php");

     }
     else {
       echo "not inserted";
     }


}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Attendance person | Dashboard</title>
  <script  src="jquery-3.2.1.js"></script> 
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
  <link rel="stylesheet" href="bootstrap.min.css">
           <script src="bootstrap.min.js"> </script>
           <link rel="stylesheet" href="font.css">
           <link rel="stylesheet" href="nawawi.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
           
           <style>
                @font-face { font-family: "Glyphicons Halflings"; 
              src: url(fonts/glyphicons-halflings-regular.ttf); } 

              </style>
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
        <li class="header">Fee registeration</li>
        <li class="active treeview"><a href="#"><i class="fa fa-dashboard">
          </i> <span>Dashboard</span><span class="pull-right-container"></span></a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Student Info</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="register.php"><i class="fa fa-circle-o"></i> Registration</a></li>
            <li><a href="searchsbyid.php"><i class="fa fa-circle-o"></i> student search: (BYID)</a></li>
            <li><a href="searchclass.php"><i class="fa fa-circle-o"></i> search: (by class)</a></li>
            <li><a href="modifyy.php"><i class="fa fa-circle-o"></i> Student list</a></li>
          </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-th"></i> <span>Examination Info</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="exam.php"><i class="fa fa-circle-o"></i> Exam Register</a></li>
              <li><a href="table_exam.php"><i class="fa fa-circle-o"></i>Exam List </a></li>
              <li><a href="exam_person.php"><i class="fa fa-circle-o"></i> Exam Register: (indivital)</a></li>
              <li><a href="exam_class.php"><i class="fa fa-circle-o"></i>Exam Search: (by class)</a></li>
            </ul>
          </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>financial Info</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="fee_setup.php"><i class="fa fa-circle-o"></i> Fee payment</a></li>
          <li><a href="fee_group.php"><i class="fa fa-circle-o"></i>Fee payment (Class) </a></li>
          <li><a href="fee_search_class.php"><i class="fa fa-circle-o"></i>Fee search (by class)</a></li>
          <li><a href="fee_table.php"><i class="fa fa-circle-o"></i>Fee List </a></li>
      </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Teacher Info</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="teacher_register.php"><i class="fa fa-circle-o"></i>Teacher Registration</a></li>
              <li><a href="teacher_table.php"><i class="fa fa-circle-o"></i>Teacher List </a></li>
          </ul>
        </li>
             
        <li class="treeview">
          <a href="#">
       <i class="fa fa-book"></i>
            <span>Courses Info</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="course.php"><i class="fa fa-book"></i>Course Info</a></li>
              <!-- <li><a href="course_table.php"><i class="fa fa-table"></i>course list </a></li> -->
          </ul>
        </li>
    <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Attendances Info</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        <ul class="treeview-menu">
          <li><a href="attendance_person.php"><i class="fa fa-file"></i>Attendance indivitual</a></li>
          <li><a href="attendance_table.php"><i class="fa fa-table"></i>Attendance list </a></li>
          <li><a href="student_attendance.php"><i class="fa fa-table"></i>Attendance by class </a></li>
      </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Time table </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="time.php"><i class="fa fa-table"></i>Time table Setup</a></li>
              <li><a href="time_table_class_search.php"><i class="fa fa-table"></i>Time Table  search class</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"><br>
  <div class="container-fluid">
  <div class="col-md-12">
  <div class="panel panel-danger">
  <div class="panel-heading"><h4>Fee registration</h4></div>
  <div class="panel-body">

  <form role="form" acton="" method="POST">
  <div class="row">
<div class="col-md-5">

<div class="form-group">
  <label>ID:</label>
  <select  class="form-control" id="ID" name = "ID" required>

  <?php
$host ="localhost";
$user = "root";
$pswd = "";
$db = "simpledata";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($host,$user,$pswd,$db);
						//Doctor Query 
						$sql = " SELECT  ID from registration";
						$result = $conn->query($sql);
            if ($result->num_rows >0){
							while($row = $result->fetch_assoc()){?>
								<option value="<?php echo $row['ID']; ?>"> <?php echo $row['ID'];?></option>
							<?php }
						}
						?>
	</select>
  <script>
              /// waa midka sameynaya dropdown items-ka
                                $(document).ready(function(){
                                    $("#ID").on("change", function(){
                                    var st_id = $(this).val();
                                    if(st_id){
                                        $.get(
                                            "attendance_get_id.php",
                                            {ID: st_id},
                                            function(data){
                                                $("#studentname").val(data);
                                            }
                                        );
                                        
                                    }
                                        else{
                                            $("#studentname").html("enter");
                                        }
                                });
                                });
      </script>
  </div> </div>
  
  <div class="col-md-6">
  <div class="form-group">
  <label>Student name:</label>
  <input type="text" class="form-control" id="studentname"  name="studentname" placeholder="Student Name"required>
  </div>
  
</div>

</div>
<div class="row">
<div class="col-md-6">

  <div class="form-group">
  <label>Date:</label>
  <input type="date" class="form-control"  name="date"id="date" >
  </div>


  <div class="form-group">
  <label>Month:</label>
  <select class="form-control" id="month" name="month" required>								
  <option>January</option>
  <option>February</option>
  <option>March</option>
  <option>April</option>
  <option>May</option>
  <option>June</option>
  <option>July</option>
  <option>August</option>
  <option>September</option>
  <option>October</option>
  <option>November</option>
  <option>December</option>
  </select>
</div>
 </div>
 <div class="col-md-6">
 <div class="form-group">
 <label>Year       :</label>
 <select class="form-control" id="year"  style="width:; height:; font-size:13px;"  name="year" required>
<!-- <option selected disabled> Select Year</option> -->
<option> 1990/1991 </option>
<option> 1991/1992 </option>
<option> 1992/1993 </option>
<option> 1993/1994 </option>
<option> 1994/1995 </option>
<option> 1995/1996 </option>
<option> 1996/1997 </option>
<option> 1997/1998 </option>
<option> 1998/1999 </option>
<option> 1999/2000 </option>
<option> 2000/2001 </option>
<option> 2001/2002 </option>
<option> 2002/2003 </option>
<option> 2003/2004 </option>
<option> 2004/2005 </option>
<option> 2005/2006 </option>
<option> 2006/2007 </option>
<option> 2007/2008 </option>
<option> 2008/2009 </option>
<option> 2009/2010 </option>
<option> 2010/2011 </option>
<option> 2011/2012 </option>
<option> 2012/2013 </option>
<option> 2013/2014 </option>
<option> 2014/2015 </option>
<option> 2015/2016 </option>
<option> 2016/2017 </option>
<option> 2017/2018 </option>
<option> 2018/2019 </option>
<option> 2019/2020 </option>
<option> 2020/2021 </option>
<option> 2021/2022 </option>
<option> 2022/2023 </option>
<option> 2023/2024 </option>
<option> 2024/2025 </option>
<option> 2025/2026 </option>
<option> 2026/2027 </option>
<option> 2027/2028 </option>
<option> 2028/2029 </option>
<option> 2030/2031 </option></select>
 </div>


  <div class="form-group">
  <label>Attendance:</label>
  <select class="form-control" id="att" name="att" required>								
  <option value="present">Present</option>
  <option value="absent">Absent</option>
  <option value="leave">Leave</option>
  </select>
</div>
 </div>

 </div>
  <button type="submit" name="send" id="send" class="btn btn-primary pull-right">Register</button>
  </form>
</div>
  <div class="panel-footer">Panel Footer</div>
  </div> </div> <br>
   </div> </div>
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
</body>
</html>
