
<?php
$host ="localhost";
$user = "root";
$pswd = "";
$db = "simpledata";
$course_id="";
$course_name="";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)

    $query = "
    SELECT * FROM course  ORDER BY course_id ";

$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Course  | Dashboard</title>
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
              .panel > .panel-heading {
    background-image: none;
    background-color: green;
    color: white;

}
.button {background-color: green;
    color:white
}
         </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">

    <div class="col-sm-12" >
        <div class="table-responsive">
            <table class="table table-striped table-condensed table-hover table-bordered">
                <tr>
       <thead style="background-color:green;color:white; font-size:13px;">
        <th  style="padding-right:20%">Course ID</th>
      <th  style="padding-right:40%">Course Name</th>

      <th>Action</th>
     
    </thead> 
  </tr>
   <tbody style="font-size:13px;">
     <?php
   while($row = mysqli_fetch_array($result)){?>
<tr>
                <td><?php echo $row['course_id'] ?></td>
                <td><?php echo $row['course_name'] ?></td>
               
                    <td style="text-align:right">
                        <button type="submit" class="btn button btn-sm" data-toggle="modal" data-target="#edit-<?php echo $row['course_id']; ?>" id=""><i class="fa fa-pencil fa-sm"></i> Edit</button>
                        <div class="modal fade" role="dialog" id="edit-<?php echo $row['course_id']; ?>">
                        <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header"style="font-family:elephent">
<h3 class="modal-title"  style="text-align:left"id="exampleModalLongTitle">Course update</h3>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
    <div class="modal-body">
    <form method="POST" action="course_update.php" class="form-inline">
    
    <label> ID : &nbsp;&nbsp;</label>
    <input type="text" name="course_id" id="#edit-<?php echo $row['course_id']; ?>"style="width:120px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['course_id']; ?>"> 
    <label> Course: &nbsp;&nbsp;</label>
    <input style="width:327px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="course_name" id="#edit-<?php echo $row['course_id']; ?>"class="form-control" value="<?php echo $row['course_name']; ?>"><br><br>
     <button type="submit"  style="width:200px;"class="btn btn-success" name="cupdate">Update</button> 
            </form>
                                  
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               </div>
                           </div> </div> </div> 
                         <a onclick ="return confirm('are you sure to delete')" href="course_update.php?idd=<?php echo $row['course_id'] ?>"  
                   class="btn btn-danger btn-sm"><i class="fa fa-trash fa-sm"></i> Delete</a>
           </td>
                </tr>
   <?php
    }
  }
 echo "</tbody></table></div></div>";
 ?>
</body>
</html>
