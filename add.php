<?php
// Sprawdzanie czy użytkownik jest administratorem

if (!isset($_SESSION['is_admin']))
{
     echo "<script>alert('Dostęp tylko dla administratorów');</script>";
     return;
}
?>

<!-- Formularz stworzony przy użyciu generatora ze strony:
http://www.webformgenerator.eu/webformgenerator.php
--> 
<h1>Dodawanie nowego filmu</h1>
<div class="contentText">
<div class="TTWForm-container">

     <form class="TTWForm" method="post" >
          <div id="field1-container" class="field f_100">
               <label for="field1">
                    Podaj tytuł filmu
               </label>
               <input type="text" name="title" id="field1" required="required">
          </div>
          <div id="field5-container" class="field f_100">
               <label for="field5">
                    Podaj opis
               </label>
               <textarea style="width: 599px;" name="description" id="field5" required="required"></textarea> 
          </div>
          <div id="field3-container" class="field f_100">
               <label for="field3">
                    Podaj cene
               </label>
               <input type="number" name="price" id="field3" stepby="0.01" required="required">
          </div>
          <div id="form-submit" class="field f_100 clearfix submit">
               <input type="submit" value="Dodaj nowy film">
          </div>
     </form>
     <div>
</div>

<?php
/*
Częśc odpowiedzialna za rejestracja użytkownika i zapis do bazy
*/

// jeśli którakolwiek ze zmiennych jest pusta = przerwij
if ( empty($_POST['title']) || 
     empty($_POST['price']) || 
     empty($_POST['description'])) 
  return;


$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];

// Zapis do bazy danych
$query = $db->prepare("INSERT INTO `movies` VALUES (NULL,?,?,?);");
$query->execute(array($title, $description, $price));

?>

<script>
// Jeśli wszystkie kroki przebiegły pomyślnie
// wyświetlamiy komunikat o pomyslnym dodaniu filmu i przenosimy na inną stronę
alert('Dodałeś film!');
document.location.href = "index.php";
</script>