<?php
/**
*
* @package Page aaddon
* @copyright (c) 2014 John Peskens (http://ForumHulp.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\pageaddon\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\DependencyInjection\Container;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var helper */
	protected $helper;
	/** @var user */
	protected $user;
	/** @var template */
	protected $template;
	/** @var Container */
	protected $phpbb_container;
	/** @var request */
	protected $request;

	public function __construct(\phpbb\controller\helper $helper, \phpbb\user $user, \phpbb\template\template $template, Container $phpbb_container, $request)
	{
		$this->helper = $helper;
		$this->user = $user;
		$this->template = $template;
		$this->phpbb_container = $phpbb_container;
		$this->request = $request;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'							=> 'load_language_on_setup',
			'phpbb.pages.modify_content'				=> 'modify_content',
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
			$total_posts = sizeof($content);
			$start = $this->request->variable('start', 0);
			if ($start < 0 || $start > $total_posts)
			{
				$start = ($start < 0) ? 0 : floor(($total_posts) / 1) * 1;
			}

			$pagination = $this->phpbb_container->get('pagination');
			$base_url = append_sid($event['route']);
			$pagination->generate_template_pagination($base_url, 'pagination', 'start', $total_posts, 1, $start);
		}
		$event['content'] = $content[$start];
	}

	public function modify_content()
	{
		$this->template->assign_vars(array(
			'S_REPLACE_PAGES_EDITOR'			=> true,
			'L_ACP_PAGES_FORM_CONTENT_EXPLAIN'	=> $this->user->lang['WYSIWYG_TEXT']
		));
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'forumhulp/pageaddon',
			'lang_set' => 'pageaddon',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
