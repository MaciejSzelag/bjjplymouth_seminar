<?php


echo "Welcome". $_SESSION['login']."<br/>"; // konto danej osoby

echo "Panel ADMINISTRACYJNY<br/>";
echo "<a href='hello.php'>Odswiez</a><br/>";
echo "<a href='hello.php?action=signOut'>Sign out</a><br/>";
?>