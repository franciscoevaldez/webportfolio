<?php

// variable definitions
$wTitle = 'science and technology';
$workIndex = 11;

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
	Infographic showing the most relevant facts and characters of Argentinian science and technology. As a starting point, I took the signing and style used to explain molecular unions. That way, I was able to explain influence and connections between scientists and discoveries. 
	</p>';

	$wSideNotesEN = '<p>
	<strong>Year: </strong>2010<br/>
	Project developed for Cátedra Gabriele, Diseño Gráfico. FADU - UBA
	</p>';

	$wDescriptionES = '<p>
	Infografía que une los hechos y personajes más importantes de la ciencia y la tecnología Argentina. Tomando como punto de partida el lenguaje gráfico de las uniones moleculares se muestran las relaciones e influencias entre figuras y descubrimientos destacados de los últimos dos siglos. 
	</p>';

	$wSideNotesES = '<p>
	<strong>Año: </strong>2010<br/>
	Proyecto desarrollado para la cátedra Gabriele de Diseño Gráfico. FADU - UBA
	</p>';

	include '../block_header.php' ?>	

	<article id="work" class="row">

		<div class="row"><img src="info-bh-01.jpg"></div>

		<div class="row">
			<div class="six columns"><img src="info-bh-02.png"></div>
			<div class="six columns"><img src="info-bh-03.png"></div>
		</div>

		<div class="row">
			<div class="six columns"><img src="info-bh-04.png"></div>
			<div class="six columns"><img src="info-bh-05.png"></div>
		</div>

		<div class="row"><img src="info-bh-montaje1.jpg"></div>

	</article>


	<?php include '../block_foot.php'; ?>


	</div>

</body>
</html>