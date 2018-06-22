<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 2018/6/22
 * Time: 11:27
 */
$content = file_get_contents(__DIR__ . '/lib/phpqrcode.php');
file_put_contents(__DIR__ . '/lib/namespace.php', preg_replace("/^<\?php/", "<?php" . PHP_EOL . "namespace PHPQRcode;" . PHP_EOL, $content));