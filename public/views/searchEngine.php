<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/homepage.css";>
    <link rel="stylesheet" type="text/css" href="public/css/events.css";>
    <link rel="stylesheet" type="text/css" href="public/css/search.css";>
    <script src="https://kit.fontawesome.com/8649a3516d.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <title>HOME PAGE</title>
</head>
<body>
<div class="baseContainer">
    <nav>
        <img src="public/img/logo.svg">
        <ul>
            <li><a href="events" class="button"> <i class="fa-solid fa-house"></i> Strona glowna</a></li>
            <li><a href="searchEngine" class="button" style="color: black"> <i class="fa-solid fa-magnifying-glass"></i> Wyszukiwanie</a></li>
            <li><a href="account" class="button"> <i class="fa-solid fa-user"></i> Mój profil</a></li>
            <li><a href="bookmarks" class="button"> <i class="fa-solid fa-bookmark"></i> Zapisane</a></li>
            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') : ?>
                <li class="button"><a href="addEvent"><i class="fa-solid fa-plus"></i> Dodaj wydarzenie</a></li>
            <?php endif; ?>
            <li><a href="/logout" class="button"> <i class="fa-solid fa-right-from-bracket"></i> Wyloguj się</a></li>
        </ul>

    </nav>

    <main>
        <header>
            <div class="searchBar">
                <input type="text" placeholder="Wyszkukiwanie" value="">
            </div>


        </header>

        <section class="events">

        </section>
    </main>
</div>
</body>

<template id="event-template">

    <a href="#" class="event-link">
        <div class="event-container" id="">
            <img src="">
            <div>
                <h2>title</h2>
                <p>description</p>
            </div>
        </div>
    </a>

</template>


</html>
