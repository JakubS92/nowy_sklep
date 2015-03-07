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
  <p>Tytuł: <b><?=$r['title']?></b></p>

  <p>Cena:  <b><?=$r['price']?></b>$</p>
 Opis:
  <blockquote><p> <?=$r['description']?></p>
  </blockquote>
</div>
<hr/>
<?php
// zakonczenie pętli
}
?>
