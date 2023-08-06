<?php

function navbar_item(string $name, string $url)
{
    // check if active
    $req_url = $_SERVER["REQUEST_URI"];
    $active = strrpos($req_url, $url);

    $classes = "";
    if ($active !== false) {
        $classes .= " active";
    }

    echo <<<HTML
        <li>
            <a href="$url" class="$classes">$name</a>
        </li>
HTML;
}

?>

<nav>
    <ul>
        <?php navbar_item("Home", "/index.php") ?>
        <?php navbar_item("Contact", "/contact.php") ?>
    </ul>
</nav>