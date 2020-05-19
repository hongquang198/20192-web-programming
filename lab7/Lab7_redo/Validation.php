<html>
    <head><title>Validation Process completed</title></head>
    <body>
        <?php 
            $email = $_POST["email"];
            $url = $_POST["url"];
            $phone = $_POST["phone"];
            
            if (preg_match("/^[[:alpha:]]+@[[:alpha:]]+.[[:alpha:]]+/", $email)) {
                print 'Correct email address <br>';
            }
            else print 'Wrong email address form <br>';
            
            if (preg_match("/^[[:alpha:]]+.[[:alpha:]]/", $url)){
                print 'Correct URL <br>';
            } 
            else print 'Incorrect URL <br>';
            
            if (preg_match("/[0-9]{10}/", $phone) || preg_match("/[0-9]{9}/", $phone)) {
                print 'Correct phone number <br>';
            }
            else print 'Incorrect phone number <br>';
        ?>
    </body>
</html>