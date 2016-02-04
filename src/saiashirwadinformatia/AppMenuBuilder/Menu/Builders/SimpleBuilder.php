<?php
/**
 *  Admin LTE Menu Builder
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu\Builder;

class SimpleBuilder implements MenuBuilderInterface
{

    public $parentClass;

    public $childClass;

    public $activeClass;

    public $currentUrl;

    private function itemElement(AbstractItem $item, $className = '')
    {
        $html = "<li class='" . $className . "' >
            <a href='" . $item->getUrl() . "'>";
        if ($item->icon) {
            $html .= $item->getIconHTML();
        }
        $html .= "<span> " . $item->label . "</span>";
        if ($item->hasChildren()) {
            $html .= '<i class="fa fa-angle-left pull-right"></i>';
        }
        $html .= "</a>";
        if ($item->hasChildren()) {
            $html .= '<ul class="' . $this->childClass . '">';
            $html .= $this->buildMenu($item->getChildren());
            $html .= '</ul>';
        }
        return $html;
    }

    /**
     * @param ItemList $items
     * @return mixed
     */
    private function buildMenu(ItemList $items)
    {
        $html = '';
        $active = '';
        if (count($items->size()) > 0) {
            $menuList = $items->getMenu();
            foreach ($menuList as $key => $menu) {
                if ($menu->isActive($currentUrl)) {
                    $active = $this->activeClass;
                }
                if ($item->hasChildren()) {
                    $html .= $this->itemElement($item, $this->parentClass . ' ' . $active);
                } else {
                    if ($menu->label) {
                        $html .= $this->itemElement($item, $active);
                    }
                }
            }
        }
        return $html;
    }

    /**
     * @param ItemList $items
     */
    public function build(ItemList $items, $parentClass = '', $childClass = '', $activeClass = '', $currentUrl = '')
    {
        $this->parentClass = $parentClass;
        $this->childClass = $childClass;
        $this->activeClass = $activeClass;
        $this->currentUrl = $currentUrl;
        return '<ul class="sidebar-menu">' . self::buildMenu($items) . '</ul>';
    }
}
