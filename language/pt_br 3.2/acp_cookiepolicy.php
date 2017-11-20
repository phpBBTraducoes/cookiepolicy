<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 2.1.0-rc2] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

/// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ALL'									=> 'All pages',

	'CLICK_TO_SELECT'						=> 'Click in the box to select a colour',

	'COOKIE_BLOCK_LINKS'					=> 'Block all links',
	'COOKIE_BLOCK_LINKS_EXPLAIN'			=> 'Prevent a user accessing any links on the board until they have accepted the Cookie Policy.',
	'COOKIE_BOX_BDR_COLOUR'					=> 'Cookie box border colour',
	'COOKIE_BOX_BDR_COLOUR_EXPLAIN'			=> 'Select the border colour for the Cookie acceptance box.<br />The default colour is <strong>“#FFFF8A”</strong>',
	'COOKIE_BOX_BDR_WIDTH'					=> 'Cookie box border width',
	'COOKIE_BOX_BDR_WIDTH_EXPLAIN'			=> 'Select the border width for the Cookie acceptance box.<br />The default width is <strong>“1”</strong>',
	'COOKIE_BOX_BG_COLOUR'					=> 'Cookie box background colour',
	'COOKIE_BOX_BG_COLOUR_EXPLAIN'			=> 'Select the background colour for the Cookie acceptance box.<br />The default colour is <strong>“#00608F”</strong>',
	'COOKIE_BOX_HREF_COLOUR'				=> 'Cookie box link colour',
	'COOKIE_BOX_HREF_COLOUR_EXPLAIN'		=> 'Select the acceptance link colour for the Cookie acceptance box.<br />The default colour is <strong>“#FFFFFF”</strong>',
	'COOKIE_BOX_TXT_COLOUR'					=> 'Cookie box text colour',
	'COOKIE_BOX_TXT_COLOUR_EXPLAIN'			=> 'Select the text colour for the Cookie acceptance box.<br />The default colour is <strong>“#DBDB00”</strong>',
	'COOKIE_BOX_POSITION'					=> 'Cookie box position',
	'COOKIE_BOX_POSITION_EXPLAIN'			=> 'Position the cookie acceptance box on the left or right.',

	'COOKIE_CUSTOM_PAGE'					=> 'Use custom cookie page colours',
	'COOKIE_CUSTOM_PAGE_CORNERS'			=> 'Use rounded corners',
	'COOKIE_CUSTOM_PAGE_CORNERS_EXPLAIN'	=> 'Use rounded corners on the cookie policy page.<br />Setting this to <strong>No</strong> will mean that the page has square corners.',
	'COOKIE_CUSTOM_PAGE_EXPLAIN'			=> 'Use the custom colours for the cookie policy page.<br />Setting this to <strong>No</strong> will use the default colours from your style.',
	'COOKIE_CUSTOM_PAGE_RADIUS'				=> 'Custom page radius',
	'COOKIE_CUSTOM_PAGE_RADIUS_EXPLAIN'		=> 'Sets the number of pixels for rounding the custom Cookie page corners. Setting this to 0 means that the page will have square corners.<br /><em>The default for prosilver is 7px.</em>',

	'COOKIE_EXPIRE'							=> 'Cookie expires',
	'COOKIE_EXPIRE_EXPLAIN'					=> 'Setting this to yes will require the user to re accept the Cookie Policy annually.',

	'COOKIE_LEFT'							=> 'Left',

	'COOKIE_PAGE_BG_COLOUR'					=> 'Custom cookie page background colour',
	'COOKIE_PAGE_BG_COLOUR_EXPLAIN'			=> 'Select the background colour for the Cookie policy page.',
	'COOKIE_PAGE_TXT_COLOUR'				=> 'Custom cookie page text colour',
	'COOKIE_PAGE_TXT_COLOUR_EXPLAIN'		=> 'Select the text colour for the Cookie policy page.',

	'COOKIE_POLICY_ENABLE'					=> 'Cookie policy enable',
	'COOKIE_POLICY_ENABLE_EXPLAIN'			=> 'Enable/disable all user’s requirement to accept the use of cookies, under EU Cookie directive (2012), on this board.',
	'COOKIE_POLICY_EXPLAIN'					=> 'Set the options to manage the Cookie Policy.',
	'COOKIE_POLICY_ON_INDEX'				=> 'Show on index only',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'		=> 'Show the cookie policy acceptance box only on the index page or on all pages.',
	'COOKIE_POLICY_OPTIONS'					=> 'Cookie policy options',

	'COOKIE_REQUIRE'						=> 'Require cookie acceptance',
	'COOKIE_REQUIRE_EXPLAIN'				=> 'Require the acceptance of board cookies before a member can either register or log-in.<br />Setting this to “Yes” will still allow a user to view the board (subject to permissions).',
	'COOKIE_RIGHT'					   		=> 'Right',

	'COOKIE_SHOW_POLICY'					=> 'Show cookie policy',
	'COOKIE_SHOW_POLICY_EXPLAIN'			=> 'Setting this to yes will display the nav bar link to the cookie policy when the Cookie Policy is disabled, i.e. you can have a cookie policy without the need to have the acceptance box.',

	'CUSTOM_BOX_COLOURS'					=> 'Cookie box colours',
	'CUSTOM_BOX_COLOURS_EXPLAIN'			=> '<strong>Here you can change the colours to suit your style for the Cookie acceptance box.</strong>',
	'CUSTOM_PAGE_COLOURS'					=> 'Custom cookie page options',
	'CUSTOM_PAGE_COLOURS_EXPLAIN'			=> '<strong>Here you can change the colours and/or set rounded corners to suit your style for the Cookie policy page.</strong>',

	'PIXELS'								=> 'px',
));
