<?php
//Carga la vista de registro
	include '../Functions/LibraryFunctions.php';
	require_once '../Twig/Autoloader.php';

	Twig_Autoloader::register();
	$loader = new Twig_Loader_Filesystem( '../templates');
	$twig = new Twig_Environment($loader, array('cache' =>  'cache','debug' =>  'true'));

	$template = $twig->loadTemplate('Registro.html.twig');
	echo $template->render(array());
?>