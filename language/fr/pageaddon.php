<?php
/**
*
* @package Page adddon
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @translated into French by Galixte (http://www.galixte.com)
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
	'WYSIWYG_TEXT'	=> 'Cette page a été transformée en un éditeur HTML WYSIWYG grâce à l’add-on de <a href="http://forumhulp.com" target="_blank">ForumHulp.com</a> pour l’extension Officielle Pages. Les BBCodes ne fonctionneront pas avec cet add-on. Vous pouvez paginer vos pages en insérant des sauts de page depuis le menu Insertion.'
));
