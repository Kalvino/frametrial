<?php
require 'pdfcrowd.php';

try
{   
    // create an API client instance
    $client = new Pdfcrowd("calvino", "c59efa6a9b9ac3eb2e6698d3e78e559d");

    // convert a web page and store the generated PDF into a $pdf variable
    $pdf = $client->convertURI('http://localhost/frametrial/studentexamdisplay.php');

    // set HTTP response headers
    header("Content-Type: application/pdf");
    header("Cache-Control: no-cache");
    header("Accept-Ranges: none");
    header("Content-Disposition: attachment; filename=\"google_com.pdf\"");

    // send the generated PDF 
    echo $pdf;
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>



 
