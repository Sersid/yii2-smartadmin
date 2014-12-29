<?php
namespace sersid\smartadmin;
use yii\helpers\ArrayHelper;

class Html extends \yii\helpers\Html
{
    /**
     * FontAwesome icons values
     */
    const ICON_FA_ANGELLIST = 'fa-angellist';
    const ICON_FA_AREA_CHART = 'fa-area-chart';
    const ICON_FA_AT = 'fa-at';
    const ICON_FA_BELL_SLASH = 'fa-bell-slash';
    const ICON_FA_BELL_SLASH_O = 'fa-bell-slash-o';
    const ICON_FA_BICYCLE = 'fa-bicycle';
    const ICON_FA_BINOCULARS = 'fa-binoculars';
    const ICON_FA_BIRTHDAY_CAKE = 'fa-birthday-cake';
    const ICON_FA_BUS = 'fa-bus';
    const ICON_FA_CALCULATOR = 'fa-calculator';
    const ICON_FA_CC = 'fa-cc';
    const ICON_FA_CC_AMEX = 'fa-cc-amex';
    const ICON_FA_CC_DISCOVER = 'fa-cc-discover';
    const ICON_FA_CC_MASTERCARD = 'fa-cc-mastercard';
    const ICON_FA_CC_PAYPAL = 'fa-cc-paypal';
    const ICON_FA_CC_STRIPE = 'fa-cc-stripe';
    const ICON_FA_CC_VISA = 'fa-cc-visa';
    const ICON_FA_COPYRIGHT = 'fa-copyright';
    const ICON_FA_EYEDROPPER = 'fa-eyedropper';
    const ICON_FA_FUTBOL_O = 'fa-futbol-o';
    const ICON_FA_GOOGLE_WALLET = 'fa-google-wallet';
    const ICON_FA_ILS = 'fa-ils';
    const ICON_FA_IOXHOST = 'fa-ioxhost';
    const ICON_FA_LASTFM = 'fa-lastfm';
    const ICON_FA_LASTFM_SQUARE = 'fa-lastfm-square';
    const ICON_FA_LINE_CHART = 'fa-line-chart';
    const ICON_FA_MEANPATH = 'fa-meanpath';
    const ICON_FA_NEWSPAPER_O = 'fa-newspaper-o';
    const ICON_FA_PAINT_BRUSH = 'fa-paint-brush';
    const ICON_FA_PAYPAL = 'fa-paypal';
    const ICON_FA_PIE_CHART = 'fa-pie-chart';
    const ICON_FA_PLUG = 'fa-plug';
    const ICON_FA_SHEKEL = 'fa-shekel';
    const ICON_FA_SHEQEL = 'fa-sheqel';
    const ICON_FA_SLIDESHARE = 'fa-slideshare';
    const ICON_FA_SOCCER_BALL_O = 'fa-soccer-ball-o';
    const ICON_FA_TOGGLE_OFF = 'fa-toggle-off';
    const ICON_FA_TOGGLE_ON = 'fa-toggle-on';
    const ICON_FA_TRASH = 'fa-trash';
    const ICON_FA_TTY = 'fa-tty';
    const ICON_FA_TWITCH = 'fa-twitch';
    const ICON_FA_WIFI = 'fa-wifi';
    const ICON_FA_YELP = 'fa-yelp';
    const ICON_FA_ADJUST = 'fa-adjust';
    const ICON_FA_ANCHOR = 'fa-anchor';
    const ICON_FA_ARCHIVE = 'fa-archive';
    const ICON_FA_ARROWS = 'fa-arrows';
    const ICON_FA_ARROWS_H = 'fa-arrows-h';
    const ICON_FA_ARROWS_V = 'fa-arrows-v';
    const ICON_FA_ASTERISK = 'fa-asterisk';
    const ICON_FA_AUTOMOBILE = 'fa-automobile';
    const ICON_FA_BAN = 'fa-ban';
    const ICON_FA_BANK = 'fa-bank';
    const ICON_FA_BAR_CHART = 'fa-bar-chart';
    const ICON_FA_BAR_CHART_O = 'fa-bar-chart-o';
    const ICON_FA_BARCODE = 'fa-barcode';
    const ICON_FA_BARS = 'fa-bars';
    const ICON_FA_BEER = 'fa-beer';
    const ICON_FA_BELL = 'fa-bell';
    const ICON_FA_BELL_O = 'fa-bell-o';
    const ICON_FA_BOLT = 'fa-bolt';
    const ICON_FA_BOMB = 'fa-bomb';
    const ICON_FA_BOOK = 'fa-book';
    const ICON_FA_BOOKMARK = 'fa-bookmark';
    const ICON_FA_BOOKMARK_O = 'fa-bookmark-o';
    const ICON_FA_BRIEFCASE = 'fa-briefcase';
    const ICON_FA_BUG = 'fa-bug';
    const ICON_FA_BUILDING = 'fa-building';
    const ICON_FA_BUILDING_O = 'fa-building-o';
    const ICON_FA_BULLHORN = 'fa-bullhorn';
    const ICON_FA_BULLSEYE = 'fa-bullseye';
    const ICON_FA_CAB = 'fa-cab';
    const ICON_FA_CALENDAR = 'fa-calendar';
    const ICON_FA_CALENDAR_O = 'fa-calendar-o';
    const ICON_FA_CAMERA = 'fa-camera';
    const ICON_FA_CAMERA_RETRO = 'fa-camera-retro';
    const ICON_FA_CAR = 'fa-car';
    const ICON_FA_CARET_SQUARE_O_DOWN = 'fa-caret-square-o-down';
    const ICON_FA_CARET_SQUARE_O_LEFT = 'fa-caret-square-o-left';
    const ICON_FA_CARET_SQUARE_O_RIGHT = 'fa-caret-square-o-right';
    const ICON_FA_CARET_SQUARE_O_UP = 'fa-caret-square-o-up';
    const ICON_FA_CERTIFICATE = 'fa-certificate';
    const ICON_FA_CHECK = 'fa-check';
    const ICON_FA_CHECK_CIRCLE = 'fa-check-circle';
    const ICON_FA_CHECK_CIRCLE_O = 'fa-check-circle-o';
    const ICON_FA_CHECK_SQUARE = 'fa-check-square';
    const ICON_FA_CHECK_SQUARE_O = 'fa-check-square-o';
    const ICON_FA_CHILD = 'fa-child';
    const ICON_FA_CIRCLE = 'fa-circle';
    const ICON_FA_CIRCLE_O = 'fa-circle-o';
    const ICON_FA_CIRCLE_O_NOTCH = 'fa-circle-o-notch';
    const ICON_FA_CIRCLE_THIN = 'fa-circle-thin';
    const ICON_FA_CLOCK_O = 'fa-clock-o';
    const ICON_FA_CLOSE = 'fa-close';
    const ICON_FA_CLOUD = 'fa-cloud';
    const ICON_FA_CLOUD_DOWNLOAD = 'fa-cloud-download';
    const ICON_FA_CLOUD_UPLOAD = 'fa-cloud-upload';
    const ICON_FA_CODE = 'fa-code';
    const ICON_FA_CODE_FORK = 'fa-code-fork';
    const ICON_FA_COFFEE = 'fa-coffee';
    const ICON_FA_COG = 'fa-cog';
    const ICON_FA_COGS = 'fa-cogs';
    const ICON_FA_COMMENT = 'fa-comment';
    const ICON_FA_COMMENT_O = 'fa-comment-o';
    const ICON_FA_COMMENTS = 'fa-comments';
    const ICON_FA_COMMENTS_O = 'fa-comments-o';
    const ICON_FA_COMPASS = 'fa-compass';
    const ICON_FA_CREDIT_CARD = 'fa-credit-card';
    const ICON_FA_CROP = 'fa-crop';
    const ICON_FA_CROSSHAIRS = 'fa-crosshairs';
    const ICON_FA_CUBE = 'fa-cube';
    const ICON_FA_CUBES = 'fa-cubes';
    const ICON_FA_CUTLERY = 'fa-cutlery';
    const ICON_FA_DASHBOARD = 'fa-dashboard';
    const ICON_FA_DATABASE = 'fa-database';
    const ICON_FA_DESKTOP = 'fa-desktop';
    const ICON_FA_DOT_CIRCLE_O = 'fa-dot-circle-o';
    const ICON_FA_DOWNLOAD = 'fa-download';
    const ICON_FA_EDIT = 'fa-edit';
    const ICON_FA_ELLIPSIS_H = 'fa-ellipsis-h';
    const ICON_FA_ELLIPSIS_V = 'fa-ellipsis-v';
    const ICON_FA_ENVELOPE = 'fa-envelope';
    const ICON_FA_ENVELOPE_O = 'fa-envelope-o';
    const ICON_FA_ENVELOPE_SQUARE = 'fa-envelope-square';
    const ICON_FA_ERASER = 'fa-eraser';
    const ICON_FA_EXCHANGE = 'fa-exchange';
    const ICON_FA_EXCLAMATION = 'fa-exclamation';
    const ICON_FA_EXCLAMATION_CIRCLE = 'fa-exclamation-circle';
    const ICON_FA_EXCLAMATION_TRIANGLE = 'fa-exclamation-triangle';
    const ICON_FA_EXTERNAL_LINK = 'fa-external-link';
    const ICON_FA_EXTERNAL_LINK_SQUARE = 'fa-external-link-square';
    const ICON_FA_EYE = 'fa-eye';
    const ICON_FA_EYE_SLASH = 'fa-eye-slash';
    const ICON_FA_FAX = 'fa-fax';
    const ICON_FA_FEMALE = 'fa-female';
    const ICON_FA_FIGHTER_JET = 'fa-fighter-jet';
    const ICON_FA_FILE_ARCHIVE_O = 'fa-file-archive-o';
    const ICON_FA_FILE_AUDIO_O = 'fa-file-audio-o';
    const ICON_FA_FILE_CODE_O = 'fa-file-code-o';
    const ICON_FA_FILE_EXCEL_O = 'fa-file-excel-o';
    const ICON_FA_FILE_IMAGE_O = 'fa-file-image-o';
    const ICON_FA_FILE_MOVIE_O = 'fa-file-movie-o';
    const ICON_FA_FILE_PDF_O = 'fa-file-pdf-o';
    const ICON_FA_FILE_PHOTO_O = 'fa-file-photo-o';
    const ICON_FA_FILE_PICTURE_O = 'fa-file-picture-o';
    const ICON_FA_FILE_POWERPOINT_O = 'fa-file-powerpoint-o';
    const ICON_FA_FILE_SOUND_O = 'fa-file-sound-o';
    const ICON_FA_FILE_VIDEO_O = 'fa-file-video-o';
    const ICON_FA_FILE_WORD_O = 'fa-file-word-o';
    const ICON_FA_FILE_ZIP_O = 'fa-file-zip-o';
    const ICON_FA_FILM = 'fa-film';
    const ICON_FA_FILTER = 'fa-filter';
    const ICON_FA_FIRE = 'fa-fire';
    const ICON_FA_FIRE_EXTINGUISHER = 'fa-fire-extinguisher';
    const ICON_FA_FLAG = 'fa-flag';
    const ICON_FA_FLAG_CHECKERED = 'fa-flag-checkered';
    const ICON_FA_FLAG_O = 'fa-flag-o';
    const ICON_FA_FLASH = 'fa-flash';
    const ICON_FA_FLASK = 'fa-flask';
    const ICON_FA_FOLDER = 'fa-folder';
    const ICON_FA_FOLDER_O = 'fa-folder-o';
    const ICON_FA_FOLDER_OPEN = 'fa-folder-open';
    const ICON_FA_FOLDER_OPEN_O = 'fa-folder-open-o';
    const ICON_FA_FROWN_O = 'fa-frown-o';
    const ICON_FA_GAMEPAD = 'fa-gamepad';
    const ICON_FA_GAVEL = 'fa-gavel';
    const ICON_FA_GEAR = 'fa-gear';
    const ICON_FA_GEARS = 'fa-gears';
    const ICON_FA_GIFT = 'fa-gift';
    const ICON_FA_GLASS = 'fa-glass';
    const ICON_FA_GLOBE = 'fa-globe';
    const ICON_FA_GRADUATION_CAP = 'fa-graduation-cap';
    const ICON_FA_GROUP = 'fa-group';
    const ICON_FA_HDD_O = 'fa-hdd-o';
    const ICON_FA_HEADPHONES = 'fa-headphones';
    const ICON_FA_HEART = 'fa-heart';
    const ICON_FA_HEART_O = 'fa-heart-o';
    const ICON_FA_HISTORY = 'fa-history';
    const ICON_FA_HOME = 'fa-home';
    const ICON_FA_IMAGE = 'fa-image';
    const ICON_FA_INBOX = 'fa-inbox';
    const ICON_FA_INFO = 'fa-info';
    const ICON_FA_INFO_CIRCLE = 'fa-info-circle';
    const ICON_FA_INSTITUTION = 'fa-institution';
    const ICON_FA_KEY = 'fa-key';
    const ICON_FA_KEYBOARD_O = 'fa-keyboard-o';
    const ICON_FA_LANGUAGE = 'fa-language';
    const ICON_FA_LAPTOP = 'fa-laptop';
    const ICON_FA_LEAF = 'fa-leaf';
    const ICON_FA_LEGAL = 'fa-legal';
    const ICON_FA_LEMON_O = 'fa-lemon-o';
    const ICON_FA_LEVEL_DOWN = 'fa-level-down';
    const ICON_FA_LEVEL_UP = 'fa-level-up';
    const ICON_FA_LIFE_BOUY = 'fa-life-bouy';
    const ICON_FA_LIFE_BUOY = 'fa-life-buoy';
    const ICON_FA_LIFE_RING = 'fa-life-ring';
    const ICON_FA_LIFE_SAVER = 'fa-life-saver';
    const ICON_FA_LIGHTBULB_O = 'fa-lightbulb-o';
    const ICON_FA_LOCATION_ARROW = 'fa-location-arrow';
    const ICON_FA_LOCK = 'fa-lock';
    const ICON_FA_MAGIC = 'fa-magic';
    const ICON_FA_MAGNET = 'fa-magnet';
    const ICON_FA_MAIL_FORWARD = 'fa-mail-forward';
    const ICON_FA_MAIL_REPLY = 'fa-mail-reply';
    const ICON_FA_MAIL_REPLY_ALL = 'fa-mail-reply-all';
    const ICON_FA_MALE = 'fa-male';
    const ICON_FA_MAP_MARKER = 'fa-map-marker';
    const ICON_FA_MEH_O = 'fa-meh-o';
    const ICON_FA_MICROPHONE = 'fa-microphone';
    const ICON_FA_MICROPHONE_SLASH = 'fa-microphone-slash';
    const ICON_FA_MINUS = 'fa-minus';
    const ICON_FA_MINUS_CIRCLE = 'fa-minus-circle';
    const ICON_FA_MINUS_SQUARE = 'fa-minus-square';
    const ICON_FA_MINUS_SQUARE_O = 'fa-minus-square-o';
    const ICON_FA_MOBILE = 'fa-mobile';
    const ICON_FA_MOBILE_PHONE = 'fa-mobile-phone';
    const ICON_FA_MONEY = 'fa-money';
    const ICON_FA_MOON_O = 'fa-moon-o';
    const ICON_FA_MORTAR_BOARD = 'fa-mortar-board';
    const ICON_FA_MUSIC = 'fa-music';
    const ICON_FA_NAVICON = 'fa-navicon';
    const ICON_FA_PAPER_PLANE = 'fa-paper-plane';
    const ICON_FA_PAPER_PLANE_O = 'fa-paper-plane-o';
    const ICON_FA_PAW = 'fa-paw';
    const ICON_FA_PENCIL = 'fa-pencil';
    const ICON_FA_PENCIL_SQUARE = 'fa-pencil-square';
    const ICON_FA_PENCIL_SQUARE_O = 'fa-pencil-square-o';
    const ICON_FA_PHONE = 'fa-phone';
    const ICON_FA_PHONE_SQUARE = 'fa-phone-square';
    const ICON_FA_PHOTO = 'fa-photo';
    const ICON_FA_PICTURE_O = 'fa-picture-o';
    const ICON_FA_PLANE = 'fa-plane';
    const ICON_FA_PLUS = 'fa-plus';
    const ICON_FA_PLUS_CIRCLE = 'fa-plus-circle';
    const ICON_FA_PLUS_SQUARE = 'fa-plus-square';
    const ICON_FA_PLUS_SQUARE_O = 'fa-plus-square-o';
    const ICON_FA_POWER_OFF = 'fa-power-off';
    const ICON_FA_PRINT = 'fa-print';
    const ICON_FA_PUZZLE_PIECE = 'fa-puzzle-piece';
    const ICON_FA_QRCODE = 'fa-qrcode';
    const ICON_FA_QUESTION = 'fa-question';
    const ICON_FA_QUESTION_CIRCLE = 'fa-question-circle';
    const ICON_FA_QUOTE_LEFT = 'fa-quote-left';
    const ICON_FA_QUOTE_RIGHT = 'fa-quote-right';
    const ICON_FA_RANDOM = 'fa-random';
    const ICON_FA_RECYCLE = 'fa-recycle';
    const ICON_FA_REFRESH = 'fa-refresh';
    const ICON_FA_REMOVE = 'fa-remove';
    const ICON_FA_REORDER = 'fa-reorder';
    const ICON_FA_REPLY = 'fa-reply';
    const ICON_FA_REPLY_ALL = 'fa-reply-all';
    const ICON_FA_RETWEET = 'fa-retweet';
    const ICON_FA_ROAD = 'fa-road';
    const ICON_FA_ROCKET = 'fa-rocket';
    const ICON_FA_RSS = 'fa-rss';
    const ICON_FA_RSS_SQUARE = 'fa-rss-square';
    const ICON_FA_SEARCH = 'fa-search';
    const ICON_FA_SEARCH_MINUS = 'fa-search-minus';
    const ICON_FA_SEARCH_PLUS = 'fa-search-plus';
    const ICON_FA_SEND = 'fa-send';
    const ICON_FA_SEND_O = 'fa-send-o';
    const ICON_FA_SHARE = 'fa-share';
    const ICON_FA_SHARE_ALT = 'fa-share-alt';
    const ICON_FA_SHARE_ALT_SQUARE = 'fa-share-alt-square';
    const ICON_FA_SHARE_SQUARE = 'fa-share-square';
    const ICON_FA_SHARE_SQUARE_O = 'fa-share-square-o';
    const ICON_FA_SHIELD = 'fa-shield';
    const ICON_FA_SHOPPING_CART = 'fa-shopping-cart';
    const ICON_FA_SIGN_IN = 'fa-sign-in';
    const ICON_FA_SIGN_OUT = 'fa-sign-out';
    const ICON_FA_SIGNAL = 'fa-signal';
    const ICON_FA_SITEMAP = 'fa-sitemap';
    const ICON_FA_SLIDERS = 'fa-sliders';
    const ICON_FA_SMILE_O = 'fa-smile-o';
    const ICON_FA_SORT = 'fa-sort';
    const ICON_FA_SORT_ALPHA_ASC = 'fa-sort-alpha-asc';
    const ICON_FA_SORT_ALPHA_DESC = 'fa-sort-alpha-desc';
    const ICON_FA_SORT_AMOUNT_ASC = 'fa-sort-amount-asc';
    const ICON_FA_SORT_AMOUNT_DESC = 'fa-sort-amount-desc';
    const ICON_FA_SORT_ASC = 'fa-sort-asc';
    const ICON_FA_SORT_DESC = 'fa-sort-desc';
    const ICON_FA_SORT_DOWN = 'fa-sort-down';
    const ICON_FA_SORT_NUMERIC_ASC = 'fa-sort-numeric-asc';
    const ICON_FA_SORT_NUMERIC_DESC = 'fa-sort-numeric-desc';
    const ICON_FA_SORT_UP = 'fa-sort-up';
    const ICON_FA_SPACE_SHUTTLE = 'fa-space-shuttle';
    const ICON_FA_SPINNER = 'fa-spinner';
    const ICON_FA_SPOON = 'fa-spoon';
    const ICON_FA_SQUARE = 'fa-square';
    const ICON_FA_SQUARE_O = 'fa-square-o';
    const ICON_FA_STAR = 'fa-star';
    const ICON_FA_STAR_HALF = 'fa-star-half';
    const ICON_FA_STAR_HALF_EMPTY = 'fa-star-half-empty';
    const ICON_FA_STAR_HALF_FULL = 'fa-star-half-full';
    const ICON_FA_STAR_HALF_O = 'fa-star-half-o';
    const ICON_FA_STAR_O = 'fa-star-o';
    const ICON_FA_SUITCASE = 'fa-suitcase';
    const ICON_FA_SUN_O = 'fa-sun-o';
    const ICON_FA_SUPPORT = 'fa-support';
    const ICON_FA_TABLET = 'fa-tablet';
    const ICON_FA_TACHOMETER = 'fa-tachometer';
    const ICON_FA_TAG = 'fa-tag';
    const ICON_FA_TAGS = 'fa-tags';
    const ICON_FA_TASKS = 'fa-tasks';
    const ICON_FA_TAXI = 'fa-taxi';
    const ICON_FA_TERMINAL = 'fa-terminal';
    const ICON_FA_THUMB_TACK = 'fa-thumb-tack';
    const ICON_FA_THUMBS_DOWN = 'fa-thumbs-down';
    const ICON_FA_THUMBS_O_DOWN = 'fa-thumbs-o-down';
    const ICON_FA_THUMBS_O_UP = 'fa-thumbs-o-up';
    const ICON_FA_THUMBS_UP = 'fa-thumbs-up';
    const ICON_FA_TICKET = 'fa-ticket';
    const ICON_FA_TIMES = 'fa-times';
    const ICON_FA_TIMES_CIRCLE = 'fa-times-circle';
    const ICON_FA_TIMES_CIRCLE_O = 'fa-times-circle-o';
    const ICON_FA_TINT = 'fa-tint';
    const ICON_FA_TOGGLE_DOWN = 'fa-toggle-down';
    const ICON_FA_TOGGLE_LEFT = 'fa-toggle-left';
    const ICON_FA_TOGGLE_RIGHT = 'fa-toggle-right';
    const ICON_FA_TOGGLE_UP = 'fa-toggle-up';
    const ICON_FA_TRASH_O = 'fa-trash-o';
    const ICON_FA_TREE = 'fa-tree';
    const ICON_FA_TROPHY = 'fa-trophy';
    const ICON_FA_TRUCK = 'fa-truck';
    const ICON_FA_UMBRELLA = 'fa-umbrella';
    const ICON_FA_UNIVERSITY = 'fa-university';
    const ICON_FA_UNLOCK = 'fa-unlock';
    const ICON_FA_UNLOCK_ALT = 'fa-unlock-alt';
    const ICON_FA_UNSORTED = 'fa-unsorted';
    const ICON_FA_UPLOAD = 'fa-upload';
    const ICON_FA_USER = 'fa-user';
    const ICON_FA_USERS = 'fa-users';
    const ICON_FA_VIDEO_CAMERA = 'fa-video-camera';
    const ICON_FA_VOLUME_DOWN = 'fa-volume-down';
    const ICON_FA_VOLUME_OFF = 'fa-volume-off';
    const ICON_FA_VOLUME_UP = 'fa-volume-up';
    const ICON_FA_WARNING = 'fa-warning';
    const ICON_FA_WHEELCHAIR = 'fa-wheelchair';
    const ICON_FA_WRENCH = 'fa-wrench';
    const ICON_FA_FILE = 'fa-file';
    const ICON_FA_FILE_O = 'fa-file-o';
    const ICON_FA_FILE_TEXT = 'fa-file-text';
    const ICON_FA_FILE_TEXT_O = 'fa-file-text-o';
    const ICON_FA_BITCOIN = 'fa-bitcoin';
    const ICON_FA_BTC = 'fa-btc';
    const ICON_FA_CNY = 'fa-cny';
    const ICON_FA_DOLLAR = 'fa-dollar';
    const ICON_FA_EUR = 'fa-eur';
    const ICON_FA_EURO = 'fa-euro';
    const ICON_FA_GBP = 'fa-gbp';
    const ICON_FA_INR = 'fa-inr';
    const ICON_FA_JPY = 'fa-jpy';
    const ICON_FA_KRW = 'fa-krw';
    const ICON_FA_RMB = 'fa-rmb';
    const ICON_FA_ROUBLE = 'fa-rouble';
    const ICON_FA_RUB = 'fa-rub';
    const ICON_FA_RUBLE = 'fa-ruble';
    const ICON_FA_RUPEE = 'fa-rupee';
    const ICON_FA_TRY = 'fa-try';
    const ICON_FA_TURKISH_LIRA = 'fa-turkish-lira';
    const ICON_FA_USD = 'fa-usd';
    const ICON_FA_WON = 'fa-won';
    const ICON_FA_YEN = 'fa-yen';
    const ICON_FA_ALIGN_CENTER = 'fa-align-center';
    const ICON_FA_ALIGN_JUSTIFY = 'fa-align-justify';
    const ICON_FA_ALIGN_LEFT = 'fa-align-left';
    const ICON_FA_ALIGN_RIGHT = 'fa-align-right';
    const ICON_FA_BOLD = 'fa-bold';
    const ICON_FA_CHAIN = 'fa-chain';
    const ICON_FA_CHAIN_BROKEN = 'fa-chain-broken';
    const ICON_FA_CLIPBOARD = 'fa-clipboard';
    const ICON_FA_COLUMNS = 'fa-columns';
    const ICON_FA_COPY = 'fa-copy';
    const ICON_FA_CUT = 'fa-cut';
    const ICON_FA_DEDENT = 'fa-dedent';
    const ICON_FA_FILES_O = 'fa-files-o';
    const ICON_FA_FLOPPY_O = 'fa-floppy-o';
    const ICON_FA_FONT = 'fa-font';
    const ICON_FA_HEADER = 'fa-header';
    const ICON_FA_INDENT = 'fa-indent';
    const ICON_FA_ITALIC = 'fa-italic';
    const ICON_FA_LINK = 'fa-link';
    const ICON_FA_LIST = 'fa-list';
    const ICON_FA_LIST_ALT = 'fa-list-alt';
    const ICON_FA_LIST_OL = 'fa-list-ol';
    const ICON_FA_LIST_UL = 'fa-list-ul';
    const ICON_FA_OUTDENT = 'fa-outdent';
    const ICON_FA_PAPERCLIP = 'fa-paperclip';
    const ICON_FA_PARAGRAPH = 'fa-paragraph';
    const ICON_FA_PASTE = 'fa-paste';
    const ICON_FA_REPEAT = 'fa-repeat';
    const ICON_FA_ROTATE_LEFT = 'fa-rotate-left';
    const ICON_FA_ROTATE_RIGHT = 'fa-rotate-right';
    const ICON_FA_SAVE = 'fa-save';
    const ICON_FA_SCISSORS = 'fa-scissors';
    const ICON_FA_STRIKETHROUGH = 'fa-strikethrough';
    const ICON_FA_SUBSCRIPT = 'fa-subscript';
    const ICON_FA_SUPERSCRIPT = 'fa-superscript';
    const ICON_FA_TABLE = 'fa-table';
    const ICON_FA_TEXT_HEIGHT = 'fa-text-height';
    const ICON_FA_TEXT_WIDTH = 'fa-text-width';
    const ICON_FA_TH = 'fa-th';
    const ICON_FA_TH_LARGE = 'fa-th-large';
    const ICON_FA_TH_LIST = 'fa-th-list';
    const ICON_FA_UNDERLINE = 'fa-underline';
    const ICON_FA_UNDO = 'fa-undo';
    const ICON_FA_UNLINK = 'fa-unlink';
    const ICON_FA_ANGLE_DOUBLE_DOWN = 'fa-angle-double-down';
    const ICON_FA_ANGLE_DOUBLE_LEFT = 'fa-angle-double-left';
    const ICON_FA_ANGLE_DOUBLE_RIGHT = 'fa-angle-double-right';
    const ICON_FA_ANGLE_DOUBLE_UP = 'fa-angle-double-up';
    const ICON_FA_ANGLE_DOWN = 'fa-angle-down';
    const ICON_FA_ANGLE_LEFT = 'fa-angle-left';
    const ICON_FA_ANGLE_RIGHT = 'fa-angle-right';
    const ICON_FA_ANGLE_UP = 'fa-angle-up';
    const ICON_FA_ARROW_CIRCLE_DOWN = 'fa-arrow-circle-down';
    const ICON_FA_ARROW_CIRCLE_LEFT = 'fa-arrow-circle-left';
    const ICON_FA_ARROW_CIRCLE_O_DOWN = 'fa-arrow-circle-o-down';
    const ICON_FA_ARROW_CIRCLE_O_LEFT = 'fa-arrow-circle-o-left';
    const ICON_FA_ARROW_CIRCLE_O_RIGHT = 'fa-arrow-circle-o-right';
    const ICON_FA_ARROW_CIRCLE_O_UP = 'fa-arrow-circle-o-up';
    const ICON_FA_ARROW_CIRCLE_RIGHT = 'fa-arrow-circle-right';
    const ICON_FA_ARROW_CIRCLE_UP = 'fa-arrow-circle-up';
    const ICON_FA_ARROW_DOWN = 'fa-arrow-down';
    const ICON_FA_ARROW_LEFT = 'fa-arrow-left';
    const ICON_FA_ARROW_RIGHT = 'fa-arrow-right';
    const ICON_FA_ARROW_UP = 'fa-arrow-up';
    const ICON_FA_ARROWS_ALT = 'fa-arrows-alt';
    const ICON_FA_CARET_DOWN = 'fa-caret-down';
    const ICON_FA_CARET_LEFT = 'fa-caret-left';
    const ICON_FA_CARET_RIGHT = 'fa-caret-right';
    const ICON_FA_CARET_UP = 'fa-caret-up';
    const ICON_FA_CHEVRON_CIRCLE_DOWN = 'fa-chevron-circle-down';
    const ICON_FA_CHEVRON_CIRCLE_LEFT = 'fa-chevron-circle-left';
    const ICON_FA_CHEVRON_CIRCLE_RIGHT = 'fa-chevron-circle-right';
    const ICON_FA_CHEVRON_CIRCLE_UP = 'fa-chevron-circle-up';
    const ICON_FA_CHEVRON_DOWN = 'fa-chevron-down';
    const ICON_FA_CHEVRON_LEFT = 'fa-chevron-left';
    const ICON_FA_CHEVRON_RIGHT = 'fa-chevron-right';
    const ICON_FA_CHEVRON_UP = 'fa-chevron-up';
    const ICON_FA_HAND_O_DOWN = 'fa-hand-o-down';
    const ICON_FA_HAND_O_LEFT = 'fa-hand-o-left';
    const ICON_FA_HAND_O_RIGHT = 'fa-hand-o-right';
    const ICON_FA_HAND_O_UP = 'fa-hand-o-up';
    const ICON_FA_LONG_ARROW_DOWN = 'fa-long-arrow-down';
    const ICON_FA_LONG_ARROW_LEFT = 'fa-long-arrow-left';
    const ICON_FA_LONG_ARROW_RIGHT = 'fa-long-arrow-right';
    const ICON_FA_LONG_ARROW_UP = 'fa-long-arrow-up';
    const ICON_FA_BACKWARD = 'fa-backward';
    const ICON_FA_COMPRESS = 'fa-compress';
    const ICON_FA_EJECT = 'fa-eject';
    const ICON_FA_EXPAND = 'fa-expand';
    const ICON_FA_FAST_BACKWARD = 'fa-fast-backward';
    const ICON_FA_FAST_FORWARD = 'fa-fast-forward';
    const ICON_FA_FORWARD = 'fa-forward';
    const ICON_FA_PAUSE = 'fa-pause';
    const ICON_FA_PLAY = 'fa-play';
    const ICON_FA_PLAY_CIRCLE = 'fa-play-circle';
    const ICON_FA_PLAY_CIRCLE_O = 'fa-play-circle-o';
    const ICON_FA_STEP_BACKWARD = 'fa-step-backward';
    const ICON_FA_STEP_FORWARD = 'fa-step-forward';
    const ICON_FA_STOP = 'fa-stop';
    const ICON_FA_YOUTUBE_PLAY = 'fa-youtube-play';
    const ICON_FA_ADN = 'fa-adn';
    const ICON_FA_ANDROID = 'fa-android';
    const ICON_FA_APPLE = 'fa-apple';
    const ICON_FA_BEHANCE = 'fa-behance';
    const ICON_FA_BEHANCE_SQUARE = 'fa-behance-square';
    const ICON_FA_BITBUCKET = 'fa-bitbucket';
    const ICON_FA_BITBUCKET_SQUARE = 'fa-bitbucket-square';
    const ICON_FA_CODEPEN = 'fa-codepen';
    const ICON_FA_CSS3 = 'fa-css3';
    const ICON_FA_DELICIOUS = 'fa-delicious';
    const ICON_FA_DEVIANTART = 'fa-deviantart';
    const ICON_FA_DIGG = 'fa-digg';
    const ICON_FA_DRIBBBLE = 'fa-dribbble';
    const ICON_FA_DROPBOX = 'fa-dropbox';
    const ICON_FA_DRUPAL = 'fa-drupal';
    const ICON_FA_EMPIRE = 'fa-empire';
    const ICON_FA_FACEBOOK = 'fa-facebook';
    const ICON_FA_FACEBOOK_SQUARE = 'fa-facebook-square';
    const ICON_FA_FLICKR = 'fa-flickr';
    const ICON_FA_FOURSQUARE = 'fa-foursquare';
    const ICON_FA_GE = 'fa-ge';
    const ICON_FA_GIT = 'fa-git';
    const ICON_FA_GIT_SQUARE = 'fa-git-square';
    const ICON_FA_GITHUB = 'fa-github';
    const ICON_FA_GITHUB_ALT = 'fa-github-alt';
    const ICON_FA_GITHUB_SQUARE = 'fa-github-square';
    const ICON_FA_GITTIP = 'fa-gittip';
    const ICON_FA_GOOGLE = 'fa-google';
    const ICON_FA_GOOGLE_PLUS = 'fa-google-plus';
    const ICON_FA_GOOGLE_PLUS_SQUARE = 'fa-google-plus-square';
    const ICON_FA_HACKER_NEWS = 'fa-hacker-news';
    const ICON_FA_HTML5 = 'fa-html5';
    const ICON_FA_INSTAGRAM = 'fa-instagram';
    const ICON_FA_JOOMLA = 'fa-joomla';
    const ICON_FA_JSFIDDLE = 'fa-jsfiddle';
    const ICON_FA_LINKEDIN = 'fa-linkedin';
    const ICON_FA_LINKEDIN_SQUARE = 'fa-linkedin-square';
    const ICON_FA_LINUX = 'fa-linux';
    const ICON_FA_MAXCDN = 'fa-maxcdn';
    const ICON_FA_OPENID = 'fa-openid';
    const ICON_FA_PAGELINES = 'fa-pagelines';
    const ICON_FA_PIED_PIPER = 'fa-pied-piper';
    const ICON_FA_PIED_PIPER_ALT = 'fa-pied-piper-alt';
    const ICON_FA_PINTEREST = 'fa-pinterest';
    const ICON_FA_PINTEREST_SQUARE = 'fa-pinterest-square';
    const ICON_FA_QQ = 'fa-qq';
    const ICON_FA_RA = 'fa-ra';
    const ICON_FA_REBEL = 'fa-rebel';
    const ICON_FA_REDDIT = 'fa-reddit';
    const ICON_FA_REDDIT_SQUARE = 'fa-reddit-square';
    const ICON_FA_RENREN = 'fa-renren';
    const ICON_FA_SKYPE = 'fa-skype';
    const ICON_FA_SLACK = 'fa-slack';
    const ICON_FA_SOUNDCLOUD = 'fa-soundcloud';
    const ICON_FA_SPOTIFY = 'fa-spotify';
    const ICON_FA_STACK_EXCHANGE = 'fa-stack-exchange';
    const ICON_FA_STACK_OVERFLOW = 'fa-stack-overflow';
    const ICON_FA_STEAM = 'fa-steam';
    const ICON_FA_STEAM_SQUARE = 'fa-steam-square';
    const ICON_FA_STUMBLEUPON = 'fa-stumbleupon';
    const ICON_FA_STUMBLEUPON_CIRCLE = 'fa-stumbleupon-circle';
    const ICON_FA_TENCENT_WEIBO = 'fa-tencent-weibo';
    const ICON_FA_TRELLO = 'fa-trello';
    const ICON_FA_TUMBLR = 'fa-tumblr';
    const ICON_FA_TUMBLR_SQUARE = 'fa-tumblr-square';
    const ICON_FA_TWITTER = 'fa-twitter';
    const ICON_FA_TWITTER_SQUARE = 'fa-twitter-square';
    const ICON_FA_VIMEO_SQUARE = 'fa-vimeo-square';
    const ICON_FA_VINE = 'fa-vine';
    const ICON_FA_VK = 'fa-vk';
    const ICON_FA_WECHAT = 'fa-wechat';
    const ICON_FA_WEIBO = 'fa-weibo';
    const ICON_FA_WEIXIN = 'fa-weixin';
    const ICON_FA_WINDOWS = 'fa-windows';
    const ICON_FA_WORDPRESS = 'fa-wordpress';
    const ICON_FA_XING = 'fa-xing';
    const ICON_FA_XING_SQUARE = 'fa-xing-square';
    const ICON_FA_YAHOO = 'fa-yahoo';
    const ICON_FA_YOUTUBE = 'fa-youtube';
    const ICON_FA_YOUTUBE_SQUARE = 'fa-youtube-square';
    const ICON_FA_AMBULANCE = 'fa-ambulance';
    const ICON_FA_H_SQUARE = 'fa-h-square';
    const ICON_FA_HOSPITAL_O = 'fa-hospital-o';
    const ICON_FA_MEDKIT = 'fa-medkit';
    const ICON_FA_STETHOSCOPE = 'fa-stethoscope';
    const ICON_FA_USER_MD = 'fa-user-md';

    /**
     * FontAwesome size values
     */
    const ICON_FA_SIZE_LARGE = 'fa-lg';
    const ICON_FA_SIZE_2X = 'fa-2x';
    const ICON_FA_SIZE_3X = 'fa-3x';
    const ICON_FA_SIZE_4X = 'fa-4x';
    const ICON_FA_SIZE_5X = 'fa-5x';

    /**
     * Glyph icons values
     */
    const ICON_GLYPH_ADJUST = 'glyphicon-adjust';
    const ICON_GLYPH_ALIGN_CENTER = 'glyphicon-align-center';
    const ICON_GLYPH_ALIGN_JUSTIFY = 'glyphicon-align-justify';
    const ICON_GLYPH_ALIGN_LEFT = 'glyphicon-align-left';
    const ICON_GLYPH_ALIGN_RIGHT = 'glyphicon-align-right';
    const ICON_GLYPH_ARROW_DOWN = 'glyphicon-arrow-down';
    const ICON_GLYPH_ARROW_LEFT = 'glyphicon-arrow-left';
    const ICON_GLYPH_ARROW_RIGHT = 'glyphicon-arrow-right';
    const ICON_GLYPH_ARROW_UP = 'glyphicon-arrow-up';
    const ICON_GLYPH_ASTERISK = 'glyphicon-asterisk';
    const ICON_GLYPH_BACKWARD = 'glyphicon-backward';
    const ICON_GLYPH_BAN_CIRCLE = 'glyphicon-ban-circle';
    const ICON_GLYPH_BARCODE = 'glyphicon-barcode';
    const ICON_GLYPH_BELL = 'glyphicon-bell';
    const ICON_GLYPH_BOLD = 'glyphicon-bold';
    const ICON_GLYPH_BOOK = 'glyphicon-book';
    const ICON_GLYPH_BOOKMARK = 'glyphicon-bookmark';
    const ICON_GLYPH_BRIEFCASE = 'glyphicon-briefcase';
    const ICON_GLYPH_BULLHORN = 'glyphicon-bullhorn';
    const ICON_GLYPH_CALENDAR = 'glyphicon-calendar';
    const ICON_GLYPH_CAMERA = 'glyphicon-camera';
    const ICON_GLYPH_CERTIFICATE = 'glyphicon-certificate';
    const ICON_GLYPH_CHECK = 'glyphicon-check';
    const ICON_GLYPH_CHEVRON_DOWN = 'glyphicon-chevron-down';
    const ICON_GLYPH_CHEVRON_LEFT = 'glyphicon-chevron-left';
    const ICON_GLYPH_CHEVRON_RIGHT = 'glyphicon-chevron-right';
    const ICON_GLYPH_CHEVRON_UP = 'glyphicon-chevron-up';
    const ICON_GLYPH_CIRCLE_ARROW_DOWN = 'glyphicon-circle-arrow-down';
    const ICON_GLYPH_CIRCLE_ARROW_LEFT = 'glyphicon-circle-arrow-left';
    const ICON_GLYPH_CIRCLE_ARROW_RIGHT = 'glyphicon-circle-arrow-right';
    const ICON_GLYPH_CIRCLE_ARROW_UP = 'glyphicon-circle-arrow-up';
    const ICON_GLYPH_CLOUD = 'glyphicon-cloud';
    const ICON_GLYPH_CLOUD_DOWNLOAD = 'glyphicon-cloud-download';
    const ICON_GLYPH_CLOUD_UPLOAD = 'glyphicon-cloud-upload';
    const ICON_GLYPH_COG = 'glyphicon-cog';
    const ICON_GLYPH_COLLAPSE_DOWN = 'glyphicon-collapse-down';
    const ICON_GLYPH_COLLAPSE_UP = 'glyphicon-collapse-up';
    const ICON_GLYPH_COMMENT = 'glyphicon-comment';
    const ICON_GLYPH_COMPRESSED = 'glyphicon-compressed';
    const ICON_GLYPH_COPYRIGHT_MARK = 'glyphicon-copyright-mark';
    const ICON_GLYPH_CREDIT_CARD = 'glyphicon-credit-card';
    const ICON_GLYPH_CUTLERY = 'glyphicon-cutlery';
    const ICON_GLYPH_DASHBOARD = 'glyphicon-dashboard';
    const ICON_GLYPH_DOWNLOAD = 'glyphicon-download';
    const ICON_GLYPH_DOWNLOAD_ALT = 'glyphicon-download-alt';
    const ICON_GLYPH_EARPHONE = 'glyphicon-earphone';
    const ICON_GLYPH_EDIT = 'glyphicon-edit';
    const ICON_GLYPH_EJECT = 'glyphicon-eject';
    const ICON_GLYPH_ENVELOPE = 'glyphicon-envelope';
    const ICON_GLYPH_EURO = 'glyphicon-euro';
    const ICON_GLYPH_EXCLAMATION_SIGN = 'glyphicon-exclamation-sign';
    const ICON_GLYPH_EXPAND = 'glyphicon-expand';
    const ICON_GLYPH_EXPORT = 'glyphicon-export';
    const ICON_GLYPH_EYE_CLOSE = 'glyphicon-eye-close';
    const ICON_GLYPH_EYE_OPEN = 'glyphicon-eye-open';
    const ICON_GLYPH_FACETIME_VIDEO = 'glyphicon-facetime-video';
    const ICON_GLYPH_FAST_BACKWARD = 'glyphicon-fast-backward';
    const ICON_GLYPH_FAST_FORWARD = 'glyphicon-fast-forward';
    const ICON_GLYPH_FILE = 'glyphicon-file';
    const ICON_GLYPH_FILM = 'glyphicon-film';
    const ICON_GLYPH_FILTER = 'glyphicon-filter';
    const ICON_GLYPH_FIRE = 'glyphicon-fire';
    const ICON_GLYPH_FLAG = 'glyphicon-flag';
    const ICON_GLYPH_FLASH = 'glyphicon-flash';
    const ICON_GLYPH_FLOPPY_DISK = 'glyphicon-floppy-disk';
    const ICON_GLYPH_FLOPPY_OPEN = 'glyphicon-floppy-open';
    const ICON_GLYPH_FLOPPY_REMOVE = 'glyphicon-floppy-remove';
    const ICON_GLYPH_FLOPPY_SAVE = 'glyphicon-floppy-save';
    const ICON_GLYPH_FLOPPY_SAVED = 'glyphicon-floppy-saved';
    const ICON_GLYPH_FOLDER_CLOSE = 'glyphicon-folder-close';
    const ICON_GLYPH_FOLDER_OPEN = 'glyphicon-folder-open';
    const ICON_GLYPH_FONT = 'glyphicon-font';
    const ICON_GLYPH_FORWARD = 'glyphicon-forward';
    const ICON_GLYPH_FULLSCREEN = 'glyphicon-fullscreen';
    const ICON_GLYPH_GBP = 'glyphicon-gbp';
    const ICON_GLYPH_GIFT = 'glyphicon-gift';
    const ICON_GLYPH_GLASS = 'glyphicon-glass';
    const ICON_GLYPH_GLOBE = 'glyphicon-globe';
    const ICON_GLYPH_HAND_DOWN = 'glyphicon-hand-down';
    const ICON_GLYPH_HAND_LEFT = 'glyphicon-hand-left';
    const ICON_GLYPH_HAND_RIGHT = 'glyphicon-hand-right';
    const ICON_GLYPH_HAND_UP = 'glyphicon-hand-up';
    const ICON_GLYPH_HD_VIDEO = 'glyphicon-hd-video';
    const ICON_GLYPH_HDD = 'glyphicon-hdd';
    const ICON_GLYPH_HEADER = 'glyphicon-header';
    const ICON_GLYPH_HEADPHONES = 'glyphicon-headphones';
    const ICON_GLYPH_HEART = 'glyphicon-heart';
    const ICON_GLYPH_HEART_EMPTY = 'glyphicon-heart-empty';
    const ICON_GLYPH_HOME = 'glyphicon-home';
    const ICON_GLYPH_IMPORT = 'glyphicon-import';
    const ICON_GLYPH_INBOX = 'glyphicon-inbox';
    const ICON_GLYPH_INDENT_LEFT = 'glyphicon-indent-left';
    const ICON_GLYPH_INDENT_RIGHT = 'glyphicon-indent-right';
    const ICON_GLYPH_INFO_SIGN = 'glyphicon-info-sign';
    const ICON_GLYPH_ITALIC = 'glyphicon-italic';
    const ICON_GLYPH_LEAF = 'glyphicon-leaf';
    const ICON_GLYPH_LINK = 'glyphicon-link';
    const ICON_GLYPH_LIST = 'glyphicon-list';
    const ICON_GLYPH_LIST_ALT = 'glyphicon-list-alt';
    const ICON_GLYPH_LOCK = 'glyphicon-lock';
    const ICON_GLYPH_LOG_IN = 'glyphicon-log-in';
    const ICON_GLYPH_LOG_OUT = 'glyphicon-log-out';
    const ICON_GLYPH_MAGNET = 'glyphicon-magnet';
    const ICON_GLYPH_MAP_MARKER = 'glyphicon-map-marker';
    const ICON_GLYPH_MINUS = 'glyphicon-minus';
    const ICON_GLYPH_MINUS_SIGN = 'glyphicon-minus-sign';
    const ICON_GLYPH_MOVE = 'glyphicon-move';
    const ICON_GLYPH_MUSIC = 'glyphicon-music';
    const ICON_GLYPH_NEW_WINDOW = 'glyphicon-new-window';
    const ICON_GLYPH_OFF = 'glyphicon-off';
    const ICON_GLYPH_OK = 'glyphicon-ok';
    const ICON_GLYPH_OK_CIRCLE = 'glyphicon-ok-circle';
    const ICON_GLYPH_OK_SIGN = 'glyphicon-ok-sign';
    const ICON_GLYPH_OPEN = 'glyphicon-open';
    const ICON_GLYPH_PAPERCLIP = 'glyphicon-paperclip';
    const ICON_GLYPH_PAUSE = 'glyphicon-pause';
    const ICON_GLYPH_PENCIL = 'glyphicon-pencil';
    const ICON_GLYPH_PHONE = 'glyphicon-phone';
    const ICON_GLYPH_PHONE_ALT = 'glyphicon-phone-alt';
    const ICON_GLYPH_PICTURE = 'glyphicon-picture';
    const ICON_GLYPH_PLANE = 'glyphicon-plane';
    const ICON_GLYPH_PLAY = 'glyphicon-play';
    const ICON_GLYPH_PLAY_CIRCLE = 'glyphicon-play-circle';
    const ICON_GLYPH_PLUS = 'glyphicon-plus';
    const ICON_GLYPH_PLUS_SIGN = 'glyphicon-plus-sign';
    const ICON_GLYPH_PRINT = 'glyphicon-print';
    const ICON_GLYPH_PUSHPIN = 'glyphicon-pushpin';
    const ICON_GLYPH_QRCODE = 'glyphicon-qrcode';
    const ICON_GLYPH_QUESTION_SIGN = 'glyphicon-question-sign';
    const ICON_GLYPH_RANDOM = 'glyphicon-random';
    const ICON_GLYPH_RECORD = 'glyphicon-record';
    const ICON_GLYPH_REFRESH = 'glyphicon-refresh';
    const ICON_GLYPH_REGISTRATION_MARK = 'glyphicon-registration-mark';
    const ICON_GLYPH_REMOVE = 'glyphicon-remove';
    const ICON_GLYPH_REMOVE_CIRCLE = 'glyphicon-remove-circle';
    const ICON_GLYPH_REMOVE_SIGN = 'glyphicon-remove-sign';
    const ICON_GLYPH_REPEAT = 'glyphicon-repeat';
    const ICON_GLYPH_RESIZE_FULL = 'glyphicon-resize-full';
    const ICON_GLYPH_RESIZE_HORIZONTAL = 'glyphicon-resize-horizontal';
    const ICON_GLYPH_RESIZE_SMALL = 'glyphicon-resize-small';
    const ICON_GLYPH_RESIZE_VERTICAL = 'glyphicon-resize-vertical';
    const ICON_GLYPH_RETWEET = 'glyphicon-retweet';
    const ICON_GLYPH_ROAD = 'glyphicon-road';
    const ICON_GLYPH_SAVE = 'glyphicon-save';
    const ICON_GLYPH_SAVED = 'glyphicon-saved';
    const ICON_GLYPH_SCREENSHOT = 'glyphicon-screenshot';
    const ICON_GLYPH_SD_VIDEO = 'glyphicon-sd-video';
    const ICON_GLYPH_SEARCH = 'glyphicon-search';
    const ICON_GLYPH_SEND = 'glyphicon-send';
    const ICON_GLYPH_SHARE = 'glyphicon-share';
    const ICON_GLYPH_SHARE_ALT = 'glyphicon-share-alt';
    const ICON_GLYPH_SHOPPING_CART = 'glyphicon-shopping-cart';
    const ICON_GLYPH_SIGNAL = 'glyphicon-signal';
    const ICON_GLYPH_SORT = 'glyphicon-sort';
    const ICON_GLYPH_SORT_BY_ALPHABET = 'glyphicon-sort-by-alphabet';
    const ICON_GLYPH_SORT_BY_ALPHABET_ALT = 'glyphicon-sort-by-alphabet-alt';
    const ICON_GLYPH_SORT_BY_ATTRIBUTES = 'glyphicon-sort-by-attributes';
    const ICON_GLYPH_SORT_BY_ATTRIBUTES_ALT = 'glyphicon-sort-by-attributes-alt';
    const ICON_GLYPH_SORT_BY_ORDER = 'glyphicon-sort-by-order';
    const ICON_GLYPH_SORT_BY_ORDER_ALT = 'glyphicon-sort-by-order-alt';
    const ICON_GLYPH_SOUND_5_1 = 'glyphicon-sound-5-1';
    const ICON_GLYPH_SOUND_6_1 = 'glyphicon-sound-6-1';
    const ICON_GLYPH_SOUND_7_1 = 'glyphicon-sound-7-1';
    const ICON_GLYPH_SOUND_DOLBY = 'glyphicon-sound-dolby';
    const ICON_GLYPH_SOUND_STEREO = 'glyphicon-sound-stereo';
    const ICON_GLYPH_STAR = 'glyphicon-star';
    const ICON_GLYPH_STAR_EMPTY = 'glyphicon-star-empty';
    const ICON_GLYPH_STATS = 'glyphicon-stats';
    const ICON_GLYPH_STEP_BACKWARD = 'glyphicon-step-backward';
    const ICON_GLYPH_STEP_FORWARD = 'glyphicon-step-forward';
    const ICON_GLYPH_STOP = 'glyphicon-stop';
    const ICON_GLYPH_SUBTITLES = 'glyphicon-subtitles';
    const ICON_GLYPH_TAG = 'glyphicon-tag';
    const ICON_GLYPH_TAGS = 'glyphicon-tags';
    const ICON_GLYPH_TASKS = 'glyphicon-tasks';
    const ICON_GLYPH_TEXT_HEIGHT = 'glyphicon-text-height';
    const ICON_GLYPH_TEXT_WIDTH = 'glyphicon-text-width';
    const ICON_GLYPH_TH = 'glyphicon-th';
    const ICON_GLYPH_TH_LARGE = 'glyphicon-th-large';
    const ICON_GLYPH_TH_LIST = 'glyphicon-th-list';
    const ICON_GLYPH_THUMBS_DOWN = 'glyphicon-thumbs-down';
    const ICON_GLYPH_THUMBS_UP = 'glyphicon-thumbs-up';
    const ICON_GLYPH_TIME = 'glyphicon-time';
    const ICON_GLYPH_TINT = 'glyphicon-tint';
    const ICON_GLYPH_TOWER = 'glyphicon-tower';
    const ICON_GLYPH_TRANSFER = 'glyphicon-transfer';
    const ICON_GLYPH_TRASH = 'glyphicon-trash';
    const ICON_GLYPH_TREE_CONIFER = 'glyphicon-tree-conifer';
    const ICON_GLYPH_TREE_DECIDUOUS = 'glyphicon-tree-deciduous';
    const ICON_GLYPH_UNCHECKED = 'glyphicon-unchecked';
    const ICON_GLYPH_UPLOAD = 'glyphicon-upload';
    const ICON_GLYPH_USD = 'glyphicon-usd';
    const ICON_GLYPH_USER = 'glyphicon-user';
    const ICON_GLYPH_VOLUME_DOWN = 'glyphicon-volume-down';
    const ICON_GLYPH_VOLUME_OFF = 'glyphicon-volume-off';
    const ICON_GLYPH_VOLUME_UP = 'glyphicon-volume-up';
    const ICON_GLYPH_WARNING_SIGN = 'glyphicon-warning-sign';
    const ICON_GLYPH_WRENCH = 'glyphicon-wrench';
    const ICON_GLYPH_ZOOM_IN = 'glyphicon-zoom-in';
    const ICON_GLYPH_ZOOM_OUT = 'glyphicon-zoom-out';

    /**
     * Glyph Icons size values
     * @see GlyphIcons::size()
     */
    const ICON_GLYPH_SIZE_XL = 'font-xl';
    const ICON_GLYPH_SIZE_LG = 'font-lg';
    const ICON_GLYPH_SIZE_MD = 'font-md';
    const ICON_GLYPH_SIZE_SM = 'font-sm';
    const ICON_GLYPH_SIZE_XS = 'font-xs';

    /**
     * Flag icons values
     */
    const ICON_FLAG_DZ = 'flag-dz';
    const ICON_FLAG_AO = 'flag-ao';
    const ICON_FLAG_BJ = 'flag-bj';
    const ICON_FLAG_BW = 'flag-bw';
    const ICON_FLAG_BF = 'flag-bf';
    const ICON_FLAG_BI = 'flag-bi';
    const ICON_FLAG_CM = 'flag-cm';
    const ICON_FLAG_CV = 'flag-cv';
    const ICON_FLAG_CF = 'flag-cf';
    const ICON_FLAG_TD = 'flag-td';
    const ICON_FLAG_KM = 'flag-km';
    const ICON_FLAG_CG = 'flag-cg';
    const ICON_FLAG_CD = 'flag-cd';
    const ICON_FLAG_CI = 'flag-ci';
    const ICON_FLAG_DJ = 'flag-dj';
    const ICON_FLAG_EG = 'flag-eg';
    const ICON_FLAG_GQ = 'flag-gq';
    const ICON_FLAG_ER = 'flag-er';
    const ICON_FLAG_ET = 'flag-et';
    const ICON_FLAG_GA = 'flag-ga';
    const ICON_FLAG_GM = 'flag-gm';
    const ICON_FLAG_GH = 'flag-gh';
    const ICON_FLAG_GN = 'flag-gn';
    const ICON_FLAG_GW = 'flag-gw';
    const ICON_FLAG_KE = 'flag-ke';
    const ICON_FLAG_LS = 'flag-ls';
    const ICON_FLAG_LR = 'flag-lr';
    const ICON_FLAG_LY = 'flag-ly';
    const ICON_FLAG_MG = 'flag-mg';
    const ICON_FLAG_MW = 'flag-mw';
    const ICON_FLAG_ML = 'flag-ml';
    const ICON_FLAG_MR = 'flag-mr';
    const ICON_FLAG_MU = 'flag-mu';
    const ICON_FLAG_YT = 'flag-yt';
    const ICON_FLAG_MA = 'flag-ma';
    const ICON_FLAG_MZ = 'flag-mz';
    const ICON_FLAG_NA = 'flag-na';
    const ICON_FLAG_NE = 'flag-ne';
    const ICON_FLAG_NG = 'flag-ng';
    const ICON_FLAG_RW = 'flag-rw';
    const ICON_FLAG_RE = 'flag-re';
    const ICON_FLAG_SH = 'flag-sh';
    const ICON_FLAG_ST = 'flag-st';
    const ICON_FLAG_SN = 'flag-sn';
    const ICON_FLAG_SC = 'flag-sc';
    const ICON_FLAG_SL = 'flag-sl';
    const ICON_FLAG_SO = 'flag-so';
    const ICON_FLAG_ZA = 'flag-za';
    const ICON_FLAG_SS = 'flag-ss';
    const ICON_FLAG_SD = 'flag-sd';
    const ICON_FLAG_SZ = 'flag-sz';
    const ICON_FLAG_TZ = 'flag-tz';
    const ICON_FLAG_TG = 'flag-tg';
    const ICON_FLAG_TN = 'flag-tn';
    const ICON_FLAG_UG = 'flag-ug';
    const ICON_FLAG_EH = 'flag-eh';
    const ICON_FLAG_ZM = 'flag-zm';
    const ICON_FLAG_ZW = 'flag-zw';
    const ICON_FLAG_AI = 'flag-ai';
    const ICON_FLAG_AG = 'flag-ag';
    const ICON_FLAG_AR = 'flag-ar';
    const ICON_FLAG_AW = 'flag-aw';
    const ICON_FLAG_BS = 'flag-bs';
    const ICON_FLAG_BB = 'flag-bb';
    const ICON_FLAG_BZ = 'flag-bz';
    const ICON_FLAG_BM = 'flag-bm';
    const ICON_FLAG_BO = 'flag-bo';
    const ICON_FLAG_BR = 'flag-br';
    const ICON_FLAG_CA = 'flag-ca';
    const ICON_FLAG_KY = 'flag-ky';
    const ICON_FLAG_CL = 'flag-cl';
    const ICON_FLAG_CO = 'flag-co';
    const ICON_FLAG_CR = 'flag-cr';
    const ICON_FLAG_CU = 'flag-cu';
    const ICON_FLAG_CW = 'flag-cw';
    const ICON_FLAG_DM = 'flag-dm';
    const ICON_FLAG_DO = 'flag-do';
    const ICON_FLAG_EC = 'flag-ec';
    const ICON_FLAG_SV = 'flag-sv';
    const ICON_FLAG_FK = 'flag-fk';
    const ICON_FLAG_GF = 'flag-gf';
    const ICON_FLAG_GL = 'flag-gl';
    const ICON_FLAG_GD = 'flag-gd';
    const ICON_FLAG_GP = 'flag-gp';
    const ICON_FLAG_GT = 'flag-gt';
    const ICON_FLAG_GY = 'flag-gy';
    const ICON_FLAG_HT = 'flag-ht';
    const ICON_FLAG_HN = 'flag-hn';
    const ICON_FLAG_JM = 'flag-jm';
    const ICON_FLAG_MQ = 'flag-mq';
    const ICON_FLAG_MX = 'flag-mx';
    const ICON_FLAG_MS = 'flag-ms';
    const ICON_FLAG_AN = 'flag-an';
    const ICON_FLAG_NI = 'flag-ni';
    const ICON_FLAG_PA = 'flag-pa';
    const ICON_FLAG_PY = 'flag-py';
    const ICON_FLAG_PE = 'flag-pe';
    const ICON_FLAG_PR = 'flag-pr';
    const ICON_FLAG_KN = 'flag-kn';
    const ICON_FLAG_LC = 'flag-lc';
    const ICON_FLAG_PM = 'flag-pm';
    const ICON_FLAG_VC = 'flag-vc';
    const ICON_FLAG_SX = 'flag-sx';
    const ICON_FLAG_SR = 'flag-sr';
    const ICON_FLAG_TT = 'flag-tt';
    const ICON_FLAG_TC = 'flag-tc';
    const ICON_FLAG_US = 'flag-us';
    const ICON_FLAG_UY = 'flag-uy';
    const ICON_FLAG_VE = 'flag-ve';
    const ICON_FLAG_VG = 'flag-vg';
    const ICON_FLAG_VI = 'flag-vi';
    const ICON_FLAG_AF = 'flag-af';
    const ICON_FLAG_AM = 'flag-am';
    const ICON_FLAG_AZ = 'flag-az';
    const ICON_FLAG_BH = 'flag-bh';
    const ICON_FLAG_BD = 'flag-bd';
    const ICON_FLAG_BT = 'flag-bt';
    const ICON_FLAG_BN = 'flag-bn';
    const ICON_FLAG_KH = 'flag-kh';
    const ICON_FLAG_CN = 'flag-cn';
    const ICON_FLAG_CY = 'flag-cy';
    const ICON_FLAG_GE = 'flag-ge';
    const ICON_FLAG_HK = 'flag-hk';
    const ICON_FLAG_IN = 'flag-in';
    const ICON_FLAG_ID = 'flag-id';
    const ICON_FLAG_IR = 'flag-ir';
    const ICON_FLAG_IQ = 'flag-iq';
    const ICON_FLAG_IL = 'flag-il';
    const ICON_FLAG_JP = 'flag-jp';
    const ICON_FLAG_JO = 'flag-jo';
    const ICON_FLAG_KZ = 'flag-kz';
    const ICON_FLAG_KP = 'flag-kp';
    const ICON_FLAG_KR = 'flag-kr';
    const ICON_FLAG_KW = 'flag-kw';
    const ICON_FLAG_KG = 'flag-kg';
    const ICON_FLAG_LA = 'flag-la';
    const ICON_FLAG_LB = 'flag-lb';
    const ICON_FLAG_MO = 'flag-mo';
    const ICON_FLAG_MY = 'flag-my';
    const ICON_FLAG_MV = 'flag-mv';
    const ICON_FLAG_MN = 'flag-mn';
    const ICON_FLAG_MM = 'flag-mm';
    const ICON_FLAG_NP = 'flag-np';
    const ICON_FLAG_OM = 'flag-om';
    const ICON_FLAG_PK = 'flag-pk';
    const ICON_FLAG_PS = 'flag-ps';
    const ICON_FLAG_PH = 'flag-ph';
    const ICON_FLAG_QA = 'flag-qa';
    const ICON_FLAG_SA = 'flag-sa';
    const ICON_FLAG_SG = 'flag-sg';
    const ICON_FLAG_LK = 'flag-lk';
    const ICON_FLAG_SY = 'flag-sy';
    const ICON_FLAG_TW = 'flag-tw';
    const ICON_FLAG_TJ = 'flag-tj';
    const ICON_FLAG_TH = 'flag-th';
    const ICON_FLAG_TL = 'flag-tl';
    const ICON_FLAG_TR = 'flag-tr';
    const ICON_FLAG_TM = 'flag-tm';
    const ICON_FLAG_AE = 'flag-ae';
    const ICON_FLAG_UZ = 'flag-uz';
    const ICON_FLAG_VN = 'flag-vn';
    const ICON_FLAG_YE = 'flag-ye';
    const ICON_FLAG_AS = 'flag-as';
    const ICON_FLAG_AU = 'flag-au';
    const ICON_FLAG_CK = 'flag-ck';
    const ICON_FLAG_FJ = 'flag-fj';
    const ICON_FLAG_PF = 'flag-pf';
    const ICON_FLAG_GU = 'flag-gu';
    const ICON_FLAG_KI = 'flag-ki';
    const ICON_FLAG_MH = 'flag-mh';
    const ICON_FLAG_FM = 'flag-fm';
    const ICON_FLAG_NR = 'flag-nr';
    const ICON_FLAG_NC = 'flag-nc';
    const ICON_FLAG_NZ = 'flag-nz';
    const ICON_FLAG_NU = 'flag-nu';
    const ICON_FLAG_NF = 'flag-nf';
    const ICON_FLAG_MP = 'flag-mp';
    const ICON_FLAG_PW = 'flag-pw';
    const ICON_FLAG_PG = 'flag-pg';
    const ICON_FLAG_PN = 'flag-pn';
    const ICON_FLAG_WS = 'flag-ws';
    const ICON_FLAG_SB = 'flag-sb';
    const ICON_FLAG_TK = 'flag-tk';
    const ICON_FLAG_TO = 'flag-to';
    const ICON_FLAG_TV = 'flag-tv';
    const ICON_FLAG_VU = 'flag-vu';
    const ICON_FLAG_WF = 'flag-wf';
    const ICON_FLAG_AL = 'flag-al';
    const ICON_FLAG_AD = 'flag-ad';
    const ICON_FLAG_AT = 'flag-at';
    const ICON_FLAG_BY = 'flag-by';
    const ICON_FLAG_BE = 'flag-be';
    const ICON_FLAG_BA = 'flag-ba';
    const ICON_FLAG_BG = 'flag-bg';
    const ICON_FLAG_HR = 'flag-hr';
    const ICON_FLAG_CZ = 'flag-cz';
    const ICON_FLAG_DK = 'flag-dk';
    const ICON_FLAG_EE = 'flag-ee';
    const ICON_FLAG_FO = 'flag-fo';
    const ICON_FLAG_FI = 'flag-fi';
    const ICON_FLAG_FR = 'flag-fr';
    const ICON_FLAG_DE = 'flag-de';
    const ICON_FLAG_GI = 'flag-gi';
    const ICON_FLAG_GR = 'flag-gr';
    const ICON_FLAG_VA = 'flag-va';
    const ICON_FLAG_HU = 'flag-hu';
    const ICON_FLAG_IS = 'flag-is';
    const ICON_FLAG_IE = 'flag-ie';
    const ICON_FLAG_IT = 'flag-it';
    const ICON_FLAG_LV = 'flag-lv';
    const ICON_FLAG_LI = 'flag-li';
    const ICON_FLAG_LT = 'flag-lt';
    const ICON_FLAG_LU = 'flag-lu';
    const ICON_FLAG_MK = 'flag-mk';
    const ICON_FLAG_MT = 'flag-mt';
    const ICON_FLAG_MD = 'flag-md';
    const ICON_FLAG_MC = 'flag-mc';
    const ICON_FLAG_ME = 'flag-me';
    const ICON_FLAG_NL = 'flag-nl';
    const ICON_FLAG_NO = 'flag-no';
    const ICON_FLAG_PL = 'flag-pl';
    const ICON_FLAG_PT = 'flag-pt';
    const ICON_FLAG_RO = 'flag-ro';
    const ICON_FLAG_RU = 'flag-ru';
    const ICON_FLAG_SM = 'flag-sm';
    const ICON_FLAG_RS = 'flag-rs';
    const ICON_FLAG_SK = 'flag-sk';
    const ICON_FLAG_SI = 'flag-si';
    const ICON_FLAG_ES = 'flag-es';
    const ICON_FLAG_SE = 'flag-se';
    const ICON_FLAG_CH = 'flag-ch';
    const ICON_FLAG_UA = 'flag-ua';
    const ICON_FLAG_GB = 'flag-gb';
    const ICON_FLAG_BV = 'flag-bv';
    const ICON_FLAG_IO = 'flag-io';
    const ICON_FLAG_IC = 'flag-ic';
    const ICON_FLAG_CATALONIA = 'flag-catalonia';
    const ICON_FLAG_ENGLAND = 'flag-england';
    const ICON_FLAG_EU = 'flag-eu';
    const ICON_FLAG_TF = 'flag-tf';
    const ICON_FLAG_GG = 'flag-gg';
    const ICON_FLAG_HM = 'flag-hm';
    const ICON_FLAG_IM = 'flag-im';
    const ICON_FLAG_JE = 'flag-je';
    const ICON_FLAG_KURDISTAN = 'flag-kurdistan';
    const ICON_FLAG_SCOTLAND = 'flag-scotland';
    const ICON_FLAG_SOMALILAND = 'flag-somaliland';
    const ICON_FLAG_GS = 'flag-gs';
    const ICON_FLAG_UM = 'flag-um';
    const ICON_FLAG_WALES = 'flag-wales';
    const ICON_FLAG_ZANZIBAR = 'flag-zanzibar';

    /**
     * Rotate values
     */
    const ROTATE_90 = 'fa-rotate-90';
    const ROTATE_180 = 'fa-rotate-180';
    const ROTATE_270 = 'fa-rotate-270';

    /**
     * Flip values
     */
    const FLIP_HORIZONTAL = 'fa-flip-horizontal';
    const FLIP_VERTICAL = 'fa-flip-vertical';

    /**
     * Icon position values
     */
    const ICON_APPEND = 'icon-append';
    const ICON_PREPEND = 'icon-prepend';

    /**
     * Size input values
     */
    const INPUT_XS = 'input-xs';
    const INPUT_SM = 'input-sm';
    const INPUT_LG = 'input-lg';

    /**
     * Tooltip position values
     */
    const TOOLTIP_RIGHT = 'tooltip-right';
    const TOOLTIP_LEFT = 'tooltip-left';
    const TOOLTIP_TOP_RIGHT = 'tooltip-top-right';
    const TOOLTIP_TOP_LEFT = 'tooltip-top-left';
    const TOOLTIP_BOTTOM_RIGHT = 'tooltip-bottom-right';
    const TOOLTIP_BOTTOM_LEFT = 'tooltip-bottom-left';

    /**
     * Bg colors
     */
    const BG_COLOR_BLUE = 'bg-color-blue';
    const BG_COLOR_BLUELIGHT = 'bg-color-blueLight';
    const BG_COLOR_BLUEDARK = 'bg-color-blueDark';
    const BG_COLOR_GREEN = 'bg-color-green';
    const BG_COLOR_GREENLIGHT = 'bg-color-greenLight';
    const BG_COLOR_GREENDARK = 'bg-color-greenDark';
    const BG_COLOR_RED = 'bg-color-red';
    const BG_COLOR_YELLOW = 'bg-color-yellow';
    const BG_COLOR_ORANGE = 'bg-color-orange';
    const BG_COLOR_ORANGEDARK = 'bg-color-orangeDark';
    const BG_COLOR_PINK = 'bg-color-pink';
    const BG_COLOR_PINKDARK = 'bg-color-pinkDark';
    const BG_COLOR_PURPLE = 'bg-color-purple';
    const BG_COLOR_DARKEN = 'bg-color-darken';
    const BG_COLOR_LIGHTEN = 'bg-color-lighten';
    const BG_COLOR_WHITE = 'bg-color-white';
    const BG_COLOR_GRAYDARK = 'bg-color-grayDark';
    const BG_COLOR_MAGENTA = 'bg-color-magenta';
    const BG_COLOR_TEAL = 'bg-color-teal';
    const BG_COLOR_REDLIGHT = 'bg-color-redLight';

    /**
     * Label colors
     */
    const LABEL_DEFAULT = 'label-default';
    const LABEL_PRIMARY = 'label-primary';
    const LABEL_SUCCESS = 'label-success';
    const LABEL_INFO = 'label-info';
    const LABEL_WARNING = 'label-warning';
    const LABEL_DANGER = 'label-danger';
    
    /**
     * Text colors
     */
    const TXT_COLOR_BLUE = 'txt-color-blue';
    const TXT_COLOR_BLUELIGHT = 'txt-color-blueLight';
    const TXT_COLOR_BLUEDARK  = 'txt-color-blueDark';
    const TXT_COLOR_GREEN = 'txt-color-green';
    const TXT_COLOR_GREENLIGHT = 'txt-color-greenLight';
    const TXT_COLOR_GREENDARK = 'txt-color-greenDark';
    const TXT_COLOR_RED = 'txt-color-red';
    const TXT_COLOR_YELLOW = 'txt-color-yellow';
    const TXT_COLOR_ORANGE = 'txt-color-orange';
    const TXT_COLOR_ORANGEDARK = 'txt-color-orangeDark';
    const TXT_COLOR_PINK = 'txt-color-pink';
    const TXT_COLOR_PINKDARK = 'txt-color-pinkDark';
    const TXT_COLOR_PURPLE = 'txt-color-purple';
    const TXT_COLOR_DARKEN = 'txt-color-darken';
    const TXT_COLOR_LIGHTEN = 'txt-color-lighten';
    const TXT_COLOR_WHITE = 'txt-color-white';
    const TXT_COLOR_GRAYDARK = 'txt-color-grayDark';
    const TXT_COLOR_MAGENTA = 'txt-color-magenta';
    const TXT_COLOR_TEAL = 'txt-color-teal';
    const TXT_COLOR_REDLIGHT = 'txt-color-redLight';

    const PULL_RIGHT = 'pull-right';
    const PULL_LEFT = 'pull-left';

    const JARVISWIDGET_COLOR_MAGENTA = 'jarviswidget-color-magenta';
    const JARVISWIDGET_COLOR_PINK = 'jarviswidget-color-pink';
    const JARVISWIDGET_COLOR_PINKDARK = 'jarviswidget-color-pinkDark';
    const JARVISWIDGET_COLOR_YELLOW = 'jarviswidget-color-yellow';
    const JARVISWIDGET_COLOR_ORANGE = 'jarviswidget-color-orange';
    const JARVISWIDGET_COLOR_ORANGEDARK = 'jarviswidget-color-orangeDark';
    const JARVISWIDGET_COLOR_DARKEN = 'jarviswidget-color-darken';
    const JARVISWIDGET_COLOR_PURPLE = 'jarviswidget-color-purple';
    const JARVISWIDGET_COLOR_TEAL = 'jarviswidget-color-teal';
    const JARVISWIDGET_COLOR_BLUEDARK = 'jarviswidget-color-blueDark';
    const JARVISWIDGET_COLOR_BLUE = 'jarviswidget-color-blue';
    const JARVISWIDGET_COLOR_BLUELIGHT = 'jarviswidget-color-blueLight';
    const JARVISWIDGET_COLOR_RED = 'jarviswidget-color-red';
    const JARVISWIDGET_COLOR_REDLIGHT = 'jarviswidget-color-redLight';
    const JARVISWIDGET_COLOR_WHITE = 'jarviswidget-color-white';
    const JARVISWIDGET_COLOR_GREENDARK = 'jarviswidget-color-greenDark';
    const JARVISWIDGET_COLOR_GREEN = 'jarviswidget-color-green';
    const JARVISWIDGET_COLOR_GREENLIGHT = 'jarviswidget-color-greenLight';

    public static function iconName($name)
    {
        $type = ArrayHelper::getValue(explode('-', $name), 0);
        if (empty($type)) {
            return '';
        }

        return $type . ' ' . $name;
    }

    /**
     * Icon
     * @param string $name
     * @param array $options
     * @return string
     */
    public static function icon($name, $options = [])
    {
        static::addCssClass($options, static::iconName($name));

        $size = ArrayHelper::remove($options, 'size');
        if (!empty($size)) {
            static::addCssClass($options, $size);
        }

        $rotate = ArrayHelper::remove($options, 'rotate');
        if (!empty($rotate)) {
            static::addCssClass($options, $rotate);
        }

        $flip = ArrayHelper::remove($options, 'flip');
        if (!empty($flip)) {
            static::addCssClass($options, $flip);
        }

        $inverse = ArrayHelper::remove($options, 'inverse');
        if (!empty($inverse)) {
            static::addCssClass($options, 'fa-inverse');
        }

        $spin = ArrayHelper::remove($options, 'spin');
        if (!empty($spin)) {
            static::addCssClass($options, 'fa-spin');
        }

        $fw = ArrayHelper::remove($options, 'fw');
        if (!empty($fw)) {
            static::addCssClass($options, 'fa-fw');
        }

        $ul = ArrayHelper::remove($options, 'ul');
        if (!empty($ul)) {
            static::addCssClass($options, 'fa-ul');
        }

        $li = ArrayHelper::remove($options, 'li');
        if (!empty($li)) {
            static::addCssClass($options, 'fa-li');
        }

        $border = ArrayHelper::remove($options, 'border');
        if (!empty($border)) {
            static::addCssClass($options, 'fa-border');
        }

        return Html::tag(ArrayHelper::remove($options, 'tag', 'i'), ArrayHelper::remove($options, 'body'), $options);
    }

    /**
     * Badge
     * @param string $content
     * @param array $options
     * @return string
     */
    public static function badge($content, $options = [])
    {
        static::addCssClass($options, 'badge');
        $color = ArrayHelper::remove($options, 'color');
        if (!empty($color)) {
            static::addCssClass($options, $color);
        }

        return static::tag(ArrayHelper::remove($options, 'tag', 'span'), $content, $options);
    }

    /**
     * Label
     * @param string $content
     * @param array $options
     * @return string
     */
    public static function badgeLabel($content, $options = [])
    {
        static::addCssClass($options, 'label');
        $color = ArrayHelper::remove($options, 'color', static::LABEL_DEFAULT);
        static::addCssClass($options, $color);

        return static::tag(ArrayHelper::remove($options, 'tag', 'span'), $content, $options);
    }

    /**
     * See [[activeRadioList()]] for details
     */
    public static function activeRadioListSmart($model, $attribute, $items, $options = [])
    {
        $options['itemOptions']['labelOptions'] = ['class' => 'radio'];
        return static::activeListInput('radioListSmart', $model, $attribute, $items, $options);
    }

    /**
     * See [[activeRadioList()]] for details
     */
    public static function activeRadioListSmartToggles($model, $attribute, $items, $options = [])
    {
        $options['itemOptions']['labelOptions'] = ['class' => 'toggle'];
        return static::activeListInput('radioListSmart', $model, $attribute, $items, $options);
    }

    /**
     * See [[activeCheckboxList()]] for details
     */
    public static function activeCheckboxListSmart($model, $attribute, $items, $options = [])
    {
        $options['itemOptions']['labelOptions'] = ['class' => 'checkbox'];
        return static::activeListInput('checkboxListSmart', $model, $attribute, $items, $options);
    }

    /**
     * See [[activeCheckboxList()]] for details
     */
    public static function activeCheckboxListSmartToggles($model, $attribute, $items, $options = [])
    {
        $options['itemOptions']['labelOptions'] = ['class' => 'toggle'];
        return static::activeListInput('checkboxListSmart', $model, $attribute, $items, $options);
    }

    /**
     * See [[radioList()]] for details
     */
    public static function radioListSmart($name, $selection = null, $items = [], $options = [])
    {
        $encode = !isset($options['encode']) || $options['encode'];
        $formatter = isset($options['item']) ? $options['item'] : null;
        $itemOptions = isset($options['itemOptions']) ? $options['itemOptions'] : [];
        $lines = [];
        $index = 0;
        foreach ($items as $value => $label) {
            $checked = $selection !== null &&
                    (!is_array($selection) && !strcmp($value, $selection) || is_array($selection) && in_array($value, $selection));
            if ($formatter !== null) {
                $lines[] = call_user_func($formatter, $index, $label, $name, $checked, $value);
            }
            else {
                $lines[] = static::radioSmart($name, $checked, array_merge($itemOptions, [
                    'value' => $value,
                    'label' => $encode ? static::encode($label) : $label,
                ]));
            }
            $index++;
        }

        $separator = isset($options['separator']) ? $options['separator'] : "\n";
        if (isset($options['unselect'])) {
            // add a hidden field so that if the list box has no option being selected, it still submits a value
            $hidden = static::hiddenInput($name, $options['unselect']);
        }
        else {
            $hidden = '';
        }

        $tag = isset($options['tag']) ? $options['tag'] : 'div';
        unset($options['tag'], $options['unselect'], $options['encode'], $options['separator'], $options['item'], $options['itemOptions']);

        $columns = (int) ArrayHelper::remove($options, 'columns');
        if ($columns > 0 && $columns < 12) {
            static::addCssClass($options, 'row');
            $col = round(12 / $columns);
            $sep = count($lines) / $columns;
            $i = 0;
            $return = '<div class="col col-' . $col . '">';
            foreach ($lines as $line) {
                if ($i >= $sep) {
                    $return .= '</div><div class="col col-' . $col . '">';
                    $i = 0;
                }
                $i++;
                $return .= $line . $separator;
            }
            $return .= '</div>';
        }
        else {
            $return = implode($separator, $lines);
        }

        return $hidden . static::tag($tag, $return, $options);
    }

    /**
     * See [[radio()]] for details
     */
    public static function radioSmart($name, $checked = false, $options = [])
    {
        $options['checked'] = (boolean) $checked;
        $value = array_key_exists('value', $options) ? $options['value'] : '1';
        if (isset($options['uncheck'])) {
            // add a hidden field so that if the radio button is not selected, it still submits a value
            $hidden = static::hiddenInput($name, $options['uncheck']);
            unset($options['uncheck']);
        }
        else {
            $hidden = '';
        }

        if (isset($options['label'])) {
            $label = $options['label'];
            $labelOptions = isset($options['labelOptions']) ? $options['labelOptions'] : [];
            unset($options['label'], $options['labelOptions']);

            $iconOptions = ArrayHelper::remove($options, 'iconOptions', []);
            $iconTag = ArrayHelper::remove($iconOptions, 'tag', 'i');

            $content = static::label(static::input('radio', $name, $value, $options) . Html::tag($iconTag, null, $iconOptions) . $label, null, $labelOptions);
            return $hidden . $content;
        }
        else {
            return $hidden . static::input('radio', $name, $value, $options);
        }
    }

    /**
     * See [[checkbox()]] for details
     */
    public static function checkboxSmart($name, $checked = false, $options = [])
    {
        $options['checked'] = (boolean) $checked;
        $value = array_key_exists('value', $options) ? $options['value'] : '1';
        if (isset($options['uncheck'])) {
            // add a hidden field so that if the checkbox is not selected, it still submits a value
            $hidden = static::hiddenInput($name, $options['uncheck']);
            unset($options['uncheck']);
        }
        else {
            $hidden = '';
        }
        if (isset($options['label'])) {
            $label = $options['label'];
            $labelOptions = isset($options['labelOptions']) ? $options['labelOptions'] : [];
            unset($options['label'], $options['labelOptions']);

            $iconOptions = ArrayHelper::remove($options, 'iconOptions', []);
            $iconTag = ArrayHelper::remove($iconOptions, 'tag', 'i');

            $content = static::label(static::input('checkbox', $name, $value, $options) . Html::tag($iconTag, null, $iconOptions) . $label, null, $labelOptions);
            return $hidden . $content;
        }
        else {
            return $hidden . static::input('checkbox', $name, $value, $options);
        }
    }

    /**
     * See [[checkboxList()]] for details
     */
    public static function checkboxListSmart($name, $selection = null, $items = [], $options = [])
    {
        if (substr($name, -2) !== '[]') {
            $name .= '[]';
        }

        $formatter = isset($options['item']) ? $options['item'] : null;
        $itemOptions = isset($options['itemOptions']) ? $options['itemOptions'] : [];
        $encode = !isset($options['encode']) || $options['encode'];
        $lines = [];
        $index = 0;
        foreach ($items as $value => $label) {
            $checked = $selection !== null &&
                    (!is_array($selection) && !strcmp($value, $selection) || is_array($selection) && in_array($value, $selection));
            if ($formatter !== null) {
                $lines[] = call_user_func($formatter, $index, $label, $name, $checked, $value);
            }
            else {
                $lines[] = static::checkboxSmart($name, $checked, array_merge($itemOptions, [
                            'value' => $value,
                            'label' => $encode ? static::encode($label) : $label,
                ]));
            }
            $index++;
        }

        if (isset($options['unselect'])) {
            // add a hidden field so that if the list box has no option being selected, it still submits a value
            $name2 = substr($name, -2) === '[]' ? substr($name, 0, -2) : $name;
            $hidden = static::hiddenInput($name2, $options['unselect']);
        }
        else {
            $hidden = '';
        }
        $separator = isset($options['separator']) ? $options['separator'] : "\n";

        $tag = isset($options['tag']) ? $options['tag'] : 'div';
        unset($options['tag'], $options['unselect'], $options['encode'], $options['separator'], $options['item'], $options['itemOptions']);

        $columns = (int) ArrayHelper::remove($options, 'columns');
        if ($columns > 0 && $columns < 12) {
            static::addCssClass($options, 'row');
            $col = round(12 / $columns);
            $sep = count($lines) / $columns;
            $i = 0;
            $return = '<div class="col col-' . $col . '">';
            foreach ($lines as $line) {
                if ($i >= $sep) {
                    $return .= '</div><div class="col col-' . $col . '">';
                    $i = 0;
                }
                $i++;
                $return .= $line . $separator;
            }
            $return .= '</div>';
        }
        else {
            $return = implode($separator, $lines);
        }

        return $hidden . static::tag($tag, $return, $options);
    }

    /**
     * See [[activeCheckbox()]] for details
     */
    public static function activeCheckboxSmart($model, $attribute, $options = [])
    {
        $name = isset($options['name']) ? $options['name'] : static::getInputName($model, $attribute);
        $value = static::getAttributeValue($model, $attribute);

        if (!array_key_exists('value', $options)) {
            $options['value'] = '1';
        }
        if (!array_key_exists('uncheck', $options)) {
            $options['uncheck'] = '0';
        }
        if (!array_key_exists('label', $options)) {
            $options['label'] = static::encode($model->getAttributeLabel(static::getAttributeName($attribute)));
        }

        $checked = "$value" === "{$options['value']}";

        if (!array_key_exists('id', $options)) {
            $options['id'] = static::getInputId($model, $attribute);
        }

        return static::checkboxSmart($name, $checked, $options);
    }
    
    /**
     * See [[activeRadio()]] for details
     */
    public static function activeRadioSmart($model, $attribute, $options = [])
    {
        $name = isset($options['name']) ? $options['name'] : static::getInputName($model, $attribute);
        $value = static::getAttributeValue($model, $attribute);

        if (!array_key_exists('value', $options)) {
            $options['value'] = '1';
        }
        if (!array_key_exists('uncheck', $options)) {
            $options['uncheck'] = '0';
        }
        if (!array_key_exists('label', $options)) {
            $options['label'] = static::encode($model->getAttributeLabel(static::getAttributeName($attribute)));
        }

        $checked = "$value" === "{$options['value']}";

        if (!array_key_exists('id', $options)) {
            $options['id'] = static::getInputId($model, $attribute);
        }

        return static::radioSmart($name, $checked, $options);
    }

    /**
     * Button header
     * @param array $options
     * @return string
     */
    public static function btnHeader($options = [])
    {
        // Icon
        $icon = ArrayHelper::remove($options, 'icon');
        if($icon === null) {
            return '';
        }
        $iconOptions = ArrayHelper::remove($options, 'iconOptions', []);

        // Div
        static::addCssClass($options, 'btn-header');
        $position = ArrayHelper::remove($options, 'position', self::PULL_RIGHT);
        if(in_array($position, [self::PULL_LEFT, self::PULL_RIGHT])) {
            static::addCssClass($options, $position);
        }

        // Link
        $linkOptions = ArrayHelper::remove($options, 'linkOptions', []);
        $url = ArrayHelper::remove($linkOptions, 'href', 'javascript:void(0);');

        return static::tag('div', static::tag('span', static::a(static::icon($icon, $iconOptions), $url, $linkOptions)), $options);
    }

    /**
     * @param string $action
     * @param string $method
     * @param array $options
     * @return string
     */
    public static function beginFormSmart($action = '', $method = 'post', $options = [])
    {
        self::addCssClass($options, 'smart-form');
        return parent::beginForm($action, $method, $options);
    }

    public static function labelSmart($content, $for = null, $options = [])
    {
        self::addCssClass($options, 'label');
        return parent::label($content, $for, $options);
    }
    
    public static function dropDownListSmart($name, $selection = null, $items = [], $options = [])
    {
        return self::tag('label', (parent::dropDownList($name, $selection, $items, $options) . self::tag('i')), ['class' => 'select']);
    }
}
