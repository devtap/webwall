<?php

echo '<h1>Webwall</h1>';
echo 'Environment ' . $_SERVER['TRUSS_ENV'] . '<br />';
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
phpinfo();
