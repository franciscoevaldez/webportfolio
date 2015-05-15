<?php

// variable definitions
$wTitle = 'bjork departure';
$workIndex = 10;

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
	Deluxe CD boxset. Departing from the most common topics in Bjork’s music, I worked with the idea of “music for the no-places”. This CD was thought as an ideal companion for headphones and a flight, and the design was developed to reflect this idea. 
	</p>';

	$wSideNotesEN = '<p>
	<strong>Year: </strong>2008<br/>
	Project developed for Cátedra Gabriele, Diseño Gráfico. FADU - UBA
	</p>';

	$wDescriptionES = '<p>
	Boxset CD de edición limitada. Alejándome de los temas más comunes de la música de Bjork, trabajé con la idea de “música para los no-lugares”. El CD fue pensado como la compañía ideal para un vuelo con auriculares, y la gráfica estuvo diseñada para reflejar esta idea. 
	</p>';

	$wSideNotesES = '<p>
	<strong>Año: </strong>2008<br/>
	Proyecto desarrollado para la cátedra Gabriele de Diseño Gráfico. FADU - UBA
	</p>';

	include '../block_header.php' ?>	

	<article id="work" class="row">

		<div class="row"><img src="dg1tp6-001.jpg"></div>
		<div class="row"><img src="dg1tp6-002.jpg"></div>
		<div class="row"><img src="dg1tp6-003.jpg"></div>
		<div class="row"><img src="dg1tp6-004.jpg"></div>
		<div class="row"><img src="dg1tp6-006.jpg"></div>
		<div class="row"><img src="dg1tp6-007.jpg"></div>
		<div class="row"><img src="dg1tp6-008.jpg"></div>
		<div class="row"><img src="dg1tp6-009.jpg"></div>
		<div class="row"><img src="dg1tp6-011.jpg"></div>
		<div class="row"><img src="dg1tp6-012.jpg"></div>
		<div class="row"><img src="dg1tp6-014.jpg"></div>
		<div class="row"><img src="dg1tp6-015.jpg"></div>
		<div class="row"><img src="dg1tp6-018.jpg"></div>
		<div class="row"><img src="dg1tp6-019.jpg"></div>

		<div class="row">
			<div class="four columns offset-by-four"><img src="departure_cd.png"></div>
		</div>

		<div class="row">
			<div class="six columns offset-by-three"><img src="dg1tp6-anim.gif"></div>
		</div>


	</article>


	<?php include '../block_foot.php'; ?>


	</div>

</body>
</html>