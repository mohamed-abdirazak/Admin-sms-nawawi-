<?php
//exams.php
$connect = mysqli_connect("localhost", "root", "", "simpledata");

if(isset($_POST["id"]))
{
 $id = $_POST["id"];
 $studentname = $_POST["studentname"];
 $date = $_POST["date"];
 $month = $_POST["month"];
 $recept_no = $_POST["recept_no"];
 $money_type = $_POST["money_type"];
 $letters = $_POST["letters"];
 $remaining = $_POST["remaining"];
 $amount = $_POST["amount"];
 $query = '';
 for($count = 0; $count<count($id); $count++)
 {
  $id_clean = mysqli_real_escape_string($connect, $id[$count]);
  $studentname_clean = mysqli_real_escape_string($connect, $studentname[$count]);
  $recept_no_clean = mysqli_real_escape_string($connect, $recept_no[$count]);
   $money_type_clean = mysqli_real_escape_string($connect, $money_type[$count]);
  $letters_clean = mysqli_real_escape_string($connect, $letters[$count]);
  $remaining_clean = mysqli_real_escape_string($connect, $remaining[$count]);
  $amount_clean = mysqli_real_escape_string($connect, $amount[$count]);
// var_dump($query);
  if( $id_clean != '' && $studentname_clean != ''
    && $money_type_clean != '' && $letters_clean != '' && $remaining_clean != ''
    && $amount_clean != '')
  {
   $query .= '
   INSERT INTO fee(st_id,studentname,date,month,recept_no,money_type,letters,remaining,amount) 
   VALUES(
  "'.$id_clean.'", 
  "'.$studentname_clean.'", 
  "'.$date.'", 
  "'.$month.'", 
  "'.$recept_no_clean.'", 
  "'.$money_type_clean.'", 
  "'.$letters_clean.'", 
  "'.$remaining_clean.'", 
  "'.$amount_clean.'"); 
   ';
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