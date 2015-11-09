<?php

// Work around the lack of proper autoload.php from composer by using
// the ClassLoader element from Symfony.
// http://symfony.com/doc/current/components/class_loader/class_loader.html

require_once 'Symfony/Component/ClassLoader/ClassLoader.php';
use Symfony\Component\ClassLoader\ClassLoader;
$loader = new ClassLoader();
$loader->setUseIncludePath(true);
$loader->register();
$loader->addPrefixes(array(
));

// Load additional files as registered in composer
require_once 'getid3/getid3.php';
require_once 'libphp-phpmailer/class.phpmailer.php';
require_once 'libphp-phpmailer/class.pop3.php';
require_once 'libphp-phpmailer/class.smtp.php';
require_once 'Assetic/functions.php';
require_once 'Crypt/Random.php';
