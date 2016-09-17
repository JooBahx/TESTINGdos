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
            $servernamesql = "localhost";
            $usernamesql = "root";
            $passwordsql = "password";
            $email = "email";

            //Create connection
            $conn = mysql_connect($servernamesql, $usernamesql, $passwordsql);
            
            mysql_select_db($email,$conn);
            $query = "SELECT * FROM $user";
            $result = mysql_query($query);
            
            if($result) {
                while($row = mysql_fetch_array($result)){
                    $name = $row["$yourfield"];
                    echo "Name: " . $name;  
                }
            }
            
            
            
            echo "Connected successfully";
            
            mysql_close($conn);
            echo "ASDF";
        
            if( $_GET["Email"] || $_GET["Password"] ) {
                echo "Welcome ". $_GET['Email']. "<br />";
                exit();
            }
            
        ?>  
    </body>
</html>
