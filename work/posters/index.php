<?php

// variable definitions
$wTitle = 'posters';
$workIndex = 13;

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
	Social posters on urban issues.
	</p>';

	$wSideNotesEN = '<p>
	<strong>Year: </strong>2010<br/>
	Project developed for Cátedra Gabriele, Diseño Gráfico. FADU - UBA
	</p>';

	$wDescriptionES = '<p>
	Afiches sociales sobre problemáticas urbanas.
	</p>';

	$wSideNotesES = '<p>
	<strong>Año: </strong>2010<br/>
	Proyecto desarrollado para la cátedra Gabriele de Diseño Gráfico. FADU - UBA
	</p>';

	include '../block_header.php' ?>	

	<article id="work" class="row">

		<div class="row">
			<div class="six columns"><img src="afiche1.jpg"></div>
			<div class="six columns"><img src="afiche2.jpg"></div>
		</div>

		<div class="row">
			<div class="six columns"><img src="afiche3.jpg"></div>
			<div class="six columns"><img src="afiche4.jpg"></div>
		</div>

	</article>


	<?php include '../block_foot.php'; ?>


	</div>

</body>
</html>