<?php

// variable definitions
$wTitle = 'portlebay';
$workIndex = 1;

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
	Portlebay is a young company that elaborates flavoured popcorn. 
	Right from the start the brand had to reflect their uplifting 
	spirits and a fresh outlook on snacks. The project was incredibly 
	fun and spanned from naming and visual design to POP, packaging 
	design and follow-up of the printing process. </p>';

	$wSideNotesEN = '<p>
	<strong>Agency: </strong> the brandbean <br/>
	<strong>Year: </strong>2012<br/>
	<strong>People Involved: </strong>Santiago Spigariol, Hilary Strong, Daniela Raskovsky.
	<br/> <br/>
	Project developed for the brandbean.
	</p>';

	$wDescriptionES = '<p>
	Portlebay es un jóven emprendimiento británico dedicado a la 
	producción de pochoclo saborizado. El proyecto incluyó desde el 
	naming hasta el diseño de la identidad visual, POP, el diseño del 
	packaging y el seguimiento de la producción gráfica.
	</p>';

	$wSideNotesES = '<p>
	<strong>Agencia: </strong> Luna + brandbean <br/>
	<strong>Año: </strong>2012<br/>
	<strong>Realizado junto a: </strong>Santiago Spigariol, Hilary Strong, Daniela Raskovsky.
	<br/> <br/>
	Trabajo realizado en the brandbean.
	</p>';

	include '../block_header.php' ?>	

	<article id="work" class="row">

		<div class="row"><img src="pb_apertura_1.jpg"></div>

		<div class="row"><img src="pb_pack1_krack.jpg"></div>

		<div class="row"><img src="pb_pack2_cheese.jpg"></div>

		<div class="row"><img src="pb_pack3_wasabi.jpg"></div>

		<div class="row"><img src="pb_pack4_chili.jpg"></div>

		<div class="row"><img src="pb_pack5_bacon.jpg"></div>

		<div class="row"><img src="pb_crop1.jpg"></div>

		<div class="row"><img src="pb_crop2.jpg"></div>

		<div class="row"><img src="pb_bhextras.png"></div>

		<div class="row"><img src="portlebay_logo.png"></div>

		<div class="row"><img src="pb_brand1.jpg"></div>

		<div class="row"><img src="pb_papeleria1.jpg"></div>

	</article>


	<?php include '../block_foot.php'; ?>


	</div>

</body>
</html>