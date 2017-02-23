<?php
/*
    Plugin Name: Custom System Error
    Plugin URI:
    Plugin Update Check URI:
    Plugin Description: Customize system error indication.
    Plugin Version: 1.0.0
    Plugin Date: 2017-02-23
    Plugin Author: 38qa.net
    Plugin Author URI:
    Plugin License: GPLv2
    Plugin Minimum Question2Answer Version: 1.7
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
        header('Location: ../../');
        exit;
}

define('CSE_DIR', __DIR__);
if (!defined('CSE_LANG')) {
    define('CSE_LANG', 'ja');
}
// // language file
// qa_register_plugin_phrases('qa-system-error-lang-*.php', 'cse');
// overrides
qa_register_plugin_overrides('qa-custom-system-error-overrides.php');
// // layer
// qa_register_plugin_layer('qa-system-error-layer.php', 'Custom System Error Layer');

// require_once(ERROR_HANDLER_DIR.'/qa-system-error-function.php');



/*
    Omit PHP closing tag to help avoid accidental output
*/
