<!DOCTYPE html>
<html>
    <body>
        <b>XSS LEVEL 3</b>
        <form>

            Kullanıcı: <input type="text" name="username">

            <br>

            Parola: <input type="password" name="password">
            <br>
            <input type="submit" name="btnGonder" value="Gönder">

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