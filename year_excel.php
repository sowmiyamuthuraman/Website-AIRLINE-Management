<?php
include 'db1.php';
session_start();
$f=$_SESSION['y1'];

    //echo $ddate;

    $query = "SELECT employee_id,employee_name,leave_from,leave_to,reason_type FROM leave_request where  YEAR(leave_from)='$a' AND status='accept'";
    $header = '';
$data ='';

$export = mysql_query ($query ) or die ( "Sql error : " . mysql_error( ) );
$e1=mysql_num_rows($export);
    //echo $e1;

$fields = mysql_num_fields ( $export );

for ( $i = 0; $i < $fields; $i++ )
{
    $header .= mysql_field_name( $export , $i ) . "\t";
}

while( $row = mysql_fetch_row( $export ) )
{
    $line = '';
    foreach( $row as $value )
    {                                            
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value ='"' .(string) $value . '"' . "\t";
        }
        $line .=(string)$value;
    }
    $data .= trim( $line ) . "\n";
}
$data = str_replace( "\r" , "" , $data );
//$data=$data;
if ( $data == "" )
{
    $data = "\nNo Record(s) Found!\n";                        
}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Passengers_list.xls");
header("Pragma: no-cache");
header("Expires: 0");
print_r($header);
print "\n";
print_r($data);

?>


            