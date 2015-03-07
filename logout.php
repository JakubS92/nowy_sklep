<?php
// kasowanie wszystkich danych sesji
$_SESSION = array();

session_destroy();

// Przekierowanie na stronę główną
?>
<script>
alert('Wylogowałeś się!');
document.location.href = "index.php";
</script>