<?php

require ('config.php');

$user = new Methods();
$us = new Pacientes();
$ex = new Exames();


foreach ($user->retornaPacientes() as $row){
    echo $row['nome_p'] . ' data de nascimento - '. $row['nasc_p'] . '<br>';
}
var_dump($user);

echo __LINE__;
echo '<hr>';

foreach ($ex->retornaExame() as $e){
    echo $e['nome_e'] . '<br>';
}



// $con = new Conn();
// $con = $con->getConn();
// var_dump($con);
