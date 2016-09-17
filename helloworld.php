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
            echo "Megan, My first website!<br />";

            if( $_GET["Email"] || $_GET["Password"] ) {
                echo "Welcome ". $_GET['Email']. "<br />";
                exit();
            }
        ?>  
    </body>
</html>


