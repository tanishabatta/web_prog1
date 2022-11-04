
<?php

session_start();

if (isset($_SESSION["loggedin"]))
{
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_SESSION["error"]);
}


session_destroy();

header('Location: login.php');


exit ();

?>