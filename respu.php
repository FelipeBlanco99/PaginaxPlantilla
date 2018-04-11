<!DOCTYPE HTML>
<!--
	Autonomy by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Autonomy by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
		<div id="header">
			<div class="container">
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Autonomy</a></h1>
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html">Perfil</a></li>
						<li ><a href="arbol_Genealogico.html">Arbol Genealogico</a></li>
						
						<li><a href="hobbies.html">Hobbies</a></li>
						<li><a href="#">No Sidebar</a></li>
					</ul>
				</nav>

			</div>
		</div>
		<!-- Header -->

	<?php
		$nombre = $_GET["Nombre"];
		$ape = $_GET["Apellido"];
		$email = $_GET["Email"];
		$asunto = $_GET["Asunto"];
		$mensaje = $_GET["mensaje"];
	?>


		<div id="featured">
			<div class="container">
				<div class="row">
					<div class="12u">
						<section>
							<header>
								<h2></h2>
							</header>
							
<img src="images/adios.jpg" width="190" height="180" alt="">
							<center><div class=''>
						     <form action="respu.php" method="GET">

						    	<div class="ttt"> <?php echo $nombre; ?> Gracias por visitar mi pagina	</div>
						    	
						    
						       <input type='text'  placeholder='First Name:' name="Nombre" value="<?php echo $nombre ?> " />
						       <input type='text' placeholder='Last Name:'  name="Apellido" value="<?php echo $ape ?> " />
						       <input type='text' placeholder='Email:' name="Email" value="<?php echo $email ?> " />
						       <input type='text' placeholder='Asunto:'  name="Asunto" value="<?php echo $asunto ?> " />
						       <p> <?php echo $mensaje; ?></p>

						      
						     </form>	
						  </div></center>	

						</section>

						<img class="mmm" src="images/gracias.jpg" width="390" height="180" alt="">

					</div>		
				</div>
			</div>
		</div>

	</body>
</html>