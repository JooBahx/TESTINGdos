!DOCTYPE html>
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
            $usernamesql = "uroot";
            $passwordsql = "proot";

            //Create connection
            $conn = mysqli_connect($servernamesql, $usernamesql, $passwordsql);

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            echo "<br /> Connected successfully";
        
            if( $_GET["Email"] || $_GET["Password"] ) {
               // echo "Welcome ". $_GET['Email']. "<br />";
                exit();
        
                
            }
        ?>  
    </body>
</html>


