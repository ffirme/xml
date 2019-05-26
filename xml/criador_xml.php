<?php

$conn = new SQLite3('database.db');
$query = "Select * from user";
$stmt = $conn->prepare($query);
$result = $stmt->execute();

$xml = "<?xml version='1.0' econding='UTF-8'>\n\n";

$xml .= "<usuarios>\n";

while($row = $result->fetchArray(SQLITE3_ASSOC))
{
	$xml .= "       ";
	$xml .= "<usuario>\n";
	$xml .= "		";
	$xml .= "<nome>".$row['name']."</nome>\n";
	$xml .= "		";
	$xml .= "<email>".$row['email']."</email>\n";
	$xml .= "		";
	$xml .= "<active>".$row['active']."</active>\n";
	$xml .= "       ";
	$xml .= "</usuario>\n";
}

$xml .= '</usuarios>';

$arquivo = fopen('xml_usuarios'.'_'.date('d-m-y').'.xml', 'w+');
$escrever = fwrite($arquivo, $xml);
fclose($arquivo);
