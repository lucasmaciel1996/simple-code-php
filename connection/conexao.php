<?php
  function connectar_db(){
    $host="172.17.0.3";
   $user ='root';
   $passwoord='Qu@d2018';
   $database='petshop';
   $con = mysqli_connect($host,$user,$passwoord,$database);
    mysqli_set_charset($con,'utf8');
   if($con){
       //echo "Conectado ".mysqli_get_host_info($con).PHP_EOL ;
       return $con;
   }else{
    echo "Error ".mysqli_connect_error().PHP_EOL;
   }
  }
   

?>   