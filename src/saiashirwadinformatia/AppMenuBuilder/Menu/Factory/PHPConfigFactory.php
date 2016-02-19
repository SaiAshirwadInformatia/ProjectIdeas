<?php
/**
 *  PHP Config Factory
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu\Factory;

use saiashirwadinformatia\AppMenuBuilder\Menu\ItemList;

class PHPConfigFactory extends MenuFactory implements MenuFactoryInterface
{

    /**
     * @param $config
     */
    public function build($config)
    {
        if (!file_exists($config)) {
            throw new \InvalidArgumentException('Config file (' . $config . ') not found');
        }
        $itemList = new ItemList();
        $menuList = include $config;
        foreach ($menuList as $menuKey => $menuArr) {
            $this->addItem($menuKey, $menuArr, $itemList);
        }
        return $itemList;
    }
}
