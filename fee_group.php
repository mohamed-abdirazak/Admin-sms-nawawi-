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
$id="";
$studentname="";
$term="";
$islamic="";
$arabic="";
$somali="";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)


function getData()
{

 
$data =array();
$data[0] =$_POST['branch'];
$data[1] =$_POST['classname'];
$data[2] =$_POST['section'];
return $data;
}

  

if (isset($_POST['submit'])) {
    $info = getData();
    $sql = "SELECT * FROM registration";
    $search_result =mysqli_query($conn,$sql);
if (mysqli_num_rows($search_result)){
 while ($rows=mysqli_fetch_array($search_result)) {

$id=$rows['ID'];
$studentname =$rows['studentname'];
// $term =$rows['term'];

}
}
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exam Setup | Dashboard</title>
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
  <div class="container-fluid">
  <div class-"row"><br>
  <div class="col-md-12">

  <form class="form-inline" action="fee_group.php" method="POST">
  <div class="form-group">
    <label>Branch:</label>
    <select  class="form-control" name="branch" id="branch" placeholder="Branch">
  <option>Nawawi</option>
  <option>Ridwaan</option>
  <option>Raxma</option>
  
</select>
  </div>
  <div class="form-group">
    <label>Class Name:</label>
    <select class="form-control"  name="classname" id="classname">
   
<option >kindergartner</option>
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
  </div>

  <div class="form-group">
    <label>Section:</label>
    <select class="form-control" name="section" id="result" onchange="result();">

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
  </div>

  <button type="submit" name="submit" class="btn btn-primary">  <span class="glyphicon glyphicon-search"></span></button><br><br>
 
<div class-"row">
 
  <div class="col-md-12">
  <div class="form-group">
  <label>Date:</label>
  <input type="date" class="form-control"  name="date"id="date">
  </div>

          <div class="form-group">
          <label>Month:</label>
          <select class="form-control" id="month" name="month">								
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
<br><br>
         <div class="table-responsive" >
        <table class="table table-xm table-hover table-striped table-bordered">
        <thead style="background-color:#fb376e;color:white;">
        <tr>
      <th>ID</th>
      <th style="padding-right:13%">Student name</th>
      <th>ReceptNO</th>
      <th>Money  type</th>
      <th style="padding-right:13%">In letters</th>
       <th>Remaining</th>
      <th>Amount</th>
        </tr>
      </thead>

       <tbody>
       <?php
 if(isset($_POST['submit'])){
 $info=getData();
 $sql1 = "SELECT * FROM registration WHERE branch='$info[0]' AND classname='$info[1]' AND section='$info[2]'";
 $search_result =mysqli_query($conn,$sql1);
      while ($rows=$search_result->fetch_assoc() ) {
       
   
      ?>
       <tr style="background-color:#f8e227">
      <td  contenteditable="false"  style="background-color:#b0a54b;color:white" id="" class="id" value="<?php echo $rows['ID'];?>"><?php echo $rows['ID'];?> </td>
      <td contenteditable="false" style="background-color:#f7d95f" class="studentname" value=" <?php echo $rows['studentname'];?>"><?php echo $rows["studentname"]; ?></td> 
      <td contenteditable="true" class="recept_no"></td>
      <td contenteditable="true" class="money_type"></td>
      <td contenteditable="true" class="letters"> </td>
      <td contenteditable="true" class="remaining"></td>
      <td contenteditable="true" class="amount"></td>
       </tr>

<?php 
}
}

?>


  </tbody>
 
</table></div></div></div>
<br><br>
<div align="center">
<button type="button" name="send" id="send" class="btn btn-primary pull-right">Send</button>
</div>
 </form>
 </div></div>
 </div></div>
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
<script>
      
$('#send').click(function(){
    var id = [];
    var studentname = [];
    var recept_no = [];
    var money_type = [];
    var letters = [];
    var remaining = [];
    var amount = [];
   
    $('.id').each(function(){
     id.push($(this).text());
    });
    $('.studentname').each(function(){
      studentname.push($(this).text());
    });
    $('.recept_no').each(function(){
      recept_no.push($(this).text());
    });
    $('.money_type').each(function(){
      money_type.push($(this).text());
    });
    $('.letters').each(function(){
      letters.push($(this).text());
    });
    $('.remaining').each(function(){
     remaining.push($(this).text());
    });
    $('.amount').each(function(){
     amount.push($(this).text());
    });
    var date = $("#date").val();
    var month = $("#month").val();
    $.ajax({
     url:"fee_register_group.php",
     method:"POST",
     data:{
       id:id, 
       studentname:studentname, 
       date:date,   
       month:month,  
       recept_no:recept_no,  
       money_type:money_type, 
       letters:letters, 
       remaining:remaining, 
       amount:amount
       },
     success:function(data){
      window.location.href="fee_table.php";
      $("td[contentEditable='true']").text("");
      for(var i=0; i<= count; i++)
      {
       $('tr#'+i+'').remove();
      }
      fetch_item_data();
     }
    });
   });
   
  </script>