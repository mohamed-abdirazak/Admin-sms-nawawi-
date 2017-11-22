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
$money_type="";
$letters="";
$remaining="";
$amount="";
$recept_no="";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)

if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "
    SELECT * FROM fee 
    WHERE st_id LIKE '%".$search."%'
    OR fee_id LIKE '%".$search."%'
     OR studentname LIKE '%".$search."%'
     OR month LIKE '%".$search."%'
    ";
}
else
{
    $query = "
    SELECT * FROM fee  ORDER BY fee_id ";
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
  background: #e0efed;
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
       <thead style="background-color:#4b9609;color:white; font-size:13px;">
        
      <th>St_ID</th>
      <th style="padding-right:120px" >StudentName</th>
       <th style="padding-right:7%">date</th>
       <th style="padding-right:7%">ReceptNO</th>
      <th>month</th>
      <th>MoneyType</th>
      <th style="padding-right:9%" >Letters</th>
       <th>Remaining</th>
      <th>Amount</th>
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
                     <td><?php echo $row['recept_no'] ?></td>
                    <td><?php echo $row["month"] ?></td>
                    <td><?php echo $row["money_type"] ?></td>
	                 <td><?php echo $row['letters'] ?></td>
                    <td>$ <?php echo $row["remaining"] ?></td>
                    <td>$ <?php echo $row["amount"] ?></td>
                    <td>
                        <button type="submit" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit-<?php echo $row['fee_id']; ?>" id=""><i class="fa fa-pencil fa-sm"></i> Edit</button>
                        <div class="modal fade" role="dialog" id="edit-<?php echo $row['fee_id']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                   <div class="modal-header"style="font-family:elephent">
        <h4 class="modal-title" id="exampleModalLongTitle">Student fee update</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
    <form method="POST" action="fee_update.php" class="form-inline">
    
    <input type="hidden" name="fee_id" id="#edit-<?php echo $row['st_id']; ?>"style="width:120px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['fee_id']; ?>"> 
    <label> ID : &nbsp;&nbsp;</label>
    <input type="text" name="st_id" id="#edit-<?php echo $row['st_id']; ?>"style="width:120px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['st_id']; ?>"> 
   
    <label> Name: &nbsp;&nbsp;</label>
    <input style="width:327px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="studentname" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['studentname']; ?>"><br><br>
                                       
    <div class="form-group">
    <label>Month:</label>&nbsp;
    <select class="form-control"name="month" style="width:200px ; height:29px; font-size:13px;font-family:verdana;" id="#edit-<?php echo $row['fee_id']; ?>" >
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
    <label>Recept NO:</label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="number" class="form-control" id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['recept_no']; ?>" style="width:180px" name="recept_no">
  <label>Money type   :</label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" class="form-control" id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['money_type']; ?>" style="width:200px" name="money_type"><br><br>
    <label>Letters:</label>&nbsp;&nbsp;
    <input type="text" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['letters']; ?>" style="width:200px" name="letters">&nbsp;
    <label>Remaining :</label>&nbsp;&nbsp;
    <input type="number" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['remaining']; ?>"  style="width:200px" name="remaining">&nbsp;
    <br><br> <label>Amount :</label>&nbsp;&nbsp;&nbsp;
    <input type="number" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['amount']; ?>"  style="width:200px" name="amount"><br><br>     
    <button type="submit" style=""class="btn btn-success" name="updatefee">Update</button> 
    
    
            </form>
                                  
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               </div>
                           </div> </div> </div> </td>
                           <td>
                         <a onclick ="return confirm('are you sure to delete')" href="fee_update.php?idd=<?php echo $row['fee_id'] ?>"  
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

