<html>
    <body>

        <b>XSS LEVEL 1</b>
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
            echo $query;
        }
        ?> 
    </body>
</html>
