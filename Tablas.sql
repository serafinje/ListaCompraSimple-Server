CREATE TABLE  `products` (
 `barcode` VARCHAR ( 20 ) NOT NULL , 
 `name` VARCHAR ( 100 ) NOT NULL , 
 `type` VARCHAR ( 50 ) , 
 `price` FLOAT NOT NULL , 
PRIMARY KEY (  `barcode` )
) TYPE = MYISAM ; 
