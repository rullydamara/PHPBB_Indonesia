<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
 *
 * Install [Bahasa Indonesia for Forum SI-UT]
 * @package language
 * @version $Id: viewforum.php 2019 rullydamara
 * @author 2019 rullydamara <http://damarastudio.com>
 *
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CONTROLLER_ARGUMENT_VALUE_MISSING'	=> 'Nilai yang tidak ada untuk argumen #%1$s: <strong>%3$s</strong> di kelas <strong>%2$s</strong>',
	'CONTROLLER_NOT_SPECIFIED'			=> 'Tidak ada kontroler yang telah ditentukan.',
	'CONTROLLER_METHOD_NOT_SPECIFIED'	=> 'Tidak ada metode yang ditentukan untuk pengontrol.',
	'CONTROLLER_SERVICE_UNDEFINED'		=> 'Layanan untuk kontroler “<strong>%s</strong>” tidak didefinisikan untuk ./config/services.yml.',
));
