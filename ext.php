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
		$manager = $this->container->get('ext.manager');

		return $manager->is_enabled('phpbb/pages');
	}
}
