<?php
//exams.php
$connect = mysqli_connect("localhost", "root", "", "simpledata");
if(isset($_POST["days_name"]))
{
 $days_name = $_POST["days_name"];
 $branch = $_POST["branch"];
 $classname = $_POST["classname"];
 $section = $_POST["section"];
 $year = $_POST["year"];
 $p_1 = $_POST["p_1"];
 $p_2 = $_POST["p_2"];
 $p_3 = $_POST["p_3"];
 $p_4 = $_POST["p_4"];
 $p_5 = $_POST["p_5"];
 $p_6 = $_POST["p_6"];
 $query = '';
 for($count = 0; $count<count($days_name); $count++)
 {
  $days_name_clean = mysqli_real_escape_string($connect, $days_name[$count]);
  $p_1_clean = mysqli_real_escape_string($connect, $p_1[$count]);
  $p_2_clean = mysqli_real_escape_string($connect, $p_2[$count]);
  $p_3_clean = mysqli_real_escape_string($connect, $p_3[$count]);
  $p_4_clean = mysqli_real_escape_string($connect, $p_4[$count]);
  $p_5_clean = mysqli_real_escape_string($connect, $p_5[$count]);
  $p_6_clean = mysqli_real_escape_string($connect, $p_6[$count]);
// var_dump($query);
  if( $days_name_clean != '' && $p_1_clean !=''  && $p_3_clean !='' )
  {
   $query .= '
   INSERT INTO time_table(days,branch,classname,section,year,p_1,p_2,p_3,p_4,p_5,p_6) 
   VALUES(
  "'.$days_name_clean.'", 
  "'.$branch.'", 
  "'.$classname.'", 
  "'.$section.'", 
  "'.$year.'", 
  "'.$p_1_clean.'", 
  "'.$p_2_clean.'", 
  "'.$p_3_clean.'", 
  "'.$p_4_clean.'",
  "'.$p_5_clean.'",
  "'.$p_6_clean.'"); 
   ';
  }
 }
 
  if(mysqli_multi_query($connect, $query))
  {
   echo 'Item Data Inserted';
  }
  else
  {
   echo 'Error';
  }
 
 
}
?>