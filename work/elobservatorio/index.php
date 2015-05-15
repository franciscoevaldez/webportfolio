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
	El Observatorio is a newspaper that places the reading of long writes and deep analysis front and center.
	</p>';

	$wSideNotesEN = '<p>
	<strong>Year: </strong>2011<br/>
	Project developed for Cátedra Manela, Diseño Editorial. FADU - UBA
	</p>';

	$wDescriptionES = '<p>
	El Observatorio es un diario pensado para volver a disfrutar de la experiencia de la lectura analítica y extensa.
	</p>';

	$wSideNotesES = '<p>
	<strong>Año: </strong>2011<br/>
	Proyecto desarrollado para la cátedra Manela de Diseño Editorial. FADU - UBA
	</p>';

	include '../block_header.php' ?>	

	<article id="work" class="row">

		<div class="row">
			<div class="six columns"><img src="final_diario01.jpg"></div>
			<div class="six columns"><img src="final_diario02.jpg"></div>
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