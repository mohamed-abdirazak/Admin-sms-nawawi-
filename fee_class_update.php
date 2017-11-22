<?php
$conn = new mysqli("localhost", "root", "", "simpledata");
if (isset($_GET['idd'])) {
    $idd = $_GET['idd'];
    $sql= "DELETE FROM FEE WHERE fee_id ='$idd'";
     if ($conn->query($sql)===TRUE) {?>
        <script>
        alert("data deleted successfuly");
        window.location.href='fee_search_class.php';
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

    if(isset($_POST['Fee_class_update'])) {
        $fee_id = $_POST['fee_id'];
        
        $studentname = "";
        $date = "";
        $month="";
        $money_type="";
         $letters="";
$remaining="";
$amount="";

$studentname = $_POST['studentname'];
$month = $_POST['month'];
$date= $_POST['date'];
$money_type= $_POST['money_type'];
$letters = $_POST['letters'];
$remaining = $_POST['remaining'];
$amount = $_POST['amount'];       
        $sql1 = "UPDATE fee SET  studentname= '$studentname' ,date= '$date',month= '$month',money_type= '$money_type' ,
        letters= '$letters'
        ,remaining= '$remaining',amount= '$amount'WHERE fee_id = '$fee_id'";
        if($conn->query($sql1)===TRUE) {
          header("location:fee_search_class.php");
        }
        else {?>
            <script>
            alert("Failed to update");
            </script><?php
        }
    }
?>
