<?php
    namespace App;

    // reference the Dompdf namespace
    use Dompdf\Dompdf;

    class Pdf
    {
        public static function render($file, $html)
        {
            // instantiate and use the dompdf class
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);

            // Render the HTML as PDF
            $dompdf->render();

            // Output the generated PDF to Browser
            $dompdf->stream("$file.pdf");
        }
    }