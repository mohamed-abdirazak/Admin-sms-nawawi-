
<?php
$host ="localhost";
$user = "root";
$pswd = "";
$db = "simpledata";
$time_id="";
$days_name="";
$branch="";
$classname="";
$section="";
$year="";
$p_1="";
$p_2="";
$p_3="";
$p_4="";
$p_5="";
$p_6="";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)

    $query = "
    SELECT * FROM time_table ";

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
<th> Days</th>
<th> 1</th>
<th> 2</th>
<th> 3</th>
<th style="font-weight:bold;font-size:15px"> Break</th>
<th> 4</th>
<th> 5</th>
<th> 6</th>
<th> Action</th>
</thead>
  </tr>

   <tbody style="font-size:13px;">
   <tr style="font-weight:bold;font-size:15px; background-color:#153e05;color:white;"> 
       <td>Start and End</td>
       <td>7:30-8:10</td>
       <td>8:10-8:55</td>
       <td>9:00-9:45</td>
       <td>9:45-10:00</td>
       <td>10:20-11:00</td>
       <td>11:05-11:45</td>
       <td>11:50-12:30</td>
       <td>END</td>
       </tr>
     <?php
   while($row = mysqli_fetch_array($result)){?>
      
        <tr>
                <td style="font-weight:bold;font-size:15px"><?php echo $row['days'] ?></td>
                <td><?php echo $row['p_1'] ?></td>
                <td><?php echo $row['p_2'] ?></td>
                <td><?php echo $row['p_3'] ?></td>
                <td style="font-weight:bold;font-size:15px">Break</td>
                <td><?php echo $row['p_4'] ?></td>
                <td><?php echo $row['p_5'] ?></td>
                <td><?php echo $row['p_6'] ?></td>

                <td style="text-align:right">
                        <button type="submit" class="btn button btn-sm" data-toggle="modal" data-target="#edit-<?php echo $row['time_id']; ?>" id=""><i class="fa fa-pencil fa-sm"></i> Edit</button>
                        <div class="modal fade" role="dialog" id="edit-<?php echo $row['time_id']; ?>">
                        <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header"style="font-family:elephent">
<h3 class="modal-title"  style="text-align:left"id="exampleModalLongTitle">Time Table update</h3>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
    <div class="modal-body">
    <form method="POST" action="time_update.php" class="form-inline">
<div class="form-group pull-left">
    <label> Day: &nbsp;&nbsp;</label>
    <input style="width:327px ; height:29px; font-size:13px;font-family:verdana;" type="text" Readonly name="days" id="#edit-<?php echo $row['time_id']; ?>"class="form-control " value="<?php echo $row['days']; ?>">
    </div><br><br>
    <label> 1 : &nbsp;&nbsp;</label>
    <input type="text" name="p_1" id="#edit-<?php echo $row['time_id']; ?>"style="width:120px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['p_1']; ?>"> 
    <label> 2: &nbsp;&nbsp;</label>
    <input style="width:327px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="p_2" id="#edit-<?php echo $row['time_id']; ?>"class="form-control" value="<?php echo $row['p_2']; ?>"><br><br>
    
    <label> 3 : &nbsp;&nbsp;</label>
    <input type="text" name="p_3" id="#edit-<?php echo $row['time_id']; ?>"style="width:120px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['p_3']; ?>"> 
    <label> 4: &nbsp;&nbsp;</label>
    <input style="width:327px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="p_4" id="#edit-<?php echo $row['time_id']; ?>"class="form-control" value="<?php echo $row['p_4']; ?>"><br><br>
  
    <label> 5 : &nbsp;&nbsp;</label>
    <input type="text" name="p_5" id="#edit-<?php echo $row['time_id']; ?>"style="width:120px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['p_5']; ?>"> 
    <label> 6: &nbsp;&nbsp;</label>
    <input style="width:327px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="p_6" id="#edit-<?php echo $row['time_id']; ?>"class="form-control" value="<?php echo $row['p_6']; ?>"><br><br>

     <button type="submit"  style="width:200px;"class="btn btn-success" name="time_update">Update</button> 
            </form>
                                  
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               </div>
                           </div> </div> </div> 
           </td>

                </tr>
   <?php
    }
  }
 echo "</tbody></table></div></div>";
 ?>
</body>
</html>
