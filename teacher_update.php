<?php
$conn = new mysqli("localhost", "root", "", "simpledata");

  if (isset($_GET['idd'])) {
    $idd = $_GET['idd'];
    $sql= "DELETE FROM teacher WHERE t_id ='$idd'";
     if ($conn->query($sql)===TRUE) {?>
        <script>
        alert("data deleted successfuly");
        window.location.href='teacher_table.php';
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

    if(isset($_POST['teacherupdate'])) {
        $t_id = $_POST['t_id'];
        $fullname="";
        $dob="";
        $tellphone="";
        $email="";
        $c_level="";
        $branch="";
       $shift="";
       $course_id="";


$fullname = $_POST['fullname'];
$dob = $_POST['dob'];
$tellphone= $_POST['tellphone'];
$email= $_POST['email'];
$c_level = $_POST['c_level'];
$branch = $_POST['branch'];
$shift = $_POST['shift'];    
$course_id = $_POST['course_id'];   

        $sql1 = "UPDATE teacher SET  fullname= '$fullname' ,tellphone= '$tellphone',dob= '$dob',email= '$email' ,
        c_level= '$c_level'
        ,branch= '$branch',course_id= '$course_id',shift= '$shift' WHERE t_id = '$t_id'";
        if($conn->query($sql1)===TRUE) {
          header("location:teacher_table.php");
        }
        else {?>
            <script>
            alert("Failed to update");
            </script><?php
        }
    }
?>
