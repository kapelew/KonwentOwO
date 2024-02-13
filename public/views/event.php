<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/eventDetails.css">
    <script src="https://kit.fontawesome.com/8649a3516d.js" crossorigin="anonymous"></script>
    <title>HOME PAGE</title>
</head>
<body>
<div class="baseContainer">
    <nav>
        <img src="public/img/logo.svg">
        <ul>
            <li><a href="events" class="button"> <i class="fa-solid fa-house"></i> Strona główna</a></li>
            <li><a href="searchEngine" class="button"> <i class="fa-solid fa-magnifying-glass"></i> Wyszukiwanie</a></li>
            <li><a href="account" class="button"> <i class="fa-solid fa-user"></i> Mój profil</a></li>
            <li><a href="bookmarks" class="button"> <i class="fa-solid fa-bookmark"></i> Zapisane</a></li>
            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') : ?>
                <li class="button"><a href="addEvent"><i class="fa-solid fa-plus"></i> Dodaj wydarzenie</a></li>
            <?php endif; ?>
            <li><a href="/logout" class="button"> <i class="fa-solid fa-right-from-bracket"></i> Wyloguj się</a></li>
        </ul>
    </nav>


    <main>
        <section class="events">
            <div class="event-title">
                <h1><?= $event->getTitle(); ?> </h1>
                <p>Kategoria: <?= $event->getCategory(); ?></p>
            </div>

            <div class="event-img">
                <img class="event-pic" src="public/img/<?= $event->getPictureId(); ?>">
            </div>

            <div class="event-details">
                <p>O wydarzeniu <i class="fa-solid fa-arrow-right"></i> <?= $event->getDescription(); ?></p>
                <p><i class="fa-solid fa-calendar"></i> Data: <?= $event->getDate(); ?></p>
                <p><i class="fa-solid fa-city"></i></i> Miejscowość: <?= $event->getCity(); ?></p>
            </div>

            <?php if ($isBookmarked) : ?>
                <form action="/removeFromBookmarks" method="post">
                    <input type="hidden" name="event_id" value="<?= $event->getEventId(); ?>">
                    <button type="submit" class="button"><i class="fa-solid fa-times"></i> Usuń z zakładek</button>
                </form>
            <?php else : ?>
                <form action="/addToBookmarks" method="post">
                    <input type="hidden" name="event_id" value="<?= $event->getEventId(); ?>">
                    <button type="submit" class="button"><i class="fa-solid fa-bookmark"></i> Dodaj do zakładek</button>
                </form>
            <?php endif; ?>

        </section>
    </main>

</div>
</body>
</html>
