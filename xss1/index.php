<html>
    <body>

        <b>XSS LEVEL 1</b>
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
            echo $query;
        }
        ?> 
    </body>
</html>