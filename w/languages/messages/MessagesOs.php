<?php
/** Ossetic (Иронау)
 *
 * @ingroup Language
 * @file
 *
 * @author Amikeco
 * @author לערי ריינהארט
 */

$fallback = 'ru';

$skinNames = array(
	'standard' => 'Стандартон',
	'nostalgia' => 'Æнкъард',
	'cologneblue' => 'Кёльны æрхæндæг',
	'monobook' => 'Моно-чиныг',
	'myskin' => 'Мæхи',
	'chick' => 'Карк'
);
$namespaceNames = array(
	NS_MEDIA            => 'Media', //чтоб не писать "Мультимедия"
	NS_SPECIAL          => 'Сæрмагонд',
	NS_MAIN             => '',
	NS_TALK             => 'Дискусси',
	NS_USER             => 'Архайæг',
	NS_USER_TALK        => 'Архайæджы_дискусси',
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK     => 'Дискусси_$1',
	NS_IMAGE            => 'Ныв',
	NS_IMAGE_TALK       => 'Нывы_тыххæй_дискусси',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Дискусси_MediaWiki',
	NS_TEMPLATE         => 'Шаблон',
	NS_TEMPLATE_TALK    => 'Шаблоны_тыххæй_дискусси',
	NS_HELP             => 'Æххуыс',
	NS_HELP_TALK        => 'Æххуысы_тыххæй_дискусси',
	NS_CATEGORY         => 'Категори',
	NS_CATEGORY_TALK    => 'Категорийы_тыххæй_дискусси',
);

$linkTrail = '/^((?:[a-z]|а|æ|б|в|г|д|е|ё|ж|з|и|й|к|л|м|н|о|п|р|с|т|у|ф|х|ц|ч|ш|щ|ъ|ы|ь|э|ю|я|“|»)+)(.*)$/sDu';
$fallback8bitEncoding =  'windows-1251';

$messages = array(
# User preference toggles
'tog-underline'               => 'Æрвитæнты бын хахх',
'tog-justify'                 => 'Æмвæз абзацтæ',
'tog-hideminor'               => 'Чысыл ивддзинæдтæ фæстаг ивддзинæдты номхыгъды мауал æвдис',
'tog-numberheadings'          => 'Сæргæндты автоматикон нумераци',
'tog-editondblclick'          => 'Фæрстæ дыкъæппæй ив (JavaScript)',
'tog-editsection'             => 'Равдис «баив æй» æрвитæн тексты алы хайы дæр',
'tog-editsectiononrightclick' => 'Сæргондыл рахиз æркъæппæй фарсы хæйттæ ив (JavaScript)',
'tog-showtoc'                 => 'Сæргæндты номхыгъд æвдис (æртæ сæргондæй фылдæр цы фарсы ис, уым)',
'tog-rememberpassword'        => 'Системæ бахъуыды кæнæд мæ пароль ацы компьютерыл.',
'tog-watchcreations'          => 'Æз цы фæрстæ райдайын, уыдонмæ мæ цæст дарын мæ фæнды',
'tog-watchdefault'            => 'Æз цы фæрстæ ивын, уыдонмæ мæ цæст дарын мæ фæнды',
'tog-watchmoves'              => 'Æз цы фæрсты нæмттæ ивын, уыдонмæ мæ цæст дарын мæ фæнды',
'tog-watchdeletion'           => 'Æз цы фæрстæ аппарын, уыдонмæ мæ цæст дарын мæ фæнды',
'tog-previewontop'            => 'Разæркасты рудзынг ивыны рудзынджы уæлдæр',
'tog-enotifwatchlistpages'    => 'Электронон постæй мæм хъуысынгæнинаг æрвыст уа, æз цы фæрстæм мæ цæст дарын, уыдонæй иу куы ивд æрцæуа, уæд',
'tog-enotifusertalkpages'     => 'Электронон постæй мæм хъуысынгæнинаг æрвыст уа, мæ дискусси куы ивд æрцæуа, уæд',
'tog-enotifminoredits'        => 'Кæд ивддзинад чысыл у, уæддæр мæм электронон фыстæг æрбацæуа',
'tog-shownumberswatching'     => 'Цал архайæджы фарсмæ сæ цæст дарынц, уый равдис',
'tog-watchlisthideown'        => 'Мæ цæстдарды номхыгъды, мæхæдæг цы ивддзинæдтæ бахæстон, уыдон бамбæхс',
'tog-watchlisthidebots'       => 'Мæ цæстдарды номхыгъды роботты куыст бамбæхс',
'tog-watchlisthideminor'      => 'Мæ цæстдарды номхыгъды чысыл ивддзинæдтæ бамбæхс',
'tog-ccmeonemails'            => 'Æз электронон фыстæг æндæр архайæгæн куы рарвитын, уæд уыцы иу фыстæг мæхи адрисмæ дæр æрбацæуæд.',
'tog-showhiddencats'          => 'Æмбæхст категоритæ æвдис',

'underline-always' => 'Æдзух',
'underline-never'  => 'Никуы',

# Dates
'sunday'        => 'Хуыцаубон',
'monday'        => 'Къуырисæр',
'tuesday'       => 'Дыццæг',
'wednesday'     => 'Æртыццæг',
'thursday'      => 'Цыппарæм',
'friday'        => 'майрæмбон',
'saturday'      => 'Сабат',
'sun'           => 'Хц',
'mon'           => 'Къ',
'tue'           => 'Дц',
'wed'           => 'Æр',
'thu'           => 'Цп',
'fri'           => 'Мрм',
'sat'           => 'Сбт',
'january'       => 'январь',
'february'      => 'февраль',
'march'         => 'мартъи',
'april'         => 'апрель',
'may_long'      => 'май',
'june'          => 'июнь',
'july'          => 'июль',
'august'        => 'август',
'september'     => 'сентябрь',
'october'       => 'октябрь',
'november'      => 'ноябрь',
'december'      => 'декабрь',
'january-gen'   => 'январы',
'february-gen'  => 'февралы',
'march-gen'     => 'мартъийы',
'april-gen'     => 'апрелы',
'may-gen'       => 'майы',
'june-gen'      => 'июны',
'july-gen'      => 'июлы',
'august-gen'    => 'августы',
'september-gen' => 'сентябры',
'october-gen'   => 'октябры',
'november-gen'  => 'ноябры',
'december-gen'  => 'декабры',
'jan'           => 'янв',
'feb'           => 'фев',
'mar'           => 'мар',
'apr'           => 'апр',
'may'           => 'май',
'jun'           => 'июн',
'jul'           => 'июл',
'aug'           => 'авг',
'sep'           => 'сен',
'oct'           => 'окт',
'nov'           => 'ноя',
'dec'           => 'дек',

# Categories related messages
'pagecategories'                => '{{PLURAL:$1|Категори|Категоритæ}}',
'category_header'               => 'Категори "$1"',
'subcategories'                 => 'Дæлкатегоритæ',
'category-empty'                => "''Ацы категори афтид ма у.''",
'hidden-categories'             => 'Æмбæхст {{PLURAL:$1|категори|категоритæ}}',
'hidden-category-category'      => 'Æмбæхст категоритæ', # Name of the category where hidden categories will be listed
'category-subcat-count-limited' => 'Ацы категорийы мидæг ис {{PLURAL:$1|$1 дæлкатегори|$1 дæлкатегорийы}}.',
'category-file-count-limited'   => 'Ацы категорийы {{PLURAL:$1|$1 файл|$1 файлы}} ис.',
'listingcontinuesabbrev'        => '(дарддæрдзу)',

'about'          => 'Афыст',
'article'        => 'Статья',
'newwindow'      => '(ног рудзынджы)',
'qbfind'         => 'Агур',
'qbbrowse'       => 'Фен',
'qbedit'         => 'Баив æй',
'qbpageoptions'  => 'Ацы фарс',
'qbmyoptions'    => 'Мæ фæрстæ',
'qbspecialpages' => 'Сæрмагонд фæрстæ',
'moredotdotdot'  => 'Фылдæр…',
'mypage'         => 'Дæхи фарс',
'mytalk'         => 'Дæумæ цы дзурынц',
'anontalk'       => 'Ацы IP-адрисы дискусси',
'navigation'     => 'хъæугæ æрвитæнтæ',
'and'            => 'æмæ',

'errorpagetitle'    => 'Рæдыд',
'tagline'           => 'Сæрибар энциклопеди Википедийы æрмæг.',
'help'              => 'Æххуыс',
'search'            => 'агур',
'searchbutton'      => 'агур',
'go'                => 'Статьямæ',
'searcharticle'     => 'Статьямæ',
'history'           => 'Фарсы истори',
'history_short'     => 'Истори',
'printableversion'  => 'Мыхурмæ верси',
'permalink'         => 'Ацы версимæ æрвитæн',
'print'             => 'Мыхуыр',
'edit'              => 'Баив æй',
'create'            => 'Скæн æй',
'editthispage'      => 'Ацы фарс баив',
'create-this-page'  => 'Ацы фарс скæн',
'delete'            => 'Аппар',
'deletethispage'    => 'Аппар æй',
'protect'           => 'Сæхгæн',
'protect_change'    => 'баив',
'protectthispage'   => 'Сæхгæн ацы фарс',
'unprotect'         => 'Мауал хъахъхъæн',
'unprotectthispage' => 'Ацы фарс ивынмæ байгом',
'newpage'           => 'Ног фарс',
'talkpage'          => 'Ацы фарсы тыххæй ныхас',
'talkpagelinktext'  => 'Дискусси',
'specialpage'       => 'Сæрмагонд фарс',
'personaltools'     => 'Мигæнæнтæ',
'postcomment'       => 'Дæ комментари ныууадз',
'articlepage'       => 'Фен статья',
'talk'              => 'Дискусси',
'views'             => 'Æркæстытæ',
'toolbox'           => 'мигæнæнтæ',
'userpage'          => 'Ацы архайæджы фарс фен',
'projectpage'       => 'Проекты фарс фен',
'mediawikipage'     => 'Фыстæджы фарс фен',
'templatepage'      => 'Шаблоны фарс фен',
'viewhelppage'      => 'Æххуысы фарс фен',
'categorypage'      => 'Категорийы фарс фен',
'viewtalkpage'      => 'Дискусси фен',
'otherlanguages'    => 'Æндæр æвзæгтыл',
'redirectedfrom'    => '(Рарвыстæуыд ацы статьяйæ: «$1»)',
'redirectpagesub'   => 'Рарвитыны фарс',
'lastmodifiedat'    => 'Ацы фарс фæстаг хатт ивд æрцыд: $1, $2.', # $1 date, $2 time
'protectedpage'     => 'Æхгæд фарс',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => '{{grammar:genitive|{{SITENAME}}}} тыххæй',
'aboutpage'            => 'Project:Афыст',
'bugreports'           => 'Рæдыдыл хъуысынгæнинаг',
'currentevents'        => 'Ног хабæрттæ',
'currentevents-url'    => 'Project:Xabar',
'mainpage'             => 'Сæйраг фарс',
'mainpage-description' => 'Сæйраг фарс',
'portal'               => 'Архайджыты æхсæнад',
'privacy'              => 'Хибардзинады политикæ',
'privacypage'          => 'Project:Хибардзинады политикæ',

'versionrequired' => 'Хъæуы MediaWiki-йы версии $1',

'ok'                  => 'Афтæ уæд!',
'pagetitle'           => '$1 — {{SITENAME}}',
'retrievedfrom'       => 'Ратæдзæн: «$1»',
'youhavenewmessages'  => 'Райстай $1 ($2).',
'newmessageslink'     => 'ног фыстæгтæ',
'newmessagesdifflink' => 'фæстаг ивддзинад',
'editsection'         => 'баив æй',
'editold'             => 'баив æй',
'viewsourceold'       => 'йæ код фен',
'editsectionhint'     => 'Баив æй: $1',
'toc'                 => 'Сæргæндтæ',
'showtoc'             => 'равдис',
'hidetoc'             => 'бамбæхс',
'viewdeleted'         => '$1 фенын дæ фæнды?',
'site-rss-feed'       => '$1 — RSS-уаццаг',
'site-atom-feed'      => '$1 — Atom-уаццаг',
'red-link-title'      => '$1 (фыст нæма у)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Статья',
'nstab-user'      => 'Архайæджы фарс',
'nstab-media'     => 'Мультимеди',
'nstab-special'   => 'Сæрмагонд фарс',
'nstab-project'   => 'Проекты тыххæй',
'nstab-image'     => 'Ныв',
'nstab-mediawiki' => 'Фыстаг',
'nstab-template'  => 'Шаблон',
'nstab-help'      => 'Æххуысы фарс',
'nstab-category'  => 'Категори',

# Main script and global functions
'nosuchspecialpage' => 'Ахæм сæрмагонд фарс нæй',
'nospecialpagetext' => "<big>'''Нæй ахæм сæрмагонд фарс.'''</big>

Кæс [[Special:SpecialPages|æппæт сæрмагонд фæрсты номхыгъд]].",

# General errors
'error'                => 'Рæдыд',
'internalerror'        => 'Мидæг рæдыд',
'internalerror_info'   => 'Мидæг рæдыд: $1',
'filecopyerror'        => 'Файл «$1» файлмæ «$2» халдихгæнæн нæ разынд.',
'filedeleteerror'      => 'Нæй аппарæн файл «$1».',
'directorycreateerror' => 'Нæй саразæн файлдон «$1».',
'filenotfound'         => 'Нæй ссарæн файл «$1».',
'unexpected'           => 'Æнæмбæлон æмиасад: «$1»=«$2».',
'badtitle'             => 'Æнæмбæлон сæргонд',
'viewsource'           => 'Йæ код фен',
'viewsourcefor'        => 'Фарс «$1»',
'protectedpagetext'    => 'Ацы фарс у ивынæй æхгæд.',
'viewsourcetext'       => 'Ацы фарсы код фенæн æмæ халдих кæнæн ис:',
'ns-specialprotected'  => 'Сæрмагонд фæрстæ ({{ns:special}}) баивæн нæй.',

# Virus scanner
'virus-unknownscanner' => 'æнæзонгæ антивирус:',

# Login and logout pages
'logouttitle'             => 'Номсусæг суын',
'welcomecreation'         => '<h2>Æгас цу, $1!</h2><p>Регистрацигонд æрцыдтæ.',
'loginpagetitle'          => 'Дæхи бацамон системæйæн',
'yourname'                => 'Архайæджы ном:',
'yourpassword'            => 'Пароль:',
'yourpasswordagain'       => 'Дæ пароль иу хатт ма:',
'remembermypassword'      => 'Системæ бахъуыды кæнæд мæ пароль ацы компьютерыл',
'yourdomainname'          => 'Дæ домен:',
'login'                   => 'Дæхи бавдис системæйæн',
'nav-login-createaccount' => 'Системæйæн дæхи бавдис',
'userlogin'               => 'Системæйæн дæхи бавдис',
'logout'                  => 'Номсусæг суын',
'userlogout'              => 'Номсусæг су',
'notloggedin'             => 'Системæйæн дæхи нæ бацамыдтай',
'createaccountmail'       => 'адрисмæ гæсгæ',
'badretype'               => 'Дыууæ хатты иу пароль хъуамæ ныффыстаис',
'youremail'               => 'Дæ электронон посты адрис',
'username'                => 'Регистрацигонд ном:',
'yourrealname'            => 'Дæ æцæг ном*',
'yourlanguage'            => 'Техникон фыстыты æвзаг:',
'yourvariant'             => 'Æвзаджы вариант:',
'yournick'                => 'Фæсномыг (къухæрфыстытæм):',
'badsiglength'            => 'Æгæр даргъ къухæрфыст, хъуамæ $1 дамгъæйæ къаддæр уа.',
'email'                   => 'Эл. посты адрис',
'loginsuccess'            => 'Ныр та Википедийы архайыс $1, зæгъгæ, ахæм номæй.',
'wrongpasswordempty'      => 'Пароль афтид уыд. Афтæ нæ баззы, ныффыс-ма исты пароль.',
'mailmypassword'          => 'Рарвит мæм ног пароль',
'noemail'                 => 'Архайæг $1 йæ электрон посты адрис нæ ныууагъта.',
'emailconfirmlink'        => 'Дæ электронон посты адрис сфидар кæн',
'loginlanguagelabel'      => 'Æвзаг: $1',

# Password reset dialog
'resetpass_text' => '<!-- Бахæсс дæ текст ам -->',

# Edit page toolbar
'bold_sample'     => 'Ацы текст бæзджын суыдзæн',
'bold_tip'        => 'Бæзджын текст',
'italic_sample'   => 'Курсив',
'italic_tip'      => 'Курсив',
'link_sample'     => 'Æрвитæны текст',
'link_tip'        => 'Мидæг æрвитæн (æндæр статьямæ)',
'extlink_tip'     => 'Æддаг æрвитæн (префикс http:// ма рох кæн)',
'headline_sample' => 'Ам сæргонды текст уæд',
'math_sample'     => 'Ныффысс формулæ',
'math_tip'        => 'Математикон формулæ (формат LaTeX)',

# Edit pages
'summary'            => 'Ивддзинæдты мидис',
'subject'            => 'Темæ/сæргонд',
'minoredit'          => 'Ай чысыл ивддзинад у.',
'watchthis'          => 'Ацы фарсмæ дæ цæст æрдар',
'savearticle'        => 'Афтæ уæд!',
'showpreview'        => 'Фен уал æй',
'showdiff'           => 'Цы баивтай ацы тексты, уый фен',
'blockednoreason'    => 'аххос амынд не ’рцыд',
'newarticle'         => '(Ног)',
'note'               => '<strong>Бафиппай:</strong>',
'editing'            => 'Ивыс: $1',
'editconflict'       => 'Ивыны конфликт: $1',
'longpagewarning'    => '<strong>РАГФÆДЗАХСТ: Ацы фарсы бæрцуат у $1 килобайты.
Сæ бæрцуат 32 килобайтæй фылдæр кæмæн у, ахæм фæрстæ иуæй-иу браузерты раст нæ зынынц.
Кæд ахæм вариант и, уæд ацы фарсæй цалдæр фарсы скæн.</strong>',
'templatesused'      => 'Ацы фарсы шаблонтæ:',
'template-protected' => '(æхгæд)',

# History pages
'currentrev'          => 'Нырыккон верси',
'currentrevisionlink' => 'Нырыккон верси',
'cur'                 => 'ныр.',
'last'                => 'раздæры',
'page_first'          => 'фыццаг',
'page_last'           => 'фæстаг',
'histlegend'          => 'Куыд æй æмбарын: (нырыккон) = нырыккон версийæ хъауджыдæрдзинад, (раздæры) = раздæры версийæ хъауджыдæрдзинад, Ч = чысыл ивддзинад.',
'historyempty'        => '(афтид)',

# Revision feed
'history-feed-title'          => 'Ивддзинæдты истори',
'history-feed-item-nocomment' => '$1 $2', # user at time

# Revision deletion
'rev-delundel'      => 'равдис/бамбæхс',
'pagehist'          => 'Фарсы истори',
'revdelete-summary' => 'ивддзинады мидис',
'revdelete-uname'   => 'архайæджы ном',

# Diffs
'lineno' => 'Рæнхъ $1:',

# Search results
'searchresults'      => 'Цы ссардæуы',
'titlematches'       => 'Статьяты сæргæндты æмцаутæ',
'textmatches'        => 'Статьяты æмцаутæ',
'prevn'              => '$1 фæстæмæ',
'nextn'              => '$1 размæ',
'searchall'          => 'æппæт',
'powersearch'        => 'Сæрмагонд агуырд',
'powersearch-legend' => 'Сæрмагонд агуырд',

# Preferences page
'mypreferences'           => 'Æрмадз',
'prefsnologin'            => 'Системæйæн дæхи нæ бацамыдтай',
'qbsettings-none'         => 'Ма равдис',
'qbsettings-fixedleft'    => 'Галиуырдыгæй',
'qbsettings-fixedright'   => 'Рахизырдыгæй',
'qbsettings-floatingleft' => 'Рахизырдыгæй ленккæнгæ',
'newpassword'             => 'Новый пароль',
'rows'                    => 'Рæнхътæ:',
'timezonelegend'          => 'Сахаты таг',
'localtime'               => 'Бынатон рæстæг',
'timezoneoffset'          => 'Хъауджыдæрдзинад',

# Groups
'group-all' => '(æппæт)',

# User rights log
'rightsnone' => '(нæй)',

# Recent changes
'recentchanges'     => 'Фæстаг ивддзинæдтæ',
'recentchangestext' => 'Ацы фарсыл ирон Википедийы фæстаг ивддзинæдтæ фенæн ис.',
'rcnote'            => 'Дæлдæр нымад сты афæстаг <strong>$2</strong> боны дæргъы конд <strong>{{PLURAL:$1|иу ивддзинад|$1 ивддзинады}}</strong>, $5, $4 уавæрмæ гæсгæ.',
'rcshowhideminor'   => '$1 чысыл ивддзинæдтæ',
'rclinks'           => 'Фæстаг $1 ивддзинæдтæ (афæстаг $2 боны дæргъы чи ’рцыдысты) равдис;
$3',
'diff'              => 'хицæн.',
'hist'              => 'лог',
'hide'              => 'бамбæхс',
'show'              => 'Равдис',
'minoreditletter'   => 'ч',
'newpageletter'     => 'Н',
'boteditletter'     => 'б',

# Recent changes linked
'recentchangeslinked' => 'Баст ивддзинæдтæ',

# Upload
'upload'          => 'Ног файл сæвæр',
'uploadbtn'       => 'Ног файл сæвæр',
'uploadnologin'   => 'Системæйæн дæхи нæ бацамыдтай',
'filename'        => 'Файлы ном',
'savefile'        => 'Бавæр æй',
'uploadvirus'     => 'Файлы разынд вирус! Кæс $1',
'watchthisupload' => 'Ацы файлмæ дæ цæст æрдар',

# Special:ImageList
'imagelist' => 'Нывты номхыгъд',

# Image description page
'filehist'          => 'Файлы истори',
'filehist-current'  => 'нырыккон',
'filehist-datetime' => 'Датæ/рæстæг',
'filehist-user'     => 'Архайæг',
'filehist-filesize' => 'Файлы бæрцуат',
'filehist-comment'  => 'Фиппаинаг',
'imagelinks'        => 'Æрвитæнтæ',
'linkstoimage'      => 'Ацы нывæй пайда {{PLURAL:$1|кæны иу фарс|кæнынц ахæм фæрстæ}}:',

# File deletion
'filedelete-submit'           => 'Аппар',
'filedelete-otherreason'      => 'Æндæр кæнæ уæлæмхасæн аххос:',
'filedelete-reason-otherlist' => 'Æндæр аххос',

# MIME search
'download' => 'æрбавгæн',

# Random page
'randompage' => 'Æнæбары æвзæрст фарс',

# Statistics
'userstats'     => 'Архайджыты статистикæ',
'userstatstext' => "Регистрацигонд {{PLURAL:$1|æрцыд '''иу архайæг'''|æрцыдысты $1 [[Special:ListUsers|архайæджы]]}}, уыдонæй '''$2''' (ома сæ '''$4%''') {{PLURAL:$2|у|сты}} $5.",

'brokenredirects-edit'   => '(баив æй)',
'brokenredirects-delete' => '(аппар)',

'withoutinterwiki-submit' => 'Равдис',

# Miscellaneous special pages
'nbytes'            => '$1 {{PLURAL:$1|байт|байты}}',
'nlinks'            => '$1 {{PLURAL:$1|æрвитæн|æрвитæны}}',
'nviews'            => '$1 {{PLURAL:$1|æркаст|æркасты}}',
'lonelypages'       => 'Сидзæр фæрстæ',
'wantedcategories'  => 'Хъæугæ категоритæ',
'wantedpages'       => 'Хъæугæ фæрстæ',
'shortpages'        => 'Цыбыр фæрстæ',
'longpages'         => 'Даргъ фæрстæ',
'protectedpages'    => 'Æхгæд фæрстæ',
'listusers'         => 'Архайджыты номхыгъд',
'newpages'          => 'Ног фæрстæ',
'newpages-username' => 'Архайæг:',
'ancientpages'      => 'Зæронддæр фæрстæ',
'move'              => 'Ном баив',

# Special:Log
'speciallogtitlelabel' => 'Сæргонд:',

# Special:AllPages
'allpages'       => 'Æппæт фæрстæ',
'alphaindexline' => '$1 (уыдоны ’хсæн цы статьятæ ис, фен) $2',
'allarticles'    => 'Æппæт статьятæ',
'allpagesprev'   => 'фæстæмæ',
'allpagesnext'   => 'дарддæр',

# Special:Categories
'categories'                    => 'Категоритæ',
'categoriespagetext'            => 'Мæнæ ахæм категоритæ ирон Википедийы ис.',
'special-categories-sort-count' => 'нымæцмæ гæсгæ равæр',
'special-categories-sort-abc'   => 'алфавитмæ гæсгæ равæр',

# Special:ListUsers
'listusers-submit' => 'Равдис',

# E-mail user
'mailnologintext' => 'Фыстæгтæ æрвитынмæ хъуамæ [[Special:UserLogin|системæйæн дæхи бавдисай]] æмæ дæ бæлвырд электронон посты адрис [[Special:Preferences|ныффыссай]].',
'emailpage'       => 'Электронон фыстæг йæм барвит',

# Watchlist
'watchlist'            => 'Цæстдарды номхыгъд',
'mywatchlist'          => 'Дæ цæст кæмæ дарыс, уыцы фæрстæ',
'nowatchlist'          => 'Иу статьямæ дæр дæ цæст нæ дарыс.',
'watchnologin'         => 'Системæйæн дæхи нæ бацамыдтай',
'watchnologintext'     => 'Ацы номхыгъд ивынмæ [[Special:UserLogin|хъуамæ дæхи бацамонай системæйæн]].',
'addedwatch'           => 'Дæ цæст кæмæ дарыс, уыцы статьятæм бафтыд.',
'watch'                => 'Дæ цæст æрдар',
'watchthispage'        => 'Ацы фарсмæ дæ цæст æрдар',
'unwatch'              => 'Мауал дæ цæст дар',
'watchlist-details'    => '$1 фарсмæ дæ цæст дарыс, дискусситы фæстæмæ.',
'watchlistcontains'    => 'Дæ цæст $1 фарсмæ дарыс.',
'wlnote'               => "Дæлæ афæстаг '''$2 сахаты дæргъы''' цы $1 {{PLURAL:$1|ивддзинад|ивддзинады}} æрцыди.",
'wlshowlast'           => 'Фæстæг $1 сахаты, $2 боны дæргъы; $3.',
'watchlist-show-bots'  => 'Роботты куыст равдис',
'watchlist-hide-bots'  => 'Роботты куыст бамбæхс',
'watchlist-show-own'   => 'Мæхæдæг цы ивддзинæдтæ скодтон, уыдон равдис',
'watchlist-hide-own'   => 'Мæхæдæг цы ивддзинæдтæ скодтон, уыдон бамбæхс',
'watchlist-show-minor' => 'Чысыл ивддзинæдтæ равдис',
'watchlist-hide-minor' => 'Чысыл ивддзинæдтæ бамбæхс',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Цæстдард фæрсты номхыгъдмæ афтауын...',
'unwatching' => 'Цæстдард фæрсты номхыгъдæй аиуварс кæнын...',

# Delete/protect/revert
'exblank'               => 'фарс афтид уыдис',
'deleteotherreason'     => 'Æндæр кæнæ уæлæмхасæн аххос:',
'deletereasonotherlist' => 'Æндæр аххос',
'restriction-type'      => 'Бартæ:',

# Restrictions (nouns)
'restriction-edit' => 'Ивын',

# Namespace form on various pages
'blanknamespace' => '(Сæйраг)',

# Contributions
'contributions' => 'Йæ бавæрд',
'mycontris'     => 'Дæ бавæрд',
'uctop'         => '(уæле баззад)',

'sp-contributions-blocklog' => 'Хъодыты лог',

# What links here
'whatlinkshere'           => 'Цавæр æрвитæнтæ цæуынц ардæм',
'whatlinkshere-page'      => 'Фарс:',
'linklistsub'             => '(Æрвитæнты номхыгъд)',
'whatlinkshere-links'     => '← æрвитæнтæ',
'whatlinkshere-hidelinks' => '$1 æрвитæнтæ',
'whatlinkshere-filters'   => 'Фильтртæ',

# Block/unblock
'ipbreason'          => 'Аххос',
'ipbreasonotherlist' => 'Æндæр аххос',
'ipbotherreason'     => 'Æндæр кæнæ уæлæмхасæн аххос:',
'ipb-blocklist'      => 'Актуалон хъоды равдис',
'ipblocklist-legend' => 'Хъодыгонд архайæджы ацагур',
'ipblocklist-empty'  => 'Хъодыгæндты номхыгъд афтид у.',
'contribslink'       => 'бавæрд',
'blocklogpage'       => 'Хъодыты лог',

# Move page
'movearticle' => 'Статьяйы ном баив',
'newtitle'    => 'Ног ном',
'move-watch'  => 'Ацы фарсмæ дæ цæст æрдар',
'movereason'  => 'Аххос:',

# Namespace 8 related
'allmessages' => 'Æппæт техникон фыстытæ',

# Special:Import
'importnotext' => 'Афтид у кæнæ текст дзы нæй',

# Tooltip help for the actions
'tooltip-pt-userpage'     => 'Мæхи фарс (дæу тыххæй ам ныффысс)',
'tooltip-pt-mytalk'       => 'Мæ дискусси',
'tooltip-pt-preferences'  => 'Википеди куыд кусы, уый срæвдз кæн дæ хъæуындзинæдтæм гæсгæ',
'tooltip-pt-mycontris'    => 'Мæ бавæрд',
'tooltip-pt-login'        => 'Системæмæ дæхи бацамонай, кæд æцæг дæ хæс нæу, уæддæр',
'tooltip-pt-logout'       => 'Регистрацигонд сеансæй рацу',
'tooltip-ca-edit'         => 'Ацы фарс дæ бон у ивын. Дæ хорзæхæй, «Фен уал æй» джыбыйæ пайда кæн',
'tooltip-ca-protect'      => 'Ацы фарс ивддзинæдтæй сæхгæн',
'tooltip-ca-delete'       => 'Аппар ацы фарс',
'tooltip-ca-watch'        => 'Дæ цæст кæмæ дарыс, уыцы фæрсты номхыгъдмæ бафтау',
'tooltip-n-mainpage'      => 'Сæйраг фарсмæ рацу',
'tooltip-n-portal'        => 'Проекты тыххæй æмæ, дæу цы бон у, уый тыххæй дæр',
'tooltip-n-recentchanges' => 'Чи æмæ цавæр статьяты баивта',
'tooltip-n-help'          => 'Кæд цыдæртæ нæ бамбæрстай',
'tooltip-t-whatlinkshere' => 'Ацы фарсмæ чи ’рвитынц, ахæм фæрсты номхыгъд',
'tooltip-t-upload'        => 'Нывтæ кæнæ мультимедиа-файлтæ бавæр',
'tooltip-t-specialpages'  => 'Сæрмагонд фæрсты номхыгъд',
'tooltip-ca-nstab-image'  => 'Нывы фарс',

# Attribution
'others' => 'æндæртæ',

# Spam protection
'spamprotectiontitle' => 'Спамы ныхмæ фильтр',

# Media information
'widthheightpage' => '$1 × $2, $3 фарсы',

# Special:NewImages
'newimages' => 'Ног нывты галерей',
'ilsubmit'  => 'Агур',
'bydate'    => 'рæстæгмæ гæсгæ',

# EXIF tags
'exif-artist' => 'Чи йæ систа',

'exif-gaincontrol-0' => 'Нæй',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'æппæт',
'imagelistall'     => 'æппæт',
'watchlistall2'    => 'æппæт',
'namespacesall'    => 'æппæт',
'monthsall'        => 'æппæт',

# action=purge
'confirm_purge_button' => 'Афтæ уæд!',

# Size units
'size-bytes'     => '$1 байт(ы)',
'size-kilobytes' => '$1 КБ',
'size-megabytes' => '$1 МБ',
'size-gigabytes' => '$1 ГБ',

# Watchlist editor
'watchlistedit-noitems'      => 'Иу фарсмæ дæр нæ дарыс дæ цæст, ацы номхыгъд афтид у.',
'watchlistedit-normal-title' => 'Дæ цæст кæмæ дарыс, уыцы фæрсты номхыгъд ивыс',

# Watchlist editing tools
'watchlisttools-view' => 'Баст ивддзинæдтæ фен',
'watchlisttools-edit' => 'Номхыгъд фен/баив',

# Special:Version
'version'                  => 'MediaWiki-йы верси', # Not used as normal message but as header for the special page itself
'version-version'          => 'Верси',
'version-software-version' => 'Верси',

# Special:SpecialPages
'specialpages' => 'Сæрмагонд фæрстæ',

);
