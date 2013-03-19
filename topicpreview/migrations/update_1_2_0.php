<?php
/**
 *
 * @package Precise Similar Topics II
 * @copyright (c) 2010 Matt Friedman
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

class phpbb_ext_vse_topicpreview_migrations_update_1_2_0 extends phpbb_db_migration
{

	public function effectively_installed()
	{
		return isset($this->config['topic_preview_version']) && version_compare($this->config['topic_preview_version'], '1.2.0', '>=');
	}

	static public function depends_on()
	{
		return array('phpbb_ext_vse_topicpreview_migrations_initial');
	}

	public function update_data()
	{
		return array(
			// Add ACP module
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'TOPIC_PREVIEW')),
			array('module.add', array('acp', 'TOPIC_PREVIEW', array(
				'module_basename'	=> 'phpbb_ext_vse_topicpreview_acp_topic_preview_module',
				),
			)),

			array('config.update', array('topic_preview_version', '1.2.0')),
		);
	}
}
