<?php

// variable definitions
$wTitle = 'inaka';
$workIndex = 2;

include("../block_vars.php");

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>

	<?php include '../block_head.htm' ?>

</head>

<body class="work">

	<div class="container">



	<?php 

	$wDescriptionEN = '<p>
	inaka is a growing software company that focuses on web and mobile apps. For them, a new brand identity was developed, starting with the name and logo, and reaching different communication elements.
	</p>
	<p>For this challenge, big inspiration was taken from special characters and symbols frequently used when programming.
	</p>';

	$wSideNotesEN = '<p>
	<strong>Agency: </strong> the brandbean <br/>
	<strong>Year: </strong>2012<br/>
	<strong>People Involved: </strong>Santiago Spigariol, Hilary Strong, Daniela Raskovsky.
	<br/> <br/>
	Project developed for the brandbean.
	</p>';

	$wDescriptionES = '<p>
	inaka es una empresa de desarrollo de aplicaciones mobile y web. Se desarrolló una nueva identidad partiendo desde el naming hasta la aplicación de la marca en piezas de comunicación. Para el logo se tomó inspiración de los símbolos y caracteres utilizados en la programación.
	</p>';

	$wSideNotesES = '<p>
	<strong>Agencia: </strong> the brandbean <br/>
	<strong>Año: </strong>2012<br/>
	<strong>Realizado junto a: </strong>Santiago Spigariol, Hilary Strong, Daniela Raskovsky.
	<br/> <br/>
	Trabajo realizado en the brandbean.
	</p>';

	include '../block_header.php' ?>	

	<article id="work" class="row">

		<div class="row"><img src="inaka-behance-header.gif"></div>

		<div class="row"><img src="inaka-behance-tarjeta.jpg"></div>

		<div class="row"><img src="inaka-behance-papeleria.jpg"></div>

		<div class="row"><img src="inaka_web_home.jpg"></div>

		<div class="row"><img src="inaka_web_proyects.jpg"></div>

		<div class="row"><img src="inaka_web_project.jpg"></div>

		<div class="row"><img src="inaka_web_about.jpg"></div>

		<div class="row"><img src="inaka-behance-w-labs.gif"></div>

	</article>


	<?php include '../block_foot.php'; ?>


	</div>

</body>
</html>