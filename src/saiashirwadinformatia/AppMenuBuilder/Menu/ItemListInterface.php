<?php
/**
 *  Item List Interface
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu;

interface ItemListInterface
{

    /**
     * @param $key
     * @param ItemInterface $item
     */
    public function addObject($key, ItemInterface $item);

    /**
     * @param $key
     * @param $label
     * @param $url
     * @param $icon
     * @param null                 $permission
     * @param nullAbstractMenuList $children
     */
    public function add($key, $label, $url, $icon = null, $permission = null, AbstractMenuList $children = null);

    /**
     * @param $key
     */
    public function get($key);

}
