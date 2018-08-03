<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to a commercial license from SARL 202 ecommence
 * Use, copy, modification or distribution of this source file without written
 * license agreement from the SARL 202 ecommence is strictly forbidden.
 * In order to obtain a license, please contact us: tech@202-ecommerce.com
 * ...........................................................................
 * INFORMATION SUR LA LICENCE D'UTILISATION
 *
 * L'utilisation de ce fichier source est soumise a une licence commerciale
 * concedee par la societe 202 ecommence
 * Toute utilisation, reproduction, modification ou distribution du present
 * fichier source sans contrat de licence ecrit de la part de la SARL 202 ecommence est
 * expressement interdite.
 * Pour obtenir une licence, veuillez contacter 202-ecommerce <tech@202-ecommerce.com>
 * ...........................................................................
 *
 * @author    202-ecommerce <tech@202-ecommerce.com>
 * @copyright Copyright (c) 202-ecommerce
 * @license   Commercial license
 */

/**
 * @desc: parameters for this module. Please complete also config_prod.php
 */

if (!defined('TOTPSCLASSLIB_DEV_PATH')) {
    define('TOTPSCLASSLIB_DEV_PATH', __DIR__ . '/../totpsclasslib/');
}

if (defined('TOTPSCLASSLIB_DEV_PATH') &&
        file_exists(TOTPSCLASSLIB_DEV_PATH .'classlib/_config_dev.php')) {
    eval(file_get_contents(TOTPSCLASSLIB_DEV_PATH .'classlib/_config_dev.php'));
    TotLoader::checkVersion('release/1.2.0');
} else {
    include 'config_prod.php';
}
