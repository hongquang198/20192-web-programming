<html>
    <head><title>Radian to Degree</title> <br>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <form name="date" method="POST">
                <font size="4" color="blue"> Please enter the first name: </font>
                <input type="text" size="15" maxlength="20" name="name1"> <br>
                <font size="4" color="blue"> Please enter the second name: </font><br>
                <input type="text" size="15" maxlength="20" name="name2"><br>
                <font size="4" color="blue"> 1st birthday (mm/dd/yyyy): </font>
                <input type="date" name="date1"" /> <br>
                <font size="4" color="blue"> 2nd birthday (mm/dd/yyyy): </font>
                <input type="date" name="date2"" /><br>
                <input type="submit" name="submit"/> <br>
                <?php
                if (array_key_exists("name1", $_POST)) {
                    $time1 = strtotime($_POST["date1"]);
                    $time2 = strtotime($_POST["date2"]);
                    $date1 = date('l, F d, Y', $time1);
                    $date2 = date('l, F d, Y', $time2);
                    echo date_in_letter($date1, $date2);

                    echo date_difference();
                }

                function date_in_letter($date1, $date2) {
                    echo $date1;
                    print "<br>";
                    echo $date2;
                    print "<br>";
                }

                function date_difference() {
                    $diff = abs(strtotime($_POST["date1"]) - strtotime($_POST["date2"]));
                    $years = floor($diff / (365 * 60 * 60 * 24));
                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                    $days = floor($diff / (60 * 60 * 24));

                    printf("%d years difference, %d days difference\n<br>", $years, $days);
                }
                ?>

            </form>

        </form>
    </body>


</head>
</html>