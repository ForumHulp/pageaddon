<?php
/**
*
* @package Page adddon
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'WYSIWYG_TEXT'	=> 'This page is now transformed in a html editor with pageaddon from <a href="http://forumhulp.com" target="_blank">ForumHulp.com</a>. BB-codes don\'t work on this page anymore and it\'s transformed into a wysiwyg editor. You also can use pagination now by inserting page-breaks into your html text.'
));
