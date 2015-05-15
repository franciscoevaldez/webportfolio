<?php

// variable definitions
$wTitle = 'espn web';
$workIndex = 7;

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
	As part of the new strategy, a redesign proposal for their news website was developed. It included a full responsive approach and a flexible design capable of housing the wide variety of contents in a cohesive way.
	</p>';

	$wSideNotesEN = '<p>
	<strong>Agency: </strong> Luna + the brandbean <br/>
	<strong>Year: </strong>2012<br/>
	<strong>People Involved: </strong>Horacio A. Agulla, Santiago Spigariol, Hilary Strong, Daniela Raskovsky.
	<br/> <br/>
	Project developed for Luna and the brandbean.
	</p>';

	$wDescriptionES = '<p>
	Como parte de la nueva estrategia, se desarrolló una propuesta para el sistema de portales de información de ESPN en toda la región. El mismo incluyó una resolución responsive, y un diseño flexible para incorporar toda la variedad de contenidos de una manera coherente.
	</p>';

	$wSideNotesES = '<p>
	<strong>Agencia: </strong> Luna + the brandbean <br/>
	<strong>Año: </strong>2012<br/>
	<strong>Realizado junto a: </strong>Horacio A. Agulla, Santiago Spigariol, Hilary Strong, Daniela Raskovsky.
	<br/> <br/>
	Trabajo realizado junto a Luna en the brandbean.
	</p>';

	include '../block_header.php' ?>	

	<article id="work" class="row">

		<div class="row"><img src="espn-web-responsive1.png"></div>

		<div class="row">
			<div class="six columns"><img src="espn-web-carrousel1.gif"></div>
			<div class="six columns"><img src="espn-web-ticker1.gif"></div>
		</div>

		<div class="row"><img src="espn-web-colores.png"></div>

	</article>


	<?php include '../block_foot.php'; ?>


	</div>

</body>
</html>