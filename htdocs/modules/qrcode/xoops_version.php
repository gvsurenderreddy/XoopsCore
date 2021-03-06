<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * @copyright XOOPS Project (http://xoops.org)
 * @license   GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package   qrcode
 * @author    Laurent JEN - aka DuGris
 */

$modversion                = array();
$modversion['name']        = _MI_QRCODE_NAME;
$modversion['description'] = _MI_QRCODE_DSC;
$modversion['version']     = 0.1;
$modversion['author']      = 'Xoops Core Development Team';
$modversion['nickname']    = 'Laurent JEN (aka DuGris)';
$modversion['credits']     = 'The XOOPS Project';
$modversion['license']     = 'GNU GPL 2.0';
$modversion['license_url'] = 'http://www.gnu.org/licenses/gpl-2.0.html';
$modversion['official']    = 1;
$modversion['help']        = 'page=help';
$modversion['image']       = 'images/logo.png';
$modversion['dirname']     = 'qrcode';

//about
$modversion['release_date']        = '2012/11/25';
$modversion['module_website_url']  = 'http://www.xoops.org/';
$modversion['module_website_name'] = 'XOOPS';
$modversion['module_status']       = 'ALPHA 1';
$modversion['min_php']             = '5.3.7';
$modversion['min_xoops']           = '2.6.0';

// paypal
$modversion['paypal'] = array(
    'business'      => 'xoopsfoundation@gmail.com',
    'item_name'     => _MI_QRCODE_DSC,
    'amount'        => 0,
    'currency_code' => 'USD',
);

// Manage extension
$modversion['extension'] = 1;

// Admin menu
// Set to 1 if you want to display menu generated by system module
$modversion['system_menu'] = 1;

// Admin things
$modversion['hasAdmin']   = true;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';

// Menu
$modversion['hasMain'] = 0;

// Blocks
//$modversion['blocks'] = array();

// Preferences
$modversion['config'] = array();

$modversion['config'][] = array(
    'name'        => 'qrcode_ecl',
    'title'       => '_MI_QRCODE_ECL',
    'description' => '_MI_QRCODE_ECLDSC',
    'formtype'    => 'select',
    'valuetype'   => 'text',
    'options'     => array(
        '_MI_QRCODE_ECL_L' => 'L',
        '_MI_QRCODE_ECL_M' => 'M',
        '_MI_QRCODE_ECL_Q' => 'Q',
        '_MI_QRCODE_ECL_H' => 'H'
    ),
    'default'     => 'L',
);

$modversion['config'][] = array(
    'name'        => 'qrcode_mps',
    'title'       => '_MI_QRCODE_MPS',
    'description' => '_MI_QRCODE_MPSDSC',
    'formtype'    => 'textbox',
    'valuetype'   => 'int',
    'default'     => 4,
);

$modversion['config'][] = array(
    'name'        => 'qrcode_margin',
    'title'       => '_MI_QRCODE_MARGIN',
    'description' => '_MI_QRCODE_MARGINDSC',
    'formtype'    => 'textbox',
    'valuetype'   => 'int',
    'default'     => 4,
);

$modversion['config'][] = array(
    'name'        => 'qrcode_bgcolor',
    'title'       => '_MI_QRCODE_BGCOLOR',
    'description' => '_MI_QRCODE_BGCOLORDSC',
    'formtype'    => 'color',
    'valuetype'   => 'text',
    'default'     => '#FFFFFF',
);

$modversion['config'][] = array(
    'name'        => 'qrcode_fgcolor',
    'title'       => '_MI_QRCODE_FGCOLOR',
    'description' => '_MI_QRCODE_FGCOLORDSC',
    'formtype'    => 'color',
    'valuetype'   => 'text',
    'default'     => '#000000',
);
