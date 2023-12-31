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
 *  @author    Edgar I.
 * @copyright Copyright (c) 2012-2018 MigrationPro MMC
 * @license   Commercial license
 * @package   MigrationPro: Prestashop To PrestaShop
 */

class MigrationProProcess extends ObjectModel
{
    public $id;
    public $type;
    public $total;
    public $imported;
    public $id_source;
    public $error;
    public $point;
    public $time_start;
    public $finish;

    public static $definition = array(
        'table'   => 'migrationpro_process',
        'primary' => 'id_process',
        'fields'  => array(
            'type'       => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true),
            'total'      => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'imported'   => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'id_source'  => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'error'      => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'point'      => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'time_start' => array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'required' => true),
            'finish'     => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true)
        ),
    );

    public static function getActiveProcessObject()
    {
        $query = new DbQuery();
        $query->select('p.id_process');
        $query->from('migrationpro_process', 'p');
        $query->where('p.finish = 0');
        $query->orderBy('p.id_process ASC');
        $result = Db::getInstance()->getValue($query);
        if (!$result) {
            return false;
        }

        return new MigrationProProcess($result);
    }

    public static function calculateImportedDataPercent()
    {
        $query = 'SELECT SUM(imported) / SUM(total) * 100 AS percent FROM ' . _DB_PREFIX_ . 'migrationpro_process';
        $result = Db::getInstance()->getValue($query);


        if (!$result) {
            return 0;
        } else {
            return (int)$result;
        }
    }

    public static function getAll()
    {
        $query = new DbQuery();
        $query->select('p.*');
        $query->from('migrationpro_process', 'p');
        $query->orderBy('p.id_process ASC');
        $result = Db::getInstance()->executeS($query);

        return $result;
    }
}
