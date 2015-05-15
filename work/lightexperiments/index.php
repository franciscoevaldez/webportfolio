<?php

// variable definitions
$wTitle = 'light experiments';
$workIndex = 9;

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
	The project consisted of an element capable of filtering sunlight. Different shapes and capabilities where explored and these are the results. Inspiration was taken from the amazing works of James Turrell and other great artists.
	</p>';

	$wSideNotesEN = '<p>
	<strong>Year: </strong>2007<br/>
	Project developed for Cátedra Longinotti, Morfología. FADU - UBA
	</p>';

	$wDescriptionES = '<p>
	Tomando inspiración de las obras de James Turrell y otros grandes artistas, se partió de la idea de un objeto secuencial capaz de filtrar selectivamente los rayos lumínicos provenientes del sol y así ambientar un espacio interior. 
	</p>';

	$wSideNotesES = '<p>
	<strong>Año: </strong>2007<br/>
	Proyecto desarrollado para la cátedra Longinotti de Morfología. FADU - UBA
	</p>';

	include '../block_header.php' ?>	

	<article id="work" class="row">

		<div class="row"><img src="m2-tp6-foto-001.jpg"></div>

		<div class="row">
			<style></style>
			<div class='embed-container'><iframe src='https://player.vimeo.com/video/125182112?color=ffffff&title=0&byline=0&portrait=0' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		</div>

		<div class="row">
			<div class="six columns"><img src="m2-tp6-foto-002.jpg"></div>
			<div class="six columns"><img src="m2-tp6-foto-011.jpg"></div>
		</div>

		<div class="row">
			<div class="six columns"><img src="m2-tp6-foto-005.jpg"></div>
			<div class="six columns"><img src="m2-tp6-foto-006.jpg"></div>
		</div>

		<div class="row"><img src="m2-tp6-foto-004.jpg"></div>
		<div class="row"><img src="m2-tp6-foto-007.jpg"></div>
		<div class="row"><img src="m2-tp6-foto-008.jpg"></div>
		<div class="row"><img src="m2-tp6-foto-010.jpg"></div>
		<div class="row"><img src="m2-tp6-foto-012.jpg"></div>
		<div class="row"><img src="m2-tp6-foto-013.jpg"></div>
		<div class="row"><img src="m2-tp6-foto-014.jpg"></div>
		<div class="row"><img src="m2-tp6-foto-015.jpg"></div>
		<div class="row"><img src="m2-tp6-foto-016.jpg"></div>

		<div class="row">
			<div class="six columns"><img src="m2-tp6-rel1.jpg"></div>
			<div class="six columns"><img src="m2-tp6-rel2.jpg"><img src="m2-tp6-rel2.jpg"></div>
		</div>

		<div class="row"><img src="m2-tp6-001.jpg"></div>
		<div class="row"><img src="m2-tp6-002.jpg"></div>
		<div class="row"><img src="m2-tp6-008.jpg"></div>
		<div class="row">
			<div class="six columns"><img src="m2-tp6-003.jpg"></div>
			<div class="six columns"><img src="m2-tp6-007.jpg"></div>
		</div>

		<div class="row">
			<div class="six columns"><img src="m2-tp6-005.jpg"></div>
			<div class="six columns"><img src="m2-tp6-004.jpg"></div>
		</div>
		

		<div class="row">
			<div class="six columns"><img src="m2-tp6-anim-edit1.gif"></div>
			<div class="six columns"><img src="m2-tp6-anim-edit2.gif"></div>
		</div>

		<div class="row">
			<div class="six columns"><img src="m2-tp6-anim-edit3.gif"></div>
			<div class="six columns"><img src="m2-tp6-anim-edit4.gif"></div>
		</div>

		<div class="row">
			<img src="m2tp6-timelapse2.gif">
		</div>

	</article>


	<?php include '../block_foot.php'; ?>


	</div>

</body>
</html>