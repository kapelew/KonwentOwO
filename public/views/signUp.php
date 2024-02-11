<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/login.css";>
    <script src="https://kit.fontawesome.com/8649a3516d.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>LOGIN PAGE</title>
</head>
<body>
    <div class="container">

        <div class="login-container">
            <h1>Zarejestruj sie</h1>
            <form class="login" action="signUp" method="post">
                    <div class="message">
                        <?php
                            if(isset($messages)){
                                foreach ($messages as $message){
                                    echo $message;
                                }
                            }
                        ?>
                    </div>
                    <input id="name" name="name" type="text" placeholder="imie" autocomplete="off">
                    <input id="surname" name="surname" type="text" placeholder="nazwisko" autocomplete="off">
                    <input id="email" name="email" type="text" placeholder="adres email" autocomplete="off">
                    <input id="password" name="password" type="password" placeholder="hasło" autocomplete="off">

                <input type="submit" name="submit" value="Zarejestruj sie">
                <h2>Masz konto?</h2>
                <a href="login" class="register-button">Zaloguj sie</a>

            </form>

        </div>

      <div class="logo">
        <img src="public/img/logo.svg" alt="rysunek logo prezentujacy kota w czapce wiedzmy z podpisem konwentOwO">
      </div>

    </div>


</body>
</html>