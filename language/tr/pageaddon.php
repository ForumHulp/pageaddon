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
	'WYSIWYG_TEXT'	=> 'Bu sayfa <a href="http://forumhulp.com" target="_blank">ForumHulp.com</a> sayfasındaki bir eklenti ile bir WYSIWYG HTML editörüne dönüştürülmüştür. BBCodelar bu eklenti ile birlikte çalışmayacaktır. Ekeleme Menüsünden “Sayfa Ayracı” ekleyerek sayfalama yapabilirsiniz.'
));
