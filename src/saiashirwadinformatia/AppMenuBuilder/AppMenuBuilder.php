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
        $this->baseurl = 'http://localhost/AppMenuBuilder/';
        // Sample menu
        $this->menu = (include 'sampleMenu.php');
    }

    public function clear()
    {
        $this->menu = [];
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
