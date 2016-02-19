<?php
/**
 *
 * Bootstrapper
 *
 * @abstract Starting point of application
 *
 * @author Rohan Sakhale
 * @copyright saiashirwad.com
 */

/**
 * Define Constants that can be used globally in entire application
 */
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
if (!defined('SAI_APPMENUBUILDER_PATH')) {
    define('SAI_APPMENUBUILDER_PATH', __DIR__ . DS);
}

/**
 *     Load Third Party Classes
 */
if (file_exists(SAI_APPMENUBUILDER_PATH . 'vendor' . DS . 'autoload.php')) {
    require_once SAI_APPMENUBUILDER_PATH . 'vendor/autoload.php';
}
require_once SAI_APPMENUBUILDER_PATH . 'src/Autoload.php';
