<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/homepage.css";>
    <link rel="stylesheet" type="text/css" href="public/css/events.css";>
    <script src="https://kit.fontawesome.com/8649a3516d.js" crossorigin="anonymous"></script>
    <title>HOME PAGE</title>
</head>
<body>
    <div class="baseContainer">
        <nav>
            <img src="public/img/logo.svg">
            <ul>
                <li><a href="events" class="button" style="color: black"> <i class="fa-solid fa-house"></i> Strona glowna</a></li>
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
            <header>
                <div class="welcomeMessage" style="font-size: 1em">
                    <h2 style="font-weight: normal"><?php echo "Cześć ".$_SESSION['user']['name'].", poniżej mozesz odkryć nowe ciekawe wydarzenia!"; ?></h2>
                </div>
            </header>
            <section class="events">
                <?php
                $random_events = [];
                $events_count = count($events);
                $selected_indexes = []; // Tablica przechowująca indeksy już wybranych wydarzeń

                if ($events_count > 0) {
                    for ($i = 0; $i < 9; $i++) {
                        do {
                            $random_event_index = rand(0, $events_count - 1); // Losowanie indeksu
                        } while (in_array($random_event_index, $selected_indexes)); // Sprawdzanie, czy indeks już został wybrany
                        $selected_indexes[] = $random_event_index; // Dodawanie wybranego indeksu do tablicy
                        $random_events[] = $events[$random_event_index]; // Dodawanie wydarzenia o wybranym indeksie do tablicy losowych wydarzeń
                    }
                    // Wyświetlanie wydarzeń
                    foreach ($random_events as $event):
                        ?>
                    <?php
                        $eventId = $event->getEventId();
                        $eventNo = "event-". $eventId;
                        $eventDetailsHref = "event?id=". $eventId;
                        ?>
                        <a href="<?=$eventDetailsHref?>">
                        <div id="<?=$eventNo?>">
                                <?php
                                    $pictureId = $event->getPictureId();
                                    $imagePath = "public/img/" . $pictureId;
                                ?>
                                <img src="<?=$imagePath?>">
                                <div>
                                    <h2 style="font-weight: normal"><?= $event->getTitle(); ?></h2>
                                    <p><?= $event->getDescription(); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php } else { ?>
                    <p>Brak dostępnych wydarzeń.</p>
                <?php } ?>
            </section>
        </main>

    </div>
</body>
</html>