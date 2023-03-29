<html>
    <body>

    <b>XSS LEVEL 2</b>    
    <form>

        Username: <input type="text" name="username">

        <br>

        Password: <input type="password" name="password">
        <br>
        <input type="submit" name="button" value="Send">

    </form>
        <?php
        if(isset($_GET["username"])){
            $query = $_GET["username"];
            echo "<!--Hi, ".$query.". Today is your day.--!>";
        }
        ?> 
    </body>
</html>
