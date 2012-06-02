<?php
// IF YOU HAVE NOT DONE SO, PLEASE READ THE README FILE FOR DIRECTIONS!!!

/**
 * phpMyID - A standalone, single user, OpenID Identity Provider
 *
 * @package phpMyID
 * @author CJ Niemira <siege (at) siege (dot) org>
 * @copyright 2006-2008
 * @license http://www.gnu.org/licenses/gpl.html GNU Public License
 * @url http://siege.org/projects/phpMyID
 * @version 2
 */


/**
 * User profile
 * @name $profile
 * @global array $GLOBALS['profile']
 */
$GLOBALS['profile'] = array(
	# Basic Config - Required
	'auth_username'	=> 	'francois',
	'auth_password' =>	'952d624a0ead3b3f3ccb3b58cf05daf6',

	# Optional Config - Please see README before setting these
#	'microid'	=>	array('mailto:user@site', 'http://delegator'),
#	'pavatar'	=>	'http://your.site.com/path/pavatar.img',

	# Advanced Config - Please see README before setting these
#	'allow_gmp'	=>	false,
#	'allow_test'	=> 	false,
#	'allow_suhosin'	=>	false,
#	'auth_realm'	=>	'phpMyID',
#	'force_bigmath'	=>	false,
	'idp_url'	=>	'http://francois.rejete.com/openid/',
#	'lifetime'	=>	1440,
#	'paranoid'	=>	false, # EXPERIMENTAL

	# Debug Config - Please see README before setting these
#	'debug'		=>	false,
#	'logfile'	=>	'/tmp/phpMyID.debug.log',
);

/**
 * Simple Registration Extension
 * @name $sreg
 * @global array $GLOBALS['sreg']
 */
$GLOBALS['sreg'] = array (
	'nickname'		=> 'francois',
	'email'			=> 'francois@rejete.com',
	'fullname'		=> 'Francois Rejete',
	'dob'			=> '1982-01-06',
	'gender'		=> 'M',
	'postcode'		=> '171-0021',
	'country'		=> 'JP',
	'language'		=> 'en',
	'timezone'		=> 'Asia/Tokyo'
);

require('MyID.php');
?>
