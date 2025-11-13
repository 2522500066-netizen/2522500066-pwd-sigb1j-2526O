<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$sesnim = $_SESSION["sesnim"] ?? "";
$sesnama = $_SESSION["txtnamalengkap"] ?? "";  
$sestempatlahir = $_SESSION["txttempatlahir"] ?? "";
$sestanggallahir = $_SESSION["txttanggallahir"] ?? "";
$seshobi = $_SESSION["txthobi"] ?? "";
$sespasangan = $_SESSION["txtpasangan"] ?? "";
$sespekerjaan = $_SESSION["txtpekerjaan"] ?? "";
$sesnamaortu = $_SESSION["txtnamaortu"] ?? "";
$sesnamakakak = $_SESSION["txtnamakakak"] ?? "";
$sesnamaadik = $_SESSION["txtnamaadik"] ?? "";

?>