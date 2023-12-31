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
 * @copyright Copyright (c) 2012-2017 MigrationPro MMC
 * @license   Commercial license
 * @package   MigrationPro: Prestashop To PrestaShop
 */

class MigrationProDBWarningLogger extends ObjectModel
{
    const TYPE_TAX = 't';
    const TYPE_TAXRULESGROUP = 'trg';
    const TYPE_TAXRULE = 'tr';
    const TYPE_COUNTRY = 'co';
    const TYPE_STATE = 'st';
    const TYPE_CATEGORY = 'c';
    const TYPE_CARRIER = 'crr';
    const TYPE_PRODUCT = 'p';
    const TYPE_ATTACHMENT = 'atc';
    const TYPE_PRODUCTDOWNLOAD = 'prd';
    const TYPE_SPECIFICPRICERULE = 'spr';
    const TYPE_SPECIFICPRICERULECONDITIONGROUP = 'spg';
    const TYPE_SPECIFICPRICERULECONDITION = 'spc';
    const TYPE_ATTRIBUTEGROUP = 'ag';
    const TYPE_ATTRIBUTE = 'a';
    const TYPE_COMBINATION = 'com'; //PRODUCT_ATTRIBUTE
    const TYPE_SUPPLIER = 's';
    const TYPE_MANUFACTURER = 'm';
    const TYPE_SPECIFICPRICE = 'sp';
    const TYPE_IMAGE = 'i';
    const TYPE_FEATURE = 'f';
    const TYPE_FEATUREVALUE = 'fv';
    const TYPE_CUSTOMIZATIONFIELD = 'cf';
    const TYPE_TAG = 'tag';
    const TYPE_CUSTOMER = 'cus';
    const TYPE_CUSTOMERTHREAD = 'ct';
    const TYPE_CUSTOMERMESSAGE = 'cm';
    const TYPE_CART = 'car';
    const TYPE_EMPLOYEE = 'e';
    const TYPE_ADDRESS = 'adr';
    const TYPE_ORDER = 'o';
    const TYPE_ORDERDETAIL = 'od';
    const TYPE_ORDERRETURN = 'ort';
    const TYPE_ORDERHISTORY = 'oh';
    const TYPE_ORDERSLIP = 'osp';
    const TYPE_ORDERINVOICE = 'oi';
    const TYPE_ORDERCARRIER = 'oc';
    const TYPE_ORDERCARTRULE = 'ocr';
    const TYPE_ORDERPAYMENT = 'op';
    const TYPE_ORDERMESSAGE = 'om';
    const TYPE_MESSAGE = 'mes';
    const TYPE_STOCKAVAILABLE = 'sa';
    const TYPE_PRODUCTSUPPLIER = 'ps';
    const TYPE_CMS = 'cms';
    const TYPE_CMSROLE = 'cro';
    const TYPE_CMSCATEGORY = 'ctg';
    const TYPE_CMSBLOCK = 'cbl';
    const TYPE_CARTRULE = 'cr';
    const TYPE_CARTRULEPRODUCTRULEGROUP = 'cpg';
    const TYPE_CARTRULEPRODUCTRULE = 'cpr';
    const TYPE_META = 'met';
    const TYPE_WAREHOUSE = 'war';
    const TYPE_STOCK = 'stk';
    const TYPE_WAREHOUSEPRODUCTLOCATION = 'wpl';
    const TYPE_ZONE = 'zn';
    const TYPE_DELIVERY = 'dlv';
    const TYPE_RANGEPRICE = 'rn';
    const TYPE_RANGEWEIGHT = 'rw';

    public $id;

    public $log_text;

    public $log_date_add;

    public static $definition = array(
        'table' => 'migrationpro_warning_logs',
        'primary' => 'id',
        'fields' => array(
            'log_text' => array('type' => self::TYPE_STRING),
            'entity_type'      => array('type' => self::TYPE_STRING),
            'log_date_add' => array('type' => self::TYPE_DATE),
        ),
    );

    public static function addWarningLogToDB($logText, $entityType)
    {
        $type = constant("self::TYPE_" . Tools::strtoupper($entityType));

        $sql = "INSERT INTO " . _DB_PREFIX_ . "migrationpro_warning_logs SET log_text='" . pSQL($logText) . "', entity_type = '" . pSQL($type) . "', log_date_add='" . date('Y-m-d h:i:s', time()) . "'";

        return Db::getInstance()->execute($sql);
    }

    public static function addWarningLogToFile($logText)
    {
        $logFilePath = _PS_MODULE_DIR_ . 'migrationpro/classes/loggers/warning_logs.txt';

        $fileDescriptor = fopen($logFilePath, 'a+');
        if ($fileDescriptor) {
            fwrite($fileDescriptor, $logText . ' - ' . date('Y-m-d h:i:s', time()) . "\n");
            fclose($fileDescriptor);
        }
    }

    public static function removeLogFile()
    {
        $logFilePath = _PS_MODULE_DIR_ . 'migrationpro/classes/loggers/warning_logs.txt';

        if (file_exists($logFilePath)) {
            @unlink($logFilePath);
        }
    }

    public static function getAllWarnings()
    {
        $sql = "SELECT entity_type, COUNT(*) as count FROM " . _DB_PREFIX_ . "migrationpro_warning_logs GROUP BY entity_type";

        return Db::getInstance()->executeS($sql);
    }

    public static function removeWarningLogs()
    {
        $sql = 'DELETE FROM ' . _DB_PREFIX_ . 'migrationpro_warning_logs';

        return Db::getInstance()->execute($sql);
    }
}
