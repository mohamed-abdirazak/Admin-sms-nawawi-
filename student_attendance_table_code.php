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
$day1="";
$day2="";
$day3="";
$day4="";
$day5="";
$day6="";
$day7="";
$day8="";
$day9="";
$day10="";
$day11="";
$day12="";
$day13="";
$day14="";
$day15="";
$day16="";
$day17="";
$day18="";
$day19="";
$day20 ="";
$day21="";
$day22="";
$day23="";
$day24="";
$day25="";
$day26="";
$day27="";
$day28="";
$day29="";
$day30="";
$day31="";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)

if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "
    SELECT * FROM student_attendance 
    WHERE st_id LIKE '%".$search."%'
    OR studentname LIKE '%".$search."%'
    ";
}
else
{
    $query = "
    SELECT * FROM student_attendance  ORDER BY st_id ";
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
       <thead style="background-color:#FE8314;color:white; font-size:13px;">
       
      <th>St_ID</th>
      <th style="padding-right:120px" >StudentName</th>
       <th>1</th>
       <th>2</th>
       <th>3</th>
       <th>4</th>
       <th>5</th>
       <th>6</th>
       <th>7</th>
       <th>8</th>
       <th>9</th>
       <th>10</th>
       <th>11</th>
       <th>12</th>
       <th>13</th>
       <th>14</th>
       <th>15</th>
       <th>16</th>
       <th>17</th>
       <th>18</th>
       <th>19</th>
       <th>20</th>
       <th>21</th>
       <th>22</th>
       <th>23</th>
       <th>24</th>
       <th>25</th>
       <th>26</th>
       <th>27</th>
       <th>28</th>
       <th>29</th>
       <th>30</th>
       <th>31</th>
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
                    <td><?php echo $row['1'] ?></td>
                     <td><?php echo $row['2'] ?></td>
                    <td><?php echo $row["3"] ?></td>
                    <td><?php echo $row["4"] ?></td>
	                 <td><?php echo $row['5'] ?></td>
                    <td> <?php echo $row["6"] ?></td>
                    <td> <?php echo $row["7"] ?></td>
                    <td><?php echo $row['8'] ?></td>
                    <td><?php echo $row["9"] ?></td>
                    <td><?php echo $row['10'] ?></td>
                     <td><?php echo $row['11'] ?></td>
                    <td><?php echo $row["12"] ?></td>
                    <td><?php echo $row["13"] ?></td>
	                 <td><?php echo $row['14'] ?></td>
                    <td> <?php echo $row["15"] ?></td>
                    <td> <?php echo $row["16"] ?></td>
                    <td><?php echo $row['17'] ?></td>
                    <td><?php echo $row["18"] ?></td>
                    <td><?php echo $row['19'] ?></td>
                     <td><?php echo $row['20'] ?></td>
                    <td><?php echo $row["21"] ?></td>
                    <td><?php echo $row["22"] ?></td>
	                 <td><?php echo $row['23'] ?></td>
                    <td> <?php echo $row["24"] ?></td>
                    <td> <?php echo $row["25"] ?></td>
                    <td><?php echo $row['26'] ?></td>
                     <td><?php echo $row['27'] ?></td>
                    <td><?php echo $row["28"] ?></td>
                    <td><?php echo $row["29"] ?></td>
	                 <td><?php echo $row['30'] ?></td>
                    <td> <?php echo $row["31"] ?></td>
                    <td>
                        <button type="submit" style="background-color:#FE8314;color:white;" class="btn btn-sm" data-toggle="modal" data-target="#edit-<?php echo $row['st_id']; ?>" id=""><i class="fa fa-pencil fa-sm"></i> Edit</button>
                        <div class="modal fade" role="dialog" id="edit-<?php echo $row['st_id']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                   <div class="modal-header"style="font-family:elephent">
        <h4 class="modal-title" id="exampleModalLongTitle">Student fee update</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
    <form method="POST" action="student_attendance_update.php" class="form-inline">
    <label> ID : &nbsp;&nbsp;</label>
    <input type="text" name="st_id" id="#edit-<?php echo $row['st_id']; ?>"style="width:120px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['st_id']; ?>"> 
    <label> Name: &nbsp;&nbsp;</label>
    <input style="width:327px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="studentname" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['studentname']; ?>"><br><br>
                                       
    <div class="form-group">
    <label>1: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day1" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['1']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 2: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day2" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['2']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 3: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day3" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['3']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label>4: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day4" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['4']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 5: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day5" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['5']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 6: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day6" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['6']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label>7: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day7" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['7']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 8: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day8" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['8']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 9: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day9" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['9']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 10: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day10" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['10']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 11: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day11" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['11']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 12: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day12" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['12']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 13: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day13" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['13']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 14: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day14" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['14']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 15: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day15" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['15']; ?>"><br><br>
   </div><br>
   <div class="form-group">
    <label> 16: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day16" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['16']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 17: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day17" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['17']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 18: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day18" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['18']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 19: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day19" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['19']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 20: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day20" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['20']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 21: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day21" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['21']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 22: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day22" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['22']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 23: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day23" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['23']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 24: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day24" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['24']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 25: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day25" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['25']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 26: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day26" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['26']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 27: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day27" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['27']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 28: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day28" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['28']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 29: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day29" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['29']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 30: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day30" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['30']; ?>"><br><br>
   </div>
   <div class="form-group">
    <label> 31: &nbsp;&nbsp;</label>
    <input style="width:35px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="day31" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['31']; ?>"><br><br>
   </div>
   <br><br>
   
   <button type="submit" style="background-color:#FE8314;color:white;" class="btn"  name="update_attendance">Update</button> 
    
    
            </form>
                                  
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               </div>
                           </div> </div> </div> </td>
                           <td>
                         <a href="student_attendance_update.php?idd=<?php echo $row['st_id'] ?>"  
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

