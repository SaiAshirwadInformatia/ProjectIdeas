<?php
namespace saiashirwadinformatia\test\AppMenuBuilder\Menu\Builders;

use saiashirwadinformatia\AppMenuBuilder\Menu\Builder\AdminLTEBuilder;
use saiashirwadinformatia\AppMenuBuilder\Menu\Factory\PHPConfigFactory;

class AdminLTEBuilderTest extends \PHPUnit_Framework_TestCase
{
    private $phpConfigFactory;
    private $adminLTEBuilder;
    private $phpConfig;
    private $itemList;

    public function setUp()
    {
        $this->phpConfigFactory = new PHPConfigFactory();
        $this->adminLTEBuilder = new AdminLTEBuilder('http://localhost/AppMenuBuilder');
        $this->phpConfig = SAI_APPMENUBUILDER_PATH . 'test' . DS . 'samples' . DS . 'phpConfigSampleMenu.php';
    }

    public function testBuildList()
    {
        $itemList = $this->phpConfigFactory->build($this->phpConfig);
        $this->itemList = $itemList;
        // assert total items
        echo "\n";
        echo 'Asserting Item List' . "\n";
        $this->assertEquals(3, $itemList->size());
        echo 'Test 1 Passed' . "\n";
        $level1Menu = $itemList->get('level1');
        $level2Menu = $itemList->get('level2');
        $level3Menu = $itemList->get('level3');
        $level2Child = $level2Menu->getChildren();
        $this->assertEquals(3, $level2Child->size());
        echo 'Test 2 Passed' . "\n";
        $level3Child = $level3Menu->getChildren();
        $this->assertEquals(1, $level3Child->size());
        echo 'Test 3 Passed' . "\n";
        $level31Item = $level3Child->get('level31');
        $level31Child = $level31Item->getChildren();
        $this->assertEquals(2, $level31Child->size());
        echo 'Test 4 Passed' . "\n";
    }

    public function testBuildMenu()
    {
        $itemList = $this->phpConfigFactory->build($this->phpConfig);
        $menu = $this->adminLTEBuilder->build($itemList, '');
        $this->assertEquals('<ul class="sidebar-menu"><li class="" ><a href="http://localhost/AppMenuBuilder/level1"><i class="fa-dashboard"></i><span> Level 1</span></a></li><li class=" " ><a href="http://localhost/AppMenuBuilder/level2"><i class="fa-adjust"></i><span> Level 2</span><i class="fa fa-angle-left pull-right"></i></a><ul class=""><li class="" ><a href="#baseurl#level2.1"><i class="fa-circle-o"></i><span> Level 2.1</span></a></li><li class="" ><a href="#baseurl#level2.2"><i class="fa-circle-o"></i><span> Level 2.2</span></a></li><li class="" ><a href="#baseurl#level2.3"><i class="fa-circle-o"></i><span> Level 2.3</span></a></li></ul></li><li class=" " ><a href="http://localhost/AppMenuBuilder/level2"><i class="fa-adjust"></i><span> Level 2</span><i class="fa fa-angle-left pull-right"></i></a><ul class=""><li class=" " ><a href="#baseurl#level3.1"><i class="fa-circle-o"></i><span> Level 3.1</span><i class="fa fa-angle-left pull-right"></i></a><ul class=""><li class="" ><a href="#baseurl#level3.1.1"><i class="fa-circle-o"></i><span> Level 3.1.1</span></a></li><li class="" ><a href="#baseurl#level3.1.2"><i class="fa-circle-o"></i><span> Level 3.1.2</span></a></li></ul></li></ul></li></ul>', $menu);
    }
}
