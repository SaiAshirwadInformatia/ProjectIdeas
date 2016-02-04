<?php
/**
 *  Menu Factory
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder\Menu\Factory;

abstract class MenuFactory
{

    public $current_url;

    public function prepareMenu(ItemList $list)
    {
        foreach ($menuList as $val => $node) {
            if (!empty($node['url'])) {
                $active = (strpos($page, $node['url']) !== false) ? "active" : " ";
            } else {
                $active = '';
            }
            // Running array for Main parent links
            if (!empty($node['childs'])) {
                $html .= " <li class='treeview " . $active . "'>
			<a ";
                if (!empty($node['url'])) {
                    $html .= "href='" . $core->basehref . '/' . $node['url'] . "'";
                } else {
                    $html .= "href='#'";
                }
                $html .= ">";
                if (isset($node['icon']) and $node['icon']) {
                    $html .= $icons->$node['icon'];
                }
                if (isset($node['label'])) {
                    $html .= "<span> " . $node['label'] . "</span>" . '<i class="fa fa-angle-left pull-right"></i>' . "</a>";
                }
                // Running submenu
                $html .= '<ul class="treeview-menu">';
                $html .= buildMenu($node['childs']);
                $html .= "</ul>";
            } else {
                if (isset($node['label'])) {
                    $html .= "<li class='" . $active . "' ><a href='" . $core->basehref .
                    '/' . $node['url'] . "'>";
                    if (isset($node['icon']) and $node['icon']) {
                        $html .= $icons->$node['icon'];
                    }
                    $html .= "<span> " . $node['label'] . "</span></a>";
                }
            }

            $html .= "</li>";
        }
    }
}
