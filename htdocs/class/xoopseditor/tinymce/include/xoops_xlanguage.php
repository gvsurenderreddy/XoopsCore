<?php
/**
 *  TinyMCE adapter for XOOPS
 *
 * @copyright       XOOPS Project (http://xoops.org)
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package         class
 * @subpackage      editor
 * @since           2.6.0
 * @author          Laurent JEN (aka DuGris)
 * @version         $Id$
 */

$xoops = Xoops::getInstance();
if ($xoops->isActiveModule('xlanguage')) {
    return true;
}
return false;
