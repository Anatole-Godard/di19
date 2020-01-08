<?php
session_start();

$_SESSION['maSession'] = array(
  'Organisation' => 'CESI'
  ,'Nom' => 'Brandicourt'
  ,'Prenom' => 'Sylvain'
);

var_dump($_SESSION);
