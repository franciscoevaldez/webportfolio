<?php

// variable definitions
$wTitle = 'espn fc';
$workIndex = 6;

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
	Con motivo del 110º aniversario del Automóvil Club Argentino, 
	se diseñó una campaña de vía pública y de comunicación. El diseño 
	surgió a partir del característico tótem que marca la ubicación de 
	las sedes del club a lo largo y ancho del país.
	</p>
	<p>** Trabajo realizado para Luna y the brandbean junto a 
	Horacio A. Agulla, Santiago Spigariol y Hilary Strong **</p>';

	$wSideNotesEN = '<p>
	<strong>Agency: </strong> Luna + brandbean <br/>
	<strong>Year: </strong>2013<br/>
	<strong>People Involved: </strong>Horacio Agulla, Santiago Spigariol, Hilary Strong, Sebasti&aacute;n Barrena
	</p>';

	include '../block_header.php' ?>	

	<article id="work" class="row">

		<div class="row"><img src="espnfc_header-01.png"></div>

		<div class="row"><img src="espnfc_viapublica-v.jpg"></div>

		<div class="row"><img src="espnfc_viapublica.jpg"></div>

		<div class="row"><img src="espnfc_tv.gif"></div>

		<div class="row"><img src="espnfc_web.jpg"></div>

		<div class="row"><img src="espnfc_app.png"></div>

	</article>


	<?php include '../block_foot.php'; ?>


	</div>

</body>
</html>