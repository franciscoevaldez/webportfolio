<?php

// variable definitions
$wTitle = 'aca 110&deg; aniversario';
$workIndex = 0;

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
	The Automovil Club Argentino (ACA) is the biggest auto club in 
	Argentina and one of the most respected and traditional institutions 
	in the region. In celebration of their 110th anniversary, a full 
	communication campaign was designed. </p>
	<p>At the center piece of the design is the totem, one of the 
	club’s most iconic elements present at every office and service 
	station along the entire country.</p>';

	$wSideNotesEN = '<p>
	<strong>Agency: </strong> Luna + the brandbean <br/>
	<strong>Year: </strong>2013<br/>
	<strong>People Involved: </strong>Horacio A. Agulla, Santiago Spigariol, 
	Hilary Strong, Sebasti&aacute;n Barrena
	<br/> <br/>
	Project developed for Luna and the brandbean.
	</p>';

	$wDescriptionES = '<p>
	Con motivo del 110º aniversario del Automóvil Club Argentino, se 
	diseñó una campaña de vía pública y de comunicación.
	</p>
	<p>El diseño surgió a partir del característico tótem que marca la 
	ubicación de las sedes del club a lo largo y ancho del país.</p>';

	$wSideNotesES = '<p>
	<strong>Agencia: </strong> Luna + the brandbean <br/>
	<strong>Año: </strong>2013<br/>
	<strong>Realizado junto a: </strong>Horacio A. Agulla, Santiago Spigariol, 
	Hilary Strong, Sebasti&aacute;n Barrena
	<br/> <br/>
	Trabajo realizado para Luna y the brandbean.
	</p>';

	include '../block_header.php' ?>	

	<article id="work" class="row">

		<div class="row"><img src="aca_bh_totem.png"></div>

		<div class="row"><img src="aca_bh_totem2.png"></div>

		<div class="row"><img src="aca_bh_foto_delfino.jpg"></div>

		<div class="row"><img src="aca_bh_publiobra_01.jpg"></div>

		<div class="row"><img src="fb_tbb_detalle.jpg"></div>

		<div class="row"><img src="aca_bh_diario_01.jpg"></div>

		<div class="row"><img src="aca_bh_frente_01.jpg"></div>

		<div class="row"><img src="aca_bh_web.png"></div>

	</article>


	<?php include '../block_foot.php'; ?>


	</div>

</body>
</html>