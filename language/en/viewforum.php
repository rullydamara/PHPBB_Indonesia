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

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Topik yang Aktif',
	'ANNOUNCEMENTS'			=> 'Pengumuman',

	'FORUM_PERMISSIONS'		=> 'Perizinan Forum',

	'ICON_ANNOUNCEMENT'		=> 'Pengumuman',
	'ICON_STICKY'			=> 'Sticky',

	'LOGIN_NOTIFY_FORUM'	=> 'Anda telah diberitahukan mengenai forum ini, silahan login untuk melihat.',

	'MARK_TOPICS_READ'		=> 'Tandai topik sudah dibaca',

	'NEW_POSTS_HOT'			=> 'Pesan baru [ Populer ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Pesan baru [ Dikunci ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Tidak ada pesan baru [ Populer ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Tidak ada pesan baru [ Dikunci ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Anda tidak memiliki perizinan yang dibutuhkan untuk membaca topik di dalam forum ini.',
	'NO_FORUMS_IN_CATEGORY'	=> 'Kategori ini tidak memiliki forum',
	'NO_UNREAD_POSTS_HOT'		=> 'Tidak ada pesan tak terbaca [ Populer ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Tidak ada pesan tak terbaca [ Dikunci ]',

	'POST_FORUM_LOCKED'		=> 'Forum ini dikunci',

	'TOPICS_MARKED'			=> 'Topik untuk forum ini telah ditandai dibaca.',

	'UNREAD_POSTS_HOT'		=> 'Pesan belum terbaca [ Populer ]',
	'UNREAD_POSTS_LOCKED'	=> 'Pesan belum terbaca  [ Dikunci ]',

	'VIEW_FORUM'			=> 'Lihat forum',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d topic',
		2	=> '%d topics',
	),
));
