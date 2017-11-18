<?php
//exams.php
$connect = mysqli_connect("localhost", "root", "", "simpledata");

if(isset($_POST["id"]))
{
 $id = $_POST["id"];
 $studentname = $_POST["studentname"];
 $date = $_POST["date"];
 $month = $_POST["month"];
 $year = $_POST["year"];
 
 $att = $_POST["att"];
 $query = '';
 for($count = 0; $count<count($id); $count++)
 {
  $id_clean = mysqli_real_escape_string($connect, $id[$count]);
  $studentname_clean = mysqli_real_escape_string($connect, $studentname[$count]);
  
   $att_clean = mysqli_real_escape_string($connect, $att[$count]);
// var_dump($query);
  if( $id_clean != '' && $studentname_clean != '')
  {
   $query .= '
   INSERT INTO attendance(st_id,studentname,date,month,year,att) 
   VALUES(
  "'.$id_clean.'", 
  "'.$studentname_clean.'", 
  "'.$date.'", 
  "'.$month.'", 
  "'.$year.'", 
  "'.$att_clean.'");';
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($connect, $query))
  {
   echo 'Item Data Inserted';
  }
  else
  {
   echo 'Error';
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}
?>