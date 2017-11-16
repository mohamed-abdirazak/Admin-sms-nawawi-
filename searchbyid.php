
<?php
$host ="localhost";
$user = "root";
$pswd = "";
$db = "simpledata";
$id="";
$studentname="";
$gender="";
$mothername="";
$guardianname="";
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
$old_image = '';
$guardianrelation="";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)


function getData()
{
$data =array();
$data[0] =$_POST['id'];
$data[1] =$_POST['studentname'];
$data[2] =$_POST['gender'];
$data[3] =$_POST['mothername'];
$data[4] =$_POST['guardianname'];
$data[5] =$_POST['guardiantell'];
$data[6] =$_POST['guardianoccupation'];
$data[7] =$_POST['pob'];
$data[8] =$_POST['address'];
$data[9] =$_POST['dob'];
$data[10] =$_POST['phone'];
$data[11] =$_POST['level'];
$data[12] =$_POST['classname'];
$data[13] =$_POST['section'];
$data[14] =$_POST['branch'];
$data[15] =$_POST['nationality'];
$data[16] =$_POST['registrationdate'];
$data[17] =$_POST['guardianrelation'];


return $data;
}

if (isset($_POST['searchid'])) {
    $info = getData();
    $sql = "SELECT *FROM registration WHERE ID= '$info[0]'";
    $search_result =mysqli_query($conn,$sql);
if (mysqli_num_rows($search_result)){
 while ($rows=mysqli_fetch_array($search_result)) {

$id=$rows['ID'];
$studentname=$rows['studentname'];
$gender=$rows['gender'];
$mothername=$rows['mothername'];
$guardianname=$rows['guardianname'];
$guardiantell=$rows['guardiantell'];
$guardianoccupation=$rows['guardianoccupation'];
$pob=$rows['pob'];
$address=$rows['address'];
$dob=$rows['dob'];
$phone=$rows['phone'];
$level=$rows['level'];
$classname=$rows['classname'];
$section=$rows['section'];
$branch=$rows['branch'];
$nationality=$rows['nationality'];
$registrationdate=$rows['registrationdate'];
$guardianrelation=$rows['guardianrelation'];
$image=$rows['image'];
$old_image =$image;

}
}

}

// Update Command

if (isset($_POST['update'])) {
  $target = "pictures/".basename($_FILES['image']['name']);
  $image = $_FILES['image']['name'];

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  //  unlink('/'.$_POST['old_image']);
    $msg = "Image uploaded successfully";

      $info = getData();
$sql = "UPDATE registration SET studentname='$info[1]',gender='$info[2]',mothername='$info[3]',guardianname='$info[4]',
guardiantell='$info[5]',guardianoccupation='$info[6]',pob='$info[7]',address='$info[8]',dob='$info[9]',
phone='$info[10]',level='$info[11]',classname='$info[12]'
,section='$info[13]',branch='$info[14]',nationality='$info[15]',registrationdate='$info[16]',
guardianrelation='$info[17]',image='$target ' 
WHERE ID='$info[0]'";
if ($conn->query($sql)===TRUE) {
   
}
else {
}


}else{
  $msg = "Failed to upload image";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
</head>
<body>
  

 <?php include("falad2.php"); ?>
 <div class="col-md-12"> 
 <div class="panel panel-primary" >
  <div class="panel-heading"><h5>Student Registration</h5></div>

  
  <div class="row" style=" margin:5px 0 0 0 ">
    
  <div class="col-md-4"> 
  <form action="" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="old_image"  value="<?php echo($old_image); ?>"/>
  <div class="form-group">
    <label for="text">ID:</label>&nbsp;&nbsp;&nbsp;
    <input type="text" 
    class="form-control" style="width:100%" id="id" name="id" value="<?php echo($id); ?>">
  </div> 
  </div><br>
  <div class="col-md-4"> 
  <button type="submit" name="searchid" class="btn btn-success "
   style="width:100% ; height:35px;margin:5px 0 0 0;"  >Search</button>
 </div>
   <div class="col-md-4"> 
    <button type="submit" name="update" class="btn btn-success " 
   style="width:100%; height:35px ; margin:5px 0 0 0;"  >update</button>
  
   </div>
  </div>


  <div class="row" style=" margin:3px 0 0 0 ">
  <div class="col-md-4"> 

  <div class="form-group">
    <label> Mother name :  </label>
    <input type="text" class="form-control" id="mothername" style=" width:100%; height:29px;"  
    name="mothername" value="<?php echo($mothername); ?>">
  </div>


  <div class="form-group">
    <label>Guardian name:  </label>
    <input type="text" class="form-control" id="guardianname"
    style="width:100%; height:29px;"   name="guardianname"value="<?php echo($guardianname); ?>">
  </div>
   <div class="form-group">
    <label>Address :  </label>
    <input type="text" class="form-control" id="Address" 
    style=" width:100%;height:29px;"  name="address"value="<?php echo($address); ?>" >
  </div>
 <div class="form-group">
    <label>Phone NO:  </label> 
    <input type="text" class="form-control" id="phone"
    style=" width:100%;height:29px;"   name="phone"value="<?php echo($phone); ?>" >
  </div> 

 <div class="form-group">
    <label>Section : </label>
  <select style="width:100%;height:28px;" name="section" id="section" value="<?php echo($section); ?>">

  <option><?php echo($section); ?></option>
  <option>A</option>
   <option>B</option>
    <option>C</option>
     <option>D</option>
      <option>E</option>
       <option>F</option>
        <option>G</option>
         <option>H</option>
          <option>I</option>
           <option>J</option>
            <option>K</option>
             <option>L</option>
              <option>M</option>
               <option>N</option>
                <option>O</option>
                 <option>P</option>
                  <option>Q</option>
                   <option>R</option>
                    <option>S</option>
                     <option>T</option>
                      <option>V</option>
                       <option>U</option>
                        <option>W</option>
                         <option>X</option>
                          <option>Y</option>
                           <option>Z</option>
                       
            
  
  
</select>
  </div>
  <div class="form-group">
    <label>Branch : </label>
  <select  style="width:100%; height:29px;" name="branch" id="branch"value="<?php echo($branch); ?>">
  <option><?php echo($branch); ?></option>
  <option>Nawawi</option>
  <option>Ridwaan</option>
  <option>Raxmana</option>
  
</select>
</div>
</div>
   <div class="col-md-6"> 
  <div class="form-group">
    <label>Student name:</label>
    <input type="text" class="form-control" id="studentname" name="studentname" style=" width:100%;height:29px;"  
    value="<?php echo($studentname); ?>">
  </div>
<div class="form-group">
    <label>Nationality :  </label> 
    <select   style="width:100%; height:31px;" name="nationality" value="<?php echo($nationality); ?>">
 <option ><?php echo($nationality); ?></option>
 <option >SELECT</option>
<option >Somalia</option>
 <option >Malta</option>
 <option>Yemen</option>
 <option>Yugoslavia</option>
 <option>South Africa</option>
 <option>Zambia</option>
 <option>Zimbabwe</option>
 <option>Myanmar</option>
 <option>Morocco</option>
<option>Rwanda</option>
 <option>Saudi Arabia</option>
 <option>Sudan</option>
 <option>Senegal</option>
 <option>Singapore</option>
 <option>Mexico</option>
 <option>Marshall Island</option>
 <option>Macedonia</option>
 <option>Mali</option>
 <option>Malawi</option>
 <option>Malaysia</option>
 <option>Mayotte</option>
 <option>Namibia</option>
 <option>New Caledonia</option>
 <option>Niger</option>
 <option>Norfolk Island</option>
 <option>Nigeria</option>
 <option>Nicaragua</option>
 <option>Niue</option>
 <option>Netherlands</option>
 <option>Norway</option>
 <option>Nepal</option>
 <option>Nauru</option>
 <option>New Zealand</option>
 <option>Oman</option>
 <option>Pakistan</option>
 <option>Panama</option>
 <option>Pitcairn</option>
 <option>Peru</option>
 <option>Philippines</option>
 <option>Palau</option>
 <option>Poland</option>
 <option>Puerto Rico</option>
 <option>North Korea</option>
 <option>Portugal</option>
 <option>Paraguay</option>
 <option>Palestine</option>
 <option>Qatar</option>
 <option>Romania</option>
 <option>Russian Federation</option>
 <option>Suriname</option>
 <option>Slovakin</option>
 <option>Slovenia</option>
 <option>Sweden</option>
 <option>Swaziland</option>
 <option>Syria</option>
 <option>Togo</option>
 <option>Thailand</option>
 <option>Tunisia</option>
 <option>Turkey</option>
 <option>Tanzania</option>
 <option>Uganda</option>
 <option>Ukraine</option>
 <option>Uruguay</option>
 <option>United States</option>
 <option>Uzbekistan</option>
 <option>Samoa</option>

</select>
   
  </div>

<div class="form-group">
    <label>Guardian occupation:  </label> 
    <input type="text" class="form-control" id="occupation" 
    style=" width:100%; height:29px;"  name="guardianoccupation" value="<?php echo($guardianoccupation); ?>">
  </div>

  <div class="form-group">
    <label for="text">Place Of Brith:  </label> &nbsp;
    <select   style="width:100% ; height:29px;" name="pob" id="pob" placeholder="PlaceOfBirth" value="<?php echo($pob); ?>" >
<option ><?php echo($pob); ?></option>
 <option>Taleex</option>
 <option>Laas-caanood</option>
 <option>Sheikh</option>
 <option>Ood-weyne</option>
 <option>Buuhoodle</option>
 <option>Burco</option>
 <option>Seylac</option>
 <option>Lug-haye</option>
 <option>Baki</option>
 <option>Saylac</option>
 <option>Boorame</option>
 <option>Gebilay States</option>
 <option>Berbera</option>
 <option>Hargeysa</option>
  <option>Ceynabo</option>
 <option>Xuddun</option>
 <option>Ceerigaabo</option>
 <option>Xuddun</option>
 <option>Laas-qoray</option>
 <option>Ceel-afwen</option>
 <option>Baran</option>
 <option>Boosaaso</option>
 <option>Bandar-beyla</option>
 <option>Xaafuun</option>
 <option>Isku-shuban</option>
 <option>Qandala</option>
 <option>Caluula</option>
 <option>Baar-gaal</option>
  <option>Garowe</option>
 <option>Eyl</option>
 <option>Dan-gorayo</option>
 <option>Bur-tinle</option>
 <option>Gaal-kacyo</option>
 <option>Hobyo</option>
 <option>Xarar-dheere</option>
 <option>Jarriiban</option>
 <option>Goldogob</option>
 <option>Dhuusa-mareeb</option>
 <option>Ceel-buur</option>
 <option>Ceel-dheer</option>
 <option>Cadaado</option>
 <option>Cabuud-waaq</option>
 <option>Gal-hareeri</option>
 <option>Balan-bal</option>
 <option>Beled-weyne</option>
 <option>Buulo-burte</option>
 <option>Jalalaqsi</option>
 <option>Matabaan</option>
 <option>Maxaas</option>
 <option>Jowhar</option>
 <option>Bal-cad</option>
  <option>Cadale</option>
   <option>Aadan yabaal</option>
    <option>Mahaddaay</option>
     <option>Ruun-nirgood</option>
      <option>War-sheikh</option>
       <option>Wanle-weyn</option>
        <option>Qoryo-leey</option>
         <option>Baraawe</option>
          <option>Sablaale</option>
           <option>Kurtun-waaree</option>
            <option>Dajuuma</option>
             <option>Jilib</option>
              <option>Bu-aale</option>
               <option>Saakoow</option>
                <option>Kismaayo</option>
                 <option>Jamaame</option>
                  <option>Af-madow</option>
                   <option>Badhaadhe</option>
                    <option>Xagar</option>
                     <option>Baydhabo</option>
                      <option>Buur-hakaba</option>
                       <option>Baydhabo</option>
                        <option>Diin-soor</option>
                         <option>Qansax-dheere</option>
                          <option>Berdaale</option>
                           <option>Xuddur</option>
                          <option>Tayeegloow</option>
                           <option>Waa-jid</option>
                          <option>Ceel-berde</option>
                           <option>Yeed</option>
                          <option>Rab-dhuurre</option>
                           <option>Garba-haarreey</option>
                          <option>Luuq</option>
                           <option>Baar-dheere</option>
                          <option>Beled-xaawo</option>
                           <option>Dooloow</option>
                          <option>'Ceel-waaq</option>
                           <option>Xamar-weyne</option>
                           <option>Xamar-jajab</option>
                          <option>Boon-dheere</option>
                           <option>Waaberi</option>
                           <option>Wada-jir</option>
                          <option>Dharkeyn-leey</option>
                           <option>Hodon</option>
                           <option>Howl-wadaag</option>
                          <option>War-dhiigleey</option>
                           <option>Shibis</option>
                           <option>c/casiis</option>
                          <option>Huriwaa</option>
                           <option>Dayniile</option>
                            <option>Yaaq-shiid</option>
                             <option>Shingaani</option>
                              <option>OTHER........</option>
</select> 
  </div>

 
 <div class="form-group">
    <label >Level : </label>
  <select  style="width:100%; height:29px;" name="level" id="level"value="<?php echo($level); ?>">
  <option ><?php echo($level); ?></option>
  <option >Necessary</option>
  <option >Primary</option>
  <option>Secondary</option>
  
</select>
  </div>

<div class="form-group">
    <label>Registration Date :  </label>
    <input type="date" class="form-control"  style="height:29px; width:100%;" id="registrationdate" name="registrationdate" value="<?php echo($registrationdate); ?>">
  </div> 
  </div>

<div class="col-md-2">
<div class="form-group">
    <label>Gender : </label>
  <select style="width:100%; height:29px;" name="gender" id="gender"value="<?php echo($gender); ?>">
  <option><?php echo($gender); ?></option>
  <option>Male</option>
  <option>Female</option>
</select>
  </div>

 <div class="form-group">
    <label for="text">Guardian relation : </label>
  <select style="width:100%; height:29px;" name="guardianrelation" id="guardianrelation" value="<?php echo($guardianrelation); ?>">
  <option style="font-size:15px;font-family:verdana;" ><?php echo($guardianrelation); ?></option>
  <option style="font-size:15px;font-family:verdana;" >Mother</option>
  <option style="font-size:15px;font-family:verdana;" >Mother</option>
  <option style="font-size:15px;font-family:verdana;" >Father</option>
  <option style="font-size:15px;font-family:verdana;" >sister</option>
  <option style="font-size:15px;font-family:verdana;" >Aunt</option>
  <option style="font-size:15px;font-family:verdana;" >brother</option>
  <option style="font-size:15px;font-family:verdana;">grand Father</option>
  <option style="font-size:15px;font-family:verdana;" >grand Mother</option>
  <option style="font-size:15px;font-family:verdana;">Ancle</option>
  <option style="font-size:15px;font-family:verdana;">relative</option>
  
</select>

   </div>
<div class="form-group">
    <label>Guardian Tell:  </label>
    <input type="text" class="form-control" id="guardiantell"  style="width:100%; height:29px;"
    name="guardiantell"value="<?php echo($guardiantell); ?>" size="15px">
  </div>
<div class="form-group">
    <label>Date Of Brith :  </label> 
    <input type="date" class="form-control" id="dob "
     style="width:100%;height:29px;" name="dob" value="<?php echo($dob); ?>">
  </div>
 <div class="form-group">
    <label>Class name : </label>
  <select style="width:100%; height:29px;"
   name="classname" id="classname"value="<?php echo($classname); ?>">
   <option ><?php echo($classname); ?></option>
  <option >Kindergartner</option>
  <option >Grade One</option>
  <option >Grade Two</option>
  <option >Grade Three</option>
  <option >Grade Four</option>
  <option>Grade Five</option>
  <option >Grade Six</option>
  <option>Grade Seven</option>
  <option>Grade Eight</option>
  <option>Form One</option>
  <option>Form Two</option>
  <option>Form Three</option>
  <option>Form Four</option>
  
</select>
  </div>
  <label> <input type="file" onchange="readURL(this);" name="image" style="width:140px ; height:32px;" >
  <img src="<?php echo($image); ?>"height="80px"width="100px"  id="blah"  >
 <!-- <imgsrc="#" /></label><br><br> -->
 </div>
</form>
  </div>
  </div>
  </div>


  </body>
</html>
  <script>function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#blah')
.attr('src', e.target.result)
.width(100)
.height(70);
};
reader.readAsDataURL(input.files[0]);
}
}
</script>




