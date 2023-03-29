<!DOCTYPE html>
<html>
    <body>
        <b>XSS LEVEL 3</b>
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
                    $query = htmlspecialchars($query);
                    $query = str_replace("'", "", $query);
                    echo "<a href='".$query."' />";
                }
            ?>
    </body>
</html>
