<?php
/*
require('Modele\business\Fromage.php');
require('Modele\business\Pays.php');
require('Modele\business\Membre.php');
require('Modele\business\Avis.php');

use ClubFromage\Modele\business\Pays;
use ClubFromage\Modele\business\Fromage;
use ClubFromage\Modele\business\Membre;
use ClubFromage\Modele\business\Avis;*/

require 'Modele/Autoloader.php';
Autoloader::register();


$from1 = array("id"=>"1", "nom"=>"Camenbert", "pays"=>"France");
$Camen = new Modele\business\Fromage($from1);

$Pays1 = array("id"=>"1", "nom"=>"France");
$France = new Modele\business\Pays($Pays1);

$memb1 = array("id"=>"1");
$Hugo = new Modele\business\Membre($memb1);


echo $Camen->getNom();
echo '<br>';
echo $France->getNom();
echo '<br>';
echo $Hugo->getId();
