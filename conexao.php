<?php
    $host = "localhost"; 
    $user = "root"; //a forma de acesso padrão é essa
    $pass = ""; //não tem senha
    $dbname = "registro";
    $port = 3306; //porta do MySQL

    $conexao = new PDO("mysql:host=$host;port=$port;dbname=$dbname;user=$user;pass=$pass"); //port irrelevante e ao que parece PDO é usado para orientação a objetos - Pra lembrar depois
?>