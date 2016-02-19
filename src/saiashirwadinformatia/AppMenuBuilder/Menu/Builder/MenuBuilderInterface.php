<?php
/**
 *  Menu Builder Interface
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu\Builder;

use saiashirwadinformatia\AppMenuBuilder\Menu\AbstractMenuList;

interface MenuBuilderInterface
{

    public function build(AbstractMenuList $items);
}
