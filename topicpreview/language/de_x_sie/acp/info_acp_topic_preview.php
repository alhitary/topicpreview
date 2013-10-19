<?php
/**
*
* info_acp_topic_preview [German]
* 
* @package language
* @copyright (c) 2013 Matt Friedman - author AmigoJack
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
	'TOPIC_PREVIEW'					=> 'Themenvorschau',
	'TOPIC_PREVIEW_EXPLAIN'			=> 'Fährt man mit der Maus über den Thementitel, wird im Browser ein Textausschnitt des ersten Beitrags angezeigt.',
	'TOPIC_PREVIEW_SETTINGS'		=> 'Einstellungen Themenvorschau',
	'TOPIC_PREVIEW_DISPLAY'			=> 'Zeige Themenvorschau',
	'TOPIC_PREVIEW_LENGTH'			=> 'Länge des Vorschautextes',
	'TOPIC_PREVIEW_LENGTH_EXPLAIN'	=> 'Maximal auszugebene Zeichen des Textes (Standard sind 150). Die Angabe “0” deaktiviert den Vorschautext gänzlich.',
	'TOPIC_PREVIEW_STRIP'			=> 'Aus Themenvorschau zu entfernende BBcodes',
	'TOPIC_PREVIEW_STRIP_EXPLAIN'	=> 'Aufzählung aller BBcodes, die (mitsamt deren Inhalt) nicht im Vorschautext erscheinen sollen (z.B. für Spoiler oder versteckte Texte). Mehrere BBcodes müssen mit “|” getrennt werden - Beispiel: “spoiler|hide|code”.',
	'TOPIC_PREVIEW_AVATARS'			=> 'Zeige Nutzeravatare (in jQuery-Themenvorschau)',
	'TOPIC_PREVIEW_LAST_POST'		=> 'Zeige “Letzter Beitrag”-Text (in jQuery-Themenvorschau)',
	'CHARS'							=> 'Zeichen',
));