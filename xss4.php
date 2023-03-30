<html>
        <body>

        <b>XSS LEVEL 4</b>
        <form method="post">

            Username: <input type="text" name="username">

            <br>

            Password: <input type="password" name="password">
            <br>
            <input type="submit" name="button" value="Send">

	</form>
        <?php
        if(isset($_POST["username"])){
            $query = $_POST["username"];
            echo "Merhaba, ".$query;
        }
        ?>
        </body>
</html>
