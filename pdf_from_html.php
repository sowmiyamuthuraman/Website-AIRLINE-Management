<?php
 // INCLUDE THE phpToPDF.php FILE
require("phpToPDF.php"); 

// PUT YOUR HTML IN A VARIABLE
$my_html="<HTML><head>
<style>
#main,td{
	padding-left:15px;
	padding-right:15px;
	border:1px;
}

</head>
</style>


<table style=\"border:1px;width:58%;\">
  <tr>
    <td><h3 style=\"align:right;\">  Your E-Ticket</h3><br></td>
    
  </tr>
  <tr>
    <td><p>
	<h5 >
To fly easy please present the E-Ticket with a valid photo identification at the airport and check-in counter. <br>
The check-in counters are open 3 hours prior to departure and close strictly 2 hours prior to departure. </h5>
</p></td>
    
  </tr>
</table>
</HTML>




";
// SET YOUR PDF OPTIONS
// FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'save',
  "save_directory" => '',
  "file_name" => 'html_01.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);

// OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
echo ("<a href='html_01.pdf'>Download Your PDF</a>");
?>