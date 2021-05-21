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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'atts_hublife_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '{mojrI1<0rf4tLmLam~5O5zepzW(JHsI9@=lij*pe::uBb*g4gpvcA2/B3e3=,?3' );
define( 'SECURE_AUTH_KEY',  'gLe4bJ,So_M2I9/O1*]2JQRoo&bRf;[=x6{Xq01m~Vb^&b4T!|Av,iz5}K?dUlK%' );
define( 'LOGGED_IN_KEY',    'cjgh:eG]}}%B(VP~7xsJml}elr;B,-kIh8gw9S7dwj[UmgZMd.m)Dn)+cqch?|q.' );
define( 'NONCE_KEY',        'qR/ ,9,o[^:.!q8c75QQ)u3~Tj#Z{ehN_}Dlr*,k7p >7Gwi/`vB)$aI_@1Fe1R(' );
define( 'AUTH_SALT',        '1-MIe1w!mjC=R%+HL4tr`:GX!LmP~,g-&VA<&-y~w@^J@6lp:M~X4=_o(tAu.v@-' );
define( 'SECURE_AUTH_SALT', 'E9oOW9uQ19wPATTiE!2H}~YU@Af3h*?Jrd([7(-VYLb^3m77)msq,%.-+nzljct^' );
define( 'LOGGED_IN_SALT',   '3}|?M12f,2N|N#cl0$nE2 rp.=Skja/?X&b52>)-TIi.w^(ip-*H(G/G;T}`XjKl' );
define( 'NONCE_SALT',       ';A)7@!(AoU U41+}/_o&WH-S>(^Q).Xc4v/.G[*9W$-6rlz!S`)Z!S^4qpEY<z*5' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'atts_wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
