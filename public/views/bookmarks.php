<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/homepage.css">
    <link rel="stylesheet" type="text/css" href="public/css/events.css">
    <script src="https://kit.fontawesome.com/8649a3516d.js" crossorigin="anonymous"></script>
    <title>Zapisane</title>
</head>
<body>
<div class="baseContainer">
    <nav>
        <img src="public/img/logo.svg">
        <ul>
            <li><a href="events" class="button"> <i class="fa-solid fa-house"></i> Strona główna</a></li>
            <li><a href="searchEngine" class="button"> <i class="fa-solid fa-magnifying-glass"></i> Wyszukiwanie</a></li>
            <li><a href="account" class="button"> <i class="fa-solid fa-user"></i> Mój profil</a></li>
            <li><a href="bookmarks" class="button"style="color: black" > <i class="fa-solid fa-bookmark"></i> Zapisane</a></li>
            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') : ?>
                <li class="button"><a href="addEvent"><i class="fa-solid fa-plus"></i> Dodaj wydarzenie</a></li>
            <?php endif; ?>
            <li><a href="/logout" class="button"> <i class="fa-solid fa-right-from-bracket"></i> Wyloguj się</a></li>
        </ul>
    </nav>

    <main>
        <header>
            <div class="welcomeMessage" style="font-size: 1em">
                <h2 style="font-weight: normal"><?php echo "Cześć ".$_SESSION['user']['name'].", oto Twoje zapisane wydarzenia:"; ?></h2>
            </div>
        </header>
        <section class="events">
            <?php if (!empty($bookmarks)) : ?>
                <?php foreach ($bookmarks as $event) : ?>
                    <a href="event?id=<?= $event->getEventId(); ?>">
                        <div class="event" id="event-<?= $event->getTitle(); ?>">
                            <div>
                                <h2 style="font-weight: normal"><?= $event->getTitle(); ?></h2>
                                <p><?= $event->getDescription(); ?></p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else : ?>
                <p>Brak zapisanych wydarzeń.</p>
            <?php endif; ?>
        </section>
    </main>
</div>
</body>
</html>
