<html>
    <head><title>Guess a number</title></head>
    <body>
        <font size="4" color="blue"> Please Guess a number! </font>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <?php
            srand((double) microtime() * 10000000);
            $randNum = rand(0, 100);
            if (array_key_exists("yourGuess", $_POST)) {
                $guess = $_POST["yourGuess"];

                if (is_numeric($guess)) {
                    if ($guess < $randNum) {
                        print("Wrong. Please try a higher number!");
                    } else {
                        print("Wrong. Please try a lower number");
                    }
                } else
                    print("You must enter a number!");
            }
            ?>
            <input type="text" size="15" name="yourGuess">
            <input type="SUBMIT" value="Submit">
        </form>
    </body>
</html>