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
$data[0] =$_POST['id'];
$data[1] =$_POST['studentname'];
$data[2] =$_POST['gender'];
$data[3] =$_POST['mothername'];
$data[4] =$_POST['guardianname'];
$data[5] =$_POST['guardianrelation'];
$data[6] =$_POST['guardiantell'];
$data[7] =$_POST['guardianoccupation'];
$data[8] =$_POST['pob'];
$data[9] =$_POST['address'];
$data[10] =$_POST['dob'];
$data[11] =$_POST['phone'];
$data[12] =$_POST['level'];
$data[13] =$_POST['classname'];
$data[14] =$_POST['section'];
$data[15] =$_POST['branch'];
$data[16] =$_POST['nationality'];
$data[17] =$_POST['registrationdate'];

return $data;
}
if (isset($_POST['register'])) {
 $target = "pictures/".basename($_FILES['image']['name']);
		$image = $_FILES['image']['name'];

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
	


      
$info = getData();
$sql = "INSERT INTO registration (ID, studentname, gender, mothername,guardianname,guardianrelation,guardiantell,
guardianoccupation,pob,address,dob,phone,level,classname,section,branch,nationality,registrationdate,image)
VALUES ('$info[0]', '$info[1]', '$info[2]','$info[3]','$info[4]','$info[5]','$info[6]',
'$info[7]','$info[8]','$info[9]', '$info[10]', '$info[11]','$info[12]','$info[13]','$info[14]','$info[15]',
'$info[16]','$info[17]','$target')";
$search_result = mysqli_query($conn,$sql);
if ($search_result) {
  header("location:modifyy.php");
}
else {
}
}

$sql= " SELECT ID FROM registration ORDER BY ID DESC";
$ID_NUM= "";
$result= $conn->query($sql);
  $row=$result->fetch_assoc();


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Registeration | Dashboard</title>
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
<div class="row">
  <div class="col-md-12">
<div class="panel panel-primary" style="margin: 5px 5px 5px 10px;">
<div class="panel-heading">Student Registration</div>

<div class="row">
<div class="col-md-4">
  <form style="margin: 5px 5px 5px 10px;" action="register.php" method="POST"  name="myForm" enctype="multipart/form-data">
   <!--<input type="hidden" name="size" value="1000000">-->
  <div class="form-group">
    <label for="text">ID:</label>&nbsp;
    <input type="text" class="form-control" id="id" id="id1" value = "<?php echo $row['ID']+1 ;?>"name="id"required    style="width:100%  ;  height:31px;" onkeypress="return isNumber(event)" readonly> 
  </div> 

 <div class="form-group">
    <label for="text"> Mother name :  </label>
    <input type="text" class="form-control" id="mothername"  id="id1" name="mothername"  style="width:100%  ;  height:31px;" placeholder="MotherName"
    required pattern="[a-zA-Z]+.*\S.*" title="allow only letters" >
  </div>
 
  <div class="form-group">
    <label>Guardian name:  </label>
    <input type="text" class="form-control" id="guardianname"  id="id1" name="guardianname"   style="width:100%  ;  height:31px;"  placeholder="GuardianName"
 required pattern="[a-zA-Z]+.*\S.*" title="allow only letters">
  </div>
<div class="form-group">
    <label for="text">Address :  </label> 
    <input type="text" class="form-control" id="Address"  id="id1" name="address" style="width:100%  ;  height:31px;" placeholder="Address">
  </div> 

  
   <div class="form-group">
    <label for="text">Phone NO:  </label> &nbsp;
    <input type="text" class="form-control" id="phone"  id="id1" name="phone" required="" placeholder="Phone"   style="width:100%  ;  height:31px;" onkeypress="return isNumber(event)" >
  </div>

 <div class="form-group">
<label for="text">Section : </label>&nbsp;
  <select  style="width:100%  ;  height:31px;" name="section"  id="id1" id="section" placeholder="section">
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
  <button type="submit" name="register" class="btn btn-primary " style="width:760px ;height:31px;"  >REGISTER</button>
</div>



    <div class="col-md-6"  style="margin: 5px 0 5px 0;"> 
  <div class="form-group">
    <label>Student name: </label>
    <input type="text" class="form-control"  style="width:100% ; height:31px;" id="studentname" name="studentname"  style="height:31px;"  placeholder="StudentName" required pattern="[a-zA-Z]+.*\S.*" title="allow only letters">
  </div> 
  <div class="form-group">
    <label>Nationality :  </label> &nbsp;
 <select   style="width:100% ; height:31px;" name="nationality" id="nationality" placeholder="Nationality">
<!-- <option >SELECT</option> -->
 <option >Somalia</option>
 <option >Malta</option>
 <option>Yemen</option>
 <option>Yugoslavia</option>
 <option>South Africa</option>
 <option>Zambia</option>
 <option>Zimbabwe</option>
 <option>Myanmar</option>
 <option>Morocco</option>
 <option>Rwanda</option>
 <option>Saudi Arabia</option>
 <option>Sudan</option>
 <option>Senegal</option>
 <option>Singapore</option>
 <option>Mexico</option>
 <option>Marshall Island</option>
 <option>Macedonia</option>
 <option>Mali</option>
 <option>Malawi</option>
 <option>Malaysia</option>
 <option>Mayotte</option>
 <option>Namibia</option>
 <option>New Caledonia</option>
 <option>Niger</option>
 <option>Norfolk Island</option>
 <option>Nigeria</option>
 <option>Nicaragua</option>
 <option>Niue</option>
 <option>Netherlands</option>
 <option>Norway</option>
 <option>Nepal</option>
 <option>Nauru</option>
 <option>New Zealand</option>
 <option>Oman</option>
 <option>Pakistan</option>
 <option>Panama</option>
 <option>Pitcairn</option>
 <option>Peru</option>
 <option>Philippines</option>
 <option>Palau</option>
 <option>Poland</option>
 <option>Puerto Rico</option>
 <option>North Korea</option>
 <option>Portugal</option>
 <option>Paraguay</option>
 <option>Palestine</option>
 <option>Qatar</option>
 <option>Romania</option>
 <option>Russian Federation</option>
 <option>Suriname</option>
 <option>Slovakin</option>
 <option>Slovenia</option>
 <option>Sweden</option>
 <option>Swaziland</option>
 <option>Syria</option>
 <option>Togo</option>
 <option>Thailand</option>
 <option>Tunisia</option>
 <option>Turkey</option>
 <option>Tanzania</option>
 <option>Uganda</option>
 <option>Ukraine</option>
 <option>Uruguay</option>
 <option>United States</option>
 <option>Uzbekistan</option>
 <option>Samoa</option>

</select>  </div>

<div class="form-group">
    <label for="text">Guardian occupation:  </label> &nbsp;
    <input type="text" class="form-control"   style="width:100% ; height:31px;" id="occupation" name="guardianoccupation" placeholder="GuardianOccupation"  required pattern="[a-zA-Z]+.*\S.*" title="allow only letters" style="height:31px;">
  </div> 

  <div class="form-group">
    <label for="text">Place Of Brith:  </label> &nbsp;
    <select   style="width:100% ; height:31px;" name="pob" id="pob" placeholder="PlaceOfBirth">
<!-- <option >SELECT</option> -->
 <option>Taleex</option>
 <option>Laas-caanood</option>
 <option>Sheikh</option>
 <option>Ood-weyne</option>
 <option>Buuhoodle</option>
 <option>Burco</option>
 <option>Seylac</option>
 <option>Lug-haye</option>
 <option>Baki</option>
 <option>Saylac</option>
 <option>Boorame</option>
 <option>Gebilay States</option>
 <option>Berbera</option>
 <option>Hargeysa</option>
  <option>Ceynabo</option>
 <option>Xuddun</option>
 <option>Ceerigaabo</option>
 <option>Xuddun</option>
 <option>Laas-qoray</option>
 <option>Ceel-afwen</option>
 <option>Baran</option>
 <option>Boosaaso</option>
 <option>Bandar-beyla</option>
 <option>Xaafuun</option>
 <option>Isku-shuban</option>
 <option>Qandala</option>
 <option>Caluula</option>
 <option>Baar-gaal</option>
  <option>Garowe</option>
 <option>Eyl</option>
 <option>Dan-gorayo</option>
 <option>Bur-tinle</option>
 <option>Gaal-kacyo</option>
 <option>Hobyo</option>
 <option>Xarar-dheere</option>
 <option>Jarriiban</option>
 <option>Goldogob</option>
 <option>Dhuusa-mareeb</option>
 <option>Ceel-buur</option>
 <option>Ceel-dheer</option>
 <option>Cadaado</option>
 <option>Cabuud-waaq</option>
 <option>Gal-hareeri</option>
 <option>Balan-bal</option>
 <option>Beled-weyne</option>
 <option>Buulo-burte</option>
 <option>Jalalaqsi</option>
 <option>Matabaan</option>
 <option>Maxaas</option>
 <option>Jowhar</option>
 <option>Bal-cad</option>
  <option>Cadale</option>
   <option>Aadan yabaal</option>
    <option>Mahaddaay</option>
     <option>Ruun-nirgood</option>
      <option>War-sheikh</option>
       <option>Wanle-weyn</option>
        <option>Qoryo-leey</option>
         <option>Baraawe</option>
          <option>Sablaale</option>
           <option>Kurtun-waaree</option>
            <option>Dajuuma</option>
             <option>Jilib</option>
              <option>Bu-aale</option>
               <option>Saakoow</option>
                <option>Kismaayo</option>
                 <option>Jamaame</option>
                  <option>Af-madow</option>
                   <option>Badhaadhe</option>
                    <option>Xagar</option>
                     <option>Baydhabo</option>
                      <option>Buur-hakaba</option>
                       <option>Baydhabo</option>
                        <option>Diin-soor</option>
                         <option>Qansax-dheere</option>
                          <option>Berdaale</option>
                           <option>Xuddur</option>
                          <option>Tayeegloow</option>
                           <option>Waa-jid</option>
                          <option>Ceel-berde</option>
                           <option>Yeed</option>
                          <option>Rab-dhuurre</option>
                           <option>Garba-haarreey</option>
                          <option>Luuq</option>
                           <option>Baar-dheere</option>
                          <option>Beled-xaawo</option>
                           <option>Dooloow</option>
                          <option>'Ceel-waaq</option>
                           <option>Xamar-weyne</option>
                           <option>Xamar-jajab</option>
                          <option>Boon-dheere</option>
                           <option>Waaberi</option>
                           <option>Wada-jir</option>
                          <option>Dharkeyn-leey</option>
                           <option>Hodon</option>
                           <option>Howl-wadaag</option>
                          <option>War-dhiigleey</option>
                           <option>Shibis</option>
                           <option>c/casiis</option>
                          <option>Huriwaa</option>
                           <option>Dayniile</option>
                            <option>Yaaq-shiid</option>
                             <option>Shingaani</option>
                              <option>OTHER........</option>
</select> 
  </div>

 
 <div class="form-group">
    <label>Level : </label>
  <select   style="width:100% ; height:31px;" name="level" id="level" placeholder="Level">
  <option >Kindergartner</option>
  <option >Primary</option>
  <option>Secondary</option>
  
</select>
  </div>
 
<div class="form-group">
    <label for="text">Branch : </label>
  <select  style="width:100% ; height:31px;" name="branch" id="branch"  placeholder="Branch">
  <option>Nawawi</option>
  <option>Ridwaan</option>
  <option>Raxma</option>
  
</select>
</div>
  </div>
  
  
   <div class="col-md-2"> 

    <div class="form-group">
    <label for="text">Gender : </label>&nbsp;
  <select  style="width:100% ; height:31px;" name="gender" id="gender" placeholder="Gender">
  <option style="font-size:15px;font-family:verdana;" >Male</option>
  <option style="font-size:15px;font-family:verdana;" >Female</option>
</select>
  </div> 

   <div class="form-group">
    <label for="text">Guardian relation : </label>
  <select  style="width:100%  ; height:31px;" name="guardianrelation" id="guardianrelation" placeholder="GuardianRelation">
  <option style="font-size:15px;font-family:verdana;" >Mother</option>
  <option style="font-size:15px;font-family:verdana;" >Father</option>
  <option style="font-size:15px;font-family:verdana;" >sister</option>
  <option style="font-size:15px;font-family:verdana;" >Aunt</option>
  <option style="font-size:15px;font-family:verdana;" >brother</option>
  <option style="font-size:15px;font-family:verdana;">grand Father</option>
  <option style="font-size:15px;font-family:verdana;" >grand Mother</option>
  <option style="font-size:15px;font-family:verdana;">Ancle</option>
  <option style="font-size:15px;font-family:verdana;">relative</option>
  
</select>

   </div>
   
   <div class="form-group">
    <label for="text">Guardian Tell:  </label> &nbsp;
    <input type="text" class="form-control" id="guardiantell"   style="width:100%  ; height:31px;" placeholder="GuardianTell"
    name="guardiantell" onkeypress="return isNumber(event)" >
  </div> 

   <div class="form-group">
    <label for="text">Date Of Brith :  </label> &nbsp;
    <input type="date" class="form-control" id="dob "   style="width:100% ; height:31px;"name="dob"  placeholder="DateOfBirth">
  </div> 

  <div class="form-group">
    <label for="text">Class name : </label>&nbsp;
  <select style="width:100%  ; height:31px;" name="classname" id="classname" placeholder="Classname">
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
</div>
<div class="form-group">
<label for="text">Registration Date : </label>
<input type="date" class="form-control" id="registrationdate"  style="width:100% ; height:30px;" name="registrationdate" placeholder="RegisterDate" >
</div> 
<label></label>
 <input type="file" onchange="readURL(this);" name="image" style="width:140px ; height:32px;">
<img id="blah" src="#" alt="your image" /><br><br>
</div>
</div>

</form>
</div></div>
</div>
</div>

</div> </div>
  <!-- /.content-wrapper -->

</div>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

<script>function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#blah')
.attr('src', e.target.result)
.width(100)
.height(70);
};
reader.readAsDataURL(input.files[0]);
}
}

</script>