<?php
/**
*
* Topic Preview
*
* @copyright (c) 2015 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace vse\topicpreview;

/**
* Extension class for custom enable/disable/purge actions
*/
class ext extends \phpbb\extension\base
{
	const PHPBB_VERSION = '3.1.2';

	/**
	* Enable extension if phpBB minimum version requirement is met
	*
	* @return bool
	*/
	function is_enableable()
	{
		$config = $this->container->get('config');
		return version_compare($config['version'], self::PHPBB_VERSION, '>=');
	}
}