<?php

$jsonString = file_get_contents('php://input');
$json = json_decode($jsonString, true);
if ($json == null) {
    header("Status: 400 Bad Request");
    exit;
}

$to = "raul.babajev@gmail.com";

$title = "Teade kodulehelt " . $json["name"];
$message = "Nimi: " . $json["name"] . " Email: " . $json["email"] . " Telefon: " . $json["phone"] . " Sõnum: " . $json["message"];

mail($to, $title, $message);

