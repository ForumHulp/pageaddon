<?php
/**
*
* @package Page adddon
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary (www.alhitary.net)
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
	'WYSIWYG_TEXT'	=> 'تم تحويل المحرر الإفتراضي إلى المحرر المرئي WYSIWYG HTML بإستخدام إضافة من الموقع <a href="http://forumhulp.com" target="_blank">ForumHulp.com</a>. أكواد البي بي BBCodes لن تعمل هنا. تستطيع ترقيم الصفحات لديك بواسطة النقر على الخيار Insert ( الموجود في القائمة العلوية للمحرر ) , ثم انقر على “Page Breaks” ( حددها في المكان الذي تريده بداخل المحرر ).'
));
