<?php
header("HTTP/1.1 200 OK");
header("Content-type: text/xml");

$barcode =  $_REQUEST["barcode"];
$name =  $_REQUEST["name"];
$price =  $_REQUEST["price"];
$type =  $_REQUEST["type"];
//$user =  $_REQUEST["user"];

$link = mysql_connect("fdb2.runhosting.com", "974470_lcsimple","lcsimple");
mysql_select_db("974470_lcsimple",$link);

if ($barcode != "" && $name!="" && price!="") {
    $result=mysql_query("select * from products where barcode='".$barcode."'" , $link);
    if (mysql_num_rows($result)==0) {
        $result = mysql_query("insert into products(barcode,name,price,type) values( '".$barcode."','".$name."','".$price."','".$type."');" , $link);
    } else {
        $result = "Duplicado";
    }
}

echo '<ack>';
echo '<code>'.$result.'</code>';
echo '</ack>';

?> 
