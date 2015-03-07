<?php
// start sesji
// dzięki sesji będziemy mogli wiedzieć czy ktoś się zalogował czy nie
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="CSS_IMG/barrensavannah.css" />
        <title>Sklep internetowy z filmami</title>
    </head>
    <body>
        <div id="page">
            <?php
            		// Złączamy pasek nawigacji
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

            
            ?>

                <div id="footer">
                    Mistrzowie programowania :
                    Jakub Stawowczyk & Patryk Rusin & Damian Kowalik
                </div>


            </div>
        </div>

    </body>
</html>