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

if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "
    SELECT * FROM exam 
    WHERE st_id LIKE '%".$search."%'
    OR exam_id LIKE '%".$search."%'
     OR name LIKE '%".$search."%'
     OR term LIKE '%".$search."%'
     OR year LIKE '%".$search."%'
    ";
}
else
{
    $query = "
    SELECT * FROM exam ORDER BY exam_id ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
?>

    <div class="col-sm-12" >
        <div class="table-responsive">
            <table class="table table-striped table-condensed table-hover table-bordered">
                <tr>
                <thead style="background-color:#ac6007; ; color:white ; font-size:12px" >
        <th>EXamID</th>
      <th>SID</th>
      <th style="padding-right:150px" > Name</th>
       <th>Term</th>
        <th>Year</th>
      <th>Islamic</th>
      <th>Arabic</th>
       <th>Somali</th>
      <th>English</th>
      <th>Math</th>
      <th>Science</th>
       <th>Social</th>
      <th>Geography</th>
      <th>History</th>
      <th>Biology</th>
       <th>Chemistry</th>
      <th>Physics</th>
      <th>Discipline</th>
      <th>Total</th>
      <th>Avarege</th>
      <th>Edit </th>
      <th>Delete</th> 
                         </thead> 
                </tr>
                <tbody style="font-size:13px;">

     <?php

   
   while($row = mysqli_fetch_array($result)){?>
<tr>
                <td><?php echo $row['exam_id'] ?></td>
                <td><?php echo $row['st_id'] ?></td>
                    <td><?php echo $row["name"] ?></td>
                     <td><?php echo $row['term'] ?></td>
                    <td><?php echo $row["year"] ?></td>
                    <td><?php echo $row["islamic"] ?></td>
	                 <td><?php echo $row['arabic'] ?></td>
                    <td><?php echo $row["somali"] ?></td>
                    <td><?php echo $row["english"] ?></td>
                     <td><?php echo $row["math"] ?></td>
	                 <td><?php echo $row['science'] ?></td>
                    <td><?php echo $row["social"] ?></td>
                    <td><?php echo $row["geography"] ?></td>
                     <td><?php echo $row["history"] ?></td>
                     <td><?php echo $row["biology"] ?></td>
	                 <td><?php echo $row['chemistry'] ?></td>
                    <td><?php echo $row["physics"] ?></td>
                    <td><?php echo $row["discipline"] ?></td>
                    <td><?php echo $row["total"] ?></td>
                    <td><?php echo $row["average"] ?> %</td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-<?php echo $row['exam_id']; ?>" id=""><i class="fa fa-pencil fa-sm"></i> Edit</button>
                        <div class="modal fade" role="dialog" id="edit-<?php echo $row['exam_id']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                   <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">STUDENT EXAM</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
    <form method="POST" action="update.php" class="form-inline">
    <label> ID : &nbsp;&nbsp;</label>
    <input type="text" name="id" id="#edit-<?php echo $row['st_id']; ?>"style="width:120px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['st_id']; ?>"> 
   
    <input type="hidden" name="exam_id" id="#edit-<?php echo $row['st_id']; ?>"style="width:120px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['exam_id']; ?>"> 
   
    <label> Name: &nbsp;&nbsp;</label>
    <input style="width:327px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="name" id="#edit-<?php echo $row['st_id']; ?>"class="form-control" value="<?php echo $row['name']; ?>"><br><br>
    <div class="form-group">
    <label>Year:</label>&nbsp;
    <select class="form-control"name="year" style="width:120px ; height:29px; font-size:13px;font-family:verdana;">
    <option>2000/2001</option>
    <option>2001/2002</option>
    <option>2002/2003</option>
    <option>2003/2004</option>
    <option>2004/2005</option>
    <option>2005/2006</option>
    <option>2006/2007</option>
    <option>2007/2008</option>
    <option>2008/2009</option>
    <option>2009/2010</option>
    <option>2010/2011</option>
    <option>2011/2012</option>
     <option>2012/2013</option>
    <option>2013/2014</option>
    <option>2014/2015</option>
    <option>2015/2016</option>
    <option>2016/2017</option>
    <option>2017/2018</option>
    <option>2018/2019</option>
    <option>2019/2020</option>
    <option>2020/2021</option>
    <option>2021/2022</option>
    <option>2022/2023</option>
    <option>2023/2024</option>
    </select>
    </div>&nbsp;&nbsp;
    <div class="form-group">
    <label>Term:</label>&nbsp;&nbsp;
    <select class="form-control"style="width:325px ; height:29px; font-size:13px;font-family:verdana;" name="term">
    <option>Term one</option>
    <option>Term two</option>
    </select>
    </div><br><br>
    <label>Islamic:</label>&nbsp;&nbsp;
    <input type="text" class="form-control" id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['islamic']; ?>"  placeholder"Islamic" style="width:110px" name="islamic">&nbsp;
    <label>Arabic:</label>&nbsp;
    <input type="text" class="form-control" id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['arabic']; ?>" placeholder"Arabic" style="width:110px" name="arabic">&nbsp;
    <label>Somali   :</label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" class="form-control" id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['somali']; ?>" placeholder"somali" style="width:115px" name="somali"><br><br>
    <label>English:</label>&nbsp;&nbsp;
    <input type="text" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['english']; ?>" placeholder"English" style="width:110px" name="english">&nbsp;
    <label>Math :</label>&nbsp;&nbsp;
    <input type="text" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['math']; ?>" placeholder"Math" style="width:110px" name="math">&nbsp;
    <label>Science :</label>&nbsp;&nbsp;&nbsp;
    <input type="text" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['science']; ?>"  placeholder"Science"  style="width:115px" name="science"><br><br>
    <label>Social     :</label>&nbsp;&nbsp;&nbsp;
    <input type="text" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['social']; ?>" placeholder"social" style="width:110px" name="social">
    &nbsp;&nbsp;&nbsp;
    <label>Geo :</label>&nbsp;
    <input type="text" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['geography']; ?>" placeholder"Geography"  style="width:110px" name="geography">
    &nbsp;
    <label>History :</label>&nbsp;&nbsp;&nbsp;
    <input type="text" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['history']; ?>" placeholder"History" style="width:115px" name="history"><br><br>
    <label>Biology :</label>&nbsp;
    <input type="text" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['biology']; ?>" placeholder"Biology" style="width:110px" name="biology">
    <label>Chem :</label>&nbsp;&nbsp;
    <input type="text" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['chemistry']; ?>" placeholder"Chemistry" style="width:110px" name="chemistry">
    &nbsp;&nbsp;&nbsp;
    <label>Physics :</label>&nbsp;
    <input type="text" class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['physics']; ?>" placeholder"Physics"  style="width:115px" name="physics"><br><br>
    <label>Displine:</label>&nbsp;
    <input type="text"  class="form-control"id="#edit-<?php echo $row['st_id']; ?>" value="<?php echo $row['discipline']; ?>" style="width:110px" placeholder"displine"  name="discipline">
    
    &nbsp;&nbsp;&nbsp;&nbsp;      
    <button type="submit" style="width:350px; height:29px;"class="btn btn-warning" name="updateexam">Update</button> 
    
    
            </form>
                                  
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               </div>
                           </div> </div> </div> </td>
                           <td>
                         <a onclick ="return confirm('are you sure to delete')" href="update.php?idd=<?php echo $row['exam_id'] ?>"  
                   class="btn btn-danger btn-sm"><i class="fa fa-trash fa-sm"></i> Delete</a>
           </td>
                </tr>
   <?php
    }
  }
 echo "</tbody></table></div></div>";
 ?>

