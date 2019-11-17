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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Pertanyaan ini dimaksudkan untuk mencegah dan pencegahan submisi otomatis oleh bot.',
	'CONFIRM_QUESTION_WRONG'	=> 'Anda memberikan jawaban yang salah atas pertanyaan.',
	'CONFIRM_QUESTION_MISSING'	=> 'Pertanyaan untuk captcha tidak dapat diambil. Silahkan hubungi administrator panel.',

	'QUESTION_ANSWERS'			=> 'Jawaban',
	'ANSWERS_EXPLAIN'			=> 'Silahkan masukkan jawaban valid atas pertanyaan, satu setiap baris.',
	'CONFIRM_QUESTION'			=> 'Pertanyaan',

	'ANSWER'					=> 'Jawab',
	'EDIT_QUESTION'				=> 'Edit Pertanyaan',
	'QUESTIONS'					=> 'Pertanyaan',
	'QUESTIONS_EXPLAIN'			=> 'Untuk setiap bagian formulir dimana anda sudah mengaktifkan plugin Q&amp;A pengguna akan ditanyai satu dari pertanyaan-pertanyaan yang ditentukan di sini. Untuk menggunakan plugin ini paling tidak satu pertanyaan harus diatur dalam bahasa bawaannya. Pertanyaan ini seharusnya dibuat lebih mudah untuk para pengunjung untuk dijawab tetapi masih diluar kemampuan dari bot untuk menjalankan pencarian Google™. Dengan melakukan sekumpulan pengubahan secara besar dan teratur dari pertanyaan akan memberikan hasil yang lebih baik. Pengaktifan pengaturan paksa dari pertanyaan anda didasari oleh campuran huruf besar dan kecil, tanda baca ataupun spasi.',
	'QUESTION_DELETED'			=> 'Pertanyaan dihapus',
	'QUESTION_LANG'				=> 'Bahasa',
	'QUESTION_LANG_EXPLAIN'		=> 'Bahasa pertanyaan dan jawaban yang dituliskan.',
	'QUESTION_STRICT'			=> 'Perikasa',
	'QUESTION_STRICT_EXPLAIN'	=> 'Aktifkan untuk menerapkan campuran karakter, punctuation dan sepasi.',

	'QUESTION_TEXT'				=> 'Pertanyaan',
	'QUESTION_TEXT_EXPLAIN'		=> 'Pertanyaan yang diberikan ke pengguna.',

	'QA_ERROR_MSG'				=> 'Mohon diisi semua isian dan masukkan paling sedikit satu jawaban.',
	'QA_LAST_QUESTION'			=> 'Anda tidak dapat menghapus semua pertanyaan pada saat plugin aktif.',
));
