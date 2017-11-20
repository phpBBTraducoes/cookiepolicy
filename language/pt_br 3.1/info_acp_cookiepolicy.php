<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.1.3] (https://github.com/phpBBTraducoes)
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
	'ALL'								=> 'Todos',

	'CLICK_TO_SELECT'					=> 'Clique na caixa para selecionar uma cor',

	'COOKIE_BOX_BDR_COLOUR'				=> 'cor da borda da caixa de cookies',
	'COOKIE_BOX_BDR_COLOUR_EXPLAIN'		=> 'Selecione a cor da borda para a caixa de aceitação de cookies.<br />A cor padrão é <strong>"#FFFF8A"</strong>',
	'COOKIE_BOX_BDR_WIDTH'				=> 'Largura da borda da caixa de cookies',
	'COOKIE_BOX_BDR_WIDTH_EXPLAIN'		=> 'Selecione a largura da borda para a caixa de aceitação de cookies.<br />A largura padrão é <strong>"1"</strong>',
	'COOKIE_BOX_BG_COLOUR'				=> 'Cor do fundo da caixa de cookies',
	'COOKIE_BOX_BG_COLOUR_EXPLAIN'		=> 'Selecione a cor de fundo para a caixa de aceitação de cookies.<br />A cor padrão é <strong>"#00608F"</strong>',
	'COOKIE_BOX_HREF_COLOUR'			=> 'Cor do link da caixa de cookies',
	'COOKIE_BOX_HREF_COLOUR_EXPLAIN'	=> 'Selecione a cor do link de aceitação para a caixa de aceitação de cookies.<br />A cor padrão é <strong>"#FFFFFF"</strong>',
	'COOKIE_BOX_TXT_COLOUR'				=> 'Cor do texto da caixa de cookies',
	'COOKIE_BOX_TXT_COLOUR_EXPLAIN'		=> 'Selecione a cor do texto para a caixa de aceitação de cookies.<br />A cor padrão é <strong>"#DBDB00"</strong>',
	'COOKIE_BOX_POSITION'				=> 'Posição da caixa de cookies',
	'COOKIE_BOX_POSITION_EXPLAIN'		=> 'Posicione a caixa de aceitação de cookies no lado esquerdo ou direito.',

	'COOKIE_CUSTOM_PAGE'				=> 'Use cores personalizadas na página de cookies',
	'COOKIE_CUSTOM_PAGE_EXPLAIN'		=> 'Use as cores personalizadas para a página de política de cookies.<br /> Configurando isso para <strong>Não</strong> usará as cores padrão.',

	'COOKIE_DETECT'						=> 'Detectar se o cookie é necessário',
	'COOKIE_DETECT_EXPLAIN'				=> 'Isso tentará detectar se o usuário está em um estado da EU e só exigirá aceitação de cookies para esses usuários. <br /><strong>Nota:</strong> Isso pode não ser preciso e não é recomendado para forum onde o Espera-se que a maioria dos usuários seja da EU.',

	'COOKIE_EXPIRE'						=> 'Cookies expiram',
	'COOKIE_EXPIRE_EXPLAIN'				=> 'Definir isso para sim exigirá que o usuário aceite novamente a Política de cookies anualmente.',

	'COOKIE_LEFT'						=> 'Esquerda',
	'COOKIE_LOG_ERRORS'					=> 'Log de erros',
	'COOKIE_LOG_ERRORS_EXPLAIN'			=> 'Registro todos os erros detectados ao pesquisar o endereço IP do usuário.',

	'COOKIE_PAGE_BG_COLOUR'				=> 'Cor de fundo personalizada na página de cookie ',
	'COOKIE_PAGE_BG_COLOUR_EXPLAIN'		=> 'Selecione a cor de fundo para a página de política de cookies.',
	'COOKIE_PAGE_TXT_COLOUR'			=> 'Cor do texto personalizada na página do cookie',
	'COOKIE_PAGE_TXT_COLOUR_EXPLAIN'	=> 'Selecione a cor do texto para a página de política de cookies.',

	'COOKIE_POLICY'						=> 'Política de cookies',
	'COOKIE_POLICY_ENABLE'				=> 'Ativar política de cookies',
	'COOKIE_POLICY_ENABLE_EXPLAIN'		=> 'Ativar/desativar todos os requisitos do usuário para aceitar o uso de cookies, de acordo com a diretriz de Cookie da EU (2012), neste forum.',
	'COOKIE_POLICY_EXPLAIN'				=> 'Defina as opções para gerenciar a Política de cookies.',
	'COOKIE_POLICY_LOG'					=> '<strong>Configurações de política de cookies atualizadas</strong>',
	'COOKIE_POLICY_MANAGE'				=> 'Gerenciar configurações',
	'COOKIE_POLICY_ON_INDEX'			=> 'Mostrar apenas no índice',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'	=> 'Mostre a caixa de aceitação da política de cookies em todas as páginas ou apenas na página de índice.',
	'COOKIE_POLICY_OPTIONS'				=> 'Opções de Política de Cookies',

	'COOKIE_RIGHT'						=> 'Direita',

	'COOKIE_SHOW_POLICY'				=> 'Mostrar política de cookies',
	'COOKIE_SHOW_POLICY_EXPLAIN'		=> 'Definir isso para sim mostrará o link da barra de navegação para a política de cookies quando a Política de cookies estiver desativada, ou seja, você pode ter uma política de cookies sem a necessidade de ter a caixa de aceitação.',

	'CUSTOM_BOX_COLOURS'				=> 'Cores da caixa de cookies',
	'CUSTOM_BOX_COLOURS_EXPLAIN'		=> '<strong>Aqui você pode mudar as cores para se adequar ao seu estilo para a caixa de aceitação de cookies.</strong>',
	'CUSTOM_PAGE_COLOURS'				=> 'Cores personalizadas da página de cookies',
	'CUSTOM_PAGE_COLOURS_EXPLAIN'		=> '<strong>Aqui você pode alterar as cores para se adequar ao seu estilo para a página de política de cookies.</strong>',

	'LOG_COOKIE_ERROR'					=> '<strong>Pesquisa de IP fracassada</stong>',
	'LOG_CURL_ERROR'					=> '<strong>cURL não está disponível neste servidor</stong>',
	'LOG_SERVER_ERROR'					=> '<strong>Não foi possível conectar-se ao IP do servidor</strong>',

	'PIXELS'							=> 'px',

	'UNBAN_IP'							=> 'Desbanir Endereço IP',
	'UNBAN_IP_EXPLAIN'					=> 'O sistema proibirá automaticamente qualquer endereço IP com mais de 250 solicitações por minuto. Se o seu endereço IP foi banido,<a href="http://ip-api.com/docs/unban">clique aqui</a> para acessar um formulário não-compartilhado.',

	'YOUR_IP'							=> 'O seu endereço IP do servidor parece ser',
));
