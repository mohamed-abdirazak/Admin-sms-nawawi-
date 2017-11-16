<?php
$conn = new mysqli("localhost", "root", "", "simpledata");

  if (isset($_GET['idd'])) {
    $idd = $_GET['idd'];
    $sql= "DELETE FROM attendance WHERE st_id ='$idd'";
     if ($conn->query($sql)===TRUE) {?>
        <script>
        alert("data deleted successfuly");
        window.location.href='attendance_table.php';
        </script>
        <?php}
        else { ?>
            <script>
                alert("failed to delete");
                     </script>
            <?php
            echo "failed to delete";
        }
    }

    if(isset($_POST['update_att'])) {
        $st_id = $_POST['st_id'];
        $studentname = "";
        $date = "";
        $month="";
        $year="";
         $rollno="";
         $att="";

$studentname = $_POST['studentname'];
$month = $_POST['month'];
$date= $_POST['date'];
$year= $_POST['year'];
$rollno = $_POST['rollno'];
$att = $_POST['att'];   
       

$sql1 = "UPDATE attendance SET  studentname= '$studentname',date= '$date',month= '$month',year= '$year',rollno= '$rollno', att= '$att' WHERE st_id = '$st_id'";
      if($conn->query($sql1)===TRUE) {
          header("location:attendance_table.php");
        }
        else {?>
            <script>
            alert("Failed to update");
            </script><?php
        }
    }
?>
