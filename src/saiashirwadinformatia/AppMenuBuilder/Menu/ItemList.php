<?php
/**
 *  Item List
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu;

class ItemList extends AbstractMenuList implements ItemListInterface
{

    /**
     * @param $key
     * @param ItemInterface $item
     */
    public function addObject($key, ItemInterface $item)
    {
        $this->data[$key] = $item;
    }

    /**
     * @param $key
     * @param $label
     * @param $url
     * @param $icon
     * @param null $permission
     * @param nullAbstractMenuList $children
     */
    public function add($key, $label, $url, $icon = null, $permission = null, AbstractMenuList $children = null)
    {
        $this->data[$key] = new Item($key, $label, $url, $icon, $permission, $children);
    }

    /**
     * @param  $key
     * @return mixed
     */
    public function get($key)
    {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
        return [];
    }

}
