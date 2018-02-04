<?php
/**
 * Assuming you've installed PlaceHolder via composer, i.e.
 * `composer require seydoggy/placeholder`
 * Then you should be able to access your classes by requiring the composer
 * autoloader file.
 */
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/PlaceHolder.php';

/**
 * Define a variable or constant that points to the image folder
 */
define('IMAGEPATH', dirname(__FILE__).'/images/');

/**
 * Initialize the PlaceHolder object
 */
$placeholder = new PlaceHolder(IMAGEPATH);
