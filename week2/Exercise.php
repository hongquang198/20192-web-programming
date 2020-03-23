<html>
    <head><title>Receiving Input</title></head>
    <body>
        <font size="5"> Thank You: Got Your Input. <br></font>
        <?php 
            $name = $_GET["name"];
            $class = $_GET["class"];
            $hobbies = $_GET["hobby"];
            $gf1 = $_GET["gf1"];
            $gf2 = $_GET["gf2"];
            $gf3 = $_GET["gf3"];
            $status = $_GET["status"];
            $partner = $_GET["partner"];
            print("<br> Your name is $name");
            print("<br> Your class is $class");
            print("<br> Your hobbies are $hobby");
            print("<br> Apparently Your girlfriends are $gf1 $gf2 $gf3.");
            print("Your status is $status");
            if ($partner =="Yes")
            print("You want to find a partner");
            else print("You're not interested in partners");
        ?>
    </body>
</html>