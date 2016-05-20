<?php
/**
 *
 * @package Recent Topics Extension
 * English translation by PayBas
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge(
	$lang, array(
	'RT_ENABLE'              => 'Display recent topics',
	'RT_LOCATION'            => 'Select location to display recent topics',
	'RT_LOCATION_EXP'        => 'For prosilver styles.',
	'RT_SORT_START_TIME'     => 'Sort recent topics by topic start time',
	'RT_SORT_START_TIME_EXP' => 'Instead of sorting them by last post time.',
	'RT_UNREAD_ONLY'         => 'Only display unread topics in recent topics',
	)
);
