<html>
    <head><title>Radian to Degree</title> <br>
    <body>
        <font size="4" color="blue"> Please enter the radian number: </font>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <?php
            if (array_key_exists("radian", $_POST)) {
                $radian = $_POST["radian"];
                $degree = $radian * 57.2958;
                print ("$radian radian in degree is $degree degree.");
            }
            ?>
            <input type="text" size="15" maxlength="20" name="radian">
            <input type="SUBMIT" value="Submit">
        </form>
    </body>


</head>
</html>