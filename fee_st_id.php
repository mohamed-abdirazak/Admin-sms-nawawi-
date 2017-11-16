<?php

$host ="localhost";
$user = "root";
$pswd = "";
$db = "simpledata";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)
if(isset($_GET["ID"])){
    $st_id = $_GET["ID"];
    $sql = "SELECT studentname from registration where ID = '$st_id'";
    $do = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($do);
    if($count > 0) {
        while($row = mysqli_fetch_array($do)) {
            echo $row["studentname"];
        }
    }
   
}


?>