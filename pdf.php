<?php 
	require 'vendor/autoload.php';

	use Dompdf\Dompdf;

	$loader = new Twig_Loader_Filesystem('./');
	$twig = new Twig_Environment($loader);
	
	$dompdf = new Dompdf();
	
	$dompdf->setPaper('A4', 'portrait');

	$dompdf->load_html($twig->render('index.html'));
	$dompdf->render(); 
	$dompdf->stream("sample.pdf");

 ?>