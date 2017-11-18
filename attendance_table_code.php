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
$st_id="";
$studentname="";
$date="";
$month="";
$year="";
$att="";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)

if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "
    SELECT * FROM attendance 
    WHERE att_id LIKE '%".$search."%'
       OR  st_id LIKE '%".$search."%' 
       OR studentname LIKE '%".$search."%'
       OR month LIKE '%".$search."%'
     OR att LIKE '%".$search."%'
    ";
}
else
{
    $query = "
    SELECT * FROM attendance  ORDER BY att_id ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
       

   
      .table-responsive table tr:hover {
  background:;
}
/* .table-responsive table tr td:hover {
  background: #e0efed;
} */
      tr:nth-child(even) {background: #f3e766}
      .table-responsive table tr:nth-child(odd) {background:}
      </style>
</head>

<body>

    <div class="col-sm-12" >
        <div class="table-responsive">
            <table class="table table-striped table-condensed table-hover table-bordered">
                <tr>
       <thead style="background-color:#671609;color:white; font-size:13px;">
      <th>St_ID</th>
      
      <th style="padding-right:120px" >StudentName</th>
       <th style="padding-right:7%">Date</th>
       <th style="padding-right:7%">Year</th>
       <th>month</th>
        <th>Attendance</th>
      <th>Edit</th>
      <th>Delete</th>
   
                         </thead> 
                </tr>
                <tbody style="font-size:13px;">

     <?php

   
   while($row = mysqli_fetch_array($result)){?>
<tr>
               
                <td><?php echo $row['st_id'] ?></td>
                
                    <td><?php echo $row["studentname"] ?></td>
                    <td><?php echo $row['date'] ?></td>
                     <td><?php echo $row['year'] ?></td>
                    <td><?php echo $row["month"] ?></td>
                    <td><?php echo $row["att"] ?></td>
	                
                    <td>
                        <button type="submit" class="btn btn-sm"  style="background-color:#671609;color:white"data-toggle="modal" data-target="#edit-<?php echo $row['st_id']; ?>" id=""><i class="fa fa-pencil fa-sm"></i> Edit</button>
                        <div class="modal fade" role="dialog" id="edit-<?php echo $row['st_id']; ?>">
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
                           </div> </div> </div> </td>
                           <td>
                         <a onclick ="return confirm('are you sure to delete')" href="attendance_update.php?idd=<?php echo $row['st_id'] ?>"  
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

