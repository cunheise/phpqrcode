<?php
/**
 * Created by PhpStorm.
 * User: nathan
 * Date: 2018/6/22
 * Time: 10:15
 */
require __DIR__ . '/vendor/autoload.php';
PHPQRcode\QRcode::png('http://www.google.com', 'sample.png');