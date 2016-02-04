<?php
/**
 *  Menu Factory
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu\Factory;

abstract class MenuFactory
{
    const JSON_CONFIG = 'JSONConfigFactory';

    const PHP_CONFIG = 'PHPConfigFactory';

    const DB_CONFIG = 'DBConfigFactory';

    public function build($config, $type = null)
    {
        if (!$type) {
            $type = self::PHP_CONFIG;
        }
        $className = __NAMESPACE__ . '\\' . $type;
        if (!class_exists($className)) {
            throw new \InvalidArgumentException('Missing Menu Factory class.');
        }
        return $className($config);
    }
}
