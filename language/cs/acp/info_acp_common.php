<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2021 Mark D. Hamill (mark@phpbbservices.com)
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

// DEVELOPERS PLEASE NOTE
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
	'PLURAL_RULE'											=> 8,

	'ACP_CAT_DIGESTS'										=> 'Souhrny emailem',
	'ACP_DIGESTS_SETTINGS'									=> 'Nastavení souhrnů emailem',
    'ACP_DIGESTS_CLEAR_CACHED_DIGESTS'						=> 'Vymazat uložené souhrny',
    'ACP_DIGESTS_CLEAR_CACHED_DIGESTS_EXPLAIN'				=> 'Tato stránka vám umožní smazat uložené souhry ve složce /store/phpbbservices/digests. Ty jsou vytvořené ručním spouštěním rozesílače emailů a mohou představovat potenciální bezpečnostní riziko. Pokud jsou zde zobrazeny nějaké soubory, doporučujeme jejich odstranění.<br><br>Celkem je uloženo %1$d souborů. Jména souborů: %2$s',
    'ACP_DIGESTS_GENERAL_SETTINGS'							=> 'Obecná nastavení',
	'ACP_DIGESTS_GENERAL_SETTINGS_EXPLAIN'					=> 'Toto jsou obecná nastavení Souhrnů e-mailem. Pokud chcete dosáhnout včasné doručení souhrnů emailem, musíte ve vašem fóru povolit <strong><a href="https://www.phpbb.com/customise/db/extension/digests_extension/faq/2716">systémový cron</a></strong>. Jinak jsou souhrny vygenerovány a poslány jen v okamžiku provozu na fóru. Pro více informací se podívejte na Časté dotazy (FAQ) k rozšíření Digests (Souhrny emailem) na fóru phpbb.com.',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS'						=> 'Výchozí nastavení odběratelů',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS_EXPLAIN'				=> 'Tato nastavení umožňují administrátorům připravit výchozí hodnoty, když si uživatelé nastavují Souhrny e-mailem.',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS'							=> 'Upravit odběratele',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS_EXPLAIN'					=> 'Tento seznam vám umožňuje vidět kdo odebírá a neodebírá souhrny e-mailem a měnit jejich jednotlivá nastavení. Můžete přihlašovat uživatele k odběru nebo je odhlašovat. Při objednání souhrnů jsou použita výchozí nastavení. Můžete označit více uživatelů a přihlásit je k odběru s použitím výchozích nastavení nebo vybrané odhlásit. Výběr akce je možný dole pod tabulkou a provede se po stisknutí "Odeslat".',
	'ACP_DIGESTS_BALANCE_LOAD'								=> 'Vyvážení zátěže',
	'ACP_DIGESTS_BALANCE_LOAD_EXPLAIN'						=> 'Pokud se sejde na učitou hodinu mnoho příspěvků a to způsobuje problémy se zatížením serveru, tato funkce změní čas odesílání tak, aby se odesílalo každou hodinu přibližně stejné množství souhrnů. Následující tabulka zobrazuje počet souhrnů a jména odběratelů. <strong>Přetížené hodiny jsou tučně</strong>. Tato funkce se snaží změnit čas minimálně. Změny se provedou jen tehdy, pokud je v danou hodinu zátěž nadprůměrná a pouze uživatelé, kteří překračují hodinový limit. <strong>Upozornění</strong>: odběratelé se mohou kvůli změně zlobit. Podle nastavení souhrnů v sekci "Obecná nastavení" se uživatelům může poslat emailové upozornění o změně. Můžete omezit vyvažování zátěže podle typu souhrnu a jen pro některé hodiny.',
	'ACP_DIGESTS_BALANCE_OPTIONS'							=> 'Možnosti vyvažování',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'				=> 'Hromadné přihlášení či odhlášení',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE_EXPLAIN'		=> 'Tato funkce umožní administrátorům pohodlně přihlašovat nebo odhlašovat uživatele najednou. Při přihlášení se použijí výchozí nastavení fóra. Pokud už uživatel souhrny odebírá, přihlášení mu zachová jeho uživatelská nastavení. Nemůžete určitě jednotlivá fóra k zasílání, uživateli budou vždy vybrána všechna fóra, ke kterým má oprávnění ke čtení. <strong>Pozor</strong>: přihlášením nebo odhlášením souhrnů můžete naštvat uživatele.',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME'						=> 'Anulovat čas rozesílače',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME_EXPLAIN'				=> '',
	'ACP_DIGESTS_TEST'										=> 'Spustit rozeslání ručně',
	'ACP_DIGESTS_TEST_EXPLAIN'								=> 'Tato funkce vám umožní pustit generování souhrnů ručně pro úvodní nastavení či vytváření pro specifický den a hodinu. Můžete ji taky použít na opětovné vytvoření souhrnů pro určitý den a hodinu. Spustí se jen pro jednu hodinu. Během tohoto spuštění nejsou měněna žádná uživatelská data.<br><br> <strong>Odběratelé, kteří by obdrželi souhrn pro tuto hodinu:</strong> %s',

	'LOG_CONFIG_DIGESTS_BAD_DIGEST_TYPE'					=> '<strong>Varování: uživatel %1$s má nastaven špatný typ příspěvku "%2$s". Použije se denní.</strong>',
	'LOG_CONFIG_DIGESTS_BAD_SEND_HOUR'						=> '<strong>Uživatel %1$s má nastavenou hodinu odeslání na %2$d. Číslo musí být >= 0 a < 24.</strong>',
	'LOG_CONFIG_DIGESTS_BALANCE_LOAD'						=> '<strong>Rozdělení zátěže souhrnů emailem proběhlo úspěšně.</strong>',
	'LOG_CONFIG_DIGESTS_BOARD_DISABLED'						=> '<strong>Rozesílání souhrnů bylo spuštěno, ale ukončeno, protože fórum je nepřístupné</strong>',
	'LOG_CONFIG_DIGESTS_CACHE_CLEARED'						=> '<strong>Obsah složky store/phpbbservices/digests directory byl smazán</strong>',
	'LOG_CONFIG_DIGESTS_CLEAR_SPOOL_ERROR'					=> '<strong>Nebylo možné vymazat soubory ze složky store/phpbbservices/digests. To může být  způsobeno nedostatečnými právy k souborům a nebo je tato cesta neplatná. Soubory by měly být veřejně zapisovatelné (777 na unixových systémech).</strong>',
	'LOG_CONFIG_DIGESTS_CREATE_DIRECTORY_ERROR'				=> '<strong>Nepodařilo se vytvořit složku "%s". Může to být způsobeno nedostatečnými právy. Práva nadřazené složky by měla umožnit zapisování (777 na unixových systémech).</strong>',
    'LOG_CONFIG_DIGESTS_CRITICAL_ERROR'						=> '<strong>Rozesílač emailů nečekaně selhal.<br>Číslo chyby: [%1$s]<br>Chyba: %2$s<br>Program: %3$s Řádek: %4$s</strong>',
    'LOG_CONFIG_DIGESTS_DEBUG_POSTS_CURRENT_HOUR'			=> '<strong>Debug: SQL příspěvků odběratelů: UTC čas: %s UTC hodina: %s SQL = %s</strong>',
    'LOG_CONFIG_DIGESTS_DEBUG_SHOULD_RUN'					=> '<strong>Debug: Má běžet;: %s, souhrny mají běžet po tomto čase: %s</strong>',
    'LOG_CONFIG_DIGESTS_DEBUG_SQL_CURRENT_HOUR'				=> '<strong>Debug: SQL odběratelů: UTC datum: %s UTC hodina: %s SQL = %s</strong>',
    'LOG_CONFIG_DIGESTS_EDIT_SUBSCRIBERS'					=> '<strong>Upraveny objednávky souhrnů</strong>',
	'LOG_CONFIG_DIGESTS_EMAILING_FAILURE' 					=> '<strong>Nepodařilo se odeslat souhrn pro den %s a hodinu %d UTC (GMT)</strong>',
	'LOG_CONFIG_DIGESTS_EXCEPTION_ERROR'					=> '<strong>Vyskytla se následující PHP výjimka: %s</strong>',
	'LOG_CONFIG_DIGESTS_FILE_CLOSE_ERROR'					=> '<strong>Nepodařilo se zavřít soubor "%s"</strong>',
	'LOG_CONFIG_DIGESTS_FILE_OPEN_ERROR'					=> '<strong>Nepodařilo se otevřít složku "%s". Může to být způsobeno nedostatečnými právy k ní. Práva k souboru by měla umožnit zapisování (777 na unixových systémech).</strong>',
	'LOG_CONFIG_DIGESTS_FILE_WRITE_ERROR'					=> '<strong>Nemohu psát do souboru "%s". Může to být způsobeno nedostatečnými právy k souboru nebo složce. Práva musí umožnit zapisování (777 na unixových systémech).</strong>',
	'LOG_CONFIG_DIGESTS_FILTER_ERROR'						=> '<strong>Rozesílání souhrnů bylo zavoláno s nesprávným typem filtru = "%1$s" pro "%2$s"</strong>',
	'LOG_CONFIG_DIGESTS_FORMAT_ERROR'						=> '<strong>Rozesílání souhrnů bylo zavoláno s nesprávnou frekvencí posílání "%1$s" pro "%2$s"</strong>',
	'LOG_CONFIG_DIGESTS_GENERAL'							=> '<strong>Obecné nastavení souhrnů bylo změněno</strong>',
	'LOG_CONFIG_DIGESTS_HOUR_RUN'							=> '<strong>Generování souhrnů pro čas %1$s v %2$02d UTC</strong>',
	'LOG_CONFIG_DIGESTS_INCONSISTENT_DATES'					=> '<strong>Nastala neobvyklá chyba. Nebyly zpracovány žádné souhrny, protože čas poslední úspěšného odeslání souhrnů (%1$d) je novější než čas posledního běhu souhrnů (%2$d).</strong>',
    'LOG_CONFIG_DIGESTS_LOG_END'							=> '<strong>Rozesílač souhrnů končí.</strong>',
    'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD'						=> '<strong>Nebylo možné poslat souhrn příspěvků pro "%1$s" (%2$s). Tento problém by měl být prozkoumán a opraven, protože to nejspíš znamená obecný problém s rozesíláním emailů.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD_NO_EMAIL'				=> '<strong>Nebylo možné poslat souhrn příspěvků pro "%s". Tento problém by měl být prozkoumán a opraven, protože to nejspíš znamená obecný problém s rozesíláním emailů.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD'						=> array(
																1 => '<strong>Souhrn byl %1$s pro %2$s (%3$s) pro den %4$s a hodinu %5$02d UTC. Obsahuje %6$d příspěvků a %7$d soukromých zpráv.</strong>',
																2 => '<strong>Souhrn byl %1$s pro %2$s (%3$s) pro den %4$s a hodinu %5$02d UTC. Obsahuje %6$d příspěvků a %7$d soukromých zpráv.</strong>',
																3 => '<strong>Souhrn byl %1$s pro %2$s (%3$s) pro den %4$s a hodinu %5$02d UTC. Obsahuje %6$d příspěvků a %7$d soukromých zpráv.</strong>'
															),
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_DISK'				=> '<strong>Souhrn příspěvků byl uložen do store/phpbbservices/digests/%s. Souhnr NEBYL odeslán emailem, ale uložen zde k prozkoumání.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_NO_EMAIL'			=> array(
																1 => '<strong>Souhrn byl %1$s pro %2$s pro den %3$s a hodinu %4$02d UTC. Obsahuje %5$d příspěvků a %6$d soukromých zpráv.</strong>',
																2 => '<strong>Souhrn byl %1$s pro %2$s pro den %3$s a hodinu %4$02d UTC. Obsahuje %5$d příspěvků a %6$d soukromých zpráv.</strong>',
																3 => '<strong>Souhrn byl %1$s pro %2$s pro den %3$s a hodinu %4$02d UTC. Obsahuje %5$d příspěvků a %6$d soukromých zpráv.</strong>'
															),
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE'						=> '<strong>Souhrn příspěvků NEBYL poslán "%1$s" (%2$s), protože s použitím uživatelských nastavení nebyly nalezeny žádné příspěvky k zaslání.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE_NO_EMAIL'			=> '<strong>Souhrn příspěvků NEBYL poslán "%s", protože s použitím uživatelských nastavení nebyly nalezeny žádné příspěvky z zaslání.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_START'							=> '<strong>Startuji rozesílání souhrnů</strong>',
	'LOG_CONFIG_DIGESTS_MAILER_RAN_WITH_ERROR'				=> '<strong>Během rozesílání souhrnů emailem nastala chyba. Jeden nebo více souhrnů mohly být vygenerovány.</strong>',
	'LOG_CONFIG_DIGESTS_MANUAL_RUN'							=> '<strong>Rozesílač souhrnů byl spuštěn ručně.</strong>',
	'LOG_CONFIG_DIGESTS_MESSAGE'							=> '<strong>%s</strong>',	// Used for general debugging, otherwise hard to troubleshoot problems in cron mode.
	'LOG_CONFIG_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'			=> '<strong>Bylo provedeno hromadné přihlášení nebo odhlášení souhrnů emailem.</strong>',
	'LOG_CONFIG_DIGESTS_NO_ALLOWED_FORUMS'					=> '<strong>Varování: odběratel %s nemá práva k žádným fórům. Takže pokud nebudou ani žádná povinně odebíraná fóra, souhrn nikdy nebude obsahovat příspěvky.</strong>',
	'LOG_CONFIG_DIGESTS_NO_BOOKMARKS'						=> '<strong>Varování: odběratel %s si vyžádal témata v záložkách, ale žádné záložky nemá.</strong>',
    'LOG_CONFIG_DIGESTS_NO_RESOURCES'						=> '<strong>Ukončení rozesíláné souhrnů s chybou. Je nedostatek systémových zdrojů k rozeslání běžících souhrnů. Chyba vznikla při vytváření souhrnu pro “%1$s” hodinu %2$d UTC. Možná budete muset zlepšit své hostingové služby, aby souhrny mohly být spolehlivě rozeslány.</strong>',
    'LOG_CONFIG_DIGESTS_NOTIFICATION_ERROR'					=> '<strong>Nebylo možné odeslat administrátorem vygenerované oznámení o souhrnech pro %s</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_SENT'					=> '<strong>Byl odeslán email pro "%1$s" (%2$s) oznamující změny v uživatelském nastavení souhrnů emailem.</strong>',
	'LOG_CONFIG_DIGESTS_REGULAR_CRON_RUN'					=> '<strong>Byl spuštěn phpBB pseudo cron pro rozesílání</strong>',
	'LOG_CONFIG_DIGESTS_RESET_CRON_RUN_TIME'				=> '<strong>Čas rozesílání souhrnů emailem byl vynulován.</strong>',
	'LOG_CONFIG_DIGESTS_RUN_TOO_SOON'						=> '<strong>Ještě nenastala další hodina k rozesílání souhrnů. Ukončuji běh.</strong>',
	'LOG_CONFIG_DIGESTS_SIMULATION_DATE_TIME'				=> '<strong>Administrátor zvolil čas rozesílání souhrnů pro %s (časová zóna fóra).</strong>',
	'LOG_CONFIG_DIGESTS_SORT_BY_ERROR'						=> '<strong>Souhrn emailem byl zavolán s neplatným parametrem pro třídění "%1$s" pro %2$s</strong>',
	'LOG_CONFIG_DIGESTS_SYSTEM_CRON_RUN'					=> '<strong>Byl spuštěn systémový cron pro rozesílání</strong>',
	'LOG_CONFIG_DIGESTS_TIMEZONE_ERROR'						=> '<strong>Časová zóna "%1$s" uživatele "%2$s" je neplatná. Použijte se časová zóna "%3$s". Požádejte prosím uživatele o nastavení časové zóny správně v uživatelském panelu. Seznam podporovaných časových zón je k nalezení na http://php.net/manual/en/timezones.php</strong>',
	'LOG_CONFIG_DIGESTS_USER_DEFAULTS'						=> '<strong>Výchozí nastavení uživatele pro souhrny emailem byla pozměněna</strong>',
));
