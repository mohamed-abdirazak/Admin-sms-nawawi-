<?php
$conn = new mysqli("localhost", "root", "", "simpledata");

  if (isset($_GET['idd'])) {
    $idd = $_GET['idd'];
    $sql= "DELETE FROM exam WHERE st_id ='$idd'";
     if ($conn->query($sql)===TRUE) {?>
        <script>
        alert("data deleted successfuly");
        window.location.href='table_exam.php';
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

    if(isset($_POST['updateexam'])) {
        $id = $_POST['id'];
        $name = "";
        $branch = "";
        $level="";
        $classname="";
         $section="";
$term="";
$year="";
$islamic="";
$arabic="";
$somali="";
$english="";
$math="";
$science="";
$social="";
$geography="";
$history="";
$physics="";
$biology="";
$chemistry="";
$discipline="";
$total=0;
$average=0;

$name = $_POST['name'];
$islamic = $_POST['islamic'];
$arabic= $_POST['arabic'];
$somali= $_POST['somali'];
$english = $_POST['english'];
$math = $_POST['math'];
$science = $_POST['science'];
$social = $_POST['social'];
$geography = $_POST['geography'];
$history = $_POST['history'];
$physics = $_POST['physics'];
$biology = $_POST['biology'];
$chemistry = $_POST['chemistry'];
$discipline = $_POST['discipline'];  
$total=$islamic+$arabic+$somali+$english+$math+$science+$social+$geography+$history+$physics+$biology+$chemistry+$discipline;
$average= $total/13;                     
        $sql = "UPDATE exam SET  name= '$name' ,islamic= '$islamic',arabic= '$arabic',somali= '$somali' ,english= '$english'
        ,math= '$math',science= '$science',social= '$social',geography= '$geography' ,history= '$history' ,physics= '$physics'
        ,biology= '$biology',chemistry= '$chemistry' ,discipline= '$discipline', total='$total', average='$average' WHERE st_id = '$id'";
        if($conn->query($sql)===TRUE) {
          header("location:table_exam.php");
        }
        else {?>
            <script>
            alert("Failed to update");
            </script><?php
        }
    }
?>
