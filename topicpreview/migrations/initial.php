<?php
/**
 *
 * @package Topic Preview
 * @copyright (c) 2013 Matt Friedman
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

class phpbb_ext_vse_topicpreview_migrations_initial extends phpbb_db_migration
{

	public function effectively_installed()
	{
		return isset($this->config['topic_preview_version']);
	}

	public function update_schema()
	{
		return array(
			'add_columns'	=> array(
				$this->table_prefix . 'users'	=> array(
					'user_topic_preview'	=> array('BOOL', 1),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns'	=> array(
				$this->table_prefix . 'users'	=> array(
					'user_topic_preview',
				),
			),
		);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('topic_preview_limit', '150')),
			array('config.add', array('topic_preview_strip_bbcodes', '')),

			array('config.add', array('topic_preview_version', '1.1.0')),
		);
	}
}
