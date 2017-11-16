<?php
//exams.php
$connect = mysqli_connect("localhost", "root", "", "simpledata");
$total= 0;
$average= 0;

if(isset($_POST["id"]))

{
 $id = $_POST["id"];
 $studentname = $_POST["studentname"];
 $term = $_POST["term"];
 $year = $_POST["year"];
 $islamic = $_POST["islamic"];
 $arabic = $_POST["arabic"];
 $somali = $_POST["somali"];
 $english = $_POST["english"];
 $math = $_POST["math"];
 $science = $_POST["science"];
 $social = $_POST["social"];
 $geography = $_POST["geography"];
 $history = $_POST["history"];
 $physics = $_POST["physics"];
 $biology = $_POST["biology"];
 $chemistry = $_POST["chemistry"];
 $discipline = $_POST["discipline"];

 $query = '';
 
 for($count = 0; $count<count($id); $count++)
 {
   $id_clean = mysqli_real_escape_string($connect, $id[$count]);
    $studentname_clean = mysqli_real_escape_string($connect, $studentname[$count]);
   $islamic_clean = mysqli_real_escape_string($connect, $islamic[$count]);
  $arabic_clean = mysqli_real_escape_string($connect, $arabic[$count]);
  $somali_clean = mysqli_real_escape_string($connect, $somali[$count]);
  $english_clean = mysqli_real_escape_string($connect, $english[$count]);
  $math_clean = mysqli_real_escape_string($connect, $math[$count]);
  $science_clean = mysqli_real_escape_string($connect, $science[$count]);
  $social_clean = mysqli_real_escape_string($connect, $social[$count]);
  $geography_clean = mysqli_real_escape_string($connect, $geography[$count]);
  $history_clean = mysqli_real_escape_string($connect, $history[$count]);
  $physics_clean = mysqli_real_escape_string($connect, $physics[$count]);
  $biology_clean = mysqli_real_escape_string($connect, $biology[$count]);
  $chemistry_clean = mysqli_real_escape_string($connect, $chemistry[$count]);
  $discipline_clean = mysqli_real_escape_string($connect, $discipline[$count]);
  $total=$islamic_clean+$arabic_clean+$somali_clean+$english_clean+$math_clean+$science_clean
  +$social_clean+$geography_clean+$history_clean+$physics_clean+$biology_clean+$chemistry_clean+$discipline_clean;
  $average= $total/13;
// var_dump($query);
  if( $id_clean != '' && $studentname_clean != ''
    && $islamic_clean != '' )
  {
   $query .= '
   INSERT INTO exam(st_id,name,term,year,islamic,arabic,somali,english,math,science,social,geography,history,physics,biology,
   chemistry,discipline,total,average) 
   VALUES(
  "'.$id_clean.'", 
  "'.$studentname_clean.'", 
  "'.$term.'", 
  "'.$year.'", 
  "'.$islamic_clean.'", 
  "'.$arabic_clean.'", 
  "'.$somali_clean.'", 
  "'.$english_clean.'",
  "'.$math_clean.'",
  "'.$science_clean.'",
  "'.$social_clean.'", 
  "'.$geography_clean.'",
  "'.$history_clean.'", 
  "'.$physics_clean.'", 
  "'.$biology_clean.'",  
  "'.$chemistry_clean.'",
  "'.$discipline_clean.'",
  "'.$total.'",
  "'.$average.'");
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