<?php
$conn = new mysqli("localhost", "root", "", "simpledata");
    if(isset($_POST['time_update'])) {
        $time_id = $_POST['time_id'];
        $p_1="";
        $p_2="";
        $p_3="";
        $p_4="";
        $p_5="";
        $p_6="";
$p_1 = $_POST['p_1'];
$p_2 = $_POST['p_2'];
$p_3= $_POST['p_3'];
$p_4= $_POST['p_4'];
$p_5 = $_POST['p_5'];
$p_6 = $_POST['p_6'];

        $sql1 = "UPDATE time_table SET  p_1= '$p_1' ,p_3= '$p_3',p_2= '$p_2',p_4= '$p_4' ,
        p_5= '$p_5'
        ,p_6= '$p_6' WHERE time_id = '$time_id'";
        if($conn->query($sql1)===TRUE) {
          header("location:time_table_class_search.php");
        }
        else {?>
            <script>
            alert("Failed to update");
            </script><?php
        }
    }
?>
