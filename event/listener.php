<?php
/**
*
* @package Page adddon
* @copyright (c) 2014 John Peskens (http://ForumHulp.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\pageaddon\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\pagination */
	protected $pagination;
	/** @var \phpbb\request\request */
	protected $request;
	/** @var \phpbb\template\template */
	protected $template;
	/** @var \phpbb\user */
	protected $user;

	public function __construct(\phpbb\pagination $pagination, \phpbb\request\request $request, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->pagination = $pagination;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'phpbb.pages.acp_add_edit_page'				=> 'display_tinymce',
			'phpbb.pages.modify_content_for_display'	=> 'display_content',
		);
	}

	public function display_content($event)
	{
		if ($event['content_html_enabled'])
		{
			$content = $event['content'];
			$content = explode( '<!-- pagebreak -->', $content);
			$total_pages = sizeof($content);
			$start = $this->request->variable('start', 0);

			$start = $this->pagination->validate_start($start, 1, $total_pages);
			$base_url = append_sid($event['route']);
			$this->pagination->generate_template_pagination($base_url, 'pagination', 'start', $total_pages, 1, $start);
			$event['content'] = $content[$start];
		}
	}

	public function display_tinymce()
	{
		$this->user->add_lang_ext('forumhulp/pageaddon', 'pageaddon');
		$this->template->assign_vars(array(
			'S_REPLACE_PAGES_EDITOR'	=> true,
			'LANG_EDITOR'				=> ($this->user->data['user_lang'] == 'nl') ? 'nl' : 'en'
			)
		);
	}
}
