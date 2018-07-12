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
 * @version   develop
 */

TotLoader::import('shoppingfeed\classlib\db\ObjectModelDefinition');
TotLoader::import('shoppingfeed\classlib\db\DbTableDefinitionModel');
TotLoader::import('shoppingfeed\classlib\db\DbTableDefinitionRelation');
TotLoader::import('shoppingfeed\classlib\db\DbSchema');
TotLoader::import('shoppingfeed\classlib\db\DbTable');

class ShoppingfeedObjectModelExtension
{
    /**
     * @var ObjectModel
     */
    protected $om;

    /**
     * @var Db
     */
    protected $db;

    /**
     * Register ObjectModel and Db
     * @param ObjectModel $om
     * @param Db          $db
     */
    public function __construct($om, $db)
    {
        $this->om = $om;
        $this->db = $db;
    }

    /**
     * @return bool
     */
    public function install()
    {
        $schemas = $this->getObjectModelDefinition()->getSchemas();

        return $this->createTables($schemas);
    }

    /**
     * @return bool
     */
    public function uninstall()
    {
        $names = $this->getObjectModelDefinition()->getNames();

        return $this->dropTables(array_reverse($names));
    }

    /**
     * @return ShoppingfeedObjectModelDefinition (as an array collection object)
     */
    protected function getObjectModelDefinition()
    {
        return new ShoppingfeedObjectModelDefinition($this->om->getDefinition($this->om));
    }

    /**
     * @param array $schemas
     * @return bool
     */
    protected function createTables($schemas)
    {
        return array_product(array_map(array($this, 'createTable'), $schemas));
    }

    /**
     * @param ShoppingfeedDbSchema $schema
     * @return bool
     */
    protected function createTable($schema)
    {
        return (new ShoppingfeedDbTable($this->db))->hydrate($schema)->create();
    }

    /**
     * @param array $names
     * @return bool
     */
    protected function dropTables(array $names)
    {
        return array_product(array_map(array($this, 'dropTable'), $names));
    }

    /**
     * @param string $name
     * @return bool
     */
    protected function dropTable($name)
    {
        return (new ShoppingfeedDbTable($this->db))->setName($name)->drop();
    }
}
