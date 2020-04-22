<?php
include_once "./dompdf/autoload.php";
$CargoSupervisor=$row['CARGO_SUP'];
$code='aquí va el html <tr>
        <td></td>
        <td class='ConBorde'>Cargo:</td>
        <td colspan='5' class='ConBorde'>".$CargoSupervisor."</td></td>
    </tr>'
// se crea una nueva instancia al DOMPDF
$dompdf = new Dompdf();
// se carga el codigo html
$dompdf->load_html(utf8_decode($code));
// aumentamos memoria del servidor si es necesario
ini_set("memory_limit","50M"); 
// lanzamos a render
$dompdf->render();
// guardamos a PDF
$dompdf->stream("PA03-PR04-F02.pdf");
?>