<?php
    // //Declarando variáveis e atribuindo valores
    // $host_name = "localhost";
    // $host_user = "root";
    // $host_password = "";
    // $database_name = "ads_manha";

    //AdS22Manha!

    // //Função de conexão com o Banco de dados
    // //Primeiramente declarar variável e posteriormente adcionar a função de conexão
    // $conexao = mysqli_connect($host_name, $host_user, $host_password, $database_name);
    //Link para acesso ao banco de dados remoto
    //https://phpmyadmin.locaweb.com.br/

    //Exemplo com constantes
    define('HOSTNAME','ads_manha2a.mysql.dbaas.com.br');
    define('HOSTUSER','ads_manha2a');
    define('HOSTPASSWORD', 'AdS22Manha!');
    define('DATABASENAME','ads_manha2a');
    
    $conexao = mysqli_connect(HOSTNAME,HOSTUSER,HOSTPASSWORD,DATABASENAME);

    //USO DIRETO SEM VARIÁVEIS OU CONSTANTES

    // $conexao = mysqli_connect('localhost','root','','ads_manha');

