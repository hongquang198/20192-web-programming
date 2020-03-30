<html>
    <head><title>Coin Flip!</title></head>
    <body>
        <font size="4" color="blue"> Please Pick Heads or Tails! </font>
        <form action="GotFlip.php" method="POST">
            <?php
                print"<input type=\"radio\" name=\"pick\" value =0 > Heads";
                print"<input type=\"radio\" name=\"pick\" value =1 > Tails";
                print"<BR>";
                ?>
            <input type="SUBMIT" value="Submit">
            <input type="RESET" value="Restart"> 
        </form>
    </body>
</html>