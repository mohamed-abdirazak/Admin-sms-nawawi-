<?php
$conn = new mysqli("localhost", "root", "", "simpledata");
$image="";

if(isset($_GET['idDelete'])){
        $idDelete = $_GET['idDelete'];
        $sql = "DELETE FROM registration WHERE ID='$idDelete'";
        if($conn->query($sql)===TRUE) {?>
          <script>
          alert("success to delete");
          window.location.href='modifyy.php';
      </script>
        }
        else { ?>
            <script>
                alert("failed to delete");
                window.location.href='modifyy.php';
            </script>
            <?php
            echo "failed to delete";
        }
    }

    if(isset($_POST['update_customer'])) {
      $target = "pictures/".basename($_FILES['image']['name']);
      $image = $_FILES['image']['name'];
    
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      //  unlink('/'.$_POST['old_image']);
        $msg = "Image uploaded successfully";
      }
        $updateID = $_POST['cusId'];
        $gender = "";
        $studentname = "";
        $mothername="";
        $guardianname="";
         $guardianrelation="";
$guardiantell="";
$guardianoccupation="";
$pob="";
$address="";
$dob="";
$phone="";
$level="";
$classname="";
$section="";
$branch="";
$nationality="";
$registrationdate="";
$image="";



        $studentname = $_POST['studentname'];
        $gender = $_POST['gender'];
         $mothername = $_POST['mothername'];
           $guardianname = $_POST['guardianname'];
             $guardianrelation = $_POST['guardianrelation'];
               $guardiantell = $_POST['guardiantell'];
                 $guardianoccupation = $_POST['guardianoccupation'];
                   $pob = $_POST['pob'];
                     $address = $_POST['address'];
                       $dob = $_POST['dob'];
                         $phone = $_POST['phone'];
                           $level = $_POST['level'];
                             $classname = $_POST['classname'];
                               $section = $_POST['section'];
                                 $branch = $_POST['branch'];
                                   $nationality = $_POST['nationality'];
                                     $registrationdate = $_POST['registrationdate'];
                                      
        $sql = "UPDATE registration SET 
         studentname= '$studentname'
        ,gender= '$gender'
        ,mothername= '$mothername',
        guardianname= '$guardianname'
        ,guardianrelation= '$guardianrelation'
        ,guardiantell= '$guardiantell'
        ,guardianoccupation= '$guardianoccupation'
        ,pob= '$pob'
        ,address= '$address'
        ,dob= '$dob'
        ,phone= '$phone'
        ,level= '$level'
        ,classname= '$classname'
        ,section= '$section'
        ,branch= '$branch'
        ,nationality= '$nationality'
        ,registrationdate= '$registrationdate'
        ,image= '$target '
        WHERE ID = '$updateID'";
        if($conn->query($sql)===TRUE) {?>
            <script>
                alert("success to update");
                window.location.href='modifyy.php';
            </script><?php}
        else {?>
            <script>
            alert("Failed to update");
            </script><?php
        }
      }   
      
      
    
?>
