<?php
/**
 * @version		$Id: hr-HR.localise.php 74 2011-11-15 19:37:46Z wooer $
 * @revision	$Rev$
 * @author		$Author$
 * @date		$Date$
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters and joomla-hrvatska.com. All rights reserved.
 * @license	GNU General Public License version 2 or later; see LICENSE.txt
 */

 defined('_JEXEC') or die;
 
/**
 * hr-HR localise class
 *
 * @package		Joomla.Site
 * @since		1.6
 */
abstract class hr_HRLocalise {
	/**
	 * Returns the potential suffixes for a specific number of items
	 *
	 * @param	int $count  The number of items.
	 * @return	array  An array of potential suffixes.
	 * @since	1.6
	 */
	public static function getPluralSuffixes($count) {
		if ($count == 0) {
			$return =  array('0');
		}
		elseif($count == 1) {
			$return =  array('1');
		}
		else {
			$return = array('MORE');
		}
		return $return;
	}
	/**
	 * Returns the ignored search words
	 *
	 * @return	array  An array of ignored search words.
	 * @since	1.6
	 */
	public static function getIgnoredSearchWords() {
		$search_ignore = array();
		$search_ignore[] = "a";
		$search_ignore[] = "i";
		$search_ignore[] = "ili";
		return $search_ignore;
	}
	/**
	 * Returns the lower length limit of search words
	 *
	 * @return	integer  The lower length limit of search words.
	 * @since	1.6
	 */
	public static function getLowerLimitSearchWord() {
		return 3;
	}
	/**
	 * Returns the upper length limit of search words
	 *
	 * @return	integer  The upper length limit of search words.
	 * @since	1.6
	 */
	public static function getUpperLimitSearchWord() {
		return 20;
	}
	/**
	 * Returns the number of chars to display when searching
	 *
	 * @return	integer  The number of chars to display when searching.
	 * @since	1.6
	 */
	public static function getSearchDisplayedCharactersNumber() {
		return 200;
	}
}
