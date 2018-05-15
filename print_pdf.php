<?php
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

ob_start();
require_once '';
$html = ob_clean();


$html2pdf = new Html2Pdf();
$html2pdf->writeHTML('');
$html2pdf->output();



