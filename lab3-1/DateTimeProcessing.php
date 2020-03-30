<html><head><title>Date Time Processing</title></head>
    <body><font size="5" color="blue">
        Date Time Processing Exercise week 3 </font>
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <?php
            if (array_key_exists("day", $_GET)) {
                $day = $_GET["day"];
                $month = $_GET["month"];
                $year = $_GET["year"];
                $hour = $_GET["hour"];
                $minute = $_GET["minute"];
                $second = $_GET["second"];
            } else {
                $day = 1;
                $month = 1;
                $year = 0;
                $hour = 0;
                $minute = 0;
                $second = 0;
            }
            ?>
            <table>
                <tr>
                    <td>Date: </td>
                    <td><select name="day">
                            <?php
                            for ($i = 1; $i < 31; $i++) {
                                if ($day == $i) {
                                    print("<option selected>$i</option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                        <select name="month">
                            <?php
                            for ($i = 1; $i < 12; $i++) {
                                if ($month == $i) {
                                    print("<option selected>$i</option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                        <select name="year">
                            <?php
                            for ($i = 0; $i < 3000; $i++) {
                                if ($year == $i) {
                                    print("<option selected>$i</option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Time: </td>
                    <td><select name="hour">
                            <?php
                            for ($i = 0; $i < 25; $i++) {
                                if ($hour == $i) {
                                    print("<option selected>$i</option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                        <select name="minute">
                            <?php
                            for ($i = 0; $i < 61; $i++) {
                                if ($minute == $i) {
                                    print("<option selected>$i</option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                        <select name="second">
                            <?php
                            for ($i = 0; $i < 61; $i++) {
                                if ($second == $i) {
                                    print("<option selected>$i</option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>                       
                    </td>
                </tr>
                <tr>
                    <td align="right"><input type="SUBMIT" value="Submit"></td>
                    <td align="left"><input type="RESET" value="Reset"></td>

                </tr>
            </table>
            <table>
                <tr>
                    <?php
                    if (array_key_exists("day", $_GET)) {
                        $day = $_GET["day"];
                        $month = $_GET["month"];
                        $year = $_GET["year"];
                        $hour = $_GET["hour"];
                        $minute = $_GET["minute"];
                        $second = $_GET["second"];
                        print("Hi!. <br> You have chosen an appointment on $hour:$minute:$second, $day/$month/$year <br>More information <br>");
                        print("In 12-hour format, the time and date is ");
                        if ($hour > 12) {
                            print("<?php $hour-12 ?>:$minute:$second PM, $day/$month/$year <br>");
                        } else {
                            print("$hour:$minute:$second PM, $day/$month/$year <br>");
                        }
                        if ($month == 2) {
                            if ($year % 4 == 0) {
                                if ($year % 100 == 0) {
                                    if ($year % 400 == 0) {
                                        print("This month has 28 days");
                                    } else {
                                        print("This month has 29 days");
                                    }
                                } else
                                    print("This month has 28 days");
                            }
                        } else if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
                            print("This month has 31 days <br>");
                        } else {
                            print("This month has 30 days");
                        }
                    }
                    ?>
                </tr>
            </table>
        </form>
    </body>
</html>