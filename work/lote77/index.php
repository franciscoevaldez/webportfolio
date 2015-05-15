<?php

// variable definitions
$wTitle = 'lote 77';
$workIndex = 15;

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
	Lote 77 is a play about the argentinian man, its prejudices, stereotypes and the conflicts that sorround it. Directed by Marcelo Mininno, with the performances of Andrés DAdamo, Lautaro Delgado and Rodrigo González Garrillo. 
	</p>';

	$wSideNotesEN = '<p>
	<strong>Year: </strong>2009<br/>
	Project developed for Cátedra Gabriele, Diseño Gráfico. FADU - UBA
	</p>';

	$wDescriptionES = '<p>
	Lote 77 es una obra de teatro que trata la temática del hombre argentino, los prejuicios, estereotipos y conflictos que lo rodean. Dirigida por Marcelo Mininno, con Andrés DAdamo, Lautaro Delgado y Rodrigo González Garrillo.
	</p>';

	$wSideNotesES = '<p>
	<strong>Año: </strong>2009<br/>
	Proyecto desarrollado para la cátedra Gabriele de Diseño Gráfico. FADU - UBA
	</p>';

	include '../block_header.php' ?>	

	<article id="work" class="row">

		<div class="row">
			<div class="six columns"><img src="afiche.png"></div>
			<div class="six columns"><img src="exposicion.png"></div>
		</div>

	</article>


	<?php include '../block_foot.php'; ?>


	</div>

</body>
</html>