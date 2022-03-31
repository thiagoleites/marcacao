<?php
require 'config.php';
include __DIR__ . "/inc/header.php";

$exames = new Exames;
$pacientes = new Pacientes;

if (!isset($_GET['pagina']) || $_GET['pagina'] == '') {
  include_once "inc/home.php";
} else {
  $pagina = strip_tags($_GET['pagina']);
  if (file_exists($pagina . '.php')) {
    include_once $pagina . '.php';
  } else {
    echo '<section class="section is-main-section">    
    <div class="notification is-danger">
      <strong>Ocorreu um erro no sistema:</strong> Não foi possivel incluir o controlador
      <br/>
      Verifique o nome e tente novamente.
    </div>
  </section>';
  }
}

include __DIR__ . "/inc/footer.php";
