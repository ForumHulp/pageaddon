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
	'WYSIWYG_TEXT'	=> 'Deze pagina is gewijzigd in een WYSIWYG HTML editor met pageaddon van <a href="http://forumhulp.com" target="_blank">ForumHulp.com</a>. BBCodes werken er niet meer mee. Meerdere pagina\'s kan je toevoegen door een pagina-einde toe te voegen.'
));
