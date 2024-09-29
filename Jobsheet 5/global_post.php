<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    # code...
                    $name = $_POST['fname'];
                    if (empty($name)) {
                        # code...
                        echo "Name is empty";
                    } else {
                        # code...
                        echo $name;
                    }
                    
                }
            ?>
    </body>
</html>