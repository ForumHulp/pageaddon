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
			'phpbb.pages.acp_modify_content'			=> 'modify_content',
			'phpbb.pages.modify_content_for_display'	=> 'display_content'
		);
	}

	public function display_content($event)
	{
		$content_html_enabled = $event['content_html_enabled'];

		if ($content_html_enabled)
		{
			$content = $event['content'];
			$content = explode( "<!-- pagebreak -->", $content);
			$total_pages = sizeof($content);
			$start = $this->request->variable('start', 0);
			if ($start < 0 || $start > $total_pages)
			{
				$start = ($start < 0) ? 0 : floor(($total_pages) / 1) * 1;
			}

			$base_url = append_sid($event['route']);
			$this->pagination->generate_template_pagination($base_url, 'pagination', 'start', $total_pages, 1, $start);
		}
		$event['content'] = $content[$start];
	}

	public function modify_content()
	{
		$this->user->add_lang_ext('forumhulp/pageaddon', 'pageaddon');
		$this->template->assign_vars(array(
			'S_REPLACE_PAGES_EDITOR'			=> true,
			'L_ACP_PAGES_FORM_CONTENT_EXPLAIN'	=> $this->user->lang['WYSIWYG_TEXT']
		));
	}
}
