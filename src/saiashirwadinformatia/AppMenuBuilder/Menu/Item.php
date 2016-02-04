<?php
/**
 *  Item
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu;

class Item extends AbstractItem
{

    public function __construct($key, $label, $url, $icon = null, $permission = null, AbstractMenuList $children = null)
    {
        parent::__construct($key, $label, $url, $icon, $permission, $children);
    }

    /**
     * @param $key
     * @param $label
     * @param $url
     * @param $icon
     * @param null     $permission
     * @param null     $children
     */
    public function addChild($key, $label, $url, $icon = null, $permission = null, AbstractMenuList $children = null)
    {
        if (!$children) {
            $this->children = new ItemList();
        }
        $this->children->$key = new Item($key, $label, $url, $icon, $permission, $children);
    }

    /**
     * @param $key
     * @param ItemInterface $item
     */
    public function addChildObject($key, ItemInterface $item)
    {
        if (!$children) {
            $this->children = new ItemList();
        }
        $this->children->addObject($key, $item);
    }

    public function getIconHTML()
    {
        return '<i class="' . $this->icon . '"></i>';
    }
}
