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
$gender="";
$mothername="";
$guardianname="";
$guardiantell="";
$guardianoccupation="";
$pob="";
$address="";
$dob="";
$phone="";
$level="";
$classname="";
$section="";
$branch="";
$nationality="";
$registrationdate="";
$image="";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)
//$id = $_GET['ID'];
$sql = "SELECT *FROM registration";
 $search_result =mysqli_query($conn,$sql);
 if (mysqli_num_rows($search_result) > 0)
 {
while ($rows=mysqli_fetch_array($search_result)) {
$id=$rows['ID'];
$studentname=$rows['studentname'];
$gender=$rows['gender'];
$mothername=$rows['mothername'];
$guardianname=$rows['guardianname'];
$guardianname=$rows['guardianrelation'];
$guardiantell=$rows['guardiantell'];
$guardianoccupation=$rows['guardianoccupation'];
$pob=$rows['pob'];
$address=$rows['address'];
$dob=$rows['dob'];
$phone=$rows['phone'];
$level=$rows['level'];
$classname=$rows['classname'];
$section=$rows['section'];
$branch=$rows['branch'];
$nationality=$rows['nationality'];
$registrationdate=$rows['registrationdate'];
$image=$rows['image'];

}
 }
 
 $sql = "SELECT * FROM registration  WHERE ID= '$id' ORDER BY ID ASC" ;
if ($conn->query($sql) === TRUE) {
    echo"Record edit successfully";
    
} 

 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>EDIT</title>
     <meta charset="utf-8"> 
            <script src="jquery-3.2.1.js"></script>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="bootstrap.min.css">
           <script src="bootstrap.min.js"> </script>
           <link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
           
           <style>
                @font-face { font-family: "Glyphicons Halflings"; 
              src: url(fonts/glyphicons-halflings-regular.ttf); } 
              </style>
  </head>
  <body>

<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Nawaawi Secondary School</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        
        <?php
        if($_SESSION['type']=='Administrator'){
        ?>
       
        <?php
        }else{
        ?>
      
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"data-hover="dropdown" role="button" aria-haspopup="true" 
          aria-expanded="false">Student info <span class="caret"></span></a>
          <ul class="dropdown-menu">
       <li><a href="register.php">New Student (Registration)</a></li>
            <li><a href="searchbyid.php">Student info (By ID)</a></li>
            <li><a href="searchclass.php">Student (By Class)</a></li>
            <li><a href="modify.php">Student Modify</a></li>
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false">Teacher info <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false"> Examination <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false">Payment<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <?php
        }
        ?>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username'] ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <span class="glyphicon glyphicon-cog"></span>  Manage<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
                 
          
<div class="container">

<div class="panel panel-primary" >
  <div class="panel-heading">Student Registration</div>

  
  <div class="row" style=" margin:15px 0 0 0 ">
  <div class="col-md-4"> 

  <form method="POST" >
  <div class="form-group">
    <label for="text">ID:</label>&nbsp;&nbsp;&nbsp;
    <input type="text" class="form-control"  id="<?php echo $row['ID']; ?> " name="id" value="<?php echo $id; ?>"> 
  </div> 
  
 <div class="form-group">
    <label for="text"> Mother name :  </label>
    <input type="text" class="form-control" name="mothername" size="35px" value="<?php echo $mothername;?>">
  </div>
 
  <div class="form-group">
    <label>Guardian name:  </label>
    <input type="text" class="form-control"  name="guardianname" size="50px" value= "<?php echo  $guardianname;?>">
  </div>
<div class="form-group">
    <label for="text">Address :  </label> &nbsp;&nbsp;
    <input type="text" class="form-control" id="Address" name="address" value="<?php echo $address; ?>" >
  </div> 

  
   <div class="form-group">
    <label for="text">Phone NO:  </label> &nbsp;&nbsp;
    <input type="text" class="form-control" id="phone" name="phone"value="<?php echo $phone; ?>" >
  </div>
 <div class="form-group">&nbsp;&nbsp;
    <label for="text">Section : </label>&nbsp;&nbsp;
  <select style="width:350px ; height:34px;" name="section" id="section"value="<?php echo $section; ?>">
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
  <button type="submit" name="register" class="btn btn-primary " style="width:935px ; height:35px;"  >REGISTER</button>
</div>



    <div class="col-md-6"> 
  <div class="form-group">
    <label>Student name: </label>
    <input type="text" class="form-control" id="studentname" name="studentname" size="50px"value="<?php echo $studentname; ?>">
  </div> 
  <div class="form-group">
    <label>Nationality :  </label> &nbsp;&nbsp;
    <input type="text" class="form-control" id="nationality " name="nationality"value="<?php echo $nationality; ?>">
  </div>
 
 
  
<div class="form-group">
    <label for="text">Guardian occupation:  </label> &nbsp;
    <input type="text" class="form-control" id="occupation" name="guardianoccupation" size="15px"value="<?php echo $guardianoccupation; ?>">
  </div> 

  <div class="form-group">
    <label for="text">Place Of Brith:  </label> &nbsp;
    <input type="text" class="form-control" id="POB" name="pob"size="15px" value="<?php echo $pob; ?>">
  </div>

 
 <div class="form-group">&nbsp;&nbsp;
    <label>Level : </label>&nbsp;&nbsp;
  <select   style="width:550px ; height:35px;" name="level" id="level"value="<?php echo $level; ?>">
  <option >Necessary</option>
  <option >Primary</option>
  <option>Secondary</option>
  
</select>
  </div>
 
<div class="form-group">&nbsp;&nbsp;
    <label for="text">Branch : </label>&nbsp;&nbsp;
  <select  style="width:550px ; height:36px;" name="branch" id="branch"value="<?php echo $branch; ?>">
  <option>Nawawi</option>
  <option>Ridwaan</option>
  <option>Raxmana</option>
  
</select>
</div>
  </div>
  
  
   <div class="col-md-2"> 

    <div class="form-group">
    <label for="text">Gender : </label>&nbsp;&nbsp;
  <select style="width:150px ; height:34px;" name="gender" id="gender"value="<?php echo $gender; ?>">
  <option style="font-size:15px;font-family:verdana;" >Male</option>
  <option style="font-size:15px;font-family:verdana;" >Female</option>
</select>
  </div> 

   <div class="form-group">
    <label for="text">Guardian relation : </label>&nbsp;&nbsp;
  <select style="width:150px ; height:34px;" name="guardianrelation" id="guardianrelation"value="<?php echo $guardianrelation; ?>">
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
    <input type="text" class="form-control" id="guardiantell" name="guardiantell" size="15px"value="<?php echo $guardiantell; ?>">
  </div> 

   <div class="form-group">
    <label for="text">Date Of Brith :  </label> &nbsp;&nbsp;
    <input type="date" class="form-control" id="dob " name="dob"value="<?php echo $dob; ?>" >
  </div> 

  <div class="form-group">
    <label for="text">Class name : </label>&nbsp;&nbsp;
  <select style="width:150px ; height:34px;" name="classname" id="classname"value="<?php echo $classname; ?>">
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
    <label for="text">Registration Date :  </label> &nbsp;&nbsp;
    <input type="date" class="form-control" id="registrationdate" name="registrationdate" value="<?php echo $registrationdate; ?>">
  </div>
   <label class="btn btn-success btn-file">
    Browse... <input type="file" style="display: none;" onchange="readURL(this);" name="image"value="<?php echo $image; ?>">
     <img id="blah" src="#" alt="your image" /></label><br><br>
     <BR>
 
    </div> 
   </div>

</form>
  </div>
  </div>
  </div>
</div>


  <script>$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});</script> 
  </body>
 
</html>