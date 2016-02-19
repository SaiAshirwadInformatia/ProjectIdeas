<?php
/**
 *  Admin LTE Menu Builder
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu\Builder;

use saiashirwadinformatia\AppMenuBuilder\Menu\AbstractMenuList;

class AdminLTEBuilder extends SimpleBuilder implements MenuBuilderInterface
{

    public function __construct($currentUrl = '')
    {
        parent::__construct($currentUrl, "sidebar-menu", "treeview", "treeview-menu", "active");
    }

    /**
     * @param AbstractMenuList $items
     * @param $currentUrl
     */
    public function build(AbstractMenuList $items, $currentUrl = '')
    {
        return parent::build($items, $currentUrl);
    }
}
