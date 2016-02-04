<?php
/**
 *  JSON Config Factory
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu\Factory;

abstract class JSONConfigFactory implements MenuFactoryInterface
{

    public static function build($config)
    {
        if (!file_exists($config)) {
            throw new \InvalidArgumentException('Config file (' . $config . ') not found');
        }
    }
}
