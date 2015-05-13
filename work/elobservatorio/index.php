<?php

// variable definitions
$wTitle = 'el observatorio';
$workIndex = 14;

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

		<div class="row">
			<div class="six columns"><img src="final_diario01.png"></div>
			<div class="six columns"><img src="final_diario02.png"></div>
		</div>

		<div class="row">
			<div class="three columns"><img src="recorte1_01.jpg"></div>
			<div class="three columns"><img src="recorte2_01.jpg"></div>
			<div class="three columns"><img src="recorte3_01.jpg"></div>
			<div class="three columns"><img src="recorte4_01.jpg"></div>
		</div>

	</article>


	<?php include '../block_foot.php'; ?>


	</div>

</body>
</html>