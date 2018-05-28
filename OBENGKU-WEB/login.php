<?php 
    
    include "assets\php\proses.php";
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mr Bengkel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.css" />  
<link rel="stylesheet" href="assets\css\home_fix.css">
 <script src="assets\js\jquery-3.3.1.min.js"></script>
<script src="assets\js\bootstrap.min.js"></script>
<script src="assets\js\fade.js"></script>
<script class="cssdeck" src="assets\js\jquery.min.js"></script> 
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
				width: 250px;
				height: 30px;
				border-radius: 10px;
				margin: 10px;
			}
			.username:hover
			{
				background-color: zoom;
  				-webkit-transform: scale(1.08);
 				transform: scale(1.08);
				z-index: 50;
			}
			.submit
			{
				width: 100px;
				height: 40px;
				border-radius: 10px;
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
        <a class="navbar-brand" style="color: white" href="index.html"><img class="logo1" src="assets/img/logo.png"></a>
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
	<!-- header -->
	<?php if (isset($success)) 
	{			

            if ($success == true ) 
            	{ ?>
            		<script type="text/javascript">
            			 window.location = "http://www.google.com/";
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
		<form name="myForm" action="?" onsubmit="return validateForm()" method="post" class="kotak col-xs-6">
			<img src="assets/img/logo.png" class="logo">
			<h4 class="sign center-block" >MASUK</h4>
			<input type="text" name="username" placeholder="username" class="username form-control"required="wajib diisi">
			<input type="password" name="password" placeholder="password" class="username form-control"required="wajib diisi">
			
			 <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
             </div>

			<input type="submit" name="submit" class="submit btn-outline-light" value="submit" href="https://facebook.com" onclick="validate()">
			<h7> <a href="https://www.facebook.com" class="card-link"> <img src="assets/img/logofb.png" class="logofb"> facebook </a> <a href="https://plus.google.com" class="card-link"><img src="assets/img/google+.png" class="logofb"> Google+ </a></h7>
		</form>
			</div>	
		<div class="col"></div>
	</div>
	</div>	
</body>
</html>