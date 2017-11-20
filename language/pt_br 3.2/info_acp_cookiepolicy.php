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
	'COOKIE_POLICY'			=> 'Política de cookies',
	'COOKIE_POLICY_LOG'		=> '<strong>Configurações de política de cookies atualizadas<</strong>',
	'COOKIE_POLICY_MANAGE'	=> 'Gerenciar configurações',

	'LOG_CURL_ERROR'		=> '<strong>cURL não está disponível neste servidor</strong>',
	'LOG_IP_LOOKUP_ERROR'	=> '<strong>A pesquisa de IP falhou</strong>',
	'LOG_QUOTA_EXCEEDED'	=> '<strong>A cota de pesquisa por hora foi excedida</strong>',
	'LOG_SERVER_ERROR'		=> '<strong>Não foi possível determinar o endereço IP</strong>',
));
