<?php
require_once 'Lcd.php';
require_once 'AccutypeKeyboard.php';
require_once 'JblSpeakers.php';
$lcd = new Lcd;
$accutype = new AccutupeKeyboad($lcd);
$jbl = new JblSpeakers($accutype);
echo $jbl->cost();
echo $jbl->description();

