<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 * animal module for xoops
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         GPL 2.0 or later
 * @package         Publisher
 * @subpackage      Config
 * @since           1.03
 * @author          XOOPS Development Team - ( https://xoops.org )
 */

require_once dirname(dirname(dirname(__DIR__))) . '/mainfile.php';
//require_once __DIR__ . '/../class/configurator.php';

$moduleDirName = basename(dirname(__DIR__));
$capsDirName   = strtoupper($moduleDirName);

if (!defined($capsDirName . '_DIRNAME')) {
    define($capsDirName . '_DIRNAME', $moduleDirName);
    define($capsDirName . '_PATH', XOOPS_ROOT_PATH . '/modules/' . constant($capsDirName . '_DIRNAME'));
    define($capsDirName . '_URL', XOOPS_URL . '/modules/' . constant($capsDirName . '_DIRNAME'));
    define($capsDirName . '_ADMIN', constant($capsDirName . '_URL') . '/admin/index.php');
    define($capsDirName . '_ROOT_PATH',  constant($capsDirName . '_PATH'));
    define($capsDirName . '_AUTHOR_LOGOIMG', constant($capsDirName . '_URL') . '/assets/images/logoModule.png');

    define($capsDirName . '_IMAGES_URL', constant($capsDirName . '_URL') . '/assets/images');
    define($capsDirName . '_ADMIN_URL', constant($capsDirName . '_URL') . '/admin');
    define($capsDirName . '_ADMIN_PATH', constant($capsDirName . '_PATH') . '/admin/index.php');

    define($capsDirName . '_UPLOAD_URL', XOOPS_UPLOAD_URL . '/' . constant($capsDirName . '_DIRNAME')); // WITHOUT Trailing slash
    define($capsDirName . '_UPLOAD_PATH', XOOPS_UPLOAD_PATH . '/' . constant($capsDirName . '_DIRNAME')); // WITHOUT Trailing slash
    
}

// Define here the place where main upload path

//$img_dir = $GLOBALS['xoopsModuleConfig']['uploaddir'];

//define($capsDirName . '_UPLOAD_URL', XOOPS_UPLOAD_URL . '/' . constant($capsDirName . '_DIRNAME')); // WITHOUT Trailing slash
defined($capsDirName . '_UPLOAD_PATH') || define($capsDirName . '_UPLOAD_PATH', XOOPS_UPLOAD_PATH . '/' . constant($capsDirName . '_DIRNAME')); // WITHOUT Trailing slash

//Configurator
return (object)[
    'name'           => 'Module Configurator',
    'uploadFolders'  => [
        constant($capsDirName . '_UPLOAD_PATH'),
        constant($capsDirName . '_UPLOAD_PATH') . '/content',
        constant($capsDirName . '_UPLOAD_PATH') . '/images',
        constant($capsDirName . '_UPLOAD_PATH') . '/images/category',
        constant($capsDirName . '_UPLOAD_PATH') . '/images/thumbnails',
    ],
    'blankFiles' => [
        constant($capsDirName . '_UPLOAD_PATH'),
        constant($capsDirName . '_UPLOAD_PATH') . '/images/category',
        constant($capsDirName . '_UPLOAD_PATH') . '/images/thumbnails',
    ],

    'templateFolders' => [
        '/templates/',
        '/templates/blocks/',
        '/templates/admin/'

    ],
    'oldFiles'        => [
        '/class/request.php',
        '/class/registry.php',
        '/class/utilities.php',
        '/class/util.php',
        '/include/constants.php',
        '/include/functions.php',
        '/ajaxrating.txt'
    ],
    'oldFolders'      => [
        '/images',
        '/css',
        '/js',
        '/tcpdf',
    ],
];
