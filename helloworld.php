<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action = "<?php $_PHP_SELF ?>" method = "GET">
            Email: <input type = "text" name = "Email" />
            Password: <input type = "text" name = "Password" />
            <input type = "submit" />
        </form>
        
        <?php
            ini_set('display_startup_errors',1);
            ini_set('display_errors',1);
            error_reporting(-1);
        
            $user = 'root';
            $password = 'root';
            $db = 'users';
            $host = 'localhost';
            $port = 3306;

            $link = mysqli_init();
            $success = mysqli_real_connect($link, $host, $user, $password, $db,$port);
        
            echo "Connected successfully <br />";
            
            echo "ASDF <br />";
        
            if($_GET["Email"] || $_GET["Password"] ) {
                echo "Welcome ". $_GET['Email']. "<br />";
                exit();
            }
            
        ?>  
    </body>
</html>
