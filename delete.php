<?php
session_start();
if(!$_SESSION["auth"]) header("Location: login.php");
require "db.php";
$stmt = $pdo->prepare("DELETE FROM recibos WHERE id = ?");
$stmt->execute([$_GET["id"]]);
header("Location: index.php");