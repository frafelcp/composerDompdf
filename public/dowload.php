<?php

    use App\Template;
    use App\Pdf;

    // somewhere early in your project's loading, require the Composer autoloader
    // see: http://getcomposer.org/doc/00-intro.md
    require '../vendor/autoload.php';

    //Array de los datos
    $data = array(
        'name' => 'Felix Castro',
        'course' => 'Curso Basico de Laravel'
    );

    //inclusion de la clase
    require '../course/Template.php';
    require '../course/Pdf.php';

    //envio de los datos de la array por medio de la clase template
    $html = Template::render('pdf/certificado', $data);        

   //genreramos el pdf
   Pdf::render('certicado', $html);