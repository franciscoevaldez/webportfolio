<?php

// variable definitions
$wTitle = 'bago';
$workIndex = 3;

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
	Laboratorios Bagó is one of the largest pharmaceutical companies in the continent. In 2012, the brandbean was in charge of redesigning their website. This was used a template for local websites across the region.
	</p>';

	$wSideNotesEN = '<p>
	<strong>Agency: </strong> mediomundo + the brandbean <br/>
	<strong>Year: </strong>2012<br/>
	<strong>People Involved: </strong>Santiago Spigariol, Hilary Strong.
	<br/> <br/>
	Project developed for the brandbean and Mediomundo.tv.
	</p>';

	$wDescriptionES = '<p>
	En el año 2012 se produjo un rediseño de la web institucional de los Laboratorios Bagó. El mismo fue utilizado como rector para las webs locales de toda la región. 
	</p>';

	$wSideNotesES = '<p>
	<strong>Agencia: </strong> mediomundo + the brandbean  <br/>
	<strong>Año: </strong>2012<br/>
	<strong>Realizado junto a: </strong>Santiago Spigariol, Hilary Strong.
	<br/> <br/>
	Trabajo realizado para the brandbean y Mediomundo.tv.
	</p>';

	include '../block_header.php' ?>	

	<article id="work" class="row">

		<div class="row"><img src="bh_web_bago-1.jpg"></div>

		<div class="row"><img src="bh_web_bago-2.jpg"></div>

		<div class="row"><img src="bh_web_bago-3.jpg"></div>

		<div class="row"><img src="bh_web_bago-4.jpg"></div>

		<div class="row"><img src="bh_web_bago-5.jpg"></div>

	</article>


	<?php include '../block_foot.php'; ?>


	</div>

</body>
</html>