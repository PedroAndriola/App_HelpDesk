<?php
session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
  header('Location: index.php?login=erro2');
  exit; // opcional, para garantir que o script seja interrompido após o redirecionamento
}
