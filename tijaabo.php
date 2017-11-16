<?php  
if(isset($_POST['sub']))  
{  
$host="localhost";//host name  
$username="root"; //database username  
$word="";//database word  
$db_name="simpledata";//database name  
$tbl_name="tijaabo"; //table name  
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
$checkbox1=$_POST['techno']; 
// $checkbox2=$_POST['techno2']; 
// $checkbox3=$_POST['techno3']; 
// $checkbox4=$_POST['techno4'];  
$chk="";  
for($j = 0; $j<$checkbox1; $j++)
{
    $chk = $_POST["checkbox1"][$j];
    $in_ch=mysqli_query($con,"INSERT INTO tijaabo(name,nametwo,namethree,namefour) VALUES ('$chk','$chk','$chk','$chk')");  
    if($in_ch==1)  
    {  
        echo'<script>alert("Inserted Successfully")</script>';  
     }  
  else  
     {  
        echo'<script>alert("Failed To Insert")</script>';  
     } 

}
   

  
}  
?> 
<html>  
<body>  
   <form action="" method="post" enctype="multipart/form-data">  
   <div style="width:200px;border-radius:6px;margin:0px auto">  
<table border="1">  
   <tr>  
      <td colspan="2">Select Technolgy:</td>  
   </tr>  
   <tr>  
      <td>PHP</td>  
      <td><input type="checkbox" name="techno[]" value="PHP"></td>  
   </tr>  
   <tr>  
      <td>.Net</td>  
      <td><input type="checkbox" name="techno[]" value=".Net"></td>  
   </tr>  
   <tr>  
      <td>Java</td>  
      <td><input type="checkbox" name="techno[]" value="Java"></td>  
   </tr>  
   <tr>  
      <td>Javascript</td>  
      <td><input type="checkbox" name="techno[]" value="javascript"></td>  
   </tr>  
   <tr>  
      <td colspan="2" align="center"><input type="submit" value="submit" name="sub"></td>  
   </tr>  
</table>  
</div>  
</form>  
 
</body>  
</html>