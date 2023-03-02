<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J~9lo0ej<h9-oRH=?Lh?7zK|p>w?x=Griww1`<R:{/[O>&J0&&34!B(Ji|eZ#l9?' );
define( 'SECURE_AUTH_KEY',  'b3@-JGpJQ(H*~&*xvefb{XL5 :7Y[azu_9CmA8Uh(W86#b*s;2&xRkROn2ZOCQZ`' );
define( 'LOGGED_IN_KEY',    'WE<!:H<Z#Q?rsZ8#1^tZ*f NrDHWAoE<V:~4uD9]tA0Il.{7OWGd.;!Y`N_GB:Xb' );
define( 'NONCE_KEY',        '+IDyd[-ZKzZS{nc;TIhu8(E}e*j IB9$zt>$#5oW_a}|Hz!EeDn 7Z5ms>6Q*XEt' );
define( 'AUTH_SALT',        'l//EYF>b#;(x!Q.u(yVjflh,^v5q1-m8 oz3_o&X`^2$Z2TQr$=jw[WP=M!;AU9j' );
define( 'SECURE_AUTH_SALT', 'wyK+Y84nC-,!QDGea)Dytjh]w]Rfok[>CvS~tn1kD%8.fN}B9qXBL2Qvj1a{*?.d' );
define( 'LOGGED_IN_SALT',   '%A(9w<-%98+o!~_+~OOe#J3tZaQ8#dklt p.:&5Tu`hJP]8_CsQpYj`{@-==;G[M' );
define( 'NONCE_SALT',       'NP3Gn/t(fDY;LiAWm B{cm4DRNg:{^D}Hobk6u@cNEIaqDS&TI:4+NKH]<CLMC]}' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
