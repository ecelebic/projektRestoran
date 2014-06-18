<?php
include_once 'konfiguracija.php';
session_start();
session_destroy();
header("Location: " . $putanja . "index.php");