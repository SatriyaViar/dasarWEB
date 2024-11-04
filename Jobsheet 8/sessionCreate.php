<?php
session_start(); // Start a new session or resume an existing one
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";

            echo "Session variables are set.";
        ?>        
    </body>
</html>
