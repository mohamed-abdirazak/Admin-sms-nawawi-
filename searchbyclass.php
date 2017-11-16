
<?php
 include("modify.php");
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

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)


function getData()
{


$data =array();

$data[11] =$_POST['branch'];
$data[12] =$_POST['classname'];
$data[13] =$_POST['section'];


return $data;
}

if (isset($_POST['search'])) {
    $info = getData();
    $sql = "SELECT *FROM registration ";
    $search_result =mysqli_query($conn,$sql);
if (mysqli_num_rows($search_result)){
 while ($rows=mysqli_fetch_array($search_result)) {

$id=$rows['ID'];
$id=$rows['studentname'];
$id=$rows['gender'];
$id=$rows['mothername'];
$id=$rows['guardianname'];
$id=$rows['guardiantell'];
$id=$rows['guardianoccupation'];
$id=$rows['pob'];
$id=$rows['address'];
$id=$rows['dob'];
$id=$rows['phone'];
$id=$rows['level'];
$id=$rows['classname'];
$id=$rows['section'];
$id=$rows['branch'];
$id=$rows['nationality'];
$id=$rows['registrationdate'];
$id=$rows['image'];
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>search by class</title>
     <meta charset="utf-8"> 
            <script src="jquery-3.2.1.js"></script>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="bootstrap.min.css">
           <script src="bootstrap.min.js"> </script>
           <link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
           
           <style>
                @font-face { font-family: "Glyphicons Halflings"; 
              src: url(fonts/glyphicons-halflings-regular.ttf); } 
             
              </style>
  </head>
  <body>



<div class="col-md-12">
      <form class="navbar-form"action="searchclass.php"method="POST"> 
 
            <div class="input-group"> 
            <div class="form-group">
    <label >Class name : </label>&nbsp;&nbsp;
  <select style="width:120px ; height:36px;" name="branch" id="branch">
    <!-- <option disabled >SELECT</option> -->
  <option >Nawawi</option>
  <option >Raxma</option>
  <option >Ridwaan</option>

  
</select>
  </div>
                <div class="form-group">
    <label >Class name : </label>&nbsp;&nbsp;
  <select style="width:120px ; height:36px;" name="classname" id="classname">
    <!-- <option>SELECT</option> -->
  <option >	Kindergartner	</option>
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
  </div> &nbsp;&nbsp;
    <label>Section : </label>&nbsp;
  <select style="width:120px ; height:36px;" name="section" id="result" onchange="result">
  <!-- <option>SELECT</option> -->
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
&nbsp;
                <div class="input-group-btn"> 
                    <button class="btn btn-primary"type="submit" name="search">
                        <span class="glyphicon glyphicon-search"></span></button> 
                        </div> </div> </form>
  <h2>Student Searched</h2>
  <div class="table-responsive">        
  <table class="table table-bordered table-hover table-striped"id="table">
    <thead style="background-color:#49133f ; color:white ; font-size:12px" >
      <tr>
        <th>ID</th>
        <th  style="padding-right:100px">Studentname</th>
        <th>Gender</th>
        <th  style="padding-right:100px">Mothername</th>
        <th  style="padding-right:100px">Gurdianname</th>
       <td> Gardian relation</td>
        <th>Guardiantell</th>
        <th>Guardianoccupation</th>
        <th>POB</th>
        <th>Address</th>
         <th  style="padding-right:70px">DOB</th>
        <th>Phone</th>
        <th>Level</th>
        <th>Classname</th>
        <th>Section</th>
        <th>Branch</th>
        <th>Nationality</th>
        <th>Registrationdate</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      <tbody style=" font-family:verdana; font-size:12px">
  
     <?php
     
    // Select Command
// sql to Select a record
$conn = new mysqli ("localhost","root","","simpledata");
if (isset($_POST['search'])){
$sql = "SELECT * FROM registration WHERE branch='$info[11]' AND classname='$info[12]'AND section='$info[13]' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while ($row=$result->fetch_assoc() ) {?>
    <tr>
   <td><?php echo $row['ID'] ?></td>
   <td><?php echo $row["studentname"] ?></td>
   <td><?php echo $row["gender"] ?></td>
   <td><?php echo $row['mothername'] ?></td>
<td><?php echo $row['guardianname'] ?></td>
 <td><?php echo $row['guardianrelation'] ?></td>
<td><?php echo $row['guardiantell'] ?></td>
   <td><?php echo $row['guardianoccupation'] ?></td>
<td><?php echo $row['pob'] ?></td>
<td><?php echo $row['address'] ?></td>
   <td><?php echo $row['dob'] ?></td>
<td><?php echo $row['phone'] ?></td>
<td><?php echo $row['level'] ?></td>
    <td><?php echo $row['classname'] ?></td>
<td><?php echo $row['section'] ?></td>
<td><?php echo $row['branch'] ?></td>
    <td><?php echo $row['nationality'] ?></td>
<td><?php echo $row['registrationdate'] ?></td>
<td> <img src="<?php echo $row['image'] ?>"height="40px"width="40px" ></td>
   <td>
       <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-<?php echo $row['ID']; ?>" id=""><i class="fa fa-pencil fa-sm"></i> Edit</button>
       <div class="modal fade" role="dialog" id="edit-<?php echo $row['ID']; ?>">
           <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
<h4 class="modal-title" id="exampleModalLongTitle">STUDENT UPDATE</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
                   <div class="modal-body">
                       <form method="post" enctype="multipart/form-data">
                       <label> ID : </label>
                           <input type="text" name="cusId" id="#edit-<?php echo $row['ID']; ?>"style="width:430px ; height:31px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['ID']; ?>"><br>
                           <label> Student name : </label>
                           <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="studentname" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['studentname']; ?>"><br>
                           <label>Gender : </label>
<select style="width:430px ; height:31px; font-size:13px;font-family:verdana;" name="gender" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['gender']; ?>">
<option><?php echo $row['gender']; ?></option>
<option>Male</option>
<option>Female</option>
</select>
                            <label> Mother Name: </label>
                           <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="mothername" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['mothername']; ?>"><br>
                           <label> Guardian Name : </label>
                           <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="guardianname" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['guardianname']; ?>"><br>
                           


                           <label for="text">Guardian relation : </label>
<select style="width:430px ; height:31px; font-size:13px;font-family:verdana;" name="guardianrelation" id="guardianrelation" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['guardianrelation']; ?>">
<option style="font-size:15px;font-family:verdana;" ><?php echo $row['guardianrelation']; ?></option>
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
                       <label> Guardian tell: </label>
                           <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="guardiantell" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['guardiantell']; ?>"><br>
                           <label> Guardian Occupation : </label>
                           <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="guardianoccupation" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['guardianoccupation']; ?>"><br>
                           <label>Place Of Brith:</label>
                           <select style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="pob" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['pob']; ?>"><br>
                           <option><?php echo $row['pob']; ?></option>
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
<label> Address: </label>
<input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="address" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['address']; ?>"><br>
<label> DOB: </label>
<input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="date" name="dob" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['dob']; ?>"><br>
<label> Phone: </label>
<input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="phone" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['phone']; ?>"><br>
<label> Level: </label>
<select style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="level" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['level']; ?>"><br>
<option ><?php echo $row['level']; ?></option>
<option >Necessary</option>
<option >Primary</option>
<option>Secondary</option>
</select>
<label> Classname: </label>
<select style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="classname" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['classname']; ?>"><br>
<option ><?php echo $row['classname']; ?></option>
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
                           <label> Section: </label>
                           <select style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="section" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['section']; ?>"><br>
                           <option><?php echo $row['section']; ?></option>
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
                           <label> Branch: </label>
                           <select style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="branch" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['branch']; ?>"><br>
                           <option><?php echo $row['branch']; ?></option>
<option>Nawawi</option>
<option>Ridwaan</option>
<option>Raxmana</option>
                        </select>
                           <label> Nationality : </label>
                           <select style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="nationality" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['nationality']; ?>"><br>
                           <option ><?php echo $row['nationality']; ?></option>
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
                           <label> Registration Date: </label>
                           <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="date" name="registrationdate" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['registrationdate']; ?>"><br>
                           <label> <input type="file" onchange="readURL(this);" name="image" style="width:140px ; height:32px;" id="#edit-<?php echo $row['ID']; ?>" >
                           <img src="<?php echo $row['image'] ?>"height="100px"width="100px"  id="blah"  >
                          <!-- <imgsrc="#" /></label><br><br> -->
                          
<br><br>
                           <button type="submit" class="btn btn-success" name="update_customer" id="#edit-<?php echo $row['id']; ?>">Update</button>
                    
                       </form>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   </div>
                  
               </div> </div> </div> 
               
                </td>
               <td>
       <a onclick ="return confirm('are you sure to delete')" href="?idDelete=<?php echo $row['ID'] ?>">
       <button name="idDelete" type="submit" class="btn btn-danger btn-sm">
       <i class="fa fa-trash fa-sm"></i> Delete</button></a>
   </td>

        </tr>
                <?php 
            }
    }
else
{
 echo 'Data Not Found';
}}
echo "</tbody></table></div></div>";
?>




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