<html><head><title>Insert Results</title></head><body>
        <?php
        $host = 'localhost';
        $user = 'root';
        $passwd = '12345';
        $database = 'sale';
        $connect = mysqli_connect($host, $user, $passwd);
        $table_name = 'Products';
                $Item = $_GET["Item"];
                $Cost = $_GET["Cost"];
                $Weight = $_GET["Weight"];
                $Quantity = $_GET["Quantity"];
        $query = "INSERT INTO $table_name VALUES
('0','$Item','$Cost','$Weight','$Quantity')";
        print "The Query is <i>$query</i><br>";
        mysqli_select_db($connect, $database);
        print '<br><font size="4" color="blue">';
        if (mysqli_query($connect, $query)) {
            print "Insert into $database was successful!</font>";
        } else {
            print "Insert into $database failed!</font>";
        } mysqli_close($connect);
        ?></body></html>