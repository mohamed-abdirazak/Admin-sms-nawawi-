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
$id="";
$name = "";
$branch = "";
$level="";
$classname="";
 $section="";
$term="";
$year="";
$islamic="";
$arabic="";
$somali="";
$english="";
$math="";
$science="";
$social="";
$geography="";
$history="";
$physics="";
$biology="";
$chemistry="";
$discipline="";
$total=0;
$average=0;

if(isset($_POST['send'])){
  $id = $_POST["ID"];
  $studentname = $_POST["studentname"];
  $term = $_POST["term"];
  $year = $_POST["year"];
  $islamic = $_POST["islamic"];
  $arabic = $_POST["arabic"];
  $somali = $_POST["somali"];
  $english = $_POST["english"];
  $math = $_POST["math"];
  $science = $_POST["science"];
  $social = $_POST["social"];
  $geography = $_POST["geography"];
  $history = $_POST["history"];
  $physics = $_POST["physics"];
  $biology = $_POST["biology"];
  $chemistry = $_POST["chemistry"];
  $discipline = $_POST["discipline"];
  $total=$islamic+$arabic+$somali+$english+$math+$science+$social+$geography+$history+$physics+$biology+$chemistry+$discipline;
  $average= $total/13;
$sql = "INSERT INTO exam(st_id,`name`,term,year,islamic,arabic,somali,english,math,science,social,`geography`,history,physics,biology,
chemistry,discipline,total,average) 
VALUES ('$id','$studentname','$term','$year','$islamic','$arabic','$somali','$english','$math','$science','$social','$geography','$history','$physics','$biology','$chemistry','$discipline',$total,$average)";

  if ($conn->query($sql)===TRUE) {
    header("location:table_exam.php");
  }
  else {
    echo "failed";
  }
 }


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home | Dashboard</title>
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
  <link rel="stylesheet" href="dist/css/google.css">
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
              .panel > .panel-heading {
    background-image: none;
background-color:#ac6007;
   font-size:12px;
    color: white;

}
.button {background-color: #ac6007;
    color:white
}
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
  <div class="col-md-12">
  <div class="panel panel-success " style="margin-top:5px;">
  <div class="panel-heading"><h4>EXAM REGISTER INDIVITUALS</h4></div>
  <div class="panel-body">

  <form role="form" acton="" method="POST">
  <div class="row">
<div class="col-md-4">

<div class="form-group">
  <label>ID:</label>
  <select  class="form-control" id="ID" name = "ID" placeholder="select the student Name Here..">

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
                                            "fee_st_id.php",
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
  <div class="col-md-8">
  <div class="form-group">
  <label>Student name:</label>
  <input type="text" class="form-control" id="studentname"  name="studentname" >
  </div>
</div></div>
<div class="row">
<div class="col-md-3">
  <div class="form-group">
  <label>Term:</label>
  <select class="form-control" id="term" name="term"  >
         
         <option value="Term one">Term One</option>
          <option value="Term two">Term  Two</option></select>
  </div>

  <div class="form-group">
  <label>Somali:</label>
  <input type="number" class="form-control" id="somali"  name="somali" placeholder="Somali">
  </div>

  <div class="form-group">
  <label>Social:</label>
  <input type="number" class="form-control"  name="social"id="social"placeholder="Social">
  </div>

  <div class="form-group">
  <label>Biology:</label>
  <input type="number" class="form-control" id="biology" name="biology" placeholder="Biology">
  </div>

 </div>
 <div class="col-md-3">
  <div class="form-group">
  <label>Year       :</label>
  <select class="form-control" id="year"  name="year" >
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
  <label>English:</label>
  <input type="number" class="form-control" id="english" name="english" placeholder="English">
  </div>

  <div class="form-group">
  <label>Geography:</label>
  <input type="number" class="form-control"  name="geography"id="geography"placeholder="Geography">
  </div>

  <div class="form-group">
  <label>Chemistry:</label>
  <input type="number" class="form-control" id="chemistry" name="chemistry" placeholder="Chemistry">
  </div>

 </div>

 <div class="col-md-3">
  <div class="form-group">
  <label>Islamic:</label>
  <input type="number" class="form-control" id="islamic" name="islamic" placeholder="Islamic">
  </div>


  <div class="form-group">
  <label>Math:</label>
  <input type="number" class="form-control" id="math" name="math" placeholder="Math">
  </div>

  <div class="form-group">
  <label>History:</label>
  <input type="number" class="form-control"  name="history"id="history"placeholder="History">
  </div>

  <div class="form-group">
  <label>Discipline:</label>
  <input type="number" class="form-control" id="discipline" name="discipline" placeholder="Discipline">
  </div>

 </div>
 <div class="col-md-3">
  <div class="form-group">
  <label>Arabic:</label>
  <input type="number" class="form-control" id="arabic" name="arabic" placeholder="Arabic">
  </div>

  <div class="form-group">
  <label>Science:</label>
  <input type="number" class="form-control" id="science" name="science" placeholder="science">
  </div>
  
  <div class="form-group">
  <label>Physics:</label>
  <input type="number" class="form-control"  name="physics"id="physcis" placeholder="Physics" >
  </div>

  
  <button type="submit" name="send" id="send"style="margin-top:25px;width:100% ;" class="btn button  ">SEND</button>
 
  
 </div>
 </div>
 
  </form>
</div>
  <div class="panel-footer"  style="background-color:#ac6007; color:white">Examination</div>
  </div> </div> <br>
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
