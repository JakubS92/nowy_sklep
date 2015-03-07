<!-- Formularz stworzony przy użyciu generatora ze strony:
http://www.webformgenerator.eu/webformgenerator.php
--> 
<h1>Filmy</h1>
<hr/>
<?php 
// Zapytanie sql
$sql = 'SELECT * FROM `movies`';
// Wykonaj zapytanie
$q = $db->query($sql);
// Wstaw do pętli otrzymaną tablicę
while ($r = $q->fetch()){


     ?>
<div class="contentText">
  <p>Tytuł: <?=$r['title']?></p>

  <p>Cena:  <?=$r['price']?>$</p>
 Opis:
  <blockquote><p> <?=$r['description']?></p>
  </blockquote>
</div>
<hr/>
<?php
// zakonczenie pętli
}
?>
