<?php
include_once '../konfiguracija.php';
$pdo=new PDO("mysql:host=" . $server . ";dbname=" . $baza,$korisnik,$lozinka);
$pdo->exec("set names utf8;");

$izraz = $pdo->prepare("select count(jelo) from stavka_narudzbe where jelo=:sifra");

$izraz->execute($_GET);
$ukupno=$izraz->fetchColumn();

if($ukupno==0){
	$izraz = $pdo->prepare("delete from jelo where sifra=:sifra");
	$izraz->execute($_GET);
	header("location: index.php");
}else{
	header("location: obavijest.php");
}

