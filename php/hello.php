<?php
session_start()//$_SESSION['nazwa'] - wartosc;

?> 
<html>
<h1>
  <?php
    if(isset($_GET['action']) && $_GET['action'] == "signOut" )
    {
        $_SESSION['signed'] = 0;
        session_destroy();
        echo " You are loged out"; // konto danej osoby
    }
  
    if((isset($_POST['login']) && isset($_POST['password'])) || $_SESSION['signed'] == 1)
    {
       
       if((!empty($_POST['login']) && !empty($_POST['password'])) || $_SESSION['signed'] == 1)
       {
          if($_SESSION['signed'] == 0)
          {
            $login =  filter_var($_POST['login'], FILTER_SANITIZE_STRING);
            $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
          }
          if(($login == "Maciek" && $password == "abcd") || $_SESSION['signed'] == 1){// powinny byc dane z bazy danych

            if($_SESSION['signed'] == 0)
            {
                // $_SESSION['login'] = $login;
                $_SESSION['login'] = $login;
              }
        
              include("logContent.php");
              $_SESSION['signed'] = 1;
           
          }else{
              echo "Incorrect password or login";
          }
       }else{
           echo "Fields are empty. Try again <a href='./../index.php?page=log'> Try again </a>";
       }
    }else{
     echo  " Bye bye";
    }

?>



</h1>
</html>