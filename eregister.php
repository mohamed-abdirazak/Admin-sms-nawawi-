 <?php
$host ="localhost";
$user = "root";
$pswd = "";
$db = "simpledata";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)

function getData()
{


$data =array();
$data[0] =$_POST['id'];
$data[1] =$_POST['name'];
$data[2] =$_POST['branch'];
$data[3] =$_POST['level'];
$data[4] =$_POST['classname'];
$data[5] =$_POST['section'];
$data[6] =$_POST['term'];
$data[7] =$_POST['year'];
$data[8] =$_POST['islamic'];
$data[9] =$_POST['arabic'];
$data[10] =$_POST['somali'];
$data[11] =$_POST['english'];
$data[12] =$_POST['math'];
$data[13] =$_POST['science'];
$data[14] =$_POST['social'];
$data[15] =$_POST['geography'];
$data[16] =$_POST['history'];
$data[17] =$_POST['physics'];
$data[18] =$_POST['biology'];
$data[19] =$_POST['chemistry'];
$data[20] =$_POST['displine'];

return $data;
}
if (isset($_POST['reg'])) {
    $info = getData();
    $sql = "INSERT INTO exam (st_id,name,branch,level,class,section,term,year,islamic,arabic,somali,
    english,math,science,social,geography,history,physics,biology,chemistry,discipline)
    VALUES ('$info[0]', '$info[1]', '$info[2]','$info[3]','$info[4]','$info[5]','$info[6]',
    '$info[7]','$info[8]','$info[9]', '$info[10]', '$info[11]','$info[12]','$info[13]','$info[14]','$info[15]',
    '$info[16]','$info[17]','$info[18]','$info[19]','$info[20]')";
    
      $search_result = mysqli_query($conn,$sql);
   
   if ($search_result) {
     header("location:table_exam.php");

     }
     else {
       echo "not inserted";
     }


}


?>