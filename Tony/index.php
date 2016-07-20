<?php

session_start();



     if(isset($_POST['user']) && (isset($_POST['pass'])))
        {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            if($user == "admin" && $pass == "1234")
            {
                $_SESSION['logged'] = "1";
            }
        } elseif(isset($_GET['exit'])==true) {
            session_destroy();
            session_start();
        }
?>

<html>
<head>

</head>
<body>
    
    <?php
    
    if(isset($_SESSION['logged']) == false)
    {
        
    ?>
    
    <form action="" method="post" action="index.php">
        user:<br><input type="text" id="user" name="user"><br>
        pass:<br><input type="password" id="pass" name="pass"><br>
        <input type="submit" value="Log">
    </form>
    
    <?php
    }
    else
    {
        echo 'Hi!, ' . "<a href='index.php?exit=1'>logout</a>";
    }
    
    ?>
    
</body>

</html>
