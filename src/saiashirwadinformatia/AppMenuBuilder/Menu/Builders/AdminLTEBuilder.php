<?php
/**
 *  Admin LTE Menu Builder
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu\Builder;

class AdminLTEBuilder extends SimpleBuilder implements MenuBuilderInterface
{

    public function __construct()
    {
        $this->parentClass = "treeview";
        $this->childClass = "treeview-menu";
        $this->activeClass = "active";
    }
}
