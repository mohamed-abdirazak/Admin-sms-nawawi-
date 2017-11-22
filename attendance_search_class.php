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
$att_id="";
$id="";
$studentname = "";
$date = "";
$month="";
$year="";
 $att="";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)


function getData()
{


$data =array();

$data[11] =$_POST['branch'];
$data[12] =$_POST['classname'];
$data[13] =$_POST['section'];
$data[14] =$_POST['month'];
$data[15] =$_POST['year'];
return $data;
}

if (isset($_POST['attendance_class_search'])) {
    $info = getData();
    $sql = "SELECT *FROM registration,attendance ";
    $search_result =mysqli_query($conn,$sql);
if (mysqli_num_rows($search_result)){
 while ($rows=mysqli_fetch_array($search_result)) {

$id=$rows['st_id'];
$id=$rows['att_id'];
$id=$rows['studentname'];
$id=$rows['date'];
$id=$rows['year'];
$id=$rows['month'];
$id=$rows['att'];
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Attendance search class | Dashboard</title>
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
 

<div class="col-md-12">
      <form class="navbar-form"action="attendance_search_class.php"method="POST"> 
            <div class="input-group"> 
            <div class="form-group">
    <label >Branch:</label>&nbsp;&nbsp;
  <select style="width:100px ; height:33px;font-size:13px;" name="branch" id="branch">
 
  <option >Nawawi</option>
  <option >Raxma</option>
  <option >Ridwaan</option>
</select>
  </div>&nbsp;
   <div class="form-group">
    <label >Class: </label>&nbsp;&nbsp;
  <select style="width:110px ; height:33px;font-size:13px;" name="classname" id="classname">
  <option >Kindergartner</option>
  <option >Grade One</option>
  <option >Grade Two</option>
  <option >Grade Three</option>
  <option >Grade Four</option>
  <option>Grade Five</option>
  <option >Grade Six</option>
  <option>Grade Seven</option>
  <option>Grade Eight</option>
  <option>Form One</option>
  <option>Form Two</option>
  <option>Form Three</option>
  <option>Form Four</option>
  
</select>
  </div>&nbsp;
    <label>Section :</label>&nbsp;&nbsp;
  <select style="width:110px ; height:33px;font-size:13px;" name="section" id="result" onchange="result">
 
  <option>A</option>
   <option>B</option>
    <option>C</option>
     <option>D</option>
      <option>E</option>
       <option>F</option>
        <option>G</option>
         <option>H</option>
          <option>I</option>
           <option>J</option>
            <option>K</option>
             <option>L</option>
              <option>M</option>
               <option>N</option>
                <option>O</option>
                 <option>P</option>
                  <option>Q</option>
                   <option>R</option>
                    <option>S</option>
                     <option>T</option>
                      <option>V</option>
                       <option>U</option>
                        <option>W</option>
                         <option>X</option>
                          <option>Y</option>
                           <option>Z</option>
                       
            
  
  
</select>&nbsp;
<label>Month :</label>&nbsp;&nbsp;
  <select style="width:110px ; height:33px;font-size:13px;" name="month" id="result">
 
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
</select>&nbsp;
    <label>Year :</label>&nbsp;&nbsp;
  <select style="width:110px ; height:33px;font-size:13px;" name="year" id="result">
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
<option> 2030/2031 </option>

</select>
&nbsp;
                <div class="input-group-btn"> 
                    <button class="btn btn-primary"type="submit" name="attendance_class_search">
                        <span class="glyphicon glyphicon-search"></span></button> 
                        </div> </div> </form>
  <h3>Attendacne by class</h3>
  <div class="table-responsive">        
  <table class="table table-bordered table-hover table-striped"id="table">
    <thead style="background-color:#ac6007; ; color:white ; font-size:12px" >
      <tr>
      
        <th>St_id</th>
        <th style="padding-right:13%">Studentname</th>
        <th>Date</th>
        <th>Year</th>
        <th>Month</th>
        <th>Attendance</th>
        <th style="padding-right:15%">Action</th>
      </tr>
      <tbody style=" font-family:verdana; font-size:12px">
     <?php
    // Select Command
// sql to Select a record
$conn = new mysqli ("localhost","root","","simpledata");
if (isset($_POST['attendance_class_search'])){
$sql = "SELECT registration.ID,registration.branch,registration.classname,.registration.section,attendance.att_id,attendance.st_id,attendance.studentname,attendance.date,attendance.month,attendance.year,attendance.att FROM attendance , registration WHERE registration.branch='$info[11]'
AND registration.classname='$info[12]' AND registration.section ='$info[13]' AND attendance.month ='$info[14]' AND attendance.year ='$info[15]' AND registration.ID=attendance.st_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while ($row=$result->fetch_assoc() ) {?>
       <tr>
       
       <td><?php echo $row['st_id'] ?></td>
           <td><?php echo $row["studentname"] ?></td>
           <td><?php echo $row['date'] ?></td>
           <td><?php echo $row["year"] ?></td>
           <td><?php echo $row["month"] ?></td>
           <td><?php echo $row["att"] ?></td>
           <td>
           <button type="submit" class="btn btn-sm"  style="background-color:#671609;color:white"data-toggle="modal" data-target="#edit-<?php echo $row['att_id']; ?>" id=""><i class="fa fa-pencil fa-sm"></i> Edit</button>
           <div class="modal fade" role="dialog" id="edit-<?php echo $row['att_id']; ?>" >
               <div class="modal-dialog">
                   <div class="modal-content">
                      <div class="modal-header"style="font-family:elephent">
<h4 class="modal-title" id="exampleModalLongTitle">Student attendance List</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form method="POST" action="attendance_update.php" class="form-inline">
<label> ID : &nbsp;&nbsp;</label>
<input type="text" name="st_id" id="#edit-<?php echo $row['st_id']; ?>"style="width:120px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['st_id']; ?>"> 

<input type="hidden" name="att_id" id="#edit-<?php echo $row['st_id']; ?>"style="width:120px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['att_id']; ?>"> 

<label> Name: &nbsp;&nbsp;</label>
<input style="width:327px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="studentname" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['studentname']; ?>"><br><br>
                          
<div class="form-group">
<label>Month:</label>&nbsp;
<select class="form-control"name="month" style="width:150px; font-size:13px;font-family:verdana;" id="#edit-<?php echo $row['st_id']; ?>" >
<option><?php echo $row['month'];?></option>
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
</div>&nbsp;&nbsp;
<div class="form-group">
<label>Attendance date:</label>
<input type="date" class="form-control" id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['date']; ?>" style="width:200px;" name="date" id="date">
</div><br><br> 
<label>Year :</label>
<select class="form-control" id="year"  style="width:200px; height:; font-size:13px;" id="#edit-<?php echo $row['st_id']; ?>"  name="year" >
<!-- <option selected disabled> Select Year</option> -->
<option> <?php echo $row['year'];?></option>
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

<label>Attendance:</label>
<select class="form-control" style="width:200px;" id="att" name="att"  id="#edit-<?php echo $row['st_id']; ?>">								
<option>  <?php echo $row['att'];?></option>

<option value="present">Present</option>
<option value="absent">Absent</option>
<option value="leave">Leave</option>
</select><br><br>  <button type="submit" style=""class="btn btn-success" name="update_att">Update</button> 


</form>
                     
                        </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           </div>
                       </div> </div> </div> 
                     <a onclick ="return confirm('are you sure to delete')" href="attendance_update.php?idd=<?php echo $row['att_id'] ?>"  
               class="btn btn-danger btn-sm"><i class="fa fa-trash fa-sm"></i> Delete</a>
       </td>
          
       </tr>
<?php
}
}
}
echo "</tbody></table></div></div>";
?>





  </div>
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
