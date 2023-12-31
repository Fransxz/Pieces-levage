<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to a commercial license from MigrationPro MMC
 * Use, copy, modification or distribution of this source file without written
 * license agreement from the MigrationPro MMC is strictly forbidden.
 * In order to obtain a license, please contact us: migrationprommc@gmail.com
 *
 * INFORMATION SUR LA LICENCE D'UTILISATION
 *
 * L'utilisation de ce fichier source est soumise a une licence commerciale
 * concedee par la societe MigrationPro MMC
 * Toute utilisation, reproduction, modification ou distribution du present
 * fichier source sans contrat de licence ecrit de la part de la MigrationPro MMC est
 * expressement interdite.
 * Pour obtenir une licence, veuillez contacter la MigrationPro MMC a l'adresse: migrationprommc@gmail.com
 *
 * @author    Edgar I.
 * @copyright Copyright (c) 2012-2018 MigrationPro MMC
 * @license   Commercial license
 * @package   MigrationPro: WooCommerce To PrestaShop
 */

class MigrationProPassLog extends ObjectModel
{
    public $id;
    public $mail;
    public $passwd;

    public static $definition = array(
        'table' => 'migrationpro_pass',
        'primary' => 'id',
        'fields' => array(
            'mail' => array('type' => self::TYPE_STRING, 'validate' => 'isEmail', 'required' => true, 'size' =>
                255),
            'id_customer' => array('type' => self::TYPE_STRING, 'validate' => 'isUnsignedInt', 'required' => true, 'size' =>
                11),
            'passwd' => array('type' => self::TYPE_STRING, 'validate' => 'isEmail', 'required' => true, 'size' => 255)
        ),
    );

    public static function storeCustomerPass($id_customer, $mail, $pass)
    {

        $sql = 'INSERT INTO ' . _DB_PREFIX_ . 'migrationpro_pass SET id_customer=' . (int)$id_customer . ', mail=\'' . pSQL($mail) . '\',passwd=\'' . pSQL($pass) . '\'';
        return Db::getInstance()->execute($sql);
    }

    public static function getUser($mail)
    {
        $sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'migrationpro_pass where mail=\'' . pSQL($mail) . '\'';
        return Db::getInstance()->executeS($sql);
    }

    public static function deleteUserById($id)
    {
        $sql = 'DELETE FROM ' . _DB_PREFIX_ . 'migrationpro_pass where id_customer=' . (int)$id;
        return Db::getInstance()->execute($sql);
    }
}
