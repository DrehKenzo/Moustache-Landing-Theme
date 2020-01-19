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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'andrekenzo01' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'andrekenzo01' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'trocar123' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql.andrekenzo.uni5.net' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'SKR2m;uC)l<JY%0TrPADs o&AkJ(TIY[N]Fa{.@SM:56r97`drn/[1DJ)%q~h)}:' );
define( 'SECURE_AUTH_KEY',  'E|oH;@TiC6@laZ[r7j9P=U*m`|MVw a9^qMDL>3rY,{R+PfHQ_T7>-v}ANV)Q!_T' );
define( 'LOGGED_IN_KEY',    'Wra:/`Ed{{?%pLPHT~Nv-s@o5lX?hSf06RI`eV<EdN=WLXTy~p~Y`b6@E]oF]CDb' );
define( 'NONCE_KEY',        ')f$4B}jRA6rXA~bnCZ;}DJ/;^]nN|ar[aNw/NvCs8v)cjvv4frLr>%<Am)cF(1b1' );
define( 'AUTH_SALT',        ',`K9cHXUi~-eco_7He1dQncJ*.G+(I5#4#gGF7qRbXk8:Dt>?z64-S?ok_>t;lL4' );
define( 'SECURE_AUTH_SALT', 'a+iShY<Bpqsp?a-XaBeVz )-_?ssy3qx0Pa9|*3!j@i!dk6_9K_rX(2RrKR<s(Vb' );
define( 'LOGGED_IN_SALT',   'RWtMidJ!,dDAJ>,]f6s=IpouyaAZ<zC@.{M49[M3h:E<m$=Uh5A%/@>V+y9w2#s_' );
define( 'NONCE_SALT',       ' v)n:iQ(VwTLnhCe7b<;e4Ay9K3D+FcWE}J&jTt?:9=N{CrKM@<O ?c>TmAE)Y(v' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'mtc_';

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
