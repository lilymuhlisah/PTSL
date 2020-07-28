<?php

use Dompdf\Dompdf;

class PdfGenerator
{
    public function generate($html, $filename)
    {
        //include autoloader
        require_once dirname(__FILE__) . '/autoload.inc.php';

        //instantiate and use the dompdf class
        $dompdf = new DOMPDF();
        $dompdf->load_html($html);

        //setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        //render the HTML as PDF
        $dompdf->render();

        //output the generated PDF to browser
        $dompdf->stream($filename . '.pdf', array("Attachment" => 0));
    }
}
