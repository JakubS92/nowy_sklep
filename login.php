<!-- Formularz stworzony przy użyciu generatora ze strony:
http://www.webformgenerator.eu/webformgenerator.php
--> 
<h1>Logowanie</h1>
<div class="contentText">
<div class="TTWForm-container">

     <form class="TTWForm" method="post" >
          <div id="field1-container" class="field f_100">
               <label for="field1">
                    Podaj login
               </label>
               <input type="text" name="login" id="field1" required="required">
          </div>
          <div id="field3-container" class="field f_100">
               <label for="field3">
                    Podaj hasło
               </label>
               <input type="password" name="password" id="field3" required="required">
          </div>
          <div id="form-submit" class="field f_100 clearfix submit">
               <input type="submit" value="Zaloguj">
          </div>
     </form>
 
</div>

<?php
/*
Częśc odpowiedzialna za sprawdzenie danych logowania
*/

// jeśli która kolwiek ze zmiennych jest pusta = przerwij
if ( empty($_POST['login']) || 
     empty($_POST['password'])) 
  return;



$password = $_POST['password'];
$login = $_POST['login'];

// Wysyłanie zapytani do mysql
$query = $db->prepare("SELECT * FROM `users` WHERE `login`=? AND `password`=?;");
//Wykonaj
$query->execute(array($login, $password));

// sprawdzamy czy znalazło pasujący rekord
if ($query->fetchColumn() > 0) {
     // Ustawiamy dane sesji na zalogowanie
     $_SESSION['is_logged'] = true;
} else {
     echo "<script>alert('Błędne hasło lub login');</script>";
     return;
}
?>

<script>
// Jeśli wszystkie kroki przebiegły pomyślnie
// wyświetlamiy komunikat o pomyslnym logowaniu i przenosimy na inną stronę
alert('Zalogowałes się!');
document.location.href = "index.php";
</script>