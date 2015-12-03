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
	'WYSIWYG_TEXT'		=> 'This page has been transformed into a WYSIWYG HTML editor with pageaddon from <a href="http://forumhulp.com" target="_blank">ForumHulp.com</a>. BBCodes will not work with this add-on. You can add pagination to your pages by inserting “Page Breaks” from the Insert menu.',
	'FH_HELPER_NOTICE'		=> 'Forumhulp helper application does not exist!<br />Download <a href="https://github.com/ForumHulp/helper" target="_blank">forumhulp/helper</a> and copy the helper folder to your forumhulp extension folder.',
	'PAGEADDON_NOTICE'		=> '<div class="phpinfo"><p class="entry">This extension transforms phpBB Pages in a WYSIWYG editor. Jump to Pages in ACP to see this extension.</p></div>',
));
