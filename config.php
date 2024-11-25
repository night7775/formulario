<?php   
  
  $dbHost = 'Localhost';
  $dbusername = 'root';
  $dbName = 'formulario-gustavo';
 
  $conexao = new mysqui($dbHost,$dbusername,$dbName )


    if ($conexao ->connect_erro)
    {
        echo"erro";
    }
    else 
    {
        echo"conexao efutuada com sucesso";
    }





?>