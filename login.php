<!DOCTYPE html>
<html lang="en">

    <head>
          <!--<link rel="stylesheet" type="text/css" href="back.css">-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login imamu nawawi school</title>
        <!-- CSS -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
      <style>
      body {
    background-image: url("school112.jpg");
    background-size: 100% 100%;
        background-repeat: no-repeat;
}
</style>
 </head>
    <body>
        <!-- Top content -->
        <div class="container" style="width:auto;height:602px">






             <div class="row">
                <div class="col-sm-6 col-sm-offset-6 text">
                
                            <h1 style="color:#f5c960;font-weight:bold"><strong>Nawawi school</strong> </h1>
                            <div class="description">
                            	<p>
	                        <h1>Login Form</h1>
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-7 form-box"style="width:500px;">
                        	<div class="form-top">
                        		<div class="form-top-left">
                                 <?php 
     include "config.php";
     if(isset($_POST['username'])&&isset($_POST['password'])){
       $username=$_POST['username'];
       $password=md5($_POST['password']);
       $stmt=$db->prepare("SELECT*FROM login WHERE username=? AND password=?");
       $stmt->bindparam(1,$username);
       $stmt->bindparam(2, $password);
       $stmt->execute();
       $row=$stmt->fetch();
       $user= $row['username'];
       $pass= $row['password'];
       $id= $row['id'];
       $type= $row['type'];
       if($username==$user && $pass==$password){
         session_start();
         $_SESSION['username']=$user;
         $_SESSION['password']=$pass;
         $_SESSION['id']=$id;
         $_SESSION['type']=$type;
         ?>
         <script>window.location.href='index.php'</script>
         <?php
       }else{
         ?>
         <div class="alart-danger-dismissible"role="alart" >
         <button type="button"class="close"data-dismiss="alart"aria-lable="close">
         <span aria-hidden="true"&&times;></span></button>
         <strong>FAILED</strong> 
         </div>


         <?php
       }


     }
     ?>
                        			<h3>Login </h3>
                            		<p>Enter your username and password:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom"style="height:300px;">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div><BR>
			                        <button type="submit" style="background-color: #e0f815 ;color:black; font-family:tahoma;font-weight:bold" class="btn">Sign in!</button>
                                 
			                    </form>
		                </div>
                    </div>
            </div>
     </div>
    </body>
</html>