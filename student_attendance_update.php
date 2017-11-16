<?php
$conn = new mysqli("localhost", "root", "", "simpledata");

  if (isset($_GET['idd'])) {
    $idd = $_GET['idd'];
    $sql= "DELETE FROM student_attendance WHERE st_id ='$idd'";
     if ($conn->query($sql)===TRUE) {?>
        <script>
        // alert("data deleted successfuly");
        window.location.href='student_attendance_table.php';
        </script>
        <?php}
        else { ?>
            <script>
                // alert("failed to delete");
                     </script>
            <?php
            echo "failed to delete";
        }
    }

    if(isset($_POST['update_attendance'])) {
        $st_id = $_POST['st_id'];
        $studentname = "";
        $day1="";
        $day2="";
        $day3="";
        $day4="";
        $day5="";
        $day6="";
        $day7="";
        $day8="";
        $day9="";
        $day10="";
        $day11="";
        $day12="";
        $day13="";
        $day14="";
        $day15="";
        $day16="";
        $day17="";
        $day18="";
        $day19="";
        $day20 ="";
        $day21="";
        $day22="";
        $day23="";
        $day24="";
        $day25="";
        $day26="";
        $day27="";
        $day28="";
        $day29="";
        $day30="";
        $day31="";
        

$studentname = $_POST['studentname'];
$day1 = $_POST['day1'];
$day2 = $_POST['day2'];
$day3 = $_POST['day3'];
$day3 = $_POST['day3'];
$day4 = $_POST['day4'];
$day5 = $_POST['day5'];
$day6 = $_POST['day6'];
$day7 = $_POST['day7'];
$day8 = $_POST['day8'];
$day9 = $_POST['day9'];
$day10 = $_POST['day10'];
$day11 = $_POST['day11'];
$day12 = $_POST['day12'];
$day13 = $_POST['day13'];
$day14 = $_POST['day14'];
$day15 = $_POST['day15'];
$day16 = $_POST['day16'];
$day17 = $_POST['day17'];
$day18 = $_POST['day18'];
$day19 = $_POST['day19'];
$day20 = $_POST['day20'];
$day21 = $_POST['day21'];
$day22 = $_POST['day22'];
$day23 = $_POST['day23'];
$day24 = $_POST['day24'];
$day26 = $_POST['day26'];
$day27 = $_POST['day27'];
$day28 = $_POST['day28'];
$day29 = $_POST['day29'];
$day30 = $_POST['day30'];
$day31 = $_POST['day31'];   
        $sql1 = "UPDATE student_attendance SET  studentname= '$studentname' ,`1`= '$day1',`2`= '$day2',`3`= '$day3',
        `4`= '$day4',`5`= '$day5',`6`= '$day6',`7`= '$day7',`8`= '$day8',`9`= '$day9',`10`= '$day10',`11`= '$day11',
        `12`= '$day12',`13`= '$day13',`14`= '$day14',`15`= '$day15',`16`= '$day16',`17`= '$day17',`18`= '$day18',
        `19`= '$day19',`20`= '$day20',`21`= '$day21',`22`= '$day22',`23`= '$day23',`24`= '$day24', `25`= '$day25',
        `26`= '$day26',`27`= '$day27',`28`= '$day28',`29`= '$day29',`30`= '$day30',`31`= '$day31' 
        WHERE st_id = '$st_id'";
        
        if($conn->query($sql1)===TRUE) {
          header("location:student_attendance_table.php");
        }
        else {?>
            <script>
            alert("Failed to update");
            </script><?php
        }
    }
?>
