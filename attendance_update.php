<?php
$conn = new mysqli("localhost", "root", "", "simpledata");

  if (isset($_GET['idd'])) {
    $idd = $_GET['idd'];
    $sql= "DELETE FROM attendance WHERE att_id ='$idd'";
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
        
        $att_id = $_POST['att_id'];
        $studentname = "";
        $date = "";
        $month="";
        $year="";
         
         $att="";

$studentname = $_POST['studentname'];
$month = $_POST['month'];
$date= $_POST['date'];
$year= $_POST['year'];
$att = $_POST['att'];   
       

$sql1 = "UPDATE attendance SET  studentname= '$studentname',date= '$date',month= '$month',year= '$year', att= '$att' WHERE att_id='$att_id'";
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
