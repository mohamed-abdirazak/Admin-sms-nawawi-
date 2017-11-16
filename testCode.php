<?php
    $conn = new mysqli("localhost", "root", "", "simpledata");
    if(isset($_GET["branch"])){
        
        $branchSelection = $_GET["branch"];
        $sql = "select ID from registration where branch = '$branchSelection'";
        $do = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($do);
        if($count > 0) {
            while($row = mysqli_fetch_array($do)) {
                echo $row["ID"];
            }
        }
    }
?>