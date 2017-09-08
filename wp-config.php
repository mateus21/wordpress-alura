<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpressalura');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TQ1`4@WQNk>D(@3pG3/L3 Kr1/8#.4$OWCR&Tj-*_O&k^.t-M/ ka3h;=khnkfe^');
define('SECURE_AUTH_KEY',  '~X~[sAZ[SVlM&}k(,`@}E]ZXO{ZoCH]c-Q0On8H:5EqlHQc#X 4IcT>>,p9FM;[}');
define('LOGGED_IN_KEY',    'G(L0b^BdO;q1&@1fY~$P/7)Lv+Jf443a=Jv|]k@0a&c-+CX./L!%fnY7][*SWqEB');
define('NONCE_KEY',        '$l-D9wNzK0nTR^]N5A$PD7QHY3^ _I(3>|($-:3]/Gtsns0SR}*&F`QR71Oo8:cQ');
define('AUTH_SALT',        'hGwskw?nN(b^=8N2zB03VAE*U:_,AT`jHue=C]bU5Nh8r:$p@?E/7V5ayE$DD]o;');
define('SECURE_AUTH_SALT', 'u&4%=X#x5161(6<S8E-n^:]2IcDN+f.Kwk@OpY&Srle3=<b&~Uyl@SJxRF/sb~<3');
define('LOGGED_IN_SALT',   '$}`VSLNjlmAsaI&3oj<g-5zqy@UOw(IptI+s*7c~D{lNTQ:OW_/tdV+xnf%Exw05');
define('NONCE_SALT',       '|OS[#^]oIX{ZZJ.8|>:x`|MElaZ0$Y])C&57., JxSEWJr;]j<[x:C%246}%e>o ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
