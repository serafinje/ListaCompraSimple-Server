<?php 
// http://127.0.0.1/ListaCompra/get_product.php3?barcode=1234556
header("HTTP/1.1 200 OK");
header("Content-type: text/plain");

$barcode =  $_REQUEST["barcode"];

$link = mysql_connect("fdb2.runhosting.com", "974470_lcsimple","lcsimple");
mysql_select_db("974470_lcsimple",$link);
$result=mysql_query("select * from products where barcode='".$barcode."'",$link);
$row = mysql_fetch_array($result);

$name = $row['name'];
$type = $row['type'];
$price = $row['price'];

/* Esto pa cuando usemos XML
echo '<product>';
echo '<name>'.$name.'</name>';
echo '<type>'.$type.'</type>';
echo '<price>'.$price.'</price>';
echo '<barcode>'.$barcode.'</barcode>';
echo '</product>';*/

mysql_close($link);

echo 'name='.$name.'\n';
echo 'type='.$type.'\n';
echo 'price='.$price.'\n';
echo 'barcode='.$barcode.'\n';
?> 
