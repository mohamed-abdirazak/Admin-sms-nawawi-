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
$t_id="";
$fullname="";
$dob="";
$tellphone="";
$email="";
$c_level="";
$branch="";
$course_id="";
$shift="";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)

if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "
    SELECT * FROM teacher 
    WHERE t_id LIKE '%".$search."%'
    OR fullname LIKE '%".$search."%'
     OR tellphone LIKE '%".$search."%'
     OR branch LIKE '%".$search."%'
     OR shift LIKE '%".$search."%'
     OR c_level LIKE '%".$search."%'
    ";
}
else
{
    $query = "
    SELECT * FROM teacher  ORDER BY t_id ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
?>

    <div class="col-sm-12" >
        <div class="table-responsive">
            <table class="table table-striped table-condensed table-hover table-bordered">
                <tr>
       <thead style="background-color:#4b9609;color:white; font-size:13px;">
        <th>Teacher_ID</th>
      <th>Course_ID</th>
      <th style="padding-right:100px" >Fullname</th>
       <th style="padding-right:7%">DOB</th>
        <th>Tellphone</th>
      <th  style="padding-right:9%">E-mail</th>
      <th style="padding-right:2%" >Certificate</th>
       <th>Branch</th>
      <th>Shift</th>
      <th>Edit</th>
      <th>Delete</th>
    </thead> 
  </tr>
   <tbody style="font-size:13px;">
     <?php
   while($row = mysqli_fetch_array($result)){?>
<tr>
                <td><?php echo $row['t_id'] ?></td>
                <td><?php echo $row['course_id'] ?></td>
                    <td><?php echo $row["fullname"] ?></td>
                     <td><?php echo $row['dob'] ?></td>
                    <td><?php echo $row["tellphone"] ?></td>
                    <td><?php echo $row["email"] ?></td>
	                 <td><?php echo $row['c_level'] ?></td>
                    <td><?php echo $row["branch"] ?></td>
                    <td><?php echo $row["shift"] ?></td>
                    <td>
                        <button type="submit" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit-<?php echo $row['t_id']; ?>" id=""><i class="fa fa-pencil fa-sm"></i> Edit</button>
                        <div class="modal fade" role="dialog" id="edit-<?php echo $row['t_id']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                   <div class="modal-header"style="font-family:elephent">
        <h4 class="modal-title" id="exampleModalLongTitle">Teacher update</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
    <form method="POST" action="teacher_update.php" class="form-inline">
    <label> ID : &nbsp;&nbsp;</label>
    <input type="text" name="t_id" id="#edit-<?php echo $row['t_id']; ?>"style="width:120px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['t_id']; ?>"> 
    <label> Fullname: &nbsp;&nbsp;</label>
    <input style="width:327px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="fullname" id="#edit-<?php echo $row['t_id']; ?>"class="form-control" value="<?php echo $row['fullname']; ?>"><br><br>
                                       
    <div class="form-group">
    <label> Date : &nbsp;&nbsp;</label>
    <input type="date" name="dob" id="#edit-<?php echo $row['t_id']; ?>"style="width:160px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['dob']; ?>"> 
    </div>&nbsp;&nbsp;
    <div class="form-group">
    <label>E-mail :</label>
    <input type="text" class="form-control" id="#edit-<?php echo $row['t_id']; ?>" value="<?php echo $row['email']; ?>" style="width:200px;" name="email"id="email">
    </div><br><br>

    <div class="form-group">
    <label>Certivicate level:</label>&nbsp;
    <select class="form-control"name="c_level" style="width:170px ; height:29px; font-size:13px;font-family:verdana;" id="#edit-<?php echo $row['t_id']; ?>" >
    <option><?php echo $row['c_level'];?></option>
         <option>Diploma</option>
          <option>Bachular</option>
          <option>Master</option>
          <option>PHD</option>
    </select>
    </div>
      <label>Tellphone:</label>&nbsp;&nbsp;
    <input type="number" class="form-control"id="#edit-<?php echo $row['t_id']; ?>" value="<?php echo $row['tellphone']; ?>" style="width:200px" name="tellphone">&nbsp;<br><br>
    <div class="form-group">
    <label>Branch:</label>&nbsp;
    <select class="form-control"name="branch" style="width:200px ; height:29px; font-size:13px;font-family:verdana;" id="#edit-<?php echo $row['t_id']; ?>" >
    <option><?php echo $row['branch'];?></option>
          <option>Nawawi</option>
          <option>Raxma</option>
          <option>Ridwaan</option>
          </select>
    </div>
   

    <div class="form-group">
    <label>Shift :</label>&nbsp;
    <select class="form-control"name="shift" style="width:200px ; height:29px; font-size:13px;font-family:verdana;" id="#edit-<?php echo $row['t_id']; ?>" >
    <option><?php echo $row['shift'];?></option>
         <option>Morning</option>
          <option>Afternoon</option>
          <option>Both...</option>
    </select>
    </div><br><br>
    <button type="submit"  style="width:200px;"class="btn btn-success" name="teacherupdate">Update</button> 
    
    
            </form>
                                  
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               </div>
                           </div> </div> </div> </td>
                           <td>
                         <a onclick ="return confirm('are you sure to delete')" href="teacher_update.php?idd=<?php echo $row['t_id'] ?>"  
                   class="btn btn-danger btn-sm"><i class="fa fa-trash fa-sm"></i> Delete</a>
           </td>
                </tr>
   <?php
    }
  }
 echo "</tbody></table></div></div>";
 ?>

