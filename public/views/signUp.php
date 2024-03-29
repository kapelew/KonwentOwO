<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
    <script src="https://kit.fontawesome.com/8649a3516d.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/signUpValidation.js" defer></script>
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
            <input id="email" name="email" type="text" placeholder="adres email" autocomplete="off" required>
            <input id="password" name="password" type="password" placeholder="hasło" autocomplete="off" required>
            <input id="confirmedPassword" name="confirmedPassword" type="password" placeholder="potwierdź hasło" autocomplete="off" required>
            <input id="name" name="name" type="text" placeholder="imię" autocomplete="off" required>
            <input id="surname" name="surname" type="text" placeholder="nazwisko" autocomplete="off" required>
            <input id="phone" name="phone"type="text" placeholder="numer telefonu" autocomplete="off" required>
            <button id="register-button" name="register-button" class="register-button" type="submit">Zarejestruj sie</button>
            <h2 id="h2SingUp" >Masz konto?</h2>
            <a href="login" class="login-button">Zaloguj się</a>
        </form>
    </div>

    <div class="logo">
        <img src="public/img/logo.svg" alt="rysunek logo prezentujący kota w czapce wiedźmy z podpisem konwentOwO">
    </div>

</div>
</body>
</html>
