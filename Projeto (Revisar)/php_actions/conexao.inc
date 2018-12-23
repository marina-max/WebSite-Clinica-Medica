<?php
// conexao db

$conexao = mysqli_connect('localhost','root', '','clinica');

if (!$conexao){
    die("Error: ".  mysql_connect_error());
}


?>