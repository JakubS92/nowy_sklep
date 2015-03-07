<!-- Formularz stworzony przy użyciu generatora ze strony:
http://www.webformgenerator.eu/webformgenerator.php
--> 
<h1>Rejestracja</h1>
<div class="contentText">
<div class="TTWForm-container">

     <form class="TTWForm" method="post" >
          <div id="field1-container" class="field f_100">
               <label for="field1">
                    Podaj login
               </label>
               <input type="text" name="login" id="field1" required="required">
          </div>
          <div id="field5-container" class="field f_100">
               <label for="field5">
                    Podaj email
               </label>
               <input type="text" name="email" id="field5" required="required">
          </div>
          <div id="field3-container" class="field f_100">
               <label for="field3">
                    Podaj hasło
               </label>
               <input type="password" name="password" id="field3" required="required">
          </div>
          <div id="field4-container" class="field f_100">
               <label for="field4">
                    Powtórz hasło
               </label>
               <input type="password" name="password_repeat" id="field4" required="required">
          </div>
          <div id="form-submit" class="field f_100 clearfix submit">
               <input type="submit" value="Zarejestruj">
          </div>
     </form>
     <div>
</div>

<?php
/*
Częśc odpowiedzialna za rejestracja użytkownika i zapis do bazy
*/

// jeśli która kolwiek ze zmiennych jest pusta = przerwij
if ( empty($_POST['login']) || 
     empty($_POST['email']) || 
     empty($_POST['password_repeat']) || 
     empty($_POST['password'])) 
  return;

// jeśli hasła nie takie same = przeriwj
if ($_POST['password_repeat'] !== $_POST['password'])
{
     // wyświetl info ze hasło nie takie same
     echo "<script>alert('Hasła nie są takie same');</script>";
     return;
}

$password = $_POST['password'];
$login = $_POST['login'];
$email = $_POST['email'];

// Zapis do bazy danych
// zapis po kolei (ID, login, email, passwod)
$query = $db->prepare("INSERT INTO `users` VALUES (NULL,?,?,?);");
$query->execute(array($login, $email, $password));

// Ustawiamy dane sesji na zalogowanie
$_SESSION['is_logged'] = true;
?>

<script>
// Jeśli wszystkie kroki przebiegły pomyślnie
// wyświetlamiy komunikat o pomyslnej rejestracji i przenosimy na inną stronę
alert('Załozyłeś konto!');
document.location.href = "index.php";
</script>