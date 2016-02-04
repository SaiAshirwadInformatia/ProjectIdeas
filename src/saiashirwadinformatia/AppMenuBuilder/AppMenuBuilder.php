<?php
/**
 *  App Menu Builder
 *
 *  @author Rohan Sakhale <rs@saiashirwad.com>
 */
namespace saiashirwadinformatia\AppMenuBuilder;

class AppMenuBuilder
{
    private $menu;

    private $baseurl;

    public function __construct()
    {
        $this->menu = ItemList();
    }

    /**
     * @param  $url
     * @return null
     */
    public function setBaseUrl($url)
    {
        if (!$url) {
            return;
        }

        $this->url = $url;
    }
}
