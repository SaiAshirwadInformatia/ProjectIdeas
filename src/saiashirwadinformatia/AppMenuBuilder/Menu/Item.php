<?php
/**
 *  Menu Item
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu;

class Item
{
    private $label;

    private $url;

    private $icon;

    private $permission;

    private $children;

    public function __construct($label, $url, $icon = null, $permission = null, $children = null)
    {

    }
}
