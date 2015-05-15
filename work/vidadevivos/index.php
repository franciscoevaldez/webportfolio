<?php

// variable definitions
$wTitle = 'vida de vivos';
$workIndex = 12;

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
	Collectible booklets containing interviews to iconic Argentinian figures. “Rather than an introduction, this is an intromission” says the author, and that very spirit is present in the design. Unlike traditional editorials, the text just begins, no apologies and no warnings. This helped creating the idea of a continuous text along the entire collection.
	</p>';

	$wSideNotesEN = '<p>
	<strong>Year: </strong>2011<br/>
	Project developed for Cátedra Manela, Editorial. FADU - UBA
	</p>';

	$wDescriptionES = '<p>
	La colección se basó en la idea de un texto contínuo. A diferencia de los editoriales tradicionales, el texto se permite comenzar sin pedir permiso y terminar sin avisar. Esta decisión se inspiró en el caracter profundo e íntimo de los textos. «Más que una introducción, esto es una intromisión» dice la autora, y ése espíritu está presente en toda la colección.
	</p>';

	$wSideNotesES = '<p>
	<strong>Año: </strong>2011<br/>
	Proyecto desarrollado para la cátedra Manela de Editorial. FADU - UBA
	</p>';

	include '../block_header.php' ?>	

	<article id="work" class="row">

		<div class="row">
			<div class="six columns"><img src="vidadevivos-1.jpg"></div>
			<div class="six columns"><img src="vidadevivos-8.jpg"></div>
		</div>

		<div class="row">
			<div class="six columns"><img src="vidadevivos-2.jpg"></div>
			<div class="six columns"><img src="vidadevivos-3.jpg"></div>
		</div>

		<div class="row">
			<div class="six columns"><img src="vidadevivos-4.jpg"></div>
			<div class="six columns"><img src="vidadevivos-5.jpg"></div>
		</div>

		<div class="row">
			<div class="six columns"><img src="vidadevivos-6.jpg"></div>
			<div class="six columns"><img src="vidadevivos-7.jpg"></div>
		</div>

		<div class="row">
			<div class="six columns"><img src="vidadevivos-a1.gif"></div>
			<div class="six columns"><img src="vidadevivos-a2.gif"></div>
		</div>

		<div class="row">
			<div class="six columns offset-by-three"><img src="vidadevivos-a3.gif"></div>
		</div>

	</article>


	<?php include '../block_foot.php'; ?>


	</div>

</body>
</html>