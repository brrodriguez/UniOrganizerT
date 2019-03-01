<?php
	//Carga la vista de login
	include '../Functions/LibraryFunctions.php';
	require_once '../Twig/Autoloader.php';
	include '../Locates/Strings_Castellano.php';

	Twig_Autoloader::register();
	$loader = new Twig_Loader_Filesystem( '../templates');
	$twig = new Twig_Environment($loader, array('cache' =>  'cache','debug' =>  'true'));

	$template = $twig->loadTemplate('Login.html.twig');
	echo $template->render(array('strings' => $strings));
?>