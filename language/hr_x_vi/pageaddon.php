<?php
/**
*
* @package Page adddon
* @copyright (c) 2014 ForumHulp.com
* Croatian translation by Ančica Sečan Matijaščić (http://ancica.sunceko.net)
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
'WYSIWYG_TEXT'=>'Stranica je izmijenjena, pageaddonom s <a href="http://forumhulp.com" target="_blank">ForumHulp.com</a>, u WYSIWYG HTML uređivač.<br />S ovim dodatkom, BBKodovi ne rade.<br />Numeraciju stranica možete dodati umetanjem “Prijeloma stranica” s izbornika “Umetnite”.'
));
