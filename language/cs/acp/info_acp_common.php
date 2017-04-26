<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2017 Mark D. Hamill (mark@phpbbservices.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

global $phpbb_container;

$config = $phpbb_container->get('config');
$helper = $phpbb_container->get('phpbbservices.digests.common');

$server_settings_url = append_sid('index.php?i=acp_board&amp;mode=server');

$lang = array_merge($lang, array(
	'ACP_CAT_DIGESTS'										=> 'Souhrny emailem',
	'ACP_DIGESTS_SETTINGS'									=> 'Nastavení souhrnů emailem',
	'ACP_DIGESTS_GENERAL_SETTINGS'							=> 'Obecná nastavení',
	'ACP_DIGESTS_GENERAL_SETTINGS_EXPLAIN'					=> 'Toto jsou obecná nastavení Souhrnů e-mailem. Pokud chcete dosáhnout včasné doručení souhrnů emailem, musíte ve vašem fóru <a href="'. $server_settings_url . '">povolit</a> <strong><a href="https://wiki.phpbb.com/Modular_cron#Use_system_cron">systémový cron</a></strong>. Jinak jsou souhrny vygenerovány a poslány jen v okamžiku provozu na fóru. Pro více informací se podívejte na Časté dotazy (FAQ) k rozšíření Digests (Souhrny emailem) na fóru phpbb.com.',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS'						=> 'Výchozí nastavení odběratelů',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS_EXPLAIN'				=> 'Tato nastavení umožňují administrátorům připravit výchozí hodnoty, když si uživatelé nastavují Souhrny e-mailem.',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS'							=> 'Upravit odběratele',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS_EXPLAIN'					=> 'Tento seznam vám umožňuje vidět kdo odebírá a neodebírá souhrny e-mailem. Můžete přihlašovat uživatele k odběru nebo je odhlašovat. Při objednání souhrnů jsou použita výchozí nastavení. Můžete označit více uživatelů a přihlásit je k odběru s použitím výchozích nastavení nebo je všechny odhlásit. Výběr akce je možný dole pod tabulkou a provede se po stisknutí "Odeslat". Také zde můžete tabulku třídit a filtrovat.',
	'ACP_DIGESTS_BALANCE_LOAD'								=> 'Vyvážení zátěže',
	'ACP_DIGESTS_BALANCE_LOAD_EXPLAIN'						=> 'Pokud se sejde na učitou hodinu mnoho příspěvků a to způsobuje problémy se zatížením serveru, tato funkce změní čas odesílání tak, aby se odesílalo každou hodinu přibližně stejné množství souhrnů. Následující tabulka zobrazuje počet souhrnů v každé hodině v časovém pásmu vašeho fóra. Tato funkce se snaží změnit čas minimálně. Změny se provedou jen tehdy, pokud je v danou hodinu zátěž nadprůměrná a pouze uživatelé, kteří překračují hodinový limit. <strong>Upozornění</strong>: odběratelé se mohou kvůli změně zlobit.',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'				=> 'Hromadné přihlášení či odhlášení',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE_EXPLAIN'		=> 'Tato funkce umožní administrátorům pohodlně přihlašovat nebo odhlašovat uživatele najednou. Při přihlášení se použijí výchozí nastavení fóra. Pokud už uživatel souhrny odebírá, přihlášení mu zachová jeho uživatelská nastavení. Nemůžete určitě jednotlivá fóra k zasílání, uživateli budou vždy vybrána všechna fóra, ke kterým má oprávnění ke čtení. <strong>Pozor</strong>: přihlášením nebo odhlášením souhrnů můžete naštvat uživatele.',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME'						=> 'Anulovat čas rozesílače',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME_EXPLAIN'				=> '',
	'ACP_DIGESTS_TEST'										=> 'Spustit rozeslání ručně',
	'ACP_DIGESTS_TEST_EXPLAIN'								=> 'Tato funkce vám umožní pustit generování souhrnů ručně pro úvodní nastavení či řešení problémů. Můžete ji taky použít na opětovné vytvoření souhrnů pro určitý den a hodinu. Pro určení času se použije časová zóna fóra (což je ' . $helper->make_tz_offset($config['board_timezone']) . ' UTC). Upozornění: čas, kdy budou souhrny skutečně vygenerovány, může záviset na provozu na vašem fóru a souhrny pak mohou být doručeny později. Tomu můžete předejít, pokud nastavíte <a href="https://wiki.phpbb.com/Modular_cron#Use_system_cron">systémový cron</a> a <a href="'. $server_settings_url . '">povolíte</a> <strong>systémový cron</strong>. Více informací naleznete v Častých otázkách (FAQ) rozšíření Digests (Souhrny emailem) na fóru phpbb.com.',

	'LOG_CONFIG_DIGESTS_BAD_DIGEST_TYPE'					=> '<strong>Varování: uživatel %s má nastaven špatný typ příspěvku "%s". Použije se denní.</strong>',
	'LOG_CONFIG_DIGESTS_BAD_SEND_HOUR'						=> '<strong>Uživatel %s má nastavenou hodinu odeslání na %d. Číslo musí být >= 0 a < 24.</strong>',
	'LOG_CONFIG_DIGESTS_BALANCE_LOAD'						=> '<strong>Rozdělení zátěže souhrnů emailem proběhlo úspěšně.</strong>',
	'LOG_CONFIG_DIGESTS_BOARD_DISABLED'						=> '<strong>Rozesílání souhrnů bylo spuštěno, ale ukončeno, protože fórum je nepřístupné.</strong>',
	'LOG_CONFIG_DIGESTS_CACHE_CLEARED'						=> '<strong>Obsah adresáře cache/phpbbservices/digests directory byl smazán',
	'LOG_CONFIG_DIGESTS_CLEAR_SPOOL_ERROR'					=> '<strong>Nebylo možné vymazat soubory z adresáře cache/phpbbservices/digests. To může být  způsobeno nedostatečnými právy k souborům a nebo je tato cesta neplatná. Soubory by měly být veřejně zapisovatelné (777 na unixových systémech).</strong>',
	'LOG_CONFIG_DIGESTS_DIRECTORY_CREATE_ERROR'				=> '<strong>Nebylo možné vytvořit adresář cache/phpbbservices/digests. Může to být způsobeno nedostatečnými právy k adresáři s phpBB na serveru.</strong>',
	'LOG_CONFIG_DIGESTS_EDIT_SUBSCRIBERS'					=> '<strong>Upraveny objednávky souhrnů</strong>',
	'LOG_CONFIG_DIGESTS_FILE_CLOSE_ERROR'					=> '<strong>Nepodařilo se zavřít soubor "%s"</strong>',
	'LOG_CONFIG_DIGESTS_FILE_OPEN_ERROR'					=> '<strong>Nepodařilo se otevřít adresář "%s". Může to být způsobeno nedostatečnými právy k němu. Práva k souboru by měla umožnit zapisování (777 na unixových systémech).</strong>',
	'LOG_CONFIG_DIGESTS_FILE_WRITE_ERROR'					=> '<strong>Nemohu psát do souboru "%s". Může to být způsobeno nedostatečnými právy k souboru nebo adresáři. Práva musí umožnit zapisování (777 na unixových systémech).</strong>',
	'LOG_CONFIG_DIGESTS_FILTER_ERROR'						=> '<strong>Rozesílání souhrnů bylo zavoláno s nesprávným typem filtru = "%s" pro "%s"</strong>',
	'LOG_CONFIG_DIGESTS_FORMAT_ERROR'						=> '<strong>Rozesílání souhrnů bylo zavoláno s nesprávnou frekvencí posílání "%s" pro "%s"</strong>',
	'LOG_CONFIG_DIGESTS_GENERAL'							=> '<strong>Obecné nastavení souhrnů bylo změněno</strong>',
	'LOG_CONFIG_DIGESTS_HOUR_RUN'							=> '<strong>Generování souhrnů pro čas %s UTC</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD'						=> '<strong>Nebylo možné poslat souhrn příspěvků pro "%s" (%s). Tento problém by měl být prozkoumán a opraven, protože to nejspíš znamená obecný problém s rozesíláním emailů.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD_NO_EMAIL'				=> '<strong>Nebylo možné poslat souhrn příspěvků pro "%s". Tento problém by měl být prozkoumán a opraven, protože to nejspíš znamená obecný problém s rozesíláním emailů.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD'						=> '<strong>Souhrn byl %s pro %s (%s) pro den %s a hodinu %d UTC. Obsahuje %d příspěvků a %d soukromých zpráv.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_DISK'				=> '<strong>Souhrn příspěvků byl uložen do cache/phpbbservices/digests/%s. Souhnr NEBYL odeslán emailem, ale uložen zde k prozkoumání.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_NO_EMAIL'			=> '<strong>Souhrn byl %s pro %s pro den %s a hodinu %d UTC. Obsahuje %d příspěvků a %d soukromých zpráv.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE'						=> '<strong>Souhrn příspěvků NEBYL poslán "%s" (%s), protože s použitím uživatelských nastavení nebyly nalezeny žádné příspěvky z zaslání.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE_NO_EMAIL'			=> '<strong>Souhrn příspěvků NEBYL poslán "%s", protože s použitím uživatelských nastavení nebyly nalezeny žádné příspěvky z zaslání.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_START'							=> '<strong>Startuji rozesílání souhrnů</strong>',
	'LOG_CONFIG_DIGESTS_LOG_END'							=> '<strong>Ukončuji rozesílání souhrnů</strong>',
	'LOG_CONFIG_DIGESTS_MAILER_RAN_WITH_ERROR'				=> '<strong>Během rozesílání souhrnů emailem nastala chyba. Jeden nebo více souhrnů mohly být vygenerovány.</strong>',
	'LOG_CONFIG_DIGESTS_MANUAL_RUN'							=> '<strong>Rozesílač souhrnů byl spuštěn ručně.</strong>',
	'LOG_CONFIG_DIGESTS_MESSAGE'							=> '<strong>%s</strong>',	// Used for general debugging, otherwise hard to troubleshoot problems in cron mode.
	'LOG_CONFIG_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'			=> '<strong>Bylo provedeno hromadné přihlášení nebo odhlášení souhrnů emailem.</strong>',
	'LOG_CONFIG_DIGESTS_NO_ALLOWED_FORUMS'					=> '<strong>Varování: odběratel %s nemá práva k žádným fórům. Takže pokud nebudou ani žádná povinně odebíraná fóra, souhrn nikdy nebude obsahovat příspěvky.</strong>',
	'LOG_CONFIG_DIGESTS_NO_BOOKMARKS'						=> '<strong>Varování: odběratel %s si vyžádal témata v záložkách, ale žádné záložky nemá.</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_ERROR'					=> '<strong>Nebylo možné odeslat administrátorem vygenerované oznámení o souhrnech pro %s</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_SENT'					=> '<strong>Byl odeslán email pro "%s" (%s) oznamující změny v uživatelském nastavení souhrnů emailem.</strong>',
	'LOG_CONFIG_DIGESTS_REGULAR_CRON_RUN'					=> '<strong>Byl spuštěn phpBB pseudo cron pro rozesílání</strong>',
	'LOG_CONFIG_DIGESTS_RESET_CRON_RUN_TIME'				=> '<strong>Čas rozesílání souhrnů emailem byl vynulován.</strong>',
	'LOG_CONFIG_DIGESTS_RUN_TOO_SOON'						=> '<strong>Ještě nenastala další hodina k rozesílání souhrnů. Ukončuji běh.</strong>',
	'LOG_CONFIG_DIGESTS_SIMULATION_DATE_TIME'				=> '<strong>Administrátor zvolil čas rozesílání souhrnů pro %s na %d:00 (časová zóna fóra).</strong>',
	'LOG_CONFIG_DIGESTS_SORT_BY_ERROR'						=> '<strong>Souhrn emailem byl zavolán s neplatným parametrem pro třídění "%s" pro %s</strong>',
	'LOG_CONFIG_DIGESTS_SYSTEM_CRON_RUN'					=> '<strong>Byl spuštěn systémový cron pro rozesílání</strong>',
	'LOG_CONFIG_DIGESTS_TIMEZONE_ERROR'						=> '<strong>Časová zóna "%s" uživatele "%s" je neplatná. Použijte se časová zóna "%s". Požádejte prosím uživatele o nastavení časové zóny správně v uživatelském panelu. Seznam podporovaných časových zón je k nalezení na http://php.net/manual/en/timezones.php</strong>',
	'LOG_CONFIG_DIGESTS_USER_DEFAULTS'						=> '<strong>Výchozí nastavení uživatele pro souhrny emailem byla pozměněna</strong>',
));