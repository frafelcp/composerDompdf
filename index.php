<?php
    // somewhere early in your project's loading, require the Composer autoloader
    // see: http://getcomposer.org/doc/00-intro.md
    require 'vendor/autoload.php';

    // define('DOMPDF_ENABLE_AUTOLOAD', false);

    // include autoloader
    //require_once 'dompdf/dompdf/autoload.inc.php';

    // reference the Dompdf namespace
    use Dompdf\Dompdf;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml('hello world');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();