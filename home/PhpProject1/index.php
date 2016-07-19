<?php
include 'form.php';
$myName = 'Peter';
$myFamily = 'Chakalov';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <script src="script/app.js"></script>
    </head>
    <body>
        <form>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="LogIn">
        </form>
        <?php
        include 'validation.php';
        
        if(isset($_GET['username']) && isset($_GET['password'])){
            $username = $_GET['username'];
            $password = $_GET['password'];
            
            $formValidation = new Validate($username, $password);
            
            echo '<h1>', $formValidation->validateUsername() , '</h1>';
            echo '<h1>', $formValidation->validatePassword() , '</h1>';
        }
        ?>
    </body>
</html>
     