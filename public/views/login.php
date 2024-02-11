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
            <h1>Zaloguj sie</h1>
            <form class="login" action="login" method="post">
                    <div class="message">
                        <?php
                            if(isset($messages)){
                                foreach ($messages as $message){
                                    echo $message;
                                }
                            }
                        ?>
                    </div>
                    <input id="email" name="email" type="text" placeholder="adres email" autocomplete="off">


                    <input id="password" name="password" type="password" placeholder="hasło" autocomplete="off">

                <button type="submit" name="submit">Zaloguj sie</button>

                <h2>Nie masz konta?</h2>
                <a href="signUp" class="register-button">Zarejestruj się</a>
            </form>

        </div>

      <div class="logo">
        <img src="public/img/logo.svg" alt="rysunek logo prezentujacy kota w czapce wiedzmy z podpisem konwentOwO">
      </div>

    </div>


</body>
</html>