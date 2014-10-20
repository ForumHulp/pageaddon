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
	'WYSIWYG_TEXT'	=> 'This page has been transformed into a WYSIWYG HTML editor with pageaddon from <a href="http://forumhulp.com" target="_blank">ForumHulp.com</a>. BBCodes will not work with this add-on. You can add pagination to your pages by inserting “Page Breaks” from the Insert menu.'
));
