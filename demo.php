//Prima di tutto devi capire che per far funzionare questa demo hai bisogno di vari file che trovi nella pagina principale cioè class-http-request.php e functions.php

<?php


//connessione mysql


//classe utile da integrare
require 'class-http-request.php';

$api = "bot";
$api .="111111111akskfiwkcjakckaoekfiakkwkzk";
global $api;

$content = $_POST['input'];
$update = json_decode($content, true);


$chatID = $update["message"]["chat"]["id"];
$userID = $update["message"]["from"]["id"];
$msg = $update["message"]["text"];
$username = $update["message"]["chat"]["username"];
$nome = $update["message"]["chat"]["first_name"];

global $msg;
include("functions.php"); 



//controllo utente se già salvato nel database ed eventuale aggiunta se non presente






if($msg == "INDIETRO")
{
$msg = "/menu";
}

//comandi definiti
switch ($msg)
{

case '/start':
case '/menu':
menu($chatID);
break;

}

//include vari

//funzioni varie

function menu($chatID)
{

//menù principale

$menu[] = array("voce 1");
$menu[] = array("voce 2", "voce 3");
$menu[] = array("voce 5");


$text = "MENU del BOT
Scegli cosa fare tra queste opzioni:";
sm($chatID, $text, $menu);
}



//creo un file test.json in cui salvo l'ultima chiamata inviata a me

$file = "test.json";
$f2 = fopen($file, 'w');
fwrite($f2, $content);
fclose($f2);
?>
