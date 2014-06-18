<?php
include_once '../konfiguracija.php';

//ovdje definiramo vezu na bazu pomoći PHP Data Object  (http://www.php.net/manual/en/book.pdo.php)
$pdo=new PDO("mysql:host=" . $server . ";dbname=" . $baza,$korisnik,$lozinka);
$pdo->exec("set names utf8;");

$izraz = $pdo->prepare("select count(narudzba) from narudzba where gost=:sifra");

$izraz->execute($_GET);
$ukupno=$izraz->fetchColumn();

if($ukupno==0){
	$izraz = $pdo->prepare("delete from gost where sifra=:sifra");
	$izraz->execute($_GET);
	header("location: index.php");
}else{
	header("location: obavijest.php");
}

