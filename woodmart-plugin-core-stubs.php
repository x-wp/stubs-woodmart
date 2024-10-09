<?php

namespace {
    /**
     * WordPress Importer class for managing the import process of a WXR file
     *
     * @package WordPress
     * @subpackage Importer
     */
    /**
     * WordPress importer class.
     */
    class WOODCORE_Import extends \WP_Importer
    {
        var $max_wxr_version = 1.2;
        // max. supported WXR version
        var $id;
        // WXR attachment ID
        // information to import from WXR file
        var $version;
        var $authors = array();
        var $posts = array();
        var $terms = array();
        var $categories = array();
        var $tags = array();
        var $base_url = '';
        // XTemos.
        var $wd_data = array();
        // XTemos.
        // mappings from old information to new
        var $processed_authors = array();
        var $author_mapping = array();
        var $processed_terms = array();
        var $processed_posts = array();
        var $post_orphans = array();
        var $processed_menu_items = array();
        var $menu_item_orphans = array();
        var $missing_menu_items = array();
        var $fetch_attachments = \false;
        var $url_remap = array();
        var $featured_images = array();
        /**
         * Registered callback function for the WordPress Importer
         *
         * Manages the three separate stages of the WXR import process
         */
        function dispatch()
        {
        }
        /**
         * The main controller for the actual import stage.
         *
         * @param string $file Path to the WXR file for importing
         */
        function import($file, $version = \false)
        {
        }
        /**
         * Parses the WXR file and prepares us for the task of processing parsed data
         *
         * @param string $file Path to the WXR file for importing
         */
        function import_start($file)
        {
        }
        /**
         * Performs post-import cleanup of files and the cache
         */
        function import_end()
        {
        }
        /**
         * Handles the WXR upload and initial parsing of the file to prepare for
         * displaying author import options
         *
         * @return bool False if error uploading or invalid file, true otherwise
         */
        function handle_upload()
        {
        }
        /**
         * Retrieve authors from parsed WXR data
         *
         * Uses the provided author information from WXR 1.1 files
         * or extracts info from each post for WXR 1.0 files
         *
         * @param array $import_data Data returned by a WXR parser
         */
        function get_authors_from_import($import_data)
        {
        }
        /**
         * Display pre-import options, author importing/mapping and option to
         * fetch attachments
         */
        function import_options()
        {
        }
        /**
         * Display import options for an individual author. That is, either create
         * a new user based on import info or map to an existing user
         *
         * @param int   $n Index for each author in the form
         * @param array $author Author information, e.g. login, display name, email
         */
        function author_select($n, $author)
        {
        }
        /**
         * Map old author logins to local user IDs based on decisions made
         * in import options form. Can map to an existing user, create a new user
         * or falls back to the current user in case of error with either of the previous
         */
        function get_author_mapping()
        {
        }
        /**
         * Create new categories based on import information
         *
         * Doesn't create a new category if its slug already exists
         */
        function process_categories()
        {
        }
        /**
         * Create new post tags based on import information
         *
         * Doesn't create a tag if its slug already exists
         */
        function process_tags()
        {
        }
        /**
         * Create new terms based on import information
         *
         * Doesn't create a term its slug already exists
         */
        function process_terms()
        {
        }
        /**
         * Add metadata to imported term.
         *
         * @since 0.6.2
         *
         * @param array $term    Term data from WXR import.
         * @param int   $term_id ID of the newly created term.
         */
        protected function process_termmeta($term, $term_id)
        {
        }
        /**
         * Create new posts based on import information
         *
         * Posts marked as having a parent which doesn't exist will become top level items.
         * Doesn't create a new post if: the post type doesn't exist, the given post ID
         * is already noted as imported or a post with the same title and date already exists.
         * Note that new/updated terms, comments and meta are imported for the last of the above.
         */
        function process_posts()
        {
        }
        /**
         * Attempt to create a new menu item from import data
         *
         * Fails for draft, orphaned menu items and those without an associated nav_menu
         * or an invalid nav_menu term. If the post type or term object which the menu item
         * represents doesn't exist then the menu item will not be imported (waits until the
         * end of the import to retry again before discarding).
         *
         * @param array $item Menu item details from WXR file
         */
        function process_menu_item($item)
        {
        }
        /**
         * If fetching attachments is enabled then attempt to create a new attachment
         *
         * @param array  $post Attachment post details from WXR
         * @param string $url URL to fetch attachment from
         * @return int|WP_Error Post ID on success, WP_Error otherwise
         */
        function process_attachment($post, $url)
        {
        }
        /**
         * Attempt to download a remote file attachment
         *
         * @param string $url URL of item to fetch
         * @param array  $post Attachment details
         * @return array|WP_Error Local file location details on success, WP_Error otherwise
         */
        function fetch_remote_file($url, $post)
        {
        }
        /**
         * Attempt to associate posts and menu items with previously missing parents
         *
         * An imported post's parent may not have been imported when it was first created
         * so try again. Similarly for child menu items and menu items which were missing
         * the object (e.g. post) they represent in the menu
         */
        function backfill_parents()
        {
        }
        /**
         * Use stored mapping information to update old attachment URLs
         */
        function backfill_attachment_urls()
        {
        }
        /**
         * Update _thumbnail_id meta to new, imported attachment IDs
         */
        function remap_featured_images()
        {
        }
        /**
         * Parse a WXR file
         *
         * @param string $file Path to WXR file for parsing
         * @return array|WP_Error Information gathered from the WXR file
         */
        function parse($file)
        {
        }
        // Display import page title
        function header()
        {
        }
        // Close div.wrap
        function footer()
        {
        }
        /**
         * Display introductory text and file upload form
         */
        function greet()
        {
        }
        /**
         * Decide if the given meta key maps to information we will want to import
         *
         * @param string $key The meta key to check
         * @return string|bool The key if we do want to import, false if not
         */
        function is_valid_meta_key($key)
        {
        }
        /**
         * Decide whether or not the importer is allowed to create users.
         * Default is true, can be filtered via import_allow_create_users
         *
         * @return bool True if creating users is allowed
         */
        function allow_create_users()
        {
        }
        /**
         * Decide whether or not the importer should attempt to download attachment files.
         * Default is true, can be filtered via import_allow_fetch_attachments. The choice
         * made at the import options screen must also be true, false here hides that checkbox.
         *
         * @return bool True if downloading attachments is allowed
         */
        function allow_fetch_attachments()
        {
        }
        /**
         * Decide what the maximum file size for downloaded attachments is.
         * Default is 0 (unlimited), can be filtered via import_attachment_size_limit
         *
         * @return int Maximum attachment file size to import
         */
        function max_attachment_size()
        {
        }
        /**
         * Added to http_request_timeout filter to force timeout at 60 seconds during import
         *
         * @return int 60
         */
        function bump_request_timeout($val)
        {
        }
        // return the difference in length between two strings
        function cmpr_strlen($a, $b)
        {
        }
        /**
         * Parses filename from a Content-Disposition header value.
         *
         * As per RFC6266:
         *
         *     content-disposition = "Content-Disposition" ":"
         *                            disposition-type *( ";" disposition-parm )
         *
         *     disposition-type    = "inline" | "attachment" | disp-ext-type
         *                         ; case-insensitive
         *     disp-ext-type       = token
         *
         *     disposition-parm    = filename-parm | disp-ext-parm
         *
         *     filename-parm       = "filename" "=" value
         *                         | "filename*" "=" ext-value
         *
         *     disp-ext-parm       = token "=" value
         *                         | ext-token "=" ext-value
         *     ext-token           = <the characters in token, followed by "*">
         *
         * @since 0.7.0
         *
         * @see WP_REST_Attachments_Controller::get_filename_from_disposition()
         *
         * @link http://tools.ietf.org/html/rfc2388
         * @link http://tools.ietf.org/html/rfc6266
         *
         * @param string[] $disposition_header List of Content-Disposition header values.
         * @return string|null Filename if available, or null if not found.
         */
        protected static function get_filename_from_disposition($disposition_header)
        {
        }
        /**
         * Retrieves file extension by mime type.
         *
         * @since 0.7.0
         *
         * @param string $mime_type Mime type to search extension for.
         * @return string|null File extension if available, or null if not found.
         */
        protected static function get_file_extension_by_mime_type($mime_type)
        {
        }
    }
    /**
     * WordPress eXtended RSS file parser implementations
     *
     * @package WordPress
     * @subpackage Importer
     */
    /**
     * WordPress Importer class for managing parsing of WXR files.
     */
    class WOODCORE_WXR_Parser
    {
        function parse($file)
        {
        }
    }
    /**
     * WordPress eXtended RSS file parser implementations
     *
     * @package WordPress
     * @subpackage Importer
     */
    /**
     * WXR Parser that uses regular expressions. Fallback for installs without an XML parser.
     */
    class WOODCORE_WXR_Parser_Regex
    {
        var $authors = array();
        var $posts = array();
        var $categories = array();
        var $tags = array();
        var $terms = array();
        var $base_url = '';
        var $base_blog_url = '';
        function __construct()
        {
        }
        function parse($file)
        {
        }
        function get_tag($string, $tag)
        {
        }
        function process_category($c)
        {
        }
        function process_tag($t)
        {
        }
        function process_term($t)
        {
        }
        function process_meta($string, $tag)
        {
        }
        function process_author($a)
        {
        }
        function process_post($post)
        {
        }
        function _normalize_tag($matches)
        {
        }
        function fopen($filename, $mode = 'r')
        {
        }
        function feof($fp)
        {
        }
        function fgets($fp, $len = 8192)
        {
        }
        function fclose($fp)
        {
        }
    }
    /**
     * WordPress eXtended RSS file parser implementations
     *
     * @package WordPress
     * @subpackage Importer
     */
    /**
     * WXR Parser that makes use of the XML Parser PHP extension.
     */
    class WOODCORE_WXR_Parser_XML
    {
        var $wp_tags = array('wp:post_id', 'wp:post_date', 'wp:post_date_gmt', 'wp:comment_status', 'wp:ping_status', 'wp:attachment_url', 'wp:status', 'wp:post_name', 'wp:post_parent', 'wp:menu_order', 'wp:post_type', 'wp:post_password', 'wp:is_sticky', 'wp:term_id', 'wp:category_nicename', 'wp:category_parent', 'wp:cat_name', 'wp:category_description', 'wp:tag_slug', 'wp:tag_name', 'wp:tag_description', 'wp:term_taxonomy', 'wp:term_parent', 'wp:term_name', 'wp:term_description', 'wp:author_id', 'wp:author_login', 'wp:author_email', 'wp:author_display_name', 'wp:author_first_name', 'wp:author_last_name');
        var $wp_sub_tags = array('wp:comment_id', 'wp:comment_author', 'wp:comment_author_email', 'wp:comment_author_url', 'wp:comment_author_IP', 'wp:comment_date', 'wp:comment_date_gmt', 'wp:comment_content', 'wp:comment_approved', 'wp:comment_type', 'wp:comment_parent', 'wp:comment_user_id');
        function parse($file)
        {
        }
        function tag_open($parse, $tag, $attr)
        {
        }
        function cdata($parser, $cdata)
        {
        }
        function tag_close($parser, $tag)
        {
        }
    }
    /**
     * WordPress eXtended RSS file parser implementations
     *
     * @package WordPress
     * @subpackage Importer
     */
    /**
     * WXR Parser that makes use of the SimpleXML PHP extension.
     */
    class WOODCORE_WXR_Parser_SimpleXML
    {
        function parse($file)
        {
        }
    }
    class WOODMART_Post_Types
    {
        public $domain = 'woodmart_starter';
        protected static $_instance = \null;
        public static function instance()
        {
        }
        public function __clone()
        {
        }
        public function __wakeup()
        {
        }
        public function __construct()
        {
        }
        // **********************************************************************//
        // ! Register Custom Post Type for WoodMart slider
        // **********************************************************************//
        public function slider()
        {
        }
        public function duplicate_slide_action($actions, $post)
        {
        }
        public function duplicate_post_as_draft()
        {
        }
        // **********************************************************************//
        // ! Register Custom Post Type for Size Guide
        // **********************************************************************//
        public function size_guide()
        {
        }
        // **********************************************************************//
        // ! Register Custom Post Type for HTML Blocks
        // **********************************************************************//
        public function register_blocks()
        {
        }
        public function edit_html_blocks_columns($columns)
        {
        }
        public function manage_html_blocks_columns($column, $post_id)
        {
        }
        // **********************************************************************//
        // ! Register Custom Post Type for additional sidebars
        // **********************************************************************//
        public function register_sidebars()
        {
        }
        // **********************************************************************//
        // ! Register Custom Post Type for portfolio
        // **********************************************************************//
        public function register_portfolio()
        {
        }
        public function edit_woodmart_slide_columns($columns)
        {
        }
        public function manage_woodmart_slide_columns($column, $post_id)
        {
        }
        public function edit_portfolio_columns($columns)
        {
        }
        public function manage_portfolio_columns($column, $post_id)
        {
        }
        /**
         * Get the plugin url.
         *
         * @return string
         */
        public function plugin_url()
        {
        }
        /**
         * Get the plugin path.
         *
         * @return string
         */
        public function plugin_path()
        {
        }
    }
    /**
     * ------------------------------------------------------------------------------------------------
     * Products widget shortcode
     * ------------------------------------------------------------------------------------------------
     */
    class WOODMART_ShortcodeProductsWidget
    {
        function __construct()
        {
        }
        public function add_category_order($query_args)
        {
        }
        public function add_product_order($query_args)
        {
        }
        public function woodmart_shortcode_products_widget($atts)
        {
        }
    }
    class WOODMART_Auth
    {
        public function __construct()
        {
        }
        function remove_captcha()
        {
        }
        public function auth()
        {
        }
        public function process_auth_callback()
        {
        }
        public function register_or_login($email, $name = '')
        {
        }
        public function get_current_callback_network()
        {
        }
        public function get_account_url()
        {
        }
        public function return_yes()
        {
        }
    }
}
namespace WOODCORE {
    /**
     * Post types class.
     */
    class Post_Types
    {
        /**
         * Instance.
         *
         * @var null
         */
        public static $instance = null;
        /**
         * Instance.
         *
         * @return Post_Types|null
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Register layout post type.
         */
        public function register_layout()
        {
        }
        /**
         * Register layout post type.
         */
        public function linked_variations()
        {
        }
        /**
         * Register frequently bought together post type.
         */
        public function bought_together()
        {
        }
        /**
         * Register Dynamic Pricing & Discounts post type.
         */
        public function register_discounts()
        {
        }
    }
}
namespace {
    // autoload_real.php @generated by Composer
    class ComposerAutoloaderInit4f3a72bfdbb290a7d8ac4bb49133c0b3
    {
        public static function loadClassLoader($class)
        {
        }
        public static function getLoader()
        {
        }
    }
}
namespace Composer\Autoload {
    class ComposerStaticInit4f3a72bfdbb290a7d8ac4bb49133c0b3
    {
        public static $fallbackDirsPsr0 = array(0 => __DIR__ . '/..' . '/opauth/vkontakte', 1 => __DIR__ . '/..' . '/opauth/facebook', 2 => __DIR__ . '/..' . '/opauth/google');
        public static $classMap = array('Opauth' => __DIR__ . '/..' . '/opauth/opauth/lib/Opauth/Opauth.php', 'OpauthStrategy' => __DIR__ . '/..' . '/opauth/opauth/lib/Opauth/OpauthStrategy.php');
        public static function getInitializer(\Composer\Autoload\ClassLoader $loader)
        {
        }
    }
}
namespace {
    /**
     * Opauth Strategy
     * Individual strategies are to be extended from this class
     *
     * @copyright    Copyright © 2012 U-Zyn Chua (http://uzyn.com)
     * @link         http://opauth.org
     * @package      Opauth.Strategy
     * @license      MIT License
     */
    /**
     * Opauth Strategy
     * Individual strategies are to be extended from this class
     * 
     * @package			Opauth.Strategy
     */
    class OpauthStrategy
    {
        /**
         * Compulsory config keys, listed as unassociative arrays
         * eg. array('app_id', 'app_secret');
         */
        public $expects;
        /**
         * Optional config keys with respective default values, listed as associative arrays
         * eg. array('scope' => 'email');
         */
        public $defaults;
        /**
         * Auth response array, containing results after successful authentication
         */
        public $auth;
        /**
         * Name of strategy
         */
        public $name = \null;
        /**
         * Configurations and settings unique to a particular strategy
         */
        protected $strategy;
        /**
         * Safe env values from Opauth, with critical parameters stripped out
         */
        protected $env;
        /**
         * Constructor
         * 
         * @param array $strategy Strategy-specific configuration
         * @param array $env Safe env values from Opauth, with critical parameters stripped out
         */
        public function __construct($strategy, $env)
        {
        }
        /**
         * Auth request
         * aka Log in or Register
         */
        public function request()
        {
        }
        /**
         * Packs $auth nicely and send to callback_url, ships $auth either via GET, POST or session.
         * Set shipping transport via callback_transport config, default being session.
         */
        public function callback()
        {
        }
        /**
         * Error callback
         * 
         * More info: https://github.com/uzyn/opauth/wiki/Auth-response#wiki-error-response
         * 
         * @param array $error Data on error to be sent back along with the callback
         *   $error = array(
         *     'provider'	// Provider name
         *     'code'		// Error code, can be int (HTTP status) or string (eg. access_denied)
         *     'message'	// User-friendly error message
         *     'raw'		// Actual detail on the error, as returned by the provider
         *   )
         * 
         */
        public function errorCallback($error)
        {
        }
        /**
         * Call an action from a defined strategy
         *
         * @param string $action Action name to call
         * @param string $defaultAction If an action is not defined in a strategy, calls $defaultAction
         */
        public function callAction($action, $defaultAction = 'request')
        {
        }
        /**
         * Ensures that a compulsory value is set, throws an error if it's not set
         * 
         * @param string $key Expected configuration key
         * @param string $not If value is set as $not, trigger E_USER_ERROR
         * @return mixed The loaded value
         */
        protected function expects($key, $not = \null)
        {
        }
        /**
         * Loads a default value into $strategy if the associated key is not found
         * 
         * @param string $key Configuration key to be loaded
         * @param string $default Default value for the configuration key if none is set by the user
         * @return mixed The loaded value
         */
        protected function optional($key, $default = \null)
        {
        }
        /**
         * Security: Sign $auth before redirecting to callback_url
         * 
         * @param string $timestamp ISO 8601 formatted date
         * @return string Resulting signature
         */
        protected function sign($timestamp = \null)
        {
        }
        /**
         * Maps user profile to auth response
         * 
         * @param array $profile User profile obtained from provider
         * @param string $profile_path Path to a $profile property. Use dot(.) to separate levels.
         *        eg. Path to $profile['a']['b']['c'] would be 'a.b.c'
         * @param string $auth_path Path to $this->auth that is to be set.
         */
        protected function mapProfile($profile, $profile_path, $auth_path)
        {
        }
        /**
         * *****************************************************
         * Utilities
         * A collection of static functions for strategy's use
         * *****************************************************
         */
        /**
         * Static hashing function
         * 
         * @param string $input Input string
         * @param string $timestamp ISO 8601 formatted date
         * @param int $iteration Number of hash iterations
         * @param string $salt
         * @return string Resulting hash
         */
        public static function hash($input, $timestamp, $iteration, $salt)
        {
        }
        /**
         * Redirect to $url with HTTP header (Location: )
         * 
         * @param string $url URL to redirect user to
         * @param boolean $exit Whether to call exit() right after redirection
         */
        public static function redirect($url, $exit = \true)
        {
        }
        /**
         * Client-side GET: This function builds the full HTTP URL with parameters and redirects via Location header.
         * 
         * @param string $url Destination URL
         * @param array $data Data
         * @param boolean $exit Whether to call exit() right after redirection
         */
        public static function clientGet($url, $data = array(), $exit = \true)
        {
        }
        /**
         * Generates a simple HTML form with $data initialized and post results via JavaScript
         * 
         * @param string $url URL to be POSTed
         * @param array $data Data to be POSTed
         */
        public static function clientPost($url, $data = array())
        {
        }
        /**
         * Basic server-side HTTP GET request via self::httpRequest(), wrapper of file_get_contents
         * 
         * @param string $url Destination URL
         * @param array $data Data to be submitted via GET
         * @param array $options Additional stream context options, if any
         * @param string $responseHeaders Response headers after HTTP call. Useful for error debugging.
         * @return string Content resulted from request, without headers
         */
        public static function serverGet($url, $data, $options = \null, &$responseHeaders = \null)
        {
        }
        /**
         * Basic server-side HTTP POST request via self::httpRequest(), wrapper of file_get_contents
         * 
         * @param string $url Destination URL
         * @param array $data Data to be POSTed
         * @param array $options Additional stream context options, if any
         * @param string $responseHeaders Response headers after HTTP call. Useful for error debugging.
         * @return string Content resulted from request, without headers
         */
        public static function serverPost($url, $data, $options = array(), &$responseHeaders = \null)
        {
        }
        /**
         * Simple server-side HTTP request with file_get_contents
         * Provides basic HTTP calls.
         * See serverGet() and serverPost() for wrapper functions of httpRequest()
         * 
         * Notes:
         * Reluctant to use any more advanced transport like cURL for the time being to not 
         *     having to set cURL as being a requirement.
         * Strategy is to provide own HTTP transport handler if requiring more advanced support.
         * 
         * @param string $url Full URL to load
         * @param array $options Stream context options (http://php.net/stream-context-create)
         * @param string $responseHeaders Response headers after HTTP call. Useful for error debugging.
         * @return string Content resulted from request, without headers
         */
        public static function httpRequest($url, $options = \null, &$responseHeaders = \null)
        {
        }
        /**
         * Recursively converts object into array
         * Basically get_object_vars, but recursive.
         * 
         * @param mixed $obj Object
         * @return array Array of object properties
         */
        public static function recursiveGetObjectVars($obj)
        {
        }
        /**
         * Recursively converts multidimensional array into POST-friendly single dimensional array
         * 
         * @param array $array Array to be flatten
         * @param string $prefix String to be prefixed to flattened variable name
         * @param array $results Existing array of flattened inputs to be merged upon
         * 
         * @return array A single dimensional array with POST-friendly name
         */
        public static function flattenArray($array, $prefix = \null, $results = array())
        {
        }
        /**
         * Replace defined env values enclosed in {} with values from $dictionary
         * 
         * @param string $value Input string
         * @param array $dictionary Dictionary to lookup values from
         * @return string String substituted with value from dictionary, if applicable
         */
        public static function envReplace($value, $dictionary)
        {
        }
    }
    /**
     * VKontakte strategy for Opauth
     * based on http://vk.com/developers.php?oid=-17680044&p=Authorizing_Sites
     */
    class VKontakteStrategy extends \OpauthStrategy
    {
        /**
         * Compulsory config keys, listed as unassociative arrays
         */
        public $expects = array('app_id', 'app_secret');
        /**
         * Optional config keys with respective default values, listed as associative arrays
         */
        public $defaults = array('redirect_uri' => '{complete_url_to_strategy}int_callback', 'scope' => 'friends');
        /**
         * Auth request
         */
        public function request()
        {
        }
        /**
         * Internal callback to get the code and request que authorization token, after VKontakte's OAuth
         */
        public function int_callback()
        {
        }
    }
    /**
     * Facebook strategy for Opauth
     * based on https://developers.facebook.com/docs/authentication/server-side/
     *
     * More information on Opauth: http://opauth.org
     *
     * @copyright    Copyright © 2012 U-Zyn Chua (http://uzyn.com)
     * @link         http://opauth.org
     * @package      Opauth.FacebookStrategy
     * @license      MIT License
     */
    class FacebookStrategy extends \OpauthStrategy
    {
        /**
         * Compulsory config keys, listed as unassociative arrays
         * eg. array('app_id', 'app_secret');
         */
        public $expects = array('app_id', 'app_secret');
        /**
         * Optional config keys with respective default values, listed as associative arrays
         * eg. array('scope' => 'email');
         */
        public $defaults = array('redirect_uri' => '{complete_url_to_strategy}int_callback');
        /**
         * Auth request
         */
        public function request()
        {
        }
        /**
         * Internal callback, after Facebook's OAuth
         */
        public function int_callback()
        {
        }
    }
    /**
     * Google strategy for Opauth
     * based on https://developers.google.com/accounts/docs/OAuth2
     * 
     * More information on Opauth: http://opauth.org
     * 
     * @copyright    Copyright © 2012 U-Zyn Chua (http://uzyn.com)
     * @link         http://opauth.org
     * @package      Opauth.GoogleStrategy
     * @license      MIT License
     */
    /**
     * Google strategy for Opauth
     * based on https://developers.google.com/accounts/docs/OAuth2
     * 
     * @package			Opauth.Google
     */
    class GoogleStrategy extends \OpauthStrategy
    {
        /**
         * Compulsory config keys, listed as unassociative arrays
         */
        public $expects = array('client_id', 'client_secret');
        /**
         * Optional config keys, without predefining any default values.
         */
        public $optionals = array('redirect_uri', 'scope', 'state', 'access_type', 'approval_prompt');
        /**
         * Optional config keys with respective default values, listed as associative arrays
         * eg. array('scope' => 'email');
         */
        public $defaults = array('redirect_uri' => '{complete_url_to_strategy}oauth2callback', 'scope' => 'https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email');
        /**
         * Auth request
         */
        public function request()
        {
        }
        /**
         * Internal callback, after OAuth
         */
        public function oauth2callback()
        {
        }
    }
    class OAuthException extends \Exception
    {
        // pass
    }
    class OAuthConsumer
    {
        public $key;
        public $secret;
        function __construct($key, $secret, $callback_url = \NULL)
        {
        }
        function __toString()
        {
        }
    }
    class OAuthToken
    {
        // access tokens and request tokens
        public $key;
        public $secret;
        /**
         * key = the token
         * secret = the token secret
         */
        function __construct($key, $secret)
        {
        }
        /**
         * generates the basic string serialization of a token that a server
         * would respond to request_token and access_token calls with
         */
        function to_string()
        {
        }
        function __toString()
        {
        }
    }
    /**
     * A class for implementing a Signature Method
     * See section 9 ("Signing Requests") in the spec
     */
    abstract class OAuthSignatureMethod
    {
        /**
         * Needs to return the name of the Signature Method (ie HMAC-SHA1)
         * @return string
         */
        public abstract function get_name();
        /**
         * Build up the signature
         * NOTE: The output of this function MUST NOT be urlencoded.
         * the encoding is handled in OAuthRequest when the final
         * request is serialized
         * @param OAuthRequest $request
         * @param OAuthConsumer $consumer
         * @param OAuthToken $token
         * @return string
         */
        public abstract function build_signature($request, $consumer, $token);
        /**
         * Verifies that a given signature is correct
         * @param OAuthRequest $request
         * @param OAuthConsumer $consumer
         * @param OAuthToken $token
         * @param string $signature
         * @return bool
         */
        public function check_signature($request, $consumer, $token, $signature)
        {
        }
    }
    /**
     * The HMAC-SHA1 signature method uses the HMAC-SHA1 signature algorithm as defined in [RFC2104]
     * where the Signature Base String is the text and the key is the concatenated values (each first
     * encoded per Parameter Encoding) of the Consumer Secret and Token Secret, separated by an '&'
     * character (ASCII code 38) even if empty.
     *   - Chapter 9.2 ("HMAC-SHA1")
     */
    class OAuthSignatureMethod_HMAC_SHA1 extends \OAuthSignatureMethod
    {
        function get_name()
        {
        }
        public function build_signature($request, $consumer, $token)
        {
        }
    }
    /**
     * The PLAINTEXT method does not provide any security protection and SHOULD only be used
     * over a secure channel such as HTTPS. It does not use the Signature Base String.
     *   - Chapter 9.4 ("PLAINTEXT")
     */
    class OAuthSignatureMethod_PLAINTEXT extends \OAuthSignatureMethod
    {
        public function get_name()
        {
        }
        /**
         * oauth_signature is set to the concatenated encoded values of the Consumer Secret and
         * Token Secret, separated by a '&' character (ASCII code 38), even if either secret is
         * empty. The result MUST be encoded again.
         *   - Chapter 9.4.1 ("Generating Signatures")
         *
         * Please note that the second encoding MUST NOT happen in the SignatureMethod, as
         * OAuthRequest handles this!
         */
        public function build_signature($request, $consumer, $token)
        {
        }
    }
    /**
     * The RSA-SHA1 signature method uses the RSASSA-PKCS1-v1_5 signature algorithm as defined in
     * [RFC3447] section 8.2 (more simply known as PKCS#1), using SHA-1 as the hash function for
     * EMSA-PKCS1-v1_5. It is assumed that the Consumer has provided its RSA public key in a
     * verified way to the Service Provider, in a manner which is beyond the scope of this
     * specification.
     *   - Chapter 9.3 ("RSA-SHA1")
     */
    abstract class OAuthSignatureMethod_RSA_SHA1 extends \OAuthSignatureMethod
    {
        public function get_name()
        {
        }
        // Up to the SP to implement this lookup of keys. Possible ideas are:
        // (1) do a lookup in a table of trusted certs keyed off of consumer
        // (2) fetch via http using a url provided by the requester
        // (3) some sort of specific discovery code based on request
        //
        // Either way should return a string representation of the certificate
        protected abstract function fetch_public_cert(&$request);
        // Up to the SP to implement this lookup of keys. Possible ideas are:
        // (1) do a lookup in a table of trusted certs keyed off of consumer
        //
        // Either way should return a string representation of the certificate
        protected abstract function fetch_private_cert(&$request);
        public function build_signature($request, $consumer, $token)
        {
        }
        public function check_signature($request, $consumer, $token, $signature)
        {
        }
    }
    class OAuthRequest
    {
        // for debug purposes
        public $base_string;
        public static $version = '1.0';
        public static $POST_INPUT = 'php://input';
        function __construct($http_method, $http_url, $parameters = \NULL)
        {
        }
        /**
         * attempt to build up a request from what was passed to the server
         */
        public static function from_request($http_method = \NULL, $http_url = \NULL, $parameters = \NULL)
        {
        }
        /**
         * pretty much a helper function to set up the request
         */
        public static function from_consumer_and_token($consumer, $token, $http_method, $http_url, $parameters = \NULL)
        {
        }
        public function set_parameter($name, $value, $allow_duplicates = \true)
        {
        }
        public function get_parameter($name)
        {
        }
        public function get_parameters()
        {
        }
        public function unset_parameter($name)
        {
        }
        /**
         * The request parameters, sorted and concatenated into a normalized string.
         * @return string
         */
        public function get_signable_parameters()
        {
        }
        /**
         * Returns the base string of this request
         *
         * The base string defined as the method, the url
         * and the parameters (normalized), each urlencoded
         * and the concated with &.
         */
        public function get_signature_base_string()
        {
        }
        /**
         * just uppercases the http method
         */
        public function get_normalized_http_method()
        {
        }
        /**
         * parses the url and rebuilds it to be
         * scheme://host/path
         */
        public function get_normalized_http_url()
        {
        }
        /**
         * builds a url usable for a GET request
         */
        public function to_url()
        {
        }
        /**
         * builds the data one would send in a POST request
         */
        public function to_postdata()
        {
        }
        /**
         * builds the Authorization: header
         */
        public function to_header($realm = \null)
        {
        }
        public function __toString()
        {
        }
        public function sign_request($signature_method, $consumer, $token)
        {
        }
        public function build_signature($signature_method, $consumer, $token)
        {
        }
    }
    class OAuthServer
    {
        protected $timestamp_threshold = 300;
        // in seconds, five minutes
        protected $version = '1.0';
        // hi blaine
        protected $signature_methods = array();
        protected $data_store;
        function __construct($data_store)
        {
        }
        public function add_signature_method($signature_method)
        {
        }
        // high level functions
        /**
         * process a request_token request
         * returns the request token on success
         */
        public function fetch_request_token(&$request)
        {
        }
        /**
         * process an access_token request
         * returns the access token on success
         */
        public function fetch_access_token(&$request)
        {
        }
        /**
         * verify an api call, checks all the parameters
         */
        public function verify_request(&$request)
        {
        }
    }
    class OAuthDataStore
    {
        function lookup_consumer($consumer_key)
        {
        }
        function lookup_token($consumer, $token_type, $token)
        {
        }
        function lookup_nonce($consumer, $token, $nonce, $timestamp)
        {
        }
        function new_request_token($consumer, $callback = \null)
        {
        }
        function new_access_token($token, $consumer, $verifier = \null)
        {
        }
    }
    class OAuthUtil
    {
        public static function urlencode_rfc3986($input)
        {
        }
        // This decode function isn't taking into consideration the above
        // modifications to the encoding process. However, this method doesn't
        // seem to be used anywhere so leaving it as is.
        public static function urldecode_rfc3986($string)
        {
        }
        // Utility function for turning the Authorization: header into
        // parameters, has to do some unescaping
        // Can filter out any non-oauth parameters if needed (default behaviour)
        public static function split_header($header, $only_allow_oauth_parameters = \true)
        {
        }
        // helper to try to sort out headers for people who aren't running apache
        public static function get_headers()
        {
        }
        // This function takes a input like a=b&a=c&d=e and returns the parsed
        // parameters like this
        // array('a' => array('b','c'), 'd' => 'e')
        public static function parse_parameters($input)
        {
        }
        public static function build_http_query($params)
        {
        }
    }
    /**
     * Twitter OAuth class
     */
    class TwitterOAuth
    {
        /* Contains the last HTTP status code returned. */
        public $http_code;
        /* Contains the last API call. */
        public $url;
        /* Set up the API root URL. */
        public $host = "https://api.twitter.com/1.1/";
        /* Set timeout default. */
        public $timeout = 30;
        /* Set connect timeout. */
        public $connecttimeout = 30;
        /* Verify SSL Cert. */
        public $ssl_verifypeer = \FALSE;
        /* Respons format. */
        public $format = 'json';
        /* Decode returned json data. */
        public $decode_json = \TRUE;
        /* Contains the last HTTP headers returned. */
        public $http_info;
        /* Set the useragnet. */
        public $useragent = 'TwitterOAuth v0.2.0-beta2';
        /* Immediately retry the API call if the response was not successful. */
        //public $retry = TRUE;
        /**
         * Set API URLS
         */
        function accessTokenURL()
        {
        }
        function authenticateURL()
        {
        }
        function authorizeURL()
        {
        }
        function requestTokenURL()
        {
        }
        /**
         * Debug helpers
         */
        function lastStatusCode()
        {
        }
        function lastAPICall()
        {
        }
        /**
         * construct TwitterOAuth object
         */
        function __construct($consumer_key, $consumer_secret, $oauth_token = \NULL, $oauth_token_secret = \NULL)
        {
        }
        /**
         * Get a request_token from Twitter
         *
         * @returns a key/value array containing oauth_token and oauth_token_secret
         */
        function getRequestToken($oauth_callback)
        {
        }
        /**
         * Get the authorize URL
         *
         * @returns a string
         */
        function getAuthorizeURL($token, $sign_in_with_twitter = \TRUE)
        {
        }
        /**
         * Exchange request token and secret for an access token and
         * secret, to sign API calls.
         *
         * @returns array("oauth_token" => "the-access-token",
         *                "oauth_token_secret" => "the-access-secret",
         *                "user_id" => "9436992",
         *                "screen_name" => "abraham")
         */
        function getAccessToken($oauth_verifier)
        {
        }
        /**
         * One time exchange of username and password for access token and secret.
         *
         * @returns array("oauth_token" => "the-access-token",
         *                "oauth_token_secret" => "the-access-secret",
         *                "user_id" => "9436992",
         *                "screen_name" => "abraham",
         *                "x_auth_expires" => "0")
         */
        function getXAuthToken($username, $password)
        {
        }
        /**
         * GET wrapper for oAuthRequest.
         */
        function get($url, $parameters = array())
        {
        }
        /**
         * POST wrapper for oAuthRequest.
         */
        function post($url, $parameters = array())
        {
        }
        /**
         * DELETE wrapper for oAuthReqeust.
         */
        function delete($url, $parameters = array())
        {
        }
        /**
         * Format and sign an OAuth / API request
         */
        function oAuthRequest($url, $method, $parameters)
        {
        }
        /**
         * Make an HTTP request
         *
         * @return API results
         */
        function http($url, $method, $postfields = \NULL)
        {
        }
        /**
         * Get the header info to store.
         */
        function getHeader($ch, $header)
        {
        }
    }
    /**
     * Opauth
     * Multi-provider authentication framework for PHP
     *
     * @copyright    Copyright © 2012 U-Zyn Chua (http://uzyn.com)
     * @link         http://opauth.org
     * @package      Opauth
     * @license      MIT License
     */
    /**
     * Opauth
     * Multi-provider authentication framework for PHP
     * 
     * @package			Opauth
     */
    class Opauth
    {
        /**
         * User configurable settings
         * Refer to example/opauth.conf.php.default or example/opauth.conf.php.advanced for sample
         * More info: https://github.com/uzyn/opauth/wiki/Opauth-configuration
         */
        public $config;
        /**
         * Environment variables
         */
        public $env;
        /** 
         * Strategy map: for mapping URL-friendly name to Class name
         */
        public $strategyMap;
        /**
         * Constructor
         * Loads user configuration and strategies.
         * 
         * @param array $config User configuration
         * @param boolean $run Whether Opauth should auto run after initialization.
         */
        public function __construct($config = array(), $run = \true)
        {
        }
        /**
         * Run Opauth:
         * Parses request URI and perform defined authentication actions based based on it.
         */
        public function run()
        {
        }
        /**
         * Validate $auth response
         * Accepts either function call or HTTP-based call
         * 
         * @param string $input = sha1(print_r($auth, true))
         * @param string $timestamp = $_REQUEST['timestamp'])
         * @param string $signature = $_REQUEST['signature']
         * @param string $reason Sets reason for failure if validation fails
         * @return boolean true: valid; false: not valid.
         */
        public function validate($input = \null, $timestamp = \null, $signature = \null, &$reason = \null)
        {
        }
        /**
         * Callback: prints out $auth values, and acts as a guide on Opauth security
         * Application should redirect callback URL to application-side.
         * Refer to example/callback.php on how to handle auth callback.
         */
        public function callback()
        {
        }
        /**
         * Prints out variable with <pre> tags
         * Silence if Opauth is not in debug mode
         * 
         * @param mixed $var Object or variable to be printed
         */
        public function debug($var)
        {
        }
    }
    /**
     * OpauthTest class
     */
    class OpauthTest extends \PHPUnit_Framework_TestCase
    {
        protected function setUp()
        {
        }
        public function testConstructor()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Error_Notice
         */
        public function testConstructorDefaultSecuritySalt()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Error_Notice
         */
        public function testConstructorAutoRunWithoutStrategies()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Error_Notice
         */
        public function testRunWithoutRequest()
        {
        }
        public function testRun()
        {
        }
        public function testRunNonExistingRequest()
        {
        }
        public function testRunSpecificRequest()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Error
         */
        public function testRunNonExistingStrategy()
        {
        }
        public function testRunExplicitRequestAsConfig()
        {
        }
        public function testValidate()
        {
        }
        /**
         * @depends testValidate
         */
        public function testValidateTimeout(array $response)
        {
        }
        /**
         * @depends testValidate
         */
        public function testValidateInvalidSignature(array $response)
        {
        }
        public function testLoadStrategies()
        {
        }
        public function testLoadStrategiesAsString()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Error
         */
        public function testLoadStrategiesError()
        {
        }
        public function testDebugWithDebugOn()
        {
        }
        public function testDebugWithDebugOff()
        {
        }
        /**
         * Make an Opauth config with basic parameters suitable for testing,
         * especially those that are related to HTTP
         * 
         * @param array $config Config changes to be merged with the default
         * @return array Merged config
         */
        protected static function configForTest($config = array())
        {
        }
        /**
         * Instantiate Opauth with test config suitable for testing
         * 
         * @param array $config Config changes to be merged with the default
         * @param boolean $autoRun Should Opauth be run right after instantiation, defaulted to false
         * @return object Opauth instance
         */
        protected static function instantiateOpauthForTesting($config = array(), $autoRun = \false)
        {
        }
    }
    /**
     * Sample strategy for Opauth unit testing
     * 
     * More information on Opauth: http://opauth.org
     * 
     * @copyright    Copyright © 2012 U-Zyn Chua (http://uzyn.com)
     * @link         http://opauth.org
     * @package      Opauth.OpauthTest.SampleStrategy
     * @license      MIT License
     */
    class SampleStrategy extends \OpauthStrategy
    {
        /**
         * Compulsory config keys, listed as unassociative arrays
         * eg. array('app_id', 'app_secret');
         */
        public $expects = array('sample_id', 'sample_secret');
        /**
         * Optional config keys, without predefining any default values.
         */
        public $optionals = array('redirect_uri', 'scope', 'state', 'access_type', 'approval_prompt');
        /**
         * Optional config keys with respective default values, listed as associative arrays
         * eg. array('scope' => 'email');
         */
        public $defaults = array('redirect_uri' => '{complete_url_to_strategy}int_callback', 'scope' => 'test_scope');
        /**
         * Auth request
         */
        public function request()
        {
        }
        /**
         * An arbritary function
         */
        public function arbritary()
        {
        }
        /**
         * Successful auth, returns a normal auth response
         */
        public function success()
        {
        }
    }
    /**
     * OpauthTest class
     */
    class OpauthStrategyTest extends \OpauthTest
    {
        public function testHash()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Error
         */
        public function testExpectsMissingConfig()
        {
        }
        /**
         * @runInSeparateProcess
         */
        public function testRedirect()
        {
        }
        /**
         * @runInSeparateProcess
         */
        public function testClientGet()
        {
        }
        /**
         * Instantiate OpauthStrategy with test config suitable for testing
         * 
         * @param array $config Config changes to be merged with the default
         * @param boolean $autoRun Should Opauth be run right after instantiation, defaulted to false
         * @return object Opauth instance
         */
        protected static function instantiateSampleStrategyForTesting($config = array(), $autoRun = \false)
        {
        }
    }
}
/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Composer\Autoload {
    /**
     * Scope isolated include.
     *
     * Prevents access to $this/self from included files.
     */
    function includeFile($file)
    {
    }
}
namespace {
    \define('WOODMART_CORE_PLUGIN_VERSION', '1.0.40');
    /**
     * Adds slashes to only string values in an array of values.
     *
     * Compat for WordPress < 5.3.0.
     *
     * @since 0.7.0
     *
     * @param mixed $value Scalar or array of scalars.
     * @return mixed Slashes $value
     */
    function wp_slash_strings_only($value)
    {
    }
    /**
     * Adds slashes only if the provided value is a string.
     *
     * Compat for WordPress < 5.3.0.
     *
     * @since 0.7.0
     *
     * @param mixed $value
     * @return mixed
     */
    function addslashes_strings_only($value)
    {
    }
    /**
     * Maps a function to all non-iterable elements of an array or an object.
     *
     * Compat for WordPress < 4.4.0.
     *
     * @since 0.7.0
     *
     * @param mixed    $value    The array, object, or scalar.
     * @param callable $callback The function to map onto $value.
     * @return mixed The value with the callback applied to all non-arrays and non-objects inside it.
     */
    function map_deep($value, $callback)
    {
    }
    function WOODMART_Theme_Plugin()
    {
    }
    function woodmart_compress($variable)
    {
    }
    function woodmart_get_file($variable)
    {
    }
    function woodmart_decompress($variable)
    {
    }
    function woodmart_get_svg($file)
    {
    }
    function getallheaders()
    {
    }
    function woodmart_add_shortcodes()
    {
    }
    function woodmart_product_360_view_meta()
    {
    }
    function woodmart_sguide_add_metaboxes()
    {
    }
    function woodmart_widgets_init()
    {
    }
    /**
     * Social network authentication
     */
    \define('WOODMART_PT_3D', \plugin_dir_path(__DIR__));
    /**
     * Callback for Opauth
     * 
     * This file (callback.php) provides an example on how to properly receive auth response of Opauth.
     * 
     * Basic steps:
     * 1. Fetch auth response based on callback transport parameter in config.
     * 2. Validate auth response
     * 3. Once auth response is validated, your PHP app should then work on the auth response 
     *    (eg. registers or logs user in to your site, save auth data onto database, etc.)
     * 
     */
    /**
     * Define paths
     */
    \define('CONF_FILE', \dirname(__FILE__) . '/' . 'opauth.conf.php');
    \define('OPAUTH_LIB_DIR', \dirname(\dirname(__FILE__)) . '/lib/Opauth/');
    /**
    * Fetch auth response, based on transport configuration for callback
    */
    $response = \null;
}