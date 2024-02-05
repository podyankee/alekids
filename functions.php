<?php
/****************************************************************
 * DO NOT DELETE
 ****************************************************************/
if ( get_stylesheet_directory() == get_template_directory() ) {
	define('ALETHEME_PATH', get_template_directory() . '/aletheme');
	define('ALETHEME_URL', get_template_directory_uri() . '/aletheme');
}  else {
    define('ALETHEME_PATH', get_theme_root() . '/ale/aletheme');
    define('ALETHEME_URL', get_theme_root_uri() . '/ale/aletheme');
}

require_once ALETHEME_PATH . '/init.php';

load_theme_textdomain( 'ale', get_template_directory() . '/lang' );
$locale = get_locale();
$locale_file = get_template_directory() . "/lang/$locale.php";
if ( is_readable($locale_file) )
    require_once($locale_file);

/****************************************************************
 * Parent theme functions should not be edited.
 * 
 * If you want to add custom functions you should use child theme.
 ****************************************************************/