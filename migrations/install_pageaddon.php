<?php
/**
*
* @package Page Addon
* @copyright (c) 2014 John Peskens (http://ForumHulp.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\pageaddon\migrations;

class install_pageaddon extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return (isset($this->config['pageaddon_version']) && version_compare($this->config['pageaddon_version'], '3.1.0.RC5', '>='));
	}

	static public function depends_on()
	{
		global $db, $table_prefix;
		$sql = 'SELECT module_id
			FROM ' . $table_prefix . "modules
			WHERE module_class = 'acp'
				AND module_langname = 'ACP_PAGES'";
		$result = $db->sql_query($sql);
		$module_id = (int) $db->sql_fetchfield('module_id');
		$db->sql_freeresult($result);
		// Skip migration if ACP_PAGES module does not exist
		return (!$module_id) ? array('Pages') : array();
	}

	public function update_data()
	{
		return array(
			array('config.add', array('pageaddon_version', '3.1.0.RC5')),
		);
	}
}
