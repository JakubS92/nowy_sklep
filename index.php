<?php
// start sesji
// dzięki sesji będziemy mogli wiedzieć czy ktoś się zalogował czy nie
session_start();
// Na internecie jest instrukcja jak łączyć się z bazą przez PDO 
 $db = new PDO('mysql:host=localhost;dbname=s168295;charset=utf8', "s168295", "FWRXvNNJ");

?>
<!-- 

Szablon strony pobrany z 
http://www.quackit.com/html/templates/simple_website_templates.cfm

-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="CSS_IMG/barrensavannah.css" />
        <title>Sklep internetowy z filmami</title>
    </head>
    <body>
        <div id="page">
            <?php
            		// Załączamy pasek nawigacji
                    include("navigation.php");
            ?>
        </div>
        <div id="mainPicture">
            <div class="picture">
                <div id="headerTitle">Sklep z filmami</div>
                <div id="headerSubtext"> Podtytuł </div>
            </div>
        </div>
        <div class="contentBox">
            <div class="innerBox">

            <?php

            // odczytujemy jaką stronę ma załadować

            // jeśli zmianna jest pusta (parametr $_GET nie został ustawiony np. samo index.php bez index.php?page=login.php)

            if (isset($_GET['page']))
            	$page = $_GET['page']; else
            	// jeśli nie jest zdefinowany to załaduj stronę domyślną
            	$page = "movies.php";

            	include($page);
            ?>

                <div id="footer">
                    Mistrzowie programowania :
                    Jakub Stawowczyk & Patryk Rusin & Damian Kowalik
                </div>


            </div>
        </div>

    </body>
</html>