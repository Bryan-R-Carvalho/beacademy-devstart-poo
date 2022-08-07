<?php
include 'vendor/autoload.php';

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>Ola, estou aprendendo PHP :) </h1>' . $html);

$dompdf->render();
$dompdf->stream();