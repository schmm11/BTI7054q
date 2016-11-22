<?php
session_start();

if(!isset($_COOKIE["language"])) setcookie("language", "de", time()+60*60*24*60);




echo '<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="mainstyle.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Webshop</title>
  </head>
  
  <body>
    <div class="container">
    <header></header>
'
?>