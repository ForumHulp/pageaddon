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
	'WYSIWYG_TEXT'	=> 'Esta página ha sido transformado en un editor WYSIWYG HTML por <a href="http://forumhulp.com" target="_blank">ForumHulp.com</a>. Los BBCodes no funcionarán con este complemento. Puede agregar paginación a sus páginas insertando "saltos de página" desde el menú Insertar.'
));
