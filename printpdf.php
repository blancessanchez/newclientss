<?php
	// include autoloader
	require_once 'dompdf/autoload.inc.php';

	$html= file_get_contents("pdf.blade.php");

	// reference the Dompdf namespace
	use Dompdf\Dompdf;

	// instantiate and use the dompdf class
	$dompdf = new Dompdf();
	$dompdf->loadHtml($html);



	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('Letter', 'portrait');

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));
?>