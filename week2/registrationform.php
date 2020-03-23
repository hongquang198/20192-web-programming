<html>
    <head><title>A Simple Form</title></head>
    <body>
        <!--First form-->
        <form action="http://fit.hut.edu.vn/~trangntt/courses/vp" method=POST>
            Click submit to start our initial PHP program.
            <br>
            <input type="text" name="Name">
            <br>
            <input type="SUBMIT" value="Click To Submit">
            <input type="RESET" value="Erase and Restart">
        </form>
        <br>
        <!--Second form-->
        <form action="/test.php" method="POST">
            <p><input type="text" name="username">
                <input type="submit" value="Send"></p>
        </form>
        <br>
        <!--text input box-->
        <input type="text" size="15" maxlength="20" name="fname">
        <br>
        <!--password box-->
        <input type="password" size="15" maxlength="20" name="pass1">
        <br>
        <!--text area-->
        <textarea rows="4" cols="50" name="Comments">
            Your comments here
        </textarea>
        <br>
        
        <!--Radio buttons-->
        <input type="radio" name="contact" value="Yes" checked>
        <input type="radio" name="contact" value="No">
        <br>
        
        <!--Check boxes-->
        <input type="checkbox" name="travel" value="Yes" checked> Walk
        <input type="checkbox" name="travel" value="Yes" checked> Bicycle
        <input type="checkbox" name="travel" value="Yes" checked> Car
        <input type="checkbox" name="travel" value="Yes" checked> Plane
        <br>
        <!--selection list-->
        <select name="Accomodations" size=2 multiple>
            <option>A fine hotel</option>
            <option selected>A cheap motel! </option>
            <option>A tent in the parking lot</option>
            <option>Just give me a sleeping bag checked</option>
        </select>
    </body>
</html>