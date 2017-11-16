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
include("exams.php");
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
  <style>
.facts-box {
  border: 2px solid white;
  background-color: rgba(100, 144, 6,0.75);
  padding: 5px;
  font-size: 15px;
  margin-bottom: 20px;
  width: -moz-fit-content;
  width: -webkit-max-content;
  color:white;
}</style>
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
          <li><a href="attendance_person.php"><i class="fa fa-file"></i>Attendance Setup</a></li>
          <li><a href="attendance_table.php"><i class="fa fa-table"></i>Attendance list </a></li>
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
  <div class="container-fluid">
  <div class-"row"><br>
  <div class="col-md-12">
  <div class="facts-box">Choice Branch,Class and Section To register the exam class choice the Term and Year aslo fill the  subjects the Save. </div>
  <form class="form-inline" action="exam.php" method="POST">
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
    <select class="form-control" name="section" id="result" onchange="result">
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
    <label>Term:</label>
  <select class="form-control" id="term" name="term"  style="width:; height:; font-size:13px;">
         <!-- <option selected disabled>Select Term</option> -->
         <option value="Term one">Term One</option>
          <option value="Term two">Term  Two</option></select></div>
    <div class="form-group">
    <label>Year       :</label>
    <select class="form-control" id="year"  style="width:; height:; font-size:13px;"  name="year" >
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
<br><br>
         <div class="table-responsive" >
        <table class="table table-xm table-hover table-striped table-bordered">
        <thead style="background-color:#ac6007; ; color:white ; font-size:12px" >
        <tr>
      <th>ID</th>
      <th style="padding-right:13%"> Name</th>
      <th>Islamic</th>
      <th>Arabic</th>
       <th>Somali</th>
      <th>English</th>
      <th>Math</th>
      <th>Science</th>
       <th>Social</th>
      <th>Geography</th>
      <th>History</th>
      <th>Physics</th>
      <th>Biology</th>
       <th>Chemistry</th>
      <th>Displine</th>
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
       <tr style="background-color:#f8ee7e">
      <td  contenteditable="false"  style="background-color:white" id="" class="id" value="<?php echo $rows['ID'];?>"><?php echo $rows['ID'];?> </td>
      <td contenteditable="false"  style="background-color:#eae7c6"  class="studentname" value=" <?php echo $rows['studentname'];?>"><?php echo $rows["studentname"]; ?></td> 
      <td contenteditable="true"  class="islamic"></td>
      <td contenteditable="true" class="arabic"></td>
      <td contenteditable="true" class="somali"></td>
      <td contenteditable="true" class="english"></td>
      <td contenteditable="true" class="math"></td>
      <td contenteditable="true" class="science"></td>
      <td contenteditable="true" class="social"></td>
      <td contenteditable="true" class="geography"></td>
      <td contenteditable="true" class="history"></td>
      <td contenteditable="true" class="physics"></td>
      <td contenteditable="true" class="biology"></td>
      <td contenteditable="true" class="chemistry"></td>
      <td contenteditable="true" class="discipline"></td>
      
       </tr>

<?php 
}
}

?>


  </tbody>
 
</table></div></div></div>
<br><br>
<div align="center">
<button type="button" style="width:20%; background-color:#ac6007;color:white" name="save" id="save" class="btn  pull-right">Save</button>
</div>
 </form>
 </div></div>
 </div> </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 0.1
  </div>
  <strong>Copyright &copy; 2017. NAWAWI </strong> All rights
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
$('#save').click(function(){
    var id = [];
    var studentname = [];
    var islamic = [];
    var arabic = [];
    var somali = [];
    var english = [];
    var math = [];
    var science = [];
    var social = [];
    var geography = [];
    var history = [];
    var physics = [];
    var biology = [];
    var chemistry = [];
    var discipline = [];
    $('.id').each(function(){
     id.push($(this).text());
    });
    $('.studentname').each(function(){
      studentname.push($(this).text());
    });
    $('.islamic').each(function(){
      islamic.push($(this).text());
    });
    $('.arabic').each(function(){
      arabic.push($(this).text());
    });
    $('.somali').each(function(){
     somali.push($(this).text());
    });
    $('.english').each(function(){
     english.push($(this).text());
    });
    $('.math').each(function(){
     math.push($(this).text());
    });
    $('.science').each(function(){
      science.push($(this).text());
    });
    $('.social').each(function(){
      social.push($(this).text());
    });
    $('.geography').each(function(){
      geography.push($(this).text());
    });
    $('.history').each(function(){
     history.push($(this).text());
    });
    $('.physics').each(function(){
      physics.push($(this).text());
    });
    $('.biology').each(function(){
      biology.push($(this).text());
    });
    $('.chemistry').each(function(){
      chemistry.push($(this).text());
    });
    $('.discipline').each(function(){
      discipline.push($(this).text());
    });

    var term = $("#term").val();
    var year = $("#year").val();

    $.ajax({
     url:"exams.php",
     method:"POST",
     data:{
       id:id, 
       studentname:studentname, 
       term:term,   
       year:year,   
       islamic:islamic, 
       arabic:arabic, 
       somali:somali, 
       english:english,
       math:math, 
       science:science, 
       social:social, 
       geography:geography,
       history:history, 
       physics:physics, 
       biology:biology, 
       chemistry:chemistry,
       discipline:discipline
       },
     success:function(data){
      window.location.href="table_exam.php";
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