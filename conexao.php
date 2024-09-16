<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "cunha";

$conecta = mysqli_connect($host,$usuario,$senha,$banco);

if(!$conecta){
    die("erro ao conectar ao banco de dados". mysqli_connect_error());
}