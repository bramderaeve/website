<?php
function cv_item(string $date, string $name, string $location)
{
    echo <<<HTML
    <li class="cv-item">
        <small>$date</small>
        <h4>$name</h4>
        <p>$location</p>
    </li>
HTML;
}