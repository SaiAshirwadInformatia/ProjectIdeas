<?php
/**
 *  PHP Config Factory
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu\Factory;

class PHPConfigFactory extends MenuFactory implements MenuFactoryInterface
{

    public function build($config)
    {
        if (!file_exists($config)) {
            throw new \InvalidArgumentException('Config file (' . $config . ') not found');
        }
        $itemList = new ItemList();
        $menuList = include $config;
    }
}
