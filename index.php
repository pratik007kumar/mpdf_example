<?php


set_include_path($_SERVER['DOCUMENT_ROOT'] .'/mpdf/'); 

require_once('./mpdf60/mpdf.php');

$n = 0;
$mpdf=new mPDF();

 
  
 $html1 .= '<table border="1"><tr><td>test</td></tr></table>';

 $mpdf->WriteHTML($html1);
 $mpdf->Output('filename.pdf','D');
?>