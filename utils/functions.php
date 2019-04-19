<?php 
  require_once (__DIR__.'/../connection/conexao.php');
  
  function mysql_execute($sql){
    $con = connectar_db();

    $data = mysqli_query($con,$sql);
    $res = mysqli_fetch_all($data,MYSQLI_ASSOC);
    if(empty($res)) $res='{}';
    echo json_encode($res);
  }

  function findAll($table){
    $sql="SELECT * FROM $table";
     mysql_execute($sql); 
  }

  function findById($table,$id){
    $sql="SELECT * FROM $table WHERE id_cliente =$id";
    mysql_execute($sql);
  }


  function findByName($table,$name){
    $sql="SELECT * FROM $table WHERE nome LIKE'%$name%'";
    mysql_execute($sql);
  }
    
    //findAll('cliente');
  //findById('cliente',2);
 // findByName('cliente','lucas');
  
?>