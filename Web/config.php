<?php
$conn_string = "host=ec2-54-243-92-68.compute-1.amazonaws.com"
        . " port=5432 "
        . "dbname=db93kjgd2n7fne"
        . " user=kpmvhjgotejcod"
        . " password=2d1760c22f24a75beed254ecb493f7d2f69994d4a78c7f91e6c672df9e27ff39";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully Khoa\n";
   }
?>