<?php 
    
    include "assets\php\proses.php";
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
 <meta charset="utf-8" />
   <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mr Bengkel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.css" />  
<link rel="stylesheet" href="assets\css\home_fix.css">
 <script src="assets\js\jquery-3.3.1.min.js"></script>
<script src="assets\js\bootstrap.min.js"></script>
<script src="assets\js\fade.js"></script>
<script class="cssdeck" src="assets\js\jquery.min.js"></script> 
<script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<style type="text/css">
			.kotak
			{
				width: 400px;
				height: 500px;
				border-radius: 10px;
				background-color: orange;
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
				margin-top: 90px;	
				filter: alpha(opacity=40);
				float: right;
				opacity: 0.9;
			}
			.username
			{
				width: 300px;
				height: 43px;
				border-radius: 5px;
				margin: 10px;
			}
/*			.username:hover
			{
				background-color: zoom;
  				-webkit-transform: scale(1.08);
 				transform: scale(1.08);
				z-index: 50;
			}*/
			.submit
			{
				width: 300px;
				height: 43px;
				border-radius: 5px;
				border: 0%;
				margin-bottom: 10px;
			}
			.background
			{
				background-image: url(assets/img/mesinedit.jpg);
				width: 100%;
				height: 100%;
				background-size: cover;
				display: flex;
				justify-content: center;
			}
			.sign
			{
				font-style: gotham;
			}
			.logofb
			{
				margin: 5px;
				width: 20px;
				height: 20px;
				transition: 
			}
			.logofb:hover
			{
				background-color: zoom;
  				-webkit-transform: scale(1.08);
 				transform: scale(2.08);
				z-index: 50;
			}
			.logo
			{
				margin-bottom: 40px;
				width: 320px;
				height: 75px;
			}
			input.ng-invalid {
    			background-color: #D3D3D3;
			}
	</style>
	<script type="text/javascript">
		function validateForm() 
		{
    		var username = document.forms["myForm"]["username"].value;
    		var password = document.forms["myForm"]["password"].value;
 		   	if (username == "arif" && password == "marda" && success == true) 
 	   		{
        		alert("login success");
        		return true;
    		}
    		else
    		{
    			window.alert("Maaf Username dan Password salah !")
    		}
		}
	</script>
	
</head>
<body class="background">

 <div class="navbar-full">
  <nav class="navbar navbar-expand-md navbar-dark" style="background-color:#fdd100">
        <a class="navbar-brand" style="color: white" href="index.html"><img class="logo1"src="assets/img/logo.png"></a>
        <button class="navbar-toggler" style="" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav" style="">
                <li class="nav-item warna ">
                    <a class="nav-link " href="#">HOME</a>
                </li>
                <li class="nav-item warna">
                    <a class="nav-link" href="#">SERVICE</a>
                </li>
                <li class="nav-item warna">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
                <li class="nav-item warna">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="col">
                    <a class="nav-link" href="#">    </a>
                </li>
                <li class="col">
                    <a class="nav-link" href="#">    </a>
                </li>              
            </ul>
       
        </div>
	</nav>
	 <div  class="container-fluid " >

	 		<script type="text/javascript">
		function validateForm() 
		{
    		var username = document.forms["myForm"]["username"].value;
    		var password = document.forms["myForm"]["password"].value;
 		   	if (username == "arif" && password == "marda" && success == false) 
 	   		{
        		alert("login success");
        		return true;
    		}
    		else
    		{
    			alert("Maaf Username dan Password salah !")
    		}
		}
	</script>

	<!-- header -->
	<?php if (isset($success)) 
	{			

			

            if ($success == true && $_POST["username"]=="arif" && $_POST["password"]=="marda" ) 
            	{ ?>
            		<script type="text/javascript">
            			 window.location = "dashboard.html";
            		</script>

            	<? } 
            	else 
            	{ ?>
            		
            			<script type="text/javascript">window.alert("ISI capta dulu boss     !")</script>
            <?php } 
    } ?>

<br>	<div class="row d-flex">
			<div class="col"></div>
		<div class="col content-center ">
		<form ng-app="" name="myForm" action="?" onsubmit="return validateForm()" method="post" class="kotak col-xs-6">
			<img src="assets/img/logo.png" class="logo">
			<h4 class="sign center-block" >MASUK</h4>
			<input type="text" name="username" ng-model="myText1" placeholder="| Username" class="username form-control"required="wajib diisi">
			<input type="password" name="password" ng-model="myText2" placeholder="| Password" class="username form-control"required="wajib diisi">
			
			 <div class="form-group">
                     <div class="g-recaptcha" data-sitekey="6LfZN1sUAAAAAK7jcj-hw7qI7geqi9X8Q9ma5UMT"></div>
             </div>

			<input type="submit" name="submit" class="submit btn-dark" value="LOG IN" href="https://facebook.com" onclick="validate()">
			<h7> <a href="https://www.facebook.com" class="card-link"> <img src="assets/img/logofb.png" class="logofb"> Facebook </a> <a href="https://plus.google.com" class="card-link"><img src="assets/img/google+.png" class="logofb"> Google+ </a></h7>
		</form>
			</div>	
		<div class="col"></div>
	</div>
	</div>	
</body>
</html>