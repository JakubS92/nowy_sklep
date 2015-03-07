<?php/*

Plik wyświetla pasek nawigacji u góry

Jest ładowany (include) z każdej pod strony po to aby nie przepisywać cały czas tego samego kodu 
do każdej podstrony

*/?>

<div class="topNaviagationLink"><a href="index.php">Strona główna</a></div>
<div class="topNaviagationLink"><a href="index.php?page=registration.php">Rejestracja</a></div>
<div class="topNaviagationLink">
	<?php 
	// jeśli jest zalogowany to wyświetl zamiast "zaloguj" - "wyloguj"
	if (isset($_SESSION['is_logged']))
		echo "<a href='index.php?page=logout.php'>Wyloguj</a>"; else
		echo "<a href='index.php?page=login.php'>Zaloguj</a>";
	?>
</div>
<div class="topNaviagationLink"><a href="index.php?page=add.php">Dodaj film</a></div>
<div class="topNaviagationLink"><a href="index.php?page=info.php">Informacje</a></div>