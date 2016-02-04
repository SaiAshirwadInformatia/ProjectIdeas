<?php
/**
 *  Abstract Menu List
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu;

abstract class AbstractMenuList
{

    protected $data;

    public function __construct()
    {
        $this->data = [];
    }

    /**
     * @param  $key
     * @return mixed
     */
    public function __get($key)
    {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
        return [];
    }

    /**
     * @param $key
     * @param ItemInterface $item
     */
    public function __set($key, ItemInterface $item)
    {
        $this->data[$key] = $item;
    }

    public function size()
    {
        return count($this->data);
    }

    /**
     * @return mixed
     */
    public function getMenu()
    {
        return $this->data;
    }
}
