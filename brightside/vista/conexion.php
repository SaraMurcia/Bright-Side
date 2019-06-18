<?php
try {
	$pdo = new PDO('mysql:host=localhost;dbname=brightside', 'root', '');
} catch (PDOException $e) {
	print "ERROR";
	die(); 
}