<?php
/**
 *  Item Interface
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu;

interface ItemInterface
{

    public function setKey($key);

    public function getKey();

    public function setLabel($label);

    public function getLabel();

    public function setUrl($url);

    public function getUrl();

    public function setIcon($icon);

    public function getIcon();

    public function setPermission($permission);

    public function getPermission();

    public function addChild($key, $label, $url, $icon = null, $permission = null, AbstractMenuList $children = null);

    public function addChildObject($key, ItemInterface $item);

    public function addChildren(AbstractMenuList $children);

    public function getChildren();

    public function getIconHTML();
}
