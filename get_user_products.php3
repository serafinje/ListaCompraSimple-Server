<?php 
//Esto es un comentario 
header("Content-type: text/xml");

$barcode =  $_REQUEST["barcode"];

$link = mysql_connect("fdb2.runhosting.com", "974470_lcsimple","lcsimple");
mysql_select_db("974470_lcsimple",$link);

$name = 'Nombre';
$type = 'Tipo';
$price = 'Precio';


echo '<product>';
echo '<name>'.$name.'</name>';
echo '<type>'.$type.'</type>';
echo '<price>'.$price.'</price>';
echo '<barcode>'.$barcode.'</barcode>';
echo '</product>';

  
?> 
