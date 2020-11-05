<?php 
 $servername = "localhost" ;
 $username = "root";
 $password = "";
 $database = "recode_sergio"; 

 //Criando Conexão 

 $connect = mysqli_connect ($servername,$username,$password,$database);
//  $connect ->query("set names utf8");
 if(!$connect)
 {
     die("A conexão do BD falhou:".mysqli_connect_error());
 }

?>