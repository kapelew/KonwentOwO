<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/homepage.css";>
    <link rel="stylesheet" type="text/css" href="public/css/account.css";>
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
            <li><a href="account" class="button" style="color: black"> <i class="fa-solid fa-user"></i> Mój profil</a></li>
            <li><a href="bookmarks" class="button"> <i class="fa-solid fa-bookmark"></i> Zapisane</a></li>
            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') : ?>
                <li class="button"><a href="addEvent"><i class="fa-solid fa-plus"></i> Dodaj wydarzenie</a></li>
            <?php endif; ?>
            <li><a href="/logout" class="button"> <i class="fa-solid fa-right-from-bracket"></i> Wyloguj się</a></li>
        </ul>

    </nav>

    <main>
        <div class="container">
            <div class="profilePic">
                <?php
                $pictureId = $_SESSION['user']['pictureId'];
                echo "<img class='profileImg' src='public/img/{$pictureId}.png' alt='Profile Picture'>";
                ?>
            </div>

            <div class="userInfo">
                <p><?php echo "Dolaczyles do nas ".$_SESSION['user']['created_at'].", dziekujemy za ten czas!"; ?></p>
            </div>

            <div class="uploadNewPic" style="visibility: hidden;">
                <p>Zmien swoje zdjecie profilowe</p>
            </div>
        </div>
    </main>

</div>
</body>
</html>