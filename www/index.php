<!DOCTYPE html>
<?php
include_once("/var/www/php/common.php");
include_once("head.php");
include_once("cv.php");
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once("head.php") ?>

<body>
    <div>
        <div>
            <?php include_once("navbar.php") ?>
            <main>
                <h1>Bram Deraeve</h1>
                Student Applied Informatics at Howest, Belgium

                <h2>Curriculum Vitae</h2>
                <h3>Opleidingen</h3>
                <ul>
                    <?php
                    cv_item("2022-2023", "(eerste jaar) Bachelor Toegepaste Informatica", "Howest Brugge");
                    cv_item("2020-2022", "Informaticabeheer", "Annuntiata Veurne");
                    cv_item("2016-2020", "Klassieke talen", "Immaculata De Panne");
                    ?>
                </ul>
            </main>
        </div>
        <?php include_once("photo.php") ?>
    </div>

</html>