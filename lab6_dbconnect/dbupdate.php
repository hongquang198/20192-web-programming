<html><head><title>Product Update
            Results</title></head><body>
        <?php
        $host = 'localhost';
        $user = 'root';
        $passwd = '12345';
        $database = 'sale';
        $connect = mysqli_connect($host, $user, $passwd);
        $table_name = 'Products';
        $Product = $_GET["Product"];
        print '<font size="5" color="blue">';
        print "Update Results for Table
$table_name</font><br>\n";
        $query = "UPDATE $table_name
SET Numb = Numb-1
WHERE (Product_desc = '$Product')";
        print "The query is <i> $query </i> <br><br>\n";
        mysqli_select_db($connect, $database);
        $results_id = mysqli_query($connect, $query);
        if ($results_id) {
            Show_all($connect, $database, $table_name);
        } else {
            print "Update=$query failed";
        }
        mysqli_close($connect);

        function Show_all($connect, $database, $table_name) {
            $query = "SELECT * from $table_name";
            $results_id = mysqli_query($connect, $query);
            print '<table border=1><th> Num </th>
<th>Product</th><th>Cost</th>
<th>Weight</th><th>Count</th>';
            while ($row = mysqli_fetch_row($results_id)) {
                print '<tr>';
                foreach ($row as $field) {
                    print "<td>$field</td> ";
                }
                print '</tr>';
            }
        }
        ?> </body></html>
