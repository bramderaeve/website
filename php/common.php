<?php

// add php script folders to include path
$script_folders = array("/var/www/php", "/var/www/php/comps");
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $script_folders));
