<?php
require_once(dirname(__FILE__).'/../../../../../init_new.php');

use Xoops\Core\Kernel\Handlers\XoopsBlockModuleLink;

/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
class BlockModuleLinkTest extends \PHPUnit_Framework_TestCase
{
    protected $myClass = 'Xoops\Core\Kernel\Handlers\XoopsBlockModuleLink';

    public function setUp()
    {
    }

    public function test___construct()
    {
        $instance=new $this->myClass();
        $this->assertInstanceOf($this->myClass, $instance);
        $value=$instance->getVars();
        $this->assertTrue(isset($value['block_id']));
        $this->assertTrue(isset($value['module_id']));
    }

    public function test_getVar100()
    {
        $instance=new $this->myClass();
        $value = $instance->getVar('block_id', '');
        $this->assertSame(null, $value);
    }

    public function test_getVar200()
    {
        $instance=new $this->myClass();
        $value = $instance->getVar('module_id', '');
        $this->assertSame(null, $value);
    }
}
