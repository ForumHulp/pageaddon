<?php
/**
*
* Pages: TinyMCE WYSIWYG Add-on extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 ForumHulp.com
* @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'WYSIWYG_TEXT'			=> 'Cette page a été transformée en un éditeur HTML WYSIWYG grâce à l’add-on de <a href="http://forumhulp.com" target="_blank">ForumHulp.com</a> pour l’extension officielle « Pages ». Les BBCodes ne fonctionneront pas avec cet add-on. Vous pouvez paginer vos pages en insérant des sauts de page depuis le menu Insertion.',
	'FH_HELPER_NOTICE'		=> 'L’extension : « Forumhulp Helper » n’est pas installée !<br />Il est nécessaire de télécharger son archive disponible sur cette page : <a href="https://github.com/ForumHulp/helper" target="_blank">Forumhulp Helper</a>, puis de l’envoyer sur son espace FTP et de l’activer.',
	'PAGEADDON_NOTICE'		=> '<div class="phpinfo"><p class="entry">Cette extension transforme l’extension phpBB « Pages » en un éditeur de texte WYSIWYG. Pour y accéder, se rendre dans le panneau d’administration, onglet « EXTENSIONS », catégorie « Pages », rubrique « Gestion des Pages ».</p></div>',
));
