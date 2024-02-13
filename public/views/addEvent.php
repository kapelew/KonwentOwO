<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/homepage.css";>
    <link rel="stylesheet" type="text/css" href="public/css/account.css";>
    <link rel="stylesheet" type="text/css" href="public/css/addEvent.css";>
    <script type="text/javascript" src="./public/js/addEventValidation.js" defer></script>
    <script src="https://kit.fontawesome.com/8649a3516d.js" crossorigin="anonymous"></script>
    <title>HOME PAGE</title>
</head>
<body>
<div class="baseContainer">
    <nav>
        <img src="public/img/logo.svg">
        <ul>
            <li><a href="events" class="button"> <i class="fa-solid fa-house"></i> Strona glowna</a></li>
            <li><a href="searchEngine" class="button"> <i class="fa-solid fa-magnifying-glass"></i> Wyszukiwanie</a></li>
            <li><a href="account" class="button"> <i class="fa-solid fa-user"></i> Mój profil</a></li>
            <li><a href="bookmarks" class="button"> <i class="fa-solid fa-bookmark"></i> Zapisane</a></li>
            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') : ?>
                <li class="button" ><a href="addEvent" style="color: black"><i class="fa-solid fa-plus"></i> Dodaj wydarzenie</a></li>
            <?php endif; ?>
            <li><a href="/logout" class="button"> <i class="fa-solid fa-right-from-bracket"></i> Wyloguj się</a></li>
        </ul>

    </nav>

    <main>
        <div class="container">
            <h1>Dodaj wydarzenie</h1>
            <div class="message">
                <?php
                if(isset($messages)){
                    foreach ($messages as $message){
                        echo $message;
                    }
                }
                ?>
            </div>
            <form class="form" action="addEvent" method="POST" enctype="multipart/form-data">
                <input name="title" type="text" placeholder="Tytul wydarzenia" >
                <input name="description" type="text" placeholder="Opis wydarzenia">
                <input name="category" type="text" placeholder="Kategoria">
                <input name="date" type="text" placeholder="Data odbycia sie RRRR-MM-DD">
                <input name="city" type="text" placeholder="Miasto">
                <input type="file" name="file"/>
                <button type="submit" id="add-button"> Dodaj wydarzenie </button>
            </form>
        </div>
    </main>

</div>
</body>
</html>