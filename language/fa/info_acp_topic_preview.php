<?php
/**
*
* info_acp_topic_preview [English]
*
* @package language
* @copyright (c) 2013 Matt Friedman
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'TOPIC_PREVIEW'					=> 'پیشنمایش پست',
	'TOPIC_PREVIEW_EXPLAIN'			=> 'پیش نمایش موضوع و نمایش گزیده ای کوتاه از متن از اولین پست در یک tooltip در حالی که نشانه گر ماوس روی آن است.',
	'TOPIC_PREVIEW_SETTINGS'		=> 'تنظیمات پیشنمایش پستها',
	'TOPIC_PREVIEW_DISPLAY'			=> 'نمایش مود پیشنمایش پستها',
	'TOPIC_PREVIEW_LENGTH'			=> 'طول موضوع متن پیشنمایش',
	'TOPIC_PREVIEW_LENGTH_EXPLAIN'	=> 'تعداد حروف نمایش دهنده در toplip که به طور پیشفرض 150 حرف است.      برای بکار انداختن این ویژگی 0 را وارد کنید.',
	'TOPIC_PREVIEW_STRIP'			=> 'مخفی کردن BBcode ها',
	'TOPIC_PREVIEW_STRIP_EXPLAIN'	=> 'لیست BBcode هایی که نمیخواهید در toplip نمایش داده شود.   برای مثال متن های پنهانی که برای میهمانان قابل مشاهده نیست.',
	'TOPIC_PREVIEW_AVATARS'			=> 'نمایش آواتار کاربر در جی کوئری',
	'TOPIC_PREVIEW_LAST_POST'		=> 'نمایش آخرین پست موضوع در جی کوئری',
	'CHARS'							=> 'کاراکتر',

	'TOPIC_PREVIEW_STYLE_SETTINGS'	=> 'Topic preview style settings',
	'TOPIC_PREVIEW_WIDTH'			=> 'Width of topic previews (in pixels)',
	'TOPIC_PREVIEW_DELAY'			=> 'Delay before showing topic previews (in milliseconds)',
	'TOPIC_PREVIEW_DRIFT'			=> 'Animated drift effect (in pixels)',
	'TOPIC_PREVIEW_DRIFT_EXPLAIN'	=> 'Amount of vertical animation on fadeout (use negative values to change direction).',
	'TOPIC_PREVIEW_THEME'			=> 'Theme for %s',
	'TOPIC_PREVIEW_THEME_EXPLAIN'	=> 'Choose a topic preview theme for %s.',
	'THEME'							=> 'theme',
	'MILLISECOND'					=> 'ms',
));
