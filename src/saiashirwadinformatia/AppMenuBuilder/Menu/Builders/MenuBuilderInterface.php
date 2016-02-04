<?php
/**
 *  Menu Builder Interface
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu\Builder;

interface MenuBuilderInterface
{

    public function build(ItemList $items);
}
