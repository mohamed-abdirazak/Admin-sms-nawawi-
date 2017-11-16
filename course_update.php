<?php
$conn = new mysqli("localhost", "root", "", "simpledata");

  if (isset($_GET['idd'])) {
    $idd = $_GET['idd'];
    $sql= "DELETE FROM course WHERE course_id ='$idd'";
     if ($conn->query($sql)===TRUE) {?>
        <script>
        alert("data deleted successfuly");
        window.location.href='course.php';
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

    if(isset($_POST['cupdate'])) {
        $id = $_POST['course_id'];
        $name = "";
       


$name = $_POST['course_name'];

                      
        $sql = "UPDATE course SET  course_name= '$name'  WHERE course_id = '$id'";
        if($conn->query($sql)===TRUE) {
          header("location:course.php");
        }
        else {?>
            <script>
            alert("Failed to update");
            </script><?php
        }
    }
?>
