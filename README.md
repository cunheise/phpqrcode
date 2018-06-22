PHPQRcode 1.1.4
===============

Description
-----------
phpqrcode 1.1.4 version for composer, from http://phpqrcode.sourceforge.net/

Install
-------
    composer require cunheise/phpqrcode
    
Sample
------
    php sample.php

Code
----
    require __DIR__ . '/vendor/autoload.php';
    QRcode::png('http://www.google.com', 'sample.png');