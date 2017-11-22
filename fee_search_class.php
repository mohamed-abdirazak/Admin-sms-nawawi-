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
$fee_id;
$st_id="";
$studentname="";
$date="";
$month="";
$mony_type="";
$letters="";
$remaining="";
$amount="";



mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)


function getData()
{


$data =array();

$data[11] =$_POST['branch'];
$data[12] =$_POST['classname'];
$data[13] =$_POST['section'];
return $data;
}

if (isset($_POST['fee_class_search'])) {
    $info = getData();
    $sql = "SELECT *FROM fee ";
    $search_result =mysqli_query($conn,$sql);
if (mysqli_num_rows($search_result)){
 while ($rows=mysqli_fetch_array($search_result)) {
    $id=$rows['fee_id'];
$id=$rows['st_id'];
$id=$rows['studentname'];
$id=$rows['date'];
$id=$rows['month'];
$id=$rows['money_type'];
$id=$rows['letters'];
$id=$rows['remaining'];
$id=$rows['amount'];
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exam class | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <script src="jquery-3.2.1.js"></script>
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
        <li class="header">MAIN NAVIGATION</li>
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
            <li><a href="modifyy.php"><i class="fa fa-circle-o"></i> Student List</a></li>
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
              <li><a href="exam.php"><i class="fa fa-circle-o"></i> Exam register</a></li>
              <li><a href="table_exam.php"><i class="fa fa-circle-o"></i>Exam list </a></li>
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
          <li><a href="fee_search_class.php"><i class="fa fa-circle-o"></i>Fee search (Class) </a></li>
          <li><a href="fee_table.php"><i class="fa fa-circle-o"></i>Fee list </a></li>
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
              <li><a href="teacher_register.php"><i class="fa fa-circle-o"></i> Teacher Registration</a></li>
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
          <li><a href=" attendance_search_class.php"><i class="fa fa-search" style="color:#00bcd8"></i>Attendance Search (Class) </a></li>
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
  <div class="content-wrapper">
 

<div class="col-md-12">
      <form class="navbar-form"action="fee_search_class.php"method="POST"> 
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
                       
            
  
  
</select>
     <div class="input-group-btn"> 
                    <button class="btn btn-primary"type="submit" name="fee_class_search">
                        <span class="glyphicon glyphicon-search"></span></button> 
                        </div> </div> </form>
  <h3>Fee Searched by<strong> class </strong></h3>
  <div class="table-responsive">        
  <table class="table table-bordered table-hover table-striped"id="table">
  <thead style="background-color:#dc9408;color:white; font-size:13px;">
  <tr>
  <th>Fee_ID</th>
<th>St_ID</th>
<th style="padding-right:110px" >StudentName</th>
 <th style="padding-right:7%">date</th>
  <th>month</th>
<th>MoneyType</th>
<th style="padding-right:8%" >Letters</th>
 <th>Remaining</th>
<th>Amount</th>
        <th style="padding-right:12%">Action</th>
      </tr></thead>
      <tbody style=" font-family:verdana; font-size:12px">
     <?php
    // Select Command
// sql to Select a record
$conn = new mysqli ("localhost","root","","simpledata");
if (isset($_POST['fee_class_search'])){
$sql = "SELECT  fee.fee_id, fee.st_id,fee.studentname,fee.date,fee.month,fee.money_type,fee.letters,fee.remaining,fee.amount
 FROM fee ,registration
 WHERE registration.branch='$info[11]'
AND registration.classname='$info[12]' AND registration.section ='$info[13]' AND registration.ID=fee.st_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while ($row=$result->fetch_assoc() ) {?>
       <tr>
       <td><?php echo $row['fee_id'] ?></td>
       <td><?php echo $row['st_id'] ?></td>
           <td><?php echo $row["studentname"] ?></td>
           <td><?php echo $row['date'] ?></td>
           <td><?php echo $row["month"] ?></td>
           <td><?php echo $row["money_type"] ?></td>
           <td><?php echo $row["letters"] ?></td>
           <td><?php echo $row["remaining"] ?></td>
          <td><?php echo $row['amount'] ?></td>
        
           <td>
               <button type="submit" class="btn btn-primary btn-sm" style="background-color:#dc9408" data-toggle="modal" data-target="#edit-<?php echo $row['fee_id']; ?>" id=""><i class="fa fa-pencil fa-sm"></i> Edit</button>
               <div class="modal fade" role="dialog" id="edit-<?php echo $row['fee_id']; ?>">
                   <div class="modal-dialog">
                       <div class="modal-content">
                          <div class="modal-header">
<h4 class="modal-title" id="exampleModalLongTitle">STUDENT FEE</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form method="POST" action="fee_class_update.php" class="form-inline">
<input type="hiddden" name="fee_id" id="#edit-<?php echo $row['st_id']; ?>"style="width:120px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['fee_id']; ?>"> 
<label> ID : &nbsp;&nbsp;</label>
<input type="text" name="st_id" id="#edit-<?php echo $row['st_id']; ?>"style="width:120px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['st_id']; ?>"> 
<label> Name: &nbsp;&nbsp;</label>
<input style="width:327px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="studentname" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['studentname']; ?>"><br><br>
                                   
<div class="form-group">
<label>month:</label>&nbsp;
<select class="form-control"name="month" style="width:200px ; height:29px; font-size:13px;font-family:verdana;" id="#edit-<?php echo $row['st_id']; ?>" >
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
<label>Register date:</label>
<input type="date" class="form-control" id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['date']; ?>" style="width:200px;" name="date"id="date">
</div><br><br>
<label>money type   :</label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" class="form-control" id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['money_type']; ?>" style="width:180px" name="money_type">
<label>Letters:</label>&nbsp;&nbsp;
<input type="text" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['letters']; ?>" style="width:180px" name="letters">&nbsp;<br><br>
<label>Remaining :</label>&nbsp;&nbsp;
<input type="number" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['remaining']; ?>"  style="width:180px" name="remaining">&nbsp;
<label>Amount :</label>&nbsp;&nbsp;&nbsp;
<input type="number" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['amount']; ?>"  style="width:180px" name="amount"><br><br>     
<button type="submit" style=""class="btn btn-success" name="Fee_class_update">Update</button> 


        </form>
                              
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           </div>
                       </div> </div> </div> 
                     <a onclick ="return confirm('are you sure to delete')" href="fee_class_update.php?idd=<?php echo $row['fee_id'] ?>"  
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
