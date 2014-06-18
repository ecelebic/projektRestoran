<?php
include_once '../konfiguracija.php';

//ovdje definiramo vezu na bazu pomoći PHP Data Object  (http://www.php.net/manual/en/book.pdo.php)
$pdo=new PDO("mysql:host=" . $server . ";dbname=" . $baza,$korisnik,$lozinka);
$pdo->exec("set names utf8;");

// prvo pripremimo upit, umjesto konkretnih vrijednosti postavljamo :ključ koji mora odgovarati ključu u $_POST
$izraz = $pdo->prepare("delete from narudzba where sifra=:sifra");
//pripremljeni upit izvedemo (ovaj puta prosljeđujemo $_GET u zagradi jer sifru šaljemo kao parametar veze ?sifra=XX)
$izraz->execute($_GET);
//Izvedeni upit je odradio update i možemo se vratiti na pregled svih autora
header("location: index.php");