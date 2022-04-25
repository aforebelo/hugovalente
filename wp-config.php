<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'hugovalente' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '%`%w R4L406{hwIA#3N!ULQi!7gjlt=:u<lDMso:$,&)sV9?Ao]y^7OjRcdRPj[f' );
define( 'SECURE_AUTH_KEY', 'rBewYlx5c0:.z=&;hGLj:$gSfU24J3{].3^Y$KeXjIK-@MC-TC?DG43;o !]7HSS' );
define( 'LOGGED_IN_KEY', '3C)W*4Z&w+Fg>778 isd>{d_,27M$g3MB9$k1RuvgiU=Mw5?{MU_4[+xLh^h.d}<' );
define( 'NONCE_KEY', 'h[{{_@*+]-NLU98H#S?%9yG0i!w)BZ2{8&MW~$;I5k]k:6J&P}Vgx4nzjc,tzh8_' );
define( 'AUTH_SALT', '[fuSVD^ ZT3)0.0`7SJ~(M<Ew~;7Vc,wIF?~sr#I9L{g,V1PIJs{AyQUfrB{Ra7)' );
define( 'SECURE_AUTH_SALT', '))TLz5uQ1Uu?Hq&~?s}Avr|)bhyxJWP8A]r&i.at+_7y0P;x4RV/DM+_}1pA0[@X' );
define( 'LOGGED_IN_SALT', '!4~)?{WX~st=vuar$!Ce@gy;O{1ovKs52aD{_6=K.H<EtOAGSzAVqsG`ts>E){/O' );
define( 'NONCE_SALT', 'ry%TE1,t>YL6nr%VKL-J4S,(,D/I*h_&hiXz=Jx0,-q&p[?cpbW=SmMb5B=RD}C<' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once( ABSPATH . 'wp-settings.php' );
