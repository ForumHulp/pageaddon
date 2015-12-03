<?php
/**
 *
 * @package Page adddon
 * @copyright (c) 2014 John Peskens (http://ForumHulp.com)
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace forumhulp\pageaddon;

class ext extends \phpbb\extension\base
{
	public function is_enableable()
	{
		if (!class_exists('forumhulp\helper\helper'))
		{
			$this->container->get('user')->add_lang_ext('forumhulp/pageaddon', 'pageaddon');
			trigger_error($this->container->get('user')->lang['FH_HELPER_NOTICE'], E_USER_WARNING);
		}

		if (!$this->container->get('ext.manager')->is_enabled('forumhulp/helper'))
		{
			$this->container->get('ext.manager')->enable('forumhulp/helper');
		}

		$manager = $this->container->get('ext.manager');

		return $manager->is_enabled('phpbb/pages') && class_exists('forumhulp\helper\helper');
	}

	public function enable_step($old_state)
	{
		if (empty($old_state))
		{
			$this->container->get('user')->add_lang_ext('forumhulp/pageaddon', 'pageaddon');
			$this->container->get('template')->assign_var('L_EXTENSION_ENABLE_SUCCESS', $this->container->get('user')->lang['EXTENSION_ENABLE_SUCCESS'] .
				(isset($this->container->get('user')->lang['PAGEADDON_NOTICE']) ?
					$this->container->get('user')->lang['PAGEADDON_NOTICE'] : ''));
		}

		// Run parent enable step method
		return parent::enable_step($old_state);
	}
}
