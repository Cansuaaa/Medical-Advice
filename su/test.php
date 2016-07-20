<?php



session_start();

if (isset($_SESSION['name'])==true) {
    echo "vall: ".$_SESSION['name'];
    setcookie(FirstCookie, $_SESSION['name'], time()+3600);
  //  unset($_SESSION['name']);
}
else
{
    echo "Not set";
}