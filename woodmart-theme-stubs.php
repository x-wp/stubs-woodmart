<?php

namespace {
    /**
     * Class fix for compatibility with WPB addons plugins.
     */
    class WD_WPBakeryShortCodeFix
    {
        /**
         * Settings.
         *
         * @return null
         */
        public function settings()
        {
        }
    }
    /**
     * Dynamic css class
     *
     * @since 1.0.0
     */
    class WOODMART_Themesettingscss
    {
        public $storage;
        /**
         * Set up all properties
         */
        public function __construct()
        {
        }
        /**
         * Set storage.
         *
         * @since 1.0.0
         */
        public function set_storage()
        {
        }
        /**
         * Write file.
         *
         * @since 1.0.0
         */
        public function reset_data()
        {
        }
        /**
         * Write file.
         *
         * @since 1.0.0
         */
        public function write_file()
        {
        }
        public function print_styles_inline()
        {
        }
        /**
         * Print styles.
         *
         * @since 1.0.0
         */
        public function print_styles($inline = \false)
        {
        }
        /**
         * Get custom css.
         *
         * @since 1.0.0
         *
         * @return string
         */
        public function get_custom_css()
        {
        }
        /**
         * Get custom fonts css.
         *
         * @since 1.0.0
         *
         * @return string
         */
        public function get_custom_fonts_css()
        {
        }
        /**
         * Icons font css.
         *
         * @since 1.0.0
         *
         * @return string
         */
        public function get_icons_font_css()
        {
        }
        /**
         * Get custom font url.
         *
         * @since 1.0.0
         *
         * @param array $font Font data.
         *
         * @return string
         */
        public function get_custom_font_url($font)
        {
        }
        /**
         * Get theme settings css.
         *
         * @since 1.0.0
         *
         * @return string
         */
        public function get_theme_settings_css()
        {
        }
    }
    class WOODMART_Theme
    {
        public function __construct()
        {
        }
    }
    /**
     * Communicate with server API (activate, update)
     */
    class WOODMART_Api
    {
        public $token = '';
        public $base_url;
        public $url = '';
        public function __construct()
        {
        }
        public function call($endpoint, $data = array(), $method = 'get', $base_url = '')
        {
        }
        public function get_headers()
        {
        }
        public function get_url($endpoint, $args = array(), $base_url = '')
        {
        }
        public function add_url_param($key, $value)
        {
        }
    }
    /**
     * CSS to file class
     *
     * @since 1.0.0
     */
    class WOODMART_Stylesstorage
    {
        public $data_name;
        public $storage;
        public $id;
        public $current_theme_version;
        public $current_site_url;
        public $data;
        public $css;
        public $css_version;
        public $site_url;
        public $check_credentials;
        public $is_file_exists = \false;
        public $is_css_exists = \false;
        public function __construct($data_name, $storage = 'option', $id = '', $check_credentials = \true)
        {
        }
        /**
         * Set data.
         *
         * @since 1.0.0
         *
         * @param string $data_name Data name.
         */
        public function set_data($data_name)
        {
        }
        /**
         * Set css data.
         *
         * @since 1.0.0
         *
         * @param string $data_name Data name.
         */
        public function set_css_data($data_name)
        {
        }
        /**
         * Set data name.
         *
         * @since 1.0.0
         *
         * @param string $data_name Data name.
         */
        public function set_data_name($data_name)
        {
        }
        /**
         * Check css status.
         *
         * @since 1.0.0
         */
        public function check_css_status()
        {
        }
        public function get_file_path($path)
        {
        }
        public function get_file_url($url)
        {
        }
        /**
         * Is css exists.
         *
         * @since 1.0.0
         */
        public function is_css_exists()
        {
        }
        public function print_styles_inline()
        {
        }
        /**
         * Print styles.
         *
         * @since 1.0.0
         */
        public function print_styles()
        {
        }
        /**
         * FIle css.
         *
         * @since 1.0.0
         */
        public function file_css()
        {
        }
        /**
         * Inline css.
         *
         * @since 1.0.0
         */
        public function inline_css()
        {
        }
        /**
         * Reset data.
         *
         * @since 1.0.0
         */
        public function reset_data()
        {
        }
        /**
         * Write file.
         *
         * @since 1.0.0
         *
         * @param $css
         * @param bool $is_frontend
         */
        public function write($css, $is_frontend = \false)
        {
        }
        /**
         * Delete file.
         */
        public function delete_file()
        {
        }
        /**
         * Get file info.
         *
         * @since 1.0.0
         *
         * @param string $data_name File name.
         *
         * @return string
         */
        public function get_file_info($data_name)
        {
        }
        /**
         * Check credentials.
         *
         * @since 1.0.0
         *
         * @return bool
         */
        public function check_credentials()
        {
        }
    }
    /**
     * Page css files.
     */
    class WOODMART_Pagecssfiles
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Hooks.
         */
        public function hooks()
        {
        }
        /**
         * Set page data.
         */
        public function set_page_data()
        {
        }
        /**
         * Set page data.
         */
        public function set_page_css_files()
        {
        }
        /**
         * Delete all saved meta.
         */
        public function delete_all_meta()
        {
        }
        /**
         * Delete post meta.
         *
         * @param integer $post_id Post id.
         */
        public function delete_post_meta($post_id)
        {
        }
        /**
         * Delete term meta.
         *
         * @param integer $term_id Term id.
         */
        public function delete_term_meta($term_id)
        {
        }
        /**
         * Enqueue page css files.
         */
        public function enqueue_page_css_files()
        {
        }
        /**
         * Enqueue page css files.
         *
         * @param string $key             File slug.
         */
        public function enqueue_style($key, $ignore_combined = \false)
        {
        }
        /**
         * Save page css files.
         */
        public function save_page_css_files()
        {
        }
        /**
         * Enqueue inline style by key.
         *
         * @param string $key             File slug.
         */
        public function enqueue_inline_style($key, $ignore_combined = \false)
        {
        }
    }
}
namespace XTS {
    /**
     * Singleton pattern class.
     *
     * @since 1.0.0
     */
    class Singleton
    {
        /**
         * Get singleton instance.
         *
         * @since 1.0.0
         *
         * @return object Current object instance.
         */
        public static function get_instance()
        {
        }
    }
    /**
     * Static class to manage google fonts.
     *
     * @since 1.0.0
     */
    class Google_Fonts extends \XTS\Singleton
    {
        /**
         * All google fonts array.
         *
         * @var array
         */
        public static $all_google_fonts = array();
        /**
         * Register hooks and load base data.
         *
         * @since 1.0.0
         */
        public function init()
        {
        }
        /**
         * Add google font.
         *
         * @since 1.0.0
         *
         * @param array $font Font name.
         */
        public static function add_google_font($font)
        {
        }
        /**
         * Get fonts from Google based on all fonts selected in the settings.
         *
         * @since 1.0.0
         */
        public function enqueue_fonts()
        {
        }
    }
}
namespace {
    /**
     * Object Registry
     */
    class WOODMART_Registry
    {
        /**
         * Get instance of the object (the singleton method)
         *
         * @return  Registry
         */
        public static function getInstance()
        {
        }
        /**
         * Dynamically load missing object and assign it to the Registry property
         *
         * @param   string $obj Object name (first char will be converted to upper case)
         * @return  object
         */
        function __get($obj)
        {
        }
        /**
         * Prevent users to clone the instance
         */
        public function __clone()
        {
        }
    }
}
namespace XTS {
    /**
     * Config class.
     *
     * @since 1.0.0
     */
    class Config extends \XTS\Singleton
    {
        /**
         * Register hooks and load base data.
         *
         * @since 1.0.0
         */
        public function init()
        {
        }
        /**
         * Get config file.
         *
         * @since 1.0.0
         *
         * @param string $name Config name.
         *
         * @return mixed
         */
        public function get_config($name)
        {
        }
    }
}
namespace {
    class WOODMART_Layout
    {
        /**
         * Add wordpress actions
         * 
         */
        public function __construct()
        {
        }
        /**
         * Set page id
         * 
         */
        public function set_page_id()
        {
        }
        /**
         * Set up all properties
         * 
         */
        public function init()
        {
        }
        /**
         * Get CSS class for the content DIV 
         * 
         * @return string
         */
        public function get_content_class()
        {
        }
        /**
         * Get content column width
         * 
         * @return string
         */
        public function get_content_col_width()
        {
        }
        /**
         * Get CSS class for the sidebar DIV 
         * 
         * @return string
         */
        public function get_sidebar_class()
        {
        }
        /**
         * Set content column width
         * 
         * @return integer
         */
        public function get_sidebar_col_width()
        {
        }
        /**
         * Get page layout (sidebar position)
         * 
         * @return string
         */
        public function get_page_layout()
        {
        }
        /**
         * Check if it is account page
         *
         * @return boolean
         */
        public function is_account_page()
        {
        }
        /**
         * Check if it is some account pages
         *
         * @return boolean
         */
        public function is_account_pages()
        {
        }
        /**
         * Class for page content container
         *
         * @return mixed
         */
        public function get_main_container_class()
        {
        }
        /**
         * Gets the value of page_id.
         *
         * @return mixed
         */
        public function get_page_id()
        {
        }
        /**
         * Gets the value of sidebar_name.
         *
         * @return mixed
         */
        public function get_sidebar_name()
        {
        }
    }
    /**
     * Activate theme and enable auto updates
     */
    class WOODMART_License
    {
        function __construct()
        {
        }
        public function form()
        {
        }
        public function process_form()
        {
        }
        public function domain()
        {
        }
        public function activate($purchase, $token, $dev)
        {
        }
        public function deactivate()
        {
        }
        public function update_transient($value, $transient)
        {
        }
        public function set_update_transient($transient)
        {
        }
        public function api_results($result, $action, $args)
        {
        }
        protected function check_for_update()
        {
        }
        public function api_info()
        {
        }
        public function update_plugins_version($transient)
        {
        }
        public function is_update_available()
        {
        }
        public function download_url()
        {
        }
        public function release_version()
        {
        }
    }
    /**
     * Notices helper class
     */
    class WOODMART_Notices
    {
        public $notices;
        public $ignore_key = '';
        public function __construct()
        {
        }
        public function add_msg($msg, $type, $global = \false)
        {
        }
        public function get_msgs($globals = \false)
        {
        }
        public function clear_msgs($globals = \true)
        {
        }
        public function show_msgs($globals = \false)
        {
        }
        public function add_notice()
        {
        }
        public function add_error($msg, $global = \false)
        {
        }
        public function add_warning($msg, $global = \false)
        {
        }
        public function add_success($msg, $global = \false)
        {
        }
        public function nag_ignore()
        {
        }
    }
    /**
     * Generate css file for wpbakery
     */
    class WOODMART_Wpbcssgenerator
    {
        function __construct()
        {
        }
        public function form()
        {
        }
        public function process_form()
        {
        }
    }
    /**
     * ------------------------------------------------------------------------------------------------
     * WPBakery custom templates library
     * ------------------------------------------------------------------------------------------------
     */
    class WOODMART_Vctemplates
    {
        public $folder = '';
        public function __construct()
        {
        }
        public function library($data)
        {
        }
        public function render_template_code($template_id, $template_type)
        {
        }
        public function render_template_HTML_code($template_id, $template_type)
        {
        }
        public function get_content($shortcodes, $config)
        {
        }
        public function get_template_content($id)
        {
        }
        public function render_template($category)
        {
        }
        public function render_item($template)
        {
        }
        public function render_template_window($template_name, $template_data)
        {
        }
    }
    /**
     * Class to work with Theme Options
     * Will modify global $woodmart_options variable
     */
    class WOODMART_Options
    {
        public function __construct()
        {
        }
        /**
         * Specific options
         */
        public function set_options_for_post()
        {
        }
        /**
         * [set_custom_meta_for_post description]
         */
        public function set_custom_meta_for_post()
        {
        }
        /**
         * Specific options dependencies
         */
        public function specific_options()
        {
        }
        /**
         * Specific options for taxonomies
         */
        public function specific_taxonomy_options()
        {
        }
        /**
         * Get option from array $woodmart_options
         *
         * @param  String option slug
         * @return String option value
         */
        public function get_opt($slug, $default = \false)
        {
        }
    }
    class WOODMART_Custom_Walker_Category extends \Walker_Category
    {
        public function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0)
        {
        }
    }
}
namespace XTS\Modules\Theme_Settings_Backup {
    class Main extends \XTS\Singleton
    {
        /**
         * Register hooks.
         */
        public function init()
        {
        }
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render()
        {
        }
        /**
         * Output HTML codes for item backup.
         *
         * @param  int   $id  ID backup.
         * @param  array $backup  Backup data.
         */
        public function get_item_backup($id, $backup)
        {
        }
        /**
         * Create backup.
         */
        public function create_backup()
        {
        }
        /**
         * Delete backup.
         */
        public function delete_backup()
        {
        }
        /**
         * Download options export.
         *
         * @since 1.0.0
         */
        public function download_backup()
        {
        }
        /**
         * Apply backup.
         */
        public function apply_backup()
        {
        }
        /**
         * Create auto backup.
         */
        public function auto_backup()
        {
        }
    }
}
namespace XTS\Modules\Patcher {
    /**
     * The client class for patch.
     */
    class Client extends \XTS\Singleton
    {
        /**
         * The uri of the patches remote server.
         *
         * @var string
         */
        public $remote_patches_uri = 'https://xtemos.com/wp-json/xts/v1/patches_maps/';
        /**
         * Version site.
         *
         * @var string
         */
        public $theme_version;
        /**
         * Process notices.
         *
         * @var array
         */
        public $notices = array();
        /**
         * Transient name.
         *
         * @var array
         */
        public $transient_name = 'xts_patches_map';
        /**
         * Register hooks and load base data.
         */
        public function init()
        {
        }
        /**
         * Get count patches map.
         *
         * @return string
         */
        public function get_count_patches_map()
        {
        }
        /**
         * Interface in admin panel.
         */
        public function render()
        {
        }
        /**
         * Print notices.
         */
        public function print_notices()
        {
        }
        /**
         * Get patches maps.
         *
         * @return array
         */
        public function get_patches_maps()
        {
        }
        /**
         * Queries the patches server for a list of patches.
         *
         * @return array
         */
        public function get_patches_maps_from_server()
        {
        }
        /**
         * Sets/updates the value of a transient.
         *
         * @param string|array $data Value.
         *
         * @return void
         */
        public function update_set_transient($data)
        {
        }
        /**
         * Check filesystem API.
         *
         * @return bool
         */
        public function check_filesystem_api()
        {
        }
        /**
         * Add localized settings.
         *
         * @return array
         */
        public function add_localized_settings()
        {
        }
    }
    /**
     * The main patcher class.
     */
    class Main extends \XTS\Singleton
    {
        /**
         * Register hooks.
         */
        public function init()
        {
        }
        /**
         * Include files.
         */
        public function include_files()
        {
        }
        /**
         * Patch process.
         */
        public function patch_process()
        {
        }
    }
    /**
     * Patch apply.
     */
    class Patch
    {
        /**
         * Patch ID.
         *
         * @var $patcher_id
         */
        public $patch_id;
        /**
         * Constructor.
         *
         * @param string $patch_id Patch id.
         */
        public function __construct($patch_id)
        {
        }
        /**
         * Apply patch.
         */
        public function apply()
        {
        }
        /**
         * Write file.
         *
         * @param string $file_dir File directory.
         * @param string $content  File content.
         */
        public function write_file($file_dir, $content)
        {
        }
    }
}
namespace XTS\Modules\Layouts {
    abstract class Layout_Type extends \XTS\Singleton
    {
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Check.
         *
         * @param array  $condition Condition.
         * @param string $type      Layout type.
         */
        public function check($condition, $type = '')
        {
        }
        /**
         * Override templates.
         *
         * @param string $template Template.
         */
        public function override_template($template)
        {
        }
        /**
         * Before template content.
         */
        public function before_template_content()
        {
        }
        /**
         * After template content.
         */
        public function after_template_content()
        {
        }
        /**
         * Template content.
         *
         * @param string $type Template type.
         */
        public function template_content($type)
        {
        }
    }
    class Cart extends \XTS\Modules\Layouts\Layout_Type
    {
        /**
         * Before template content.
         */
        public function before_template_content()
        {
        }
        /**
         * After template content.
         */
        public function after_template_content()
        {
        }
        /**
         * Check.
         *
         * @param  array  $condition  Condition.
         * @param  string $type  Layout type.
         */
        public function check($condition, $type = '')
        {
        }
        /**
         * Override templates.
         *
         * @param  string $template  Template.
         *
         * @return bool|string
         */
        public function override_template($template)
        {
        }
    }
    class Shop_Archive extends \XTS\Modules\Layouts\Layout_Type
    {
        /**
         * Check.
         *
         * @param  array  $condition  Condition.
         * @param  string $type  Layout type.
         */
        public function check($condition, $type = '')
        {
        }
        /**
         * Override templates.
         *
         * @param  string $template  Template.
         *
         * @return bool|string
         */
        public function override_template($template)
        {
        }
        /**
         * Before template content.
         */
        public function before_template_content()
        {
        }
        /**
         * Before template content.
         */
        public function after_template_content()
        {
        }
        /**
         * Switch to preview query.
         *
         * @param  array $new_query  New query variables.
         */
        public static function switch_to_preview_query($new_query)
        {
        }
        /**
         * Restore default query.
         *
         * @return void
         */
        public static function restore_current_query()
        {
        }
    }
    class Checkout extends \XTS\Modules\Layouts\Layout_Type
    {
        /**
         * Before template content.
         */
        public function before_template_content()
        {
        }
        /**
         * After template content.
         */
        public function after_template_content()
        {
        }
        /**
         * Check.
         *
         * @param  array  $condition  Condition.
         * @param  string $type  Layout type.
         */
        public function check($condition, $type = '')
        {
        }
        /**
         * Override templates.
         *
         * @param  string $template  Template.
         *
         * @return bool|string
         */
        public function override_template($template)
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Brands extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Rating extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Sold_Counter extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Brand_Information extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Stock_Status extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Additional_Info_Table extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Reviews extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Title extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Content extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Tabs extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Retrieve the list of scripts the counter widget depended on.
         *
         * @return array Widget scripts dependencies.
         */
        public function get_script_depends()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Short_Description extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Price extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Frequently_Bought_Together extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Extra_Content extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Gallery extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Retrieve the list of scripts the counter widget depended on.
         *
         * @return array Widget scripts dependencies.
         */
        public function get_script_depends()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Size_Guide_Button extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Meta_Value extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Navigation extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Countdown extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Wishlist_Button extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Compare_Button extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Add_To_Cart extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Price_Table extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Linked_Variations extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Meta extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Visitor_Counter extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Stock_Progress_Bar extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Cart_Totals extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Retrieve the list of scripts the counter widget depended on.
         *
         * @return array Widget scripts dependencies.
         */
        public function get_script_depends()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Cart_Table extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Retrieve the list of scripts the counter widget depended on.
         *
         * @return array Widget scripts dependencies.
         */
        public function get_script_depends()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Shipping_Progress_Bar extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Notices extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Page_Title extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Checkout_Steps extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Hook extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Breadcrumb extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Shipping_Details_Form extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Retrieve the list of scripts the counter widget depended on.
         *
         * @return array Widget scripts dependencies.
         */
        public function get_script_depends()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Payment_Methods extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Retrieve the list of scripts the counter widget depended on.
         *
         * @return array Widget scripts dependencies.
         */
        public function get_script_depends()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Coupon_Form extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Retrieve the list of scripts the counter widget depended on.
         *
         * @return array Widget scripts dependencies.
         */
        public function get_script_depends()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Billing_Details_Form extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Retrieve the list of scripts the counter widget depended on.
         *
         * @return array Widget scripts dependencies.
         */
        public function get_script_depends()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Order_Review extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Retrieve the list of scripts the counter widget depended on.
         *
         * @return array Widget scripts dependencies.
         */
        public function get_script_depends()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Login_Form extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Retrieve the list of scripts the counter widget depended on.
         *
         * @return array Widget scripts dependencies.
         */
        public function get_script_depends()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Filters_Btn extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Archive_Description extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Active_Filters extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Result_Count extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Per_Page extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Woocommerce_Title extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Orderby extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Archive_Products extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Extra_Description extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class View extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Filters_Area extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Show in panel.
         *
         * @return bool Whether to show the widget in the panel or not.
         */
        public function show_in_panel()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
    class Main extends \XTS\Singleton
    {
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Include classes files.
         */
        public function include_classes_files()
        {
        }
        /**
         * Include files.
         */
        public function include_files()
        {
        }
        /**
         * Register widgets elements for Elementor.
         *
         * @return void
         */
        public function register_layout_widgets()
        {
        }
        /**
         * Add theme widget categories.
         *
         * @param Elements_Manager $elements_manager Elements manager instance.
         */
        public function register_elementor_categories($elements_manager)
        {
        }
        /**
         * Check if the custom template is set.
         *
         * @param  string $type  Template type.
         *
         * @return bool
         */
        public function has_custom_layout($type)
        {
        }
        /**
         * Get custom template ID.
         *
         * @param  string $type  Template type.
         *
         * @return string
         */
        public function get_layout_id($type)
        {
        }
        /**
         * Setup preview.
         *
         * @param array $shop_args  Shop query arguments.
         */
        public static function setup_preview($shop_args = array(), $force_product_id = false)
        {
        }
        /**
         * Restore preview.
         */
        public static function restore_preview($force_product_id = false)
        {
        }
        /**
         * Return true if currently type.
         *
         * @param  string $type  Layout type.
         *
         * @return bool
         */
        public static function is_layout_type($type)
        {
        }
    }
    class Global_Data extends \XTS\Singleton
    {
        /**
         * This method is executed immediately after the instance of the class is created.
         */
        public function init()
        {
        }
        /**
         * This method set data to global array.
         * If key exist return false.
         *
         * @param string $prop  key for global data array.
         * @param string $value value for global data array.
         */
        public function set_data($prop, $value = '')
        {
        }
        /**
         * This method get data by key.
         * If data not exist return false.
         *
         * @param string $prop key for global data array.
         *
         * @return false|mixed
         */
        public function get_data($prop)
        {
        }
    }
    class Single_Product extends \XTS\Modules\Layouts\Layout_Type
    {
        /**
         * Check.
         *
         * @param array  $condition Condition.
         * @param string $type      Layout type.
         */
        public function check($condition, $type = '')
        {
        }
        /**
         * Override template.
         *
         * @param string $template Template.
         *
         * @return bool|string
         */
        public function override_template($template)
        {
        }
        /**
         * Get preview product id.
         *
         * @return int
         */
        public static function get_preview_product_id()
        {
        }
        /**
         * Setup post data.
         */
        public static function setup_postdata($force_product_id = false)
        {
        }
        /**
         * Reset post data.
         */
        public static function reset_postdata($force_product_id = false)
        {
        }
        /**
         * Template content.
         *
         * @param string $type Template type.
         */
        public function template_content($type)
        {
        }
    }
    /**
     * Layout conditions cache class.
     */
    class Conditions_Cache
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Add.
         *
         * @param string $type       Type.
         * @param array  $conditions Conditions.
         * @param int    $post_id    Post id.
         *
         * @return $this
         */
        public function add($type, $conditions, $post_id)
        {
        }
        /**
         * Remove.
         *
         * @param int $post_id Post id.
         *
         * @return $this
         */
        public function remove($post_id)
        {
        }
        /**
         * Save.
         */
        public function save()
        {
        }
        /**
         * Refresh.
         */
        public function refresh()
        {
        }
        /**
         * Clear.
         */
        public function clear()
        {
        }
        /**
         * Get.
         *
         * @param string $type Type.
         *
         * @return array
         */
        public function get($type)
        {
        }
        /**
         * Regenerate.
         */
        public function regenerate()
        {
        }
    }
    /**
     * Import class.
     */
    class Import
    {
        /**
         * Construct.
         */
        public function __construct($post_id, $layout_type, $predefined_name)
        {
        }
        /**
         * Get images config.
         */
        public function get_config()
        {
        }
        /**
         * Get layout data.
         */
        public function get_data()
        {
        }
    }
    /**
     * Admin layouts class.
     */
    class Admin extends \XTS\Singleton
    {
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Enqueue scripts.
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Add actions.
         */
        public function add_actions()
        {
        }
        /**
         * Add box.
         *
         * @param string  $post_type Post type.
         * @param WP_Post $post      Post object.
         */
        public function add_conditions_box($post_type, $post)
        {
        }
        /**
         * Box callback.
         *
         * @param WP_Post $post Post object.
         */
        public function conditions_box_callback($post)
        {
        }
        /**
         * Get template.
         *
         * @param string $template_name Template name.
         * @param array  $args          Arguments for template.
         */
        public function get_template($template_name, $args = array())
        {
        }
        /**
         * Filter layouts by type.
         *
         * @param WP_Query $query Query.
         *
         * @return void
         */
        public function filter_layouts_by_type($query)
        {
        }
        /**
         * Columns content.
         *
         * @param string $column_name Column name.
         * @param int    $post_id     Post id.
         */
        public function admin_columns_content($column_name, $post_id)
        {
        }
        /**
         * Columns header.
         *
         * @param array $posts_columns Columns.
         *
         * @return array
         */
        public function admin_columns_titles($posts_columns)
        {
        }
        /**
         * Get edit conditions template.
         *
         * @param int $post_id Post id.
         *
         * @return string
         */
        public function get_status_button_template($post_id)
        {
        }
        /**
         * Get edit conditions template.
         *
         * @param int $post_id Post id.
         *
         * @return string
         */
        public function get_edit_conditions_template($post_id)
        {
        }
        /**
         * Interface.
         *
         * @param mixed $views Default views.
         *
         * @return mixed
         */
        public function print_interface($views)
        {
        }
        /**
         * Print predefined layouts.
         */
        public function get_predefined_layouts()
        {
        }
        /**
         * Print condition template.
         */
        public function print_condition_template()
        {
        }
        /**
         * Print layout form.
         */
        public function get_form()
        {
        }
        /**
         * Print layout tabs.
         */
        public function print_tabs()
        {
        }
    }
    /**
     * Manager class.
     */
    class Manager extends \XTS\Singleton
    {
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Add actions.
         */
        public function add_actions()
        {
        }
        /**
         * Save template post.
         */
        public function save_post()
        {
        }
        /**
         * On post untrashed.
         *
         * @param int $post_id Post id.
         */
        public function on_untrash_post($post_id)
        {
        }
        /**
         * Remove post from cache.
         *
         * @param int $post_id Post id.
         */
        public function remove_post_from_cache($post_id)
        {
        }
        /**
         * Change status action.
         */
        public function change_status_action()
        {
        }
        /**
         * Edit layout.
         */
        public function edit_layout()
        {
        }
        /**
         * Create new layout.
         */
        public function create_layout()
        {
        }
        /**
         * Conditions query.
         */
        public function conditions_query()
        {
        }
    }
}
namespace {
    class WOODMART_HB_Styles
    {
        public function get_elements_css()
        {
        }
        public function get_all_css($el, $options)
        {
        }
        /**
         * Set header elements css.
         *
         * @since 1.0.0
         *
         * @param bool $el Header structure.
         */
        public function set_elements_css($el = \false)
        {
        }
        /**
         * Generate background CSS code.
         *
         * @since 1.0.0
         *
         * @param array $bg Background data.
         *
         * @return string
         */
        public function generate_background_css($bg)
        {
        }
        /**
         * Generate border CSS code.
         *
         * @since 1.0.0
         *
         * @param array $border Border data.
         * @param array $sides Sides data.
         *
         * @return string
         */
        public function generate_border_css($border, $sides)
        {
        }
        public function get_header_css($options)
        {
        }
    }
    class WOODMART_HB_Elements
    {
        public $elements = array('Root', 'Row', 'Column', 'Logo', 'Mainmenu', 'Menu', 'Burger', 'Cart', 'Wishlist', 'Compare', 'Search', 'Mobilesearch', 'Account', 'Categories', 'Divider', 'Space', 'Text', 'HTMLBlock', 'Button', 'Infobox', 'Social', 'Stickynavigation');
        public $elements_classes = array();
        public function __construct()
        {
        }
        public function include_files()
        {
        }
        public function ajax_actions()
        {
        }
        public function get_elements_ajax()
        {
        }
    }
    class WOODMART_HB_HeaderFactory
    {
        public function __construct($elements, $list)
        {
        }
        public function get_header($id)
        {
        }
        public function update_header($id, $name, $structure, $settings)
        {
        }
        public function create_new($id, $name, $structure = \false, $settings = \false)
        {
        }
    }
    class WOODMART_Header_Builder
    {
        protected static $_instance = \null;
        public $elements = \null;
        public $list = \null;
        public $factory = \null;
        public $manager = \null;
        protected function __construct()
        {
        }
        protected function __clone()
        {
        }
        public static function get_instance()
        {
        }
    }
    class WOODMART_HB_Frontend
    {
        public $builder = \null;
        public $header = \null;
        public function __construct()
        {
        }
        protected function __clone()
        {
        }
        public static function get_instance()
        {
        }
        public function init()
        {
        }
        public function get_elements()
        {
        }
        /**
         * Load elements classes list.
         *
         * @since 1.0.0
         */
        public function print_header_styles()
        {
        }
        public function styles()
        {
        }
        public function get_current_id()
        {
        }
        public function generate_header()
        {
        }
    }
    class WOODMART_HB_HeadersList
    {
        public function set_default($id)
        {
        }
        public function get_default()
        {
        }
        public function get_all()
        {
        }
        public function add_header($id = \false, $name = \false)
        {
        }
        public function remove($id)
        {
        }
        public function get_examples()
        {
        }
    }
    class WOODMART_HB_Header
    {
        public function __construct($elements, $id, $new = \false)
        {
        }
        public function set_name($name)
        {
        }
        public function set_structure($structure = \false)
        {
        }
        public function set_settings($settings = array())
        {
        }
        public function get_id()
        {
        }
        public function get_name()
        {
        }
        public function get_structure()
        {
        }
        public function get_settings()
        {
        }
        public function save()
        {
        }
        public function get_raw_data()
        {
        }
        public function get_data()
        {
        }
        public function get_options()
        {
        }
        public function get_header_sceleton()
        {
        }
        public function fill_sceleton_with_elements($sceleton, $default_structure)
        {
        }
        public function fill_sceleton_with_params($sceleton, $params)
        {
        }
    }
    abstract class WOODMART_HB_Element
    {
        public $args = array();
        /**
         * @var array $exclude_list List of fields to exclude.
         * Example (in child class): $this->exclude_list = array( 'exclude_field', ... );
         */
        public $exclude_list;
        public $template_name;
        public $vc_element = \false;
        public function __construct()
        {
        }
        public function get_header_options()
        {
        }
        public function get_args()
        {
        }
        public function render($el, $children = '')
        {
        }
        public function has_background($params)
        {
        }
        public function has_border($params)
        {
        }
        public function visual_composer_to_header()
        {
        }
        public function get_menu_options_with_empty()
        {
        }
        public function get_menu_options($empty = \false)
        {
        }
        public function get_html_block_options()
        {
        }
    }
    class WOODMART_HB_Categories extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Divider extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Button extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Row extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_HTMLBlock extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Mainmenu extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Stickynavigation extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Burger extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Logo extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Languages extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Menu extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Text extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Infobox extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Search extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Compare extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Root extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Mobilesearch extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Social extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Cart extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Column extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Wishlist extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Account extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Space extends \WOODMART_HB_Element
    {
        public function __construct()
        {
        }
        public function map()
        {
        }
    }
    class WOODMART_HB_Manager
    {
        public function __construct($factory, $list)
        {
        }
        public function duplicate_header()
        {
        }
        public function save_header()
        {
        }
        public function load_header()
        {
        }
        public function remove_header()
        {
        }
        public function set_default_header()
        {
        }
        public function get_default_header()
        {
        }
    }
    class WOODMART_HB_Backend
    {
        public function __construct()
        {
        }
        protected function __clone()
        {
        }
        public static function get_instance()
        {
        }
        public function init()
        {
        }
        public function scripts()
        {
        }
    }
    /**
     * Filter nav menu items on edit screen.
     *
     * @since 1.0
     *
     * @uses Walker_Nav_Menu_Edit
     */
    class NMI_Walker_Nav_Menu_Edit extends \Walker_Nav_Menu_Edit
    {
        /**
         * @see Walker_Nav_Menu_Edit::start_el()
         * @since 1.0
         * @access public
         *
         * @global $wp_version
         * @uses Walker_Nav_Menu_Edit::start_el()
         * @uses admin_url() To get URL of uploader.
         * @uses esc_url() To escape URL.
         * @uses add_query_arg() To append variables to URL.
         * @uses esc_attr() To escape string.
         * @uses has_post_thumbnail() To check if item has thumb.
         * @uses get_the_post_thumbnail() To get item's thumb.
         * @uses version_compare() To compare WordPress versions.
         * @uses wp_create_nonce() To create item's nonce.
         * @uses esc_html__() To translate & escape string.
         * @uses esc_html() To escape string.
         * @uses do_action_ref_array() Calls 'nmi_menu_item_walker_output' with the output.
         *                        post object, depth and arguments to overwrite item's output.
         * @uses NMI_Walker_Nav_Menu_Edit::get_settings() To get JSONed item's data.
         * @uses do_action_ref_array() Calls 'nmi_menu_item_walker_end' with the output.
         *                        post object, depth and arguments to overwrite item's output.
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param object $item Menu item data object.
         * @param int $depth Depth of menu item. Used for padding.
         * @param array $args Not used.
         * @param int $id Not used.
         */
        public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
        {
        }
        /**
         * Get JSONed item's data.
         *
         * Heavily based on wp_enqueue_media() and
         * WP_Scripts::localize()
         *
         * @see wp_enqueue_media()
         * @see WP_Scripts::localize()
         *
         * @since 2.0
         * @access public
         *
         * @uses version_compare() To compare WordPress versions.
         * @uses wp_create_nonce() To create item's nonce.
         * @uses get_post() To get post's object.
         * @uses get_post_meta() To get post's meta data.
         * @uses apply_filters() Calls 'media_view_settings' with the settings
         *                        and post object to overwrite item's settings.
         * @uses did_action() To check if action was done.
         * @uses do_action() Calls 'nmi_setup_settings_var' with the item ID.
         *
         * @param int $post_id The item's post ID.
         * @return string New HTML output.
         */
        public function get_settings($post_id)
        {
        }
    }
    /**
     * Display image as a menu content.
     * 
     * @since 1.0
     */
    class Nav_Menu_Images
    {
        /**
         * Name of a plugin's file.
         *
         * @var $plugin_basename
         * @since 1.0 
         * @access protected
         */
        protected $plugin_basename;
        /**
         * Is last menu item of current page.
         *
         * @var $is_current_item
         * @since 3.0 
         * @access public
         */
        public $is_current_item;
        /**
         * Sets class properties.
         * 
         * @since 1.0
         * @access public
         *
         * @uses add_action() To hook function.
         * @uses plugin_basename() To get plugin's file name.
         */
        public function __construct()
        {
        }
        /**
         * Register actions & filters on init.
         * 
         * @since 1.0
         * @access public
         *
         * @uses add_post_type_support() To enable thumbs for nav menu.
         * @uses is_admin() To see if it's admin area.
         * @uses Nav_Menu_Images_Admin() To call admin functions.
         * @uses add_action() To hook function.
         * @uses apply_filters() Calls 'nmi_filter_menu_item_content' to
         *                        overwrite menu item filter.
         * @uses add_filter() To hook filters.
         * @uses do_action() Calls 'nmi_init'.
         */
        public function init()
        {
        }
        /**
         * Load textdomain for internationalization.
         *
         * @since 1.0
         * @access public
         *
         * @uses is_textdomain_loaded() To check if translation is loaded.
         * @uses load_plugin_textdomain() To load translation file.
         * @uses plugin_basename() To get plugin's file name.
         */
        public function load_textdomain()
        {
        }
        /**
         * Return thumbnail's HTML after addition.
         *
         * @since 1.0
         * @access public
         *
         * @uses absint() To get positive integer.
         * @uses has_post_thumbnail() To check if item has thumb.
         * @uses admin_url() To get URL of uploader.
         * @uses esc_url() To escape URL.
         * @uses add_query_arg() To append variables to URL.
         * @uses get_the_post_thumbnail() To get item's thumb.
         */
        public function ajax_added_thumbnail()
        {
        }
        /**
         * Display an image as menu item content.
         *
         * @since 1.0
         * @access public
         *
         * @uses has_post_thumbnail() To check if item has thumb.
         * @uses apply_filters() Calls 'nmi_menu_item_content' to
         *                        filter outputted content.
         * @uses get_the_post_thumbnail() To get item's thumb.
         *
         * @param string $content Item's content
         * @param int $item_id Item's ID
         * @return string $content Item's content
         */
        public function menu_item_content($content, $item_id)
        {
        }
        /**
         * Display a hover image for menu item image.
         *
         * @since 3.0
         * @access public
         *
         * Thanks {@link http://www.webmasterworld.com/forum21/6615.htm}
         *
         * @uses get_post_meta() To get item's hover & active images IDs.
         * @uses wp_get_attachment_image_src() To get hover image's data.
         * @uses apply_filters() Calls 'nmi_menu_item_hover' to
         *                        filter returned attributes.
         *
         * @param array $attr Image's attributes.
         * @param object $attachment Image's post object data.
         * @return array $attr New image's attributes.
         */
        public function menu_item_hover($attr, $attachment)
        {
        }
        /**
         * Display an active image for menu item.
         *
         * @since 3.0
         * @access public
         *
         * @uses get_post_meta() To get item's active image ID.
         * @uses wp_get_attachment_image_src() To get active image's data.
         * @uses apply_filters() Calls 'nmi_menu_item_active' to
         *                        filter returned attributes.
         *
         * @param array $attr Image's attributes.
         * @param object $attachment Image's post object data.
         * @return array $attr New image's attributes.
         */
        public function menu_item_active($attr, $attachment)
        {
        }
        /**
         * Register menu item content filter.
         *
         * Also check if menu item is of
         * currently displayed page.
         *
         * @since 1.0
         * @access public
         *
         * @uses has_post_thumbnail() To check if item has thumb.
         * @uses add_filter() To hook filter.
         *
         * @param array $item_classes Item's classes.
         * @param object $item Menu item data object.
         * @param object $args Item's arguments.
         * @return array $item_classes Item's classes.
         */
        public function register_menu_item_filter($item_classes, $item, $args = array())
        {
        }
        /**
         * Deregister menu item content filter.
         *
         * @since 1.0
         * @access public
         *
         * @uses remove_action() To unhook filter.
         *
         * @param string $item_output Item's content
         * @param object $item Menu item data object.
         * @return string $item_output Item's content
         */
        public function deregister_menu_item_filter($item_output, $item)
        {
        }
        /**
         * Add action links to plugins page.
         *
         * @since 1.0
         * @access public
         *
         * @uses Nav_Menu_Images::load_textdomain() To load translations.
         *
         * @param array $link Plugin's action links.
         * @return array $link Plugin's action links.
         */
        public function action_links($links)
        {
        }
    }
    /**
     * Nav Menu Images admin functions.
     *
     * @since 1.0
     *
     * @uses Nav_Menu_Images
     */
    class Nav_Menu_Images_Admin extends \Nav_Menu_Images
    {
        /**
         * Sets class properties.
         * 
         * @since 1.0
         * @access public
         *
         * @uses add_filter() To hook filters.
         * @uses add_action() To hook functions.
         */
        public $plugin_dir = '';
        public function __construct()
        {
        }
        /**
         * Register script enqueuing on nav menu page.
         * 
         * @since 1.0
         * @access public
         *
         * @uses add_action() To hook function.
         */
        public function register_enqueuing()
        {
        }
        /**
         * Enqueue necessary scripts.
         * 
         * @since 1.0
         * @access public
         *
         * @global $wp_version.
         * @uses Nav_Menu_Images::load_textdomain() To load translations.
         * @uses wp_enqueue_script() To enqueue scripts.
         * @uses plugins_url() To get URL of the file.
         * @uses wp_localize_script() To add script's variables.
         * @uses add_thickbox() To enqueue Thickbox style & script.
         * @uses version_compare() To compare WordPress versions.
         * @uses wp_enqueue_media() To load media view templates, scripts & styles.
         * @uses do_action() Calls 'nmi_enqueue_scripts'.
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Use custom walker for nav menu edit.
         * 
         * @since 1.0
         * @access public
         *
         * @uses Nav_Menu_Images::load_textdomain() To load translations.
         *
         * @param string $walker Name of used walker class.
         */
        public function filter_walker($walker)
        {
        }
        /**
         * Output HTML for the post thumbnail meta-box.
         *
         * @since 2.0
         * @access public
         *
         * @uses get_post() To get post's object.
         * @uses Nav_Menu_Images::load_textdomain() To load translations.
         * @uses admin_url() To get URL of uploader.
         * @uses esc_url() To escape URL.
         * @uses add_query_arg() To append variables to URL.
         * @uses has_post_thumbnail() To check if item has thumb.
         * @uses get_the_post_thumbnail() To get item's thumb.
         * @uses wp_create_nonce() To create item's nonce.
         * @uses esc_html__() To translate & escape string.
         * @uses apply_filters() Calls 'nmi_admin_post_thumbnail_html' to
         *                        overwrite returned output.
         *
         * @param string $content Original HTML output of the thubnail.
         * @param int $post_id The post ID associated with the thumbnail.
         * @return string New HTML output.
         */
        public function _wp_post_thumbnail_html($content, $post_id)
        {
        }
        /**
         * Display hover & active image checkboxes.
         *
         * @since 3.0
         * @access public
         *
         * @uses Nav_Menu_Images::load_textdomain() To load translations.
         * @uses get_post_meta() To get item's hover & active images IDs.
         * @uses checked() To set proper checkbox status.
         * @uses apply_filters() Calls 'nmi_attachment_fields_to_edit' to
         *                        overwrite returned form fields.
         *
         * @param array $form_fields Original attachment form fields.
         * @param object $post The post object data of attachment.
         * @return string New attachment form fields.
         */
        function attachment_fields_to_edit($form_fields, $post)
        {
        }
        /**
         * Save hover & active image checkboxes submissions.
         *
         * @since 3.0
         * @access public
         *
         * @uses update_post_meta() To save new item's hover or active images IDs.
         * @uses delete_post_meta() To delete old item's hover or active images IDs.
         *
         * @param object $post The post object data of attachment.
         * @param array $attachment Submitted data of attachment.
         * @return object $post The post object data of attachment.
         */
        function attachment_fields_to_save($post, $attachment)
        {
        }
        function custom_fields_save($menu_id, $menu_item_db_id, $args)
        {
        }
    }
    class WPH_Widget extends \WP_Widget
    {
        public function get_layered_get_categories()
        {
        }
        public function get_layered_get_attributes_options()
        {
        }
        public function get_layered_get_categories_options()
        {
        }
        public function is_widget_preview()
        {
        }
        /** 
         * Create Widget 
         * 
         * Creates a new widget and sets it's labels, description, fields and options 
         * 
         * @access   public
         * @param    array
         * @return   void
         * @since    1.0
         */
        function create_widget($args)
        {
        }
        /** 
         * Form
         * 
         * Creates the settings form. 
         * 
         * @access   private
         * @param    array
         * @return   void
         * @since    1.0     
         */
        function form($instance)
        {
        }
        /** 
         * Update Fields
         *  
         * @access   private
         * @param    array
         * @param    array
         * @return   array
         * @since    1.0
         */
        function update($new_instance, $old_instance)
        {
        }
        /** 
         * Before Validate Fields
         *
         * Allows to hook code on the update.
         *  
         * @access   public
         * @param    string
         * @return   string
         * @since    1.6
         */
        function before_update_fields()
        {
        }
        /** 
         * After Validate Fields
         * 
         * Allows to modify the output after validating the fields.
         *
         * @access   public
         * @param    string
         * @return   string
         * @since    1.6
         */
        function after_validate_fields($instance = "")
        {
        }
        /** 
         * Validate 
         *  
         * @access   private
         * @param    string
         * @param    string
         * @return   boolean
         * @since    1.0
         */
        function validate($rules, $value)
        {
        }
        /** 
         * Filter 
         *  
         * @access   private
         * @param    string
         * @param    string
         * @return   void
         * @since    1.0
         */
        function filter($filters, $value)
        {
        }
        /** 
         * Do Validation Rule
         *  
         * @access   private
         * @param    string
         * @param    string
         * @return   boolean
         * @since    1.0
         */
        function do_validation($rule, $value = "")
        {
        }
        /** 
         * Do Filter
         *  
         * @access   private
         * @param    string
         * @param    string
         * @return   boolean
         * @since    1.0
         */
        function do_filter($filter, $value = "")
        {
        }
        /** 
         * Create Fields 
         * 
         * Creates each field defined. 
         * 
         * @access   private
         * @param    string
         * @return   string
         * @since    1.0
         */
        function create_fields($out = "")
        {
        }
        /** 
         * Before Create Fields
         *
         * Allows to modify code before creating the fields.
         *  
         * @access   public
         * @param    string
         * @return   string
         * @since    1.0
         */
        function before_create_fields($out = "")
        {
        }
        /** 
         * After Create Fields
         * 
         * Allows to modify code after creating the fields.
         *
         * @access   public
         * @param    string
         * @return   string
         * @since    1.0
         */
        function after_create_fields($out = "")
        {
        }
        /** 
         * Create Fields
         *  
         * @access   private
         * @param    string
         * @param    string
         * @return   string
         * @since    1.0
         */
        function create_field($key, $out = "")
        {
        }
        /**
         * select2 field
         *
         * @access   private
         * @param    array
         * @param    string
         * @return   string
         * @since    1.5
         */
        function create_field_select2($key, $out = "")
        {
        }
        /** 
         * dropdown field
         *  
         * @access   private
         * @param    array
         * @param    string
         * @return   string
         * @since    1.5
         */
        function create_field_dropdown($key, $out = "")
        {
        }
        /** 
         * attach image field
         *  
         * @access   private
         * @param    array
         * @param    string
         * @return   string
         * @since    1.5
         */
        function create_field_attach_image($key, $out = "")
        {
        }
        /**
         * Attach images field
         *
         * @access   private
         * @since    1.5
         *
         * @param string
         * @param array
         *
         * @return   string
         */
        function create_field_attach_images($key, $out = '')
        {
        }
        /** 
         * Field Text
         *  
         * @access   private
         * @param    array
         * @param    string
         * @return   string
         * @since    1.5
         */
        function create_field_text($key, $out = "")
        {
        }
        /** 
         * Field Textarea
         *  
         * @access   private
         * @param    array
         * @param    string
         * @return   string
         * @since    1.5
         */
        function create_field_textarea($key, $out = "")
        {
        }
        /** 
         * Field Checkbox
         *  
         * @access   private
         * @param    array
         * @param    string
         * @return   string
         * @since    1.5
         */
        function create_field_checkbox($key, $out = "")
        {
        }
        /** 
         * Field Select
         *  
         * @access   private
         * @param    array
         * @param    string
         * @return   string
         * @since    1.5
         */
        function create_field_select($key, $out = "")
        {
        }
        /** 
         * Field Select with Options Group
         *  
         * @access   private
         * @param    array
         * @param    string
         * @return   string
         * @since    1.5
         */
        function create_field_select_group($key, $out = "")
        {
        }
        /** 
         * Field Number
         *  
         * @access   private
         * @param    array
         * @param    string
         * @return   string
         * @since    1.5
         */
        function create_field_number($key, $out = "")
        {
        }
        /** 
         * Field Label
         *  
         * @access   private
         * @param    string
         * @param    string
         * @return   string
         * @since    1.5
         */
        function create_field_label($name = "", $id = "")
        {
        }
    }
    class WOODMART_User_Panel_Widget extends \WPH_Widget
    {
        function __construct()
        {
        }
        // Output function
        function widget($args, $instance)
        {
        }
        function form($instance)
        {
        }
    }
    class WOODMART_Recent_Posts extends \WPH_Widget
    {
        function __construct()
        {
        }
        // Output function
        function widget($args, $instance)
        {
        }
        public function update($new_instance, $old_instance)
        {
        }
        function form($instance)
        {
        }
    }
    class WOODMART_Widget_Price_Filter extends \WPH_Widget
    {
        function __construct()
        {
        }
        // Output function
        // Based on woo widget @version  2.3.0
        function widget($args, $instance)
        {
        }
        /**
         * Get filtered min price for current products.
         * @return int
         */
        protected function get_filtered_price()
        {
        }
        protected function get_filtered_price_new()
        {
        }
        function form($instance)
        {
        }
    }
    class WOODMART_Widget_Search extends \WPH_Widget
    {
        function __construct()
        {
        }
        function widget($args, $instance)
        {
        }
        function form($instance)
        {
        }
    }
    class WOODMART_Widget_Layered_Nav extends \WPH_Widget
    {
        function __construct()
        {
        }
        // Output function
        // Based on woo widget @version  2.3.0
        function widget($args, $instance)
        {
        }
        /**
         * Return the currently viewed taxonomy name.
         *
         * @return string
         */
        protected function get_current_taxonomy()
        {
        }
        /**
         * Return the currently viewed term ID.
         *
         * @return int
         */
        protected function get_current_term_id()
        {
        }
        /**
         * Return the currently viewed term slug.
         *
         * @return int
         */
        protected function get_current_term_slug()
        {
        }
        /**
         * Show dropdown layered nav.
         *
         * @param  array  $terms Terms.
         * @param  string $taxonomy Taxonomy.
         * @param  string $query_type Query Type.
         * @return bool Will nav display?
         */
        protected function layered_nav_dropdown($terms, $taxonomy, $query_type)
        {
        }
        /**
         * Get current page URL for layered nav items.
         *
         * @return string
         */
        protected function get_page_base_url()
        {
        }
        /**
         * Count products within certain terms, taking the main WP query into consideration.
         *
         * This query allows counts to be generated based on the viewed products, not all products.
         *
         * @param  array  $term_ids Term IDs.
         * @param  string $taxonomy Taxonomy.
         * @param  string $query_type Query Type.
         * @return array
         */
        protected function get_filtered_term_product_counts($term_ids, $taxonomy, $query_type)
        {
        }
        /**
         * Show list based layered nav.
         *
         * @param  array  $terms
         * @param  string $taxonomy
         * @param  string $query_type
         * @return bool Will nav display?
         */
        protected function layered_nav_list($terms, $taxonomy, $query_type, $instance)
        {
        }
        protected function layered_nav_checkbox_list($terms, $taxonomy, $query_type, $instance)
        {
        }
        function form($instance)
        {
        }
    }
    class WOODMART_Instagram_Widget extends \WPH_Widget
    {
        function __construct()
        {
        }
        // Output function
        function widget($args, $instance)
        {
        }
    }
    /**
     * This class create mailchimp widget.
     */
    class WOODMART_Widget_Mailchimp extends \WPH_Widget
    {
        /**
         * Widget construct method.
         */
        public function __construct()
        {
        }
        /**
         * This is method rendering widget.
         *
         * @param array $args arguments for create widget.
         * @param array $instance data for create widget preview.
         */
        public function widget($args, $instance)
        {
        }
    }
    class WOODMART_Stock_Status extends \WPH_Widget
    {
        function __construct()
        {
        }
        function hooks()
        {
        }
        public function show_in_stock_products($query)
        {
        }
        public function show_on_sale_products($ids)
        {
        }
        function get_link($status)
        {
        }
        function widget($args, $instance)
        {
        }
        function form($instance)
        {
        }
    }
    /**
     * Register widget based on VC_MAP parameters that display banner shortcode
     */
    class WOODMART_Banner_Widget extends \WPH_Widget
    {
        /**
         * This method creates these widgets.
         */
        public function __construct()
        {
        }
        /**
         * This method render this widget.
         *
         * @param array $args general settings for this widget.
         * @param array $instance the value of the options for output.
         */
        public function widget($args, $instance)
        {
        }
    }
    class WOODMART_Twitter extends \WPH_Widget
    {
        function __construct()
        {
        }
        // Output function
        function widget($args, $instance)
        {
        }
        public function update($new_instance, $old_instance)
        {
        }
        function form($instance)
        {
        }
    }
    class WOODMART_WP_Nav_Menu_Widget extends \WPH_Widget
    {
        public function __construct()
        {
        }
        public function widget($args, $instance)
        {
        }
        public function update($new_instance, $old_instance)
        {
        }
        public function form($instance)
        {
        }
    }
    class WOODMART_Widget_Sorting extends \WPH_Widget
    {
        function __construct()
        {
        }
        // Output function
        // Based on woo widget @version  2.3.0
        function widget($args, $instance)
        {
        }
        function form($instance)
        {
        }
    }
    class WOODMART_Static_Block_Widget extends \WPH_Widget
    {
        function __construct()
        {
        }
        // Output function
        function widget($args, $instance)
        {
        }
    }
    class WOODMART_Author_Area_Widget extends \WPH_Widget
    {
        function __construct()
        {
        }
        // Output function
        function widget($args, $instance)
        {
        }
    }
}
namespace XTS {
    class Presets extends \XTS\Singleton
    {
        /**
         * Construct.
         */
        public function init()
        {
        }
        /**
         * Load presets from the database.
         */
        public function load_presets()
        {
        }
        /**
         * Create new preset action.
         */
        public function search_preset_action()
        {
        }
        /**
         * Create new preset action.
         */
        public function new_preset_action()
        {
        }
        /**
         * Remove preset action.
         *
         * @since 1.0.0
         */
        public function remove_preset_action()
        {
        }
        /**
         * AJAX action for saving preset conditions.
         */
        public function save_preset_action()
        {
        }
        /**
         * Update preset conditions.
         *
         * @param integer $id        Preset id.
         * @param array   $condition Conditions array.
         */
        public function update_preset_conditions($id, $condition)
        {
        }
        /**
         * Update preset priority.
         *
         * @param integer $id       Preset id.
         * @param string  $priority Priority.
         */
        public function update_preset_priority($id, $priority)
        {
        }
        /**
         * Update preset name.
         *
         * @param integer $id   Preset id.
         * @param string  $name Name.
         */
        public function update_preset_name($id, $name)
        {
        }
        /**
         * Create a preset in the database.
         *
         * @param integer $name Preset name.
         *
         * @return int|string|null
         */
        public function add_preset($name)
        {
        }
        /**
         * Remove preset from the database.
         *
         * @param integer $id Remove preset by id.
         */
        public function remove_preset($id)
        {
        }
        /**
         * Update presets option.
         */
        public function update_presets()
        {
        }
        /**
         * AJAX action to load entities names.
         */
        public function get_entity_ids_action()
        {
        }
        /**
         * Get paginated presets.
         */
        public static function get_paginated_presets()
        {
        }
        /**
         * Enqueue scripts.
         */
        public static function enqueue_scripts()
        {
        }
        /**
         * User interface.
         */
        public static function output_ui()
        {
        }
        /**
         * Display current preset conditions form.
         *
         * @param array $preset Preset data.
         */
        public static function display_current_conditions($preset)
        {
        }
        /**
         * Display priority input.
         *
         * @param array $preset Preset data.
         */
        public static function display_priority($preset)
        {
        }
        /**
         * Display preset name.
         *
         * @param array $preset Preset data.
         */
        public static function display_name($preset)
        {
        }
        /**
         * HTML template for one rule.
         *
         * @param bool  $hidden Is this template hidden.
         * @param array $rule   Rule array.
         */
        public static function condition_template($hidden = true, $rule = array())
        {
        }
        /**
         * Get currently editing preset.
         */
        public static function get_current_preset()
        {
        }
        /**
         * Presets getter.
         */
        public static function get_all()
        {
        }
        /**
         * Get presets that active for the current page.
         */
        public static function get_active_presets()
        {
        }
    }
    /**
     * Create options, register sections and fields.
     */
    class Options extends \XTS\Singleton
    {
        // phpcs:ignore
        /**
         * Options set prefix.
         *
         * @var array
         */
        public static $opt_name = 'woodmart';
        /**
         * Register hooks and load base data.
         *
         * @since 1.0.0
         */
        public function init()
        {
        }
        /**
         * Load options array from the database options table.
         *
         * @since 1.0.0
         */
        public function load_options()
        {
        }
        /**
         * Get active presets and load their options.
         *
         * @since 1.0.0
         *
         * @param string $preset_id Preset id.
         */
        public function load_presets($preset_id = '')
        {
        }
        /**
         * Load default options from Field objects arguments.
         *
         * @since 1.0.0
         */
        public function load_defaults()
        {
        }
        /**
         * Get options array.
         *
         * @return array Options array stored in the database.
         *
         * @since 1.0.0
         */
        public static function get_options()
        {
        }
        /**
         * Setup global variable for this options set.
         *
         * @since 1.0.0
         */
        public function setup_globals()
        {
        }
        /**
         * Register settings hook callback.
         *
         * @since 1.0.0
         */
        public function register_settings()
        {
        }
        /**
         * Static method to add a section to the array.
         *
         * @since 1.0.0
         *
         * @param array $section Arguments array for new section.
         */
        public static function add_section($section)
        {
        }
        /**
         * Static method t add a field object based on arguments array.
         *
         * @since 1.0.0
         *
         * @param array $args New field object arguments.
         */
        public static function add_field($args)
        {
        }
        /**
         * Get field default value.
         *
         * @since 1.0.0
         *
         * @param array $args Args array for the field.
         *
         * @return mixed|string
         */
        public static function get_default($args)
        {
        }
        /**
         * Add option key to be overriden from meta value.
         *
         * @since 1.0.0
         *
         * @param array $key Key for the option to override.
         */
        public static function register_meta_override($key)
        {
        }
        /**
         * Override options from meta values.
         *
         * @since 1.0.0
         */
        public static function override_options_from_meta()
        {
        }
        /**
         * Static method to get all fields objects.
         *
         * @since 1.0.0
         *
         * @return array Field objects array.
         */
        public static function get_fields()
        {
        }
        /**
         * Static method to get all sections.
         *
         * @since 1.0.0
         *
         * @return array Section array.
         */
        public static function get_sections()
        {
        }
        /**
         * Get fields CSS code based on its controls and values.
         *
         * @since 1.0.0
         */
        public function get_css_output($is_preset_active)
        {
        }
        /**
         * Update all fields options array.
         *
         * @since 1.0.0
         *
         * @param array $options New options.
         */
        public function override_current_options($options)
        {
        }
        /**
         * Update options in the database with a new array. It should be sanitized
         * with ->sanitize_before_save() method of the class.
         *
         * @since 1.0.0
         *
         * @param mixed $new_options New options.
         */
        public function update_options($new_options)
        {
        }
        /**
         * Sanitize all options before saving callback. Used also for import and reset default actions.
         *
         * @since 1.0.0
         *
         * @param array $options Options from POST.
         *
         * @return array
         */
        public function sanitize_before_save($options)
        {
        }
    }
    /**
     * Metabox class to store all fields for particular metaboxes created.
     */
    class Metabox
    {
        /**
         * Create an object from args.
         *
         * @since 1.0.0
         *
         * @param array $args Basic arguments for the object.
         */
        public function __construct($args)
        {
        }
        /**
         * Get the metabox ID.
         *
         * @since 1.0.0
         *
         * @return int Metabox id field.
         */
        public function get_id()
        {
        }
        /**
         * Getter for the metabox title.
         *
         * @since 1.0.0
         *
         * @return string The metabox title.
         */
        public function get_title()
        {
        }
        /**
         * Getter for the metaboxes taxonomies.
         *
         * @since 1.0.0
         *
         * @return array Taxonomies array for this metabox.
         */
        public function get_taxonomies()
        {
        }
        /**
         * Getter for the metabox object.
         *
         * @since 1.0.0
         *
         * @return string The metabox object.
         */
        public function get_object()
        {
        }
        /**
         * Getter for the metaboxes post types array.
         *
         * @since 1.0.0
         *
         * @return array Post types array for this metabox.
         */
        public function get_post_types()
        {
        }
        /**
         * Adds the Field object to this metabox.
         *
         * @since 1.0.0
         *
         * @param array $args Field arguments.
         */
        public function add_field($args)
        {
        }
        /**
         * Static method to add a section to the array.
         *
         * @since 1.0.0
         *
         * @param array $section Arguments array for new section.
         */
        public function add_section($section)
        {
        }
        /**
         * Static method to get all fields objects.
         *
         * @since 1.0.0
         *
         * @return array Field objects array.
         */
        public function get_fields()
        {
        }
        /**
         * Output fields CSS code based on its controls and values.
         *
         * @since 1.0.0
         */
        public function fields_css_output()
        {
        }
        /**
         * Static method to get all sections.
         *
         * @since 1.0.0
         *
         * @return array Section array.
         */
        public function get_sections()
        {
        }
        /**
         * Generate a unique nonce for each registered meta_box
         *
         * @since  2.0.0
         * @return string unique nonce string.
         */
        public function nonce()
        {
        }
        /**
         * Render this metabox and all its fields.
         *
         * @since 1.0.0
         *
         * @param  object $object Post or Term object to render with its meta values.
         */
        public function render($object)
        {
        }
        /**
         * Save all fields to the metadata database table for posts.
         *
         * @since 1.0.0
         *
         * @param int $post_id Post id.
         * @return bool
         */
        public function save_posts_fields($post_id)
        {
        }
        /**
         * Save all fields to the metadata database table for terms.
         *
         * @since 1.0.0
         *
         * @param int $term_id Term id.
         * @return bool
         */
        public function save_terms_fields($term_id)
        {
        }
        /**
         * Save all fields to the metadata database table for terms.
         *
         * @since 1.0.0
         *
         * @param integer $comment_id Comment id.
         */
        public function save_comments_fields($comment_id)
        {
        }
    }
    /**
     * Create page and display the form with all sections and fields.
     */
    class Page extends \XTS\Singleton
    {
        /**
         * Options set prefix.
         *
         * @var array
         */
        public $opt_name = 'woodmart';
        /**
         * Register hooks and load base data.
         *
         * @since 1.0.0
         */
        public function init()
        {
        }
        /**
         * Load all field objects and add them to the sections set.
         *
         * @since 1.0.0
         */
        public function load_fields()
        {
        }
        /**
         * Render the options page content.
         *
         * @since 1.0.0
         */
        public function page_content()
        {
        }
    }
    /**
     * Store all metaboxes as a static data.
     */
    class Metaboxes extends \XTS\Singleton
    {
        /**
         * Default arguments for the metabox.
         *
         * @since 1.0.0
         *
         * @var object
         */
        public static $box_defaults = array('id' => '', 'title' => 'Post metabox', 'object' => 'post', 'taxonomies' => array(), 'post_types' => array('post'));
        /**
         * Register hooks for metaboxes and save function.
         *
         * @since 1.0.0
         */
        public function init()
        {
        }
        /**
         * Static method to add metabox with arguments.
         *
         * @since 1.0.0
         *
         * @param array $args Arguments for Metabox class to create a new object.
         * @return \XTS\Metabox
         */
        public static function add_metabox($args)
        {
        }
        /**
         * Get metabox class by ID.
         *
         * @since 1.0.0
         *
         * @param integer $id Metabox ID.
         * @return bool|mixed
         */
        public static function get_metabox($id)
        {
        }
        /**
         * Register metabox callback.
         *
         * @since 1.0.0
         */
        public function register_metaboxes()
        {
        }
        /**
         * Register comment metabox callback.
         *
         * @since 1.0.0
         */
        public function register_comment_metaboxes()
        {
        }
        /**
         * Register metabox callback.
         *
         * @since 1.0.0
         */
        public function term_hooks()
        {
        }
        /**
         * Callback for metabox fields save hook.
         *
         * @since 1.0.0
         *
         * @param  int $post_id ID of the post to save.
         */
        public function save_post($post_id)
        {
        }
        /**
         * Callback for term create and update.
         *
         * @since 1.0.0
         *
         * @param  int    $term_id  Term ID.
         * @param  int    $tt_id    Term Taxonomy ID.
         * @param  string $taxonomy Taxonomy.
         * @return void
         */
        public function save_term($term_id, $tt_id, $taxonomy = '')
        {
        }
        /**
         * Callback for comment create and update.
         *
         * @since 1.0.0
         *
         * @param int   $comment_id The comment ID.
         * @param array $data       Comment data.
         *
         * @return void
         */
        public function save_comment($comment_id, $data)
        {
        }
        /**
         * Callback for term delete.
         *
         * @since 1.0.0
         *
         * @param  int    $term_id  Term ID.
         * @param  int    $tt_id    Term Taxonomy ID.
         * @param  string $taxonomy Taxonomy.
         * @return void
         */
        public function delete_term($term_id, $tt_id, $taxonomy = '')
        {
        }
        /**
         * Get metaboxes for posts.
         *
         * @since 1.0.0
         */
        public static function get_posts_metaboxes()
        {
        }
        /**
         * Get metaboxes for taxonomy.
         *
         * @since 1.0.0
         */
        public static function get_terms_metaboxes()
        {
        }
        /**
         * Get metaboxes for comments.
         *
         * @since 1.0.0
         */
        public static function get_comments_metaboxes()
        {
        }
    }
}
namespace XTS\Options {
    /**
     * Abstract class for the field.
     */
    abstract class Field
    {
        /**
         * Args array for the field
         *
         * @var array
         */
        public $args = array();
        /**
         * Options array from the database for the field value.
         *
         * @var array
         */
        public $options = array();
        /**
         * Options set prefix.
         *
         * @var string
         */
        public $opt_name = 'woodmart';
        /**
         * Extra wrapper CSS class.
         *
         * @var string
         */
        public $extra_css_class = '';
        /**
         * Construct the object.
         *
         * @since 1.0.0
         *
         * @param array  $args Field args array.
         * @param array  $options Options from the database.
         * @param string $type Field type.
         * @param string $object $object   Object for post or term.
         */
        public function __construct($args, $options, $type = 'options', $object = 'post')
        {
        }
        /**
         * Validate field value. For example check file ID and URL.
         *
         * @since 1.0.0
         *
         * @param string or array $value Field value.
         *
         * @return mixed
         */
        public function validate($value)
        {
        }
        /**
         * ID getter
         *
         * @since 1.0.0
         *
         * @return int field id value.
         */
        public function get_id()
        {
        }
        /**
         * Update options array. Needed for presets functionality on the demo website.
         *
         * @since 1.0.0
         *
         * @param  array $options New options array.
         */
        public function override_options($options)
        {
        }
        /**
         * Set post
         *
         * @since 1.0.0
         *
         * @param  object $object Post object for metaboxes fields.
         */
        public function set_post($object)
        {
        }
        /**
         * Render the field HTML based on the control class.
         *
         * @since 1.0.0
         *
         * @param object $object Post or Term object for metaboxes fields.
         * @param bool   $preset Current field preset ID.
         */
        public function render($object = null, $preset = false)
        {
        }
        /**
         * Before the control output.
         *
         * @since 1.0.0
         */
        public function before()
        {
        }
        /**
         * Set field's presets IDs.
         *
         * @since 1.0.0
         *
         * @param  int $id Presets Ids.
         */
        public function set_presets($id)
        {
        }
        /**
         * Set inherit value flag.
         *
         * @since 1.0.0
         *
         * @param  boolean $value Yes or no.
         */
        public function inherit_value($value)
        {
        }
        /**
         * Inherit value flag getter.
         *
         * @since 1.0.0
         */
        public function is_inherit_value()
        {
        }
        /**
         * After the control output.
         *
         * @since 1.0.0
         */
        public function after()
        {
        }
        /**
         * Get input name for form tags like input, textarea etc.
         *
         * @since 1.0.0
         *
         * @param bool $subkey Subkey for array fields.
         * @param bool $subkey2 Subkey for array fields. Second level.
         * @param bool $subkey3 Subkey for array fields. Third level.
         *
         * @return string input field name.
         */
        public function get_input_name($subkey = false, $subkey2 = false, $subkey3 = false)
        {
        }
        /**
         * Get field value from options array or from post meta data.
         *
         * @since 1.0.0
         *
         * @param bool $subkey Subkey for array fields.
         *
         * @return mixed Field value.
         */
        public function get_field_value($subkey = false)
        {
        }
        /**
         * Get field options array. For select or buttons set field type.
         *
         * @since 1.0.0
         *
         * @return array Field options array.
         */
        public function get_field_options()
        {
        }
        /**
         * Enqueue required scripts and styles for controls.
         *
         * @since 1.0.0
         */
        public function enqueue()
        {
        }
        /**
         * Output field's css code on frontend based on the control and its value.
         *
         * @since 1.0.0
         */
        public function css_output()
        {
        }
        /**
         * Print css heading.
         *
         * @param string $css CSS.
         * @param string $device Device.
         *
         * @return string
         */
        public function get_heading_css_attribute($css, $device = '')
        {
        }
        /**
         * Sanitize field and its value before saving.
         *
         * @since 1.0.0
         *
         * @param string $value Field value string.
         *
         * @return mixed.
         */
        public function sanitize($value)
        {
        }
    }
    /**
     * Sanitization class for fields
     */
    class Sanitize
    {
        /**
         * Class contructor
         *
         * @since 1.0.0
         *
         * @param object $field Field object.
         * @param string $value field value.
         */
        public function __construct($field, $value)
        {
        }
        /**
         * Run field value sanitization.
         *
         * @since 1.0.0
         *
         * @return sanitized value
         */
        public function sanitize()
        {
        }
    }
}
namespace XTS\Options\Controls {
    /**
     * Input type text field control.
     */
    class Color extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
        /**
         * Enqueue colorpicker lib.
         *
         * @since 1.0.0
         */
        public function enqueue()
        {
        }
        /**
         * Output field's css code on the color.
         *
         * @since 1.0.0
         *
         * @return  string $output Generated CSS code.
         */
        public function css_output()
        {
        }
    }
    /**
     * Icons Font.
     */
    class Icons_Font extends \XTS\Options\Field
    {
        /**
         * Icon config.
         *
         * @var array|string[]
         */
        public array $icons_config = array('f114' => 'chevron-left', 'f113' => 'chevron-right', 'f115' => 'chevron-up', 'f129' => 'chevron-down', 'f121' => 'long-arrow-left', 'f120' => 'long-arrow-right', 'f100' => 'warning-sign', 'f101' => 'play-button', 'f908' => 'pause-button', 'f102' => '360-deg', 'f108' => 'door-logout', 'f107' => 'check', 'f143' => 'plus', 'f112' => 'cross-close', 'f109' => 'more-dots', 'f161' => 'vertical-menu', 'f118' => 'filter', 'f119' => 'sort-by', 'f122' => 'grid', 'f105' => 'header-cart', 'f123' => 'cart', 'f126' => 'bag', 'f106' => 'heart', 'f124' => 'user', 'f125' => 'newlatter', 'f127' => 'scale-arrows', 'f128' => 'compare', 'f130' => 'search', 'f13f' => 'ruler', 'f144' => 'home', 'f146' => 'shop', 'f147' => 'cart-empty', 'f911' => 'cart-verified', 'f148' => 'star', 'f149' => 'star-empty', 'f15a' => 'menu', 'f15c' => 'menu-filters', 'f182' => 'bundle', 'f183' => 'map-pointer', 'f906' => 'like', 'f907' => 'dislike', 'f11d' => 'fire', 'f11a' => 'eye', 'f11b' => 'eye-disable', 'f116' => 'edit', 'f117' => 'social', 'f103' => 'comment', 'f104' => 'paperclip', 'f145' => 'blog', 'f11c' => 'external-link', 'f131' => 'quote', 'f900' => 'list-view', 'f901' => 'grid-view-2', 'f902' => 'grid-view-3', 'f903' => 'grid-view-4', 'f904' => 'grid-view-5', 'f905' => 'grid-view-6', 'f134' => 'account-wishlist', 'f135' => 'account-details', 'f136' => 'account-download', 'f137' => 'account-exit', 'f138' => 'account-orders', 'f139' => 'account-address', 'f140' => 'account-other', 'f142' => 'account-payment', 'f157' => 'envelope-solid', 'f133' => 'tik-tok-brands', 'f154' => 'twitter-brands', 'f155' => 'github-brands', 'f156' => 'pinterest-brands', 'f158' => 'linkedin-brands', 'f162' => 'youtube-brands', 'f163' => 'instagram-brands', 'f164' => 'flickr-brands', 'f165' => 'tumblr-brands', 'f166' => 'dribbble-brands', 'f167' => 'skype-brands', 'f168' => 'vk-brands', 'f169' => 'google-brands', 'f170' => 'behance-brands', 'f171' => 'spotify-brands', 'f172' => 'soundcloud-brands', 'f174' => 'facebook-square-brands', 'f176' => 'odnoklassniki-brands', 'f177' => 'vimeo-v-brands', 'f178' => 'snapchat-ghost-brands', 'f179' => 'telegram-brands', 'f180' => 'facebook-f-brands', 'f181' => 'viber-brands', 'f175' => 'whatsapp-brands', 'f184' => 'discord-brands');
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
        /**
         * Preview icons.
         *
         * @return void
         */
        public function preview_icons()
        {
        }
        /**
         * Enqueue.
         *
         * @since 1.0.0
         */
        public function enqueue()
        {
        }
    }
    /**
     * Responsive Range slider control.
     */
    class Responsive_Range extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
        /**
         * Output field's css code based on the settings.
         *
         * @since 1.0.0
         *
         * @return string $output Generated CSS code.
         */
        public function css_output()
        {
        }
        /**
         * Enqueue slider jquery ui.
         *
         * @since 1.0.0
         */
        public function enqueue()
        {
        }
    }
    /**
     * Checkbox field control.
     */
    class Checkbox extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
    }
    /**
     * Editor class.
     */
    class Editor extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
    }
    /**
     * Switcher field control.
     */
    class Switcher extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
    }
    /**
     * Textarea field control.
     */
    class Sorter extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
        /**
         * Enqueue media lib.
         *
         * @since 1.0.0
         */
        public function enqueue()
        {
        }
    }
    /**
     * Upload list button.
     */
    class Upload_List extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
        /**
         * Check value URl and ID fields.
         *
         * @since 1.0.0
         *
         * @param string or array $value Field value.
         *
         * @return mixed
         */
        public function validate($value)
        {
        }
        /**
         * Enqueue media lib.
         *
         * @since 1.0.0
         */
        public function enqueue()
        {
        }
    }
    /**
     * Notice control.
     */
    class Notice extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
    }
    /**
     * Input type text field control.
     */
    class Instagram_Api extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
        /**
         *
         */
        public function connect()
        {
        }
        /**
         *
         */
        public function disconnect()
        {
        }
        /**
         * @return string
         */
        public function get_return_url()
        {
        }
        /**
         * @return string
         */
        public function get_link()
        {
        }
        /**
         *
         */
        public function show_connected_account()
        {
        }
        /**
         * @return array|void
         */
        public function get_connected_account_data()
        {
        }
    }
    /**
     * Class for typography settings control.
     */
    class Typography extends \XTS\Options\Field
    {
        /**
         * Google fonts array.
         *
         * @since 1.0.0
         *
         * @var array
         */
        public $google_fonts = array();
        /**
         * Construct the object.
         *
         * @since 1.0.0
         *
         * @param array  $args     Field args array.
         * @param array  $options  Options from the database.
         * @param string $type     Field type.
         * @param string $object   Object.
         */
        public function __construct($args, $options, $type = 'options', $object = 'post')
        {
        }
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
        /**
         * Renders one typography settings section based on index.
         *
         * @since 1.0.0
         *
         * @param integer $index  Section index.
         *
         * @return void.
         */
        public function render_section($index)
        {
        }
        /**
         * Displays the section template.
         *
         * @since 1.0.0
         *
         * @param integer $i  Section index.
         * @param array   $data  Section data.
         *
         * @return void.
         */
        public function section_template($i, $data = array())
        {
        }
        /**
         * Enqueue colorpicker lib.
         *
         * @since 1.0.0
         */
        public function enqueue()
        {
        }
        /**
         * Frontend enqueue .
         *
         * @since 1.0.0
         */
        public function frontend_enqueue()
        {
        }
        /**
         * Add google fonts
         *
         * @since 1.0.0
         */
        public function add_google_fonts()
        {
        }
        /**
         * Output field's css code based on the settings.
         *
         * @since 1.0.0
         *
         * @param string $key Key.
         * @param array  $typography Typography.
         *
         * @return string $output Generated CSS code.
         */
        public function generate_var_css_code($key, $typography)
        {
        }
        /**
         * Output field's css code based on the settings.
         *
         * @since 1.0.0
         *
         * @return string $output Generated CSS code.
         */
        public function css_output()
        {
        }
    }
    /**
     * Switcher field control.
     */
    class Select extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
        /**
         * Get default control template.
         *
         * @since 1.0.0
         *
         * @param array $options Available options.
         */
        public function get_default_control($options)
        {
        }
        /**
         * Enqueue colorpicker lib.
         *
         * @since 1.0.0
         */
        public function enqueue()
        {
        }
    }
    /**
     * Input type text field control.
     */
    class Text_Input extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
    }
    /**
     * Range slider control.
     */
    class Range extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
        /**
         * Enqueue slider jquery ui.
         *
         * @since 1.0.0
         */
        public function enqueue()
        {
        }
    }
    /**
     * Background properties control.
     */
    class Background extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
        /**
         * Enqueue colorpicker lib.
         *
         * @since 1.0.0
         */
        public function enqueue()
        {
        }
        /**
         * Output field's css code based on the settings..
         *
         * @since 1.0.0
         *
         * @return  string $output Generated CSS code.
         */
        public function css_output()
        {
        }
        /**
         * Check value URl and ID fields.
         *
         * @since 1.0.0
         *
         * @param  string or array $value Field value.
         */
        public function validate($value)
        {
        }
    }
    /**
     * Textarea field control.
     */
    class Reset extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
    }
    /**
     * Switcher field control.
     */
    class Select_With_Table extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
        /**
         * Get select control.
         *
         * @param string $value Value.
         * @param string $name Name.
         *
         * @return void
         */
        protected function get_select($value, $name)
        {
        }
        /**
         * Enqueue lib.
         *
         * @since 1.0.0
         */
        public function enqueue()
        {
        }
    }
    /**
     * Upload button.
     */
    class Upload extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
        /**
         * Check value URl and ID fields.
         *
         * @since 1.0.0
         *
         * @param  string or array $value Field value.
         */
        public function validate($value)
        {
        }
        /**
         * Enqueue media lib.
         *
         * @since 1.0.0
         */
        public function enqueue()
        {
        }
    }
    /**
     * Switcher field control.
     */
    class Buttons extends \XTS\Options\Field
    {
        /**
         * Contruct the object.
         *
         * @since 1.0.0
         *
         * @param array  $args Field args array.
         * @param arary  $options Options from the database.
         * @param string $type Field type.
         * @param string $object Field object.
         */
        public function __construct($args, $options, $type = 'options', $object = 'post')
        {
        }
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
    }
    /**
     * Import and export theme options control class.
     */
    class Import extends \XTS\Options\Field
    {
        /**
         * Contruct the object.
         *
         * @since 1.0.0
         *
         * @param array  $args     Field args array.
         * @param arary  $options  Options from the database.
         * @param string $type     Field type.
         * @param string $object   Post or term.
         */
        public function __construct($args, $options, $type = 'options', $object = 'post')
        {
        }
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @param string $subkey Subkey value.
         */
        public function get_field_value($subkey = false)
        {
        }
        /**
         * Download options export.
         *
         * @since 1.0.0
         */
        public function download_options_export()
        {
        }
        /**
         * Generate secret key.
         *
         * @since 1.0.0
         */
        public function generete_secret()
        {
        }
        /**
         * Get options json.
         *
         * @since 1.0.0
         */
        public function get_options_json()
        {
        }
    }
    /**
     * Textarea field control.
     */
    class Textarea extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
    }
    /**
     * Input type text field control.
     */
    class Image_Dimensions extends \XTS\Options\Field
    {
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         *
         * @return void.
         */
        public function render_control()
        {
        }
    }
    /**
     * Custom fonts control class.
     */
    class Custom_Fonts extends \XTS\Options\Field
    {
        /**
         * Contruct the object.
         *
         * @since 1.0.0
         *
         * @param array  $args     Field args array.
         * @param array  $options  Options from the database.
         * @param string $type     Field type.
         * @param string $object   Object.
         */
        public function __construct($args, $options, $type = 'options', $object = 'post')
        {
        }
        /**
         * Displays the field control HTML.
         *
         * @since 1.0.0
         */
        public function render_control()
        {
        }
        /**
         * Renders one typography settings section based on index.
         *
         * @since 1.0.0
         *
         * @param integer $index  Section index.
         */
        public function render_section($index)
        {
        }
        /**
         * Displays the section template.
         *
         * @since 1.0.0
         *
         * @param integer $index  Section index.
         * @param array   $section_value  Section data.
         */
        public function section_template($index, $section_value)
        {
        }
        /**
         * Displays the upload field template.
         *
         * @since 1.0.0
         *
         * @param string $title Field title.
         * @param array  $values Field values.
         * @param array  $name Field name.
         */
        public function upload_template($title, $values, $name)
        {
        }
    }
}
namespace XTS\Import {
    /**
     * Import remove.
     */
    class Remove extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Remove options in no data to remove.
         */
        public function remove_options()
        {
        }
        /**
         * Remove action.
         */
        public function remove_action()
        {
        }
        /**
         * Interface.
         */
        public function render()
        {
        }
        /**
         * Popup content.
         *
         * @param bool   $ajax   In AJAX.
         * @param string $action Action name.
         *
         * @return false|string|void
         */
        public function popup_content($ajax, $action)
        {
        }
        /**
         * Has data to remove.
         *
         * @return array|bool
         */
        public function has_data_to_remove()
        {
        }
    }
    /**
     * Import options.
     */
    class Options
    {
        /**
         * Constructor.
         *
         * @param string $version Version name.
         */
        public function __construct($version, $type)
        {
        }
    }
    /**
     * Import sliders.
     */
    class Sliders
    {
        /**
         * Constructor.
         *
         * @param string $version Version name.
         */
        public function __construct($version)
        {
        }
    }
    /**
     * Import before.
     */
    class Before extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
    }
    /**
     * Import.
     */
    class Import extends \XTS\Singleton
    {
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Import action.
         */
        public function import_action()
        {
        }
        /**
         * Get categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get all category count by type.
         *
         * @param string $count_type Count type.
         *
         * @return int|mixed
         */
        public function get_all_category_count($count_type)
        {
        }
        /**
         * Interface.
         */
        public function render()
        {
        }
        /**
         * Is version imported.
         *
         * @param string $slug Slug.
         *
         * @return bool
         */
        public function is_imported($slug)
        {
        }
    }
    /**
     * Import after.
     */
    class After extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Change header on pages
         */
        public function change_header_on_pages()
        {
        }
        /**
         * Remove uncategorized cat.
         */
        public function wc_remove_uncategorized_cat()
        {
        }
        /**
         * Set pages sidebar.
         */
        public function set_pages_sidebar()
        {
        }
        /**
         * Update product lookup tables.
         */
        public function update_product_lookup_tables()
        {
        }
        /**
         * Set menu locations.
         */
        public function set_menu_locations()
        {
        }
        /**
         * Set blog page.
         */
        public function set_blog_page()
        {
        }
        /**
         * Enable wpb on custom post types.
         */
        public function enable_wpb_on_custom_post_types()
        {
        }
        /**
         * Enable elementor on custom post types.
         */
        public function enable_elementor_on_custom_post_types()
        {
        }
        /**
         * Show all fields menu.
         */
        public function show_all_fields_menu()
        {
        }
        /**
         * Enable register.
         */
        public function enable_myaccount_registration()
        {
        }
        /**
         * Replace URL.
         */
        public function replace_db_urls()
        {
        }
        /**
         * Replace URLs.
         *
         * Replace old URLs to new URLs. This method also updates all the Elementor data.
         *
         * @param string $from From url.
         * @param string $to   To url.
         *
         * @throws Exception Exception.
         */
        public function replace_urls_menu_items($from, $to)
        {
        }
        /**
         * Replace URLs.
         *
         * Replace old URLs to new URLs. This method also updates all the Elementor data.
         *
         * @param string $from From url.
         * @param string $to   To url.
         *
         * @throws Exception Exception.
         */
        public function wpb_replace_urls($from, $to)
        {
        }
        /**
         * Set shop page.
         */
        public function set_shop_page()
        {
        }
    }
    /**
     * Import menu.
     */
    class Menu
    {
        /**
         * Constructor.
         *
         * @param string $version Version name.
         */
        public function __construct($version)
        {
        }
        /**
         * Add default pages to menu.
         */
        public function add_default_pages_to_menu()
        {
        }
        /**
         * Set home page.
         */
        public function set_home_page()
        {
        }
        /**
         * Add menu item by title.
         *
         * @param string $title    Param.
         * @param false  $position Param.
         * @param string $menu     Param.
         * @param array  $meta     Param.
         *
         * @return int|string
         */
        public function add_menu_item_by_title($title, $position = false, $menu = 'main', $meta = array())
        {
        }
    }
    /**
     * Import helpers.
     */
    class Helpers extends \XTS\Singleton
    {
        /**
         * Links to replace.
         *
         * @var array
         */
        public $links = array('uploads' => array('http://dummy.xtemos.com/woodmart2/elementor/wp-content/uploads/sites/2/', 'https://dummy.xtemos.com/woodmart2/elementor/wp-content/uploads/sites/2/', 'http://dummy.xtemos.com/woodmart2/megamarket-elementor/wp-content/uploads/sites/4/', 'https://dummy.xtemos.com/woodmart2/megamarket-elementor/wp-content/uploads/sites/4/', 'http://dummy.xtemos.com/woodmart2/megamarket/wp-content/uploads/sites/3/', 'https://dummy.xtemos.com/woodmart2/megamarket/wp-content/uploads/sites/3/', 'http://dummy.xtemos.com/woodmart2/accessories-elementor/wp-content/uploads/sites/6/', 'https://dummy.xtemos.com/woodmart2/accessories-elementor/wp-content/uploads/sites/6/', 'http://dummy.xtemos.com/woodmart2/accessories/wp-content/uploads/sites/5/', 'https://dummy.xtemos.com/woodmart2/accessories/wp-content/uploads/sites/5/', 'http://dummy.xtemos.com/woodmart2/mega-electronics-elementor/wp-content/uploads/sites/8/', 'https://dummy.xtemos.com/woodmart2/mega-electronics-elementor/wp-content/uploads/sites/8/', 'http://dummy.xtemos.com/woodmart2/mega-electronics/wp-content/uploads/sites/7/', 'https://dummy.xtemos.com/woodmart2/mega-electronics/wp-content/uploads/sites/7/', 'http://dummy.xtemos.com/woodmart2/furniture2-elementor/wp-content/uploads/sites/10/', 'https://dummy.xtemos.com/woodmart2/furniture2-elementor/wp-content/uploads/sites/10/', 'http://dummy.xtemos.com/woodmart2/furniture2/wp-content/uploads/sites/9/', 'https://dummy.xtemos.com/woodmart2/furniture2/wp-content/uploads/sites/9/', 'http://dummy.xtemos.com/woodmart2/plants-elementor/wp-content/uploads/sites/12/', 'https://dummy.xtemos.com/woodmart2/plants-elementor/wp-content/uploads/sites/12/', 'http://dummy.xtemos.com/woodmart2/plants/wp-content/uploads/sites/11/', 'https://dummy.xtemos.com/woodmart2/plants/wp-content/uploads/sites/11/', 'http://dummy.xtemos.com/woodmart2/kids-elementor/wp-content/uploads/sites/14/', 'https://dummy.xtemos.com/woodmart2/kids-elementor/wp-content/uploads/sites/14/', 'http://dummy.xtemos.com/woodmart2/kids/wp-content/uploads/sites/13/', 'https://dummy.xtemos.com/woodmart2/kids/wp-content/uploads/sites/13/', 'http://dummy.xtemos.com/woodmart2/games-elementor/wp-content/uploads/sites/16/', 'https://dummy.xtemos.com/woodmart2/games-elementor/wp-content/uploads/sites/16/', 'http://dummy.xtemos.com/woodmart2/games/wp-content/uploads/sites/15/', 'https://dummy.xtemos.com/woodmart2/games/wp-content/uploads/sites/15/', 'http://dummy.xtemos.com/woodmart2/wp-content/uploads/', 'https://dummy.xtemos.com/woodmart2/wp-content/uploads/', 'http://woodmart.xtemos.com/wp-content/uploads/', 'https://woodmart.xtemos.com/wp-content/uploads/'), 'simple' => array('http://dummy.xtemos.com/woodmart2/megamarket-elementor/', 'https://dummy.xtemos.com/woodmart2/megamarket-elementor/', 'http://dummy.xtemos.com/woodmart2/megamarket/', 'https://dummy.xtemos.com/woodmart2/megamarket/', 'http://dummy.xtemos.com/woodmart2/accessories-elementor/', 'https://dummy.xtemos.com/woodmart2/accessories-elementor/', 'http://dummy.xtemos.com/woodmart2/accessories/', 'https://dummy.xtemos.com/woodmart2/accessories/', 'http://dummy.xtemos.com/woodmart2/mega-electronics-elementor/', 'https://dummy.xtemos.com/woodmart2/mega-electronics-elementor/', 'http://dummy.xtemos.com/woodmart2/mega-electronics/', 'https://dummy.xtemos.com/woodmart2/mega-electronics/', 'http://dummy.xtemos.com/woodmart2/furniture2-elementor/', 'https://dummy.xtemos.com/woodmart2/furniture2-elementor/', 'http://dummy.xtemos.com/woodmart2/furniture2/', 'https://dummy.xtemos.com/woodmart2/furniture2/', 'http://dummy.xtemos.com/woodmart2/plants-elementor/', 'https://dummy.xtemos.com/woodmart2/plants-elementor/', 'http://dummy.xtemos.com/woodmart2/plants/', 'https://dummy.xtemos.com/woodmart2/plants/', 'http://dummy.xtemos.com/woodmart2/kids-elementor/', 'https://dummy.xtemos.com/woodmart2/kids-elementor/', 'http://dummy.xtemos.com/woodmart2/kids/', 'https://dummy.xtemos.com/woodmart2/kids/', 'http://dummy.xtemos.com/woodmart2/games-elementor/', 'https://dummy.xtemos.com/woodmart2/games-elementor/', 'http://dummy.xtemos.com/woodmart2/games/', 'https://dummy.xtemos.com/woodmart2/games/', 'http://dummy.xtemos.com/woodmart2/elementor/', 'https://dummy.xtemos.com/woodmart2/elementor/', 'http://dummy.xtemos.com/woodmart2/', 'https://dummy.xtemos.com/woodmart2/', 'https://woodmart.xtemos.com/', 'http://woodmart.xtemos.com/'));
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Send error.
         *
         * @param string $message Message.
         */
        public function send_error_message($message)
        {
        }
        /**
         * Send success.
         *
         * @param string $message Message.
         */
        public function send_success_message($message)
        {
        }
        /**
         * Send message.
         *
         * @param string $status  Status.
         * @param string $message Message.
         */
        public function send_message($status, $message)
        {
        }
        /**
         * Get file data.
         *
         * @param string $path File path.
         *
         * @return false|string
         */
        public function get_local_file_content($path)
        {
        }
        /**
         * Get file path.
         *
         * @param string $file_name File name.
         * @param string $version   Version name.
         *
         * @return false|string
         */
        public function get_file_path($file_name, $version)
        {
        }
        /**
         * Get version folder path.
         *
         * @param string $version Version name.
         *
         * @return string
         */
        public function get_version_folder_path($version)
        {
        }
        /**
         * Replace link.
         *
         * @since 1.0.0
         *
         * @param string $data    Data.
         * @param string $replace Replace.
         *
         * @return string|string[]
         */
        public function links_replace($data, $replace = '\\/')
        {
        }
        /**
         * Get imported data.
         *
         * @since 1.0.0
         *
         * @param string $version Version name.
         *
         * @return array
         */
        public function get_imported_data($version)
        {
        }
        /**
         * Get base version for import.
         *
         * @return array
         */
        public function get_base_version()
        {
        }
    }
    /**
     * Import widgets.
     */
    class Widgets
    {
        /**
         * Constructor.
         *
         * @param string $version Version name.
         */
        public function __construct($version)
        {
        }
    }
    /**
     * Import headers.
     */
    class Headers
    {
        /**
         * Constructor.
         *
         * @param string $version Version name.
         */
        public function __construct($version)
        {
        }
    }
    /**
     * Import process.
     */
    class Process
    {
        /**
         * Constructor.
         *
         * @param string $version Version slug.
         */
        public function __construct($version, $current_process, $type)
        {
        }
        /**
         * Run import.
         */
        public function run_import()
        {
        }
    }
    /**
     * Import XML.
     */
    class XML
    {
        /**
         * Constructor.
         *
         * @param string $version Version name.
         * @param string $type    File type.
         */
        public function __construct($version, $type)
        {
        }
    }
    /**
     * Import images.
     */
    class Images
    {
        /**
         * Constructor.
         *
         * @param string $version Version name.
         */
        public function __construct($version)
        {
        }
    }
}
namespace XTS\Inc\Admin\Dashboard {
    class Slider extends \XTS\Singleton
    {
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Hooks.
         */
        public function hooks()
        {
        }
        /**
         * Enqueue script.
         *
         * @param object $post Post.
         */
        public function enqueue_script($post)
        {
        }
        /**
         * Add slides to slider list.
         */
        public function get_slides_data()
        {
        }
        /**
         * Add slides list to slider.
         *
         * @param object $tag Term object.
         */
        public function add_slides_to_slider_page($tag)
        {
        }
    }
    class Dashboard extends \XTS\Singleton
    {
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Hooks.
         */
        public function hooks()
        {
        }
        /**
         * Get logo url.
         *
         * @return string
         */
        protected function get_logo_url()
        {
        }
        /**
         * Get theme name.
         *
         * @return string
         */
        protected function get_theme_name()
        {
        }
        /**
         * Add theme settings links to the admin bar.
         *
         * @since 1.0.0
         *
         * @param object $admin_bar Admin bar object.
         */
        public function add_pages_to_admin_bar_menu($admin_bar)
        {
        }
        /**
         * Add pages to dashboard menu.
         */
        public function add_pages_to_dashboard_menu()
        {
        }
        /**
         * Get page content callback.
         */
        public function page_content()
        {
        }
        /**
         * Get allowed pages.
         *
         * @return array
         */
        protected function get_allowed_pages()
        {
        }
        /**
         * Get allowed post types.
         *
         * @return array
         */
        protected function get_allowed_post_types()
        {
        }
        /**
         * Print header.
         *
         * @param array $views Views.
         *
         * @return array|false
         */
        public function print_header($views = false)
        {
        }
        /**
         * Print footer.
         */
        public function print_footer()
        {
        }
        /**
         * Print template file.
         *
         * @param string $name Template name.
         */
        public function print_template($name)
        {
        }
        /**
         * Add custom class to body.
         *
         * @param string $classes Body classes.
         *
         * @return string
         */
        public function admin_body_classes($classes)
        {
        }
    }
    class Menu
    {
        /**
         * Constructor.
         */
        public function __construct($config)
        {
        }
        protected function get_menu($config, $child_menu = false)
        {
        }
        protected function get_menu_item($item_data)
        {
        }
        protected function get_active_classes($item_data, $active_class)
        {
        }
        /**
         * Check whether there are menu items that meet the conditions.
         *
         * @param $conditions
         *
         * @return bool
         */
        protected function check_show_items($conditions)
        {
        }
    }
}
namespace XTS {
    /**
     * Setup wizard class.
     */
    class Setup_Wizard extends \XTS\Singleton
    {
        /**
         * Available pages.
         *
         * @var array
         */
        public $available_pages = array();
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Prevent plugins redirect.
         */
        public function prevent_plugins_redirect()
        {
        }
        /**
         * Hubspot affiliate.
         */
        public function get_hubspot_affiliate_code()
        {
        }
        /**
         * Redirect to setup wizard after theme activated.
         */
        public function theme_activation_redirect()
        {
        }
        /**
         * Template.
         */
        public function setup_wizard_template()
        {
        }
        /**
         * Show page.
         *
         * @param string $name Template file name.
         */
        public function show_page($name)
        {
        }
        /**
         * Get previous page button.
         *
         * @param string $page Page slug.
         */
        public function get_prev_button($page)
        {
        }
        /**
         * Get previous page button.
         *
         * @param string  $page Page slug.
         * @param string  $builder Builder name.
         * @param boolean $disabled Is button disabled.
         */
        public function get_next_button($page, $builder = '', $disabled = false)
        {
        }
        /**
         * Get skip page button.
         *
         * @param string $page Page slug.
         */
        public function get_skip_button($page)
        {
        }
        /**
         * Show template part.
         *
         * @param string $name Template file name.
         */
        public function show_part($name)
        {
        }
        /**
         * Is active page.
         *
         * @param string $name Page name.
         */
        public function is_active_page($name)
        {
        }
        /**
         * Get page url.
         *
         * @param string $name Page name.
         */
        public function get_page_url($name)
        {
        }
        /**
         * Get image url.
         *
         * @param string $name Image name.
         */
        public function get_image_url($name)
        {
        }
        /**
         * Get plugin image url.
         *
         * @param string $name Image name.
         */
        public function get_plugin_image_url($name)
        {
        }
        /**
         * Is setup wizard.
         *
         * @return bool
         */
        public function is_setup()
        {
        }
    }
    /**
     * Install plugins class
     *
     * @since 1.0.0
     */
    class Install_Plugins extends \XTS\Singleton
    {
        /**
         * Register hooks and load base data.
         *
         * @since 1.0.0
         */
        public function init()
        {
        }
        /**
         * Deactivate plugin.
         *
         * @since 1.0.0
         */
        public function ajax_deactivate_plugin()
        {
        }
        /**
         * Check plugin.
         *
         * @since 1.0.0
         */
        public function ajax_check_plugin()
        {
        }
        /**
         * Load TGM.
         *
         * @since 1.0.0
         */
        public function tgmpa_load()
        {
        }
        /**
         * Get plugins list array.
         *
         * @since 1.0.0
         */
        public function get_plugins()
        {
        }
        /**
         * Get required plugins to activate.
         *
         * @since 1.0.0
         */
        public function get_required_plugins_to_activate()
        {
        }
        /**
         * Is all plugins activated.
         *
         * @since 1.0.0
         */
        public function is_all_activated()
        {
        }
        /**
         * Get required plugins to activate.
         *
         * @since 1.0.0
         *
         * @param string $slug   Slug.
         * @param string $status Status.
         *
         * @return string
         */
        public function get_action_url($slug, $status)
        {
        }
        /**
         * Get required plugins to activate.
         *
         * @since 1.0.0
         *
         * @param string $status Status.
         *
         * @return string
         */
        public function get_action_text($status)
        {
        }
    }
    /**
     * Install child theme class.
     */
    class Install_Child_Theme extends \XTS\Singleton
    {
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Install child theme.
         */
        public function install_child_theme()
        {
        }
    }
}
namespace {
    class WPBakeryShortCode_products_tabs extends \WPBakeryShortCodesContainer
    {
    }
    class WPBakeryShortCode_products_tab extends \WPBakeryShortCode
    {
    }
    class WPBakeryShortCode_woodmart_open_street_map extends \WPBakeryShortCodesContainer
    {
        // phpcs:ignore.
    }
    /**
     * Create woodmart nested carousel wrapper.
     */
    class WPBakeryShortCode_woodmart_nested_carousel extends \WPBakeryShortCodesContainer
    {
    }
    // phpcs:ignore.
    /**
     * Create woodmart nested carousel item.
     */
    class WPBakeryShortCode_woodmart_nested_carousel_item extends \WPBakeryShortCodesContainer
    {
    }
    class WPBakeryShortCode_woodmart_product_filters extends \WPBakeryShortCodesContainer
    {
    }
    class WPBakeryShortCode_woodmart_filter_categories extends \WPBakeryShortCode
    {
    }
    class WPBakeryShortCode_woodmart_filters_attribute extends \WPBakeryShortCode
    {
    }
    class WPBakeryShortCode_woodmart_filters_price_slider extends \WPBakeryShortCode
    {
    }
    class WPBakeryShortCode_woodmart_filters_orderby extends \WPBakeryShortCode
    {
    }
    class WPBakeryShortCode_woodmart_stock_status extends \WPBakeryShortCode
    {
    }
    class WPBakeryShortCode_pricing_tables extends \WPBakeryShortCodesContainer
    {
    }
    class WPBakeryShortCode_pricing_plan extends \WPBakeryShortCode
    {
    }
    class WPBakeryShortCode_extra_menu extends \WPBakeryShortCodesContainer
    {
    }
    class WPBakeryShortCode_extra_menu_list extends \WPBakeryShortCode
    {
    }
    class WPBakeryShortCode_testimonials extends \WPBakeryShortCodesContainer
    {
    }
    class WPBakeryShortCode_testimonial extends \WPBakeryShortCode
    {
    }
    class WPBakeryShortCode_woodmart_google_map extends \WPBakeryShortCodesContainer
    {
        // phpcs:ignore.
    }
    class WPBakeryShortCode_banners_carousel extends \WPBakeryShortCodesContainer
    {
    }
    class WPBakeryShortCode_woodmart_info_box_carousel extends \WPBakeryShortCodesContainer
    {
    }
    class WPBakeryShortCode_woodmart_info_box extends \WPBakeryShortCode
    {
    }
    class WPBakeryShortCode_woodmart_image_hotspot extends \WPBakeryShortCodesContainer
    {
    }
    class WPBakeryShortCode_woodmart_hotspot extends \WPBakeryShortCode
    {
    }
    /**
     * Create woodmart tabs wrapper.
     */
    class WPBakeryShortCode_woodmart_tabs extends \WPBakeryShortCodesContainer
    {
    }
    class WPBakeryShortCode_woodmart_timeline extends \WPBakeryShortCodesContainer
    {
    }
    class WPBakeryShortCode_woodmart_timeline_item extends \WPBakeryShortCode
    {
    }
    class WPBakeryShortCode_woodmart_table extends \WPBakeryShortCodesContainer
    {
    }
    class WPBakeryShortCode_woodmart_table_row extends \WPBakeryShortCode
    {
    }
    class WPBakeryShortCode_woodmart_popup extends \WPBakeryShortCodesContainer
    {
    }
    /**
     * Create woodmart accordion wrapper.
     */
    class WPBakeryShortCode_woodmart_accordion extends \WPBakeryShortCodesContainer
    {
    }
}
namespace XTS\Elementor {
    /**
     * Elementor module.
     *
     * @package Woodmart
     */
    class Elementor extends \XTS\Singleton
    {
        /**
         * Register new controls.
         *
         * @since 1.0.0
         */
        public function init()
        {
        }
        /**
         * Register new controls.
         *
         * @since 1.0.0
         */
        function files_include()
        {
        }
        /**
         * Register new controls.
         *
         * @since 1.0.0
         */
        function register_controls(\Elementor\Controls_Manager $controls_manager)
        {
        }
        /**
         * Add theme widget categories
         *
         * @param Elements_Manager $elements_manager Elements manager instance.
         */
        public function add_widget_categories($elements_manager)
        {
        }
        /**
         * Register new controls.
         *
         * @since 1.0.0
         */
        public function register_widgets()
        {
        }
    }
    /**
     * XTS template library.
     *
     * @since 1.0.0
     */
    class XTS_Library
    {
        /**
         * Object constructor. Init basic things.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Initialize Hooks
         *
         * @since 1.0.0
         */
        public function hooks()
        {
        }
        /**
         * Register source.
         *
         * @since 1.0.0
         */
        public function register_templates_source()
        {
        }
        /**
         * Load Editor JS
         *
         * @since 1.0.0
         */
        public function editor_scripts()
        {
        }
        /**
         * Templates Modal Markup
         *
         * @since 1.0.0
         */
        public function html_templates()
        {
        }
    }
    /**
     * XTS template library source.
     *
     * @since 1.0.0
     */
    class XTS_Library_Source extends \Elementor\TemplateLibrary\Source_Base
    {
        /**
         * Get remote template ID.
         *
         * Retrieve the remote template ID.
         *
         * @since 1.0.0
         *
         * @return string The remote template ID.
         */
        public function get_id()
        {
        }
        /**
         * Get remote template title.
         *
         * Retrieve the remote template title.
         *
         * @since 1.0.0
         *
         * @return string The remote template title.
         */
        public function get_title()
        {
        }
        /**
         * Register remote template data.
         *
         * Used to register custom template data like a post type, a taxonomy or any
         * other data.
         *
         * @since 1.0.0
         */
        public function register_data()
        {
        }
        /**
         * Get remote templates.
         *
         * Retrieve remote templates from Elementor.com servers.
         *
         * @since 1.0.0
         *
         * @param array $args Optional. Nou used in remote source.
         *
         * @return array Remote templates.
         */
        public function get_items($args = [])
        {
        }
        /**
         * Get remote template.
         *
         * Retrieve a single remote template from Elementor.com servers.
         *
         * @since 1.0.0
         *
         * @param int $template_id The template ID.
         *
         * @return array Remote template.
         */
        public function get_item($template_id)
        {
        }
        /**
         * Get remote template data.
         *
         * Retrieve the data of a single remote template from Elementor.com servers.
         *
         * @since 1.0.0
         *
         * @param  array  $args  Custom template arguments.
         * @param  string  $context  Optional. The context. Default is `display`.
         *
         * @return array|WP_Error Remote Template data.
         * @throws Exception
         */
        public function get_data(array $args, $context = 'display')
        {
        }
        public function replace_elements_ids_public($data)
        {
        }
        public function process_export_import_content_public($data, $method)
        {
        }
        /**
         * Save remote template.
         *
         * Remote template from Elementor.com servers cannot be saved on the
         * database as they are retrieved from remote servers.
         *
         * @since 1.0.0
         *
         * @param array $template_data Remote template data.
         *
         * @return WP_Error
         */
        public function save_item($template_data)
        {
        }
        /**
         * Update remote template.
         *
         * Remote template from Elementor.com servers cannot be updated on the
         * database as they are retrieved from remote servers.
         *
         * @since 1.0.0
         *
         * @param array $new_data New template data.
         *
         * @return WP_Error
         */
        public function update_item($new_data)
        {
        }
        /**
         * Delete remote template.
         *
         * Remote template from Elementor.com servers cannot be deleted from the
         * database as they are retrieved from remote servers.
         *
         * @since 1.0.0
         *
         * @param int $template_id The template ID.
         *
         * @return WP_Error
         */
        public function delete_template($template_id)
        {
        }
        /**
         * Export remote template.
         *
         * Remote template from Elementor.com servers cannot be exported from the
         * database as they are retrieved from remote servers.
         *
         * @since 1.0.0
         *
         * @param int $template_id The template ID.
         *
         * @return WP_Error
         */
        public function export_template($template_id)
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Size_Guide extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Contact_Form_7 extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get contact forms.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Contact forms.
         */
        public function get_contact_forms()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Menu_Anchor extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Slider extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_sliders()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Author_Area extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Products_Brands extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Social extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Testimonials extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since  1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since  1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since  1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Extra_Menu_List extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Search extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         * @since 1.0.0
         * @access public
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         * @since 1.0.0
         * @access public
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         * @since 1.0.0
         * @access public
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         * @since 1.0.0
         * @access public
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Google_Map extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Wishlist extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Button extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Video extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since  1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since  1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since  1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Banner_Carousel extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Banner extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Title extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Products_Tabs extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get attribute taxonomies
         *
         * @since 1.0.0
         */
        public function get_product_attributes_array()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Pricing_Tables extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that adds accordion.
     */
    class Accordion extends \Elementor\Widget_Base
    {
        /***
         * This method return a widget name that will be used in the code.
         *
         * @return string widget name.
         */
        public function get_name()
        {
        }
        /***
         * This method return the widget title that will be displayed as the widget label.
         *
         * @return string widget title.
         */
        public function get_title()
        {
        }
        /***
         * This method set the widget icon.
         *
         * @return string widget icon.
         */
        public function get_icon()
        {
        }
        /***
         * This method lets you set the category of the widget.
         *
         * @return array the category name.
         */
        public function get_categories()
        {
        }
        /**
         * This method lets you define which controls (setting fields) your widget will have.
         */
        protected function register_controls()
        {
        }
        /***
         * This method render the code and generate the final HTML on the frontend using PHP.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Infobox_Carousel extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Infobox extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         * @since 1.0.0
         * @access public
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         * @since 1.0.0
         * @access public
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         * @since 1.0.0
         * @access public
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         * @since 1.0.0
         * @access public
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Table extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since  1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since  1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since  1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Product_Filters extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get product attributes.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_attributes()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Retrieve the list of script dependencies the element requires.
         *
         * @return array Element scripts dependencies.
         */
        public function get_script_depends()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
        public function price_filter_template($settings)
        {
        }
        public function stock_filter_template($settings)
        {
        }
        public function orderby_filter_template($settings)
        {
        }
        public function attributes_filter_template($settings)
        {
        }
        public function categories_filter_template($settings)
        {
        }
    }
    /**
     * Elementor widget that adds tabs.
     */
    class Tabs extends \Elementor\Widget_Base
    {
        /***
         * This method return a widget name that will be used in the code.
         *
         * @return string widget name.
         */
        public function get_name()
        {
        }
        /***
         * This method return the widget title that will be displayed as the widget label.
         *
         * @return string widget title.
         */
        public function get_title()
        {
        }
        /***
         * This method set the widget icon.
         *
         * @return string widget icon.
         */
        public function get_icon()
        {
        }
        /***
         * This method lets you set the category of the widget.
         *
         * @return array the category name.
         */
        public function get_categories()
        {
        }
        /***
         * This method lets you define which controls (setting fields) your widget will have.
         */
        protected function register_controls()
        {
        }
        /***
         * This method render the code and generate the final HTML on the frontend using PHP.
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Menu_Price extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Portfolio extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Instagram extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since  1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since  1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since  1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Nested_Carousel extends \Elementor\Modules\NestedElements\Base\Widget_Nested_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        public function show_in_panel() : bool
        {
        }
        protected function slide_content_container(int $index)
        {
        }
        protected function get_default_children_elements()
        {
        }
        protected function get_default_repeater_title_setting_key()
        {
        }
        protected function get_default_children_title()
        {
        }
        protected function get_default_children_placeholder_selector()
        {
        }
        protected function get_html_wrapper_class()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        public function get_owl_atts()
        {
        }
        public function get_owl_custom_sizes()
        {
        }
        public function get_owl_items_per_slide_classes()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
        protected function content_template()
        {
        }
    }
}
namespace XTS\Modules\Layouts {
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Off_Canvas_Column_Btn extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
}
namespace XTS\Elementor {
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Products extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get attribute taxonomies
         *
         * @since 1.0.0
         */
        public function get_product_attributes_array()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Images_Gallery extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
}
namespace XTS\Modules\Layouts {
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     */
    class Sidebar extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget content.
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         */
        protected function render()
        {
        }
    }
}
namespace XTS\Elementor {
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Product_Categories extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Image_Hotspot extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Timeline extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Mailchimp extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get mailchimp forms.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Mailchimp forms.
         */
        public function get_mailchimp_forms()
        {
        }
        /**
         * Get first form id.
         *
         * @since 1.0.0
         * @access public
         *
         * @return integer Form id.
         */
        public function get_first_mailchimp_form()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Compare extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         * @since 1.0.0
         * @access public
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         * @since 1.0.0
         * @access public
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         * @since 1.0.0
         * @access public
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         * @since 1.0.0
         * @access public
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Open_Street_Map extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Image extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget Text block.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget Text block.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Twitter extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Countdown extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Products_Widget extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
        public function add_category_order($query_args)
        {
        }
        public function add_product_order($query_args)
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Popup extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class WD_Mega_Menu extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Counter extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Icon_List extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since  1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since  1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since  1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Text_Block extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget Text block.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget Text block.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class View_3d extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @return string Widget name.
         * @since 1.0.0
         * @access public
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @return string Widget title.
         * @since 1.0.0
         * @access public
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @return string Widget icon.
         * @since 1.0.0
         * @access public
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @return array Widget categories.
         * @since 1.0.0
         * @access public
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Team_Member extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render member-social.
         *
         * @param array $settings Settings list.
         *
         * @return string|void
         */
        protected function show_member_social($settings)
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Blog extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
    /**
     * Elementor widget that inserts an embeddable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Marquee extends \Elementor\Widget_Base
    {
        /**
         * Get widget name.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget name.
         */
        public function get_name()
        {
        }
        /**
         * Get widget title.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget title.
         */
        public function get_title()
        {
        }
        /**
         * Get widget icon.
         *
         * @since 1.0.0
         * @access public
         *
         * @return string Widget icon.
         */
        public function get_icon()
        {
        }
        /**
         * Get widget categories.
         *
         * @since 1.0.0
         * @access public
         *
         * @return array Widget categories.
         */
        public function get_categories()
        {
        }
        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the widget belongs to.
         *
         * @since 2.1.0
         * @access public
         *
         * @return array Widget keywords.
         */
        public function get_keywords()
        {
        }
        /**
         * Register the widget controls.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
    }
}
namespace XTS\Elementor\Controls {
    /**
     * Elementor wd_google_json control.
     *
     * @since 1.0.0
     */
    class Google_Json extends \Elementor\Base_Data_Control
    {
        /**
         * Get wd_buttons control type.
         *
         * Retrieve the control type, in this case `wd_buttons`.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get wd_buttons control default settings.
         *
         * Retrieve the default settings of the wd_buttons control. Used to return the
         * default settings while initializing the wd_buttons control.
         *
         * @since  1.8.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Enqueue control scripts and styles.
         *
         * @since  1.0.0
         * @access public
         */
        public function enqueue()
        {
        }
        /**
         * Render textarea control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since 1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor wd_buttons control.
     *
     * @since 1.0.0
     */
    class Buttons extends \Elementor\Base_Data_Control
    {
        /**
         * Get wd_buttons control type.
         *
         * Retrieve the control type, in this case `wd_buttons`.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get wd_buttons control default settings.
         *
         * Retrieve the default settings of the wd_buttons control. Used to return the
         * default settings while initializing the wd_buttons control.
         *
         * @since  1.8.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Enqueue control scripts and styles.
         *
         * @since  1.0.0
         * @access public
         */
        public function enqueue()
        {
        }
        /**
         * Render wd_buttons control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since  1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor wd_autocomplete control.
     *
     * @since 1.0.0
     */
    class Autocomplete extends \Elementor\Base_Data_Control
    {
        /**
         * Get wd_autocomplete control type.
         *
         * Retrieve the control type, in this case `wd_autocomplete`.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get wd_autocomplete control default settings.
         *
         * Retrieve the default settings of the wd_autocomplete control. Used to return the
         * default settings while initializing the wd_autocomplete control.
         *
         * @since  1.8.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Enqueue control scripts and styles.
         *
         * @since  1.0.0
         * @access public
         */
        public function enqueue()
        {
        }
        /**
         * Render wd_autocomplete control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since  1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
    /**
     * Elementor wd_CSS_Class control.
     *
     * @since 1.0.0
     */
    class CSS_Class extends \Elementor\Base_Data_Control
    {
        /**
         * Get wd_CSS_Class control type.
         *
         * Retrieve the control type, in this case `wd_CSS_Class`.
         *
         * @since  1.0.0
         * @access public
         *
         * @return string Control type.
         */
        public function get_type()
        {
        }
        /**
         * Get wd_CSS_Class control default settings.
         *
         * Retrieve the default settings of the wd_CSS_Class control. Used to return the
         * default settings while initializing the wd_CSS_Class control.
         *
         * @since  1.8.0
         * @access protected
         *
         * @return array Control default settings.
         */
        protected function get_default_settings()
        {
        }
        /**
         * Render wd_CSS_Class control output in the editor.
         *
         * Used to generate the control HTML in the editor using Underscore JS
         * template. The variables for the class are available using `data` JS
         * object.
         *
         * @since  1.0.0
         * @access public
         */
        public function content_template()
        {
        }
    }
}
namespace {
    class WOODMART_Walker_Category extends \Walker_Category
    {
        public function start_lvl(&$output, $depth = 0, $args = array())
        {
        }
        public function end_lvl(&$output, $depth = 0, $args = array())
        {
        }
        public function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0)
        {
        }
    }
    class WOODMART_WC_Product_Cat_List_Walker extends \WC_Product_Cat_List_Walker
    {
        /**
         * Start the element output.
         *
         * @see Walker::start_el()
         * @since 2.1.0
         *
         * @param string  $output Passed by reference. Used to append additional content.
         * @param int     $depth Depth of category in reference to parents.
         * @param integer $current_object_id
         */
        public function start_el(&$output, $cat, $depth = 0, $args = array(), $current_object_id = 0)
        {
        }
    }
}
namespace XTS\Modules {
    /**
     * Compare class.
     */
    class Compare extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Hooks.
         *
         * @return void
         */
        public function hooks()
        {
        }
        /**
         * Include files.
         *
         * @return void
         */
        public function include_files()
        {
        }
        /**
         * Add localized settings.
         *
         * @param array $localized Settings.
         * @return array
         */
        public function add_localized_settings($localized)
        {
        }
        /**
         * Get compared products IDs array
         *
         * @since 3.3
         */
        public function get_compared_products()
        {
        }
        /**
         * Add product to compare.
         *
         * @codeCoverageIgnore
         */
        public function add_to_compare()
        {
        }
        /**
         * Remove product to compare.
         *
         * @codeCoverageIgnore
         * @since 3.3
         */
        public function remove_from_compare()
        {
        }
        /**
         * Remove category with product in compare.
         *
         * @codeCoverageIgnore
         * @return void
         */
        public function remove_category_from_compare()
        {
        }
        /**
         * Get count product in compare.
         *
         * @return int
         */
        public function get_compare_count()
        {
        }
        /**
         * Get fragments for compare.
         *
         * @return void
         */
        public function get_fragment_product_category_compare()
        {
        }
        /**
         * Get dropdown compare products category.
         *
         * @param array $fragments Fragments.
         * @return array
         */
        public function get_dropdown_compare_fragments($fragments)
        {
        }
        /**
         * Get product category.
         *
         * @return array
         */
        public function get_product_categories()
        {
        }
        /**
         * All available fields for Theme Settings sorter option.
         *
         * @param bool $new New option.
         *
         * @return array
         */
        public function compare_available_fields($new = false)
        {
        }
        /**
         * Remove unnecessary products.
         *
         * @codeCoverageIgnore
         * @since 1.0
         */
        public function remove_unnecessary_products()
        {
        }
    }
}
namespace XTS\Modules\Compare {
    /**
     * Compare UI.
     *
     * @since 1.0.0
     */
    class Ui extends \XTS\Singleton
    {
        /**
         * Initialize action.
         */
        public function init()
        {
        }
        /**
         * Add to compare button.
         *
         * @codeCoverageIgnore
         * @since 1.0.0
         *
         * @param string $classes Extra classes.
         */
        public function add_to_compare_btn($classes = '')
        {
        }
        /**
         * Add to compare button on sticky add to cart.
         *
         * @codeCoverageIgnore
         * @return void
         */
        public function add_to_compare_sticky_atc_btn()
        {
        }
        /**
         * Add to compare button on single product.
         *
         * @codeCoverageIgnore
         * @since 1.0.0
         */
        public function add_to_compare_single_btn()
        {
        }
        /**
         * Output compare page content.
         *
         * @codeCoverageIgnore
         * @param string $active_category Current category when AJAX request.
         *
         * @return false|string
         */
        public function compare_page($active_category = '')
        {
        }
        /**
         * Header category tabs.
         *
         * @codeCoverageIgnore
         * @param array   $categories Product category.
         * @param integer $active_category Current category.
         *
         * @return string|void
         */
        public function get_head_tabs_compare($categories, $active_category)
        {
        }
        /**
         * Compare product table.
         *
         * @codeCoverageIgnore
         * @param array   $products Products.
         * @param integer $category Category ID.
         *
         * @return void
         */
        public function compare_table($products, $category = '')
        {
        }
        /**
         * Get content when empty compare.
         *
         * @codeCoverageIgnore
         */
        public function get_empty_compare_content()
        {
        }
        /**
         * Checks if the products have such a field.
         *
         * @param integer $field_id Field ID.
         * @param array   $products Products.
         * @param string  $category Active category.
         *
         * @return bool
         */
        public function is_products_have_field($field_id, $products, $category)
        {
        }
        /**
         * Get compare fields data.
         *
         * @codeCoverageIgnore
         * @param integer $field_id Fields ID.
         * @param array   $product Product data.
         */
        public function compare_display_field($field_id, $product)
        {
        }
        /**
         * Get compared products data
         *
         * @since 3.3
         */
        public function get_compared_products_data()
        {
        }
        /**
         * Get compare fields data.
         */
        public function get_compare_fields()
        {
        }
        /**
         * Get product availability html.
         *
         * @param object $product Object product.
         *
         * @return string
         */
        public function compare_availability_html($product)
        {
        }
        /**
         * Get product add to cart html.
         *
         * @param object $product Product object.
         *
         * @return mixed|void
         */
        public function compare_add_to_cart_html($product)
        {
        }
        /**
         * Get dropdown with products categories content.
         *
         * @codeCoverageIgnore
         * @return string|void
         */
        public function get_dropdown_with_products_categories()
        {
        }
    }
}
namespace XTS\Modules\Linked_Variations {
    class Admin extends \XTS\Singleton
    {
        /**
         * Construct.
         */
        public function init()
        {
        }
        /**
         * Hooks.
         */
        public function hooks()
        {
        }
        /**
         * Add option.
         *
         * @return void
         */
        public function add_options()
        {
        }
        /**
         * Add metaboxes.
         */
        public function add_metaboxes()
        {
        }
    }
    class Frontend extends \XTS\Singleton
    {
        /**
         * Construct.
         */
        public function init()
        {
        }
        /**
         * Hooks.
         */
        public function hooks()
        {
        }
        /**
         * Output,
         *
         * @codeCoverageIgnore
         * @param string $wrapper_classes Classes.
         */
        public function output($wrapper_classes = '')
        {
        }
        /**
         * Get linked variations data.
         *
         * @param int $product_id Product id.
         *
         * @return array
         */
        public function get_linked_variations($product_id)
        {
        }
        /**
         * Get linked variation data for attribute.
         *
         * @param int    $product_id Product id.
         * @param string $taxonomy Taxonomy.
         * @param string $term_slug Term slug.
         *
         * @return array
         */
        public function get_linked_variation_data_for_attribute($product_id, $taxonomy, $term_slug)
        {
        }
    }
    class Main extends \XTS\Singleton
    {
        /**
         * Construct.
         */
        public function init()
        {
        }
        /**
         * Include files.
         *
         * @return void
         */
        public function include_files()
        {
        }
    }
}
namespace XTS\Modules\Show_Single_Variations {
    /**
     * Class query.
     */
    class Query extends \XTS\Singleton
    {
        /**
         * Register hooks.
         */
        public function init()
        {
        }
        /**
         * Update request for product variation.
         *
         * @codeCoverageIgnore
         * @param array  $clauses Request.
         * @param object $query Query.
         * @return array
         */
        public function posts_clauses($clauses, $query)
        {
        }
        /**
         * Adds Variations to the given WP_Query object.
         *
         * @param WP_Query $query The query to be modified.
         *
         * @return void
         */
        public function add_variations_to_query($query)
        {
        }
        /**
         * Add Variations to all Product queries. If any query has * 'product' as post_type, add 'product_variation' to it.
         *
         * @param WP_Query $query The query to be modified.
         *
         * @return void
         */
        public function add_variations_to_product_query($query)
        {
        }
        /**
         * Add variations to QuickView.
         *
         * @param array $args Arguments.
         *
         * @return array
         */
        public function add_variations_to_quickview($args)
        {
        }
        /**
         * Title for variation product.
         *
         * @param string $title Product title.
         * @param object $product Product data.
         * @return string
         */
        public function variation_title($title, $product)
        {
        }
        /**
         * Inherit parent rating.
         *
         * @param float  $value Value rating.
         * @param Object $product Product object.
         *
         * @return float
         */
        public function get_average_rating($value, $product)
        {
        }
        /**
         * Get excerpt for product variation.
         *
         * @param string $except Except.
         * @param object $post Post.
         * @return string
         */
        public function get_the_excerpt($except, $post)
        {
        }
        /**
         * Get variation product attributes.
         *
         * @param array  $product_attributes Products attributes.
         * @param object $product Product.
         * @return array
         */
        public function variation_product_attributes($product_attributes, $product)
        {
        }
        public function add_variations_to_related_products($query, $product_id)
        {
        }
    }
    /**
     * The main show single variations class.
     */
    class Main extends \XTS\Singleton
    {
        /**
         * Register hooks.
         */
        public function init()
        {
        }
        /**
         * Include files.
         */
        public function include_files()
        {
        }
        /**
         * Add option.
         *
         * @return void
         */
        public function add_options()
        {
        }
        /**
         * Output control in product variation.
         *
         * @codeCoverageIgnore
         * @param integer $loop Numbers variations.
         * @param array   $variation_data Variation data.
         * @param object  $variation Variation product object.
         *
         * @return void
         */
        public function get_option($loop, $variation_data, $variation)
        {
        }
        /**
         * Output control in product variation.
         *
         * @codeCoverageIgnore
         * @param integer $loop Numbers variations.
         * @param array   $variation_data Variation data.
         * @param object  $variation Variation product object.
         *
         * @return void
         */
        public function add_exclude_variation_option($loop, $variation_data, $variation)
        {
        }
    }
    /**
     * Class save.
     */
    class Save extends \XTS\Singleton
    {
        /**
         * Register hooks.
         */
        public function init()
        {
        }
        /**
         * Save product.
         *
         * @param integer $post_id Post ID.
         * @param object  $post Post object.
         * @param integer $update is updates.
         * @return void
         */
        public function save_product($post_id, $post, $update)
        {
        }
        /**
         * Ajax save variation product.
         *
         * @param integer $variation_id Variation ID.
         * @param bool    $i Index.
         * @return void
         */
        public function save_variation($variation_id, $i = false)
        {
        }
        /**
         * Update variation option for save bulk edit.
         *
         * @param integer $variation_id Variation ID.
         * @return void
         */
        public function update_variation_option($variation_id)
        {
        }
        /**
         * Get the current request data ($_REQUEST super global).
         * This method is added to ease unit testing.
         *
         * @return array The $_REQUEST super global.
         */
        protected function request_data()
        {
        }
    }
}
namespace XTS\Modules {
    /**
     * The Woodmart WooCommerce Adjacent Products Class
     */
    class WC_Adjacent_Products
    {
        /**
         * Constructor.
         *
         * @since 2.4.3
         *
         * @param bool         $in_same_term Optional. Whether post should be in a same taxonomy term. Default false.
         * @param array|string $excluded_terms Optional. Comma-separated list of excluded term IDs. Default empty.
         * @param string       $taxonomy Optional. Taxonomy, if $in_same_term is true. Default 'product_cat'.
         * @param bool         $previous Optional. Whether to retrieve previous product. Default false.
         */
        public function __construct($in_same_term = false, $excluded_terms = '', $taxonomy = 'product_cat', $previous = false)
        {
        }
        /**
         * Get adjacent product or circle back to the first/last valid product.
         *
         * @since 2.4.3
         *
         * @return WC_Product|false Product object if successful. False if no valid product is found.
         */
        public function get_product()
        {
        }
        /**
         * Filters the WHERE clause in the SQL for an adjacent post query, replacing the
         * date with date of the next post to consider.
         *
         * @since 2.4.3
         *
         * @param string $where The `WHERE` clause in the SQL.
         *
         * @return WP_POST|false Post object if successful. False if no valid post is found.
         */
        public function filter_post_where($where)
        {
        }
    }
}
namespace XTS\Modules\Dynamic_Discounts {
    /**
     * Add Dynamic discounts settings on wp admin page.
     */
    class Admin extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Set default list of meta box arguments for rendering template.
         */
        public function set_default_meta_boxes_fields()
        {
        }
        /**
         * Add custom meta boxes.
         *
         * @return void
         */
        public function add_meta_boxes()
        {
        }
        /**
         * Save post with custom meta boxes.
         *
         * @param int $post_id Post ID.
         * @return string|void
         */
        public function save($post_id)
        {
        }
        /**
         * Clear transients.
         *
         * @return void
         */
        public function clear_transients()
        {
        }
        /**
         * Enqueue admin scripts.
         *
         * @return void
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Get data from db for render select2 options for Discount Condition options in admin page.
         */
        public function conditions_query()
        {
        }
        /**
         * Columns header.
         *
         * @param array $posts_columns Columns.
         *
         * @return array
         */
        public function admin_columns_titles($posts_columns)
        {
        }
        /**
         * Columns content.
         *
         * @param string $column_name Column name.
         * @param int    $post_id     Post id.
         */
        public function admin_columns_content($column_name, $post_id)
        {
        }
        /**
         * Change status action.
         */
        public function change_status_action()
        {
        }
        /**
         * Render meta boxes fields.
         *
         * @codeCoverageIgnore
         * @return void
         */
        public function render()
        {
        }
        /**
         * Get saved data from db for render selected select2 option for Discount Condition options in admin page.
         *
         * @param string|int $id Search for this term value.
         * @param string     $query_type Query type.
         *
         * @return array
         */
        public function get_saved_conditions_query($id, $query_type)
        {
        }
        /**
         * Add localized settings.
         *
         * @return array
         */
        public function add_localized_settings()
        {
        }
    }
    /**
     * Dynamic discounts class.
     */
    class Frontend extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Update price in mini cart on get_refreshed_fragments action.
         *
         * @codeCoverageIgnore
         * @return void
         */
        public function cart_item_price_on_ajax()
        {
        }
        /**
         * Update price in cart.
         *
         * @param string $price_html Product price.
         * @param array  $cart_item Product data.
         * @return string
         */
        public function cart_item_price($price_html, $cart_item)
        {
        }
        /**
         * Render dynamic discounts table.
         *
         * @codeCoverageIgnore
         * @param false|int|string $product_id The product id for which you want to generate the dynamic discounts table. Default is equal false.
         * @param string           $wrapper_classes Wrapper classes string.
         * @return false|string
         */
        public function render_dynamic_discounts_table($product_id = false, $wrapper_classes = '')
        {
        }
        /**
         * Send new price table html for current variation product.
         *
         * @codeCoverageIgnore
         * @return void
         */
        public function update_dynamic_discounts_table()
        {
        }
    }
    /**
     * Dynamic discounts class.
     */
    class Main extends \XTS\Singleton
    {
        /**
         * Make sure that the same discount is not applied twice for the same product.
         *
         * @var array A list of product IDs for which a discount has already been applied.
         */
        public array $applied = array();
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Add options in theme settings.
         */
        public function add_options()
        {
        }
        /**
         * Include files.
         *
         * @return void
         */
        public function include_files()
        {
        }
        /**
         * Calculate price with discounts.
         *
         * @param WC_Cart $cart WC_Cart class.
         *
         * @return void
         */
        public function calculate_discounts($cart)
        {
        }
        /**
         * Get product price after applying discount.
         *
         * @param float $product_price Price before applying discount.
         * @param array $discount Array with 2 args('type', 'value') for calculate new price.
         *
         * @return float
         */
        public function get_product_price($product_price, $discount)
        {
        }
    }
    /**
     * Manager class.
     */
    class Manager extends \XTS\Singleton
    {
        /**
         * Transient name for 'All discounts post ids'.
         *
         * @var string $wd_transient_discounts_ids .
         */
        public $wd_transient_discounts_ids = 'wd_all_discounts_post_ids';
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Get list of discounts post ids.
         *
         * @return int[]
         */
        public function get_all_discounts_post_ids()
        {
        }
        /**
         * Sort the discounts rule by priority DESC.
         *
         * @param array $a The first array to compare.
         * @param array $b The first array to compare.
         *
         * @return int
         */
        public function sort_by_priority($a, $b)
        {
        }
        /**
         * Get current discount rules for needed product.
         *
         * @param WC_Product $product The product object for which you need to get discount rules.
         *
         * @return array
         */
        public function get_discount_rules($product)
        {
        }
        /**
         * Check if there are discount rules for this product.
         *
         * @param WC_Product $product The product object for which you want to check for discounts.
         *
         * @return bool
         */
        public function check_discount_exist($product)
        {
        }
        /**
         * Set default list of meta box arguments for rendering template.
         *
         * @param array $default_meta_boxes_fields List of default meta boxes fields.
         */
        public function set_default_meta_boxes_fields($default_meta_boxes_fields)
        {
        }
        /**
         * Get default list of meta box arguments for rendering template.
         *
         * @return array List of meta box arguments for rendering template.
         */
        public function get_default_meta_boxes_fields()
        {
        }
        /**
         * Get list of meta box arguments for single discounts post from database.
         *
         * @param int|string $id Discounts post id.
         *
         * @return array List of meta box arguments.
         */
        public function get_meta_boxes_fields($id = '')
        {
        }
        /**
         * Get list of meta box arguments for all discounts posts from database.
         *
         * @return array List of meta box arguments.
         */
        public function get_all_meta_boxes_fields()
        {
        }
        /**
         * Check condition before apply discount.
         *
         * @param array      $discount_rules List of meta box arguments.
         * @param WC_Product $product The product object for which you need to check discount rules.
         *
         * @return bool
         */
        public function check_discount_condition($discount_rules, $product)
        {
        }
        /**
         * Get condition priority;
         *
         * @param string $type Condition type.
         *
         * @return int
         */
        public function get_condition_priority($type)
        {
        }
        /**
         * Get template.
         *
         * @param string $template_name Template name.
         * @param array  $args Arguments for template.
         */
        public function get_template($template_name, $args = array())
        {
        }
    }
}
namespace XTS\Modules\Unit_Of_Measure {
    /**
     * Unit of measurement.
     */
    class Main extends \XTS\Singleton
    {
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Output control in WooCommerce meta box.
         *
         * @return void
         */
        public function output_control()
        {
        }
        /**
         * Output control in bulk edit.
         *
         * @return void
         */
        public function output_control_in_bulk_edit()
        {
        }
        /**
         * Save control in WooCommerce meta box.
         *
         * @return void
         */
        public function save_control_product_meta()
        {
        }
        /**
         * Save controls in bulk edit.
         *
         * @return void
         */
        public function save_control_in_bulk_edit()
        {
        }
        /**
         * Save option in Database.
         *
         * @param integer $product_id Product ID.
         * @param string  $option Option.
         *
         * @return void
         */
        public function save_option_for_product($product_id, $option)
        {
        }
        /**
         * Output price content with unit of measurement.
         *
         * @param string     $price  Price content.
         * @param WC_Product $wc_product Product object.
         *
         * @return string
         */
        public function output_unit_of_measure($price, $wc_product)
        {
        }
        /**
         * Get unit of measurement in database.
         *
         * @param WC_Product $wc_product Product object.
         *
         * @return mixed
         */
        public function get_unit_of_measure_db($wc_product)
        {
        }
    }
}
namespace XTS\Modules\Product_Gallery_Video {
    /**
     * Product image gallery with video.
     */
    class Main extends \XTS\Singleton
    {
        /**
         * Default settings.
         *
         * @var array
         */
        public $default_settings = array('video_type' => 'mp4', 'upload_video_id' => '', 'upload_video_url' => '', 'youtube_url' => '', 'vimeo_url' => '', 'autoplay' => '0', 'video_size' => 'contain', 'video_control' => 'theme', 'hide_gallery_img' => '0', 'hide_information' => '0', 'audio_status' => 'unmute');
        /**
         * Thumbnails settings.
         *
         * @var array
         */
        public $thumbnails_settings = array();
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Ноокs.
         *
         * @return void
         */
        public function hooks()
        {
        }
        /**
         * Add options in theme settings.
         *
         * @return void
         */
        public function add_options()
        {
        }
        /**
         * Get button for gallery image.
         *
         * @codeCoverageIgnore
         * @param string $post_id Post ID.
         * @param string $attachment_id Attachment id.
         * @return void
         */
        public function get_gallery_product_video_btn($post_id, $attachment_id)
        {
        }
        /**
         * Get button for main product image.
         *
         * @codeCoverageIgnore
         * @param string  $content Image content.
         * @param integer $post_id Post ID.
         * @param integer $attachment_id Attachment ID.
         * @return string
         */
        public function get_main_image_video_btn($content, $post_id, $attachment_id)
        {
        }
        /**
         * Get product video gallery popup.
         *
         * @codeCoverageIgnore
         * @param object $post Post object.
         */
        public function get_product_thumbnail_popup($post)
        {
        }
        /**
         * Save settings for gallery image item.
         *
         * @param integer $product_id Product ID.
         * @param object  $post Post object.
         * @return void
         */
        public function save_product_gallery($product_id, $post)
        {
        }
        /**
         * Output product image thumbnails.
         *
         * @codeCoverageIgnore
         * @param string  $content Gallery thumbnail content.
         * @param integer $attachment_id Thumbnail ID.
         * @return false|string
         */
        public function product_image_thumbnail($content, $attachment_id)
        {
        }
        /**
         * Output video content.
         *
         * @codeCoverageIgnore
         * @param array $settings Video settings.
         *
         * @return void
         */
        public function get_video_content($settings)
        {
        }
        /**
         * Get video controls content.
         *
         * @codeCoverageIgnore
         * @param array $settings Video controls settings.
         * @return void
         */
        public function get_video_buttons($settings)
        {
        }
        /**
         * Added custom classes for thumbnails image.
         *
         * @param string  $classes Classes.
         * @param integer $attachment_id Image ID.
         * @return string
         */
        public function product_thumbnails_classes($classes, $attachment_id)
        {
        }
        /**
         * Get video content for image gallery.
         *
         * @param array   $image_settings Image settings.
         * @param integer $attachment_id Image ID.
         * @return array
         */
        public function get_single_image_data($image_settings, $attachment_id)
        {
        }
        /**
         * Add settings in admin localized settings.
         *
         * @param array $settings Settings.
         * @return array
         */
        public function admin_localized_settings($settings)
        {
        }
        /**
         * Add settings in localized settings.
         *
         * @param array $settings Settings.
         * @return array
         */
        public function localized_settings($settings)
        {
        }
    }
}
namespace XTS\WC_Wishlist {
    /**
     * Send about products wishlists.
     *
     * @since 1.0.0
     */
    class Sends_Back_In_Stock extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Load woocommerce mailer.
         */
        public function load_wc_mailer()
        {
        }
        /**
         * Send back in stock product.
         */
        public function send_back_in_stock_email()
        {
        }
        /**
         * Save back in stock status product.
         *
         * @param integer $product_id Product ID.
         * @param string  $stock_status Stock status product.
         * @param object  $product Data product.
         *
         * @return void
         */
        public function schedule_back_in_stock_emails($product_id, $stock_status, $product)
        {
        }
        /**
         * Get users ID what added this product.
         *
         * @param integer $product_id Product ID.
         *
         * @return array
         */
        public function get_users_id_by_product_id($product_id)
        {
        }
        /**
         * Remove product from send back in stock lists.
         *
         * @param integer $product_id Product ID.
         * @return void
         */
        public function remove_product_from_lists($product_id)
        {
        }
    }
    /**
     * Send promotional wishlists.
     *
     * @since 1.0.0
     */
    class Sends_Promotional extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Load woocommerce mailer.
         */
        public function load_wc_mailer()
        {
        }
        /**
         * Send promotional product.
         */
        public function send_promotional_email()
        {
        }
        /**
         * Update promotion data.
         */
        public static function update_promotion_data($users_products)
        {
        }
    }
    /**
     * Send on sales products wishlists.
     *
     * @since 1.0.0
     */
    class Send_On_Sales_Products extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Register crons.
         */
        public function register_crons()
        {
        }
        /**
         * Load woocommerce mailer.
         */
        public function load_wc_mailer()
        {
        }
        /**
         * Register on sale products.
         *
         * @return void
         */
        public function register_on_sales_products()
        {
        }
        /**
         * Send sales product in email.
         *
         * @return void
         */
        public function send_on_sales_products_email()
        {
        }
        /**
         * Get users ID what added this product.
         *
         * @param integer $product_id Product ID.
         *
         * @return array
         */
        public function get_users_id_by_product_id($product_id)
        {
        }
        /**
         * Get product ID which on sale.
         *
         * @return array
         */
        public function get_product_id_which_on_sale()
        {
        }
        /**
         * Update on sale product.
         *
         * @param integer $product_id Product ID.
         * @param boolean $on_sale Is sale product.
         *
         * @return bool|int
         */
        public function update_on_sale_for_product($product_id, $on_sale)
        {
        }
        /**
         * Upgrade wishlist database.
         *
         * @return void
         */
        public function upgrade_database_wishlist()
        {
        }
        /**
         * Remove product on sale.
         *
         * @param integer $product_id Product ID.
         * @return void
         */
        public function remove_product_from_lists($product_id)
        {
        }
    }
    /**
     * Send about products wishlists.
     *
     * @since 1.0.0
     */
    class Sends_About_Products_Wishlists extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Include files.
         *
         * @return void
         */
        public function include_files()
        {
        }
        /**
         * Add woocommerce emails.
         *
         * @param array $emails Woocommerce emails.
         *
         * @return array
         */
        public function add_woocommerce_emails($emails)
        {
        }
        /**
         * Unsubscribe from mailing lists for wishlist plugin
         *
         * @return void
         */
        public function unsubscribe_user()
        {
        }
    }
    /**
     * Create Wishlist settings page on admin panel.
     */
    class Backend extends \XTS\Singleton
    {
        /**
         * Base initialization class required for Module class.
         *
         * @since 1.0.0
         */
        public function init()
        {
        }
        public function show_notice()
        {
        }
        public function create_promotion()
        {
        }
        /**
         * Enqueue styles and scripts on wp admin panel.
         */
        public function enqueue_scripts()
        {
        }
        public function woodmart_json_search_users($term = '')
        {
        }
        /**
         * This method deletes wishlists when you click the Delete button.
         *
         * @return void
         */
        public function delete_wishlists()
        {
        }
        public function wishlist_screen_options()
        {
        }
        public function set_screen_option($status, $option, $value)
        {
        }
        /**
         * Register wishlist settings page.
         *
         * @return void
         */
        public function register_wishlist_settings_page()
        {
        }
        /**
         * Render wishlist settings page.
         *
         * @return void
         */
        public function render_wishlist_settings_page()
        {
        }
        /**
         * Get a list of registered tabs.
         *
         * @return array
         */
        public function get_tabs()
        {
        }
        /**
         * Get current tab.
         *
         * @return string
         */
        public function get_current_tab()
        {
        }
    }
}
namespace XTS\WC_Wishlist\Backend\List_Table {
    /**
     * Create a new table class that will extend the WP_List_Table.
     */
    class Popular_Products extends \WP_List_Table
    {
        /**
         * Define what data to show on each column of the table.
         *
         * @param array  $item Data.
         * @param string $column_name - Current column name.
         *
         * @return mixed
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Prints checkbox column.
         *
         * @param array $item Item to use to print record.
         * @return string
         */
        public function column_cb($item)
        {
        }
        /**
         * Print column for product name
         *
         * @param array $item Item for the current record.
         * @return string Column content
         * @since 2.0.5
         */
        public function column_name($item)
        {
        }
        /**
         * Print column for product category
         *
         * @param array $item Item for the current record.
         * @return string
         */
        public function column_category($item)
        {
        }
        /**
         * Print column for wishlist count
         *
         * @param array $item Item for the current record.
         * @return string
         */
        public function column_count($item)
        {
        }
        /**
         * Print column for Create promotion button.
         *
         * @param array $item Item for the current record.
         * @return string
         */
        public function column_create_promotion($item)
        {
        }
        /**
         * Override the parent columns method. Defines the columns to use in your listing table.
         *
         * @return array
         */
        public function get_columns()
        {
        }
        /**
         * Define which columns are hidden.
         *
         * @return array
         */
        public function get_hidden_columns()
        {
        }
        /**
         * Define the sortable columns.
         *
         * @return array[]
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Sets bulk actions for table.
         *
         * @return array Array of available actions.
         */
        public function get_bulk_actions()
        {
        }
        /**
         * Delete wishlist on bulk action.
         *
         * @return void
         * @throws \Exception
         */
        public function process_bulk_action()
        {
        }
        /**
         * Prepare the items for the table to process.
         *
         * @return void
         */
        public function prepare_items()
        {
        }
        /**
         * Get user id`s list by product id.
         *
         * @param int|string $product_id Product id.
         * @return array
         */
        public static function get_user_ids_by_product_id($product_id)
        {
        }
        /**
         * Print filters for current table
         *
         * @param string $which Top / Bottom.
         *
         * @return void
         * @since 1.0.0
         */
        protected function extra_tablenav($which)
        {
        }
    }
    /**
     * Create a new table class that will extend the WP_List_Table.
     */
    class Wishlists extends \WP_List_Table
    {
        /**
         * Define what data to show on each column of the table.
         *
         * @param array  $item        Data.
         * @param string $column_name - Current column name.
         *
         * @return mixed
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Prints column for wishlist user
         *
         * @param array $item Item to use to print record.
         * @return string
         */
        public function column_cb($item)
        {
        }
        /**
         * Prints column for wishlist name
         *
         * @param array $item Item to use to print record.
         * @return string
         * @since 2.0.0
         */
        public function column_wishlist_group($item)
        {
        }
        /**
         * Return username column for an item
         *
         * @param array $item Item to use to print record.
         * @return string
         * @since 2.0.0
         */
        public function column_user_name($item)
        {
        }
        /**
         * Prints column for wishlist number of items
         *
         * @param array $item Item to use to print record.
         * @return string
         * @since 2.0.0
         */
        public function column_product_count($item)
        {
        }
        /**
         * Prints column for wishlist creation date
         *
         * @param array $item Item to use to print record.
         * @return string
         * @since 2.0.0
         */
        public function column_date_created($item)
        {
        }
        /**
         * Override the parent columns method. Defines the columns to use in your listing table.
         *
         * @return array
         */
        public function get_columns()
        {
        }
        /**
         * Define which columns are hidden.
         *
         * @return array
         */
        public function get_hidden_columns()
        {
        }
        /**
         * Define the sortable columns.
         *
         * @return array[]
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Sets bulk actions for table.
         *
         * @return array Array of available actions.
         */
        public function get_bulk_actions()
        {
        }
        /**
         * Delete wishlist on bulk action.
         *
         * @return void
         */
        public function process_bulk_action()
        {
        }
        /**
         * Prepare the items for the table to process.
         *
         * @return void
         */
        public function prepare_items()
        {
        }
        /**
         * Print filters for current table
         *
         * @param string $which Top / Bottom.
         *
         * @return void
         * @since 1.0.0
         */
        protected function extra_tablenav($which)
        {
        }
    }
    /**
     * Create a new table class that will extend the WP_List_Table.
     */
    class Users_Popular_Products extends \WP_List_Table
    {
        /**
         * Define what data to show on each column of the table.
         *
         * @param array  $item        Data.
         * @param string $column_name - Current column name.
         *
         * @return mixed
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Print column for user thumbnail.
         *
         * @param array $item Item for the current record.
         * @return string Column content
         */
        public function column_thumb($item)
        {
        }
        /**
         * Prints checkbox column.
         *
         * @param array $item Item to use to print record.
         * @return string
         */
        public function column_cb($item)
        {
        }
        /**
         * Print column for username
         *
         * @param array $item Item for the current record.
         * @return string Column content
         * @since 2.0.5
         */
        public function column_name($item)
        {
        }
        /**
         * Print column for date added.
         *
         * @param array $item Item for the current record.
         * @return string Column content
         * @since 2.0.5
         */
        public function column_date_added($item)
        {
        }
        /**
         * Print column for wishlist.
         *
         * @param array $item Item for the current record.
         * @return string Column content
         * @since 2.0.5
         */
        public function column_wishlist($item)
        {
        }
        /**
         * Print column for Create promotion button.
         *
         * @param array $item Item for the current record.
         * @return string
         */
        public function column_create_promotion($item)
        {
        }
        /**
         * Override the parent columns method. Defines the columns to use in your listing table.
         *
         * @return array
         */
        public function get_columns()
        {
        }
        /**
         * Define which columns are hidden.
         *
         * @return array
         */
        public function get_hidden_columns()
        {
        }
        /**
         * Define the sortable columns.
         *
         * @return array[]
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Sets bulk actions for table.
         *
         * @return array Array of available actions.
         */
        public function get_bulk_actions()
        {
        }
        /**
         * Delete wishlist on bulk action.
         *
         * @return void
         * @throws \Exception
         */
        public function process_bulk_action()
        {
        }
        /**
         * Prepare the items for the table to process.
         *
         * @return void
         */
        public function prepare_items()
        {
        }
    }
}
namespace XTS\WC_Wishlist {
    /**
     * Wishlist group.
     *
     * @since 1.0.0
     */
    class Wishlists_Group extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Get wishlist object.
         *
         * @param integer $wishlist_id Wishlist id.
         *
         * @return object
         */
        public function get_wishlist($wishlist_id = false)
        {
        }
        /**
         * Remove wishlist group.
         *
         * @return false|void
         */
        public function remove_group_from_wishlist_action()
        {
        }
        /**
         * Rename wishlist group.
         *
         * @return false|void
         */
        public function rename_wishlist_group()
        {
        }
        /**
         * Create wishlist group.
         *
         * @return false|void
         */
        public function create_wishlist_group()
        {
        }
        /**
         * Move products from wishlist group.
         *
         * @return void
         */
        public function move_products_from_wishlist()
        {
        }
        /**
         * Get wishlist fragments.
         *
         * @return void
         */
        public function get_wishlist_fragments()
        {
        }
        /**
         * Get wishlist group content.
         *
         * @param array $fragments Fragments.
         * @return array
         */
        public function get_wishlist_groups_fragments($fragments)
        {
        }
        /**
         * Get wishlist count content.
         *
         * @param array $fragments Fragments.
         * @return array
         */
        public function get_wishlist_count($fragments)
        {
        }
        /**
         * Get wishlist hash.
         *
         * @return string
         */
        public function get_wishlist_hash()
        {
        }
        /**
         * Set wishlist cookies
         *
         * @codeCoverageIgnore
         * @return void
         */
        public function set_cookies()
        {
        }
        /**
         * Upgrade wishlist database.
         *
         * @return void
         */
        public function upgrade_database_wishlist()
        {
        }
        /**
         * Create group popup.
         *
         * @codeCoverageIgnore
         * @return void
         */
        public function wishlist_create_group_popup()
        {
        }
        /**
         * Output header for wishlist groups.
         *
         * @codeCoverageIgnore
         */
        public function output_header_for_wishlist_groups()
        {
        }
        /**
         * Render wishlist groups.
         *
         * @codeCoverageIgnore
         * @param object $wishlist Object wishlist class.
         * @param array  $wishlist_groups Wishlist groups.
         * @param array  $args Default arguments.
         *
         * @return void
         */
        public function get_wishlist_groups($wishlist, $wishlist_groups, $args)
        {
        }
    }
    /**
     * Wishlist.
     *
     * @since 1.0.0
     */
    class Wishlist
    {
        /**
         * Set up wishlist object and storage.
         *
         * @since 1.0
         *
         * @param integer $id Wishlist id.
         * @param integer $user_id User id.
         * @param boolean $read_only Read only wishlist.
         *
         * @return void
         */
        public function __construct($id = false, $user_id = false, $read_only = false)
        {
        }
        /**
         * Remove all user wishlists from database.
         *
         * @param int $id ID of the user to delete.
         * @return void
         */
        public function remove_all_user_wishlists($id)
        {
        }
        /**
         * Remove unnecessary products.
         *
         * @since 1.0
         */
        public function remove_unnecessary_products()
        {
        }
        /**
         * Get wishlist ID.
         *
         * @since 1.0
         *
         * @return integer
         */
        public function get_id()
        {
        }
        /**
         * Get user id.
         *
         * @since 1.0
         *
         * @return integer
         */
        public function get_user_id()
        {
        }
        /**
         * Create wishlist in the database.
         *
         * @param string $group Title wishlist group.
         *
         * @return bool|int
         */
        public function create_group($group)
        {
        }
        /**
         * Add product to the wishlist.
         *
         * @since 1.0
         *
         * @param integer $product_id Product id.
         * @param integer $wishlist_id Wishlist group ID.
         *
         * @return boolean
         */
        public function add($product_id, $wishlist_id)
        {
        }
        /**
         * Remove product from the wishlist.
         *
         * @since 1.0
         *
         * @param integer $product_id Product id.
         * @param integer $group_id Wishlist group ID.
         *
         * @return boolean
         */
        public function remove($product_id, $group_id)
        {
        }
        /**
         * Remove group products from the wishlist.
         *
         * @param integer $group_id Group id.
         *
         * @return boolean
         */
        public function remove_group($group_id)
        {
        }
        /**
         * Get all products.
         *
         * @since 1.0
         *
         * @return array
         */
        public function get_all()
        {
        }
        /**
         * Get all products.
         *
         * @param integer $group_id Wishlist group ID.
         *
         * @return array
         */
        public function get_product_ids_by_wishlist_id($group_id)
        {
        }
        /**
         * Get ID wishlist group and check isset wishlist group with title.
         *
         * @param integer|string $id ID wishlist group or name wishlist group.
         *
         * @return string|null
         */
        public function get_wishlist_id_by_current_user($id)
        {
        }
        /**
         * Get wishlist groups by user id.
         *
         * @return array|object|null
         */
        public function get_all_wishlists_by_current_user()
        {
        }
        /**
         * Get wishlist title by id.
         *
         * @param integer $id Wishlist ID.
         * @return string
         */
        public function get_wishlist_title_by_wishlist_id($id)
        {
        }
        /**
         * Rename wishlist group.
         *
         * @param integer $group_id Group ID.
         * @param string  $title Title group.
         *
         * @return mixed
         */
        public function rename_group($group_id, $title)
        {
        }
        /**
         * Is product in compare.
         *
         * @since 1.0
         *
         * @param integer $product_id Product id.
         *
         * @return boolean
         */
        public function is_product_exists($product_id)
        {
        }
        /**
         * Update count products cookie.
         *
         * @since 1.0
         *
         * @return void
         */
        public function update_count_cookie()
        {
        }
        /**
         * Get number of products in the wishlist.
         *
         * @since 1.0
         *
         * @return integer
         */
        public function get_count()
        {
        }
        /**
         * Move products from cookie to database if needed.
         *
         * @since 1.0
         *
         * @return integer
         */
        public function move_products_if_needed($user_login, $user)
        {
        }
    }
    /**
     * Storage interface.
     *
     * @codeCoverageIgnore
     * @since 1.0.0
     */
    interface Storage
    {
        /**
         * Add product to the wishlist.
         *
         * @since 1.0
         *
         * @param integer $product_id Product id.
         *
         * @return boolean
         */
        public function add($product_id);
        /**
         * Remove product from the wishlist.
         *
         * @since 1.0
         *
         * @param integer $product_id Product id.
         *
         * @return boolean
         */
        public function remove($product_id);
        /**
         * Get all products.
         *
         * @since 1.0
         *
         * @return array
         */
        public function get_all();
        /**
         * Is product in compare.
         *
         * @since 1.0
         *
         * @param integer $product_id Product id.
         *
         * @return boolean
         */
        public function is_product_exists($product_id);
    }
}
namespace {
    /**
     * Send promotional.
     */
    class Promotional_Email extends \WC_Email
    {
        /**
         * Receiver user
         *
         * @var WP_User
         */
        public $user = \null;
        /**
         * Items that will be used for product table rendering
         *
         * @var $items
         */
        public $items = array();
        /**
         * True when the email notification is sent to customers.
         *
         * @var bool
         */
        protected $customer_email = \true;
        /**
         * Strings to find/replace in subjects/headings.
         *
         * @var array|string[]
         */
        protected $loop_placeholders = array();
        /**
         * Email content html.
         *
         * @var string
         */
        protected $content_html = '';
        /**
         * Email content html.
         *
         * @var string
         */
        protected $content_text = '';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Method triggered to send email.
         *
         * @param integer          $user_id User id.
         * @param int|string|array $product_list Products id.
         * @param string           $content_html Content html.
         * @param string           $content_text Content text.
         *
         * @return void
         */
        public function trigger($user_id, $product_list, $content_html = '', $content_text = '')
        {
        }
        /**
         * Get content html.
         *
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Retrieve custom email html content
         *
         *  @return string custom content, with replaced values.
         */
        public function get_custom_content_html()
        {
        }
        /**
         * Retrieve custom email text content
         *
         *  @return string custom content, with replaced values.
         */
        public function get_custom_content_plain()
        {
        }
        /**
         * Format email string.
         *
         * @param mixed $string Text to replace placeholders in.
         * @return string
         */
        public function format_string($string)
        {
        }
        /**
         * Admin Panel Options Processing.
         */
        public function process_admin_options()
        {
        }
        /**
         * Init fields that will store admin preferences.
         *
         * @return void
         */
        public function init_form_fields()
        {
        }
        /**
         * Returns text with placeholders that can be used in this email
         *
         * @param string $email_type Email type.
         *
         * @return string Placeholders
         *
         * @since 3.0.0
         */
        public static function get_placeholder_text($email_type, $placeholder_type = '')
        {
        }
        /**
         * Returns default email content.
         *
         * @param string $email_type Email type.
         *
         * @return string Placeholders
         *
         * @since 3.0.10
         */
        public static function get_default_content($email_type)
        {
        }
    }
    /**
     * Send back in stock status product.
     */
    class Back_In_Stock_Email extends \WC_Email
    {
        /**
         * Receiver user
         *
         * @var WP_User
         */
        public $user = \null;
        /**
         * Items that will be used for product table rendering
         *
         * @var $items
         */
        public $items = array();
        /**
         * True when the email notification is sent to customers.
         *
         * @var bool
         */
        protected $customer_email = \true;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Method triggered to send email
         *
         * @param integer $user_id User object.
         * @param array   $product_lists List of wishlist items.
         *
         * @return void
         */
        public function trigger($user_id, $product_lists)
        {
        }
        /**
         * Get content html.
         *
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Admin Panel Options Processing.
         */
        public function process_admin_options()
        {
        }
        /**
         * Init fields that will store admin preferences
         *
         * @return void
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * Send back in stock status product.
     */
    class On_Sale_Products_Email extends \WC_Email
    {
        /**
         * Receiver user
         *
         * @var WP_User
         */
        public $user = \null;
        /**
         * Items that will be used for product table rendering
         *
         * @var $items
         */
        public $items = array();
        /**
         * True when the email notification is sent to customers.
         *
         * @var bool
         */
        protected $customer_email = \true;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Method triggered to send email
         *
         * @param integer $user_id User object.
         * @param array   $product_lists List of wishlist items.
         *
         * @return void
         */
        public function trigger($user_id, $product_lists)
        {
        }
        /**
         * Get content html.
         *
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Admin Panel Options Processing.
         */
        public function process_admin_options()
        {
        }
        /**
         * Init fields that will store admin preferences
         *
         * @return void
         */
        public function init_form_fields()
        {
        }
    }
}
namespace XTS\WC_Wishlist {
    /**
     * Wishlist UI.
     *
     * @since 1.0.0
     */
    class Ui extends \XTS\Singleton
    {
        /**
         * Initialize action.
         *
         * @since 1.0.0
         */
        public function init()
        {
        }
        /**
         * Register hooks and actions.
         *
         * @since 1.0.0
         *
         * @return boolean
         */
        public function hooks()
        {
        }
        /**
         * Wishlist page shortcode output.
         *
         * @since 1.0.0
         */
        public function get_wishlist()
        {
        }
        /**
         * Add buttons.
         *
         * @since 1.0.0
         */
        public function button_hooks()
        {
        }
        /**
         * Wishlist page shortcode output.
         *
         * @codeCoverageIgnore
         * @since 1.0.0
         */
        public function wishlist_page()
        {
        }
        /**
         * Content of the wishlist page with products.
         *
         * @codeCoverageIgnore
         * @since 1.0.0
         *
         * @param object $wishlist Wishlist object.
         */
        public function wishlist_page_content($wishlist = false)
        {
        }
        /**
         * Wishlist content title.
         *
         * @codeCoverageIgnore
         * @param array $args Arguments.
         *
         * @return void
         */
        public function wishlist_content_header($args)
        {
        }
        /**
         * Wishlist empty content.
         *
         * @codeCoverageIgnore
         * @param bool $show_wishlist_empty_text Show text is wishlist empty.
         * @return void
         */
        public function wishlist_empty_content($show_wishlist_empty_text = true)
        {
        }
        /**
         * Remove button HTML.
         *
         * @codeCoverageIgnore
         * @since 1.0.0
         */
        public function output_settings_btn()
        {
        }
        /**
         * Add to wishlist button on loop product.
         *
         * @since 1.0.0
         */
        public function add_to_wishlist_loop_btn()
        {
        }
        /**
         * Add to wishlist button on single product.
         *
         * @since 1.0.0
         */
        public function add_to_wishlist_single_btn()
        {
        }
        /**
         * Add to wishlist button on sticky add to cart.
         *
         * @since 1.0.0
         */
        public function add_to_wishlist_sticky_atc_btn()
        {
        }
        /**
         * Add to wishlist button.
         *
         * @codeCoverageIgnore
         * @since 1.0.0
         *
         * @param string $classes Extra classes.
         */
        public function add_to_wishlist_btn($classes = '')
        {
        }
        /**
         * Add wishlist title to account menu.
         *
         * @since 1.0.0
         *
         * @param array $items Menu items.
         *
         * @return array
         */
        public function account_navigation($items)
        {
        }
        /**
         * Add URL to wishlist item in the menu.
         *
         * @since 1.0.0
         *
         * @param string $url Item url.
         * @param string $endpoint Endpoint name.
         * @param string $value Value.
         * @param string $permalink Item permalink.
         *
         * @return string
         */
        public function account_navigation_url($url, $endpoint, $value, $permalink)
        {
        }
        /**
         * Add active class to wishlist item in the menu.
         *
         * @since 1.0.0
         *
         * @param array  $classes Item classes.
         * @param string $endpoint Endpoint name.
         *
         * @return array
         */
        public function account_navigation_classes($classes, $endpoint)
        {
        }
        /**
         * Can user edit this wishlist or just view it.
         *
         * @since 1.0.0
         *
         * @return boolean
         */
        public function is_editable()
        {
        }
    }
    /**
     * Database storage.
     *
     * @since 1.0.0
     */
    class DB_Storage implements \XTS\WC_Wishlist\Storage
    {
        /**
         * Set cookie name in the constructor.
         *
         * @since 1.0
         *
         * @param integer $wishlist_id Wishlist id.
         * @param integer $user_id User id.
         *
         * @return void
         */
        public function __construct($wishlist_id, $user_id)
        {
        }
        /**
         * Add product to the wishlist.
         *
         * @since 1.0
         *
         * @param integer $product_id Product id.
         * @param integer $wishlist_id Wishlist group ID.
         *
         * @return boolean
         */
        public function add($product_id, $wishlist_id = 0)
        {
        }
        /**
         * Remove product from the wishlist.
         *
         * @since 1.0
         *
         * @param integer $product_id Product id.
         * @param integer $wishlist_id Wishlist group ID.
         *
         * @return boolean
         */
        public function remove($product_id, $wishlist_id = 0)
        {
        }
        /**
         * Remove product from the wishlist.
         *
         * @param integer $wishlist_id Product id.
         *
         * @return boolean
         */
        public function remove_group($wishlist_id)
        {
        }
        /**
         * Get all products.
         *
         * @return array
         */
        public function get_all()
        {
        }
        /**
         * Is product in compare.
         *
         * @since 1.0
         *
         * @param integer $product_id Product id.
         * @param string  $wishlist_id Wishlist group ID.
         *
         * @return boolean
         */
        public function is_product_exists($product_id, $wishlist_id = 0)
        {
        }
        /**
         * Get products by wishlist group.
         *
         * @param integer $group_id Group id.
         *
         * @return array
         */
        public function get_product_ids_by_wishlist_id($group_id)
        {
        }
        /**
         * Get ID wishlist group and check isset wishlist group with title.
         *
         * @param integer $id ID wishlist group or name wishlist group.
         *
         * @return string|null
         */
        public function get_wishlist_id_by_current_user($id)
        {
        }
        /**
         * Get wishlist groups by user id.
         *
         * @return array|object|null
         */
        public function get_all_wishlists_by_current_user()
        {
        }
        /**
         * Get wishlist title.
         *
         * @param integer $id Wishlist ID.
         * @return string|null
         */
        public function get_wishlist_title_by_wishlist_id($id)
        {
        }
        /**
         * Rename wishlist group.
         *
         * @param integer $group_id Wishlist group ID.
         * @param string  $title New title wishlist group.
         *
         * @return bool|int
         */
        public function rename_group($group_id, $title)
        {
        }
        /**
         * Can user edit this wishlist or just view it.
         *
         * @since 1.0.0
         *
         * @return boolean
         */
        public function is_editable()
        {
        }
    }
}
namespace XTS\Modules {
    /**
     * Wishlist.
     *
     * @since 1.0.0
     */
    class WC_Wishlist
    {
        /**
         * Class basic constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Base initialization class required for Module class.
         *
         * @since 1.0.0
         */
        public function init()
        {
        }
        /**
         * Add rewrite rules for wishlist.
         *
         * @since 1.0
         *
         * @return void
         */
        public function custom_rewrite_rule()
        {
        }
        /**
         * Add query vars for wishlist rewrite rules.
         *
         * @since 1.0
         *
         * @param array $vars Vars.
         *
         * @return array
         */
        public function add_query_vars($vars)
        {
        }
        /**
         * Add product to the wishlist AJAX action.
         *
         * @since 1.0
         *
         * @return boolean
         */
        public function add_to_wishlist_action()
        {
        }
        /**
         * Remove product from the wishlist AJAX action.
         *
         * @since 1.0
         *
         * @return boolean
         */
        public function remove_from_wishlist_action()
        {
        }
        /**
         * Remove product from wishlist.
         *
         * @param object  $wishlist Current wishlist.
         * @param integer $product_id Product ID.
         * @param integer $group_id Group ID.
         * @return void
         */
        public function remove_product_from_wishlist($wishlist, $product_id, $group_id)
        {
        }
        /**
         * Get wishlist object.
         *
         * @param integer $wishlist_id Wishlist id.
         *
         * @return object
         */
        public function get_wishlist($wishlist_id = false)
        {
        }
        /**
         * Install module and create tables on theme settings save.
         *
         * @since 1.0
         */
        public function theme_settings_install()
        {
        }
        /**
         * Install module and create tables.
         *
         * @since 1.0
         *
         * @return boolean
         */
        public function install()
        {
        }
        /**
         * Uninstall tables.
         *
         * @since 1.0
         *
         * @return boolean
         */
        public function uninstall()
        {
        }
        /**
         * Update localized settings.
         *
         * @param array $settings Settings.
         * @return array
         */
        public function update_localized_settings($settings)
        {
        }
    }
}
namespace XTS\WC_Wishlist {
    /**
     * Cookies storage.
     *
     * @since 1.0.0
     */
    class Cookies_Storage implements \XTS\WC_Wishlist\Storage
    {
        /**
         * Set cookie name in the constructor.
         *
         * @since 1.0
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Add product to the wishlist.
         *
         * @since 1.0
         *
         * @param integer $product_id Product id.
         *
         * @return boolean
         */
        public function add($product_id)
        {
        }
        /**
         * Remove product from the wishlist.
         *
         * @since 1.0
         *
         * @param integer $product_id Product id.
         *
         * @return boolean
         */
        public function remove($product_id)
        {
        }
        /**
         * Get all products.
         *
         * @since 1.0
         *
         * @return array
         */
        public function get_all()
        {
        }
        /**
         * Is product in compare.
         *
         * @since 1.0
         *
         * @param integer $product_id Product id.
         *
         * @return boolean
         */
        public function is_product_exists($product_id)
        {
        }
        public function get_product_ids_by_wishlist_id()
        {
        }
    }
}
namespace XTS\Modules\Shipping_Progress_Bar {
    /**
     * Free shipping progress bar.
     */
    class Main extends \XTS\Singleton
    {
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Add options in theme settings.
         */
        public function add_options()
        {
        }
        /**
         * Output shipping progress bar.
         */
        public function output_shipping_progress_bar()
        {
        }
        /**
         * Update fragments shipping progress bar.
         *
         * @return void
         */
        public function output_shipping_progress_bar_in_mini_cart()
        {
        }
        /**
         * Get shipping progress bar content.
         *
         * @codeCoverageIgnore
         * @return void
         */
        public function render_shipping_progress_bar_with_wrapper()
        {
        }
        /**
         * Add shipping progress bar fragment.
         *
         * @param array $array Fragments.
         *
         * @return array
         */
        public function get_shipping_progress_bar_checkout_fragments($array)
        {
        }
        /**
         * Add shipping progress bar fragment.
         *
         * @param array $array Fragments.
         *
         * @return array
         */
        public function get_shipping_progress_bar_fragments($array)
        {
        }
        /**
         * Render free shipping progress bar.
         *
         * @codeCoverageIgnore
         */
        public function render_shipping_progress_bar()
        {
        }
    }
}
namespace XTS\Modules\Sticky_Navigation {
    /**
     * Sticky navigation.
     *
     * @since 1.0.0
     */
    class Main extends \XTS\Singleton
    {
        /**
         * Basic initialization class required for Module class.
         *
         * @since 1.0.0
         */
        public function init()
        {
        }
        /**
         * Output sticky category navigation menu.
         *
         * @codeCoverageIgnore
         * @since 1.0.0
         */
        public function template()
        {
        }
        /**
         * Enqueue style.
         *
         * @return void
         */
        public function enqueue_styles()
        {
        }
        /**
         * Add options.
         *
         * @since 1.0.0
         */
        public function add_options()
        {
        }
        /**
         * Added extra class for sticky navigation.
         *
         * @param array $classes Body class.
         *
         * @return array
         */
        public function body_class($classes)
        {
        }
        /**
         * Add localized settings.
         *
         * @param array $settings Settings.
         * @return array
         */
        public function add_localized_settings($settings)
        {
        }
    }
}
namespace XTS\Modules\Frequently_Bought_Together {
    /**
     * Class Table
     *
     * @package Woodmart
     */
    class Bundles_Table extends \WP_List_Table
    {
        /**
         * Constructor.
         */
        public function __construct($product_id = '')
        {
        }
        /**
         * Default column.
         *
         * @codeCoverageIgnore
         * @param array  $item Data.
         * @param string $column_name Column name.
         *
         * @return array
         */
        protected function column_default($item, $column_name)
        {
        }
        /**
         * Get content in column Name.
         *
         * @codeCoverageIgnore
         * @param array $item Data.
         *
         * @return void
         */
        protected function column_name($item)
        {
        }
        /**
         * Get content in column Product.
         *
         * @codeCoverageIgnore
         * @param array $item Data.
         *
         * @return string
         */
        protected function column_products($item)
        {
        }
        /**
         * Return array with columns titles.
         *
         * @return array
         */
        public function get_columns()
        {
        }
        /**
         * Set items data in table.
         *
         * @param string $product_id Product ID.
         */
        public function prepare_items($product_id = '')
        {
        }
        /**
         * Render if no items.
         */
        public function no_items()
        {
        }
    }
    /**
     * Render class.
     */
    class Render extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Enqueue cart style.
         *
         * @return void
         */
        public function enqueue_style()
        {
        }
        /**
         * Add to cart frequently bought together products.
         *
         * @return void
         */
        public function purchasable_fbt_products()
        {
        }
        /**
         * Update total price.
         *
         * @param object $cart_object Cart data.
         * @return object
         */
        public function before_calculate_totals($cart_object)
        {
        }
        /**
         * Update price in cart.
         *
         * @codeCoverageIgnore
         * @param string $price Product price.
         * @param array  $cart_item Product data.
         * @return string
         */
        public function cart_item_price($price, $cart_item)
        {
        }
        /**
         * Update subtotal price in cart.
         *
         * @codeCoverageIgnore
         * @param string $price Product price.
         * @param array  $cart_item Product data.
         * @return string
         */
        public function cart_item_subtotal($price, $cart_item)
        {
        }
        /**
         * Cart item remove link.
         *
         * @param string $link Quantity content.
         * @param string $cart_item_key Product key.
         *
         * @return string
         */
        public function cart_item_remove_link($link, $cart_item_key)
        {
        }
        /**
         * Cart item quantity.
         *
         * @codeCoverageIgnore
         * @param string $quantity Quantity content.
         * @param string $cart_item_key Product key.
         *
         * @return string
         */
        public function cart_item_quantity($quantity, $cart_item_key)
        {
        }
        /**
         * Update bundles products quantity.
         *
         * @param string  $cart_item_key Item key.
         * @param integer $quantity New quantity.
         * @param integer $old_quantity Old quantity.
         * @param object  $cart Cart data.
         *
         * @return void
         */
        public function update_cart_item_quantity($cart_item_key, $quantity, $old_quantity, $cart)
        {
        }
        /**
         * Widget cart item quantity.
         *
         * @param boolean $show Show quantity.
         * @param string  $cart_item_key Product key.
         *
         * @return false
         */
        public function widget_cart_item_quantity($show, $cart_item_key)
        {
        }
        /**
         * Update item class cart for frequently bought together product.
         *
         * @param string $classes Item classes.
         * @param array  $cart_item Product data.
         * @param string $cart_item_key Product key.
         *
         * @return string
         */
        public function cart_item_class($classes, $cart_item, $cart_item_key)
        {
        }
        /**
         * Update title in cart for frequently bought together product.
         *
         * @codeCoverageIgnore
         * @param string $item_name Product title.
         * @param array  $item Product data.
         * @return string
         */
        public function cart_item_name($item_name, $item)
        {
        }
        /**
         * Remove frequently bought together products.
         *
         * @param string $cart_item_key Product key.
         * @param array  $cart Cart data.
         * @return void
         */
        public function cart_item_removed($cart_item_key, $cart)
        {
        }
        /**
         * Restore cart items.
         *
         * @param string $cart_item_key Cart item.
         * @param object $cart Cart data.
         *
         * @return void
         */
        public function restore_cart_items($cart_item_key, $cart)
        {
        }
        /**
         * Get item from session.
         *
         * @param array $cart_item Cart data.
         * @param array $item_session_values Session cart data.
         *
         * @return array
         */
        public function get_cart_item_from_session($cart_item, $item_session_values)
        {
        }
    }
    /**
     * Frontend class.
     *
     * @codeCoverageIgnore
     */
    class Frontend extends \XTS\Singleton
    {
        /**
         * Frequently bought together products.
         *
         * @var array
         */
        protected $wfbt_products = array();
        /**
         * Frequently bought together main product id.
         *
         * @var string
         */
        protected $main_product_id = '';
        /**
         * Bundle ID.
         *
         * @var string
         */
        protected $bundle_id = '';
        /**
         * Subtotal bundle products price.
         *
         * @var array
         */
        protected $subtotal_products_price = array();
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Update ajax frequently bought price.
         *
         * @return void
         */
        public function update_frequently_bought_price()
        {
        }
        /**
         * Get bought together products content.
         *
         * @param array $element_settings Settings.
         *
         * @return void
         */
        public function get_bought_together_products($element_settings = array())
        {
        }
        /**
         * Get heading content.
         *
         * @param string $title Title.
         * @param bool   $is_builder Is builder.
         *
         * @return void
         */
        protected function get_heading($title = '', $is_builder = false)
        {
        }
        /**
         * Get form content.
         *
         * @param array $settings Settings.
         *
         * @return void
         */
        public function get_form_content($settings)
        {
        }
        /**
         * Get purchase content.
         *
         * @return void
         */
        protected function get_products_purchase()
        {
        }
        /**
         * Update product price.
         *
         * @param string $price Product price HTML.
         * @param object $product Product data.
         *
         * @return string
         */
        public function update_product_price($price, $product)
        {
        }
        /**
         * Added product sale label.
         *
         * @param array $content Labels.
         *
         * @return array
         */
        public function added_sale_label($content)
        {
        }
        /**
         * Update main image for variable product.
         *
         * @param integer $image_id Product image ID.
         * @return string
         */
        public function update_variation_image($image_id)
        {
        }
    }
    /**
     * Frequently bought together class.
     */
    class Main extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Include files.
         *
         * @return void
         */
        public function include_files()
        {
        }
        /**
         * Add options in theme settings.
         */
        public function add_options()
        {
        }
    }
    /**
     * Controls class.
     */
    class Controls extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Enqueue admin scripts.
         *
         * @return void
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Add metaboxes.
         */
        public function add_metaboxes()
        {
        }
        /**
         * Add custom tab in WC tabs.
         *
         * @param array $tabs WooCommerce tabs.
         * @return array
         */
        public function product_data_tabs($tabs)
        {
        }
        /**
         * Add custom tab content in WC tabs.
         *
         * @codeCoverageIgnore
         * @return void
         */
        public function product_data_panels()
        {
        }
        /**
         * Added custom columns.
         *
         * @param array $columns Default columns.
         *
         * @return array
         */
        public function edit_columns($columns)
        {
        }
        /**
         * Added custom content for columns.
         *
         * @param string  $column Column.
         * @param integer $post_id Post ID.
         *
         * @return void
         */
        public function manage_columns($column, $post_id)
        {
        }
        /**
         * Added bundles for product metabox.
         *
         * @return void
         */
        public function get_settings_content()
        {
        }
        /**
         * Save bundle for main product.
         *
         * @param integer $post_id Post ID.
         *
         * @return void
         */
        public function save_control($post_id)
        {
        }
    }
}
namespace XTS\Modules\Product_Reviews {
    /**
     * Reviews class.
     */
    class Reviews extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        public function do_after_setup_globals_options()
        {
        }
        /**
         * Add ajax loader html.
         *
         * @return void
         */
        public function get_ajax_loader()
        {
        }
        /**
         * Added custom css classes for product reviews li.
         *
         * @param string[]    $classes An array of comment classes.
         * @param string[]    $css_class  An array of additional classes added to the list.
         * @param string      $comment_id The comment ID as a numeric string.
         * @param WP_Comment  $comment    The comment object.
         * @param int|WP_Post $post_id    The post ID or WP_Post object.
         *
         * @return string[]
         */
        public function add_comment_class($classes, $css_class, $comment_id, $comment, $post_id)
        {
        }
        /**
         * Get list of comments.
         *
         * @return array List of comments.
         */
        public function filter_comments()
        {
        }
        /**
         * Render title.
         *
         * @codeCoverageIgnore
         * @param bool $return Do you need to return the html?.
         * @return string|void
         */
        public function render_title($return = false)
        {
        }
        /**
         * Render comments.
         *
         * @codeCoverageIgnore
         * @param bool $return Do you need to return the html?.
         * @return string|void
         */
        public function render_comments($return = false)
        {
        }
        /**
         * Render pagination.
         *
         * @codeCoverageIgnore
         * @param bool $return Do you need to return the html?.
         * @return string|void
         */
        public function render_pagination($return = false)
        {
        }
        /**
         * Filter reviews with ajax.
         *
         * @codeCoverageIgnore
         */
        public function ajax_filter_reviews()
        {
        }
    }
    /**
     * Likes class.
     */
    class Helper
    {
        /**
         * Get current product_id from $_GET or from global const $product.
         *
         * @return int|string
         */
        public static function get_product_id()
        {
        }
        /**
         * Get current ratings from $_GET. Default: empty string.
         *
         * @return array
         */
        public static function get_ratings_from_request()
        {
        }
        /**
         * Get current order_by from $_GET. Default: 'newest'.
         *
         * @return string
         */
        public static function get_order_by_from_request()
        {
        }
        /**
         * Get current only_images from $_GET. Default: 'false' string.
         *
         * @return bool
         */
        public static function show_only_image()
        {
        }
    }
    /**
     * Reviews_Sorting class.
     */
    class Reviews_Sorting extends \XTS\Singleton
    {
        public function init()
        {
        }
        public function do_after_setup_globals_options()
        {
        }
        /**
         * Get "Reviews sorting" fields.
         *
         * @return array
         */
        public function get_sorting_fields()
        {
        }
        /**
         * Render.
         *
         * @codeCoverageIgnore
         * @param bool $return Do you need to return the html?.
         * @return string|void
         */
        public function render($return = false)
        {
        }
    }
    /**
     * Purchased_Indicator class.
     */
    class Purchased_Indicator
    {
        /**
         * Class basic constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Add icon and tooltip to author name. This method will add 'Verified owner' icon if is purchased product or 'Store manager' icon if this is review replay.
         *
         * @param string $author     The comment author's username.
         * @param string $comment_ID The comment ID as a numeric string.
         * @return string
         */
        public function add_author_icon($author, $comment_ID)
        {
        }
        /**
         * Verify is user purchased product.
         *
         * @param string $comment_id The comment ID as a numeric string.
         * @return bool
         */
        protected function is_user_purchased_product($comment_id)
        {
        }
        /**
         * Check if this comment is parent.
         *
         * @param string $comment_id The comment ID as a numeric string.
         * @return bool
         */
        protected function is_parent_comment($comment_id)
        {
        }
    }
    /**
     * Pros_Cons class.
     */
    class Pros_Cons
    {
        /**
         * Class basic constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Hooks.
         */
        public function hooks()
        {
        }
        /**
         * This method saves pros/cons fields after editing them on the admin page.
         *
         * @param int   $comment_id Current comment id.
         * @param array $data Comment data.
         *
         * @return void
         */
        public function edit_comment_pros_cons($comment_id, $data)
        {
        }
        /**
         * This method save new meta-data for comment.
         *
         * @param int $comment_id Current comment id.
         *
         * @return void
         */
        public function save_comment_pros_cons($comment_id)
        {
        }
        /**
         * This method add new fields to comment form.
         *
         * @param array $comment_form List of data for render comment form.
         *
         * @return array
         */
        public function add_pros_cons_fields($comment_form)
        {
        }
        /**
         * Render additional field after `.comment-text`.
         *
         * @codeCoverageIgnore
         * @param string     $comment_content Comment content html.
         * @param WP_Comment $comment Single comment.
         *
         * @return string
         */
        public function render($comment_content, $comment)
        {
        }
        /**
         * Add metaboxes for product reviews.
         *
         * @since 1.0.0
         */
        public function add_metaboxes()
        {
        }
    }
}
namespace XTS\Modules {
    /**
     * Product_Reviews class.
     */
    class Product_Reviews extends \XTS\Singleton
    {
        /**
         * Init.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        public function do_after_setup_globals_options()
        {
        }
        /**
         * Add options
         */
        public function add_options()
        {
        }
        /**
         * Include main files.
         */
        public function include_files()
        {
        }
        /**
         * Add localized settings.
         *
         * @param array $settings Settings.
         * @return array
         */
        public function add_localized_settings($settings)
        {
        }
    }
}
namespace XTS\Modules\Product_Reviews {
    /**
     * Likes class.
     */
    class Likes
    {
        /**
         * Class basic constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Hooks.
         */
        public function hooks()
        {
        }
        /**
         * This method add comment meta data likes/dislikes before save reviews.
         *
         * @param int $comment_id Current comment id.
         *
         * @return void
         */
        public function save_comment($comment_id)
        {
        }
        /**
         * This method update comments votes meta-data ( 'likes', 'dislikes', 'vote' ).
         * If $_POST there is no needed params will be return 0.
         *
         * @return int|void
         */
        public function ajax_comments_likes()
        {
        }
        /**
         * Add localized settings.
         *
         * @param array $settings Settings.
         * @return array
         */
        public function add_localized_settings($settings)
        {
        }
        /**
         * Render comments html with pros and cons field.
         *
         * @codeCoverageIgnore
         * @param WP_Comment $data_object Comment data object.
         *
         * @return void
         */
        public function render($data_object)
        {
        }
    }
    /**
     * Rating_Summary class.
     */
    class Rating_Summary extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Hooks.
         */
        public function hooks()
        {
        }
        /**
         * Get percentage or average from rating.
         *
         * @param string $criteria_slug Criteria slug from `reviews_rating_summary_criteria_${n}_slug` option
         * @param string|array $rating List of ratings by this criteria slug, or simple rating key.
         * @param string $format Format rating value. You can get 'percentage' or 'average' rating. Default = 'percentage'.
         * @return float|int
         */
        public function get_rating_value($criteria_slug, $rating, $format = 'percentage')
        {
        }
        /**
         * Render rating summary.
         *
         * @codeCoverageIgnore
         * @param bool $return Do you need to return the html?.
         * @return string|void
         */
        public function render_filter_dashboard($return = false)
        {
        }
        /**
         * This method returns a value HTTP_REFERER, to return to the same page after adding a new comment to the product.
         *
         * @param string $location The 'redirect_to' URI sent via $_POST.
         * @return array|string
         */
        public function redirect_after_comment($location)
        {
        }
    }
    /**
     * Rating_Summary class.
     */
    class Rating_Criteria extends \XTS\Singleton
    {
        /**
         * Init.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Hooks.
         */
        public function hooks()
        {
        }
        /**
         * Check show criteria star rating html structure.
         * 
         * @param string $comment_id A numeric string, for compatibility reasons.
         * @return bool
         */
        public function is_show_criteria_star_rating($comment_id)
        {
        }
        /**
         * This method add wrapper for star rating html.
         *
         * @codeCoverageIgnore
         * @param  WP_Comment $comment
         * @return void
         */
        public function render_star_rating($comment)
        {
        }
        /**
         * This method return criteria stars ratings fields to comment form.
         *
         * @codeCoverageIgnore
         * @return string
         */
        public function get_criteria_stars_ratings_fields()
        {
        }
        /**
         * This method save comment summary criteria ratings.
         *
         * @param int $comment_id Current comment id.
         *
         * @return void
         */
        public function save_comment_summary_criteria($comment_id)
        {
        }
        /**
         * Get summary criteria list. When key is criteria id and value is criteria title.
         *
         * @return array Example: array( 'criteria_id' => 'criteria_title', ).
         */
        public function get_summary_criteria_list()
        {
        }
        /**
         * Check criteria rating is enabled.
         *
         * @return bool
         */
        public function is_criteria_enabled()
        {
        }
        /**
         * Clear woodmart_criteria_hash transients.
         *
         * @param int $comment_ID Current comment id.
         * @return void
         */
        public function clear_transient($comment_ID)
        {
        }
        /**
         * Get criteria rating list, when key is `reviews_rating_summary_criteria_${n}_slug` and value is list of ratings by this key.
         * Example: array(
         *      'criteria_slug_1' => array( 1, 2, 3, 4, 5, ),
         *      'criteria_slug_2' => array( 1, 5, 2, ),
         * );
         *
         * @return array
         */
        public function get_criteria_rating_list()
        {
        }
        /**
         * Add localized settings.
         *
         * @param array $settings Settings.
         * @return array
         */
        public function add_localized_settings($settings)
        {
        }
    }
}
namespace {
    /**
     * Comment images class.
     *
     * @since 1.0.0
     */
    class WC_Comment_Images
    {
        /**
         * Class basic constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Set up all actions.
         *
         * @since 1.0.0
         */
        public function hooks()
        {
        }
        /**
         * Enables filtering of the standard list of allowed mime types and file extensions.
         *
         * @since 1.1.0
         */
        public function enable_filter_upload()
        {
        }
        /**
         * Disables filtering of the standard list of allowed mime types and file extensions.
         *
         * @since 1.1.0
         */
        public function disable_filter_upload()
        {
        }
        /**
         * Filters a standard list of allowed mime types and file extensions.
         *
         * @since 1.0.0
         *
         * @return array
         */
        public function filter_upload_mimes()
        {
        }
        /**
         * Gets the meta key of the attachment ID for comment meta.
         *
         * @since 1.0.0
         *
         * @return string
         */
        public function get_images_meta_key()
        {
        }
        /**
         * Gets the name of the upload field used in the commenting form.
         *
         * @since 1.0.0
         *
         * @return string
         */
        public function get_upload_field_name()
        {
        }
        /**
         * Gets max upload file size.
         *
         * @since 1.0.0
         *
         * @param bool $with_format Optional.
         *
         * @return integer|string
         */
        public function get_max_upload_size($with_format = \false)
        {
        }
        /**
         * Add metaboxes
         *
         * @since 1.0.0
         */
        public function add_metaboxes()
        {
        }
        /**
         * Checks if a comment has an attachment.
         *
         * @since 1.0.0
         *
         * @param integer $comment_id Optional. The comment ID.
         *
         * @return bool
         */
        public function has_images($comment_id = 0)
        {
        }
        /**
         * Gets an assigned attachment ID.
         *
         * @since 1.0.0
         *
         * @param integer $comment_id Optional. The comment ID.
         *
         * @return string
         */
        public function get_image_ids_meta($comment_id = 0)
        {
        }
        /**
         * Gets an assigned attachment ID.
         *
         * @since 1.0.0
         *
         * @param integer $comment_id Optional. The comment ID.
         *
         * @return array
         */
        public function get_image_ids_array($comment_id = 0)
        {
        }
        /**
         * Retrieve the comment id of the current comment.
         *
         * @since 1.5.0
         *
         * @return int The comment ID.
         */
        public function get_comment_ID()
        {
        }
        /**
         * Displays an assigned attachment.
         *
         * @since 1.0.0
         *
         * @param string $comment_content Text of the comment.
         *
         * @return string
         */
        public function display_images($comment_content)
        {
        }
        /**
         * Deletes an assigned attachment.
         *
         * @since 1.0.0
         *
         * @param integer $comment_id The comment ID.
         */
        public function delete_image($comment_id)
        {
        }
        /**
         * Saves attachment after comment is posted.
         *
         * @since 1.0.0
         *
         * @codeCoverageIgnore
         * @param integer        $comment_id       The comment ID.
         * @param integer|string $comment_approved 1 if the comment is approved, 0 if not, 'spam' if spam.
         * @param array          $comment          Comment data.
         */
        public function save_image($comment_id, $comment_approved, $comment)
        {
        }
        /**
         * Assigns an attachment for the comment.
         *
         * @since 1.0.0
         *
         * @return array
         */
        public function get_image_sizes()
        {
        }
        /**
         * Assigns an attachment for the comment.
         *
         * @since 1.0.0
         *
         * @param integer $comment_id The comment ID.
         * @param string  $image_ids  The attachment IDs.
         *
         * @return integer|bool
         */
        public function assign_images($comment_id, $image_ids)
        {
        }
        /**
         * Checks the attachment before posting a comment.
         *
         * @since 1.0.0
         *
         * @codeCoverageIgnore
         * @param array $comment_data Comment data.
         *
         * @return array
         */
        public function check_images($comment_data)
        {
        }
        /**
         * Gets the meta key of the attachment ID for comment meta.
         *
         * @since 1.0.0
         *
         * @codeCoverageIgnore
         * @param string $submit_field Default html.
         *
         * @return string
         */
        public function add_image_field($submit_field)
        {
        }
    }
}
namespace XTS\Modules {
    /**
     * Product_Reviews class.
     */
    class Checkout_Order_Table extends \XTS\Singleton
    {
        /**
         * Init.
         */
        public function init()
        {
        }
        /**
         * Hooks.
         */
        public function hooks()
        {
        }
        /**
         * Add options
         */
        public function add_options()
        {
        }
        /**
         * Check whether you need to rewrite the default review-order.php product table.
         *
         * @return bool
         */
        public function is_enable_woodmart_product_table_template()
        {
        }
        /**
         * Replaces default review-order.php product table by woodmart product table template (checkout/review-order-product-table.php).
         * Adds filter to hide default review order product table output.
         *
         * @codeCoverageIgnore
         */
        public function checkout_table_content_replacement()
        {
        }
    }
}
namespace XTS\Modules\Visitor_Counter {
    /**
     * Count products visits.
     */
    class Main extends \XTS\Singleton
    {
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Add options in theme settings.
         */
        public function add_options()
        {
        }
        /**
         * Add before add to cart count product visits.
         */
        public function add_count_products_visits()
        {
        }
        /**
         * Output count product visits in builder and single product.
         *
         * @codeCoverageIgnore
         * @param string $extra_classes Extra classes.
         */
        public function output_count_visitors($extra_classes = '', $icon_output = '')
        {
        }
        /**
         * Get count visit in database.
         *
         * @param integer $product_id Product ID.
         * @param integer $live_visits Current visit.
         * @return int
         */
        public function get_count_visits_in_db($product_id, $live_visits = 0)
        {
        }
        /**
         * Get current user IP
         *
         * @return string
         */
        public function get_user_ip()
        {
        }
        /**
         * Ajax count update.
         */
        public function update_count_product_visits()
        {
        }
        /**
         * Add live duration in localized settings.
         *
         * @param array $localized Settings.
         *
         * @return array
         */
        public function add_localized_settings($localized)
        {
        }
        /**
         * Count visits content.
         *
         * @codeCoverageIgnore
         * @param integer $count Count visits.
         * @param string  $extra_classes Extra classes.
         *
         * @return void
         */
        public function get_count_content($count, $extra_classes = '', $icon_output = '')
        {
        }
    }
}
namespace XTS\Modules\Sold_Counter {
    /**
     * The main class for sales booster.
     */
    class Main extends \XTS\Singleton
    {
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Add options in theme settings.
         *
         * @return void
         */
        public function add_options()
        {
        }
        /**
         * Get sales count data for render by product id.
         *
         * @param int $id Product id.
         *
         * @return false|array
         */
        public function get_product_sales_count_data($id)
        {
        }
        /**
         * Render output html.
         *
         * @codeCoverageIgnore
         * @param string $classes     Custom classes for sold counter wrapper.
         * @param string $icon_output Icon html for output in sold counter.
         *
         * @return void
         */
        public function render($classes = '', $icon_output = '')
        {
        }
    }
}
namespace XTS\Modules\Quick_Buy {
    /**
     * Quick buy.
     */
    class Main extends \XTS\Singleton
    {
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Include files.
         */
        public function include_files()
        {
        }
        /**
         * Add options in theme settings.
         */
        public function add_options()
        {
        }
        /**
         * Output quick buy button.
         *
         * @codeCoverageIgnore
         */
        public function output_quick_buy_button()
        {
        }
    }
    /**
     * Quick buy.
     */
    class Redirect extends \XTS\Singleton
    {
        /**
         * Constructor.
         */
        public function init()
        {
        }
        /**
         * Quick buy action.
         *
         * @return void
         */
        public function add_to_cart_action()
        {
        }
        /**
         * Update WooCommerce message when active buy now.
         *
         * @codeCoverageIgnore
         * @param string  $message Message.
         * @param array   $products Product ID list or single product ID.
         * @param integer $show_qty Should quantities be shown? Added in 2.6.0.
         * @return string
         */
        public function update_add_to_cart_message($message, $products, $show_qty)
        {
        }
        /**
         * Redirect user after quick buy button is submitted.
         *
         * @param string $url Url.
         *
         * @return string
         */
        public function quick_buy_redirect($url)
        {
        }
        /**
         * Fetches proper redirect url from DB and returns It.
         *
         * @param integer $product_id Product ID.
         *
         * @return array
         */
        public function get_redirect_url($product_id)
        {
        }
    }
}
namespace {
    /**
     * Automatic plugin installation and activation library.
     *
     * Creates a way to automatically install and activate plugins from within themes.
     * The plugins can be either bundled, downloaded from the WordPress
     * Plugin Repository or downloaded from another external source.
     *
     * @since 1.0.0
     *
     * @package TGM-Plugin-Activation
     * @author  Thomas Griffin
     * @author  Gary Jones
     */
    class TGM_Plugin_Activation
    {
        /**
         * TGMPA version number.
         *
         * @since 2.5.0
         *
         * @const string Version number.
         */
        const TGMPA_VERSION = '2.6.1';
        /**
         * Regular expression to test if a URL is a WP plugin repo URL.
         *
         * @const string Regex.
         *
         * @since 2.5.0
         */
        const WP_REPO_REGEX = '|^http[s]?://wordpress\\.org/(?:extend/)?plugins/|';
        /**
         * Arbitrary regular expression to test if a string starts with a URL.
         *
         * @const string Regex.
         *
         * @since 2.5.0
         */
        const IS_URL_REGEX = '|^http[s]?://|';
        /**
         * Holds a copy of itself, so it can be referenced by the class name.
         *
         * @since 1.0.0
         *
         * @var TGM_Plugin_Activation
         */
        public static $instance;
        /**
         * Holds arrays of plugin details.
         *
         * @since 1.0.0
         * @since 2.5.0 the array has the plugin slug as an associative key.
         *
         * @var array
         */
        public $plugins = array();
        /**
         * Holds arrays of plugin names to use to sort the plugins array.
         *
         * @since 2.5.0
         *
         * @var array
         */
        protected $sort_order = array();
        /**
         * Whether any plugins have the 'force_activation' setting set to true.
         *
         * @since 2.5.0
         *
         * @var bool
         */
        protected $has_forced_activation = \false;
        /**
         * Whether any plugins have the 'force_deactivation' setting set to true.
         *
         * @since 2.5.0
         *
         * @var bool
         */
        protected $has_forced_deactivation = \false;
        /**
         * Name of the unique ID to hash notices.
         *
         * @since 2.4.0
         *
         * @var string
         */
        public $id = 'tgmpa';
        /**
         * Name of the query-string argument for the admin page.
         *
         * @since 1.0.0
         *
         * @var string
         */
        protected $menu = 'tgmpa-install-plugins';
        /**
         * Parent menu file slug.
         *
         * @since 2.5.0
         *
         * @var string
         */
        public $parent_slug = 'themes.php';
        /**
         * Capability needed to view the plugin installation menu item.
         *
         * @since 2.5.0
         *
         * @var string
         */
        public $capability = 'edit_theme_options';
        /**
         * Default absolute path to folder containing bundled plugin zip files.
         *
         * @since 2.0.0
         *
         * @var string Absolute path prefix to zip file location for bundled plugins. Default is empty string.
         */
        public $default_path = '';
        /**
         * Flag to show admin notices or not.
         *
         * @since 2.1.0
         *
         * @var boolean
         */
        public $has_notices = \true;
        /**
         * Flag to determine if the user can dismiss the notice nag.
         *
         * @since 2.4.0
         *
         * @var boolean
         */
        public $dismissable = \true;
        /**
         * Message to be output above nag notice if dismissable is false.
         *
         * @since 2.4.0
         *
         * @var string
         */
        public $dismiss_msg = '';
        /**
         * Flag to set automatic activation of plugins. Off by default.
         *
         * @since 2.2.0
         *
         * @var boolean
         */
        public $is_automatic = \false;
        /**
         * Optional message to display before the plugins table.
         *
         * @since 2.2.0
         *
         * @var string Message filtered by wp_kses_post(). Default is empty string.
         */
        public $message = '';
        /**
         * Holds configurable array of strings.
         *
         * Default values are added in the constructor.
         *
         * @since 2.0.0
         *
         * @var array
         */
        public $strings = array();
        /**
         * Holds the version of WordPress.
         *
         * @since 2.4.0
         *
         * @var int
         */
        public $wp_version;
        /**
         * Holds the hook name for the admin page.
         *
         * @since 2.5.0
         *
         * @var string
         */
        public $page_hook;
        /**
         * Adds a reference of this object to $instance, populates default strings,
         * does the tgmpa_init action hook, and hooks in the interactions to init.
         *
         * {@internal This method should be `protected`, but as too many TGMPA implementations
         * haven't upgraded beyond v2.3.6 yet, this gives backward compatibility issues.
         * Reverted back to public for the time being.}}
         *
         * @since 1.0.0
         *
         * @see TGM_Plugin_Activation::init()
         */
        public function __construct()
        {
        }
        /**
         * Magic method to (not) set protected properties from outside of this class.
         *
         * {@internal hackedihack... There is a serious bug in v2.3.2 - 2.3.6  where the `menu` property
         * is being assigned rather than tested in a conditional, effectively rendering it useless.
         * This 'hack' prevents this from happening.}}
         *
         * @see https://github.com/TGMPA/TGM-Plugin-Activation/blob/2.3.6/tgm-plugin-activation/class-tgm-plugin-activation.php#L1593
         *
         * @since 2.5.2
         *
         * @param string $name  Name of an inaccessible property.
         * @param mixed  $value Value to assign to the property.
         * @return void  Silently fail to set the property when this is tried from outside of this class context.
         *               (Inside this class context, the __set() method if not used as there is direct access.)
         */
        public function __set($name, $value)
        {
        }
        /**
         * Magic method to get the value of a protected property outside of this class context.
         *
         * @since 2.5.2
         *
         * @param string $name Name of an inaccessible property.
         * @return mixed The property value.
         */
        public function __get($name)
        {
        }
        /**
         * Initialise the interactions between this class and WordPress.
         *
         * Hooks in three new methods for the class: admin_menu, notices and styles.
         *
         * @since 2.0.0
         *
         * @see TGM_Plugin_Activation::admin_menu()
         * @see TGM_Plugin_Activation::notices()
         * @see TGM_Plugin_Activation::styles()
         */
        public function init()
        {
        }
        /**
         * Load translations.
         *
         * @since 2.6.0
         *
         * (@internal Uses `load_theme_textdomain()` rather than `load_plugin_textdomain()` to
         * get round the different ways of handling the path and deprecated notices being thrown
         * and such. For plugins, the actual file name will be corrected by a filter.}}
         *
         * {@internal IMPORTANT! If this function changes, review the regex in the custom TGMPA
         * generator on the website.}}
         */
        public function load_textdomain()
        {
        }
        /**
         * Correct the .mo file name for (must-use) plugins.
         *
         * Themese use `/path/{locale}.mo` while plugins use `/path/{text-domain}-{locale}.mo`.
         *
         * {@internal IMPORTANT! If this function changes, review the regex in the custom TGMPA
         * generator on the website.}}
         *
         * @since 2.6.0
         *
         * @param string $mofile Full path to the target mofile.
         * @param string $domain The domain for which a language file is being loaded.
         * @return string $mofile
         */
        public function correct_plugin_mofile($mofile, $domain)
        {
        }
        /**
         * Potentially overload the fall-back translation file for the current language.
         *
         * WP, by default since WP 3.7, will load a local translation first and if none
         * can be found, will try and find a translation in the /wp-content/languages/ directory.
         * As this library is theme/plugin agnostic, translation files for TGMPA can exist both
         * in the WP_LANG_DIR /plugins/ subdirectory as well as in the /themes/ subdirectory.
         *
         * This method makes sure both directories are checked.
         *
         * {@internal IMPORTANT! If this function changes, review the regex in the custom TGMPA
         * generator on the website.}}
         *
         * @since 2.6.0
         *
         * @param string $mofile Full path to the target mofile.
         * @param string $domain The domain for which a language file is being loaded.
         * @return string $mofile
         */
        public function overload_textdomain_mofile($mofile, $domain)
        {
        }
        /**
         * Hook in plugin action link filters for the WP native plugins page.
         *
         * - Prevent activation of plugins which don't meet the minimum version requirements.
         * - Prevent deactivation of force-activated plugins.
         * - Add update notice if update available.
         *
         * @since 2.5.0
         */
        public function add_plugin_action_link_filters()
        {
        }
        /**
         * Remove the 'Activate' link on the WP native plugins page if the plugin does not meet the
         * minimum version requirements.
         *
         * @since 2.5.0
         *
         * @param array $actions Action links.
         * @return array
         */
        public function filter_plugin_action_links_activate($actions)
        {
        }
        /**
         * Remove the 'Deactivate' link on the WP native plugins page if the plugin has been set to force activate.
         *
         * @since 2.5.0
         *
         * @param array $actions Action links.
         * @return array
         */
        public function filter_plugin_action_links_deactivate($actions)
        {
        }
        /**
         * Add a 'Requires update' link on the WP native plugins page if the plugin does not meet the
         * minimum version requirements.
         *
         * @since 2.5.0
         *
         * @param array $actions Action links.
         * @return array
         */
        public function filter_plugin_action_links_update($actions)
        {
        }
        /**
         * Handles calls to show plugin information via links in the notices.
         *
         * We get the links in the admin notices to point to the TGMPA page, rather
         * than the typical plugin-install.php file, so we can prepare everything
         * beforehand.
         *
         * WP does not make it easy to show the plugin information in the thickbox -
         * here we have to require a file that includes a function that does the
         * main work of displaying it, enqueue some styles, set up some globals and
         * finally call that function before exiting.
         *
         * Down right easy once you know how...
         *
         * Returns early if not the TGMPA page.
         *
         * @since 2.1.0
         *
         * @global string $tab Used as iframe div class names, helps with styling
         * @global string $body_id Used as the iframe body ID, helps with styling
         *
         * @return null Returns early if not the TGMPA page.
         */
        public function admin_init()
        {
        }
        /**
         * Enqueue thickbox scripts/styles for plugin info.
         *
         * Thickbox is not automatically included on all admin pages, so we must
         * manually enqueue it for those pages.
         *
         * Thickbox is only loaded if the user has not dismissed the admin
         * notice or if there are any plugins left to install and activate.
         *
         * @since 2.1.0
         */
        public function thickbox()
        {
        }
        /**
         * Adds submenu page if there are plugin actions to take.
         *
         * This method adds the submenu page letting users know that a required
         * plugin needs to be installed.
         *
         * This page disappears once the plugin has been installed and activated.
         *
         * @since 1.0.0
         *
         * @see TGM_Plugin_Activation::init()
         * @see TGM_Plugin_Activation::install_plugins_page()
         *
         * @return null Return early if user lacks capability to install a plugin.
         */
        public function admin_menu()
        {
        }
        /**
         * Add the menu item.
         *
         * {@internal IMPORTANT! If this function changes, review the regex in the custom TGMPA
         * generator on the website.}}
         *
         * @since 2.5.0
         *
         * @param array $args Menu item configuration.
         */
        protected function add_admin_menu(array $args)
        {
        }
        /**
         * Echoes plugin installation form.
         *
         * This method is the callback for the admin_menu method function.
         * This displays the admin page and form area where the user can select to install and activate the plugin.
         * Aborts early if we're processing a plugin installation action.
         *
         * @since 1.0.0
         *
         * @return null Aborts early if we're processing a plugin installation action.
         */
        public function install_plugins_page()
        {
        }
        /**
         * Installs, updates or activates a plugin depending on the action link clicked by the user.
         *
         * Checks the $_GET variable to see which actions have been
         * passed and responds with the appropriate method.
         *
         * Uses WP_Filesystem to process and handle the plugin installation
         * method.
         *
         * @since 1.0.0
         *
         * @uses WP_Filesystem
         * @uses WP_Error
         * @uses WP_Upgrader
         * @uses Plugin_Upgrader
         * @uses Plugin_Installer_Skin
         * @uses Plugin_Upgrader_Skin
         *
         * @return boolean True on success, false on failure.
         */
        protected function do_plugin_install()
        {
        }
        /**
         * Inject information into the 'update_plugins' site transient as WP checks that before running an update.
         *
         * @since 2.5.0
         *
         * @param array $plugins The plugin information for the plugins which are to be updated.
         */
        public function inject_update_info($plugins)
        {
        }
        /**
         * Adjust the plugin directory name if necessary.
         *
         * The final destination directory of a plugin is based on the subdirectory name found in the
         * (un)zipped source. In some cases - most notably GitHub repository plugin downloads -, this
         * subdirectory name is not the same as the expected slug and the plugin will not be recognized
         * as installed. This is fixed by adjusting the temporary unzipped source subdirectory name to
         * the expected plugin slug.
         *
         * @since 2.5.0
         *
         * @param string       $source        Path to upgrade/zip-file-name.tmp/subdirectory/.
         * @param string       $remote_source Path to upgrade/zip-file-name.tmp.
         * @param \WP_Upgrader $upgrader      Instance of the upgrader which installs the plugin.
         * @return string $source
         */
        public function maybe_adjust_source_dir($source, $remote_source, $upgrader)
        {
        }
        /**
         * Activate a single plugin and send feedback about the result to the screen.
         *
         * @since 2.5.0
         *
         * @param string $file_path Path within wp-plugins/ to main plugin file.
         * @param string $slug      Plugin slug.
         * @param bool   $automatic Whether this is an automatic activation after an install. Defaults to false.
         *                          This determines the styling of the output messages.
         * @return bool False if an error was encountered, true otherwise.
         */
        protected function activate_single_plugin($file_path, $slug, $automatic = \false)
        {
        }
        /**
         * Echoes required plugin notice.
         *
         * Outputs a message telling users that a specific plugin is required for
         * their theme. If appropriate, it includes a link to the form page where
         * users can install and activate the plugin.
         *
         * Returns early if we're on the Install page.
         *
         * @since 1.0.0
         *
         * @global object $current_screen
         *
         * @return null Returns early if we're on the Install page.
         */
        public function notices()
        {
        }
        /**
         * Generate the user action links for the admin notice.
         *
         * @since 2.6.0
         *
         * @param int $install_count  Number of plugins to install.
         * @param int $update_count   Number of plugins to update.
         * @param int $activate_count Number of plugins to activate.
         * @param int $line_template  Template for the HTML tag to output a line.
         * @return string Action links.
         */
        protected function create_user_action_links_for_notice($install_count, $update_count, $activate_count, $line_template)
        {
        }
        /**
         * Get admin notice class.
         *
         * Work around all the changes to the various admin notice classes between WP 4.4 and 3.7
         * (lowest supported version by TGMPA).
         *
         * @since 2.6.0
         *
         * @return string
         */
        protected function get_admin_notice_class()
        {
        }
        /**
         * Display settings errors and remove those which have been displayed to avoid duplicate messages showing
         *
         * @since 2.5.0
         */
        protected function display_settings_errors()
        {
        }
        /**
         * Register dismissal of admin notices.
         *
         * Acts on the dismiss link in the admin nag messages.
         * If clicked, the admin notice disappears and will no longer be visible to this user.
         *
         * @since 2.1.0
         */
        public function dismiss()
        {
        }
        /**
         * Add individual plugin to our collection of plugins.
         *
         * If the required keys are not set or the plugin has already
         * been registered, the plugin is not added.
         *
         * @since 2.0.0
         *
         * @param array|null $plugin Array of plugin arguments or null if invalid argument.
         * @return null Return early if incorrect argument.
         */
        public function register($plugin)
        {
        }
        /**
         * Determine what type of source the plugin comes from.
         *
         * @since 2.5.0
         *
         * @param string $source The source of the plugin as provided, either empty (= WP repo), a file path
         *                       (= bundled) or an external URL.
         * @return string 'repo', 'external', or 'bundled'
         */
        protected function get_plugin_source_type($source)
        {
        }
        /**
         * Sanitizes a string key.
         *
         * Near duplicate of WP Core `sanitize_key()`. The difference is that uppercase characters *are*
         * allowed, so as not to break upgrade paths from non-standard bundled plugins using uppercase
         * characters in the plugin directory path/slug. Silly them.
         *
         * @see https://developer.wordpress.org/reference/hooks/sanitize_key/
         *
         * @since 2.5.0
         *
         * @param string $key String key.
         * @return string Sanitized key
         */
        public function sanitize_key($key)
        {
        }
        /**
         * Amend default configuration settings.
         *
         * @since 2.0.0
         *
         * @param array $config Array of config options to pass as class properties.
         */
        public function config($config)
        {
        }
        /**
         * Amend action link after plugin installation.
         *
         * @since 2.0.0
         *
         * @param array $install_actions Existing array of actions.
         * @return false|array Amended array of actions.
         */
        public function actions($install_actions)
        {
        }
        /**
         * Flushes the plugins cache on theme switch to prevent stale entries
         * from remaining in the plugin table.
         *
         * @since 2.4.0
         *
         * @param bool $clear_update_cache Optional. Whether to clear the Plugin updates cache.
         *                                 Parameter added in v2.5.0.
         */
        public function flush_plugins_cache($clear_update_cache = \true)
        {
        }
        /**
         * Set file_path key for each installed plugin.
         *
         * @since 2.1.0
         *
         * @param string $plugin_slug Optional. If set, only (re-)populates the file path for that specific plugin.
         *                            Parameter added in v2.5.0.
         */
        public function populate_file_path($plugin_slug = '')
        {
        }
        /**
         * Helper function to extract the file path of the plugin file from the
         * plugin slug, if the plugin is installed.
         *
         * @since 2.0.0
         *
         * @param string $slug Plugin slug (typically folder name) as provided by the developer.
         * @return string Either file path for plugin if installed, or just the plugin slug.
         */
        protected function _get_plugin_basename_from_slug($slug)
        {
        }
        /**
         * Retrieve plugin data, given the plugin name.
         *
         * Loops through the registered plugins looking for $name. If it finds it,
         * it returns the $data from that plugin. Otherwise, returns false.
         *
         * @since 2.1.0
         *
         * @param string $name Name of the plugin, as it was registered.
         * @param string $data Optional. Array key of plugin data to return. Default is slug.
         * @return string|boolean Plugin slug if found, false otherwise.
         */
        public function _get_plugin_data_from_name($name, $data = 'slug')
        {
        }
        /**
         * Retrieve the download URL for a package.
         *
         * @since 2.5.0
         *
         * @param string $slug Plugin slug.
         * @return string Plugin download URL or path to local file or empty string if undetermined.
         */
        public function get_download_url($slug)
        {
        }
        /**
         * Retrieve the download URL for a WP repo package.
         *
         * @since 2.5.0
         *
         * @param string $slug Plugin slug.
         * @return string Plugin download URL.
         */
        protected function get_wp_repo_download_url($slug)
        {
        }
        /**
         * Try to grab information from WordPress API.
         *
         * @since 2.5.0
         *
         * @param string $slug Plugin slug.
         * @return object Plugins_api response object on success, WP_Error on failure.
         */
        protected function get_plugins_api($slug)
        {
        }
        /**
         * Retrieve a link to a plugin information page.
         *
         * @since 2.5.0
         *
         * @param string $slug Plugin slug.
         * @return string Fully formed html link to a plugin information page if available
         *                or the plugin name if not.
         */
        public function get_info_link($slug)
        {
        }
        /**
         * Determine if we're on the TGMPA Install page.
         *
         * @since 2.1.0
         *
         * @return boolean True when on the TGMPA page, false otherwise.
         */
        protected function is_tgmpa_page()
        {
        }
        /**
         * Determine if we're on a WP Core installation/upgrade page.
         *
         * @since 2.6.0
         *
         * @return boolean True when on a WP Core installation/upgrade page, false otherwise.
         */
        protected function is_core_update_page()
        {
        }
        /**
         * Retrieve the URL to the TGMPA Install page.
         *
         * I.e. depending on the config settings passed something along the lines of:
         * http://example.com/wp-admin/themes.php?page=tgmpa-install-plugins
         *
         * @since 2.5.0
         *
         * @return string Properly encoded URL (not escaped).
         */
        public function get_tgmpa_url()
        {
        }
        /**
         * Retrieve the URL to the TGMPA Install page for a specific plugin status (view).
         *
         * I.e. depending on the config settings passed something along the lines of:
         * http://example.com/wp-admin/themes.php?page=tgmpa-install-plugins&plugin_status=install
         *
         * @since 2.5.0
         *
         * @param string $status Plugin status - either 'install', 'update' or 'activate'.
         * @return string Properly encoded URL (not escaped).
         */
        public function get_tgmpa_status_url($status)
        {
        }
        /**
         * Determine whether there are open actions for plugins registered with TGMPA.
         *
         * @since 2.5.0
         *
         * @return bool True if complete, i.e. no outstanding actions. False otherwise.
         */
        public function is_tgmpa_complete()
        {
        }
        /**
         * Check if a plugin is installed. Does not take must-use plugins into account.
         *
         * @since 2.5.0
         *
         * @param string $slug Plugin slug.
         * @return bool True if installed, false otherwise.
         */
        public function is_plugin_installed($slug)
        {
        }
        /**
         * Check if a plugin is active.
         *
         * @since 2.5.0
         *
         * @param string $slug Plugin slug.
         * @return bool True if active, false otherwise.
         */
        public function is_plugin_active($slug)
        {
        }
        /**
         * Check if a plugin can be updated, i.e. if we have information on the minimum WP version required
         * available, check whether the current install meets them.
         *
         * @since 2.5.0
         *
         * @param string $slug Plugin slug.
         * @return bool True if OK to update, false otherwise.
         */
        public function can_plugin_update($slug)
        {
        }
        /**
         * Check to see if the plugin is 'updatetable', i.e. installed, with an update available
         * and no WP version requirements blocking it.
         *
         * @since 2.6.0
         *
         * @param string $slug Plugin slug.
         * @return bool True if OK to proceed with update, false otherwise.
         */
        public function is_plugin_updatetable($slug)
        {
        }
        /**
         * Check if a plugin can be activated, i.e. is not currently active and meets the minimum
         * plugin version requirements set in TGMPA (if any).
         *
         * @since 2.5.0
         *
         * @param string $slug Plugin slug.
         * @return bool True if OK to activate, false otherwise.
         */
        public function can_plugin_activate($slug)
        {
        }
        /**
         * Retrieve the version number of an installed plugin.
         *
         * @since 2.5.0
         *
         * @param string $slug Plugin slug.
         * @return string Version number as string or an empty string if the plugin is not installed
         *                or version unknown (plugins which don't comply with the plugin header standard).
         */
        public function get_installed_version($slug)
        {
        }
        /**
         * Check whether a plugin complies with the minimum version requirements.
         *
         * @since 2.5.0
         *
         * @param string $slug Plugin slug.
         * @return bool True when a plugin needs to be updated, otherwise false.
         */
        public function does_plugin_require_update($slug)
        {
        }
        /**
         * Check whether there is an update available for a plugin.
         *
         * @since 2.5.0
         *
         * @param string $slug Plugin slug.
         * @return false|string Version number string of the available update or false if no update available.
         */
        public function does_plugin_have_update($slug)
        {
        }
        /**
         * Retrieve potential upgrade notice for a plugin.
         *
         * @since 2.5.0
         *
         * @param string $slug Plugin slug.
         * @return string The upgrade notice or an empty string if no message was available or provided.
         */
        public function get_upgrade_notice($slug)
        {
        }
        /**
         * Wrapper around the core WP get_plugins function, making sure it's actually available.
         *
         * @since 2.5.0
         *
         * @param string $plugin_folder Optional. Relative path to single plugin folder.
         * @return array Array of installed plugins with plugin information.
         */
        public function get_plugins($plugin_folder = '')
        {
        }
        /**
         * Delete dismissable nag option when theme is switched.
         *
         * This ensures that the user(s) is/are again reminded via nag of required
         * and/or recommended plugins if they re-activate the theme.
         *
         * @since 2.1.1
         */
        public function update_dismiss()
        {
        }
        /**
         * Forces plugin activation if the parameter 'force_activation' is
         * set to true.
         *
         * This allows theme authors to specify certain plugins that must be
         * active at all times while using the current theme.
         *
         * Please take special care when using this parameter as it has the
         * potential to be harmful if not used correctly. Setting this parameter
         * to true will not allow the specified plugin to be deactivated unless
         * the user switches themes.
         *
         * @since 2.2.0
         */
        public function force_activation()
        {
        }
        /**
         * Forces plugin deactivation if the parameter 'force_deactivation'
         * is set to true and adds the plugin to the 'recently active' plugins list.
         *
         * This allows theme authors to specify certain plugins that must be
         * deactivated upon switching from the current theme to another.
         *
         * Please take special care when using this parameter as it has the
         * potential to be harmful if not used correctly.
         *
         * @since 2.2.0
         */
        public function force_deactivation()
        {
        }
        /**
         * Echo the current TGMPA version number to the page.
         *
         * @since 2.5.0
         */
        public function show_tgmpa_version()
        {
        }
        /**
         * Returns the singleton instance of the class.
         *
         * @since 2.4.0
         *
         * @return \TGM_Plugin_Activation The TGM_Plugin_Activation object.
         */
        public static function get_instance()
        {
        }
    }
    /**
     * List table class for handling plugins.
     *
     * Extends the WP_List_Table class to provide a future-compatible
     * way of listing out all required/recommended plugins.
     *
     * Gives users an interface similar to the Plugin Administration
     * area with similar (albeit stripped down) capabilities.
     *
     * This class also allows for the bulk install of plugins.
     *
     * @since 2.2.0
     *
     * @package TGM-Plugin-Activation
     * @author  Thomas Griffin
     * @author  Gary Jones
     */
    class TGMPA_List_Table extends \WP_List_Table
    {
        /**
         * TGMPA instance.
         *
         * @since 2.5.0
         *
         * @var object
         */
        protected $tgmpa;
        /**
         * The currently chosen view.
         *
         * @since 2.5.0
         *
         * @var string One of: 'all', 'install', 'update', 'activate'
         */
        public $view_context = 'all';
        /**
         * The plugin counts for the various views.
         *
         * @since 2.5.0
         *
         * @var array
         */
        protected $view_totals = array('all' => 0, 'install' => 0, 'update' => 0, 'activate' => 0);
        /**
         * References parent constructor and sets defaults for class.
         *
         * @since 2.2.0
         */
        public function __construct()
        {
        }
        /**
         * Get a list of CSS classes for the <table> tag.
         *
         * Overruled to prevent the 'plural' argument from being added.
         *
         * @since 2.5.0
         *
         * @return array CSS classnames.
         */
        public function get_table_classes()
        {
        }
        /**
         * Gathers and renames all of our plugin information to be used by WP_List_Table to create our table.
         *
         * @since 2.2.0
         *
         * @return array $table_data Information for use in table.
         */
        protected function _gather_plugin_data()
        {
        }
        /**
         * Categorize the plugins which have open actions into views for the TGMPA page.
         *
         * @since 2.5.0
         */
        protected function categorize_plugins_to_views()
        {
        }
        /**
         * Set the counts for the view links.
         *
         * @since 2.5.0
         *
         * @param array $plugins Plugins order by view.
         */
        protected function set_view_totals($plugins)
        {
        }
        /**
         * Get the plugin required/recommended text string.
         *
         * @since 2.5.0
         *
         * @param string $required Plugin required setting.
         * @return string
         */
        protected function get_plugin_advise_type_text($required)
        {
        }
        /**
         * Get the plugin source type text string.
         *
         * @since 2.5.0
         *
         * @param string $type Plugin type.
         * @return string
         */
        protected function get_plugin_source_type_text($type)
        {
        }
        /**
         * Determine the plugin status message.
         *
         * @since 2.5.0
         *
         * @param string $slug Plugin slug.
         * @return string
         */
        protected function get_plugin_status_text($slug)
        {
        }
        /**
         * Sort plugins by Required/Recommended type and by alphabetical plugin name within each type.
         *
         * @since 2.5.0
         *
         * @param array $items Prepared table items.
         * @return array Sorted table items.
         */
        public function sort_table_items($items)
        {
        }
        /**
         * Get an associative array ( id => link ) of the views available on this table.
         *
         * @since 2.5.0
         *
         * @return array
         */
        public function get_views()
        {
        }
        /**
         * Create default columns to display important plugin information
         * like type, action and status.
         *
         * @since 2.2.0
         *
         * @param array  $item        Array of item data.
         * @param string $column_name The name of the column.
         * @return string
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Required for bulk installing.
         *
         * Adds a checkbox for each plugin.
         *
         * @since 2.2.0
         *
         * @param array $item Array of item data.
         * @return string The input checkbox with all necessary info.
         */
        public function column_cb($item)
        {
        }
        /**
         * Create default title column along with the action links.
         *
         * @since 2.2.0
         *
         * @param array $item Array of item data.
         * @return string The plugin name and action links.
         */
        public function column_plugin($item)
        {
        }
        /**
         * Create version information column.
         *
         * @since 2.5.0
         *
         * @param array $item Array of item data.
         * @return string HTML-formatted version information.
         */
        public function column_version($item)
        {
        }
        /**
         * Sets default message within the plugins table if no plugins
         * are left for interaction.
         *
         * Hides the menu item to prevent the user from clicking and
         * getting a permissions error.
         *
         * @since 2.2.0
         */
        public function no_items()
        {
        }
        /**
         * Output all the column information within the table.
         *
         * @since 2.2.0
         *
         * @return array $columns The column names.
         */
        public function get_columns()
        {
        }
        /**
         * Get name of default primary column
         *
         * @since 2.5.0 / WP 4.3+ compatibility
         * @access protected
         *
         * @return string
         */
        protected function get_default_primary_column_name()
        {
        }
        /**
         * Get the name of the primary column.
         *
         * @since 2.5.0 / WP 4.3+ compatibility
         * @access protected
         *
         * @return string The name of the primary column.
         */
        protected function get_primary_column_name()
        {
        }
        /**
         * Get the actions which are relevant for a specific plugin row.
         *
         * @since 2.5.0
         *
         * @param array $item Array of item data.
         * @return array Array with relevant action links.
         */
        protected function get_row_actions($item)
        {
        }
        /**
         * Generates content for a single row of the table.
         *
         * @since 2.5.0
         *
         * @param object $item The current item.
         */
        public function single_row($item)
        {
        }
        /**
         * Show the upgrade notice below a plugin row if there is one.
         *
         * @since 2.5.0
         *
         * @see /wp-admin/includes/update.php
         *
         * @param string $slug Plugin slug.
         * @param array  $item The information available in this table row.
         * @return null Return early if upgrade notice is empty.
         */
        public function wp_plugin_update_row($slug, $item)
        {
        }
        /**
         * Extra controls to be displayed between bulk actions and pagination.
         *
         * @since 2.5.0
         *
         * @param string $which 'top' or 'bottom' table navigation.
         */
        public function extra_tablenav($which)
        {
        }
        /**
         * Defines the bulk actions for handling registered plugins.
         *
         * @since 2.2.0
         *
         * @return array $actions The bulk actions for the plugin install table.
         */
        public function get_bulk_actions()
        {
        }
        /**
         * Processes bulk installation and activation actions.
         *
         * The bulk installation process looks for the $_POST information and passes that
         * through if a user has to use WP_Filesystem to enter their credentials.
         *
         * @since 2.2.0
         */
        public function process_bulk_actions()
        {
        }
        /**
         * Prepares all of our information to be outputted into a usable table.
         *
         * @since 2.2.0
         */
        public function prepare_items()
        {
        }
        /* *********** DEPRECATED METHODS *********** */
        /**
         * Retrieve plugin data, given the plugin name.
         *
         * @since      2.2.0
         * @deprecated 2.5.0 use {@see TGM_Plugin_Activation::_get_plugin_data_from_name()} instead.
         * @see        TGM_Plugin_Activation::_get_plugin_data_from_name()
         *
         * @param string $name Name of the plugin, as it was registered.
         * @param string $data Optional. Array key of plugin data to return. Default is slug.
         * @return string|boolean Plugin slug if found, false otherwise.
         */
        protected function _get_plugin_data_from_name($name, $data = 'slug')
        {
        }
    }
    /**
     * Hack: Prevent TGMPA v2.4.1- bulk installer class from being loaded if 2.4.1- is loaded after 2.5+.
     *
     * @since 2.5.2
     *
     * {@internal The TGMPA_Bulk_Installer class was originally called TGM_Bulk_Installer.
     *            For more information, see that class.}}
     */
    class TGM_Bulk_Installer
    {
    }
    /**
     * Hack: Prevent TGMPA v2.4.1- bulk installer skin class from being loaded if 2.4.1- is loaded after 2.5+.
     *
     * @since 2.5.2
     *
     * {@internal The TGMPA_Bulk_Installer_Skin class was originally called TGM_Bulk_Installer_Skin.
     *            For more information, see that class.}}
     */
    class TGM_Bulk_Installer_Skin
    {
    }
    /**
     * Generic utilities for TGMPA.
     *
     * All methods are static, poor-dev name-spacing class wrapper.
     *
     * Class was called TGM_Utils in 2.5.0 but renamed TGMPA_Utils in 2.5.1 as this was conflicting with Soliloquy.
     *
     * @since 2.5.0
     *
     * @package TGM-Plugin-Activation
     * @author  Juliette Reinders Folmer
     */
    class TGMPA_Utils
    {
        /**
         * Whether the PHP filter extension is enabled.
         *
         * @see http://php.net/book.filter
         *
         * @since 2.5.0
         *
         * @static
         *
         * @var bool $has_filters True is the extension is enabled.
         */
        public static $has_filters;
        /**
         * Wrap an arbitrary string in <em> tags. Meant to be used in combination with array_map().
         *
         * @since 2.5.0
         *
         * @static
         *
         * @param string $string Text to be wrapped.
         * @return string
         */
        public static function wrap_in_em($string)
        {
        }
        /**
         * Wrap an arbitrary string in <strong> tags. Meant to be used in combination with array_map().
         *
         * @since 2.5.0
         *
         * @static
         *
         * @param string $string Text to be wrapped.
         * @return string
         */
        public static function wrap_in_strong($string)
        {
        }
        /**
         * Helper function: Validate a value as boolean
         *
         * @since 2.5.0
         *
         * @static
         *
         * @param mixed $value Arbitrary value.
         * @return bool
         */
        public static function validate_bool($value)
        {
        }
        /**
         * Helper function: Cast a value to bool
         *
         * @since 2.5.0
         *
         * @static
         *
         * @param mixed $value Value to cast.
         * @return bool
         */
        protected static function emulate_filter_bool($value)
        {
        }
    }
    class WOODMART_Mega_Menu_Walker extends \Walker_Nav_Menu
    {
        /**
         * WOODMART_Mega_Menu_Walker constructor.
         */
        public function __construct()
        {
        }
        /**
         * Starts the list before the elements are added.
         *
         * @since 3.0.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param int    $depth  Depth of menu item. Used for padding.
         * @param mixed  $args   An array of arguments. @see wp_nav_menu().
         *
         * @see   Walker::start_lvl()
         */
        public function start_lvl(&$output, $depth = 0, $args = array())
        {
        }
        /**
         * Ends the list of after the elements are added.
         *
         * @since 3.0.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param int    $depth  Depth of menu item. Used for padding.
         * @param mixed  $args   An array of arguments. @see wp_nav_menu().
         *
         * @see   Walker::end_lvl()
         */
        public function end_lvl(&$output, $depth = 0, $args = array())
        {
        }
        /**
         * Start the element output.
         *
         * @since 3.0.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param object $item   Menu item data object.
         * @param int    $depth  Depth of menu item. Used for padding.
         * @param mixed  $args   An array of arguments. @see wp_nav_menu().
         * @param int    $id     Current item ID.
         *
         * @see   Walker::start_el()
         */
        public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
        {
        }
    }
}
namespace {
    /**
     * The default template for displaying content
     */
    $size = \null;
    /**
     * Filter tabs and allow third parties to add their own.
     *
     * Each tab is an array containing title, callback and priority.
     *
     * @see woocommerce_default_product_tabs()
     */
    $product_tabs = \null;
    /**
     * Filter tabs and allow third parties to add their own.
     *
     * Each tab is an array containing title, callback and priority.
     *
     * @see woocommerce_default_product_tabs()
     */
    $product_tabs = \null;
    /**
     * Filter tabs and allow third parties to add their own.
     *
     * Each tab is an array containing title, callback and priority.
     *
     * @see woocommerce_default_product_tabs()
     */
    $product_tabs = \null;
    /**
     * Filter tabs and allow third parties to add their own.
     *
     * Each tab is an array containing title, callback and priority.
     *
     * @see woocommerce_default_product_tabs()
     */
    $product_tabs = \null;
    /**
     * The default template for displaying content
     *
     * Used for both single and index/archive/search.
     */
    // woodmart_setup_loop();
    $woodmart_loop = \null;
    /**
     * Get image html with custom size.
     *
     * @param integer      $image_id Image ID.
     * @param string|array $size Image size.
     * @param array        $custom_size Image custom size.
     * @param array        $attr Image attribute.
     * @return string
     */
    function woodmart_otf_get_image_html($image_id, $size = 'thumbnail', $custom_size = array(), $attr = array())
    {
    }
    /**
     * Get image url with custom size.
     *
     * @param integer      $image_id Image ID.
     * @param string|array $size Image size.
     * @param array        $custom_size Image custom size.
     * @return string
     */
    function woodmart_otf_get_image_url($image_id, $size = 'thumbnail', $custom_size = array())
    {
    }
    function woodmart_is_core_installed()
    {
    }
    function wd_array_unique_recursive($array)
    {
    }
    /**
     * Adds a CSS class to a string.
     *
     * @since 2.7.0
     *
     * @param  string  $class_to_add  The CSS class to add.
     * @param  string  $classes  The string to add the CSS class to.
     *
     * @return string The string with the CSS class added.
     */
    function wd_add_cssclass($class_to_add, $classes)
    {
    }
    /**
     * Page css files disable.
     *
     * @param string $description Term description.
     * @return string
     * @since 1.0.0
     */
    function woodmart_page_css_files_disable($description)
    {
    }
    /**
     * Page css files enable.
     *
     * @param string $description Term description.
     * @return string
     * @since 1.0.0
     */
    function woodmart_page_css_files_enable($description)
    {
    }
    /**
     * Cookie secure param.
     *
     * @since 1.0.0
     */
    function woodmart_cookie_secure_param()
    {
    }
    /**
     * Fix for transitions flicking.
     *
     * @since 1.0.0
     */
    function woodmart_fix_transitions_flicking()
    {
    }
    /**
     * Get selectors array.
     *
     * @return array
     */
    function woodmart_get_theme_settings_selectors_array()
    {
    }
    /**
     * Get css files array.
     *
     * @return array
     */
    function woodmart_get_theme_settings_css_files_name_array()
    {
    }
    /**
     * Get css files array.
     *
     * @param string $name_format Result name format.
     *
     * @return array
     */
    function woodmart_get_theme_settings_css_files_array($name_format = 'title')
    {
    }
    /**
     * Get js files array.
     *
     * @return array
     */
    function woodmart_get_theme_settings_js_scripts_files_array()
    {
    }
    /**
     * Get current page builder.
     * If both builders are activated then 'wpb' will be returned.
     * If no builder is active, an empty ribbon will be returned.
     *
     * @since 6.1.0
     */
    function woodmart_get_current_page_builder()
    {
    }
    /**
     * Is blog design new.
     *
     * @since 6.1.0
     *
     * @param string $design Design.
     */
    function woodmart_is_blog_design_new($design)
    {
    }
    /**
     * Loads a template part into a template.
     *
     * @since 6.1.0
     *
     * @param string $element_name  Template name.
     * @param array  $args          Arguments.
     * @param string $template_name Module name.
     */
    function woodmart_get_element_template($element_name, $args, $template_name)
    {
    }
    /**
     * Get old classes.
     *
     * @since 6.0.0
     *
     * @param string $classes Classes.
     *
     * @return string
     */
    function woodmart_get_old_classes($classes)
    {
    }
    /**
     * Get buttons selectors array.
     *
     * @return array
     */
    function woodmart_get_theme_settings_buttons_selectors_array()
    {
    }
    /**
     * Function to get array of HTML Blocks in theme settings array style.
     *
     * @return array
     */
    function woodmart_get_theme_settings_headers_array()
    {
    }
    /**
     * Get current url.
     *
     * @since 1.0.0
     *
     * @return string
     */
    function woodmart_get_current_url()
    {
    }
    /**
     * Returns document title for the current page.
     *
     * @since 1.0.0
     *
     * @return string
     */
    function woodmart_get_document_title()
    {
    }
    /**
     * Get new size classes.
     *
     * @param mixed $element Element.
     * @param mixed $old_key Old key.
     * @param mixed $selector Selector.
     *
     * @return string
     */
    function woodmart_get_new_size_classes($element, $old_key, $selector)
    {
    }
    /**
     * Check if Elementor full width.
     *
     * @param bool $negative_gap_ignore Is ignore negative gap option.
     *
     * @return boolean
     */
    function woodmart_is_elementor_full_width($negative_gap_ignore = \false)
    {
    }
    /**
     * Check if Elementor PRO is activated
     *
     * @since 1.0.0
     * @return boolean
     */
    function woodmart_is_elementor_pro_installed()
    {
    }
    function woodmart_vc_build_link($value)
    {
    }
    function woodmart_vc_parse_multi_attribute($value, $default = array())
    {
    }
    function woodmart_get_size_guides_array($style = 'default')
    {
    }
    /**
     * Check if Elementor is activated
     *
     * @since 1.0.0
     * @return boolean
     */
    function woodmart_is_elementor_installed()
    {
    }
    function woodmart_remove_https($link)
    {
    }
    function woodmart_needs_header()
    {
    }
    function woodmart_needs_footer()
    {
    }
    function woodmart_is_shop_archive()
    {
    }
    function woodmart_is_blog_archive()
    {
    }
    function woodmart_is_portfolio_archive()
    {
    }
    function woodmart_maintenance_page()
    {
    }
    /**
     * This function will return true if the site visitor should be redirected to the maintenance page.
     *
     * @return bool
     */
    function woodmart_is_maintenance_active()
    {
    }
    function woodmart_get_config($name)
    {
    }
    function woodmart_text2line($str)
    {
    }
    function woodmart_tpl2id($tpl = '')
    {
    }
    /**
     * Get portfolio page id.
     */
    function woodmart_get_portfolio_page_id()
    {
    }
    function ar($array)
    {
    }
    function woodmart_http()
    {
    }
    function woodmart_get_theme_info($parameter)
    {
    }
    function woodmart_is_social_link_enable($type)
    {
    }
    function woodmart_is_compare_iframe()
    {
    }
    function woodmart_is_svg($src)
    {
    }
    function woodmart_get_explode_size($img_size, $default_size)
    {
    }
    function woodmart_is_license_activated()
    {
    }
    function woodmart_is_shop_on_front()
    {
    }
    /**
     * Return allowed html tags
     *
     * @since 1.0.0
     *
     * @return array
     */
    function woodmart_get_allowed_html()
    {
    }
    /**
     * Clean variables using sanitize_text_field. Arrays are cleaned recursively.
     * Non-scalar values are ignored.
     *
     * @param string|array $var Data to sanitize.
     * @return string|array
     */
    function woodmart_clean($var)
    {
    }
    /**
     * Function to show SVG images.
     *
     * @param string|int  $image_id image id.
     * @param null|string $size Needed image size. Default = thumbnail.
     * @param null|string $attributes List of attributes. If a whip then the data is taken from $attachment object.
     * @return string html tag img string.
     */
    function woodmart_get_svg_html($image_id, $size = 'thumbnail', $attributes = array())
    {
    }
    /**
     * This function return form list for mailchimp.
     *
     * @return array
     */
    function woodmart_get_mailchimp_forms()
    {
    }
    /**
     * This function get theme font options and return array for WPBakery map.
     *
     * @return array
     */
    function woodmart_get_wpb_font_family_options()
    {
    }
    /**
     * This function return woodmart css class for check builder status (on/off).
     *
     * @return string
     */
    function woodmart_get_builder_status_class()
    {
    }
    /**
     * Get width map (with responsive dependency tabs).
     *
     * @param string $key name needed field.
     *
     * @return array
     */
    function woodmart_get_responsive_dependency_width_map($key)
    {
    }
    /**
     * Check $variable to compressed.
     *
     * @param string $variable need check data.
     * @return bool
     */
    function woodmart_is_compressed_data($variable)
    {
    }
    /**
     * Get the current user roles list.
     *
     * @retun array
     */
    function woodmart_get_current_user_roles()
    {
    }
    /**
     * This function accepts a list of coords and returns a prepared array with the coordinates of the center.
     * If the token list is empty, the method will return an empty array.
     *
     * @param array $coords List of coords.
     * @return array
     */
    function woodmart_get_center_coords($coords)
    {
    }
    /**
     * Check if the category design refers to the old structure.
     *
     * @param string $category_design The design of the category that needs to be checked.
     *
     * @return bool
     */
    function woodmart_is_old_category_structure($category_design)
    {
    }
    function WOODMART_Registry()
    {
    }
    function woodmart_page_ID()
    {
    }
    function woodmart_get_content_class()
    {
    }
    function woodmart_get_content_col_width()
    {
    }
    function woodmart_get_sidebar_class()
    {
    }
    function woodmart_get_page_layout()
    {
    }
    function woodmart_get_sidebar_col_width()
    {
    }
    function woodmart_get_sidebar_name()
    {
    }
    function woodmart_get_main_container_class()
    {
    }
    function woodmart_get_opt($slug = '', $default = \false)
    {
    }
    function woodmart_is_opt_changed($slug)
    {
    }
    /**
     * Portfolio projects per page.
     *
     * @since 1.0.0
     *
     * @param object $query Query.
     */
    function woodmart_set_projects_per_page($query)
    {
    }
    /**
     * Main portfolio loop
     *
     * @since 1.0.0
     *
     * @param boolean $fragments Fragments.
     */
    function woodmart_get_portfolio_main_loop($fragments = \false)
    {
    }
    /**
     * Generate portfolio filters
     *
     * @since 1.0.0
     *
     * @param string $category Parent category.
     * @param string $type     Filters type.
     */
    function woodmart_portfolio_filters($category, $type)
    {
    }
    /**
     * Fix active class in nav for portfolio page.
     *
     * @param array $menu_items Menu items.
     *
     * @return array
     */
    function woodmart_nav_menu_portfolio_item_classes($menu_items)
    {
    }
    /**
     * Sticky loader.
     */
    function woodmart_sticky_loader()
    {
    }
    /**
     * Meta viewport tag.
     */
    function woodmart_meta_viewport()
    {
    }
    function woodmart_preloader_template()
    {
    }
    function woodmart_age_verify_popup()
    {
    }
    function woodmart_main_loop()
    {
    }
    function woodmart_extra_footer_action()
    {
    }
    function woodmart_modify_read_more_link()
    {
    }
    function woodmart_read_more_tag()
    {
    }
    function woodmart_get_post_thumbnail($size = 'medium', $attach_id = \false)
    {
    }
    function woodmart_get_content($btn = \true, $force_full = \false)
    {
    }
    /**
     * Render read more button.
     *
     * @param string $style Button style name.
     *
     * @return void
     */
    function woodmart_render_read_more_btn($style = 'default')
    {
    }
    function woodmart_get_full_content($btn = \false)
    {
    }
    function woodmart_get_the_content()
    {
    }
    function woodmart_post_modified_date()
    {
    }
    function woodmart_post_meta_author($avatar, $label = 'short')
    {
    }
    function woodmart_post_meta_reply()
    {
    }
    function woodmart_post_meta($atts = array())
    {
    }
    function woodmart_post_date($args)
    {
    }
    function woodmart_posts_navigation()
    {
    }
    function woodmart_entry_meta()
    {
    }
    function woodmart_paging_nav()
    {
    }
    function query_pagination($pages = '', $range = 2)
    {
    }
    function woodmart_page_top_part()
    {
    }
    function woodmart_page_bottom_part()
    {
    }
    function woodmart_get_owl_atts()
    {
    }
    function woodmart_get_owl_attributes($atts = array(), $witout_init = \false)
    {
    }
    /**
     * Page title.
     */
    function woodmart_page_title()
    {
    }
    function woodmart_back_btn()
    {
    }
    function woodmart_get_category_page_title_image($cat)
    {
    }
    function woodmart_breadcrumbs($builder_wrapper_classes = '')
    {
    }
    function woodmart_promo_popup()
    {
    }
    function woodmart_cookies_popup()
    {
    }
    function woodmart_mobile_menu()
    {
    }
    function woodmart_header_banner()
    {
    }
    function woodmart_get_star_rating($rating)
    {
    }
    function woodmart_get_twitts($args = array())
    {
    }
    function woodmart_full_screen_main_nav()
    {
    }
    function woodmart_get_main_nav($location)
    {
    }
    function woodmart_get_sticky_social()
    {
    }
    /**
     * Get current breadcrumbs.
     *
     * @param string $type post type.
     */
    function woodmart_current_breadcrumbs($type, $return = \false)
    {
    }
    function woodmart_display_icon($img_id, $img_size, $default_size)
    {
    }
    /**
     * Is combined needed.
     *
     * @since 1.0.0
     *
     * @param string $key Combined key.
     * @param mixed  $default Default value.
     *
     * @return bool
     */
    function woodmart_is_combined_needed($key, $default = \false)
    {
    }
    /**
     * Is minified JS files needed.
     *
     * @since 1.0.0
     *
     * @return bool
     */
    function woodmart_is_minified_needed()
    {
    }
    /**
     * Register libraries scripts.
     *
     * @since 1.0.0
     */
    function woodmart_register_libraries_scripts()
    {
    }
    /**
     * Register scripts.
     *
     * @since 1.0.0
     */
    function woodmart_register_scripts()
    {
    }
    /**
     * Enqueue base scripts.
     *
     * @since 1.0.0
     */
    function woodmart_enqueue_base_scripts()
    {
    }
    /**
     * Enqueue js script.
     *
     * @since 1.0.0
     *
     * @param string $key        Script name.
     * @param string $responsive Responsive key.
     */
    function woodmart_enqueue_js_script($key, $responsive = '')
    {
    }
    /**
     * Enqueue js library.
     *
     * @since 1.0.0
     *
     * @param string $key        Script name.
     * @param string $responsive Responsive key.
     */
    function woodmart_enqueue_js_library($key, $responsive = '')
    {
    }
    /**
     * Dequeue scripts.
     *
     * @since 1.0.0
     */
    function woodmart_dequeue_scripts()
    {
    }
    /**
     * Dequeue elementor frontend.
     *
     * @since 1.0.0
     */
    function woodmart_dequeue_elementor_frontend()
    {
    }
    /**
     * Clear menu session storage key hash on save menu/html block.
     *
     * @since 1.0.0
     */
    function woodmart_clear_menu_transient()
    {
    }
    /**
     * Get localize array
     *
     * @since 1.0.0
     *
     * @return array
     */
    function woodmart_get_localized_string_array()
    {
    }
    function woodmart_enqueue_base_styles()
    {
    }
    /**
     * Force enqueue styles.
     */
    function woodmart_force_enqueue_styles()
    {
    }
    /**
     * Enqueue product loop style files.
     *
     * @param string $design Design.
     */
    function woodmart_enqueue_product_loop_styles($design)
    {
    }
    /**
     * Enqueue product loop style files.
     *
     * @param string $design Design.
     */
    function woodmart_enqueue_portfolio_loop_styles($design)
    {
    }
    /**
     * Enqueue inline style by key.
     *
     * @param string $key File slug.
     */
    function woodmart_enqueue_inline_style($key, $ignore_combined = \false)
    {
    }
    /**
     * Enqueue style by key.
     *
     * @param string $key File slug.
     */
    function woodmart_force_enqueue_style($key, $ignore_combined = \false)
    {
    }
    function woodmart_enqueue_inline_style_anchor()
    {
    }
    /**
     * ------------------------------------------------------------------------------------------------
     * Default header builder settings
     * ------------------------------------------------------------------------------------------------
     */
    $header_settings = \null;
    /**
     * ------------------------------------------------------------------------------------------------
     * Header clone structure template
     * ------------------------------------------------------------------------------------------------
     */
    $template = \null;
    /**
     * ------------------------------------------------------------------------------------------------
     * Array of specific optinos
     * ------------------------------------------------------------------------------------------------
     */
    $rules = \null;
    /**
     * ------------------------------------------------------------------------------------------------
     * Default header builder structure
     * ------------------------------------------------------------------------------------------------
     */
    $header_structure = \null;
    /**
     * ------------------------------------------------------------------------------------------------
     * Default header builder structure
     * ------------------------------------------------------------------------------------------------
     */
    $sceleton_structure = \null;
    /**
     * ------------------------------------------------------------------------------------------------
     * Header builder premade example layouts
     * ------------------------------------------------------------------------------------------------
     */
    $header_examples = \null;
    function woodmart_lazy_loading_init($force_init = \false)
    {
    }
    /**
     * Filters HTML <img> tag and adds lazy loading attributes. Used for elementor images.
     *
     * @since 1.0.0
     *
     * @param string $html           Image html.
     * @param array  $settings       Control settings.
     * @param string $image_size_key Optional. Settings key for image size.
     * @param string $image_key      Optional. Settings key for image..
     *
     * @return string|string[]|null
     */
    function woodmart_filter_elementor_images($html, $settings, $image_size_key, $image_key)
    {
    }
    function woodmart_lazy_loading_rss_deinit()
    {
    }
    function woodmart_lazy_loading_deinit($force_deinit = \false)
    {
    }
    function woodmart_stop_lazy_loading_before_order_table()
    {
    }
    function woodmart_start_lazy_loading_before_order_table()
    {
    }
    function woodmart_lazy_avatar_image($html)
    {
    }
    function woodmart_lazy_image_standard($html)
    {
    }
    function woodmart_lazy_get_default_preview()
    {
    }
    function woodmart_lazy_image($img, $attach_id, $params)
    {
    }
    function woodmart_lazy_replace_image($html, $src)
    {
    }
    function woodmart_lazy_attributes($attr, $attachment, $size)
    {
    }
    function woodmart_lazy_css_class()
    {
    }
    function woodmart_get_attachment_placeholder($id, $size)
    {
    }
    function woodmart_encode_image($id, $url)
    {
    }
    function woodmart_get_placeholder_size($x0, $y0)
    {
    }
    /**
     * Disable default lazy loading.
     *
     * @return void
     */
    function woodmart_disable_default_lazy_loading()
    {
    }
    function woodmart_white_label()
    {
    }
    /**
     * Add body classes.
     *
     * @param array $classes Body classes.
     * @return array
     */
    function woodmart_white_label_add_body_class($classes)
    {
    }
    function woodmart_search_full_screen()
    {
    }
    function woodmart_search_form($args = array())
    {
    }
    /**
     * Get full search area content.
     *
     * @param string  $full_search_content Content type.
     * @param boolean $return Return.
     * @return false|string|void
     */
    function woodmart_get_full_search_area_content($full_search_content, $return = \false)
    {
    }
    /**
     * Ajax load full search area content.
     *
     * @return void
     */
    function woodmart_load_full_search_html()
    {
    }
    function woodmart_show_categories_dropdown()
    {
    }
    function woodmart_show_blog_results_on_search_page()
    {
    }
    function woodmart_init_search_by_sku()
    {
    }
    function woodmart_ajax_suggestions()
    {
    }
    function woodmart_get_post_suggestions()
    {
    }
    function woodmart_product_search_sku($where, $class = \false)
    {
    }
    function woodmart_product_ajax_search_sku($where)
    {
    }
    function woodmart_sku_search_query($where, $s)
    {
    }
    function woodmart_sku_search_query_new($where, $s)
    {
    }
    function woodmart_rlv_index_variation_skus($content, $post)
    {
    }
    function woodmart_update_hits_filter_by_product_sku($filter_data, $query)
    {
    }
    /**
     * All available fields for Theme Settings sorter option.
     *
     * @since 3.6
     */
    function woodmart_get_sticky_toolbar_fields($new = \false)
    {
    }
    /**
     * Sticky toolbar template
     *
     * @since 3.6
     */
    function woodmart_sticky_toolbar_template()
    {
    }
    /**
     * Sticky toolbar wishlist template
     *
     * @since 3.6
     */
    function woodmart_sticky_toolbar_wishlist_template()
    {
    }
    /**
     * Sticky toolbar cart template
     *
     * @since 3.6
     */
    function woodmart_sticky_toolbar_cart_template()
    {
    }
    /**
     * Sticky toolbar compare template
     *
     * @since 3.6
     */
    function woodmart_sticky_toolbar_compare_template()
    {
    }
    /**
     * Sticky toolbar search template
     *
     * @since 3.6
     */
    function woodmart_sticky_toolbar_search_template()
    {
    }
    /**
     * Sticky toolbar account template
     *
     * @since 3.6
     */
    function woodmart_sticky_toolbar_account_template()
    {
    }
    /**
     * Sticky toolbar page link template
     *
     * @since 3.6
     */
    function woodmart_sticky_toolbar_page_link_template($key)
    {
    }
    /**
     * Sticky toolbar custom link template
     *
     * @since 3.6
     *
     * @param string $key Key.
     */
    function woodmart_sticky_toolbar_custom_link_template($key)
    {
    }
    /**
     * Sticky toolbar mobile menu template
     *
     * @since 3.6
     */
    function woodmart_sticky_toolbar_mobile_menu_template()
    {
    }
    /**
     * Filter page content.
     *
     * @param boolean $is_mobile Is mobile.
     *
     * @return string|void
     */
    function woodmart_wp_is_mobile($is_mobile)
    {
    }
    /**
     * Gallery map.
     */
    function woodmart_get_vc_map_single_product_gallery()
    {
    }
    /**
     * Size guide button map.
     */
    function woodmart_get_vc_map_single_product_size_guide_button()
    {
    }
    /**
     * Content map.
     */
    function woodmart_get_vc_map_single_product_linked_variations()
    {
    }
    /**
     * Short description map.
     */
    function woodmart_get_vc_map_single_product_short_description()
    {
    }
    /**
     * Content map.
     */
    function woodmart_get_vc_map_single_product_add_to_cart()
    {
    }
    /**
     * Count product visits map.
     */
    function woodmart_get_vc_map_single_product_visitor_counter()
    {
    }
    /**
     * Frequently bought together map.
     */
    function woodmart_get_vc_map_single_product_fbt_products()
    {
    }
    /**
     * Meta value map.
     */
    function woodmart_get_vc_map_single_product_meta_value()
    {
    }
    /**
     * Meta map.
     */
    function woodmart_get_vc_map_single_product_product_meta()
    {
    }
    /**
     * Content map.
     */
    function woodmart_get_vc_map_single_product_dynamic_discounts_table()
    {
    }
    /**
     * Product extra content map.
     */
    function woodmart_get_vc_map_single_product_extra_content()
    {
    }
    /**
     * Navigation map.
     */
    function woodmart_get_vc_map_single_product_nav()
    {
    }
    /**
     * Sold counter map.
     */
    function woodmart_get_vc_map_single_product_sold_counter()
    {
    }
    /**
     * Additional info table map.
     */
    function woodmart_get_vc_map_single_product_additional_info_table()
    {
    }
    /**
     * Output search autocomplete results.
     *
     * @param string $search Search attribute.
     *
     * @return array
     */
    function wd_autocomplete_products_attributes_field_search($search)
    {
    }
    /**
     * Render controls field.
     *
     * @param array $value Save value.
     *
     * @return array|bool
     */
    function wd_autocomplete_products_attributes_field_render($value)
    {
    }
    /**
     * Compare button map.
     */
    function woodmart_get_vc_map_single_product_compare_button()
    {
    }
    /**
     * Reviews map.
     */
    function woodmart_get_vc_map_single_product_reviews()
    {
    }
    /**
     * Tabs map.
     */
    function woodmart_get_vc_map_single_product_tabs()
    {
    }
    /**
     * Stock progress bar map.
     */
    function woodmart_get_vc_map_single_product_stock_progress_bar()
    {
    }
    /**
     * Content map.
     */
    function woodmart_get_vc_map_single_product_content()
    {
    }
    /**
     * Content map.
     */
    function woodmart_get_vc_map_single_product_stock_status()
    {
    }
    /**
     * Price map.
     */
    function woodmart_get_vc_map_single_product_price()
    {
    }
    /**
     * Countdown map.
     */
    function woodmart_get_vc_map_single_product_countdown()
    {
    }
    /**
     * Rating map.
     */
    function woodmart_get_vc_map_single_product_rating()
    {
    }
    /**
     * Brand information map.
     */
    function woodmart_get_vc_map_single_product_brand_information()
    {
    }
    /**
     * Title map.
     */
    function woodmart_get_vc_map_single_product_title()
    {
    }
    /**
     * Wishlist button map.
     */
    function woodmart_get_vc_map_single_product_wishlist_button()
    {
    }
    /**
     * Product brands map.
     */
    function woodmart_get_vc_map_single_product_brands()
    {
    }
    function woodmart_get_vc_map_cart_table()
    {
    }
    function woodmart_get_vc_map_cart_totals()
    {
    }
    function woodmart_vc_register_layouts_maps()
    {
    }
    /**
     * Shipping progress bar map.
     */
    function woodmart_get_vc_map_shipping_progress_bar()
    {
    }
    /**
     * Checkout steps map.
     */
    function woodmart_get_vc_map_checkout_steps()
    {
    }
    /**
     * WooCommerce notices map.
     */
    function woodmart_get_vc_map_woocommerce_notices()
    {
    }
    /**
     * Page title map.
     */
    function woodmart_get_vc_map_page_title()
    {
    }
    /**
     * WooCommerce hook map.
     */
    function woodmart_get_vc_map_woocommerce_hook()
    {
    }
    /**
     * WooCommerce breadcrumb map.
     */
    function woodmart_get_vc_map_woocommerce_breadcrumb()
    {
    }
    function woodmart_get_vc_map_checkout_coupon_form()
    {
    }
    /**
     * Payment methods map.
     */
    function woodmart_get_vc_map_checkout_payment_methods()
    {
    }
    /**
     * Order review map.
     */
    function woodmart_get_vc_map_checkout_order_review()
    {
    }
    /**
     * Login form map.
     */
    function woodmart_get_vc_map_checkout_login_form()
    {
    }
    function woodmart_get_vc_map_checkout_billing_details_form()
    {
    }
    /**
     * Shipping details map.
     */
    function woodmart_get_vc_map_checkout_shipping_details_form()
    {
    }
    /**
     * Archive description map.
     */
    function woodmart_get_vc_map_shop_archive_description()
    {
    }
    /**
     * Filters area map.
     */
    function woodmart_get_vc_map_shop_archive_filters_area()
    {
    }
    /**
     * View map.
     */
    function woodmart_get_vc_map_shop_archive_view()
    {
    }
    /**
     * Result count map.
     */
    function woodmart_get_vc_map_shop_archive_result_count()
    {
    }
    /**
     * Archive description map.
     */
    function woodmart_get_vc_map_archive_extra_description()
    {
    }
    /**
     * Woocommerce title map.
     */
    function woodmart_get_vc_map_shop_archive_woocommerce_title()
    {
    }
    /**
     * Order by map.
     */
    function woodmart_get_vc_map_shop_archive_orderby()
    {
    }
    /**
     * Archive products map.
     */
    function woodmart_get_vc_map_shop_archive_products()
    {
    }
    /**
     * Active filters map.
     */
    function woodmart_get_vc_map_archive_active_filters()
    {
    }
    /**
     * Filters area button map.
     */
    function woodmart_get_vc_map_shop_archive_filters_area_btn()
    {
    }
    /**
     * Products per page map.
     */
    function woodmart_get_vc_map_shop_archive_per_page()
    {
    }
    /**
     * Gallery shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_gallery($settings)
    {
    }
    /**
     * Size guide button shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_size_guide_button($settings)
    {
    }
    /**
     * Single product linked variations shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_linked_variations($settings)
    {
    }
    /**
     * Short description shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_short_description($settings)
    {
    }
    /**
     * Single product add to cart shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_add_to_cart($settings)
    {
    }
    /**
     * Single product visitor counter shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_visitor_counter($settings)
    {
    }
    /**
     * Single product frequently bought together shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_fbt_products($settings)
    {
    }
    /**
     * Meta value shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_meta_value($settings)
    {
    }
    /**
     * Single product meta.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_meta($settings)
    {
    }
    /**
     * Single product price table shortcode.
     */
    function woodmart_shortcode_single_product_dynamic_discounts_table($settings)
    {
    }
    /**
     * Single product content shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_extra_content($settings)
    {
    }
    /**
     * Navigation map.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_nav($settings)
    {
    }
    /**
     * Single product sold counter shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_sold_counter($settings)
    {
    }
    /**
     * Additional info table shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_additional_info_table($settings)
    {
    }
    /**
     * Compare button shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_compare_button($settings)
    {
    }
    /**
     * Reviews shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_reviews($settings)
    {
    }
    /**
     * Single product tabs shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_tabs($settings)
    {
    }
    /**
     * Stock progress bar shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_stock_progress_bar($settings)
    {
    }
    /**
     * Single product content shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_content($settings)
    {
    }
    /**
     * Single product stock status shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_stock_status($settings)
    {
    }
    /**
     * Price shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_price($settings)
    {
    }
    /**
     * Countdown shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_countdown($settings)
    {
    }
    /**
     * Rating shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_rating($settings)
    {
    }
    /**
     * Brand information shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_brand_information($settings)
    {
    }
    /**
     * Title shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_title($settings)
    {
    }
    /**
     * Wishlist button shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_wishlist_button($settings)
    {
    }
    /**
     * Product brands shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_single_product_brands($settings)
    {
    }
    /**
     * Cart table shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_cart_table($settings)
    {
    }
    /**
     * Cart totals shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_cart_totals($settings)
    {
    }
    /**
     * Shipping progress bar shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_shipping_progress_bar($settings)
    {
    }
    /**
     * Checkout steps shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_woocommerce_checkout_steps($settings)
    {
    }
    /**
     * Woocommerce notices shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_woocommerce_notices($settings)
    {
    }
    /**
     * Page title shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_page_title($settings)
    {
    }
    /**
     * WooCommerce hook shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_woocommerce_hook($settings)
    {
    }
    /**
     * WooCommerce breadcrumb shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_woocommerce_breadcrumb($settings)
    {
    }
    /**
     * Coupon form shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_checkout_coupon_form($settings)
    {
    }
    /**
     * Order review shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_checkout_payment_methods($settings)
    {
    }
    /**
     * Order review shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_checkout_order_review($settings)
    {
    }
    /**
     * Coupon form shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_checkout_login_form($settings)
    {
    }
    /**
     * Billing details shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_checkout_billing_details_form($settings)
    {
    }
    /**
     * Shipping details shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_checkout_shipping_details_form($settings)
    {
    }
    /**
     * Archive description shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_shop_archive_description($settings)
    {
    }
    /**
     * Filters area shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_shop_archive_filters_area($settings)
    {
    }
    /**
     * View shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_shop_archive_view($settings)
    {
    }
    /**
     * Result count shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_shop_archive_result_count($settings)
    {
    }
    /**
     * Archive description shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_shop_category_extra_description($settings)
    {
    }
    /**
     * Order by shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_shop_archive_orderby($settings)
    {
    }
    /**
     * Archive products shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_shop_archive_products($settings)
    {
    }
    /**
     * Woocommerce title shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_shop_archive_woocommerce_title($settings)
    {
    }
    /**
     * Active filters shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_shop_archive_active_filters($settings)
    {
    }
    /**
     * Filters area button shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_shop_archive_filters_area_btn($settings)
    {
    }
    /**
     * Products per page shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_shop_archive_per_page($settings)
    {
    }
    /**
     * Popup template.
     *
     * @package Woodmart
     *
     * @var string $btn_text     Button text.
     * @var string $btn_classes  Button classes.
     * @var string $title_text   Title text.
     * @var string $content      Content.
     */
    $btn_classes = \null;
    function whb_get_header()
    {
    }
    function whb_generate_header()
    {
    }
    function whb_get_builder()
    {
    }
    function whb_is_full_screen_menu()
    {
    }
    function whb_is_side_cart()
    {
    }
    function whb_get_settings()
    {
    }
    function whb_get_dropdowns_color()
    {
    }
    /**
     * Get custom icon.
     *
     * @param array $params List icon parameters.
     * @return string html tag <img> or ''.
     */
    function whb_get_custom_icon($params)
    {
    }
    /**
     * Initialize a plugin.
     *
     * Load class when all plugins are loaded
     * so that other plugins can overwrite it.
     *
     * @since 1.0
     *
     * @uses Nav_Menu_Images To initialize plugin.
     */
    function nmi_instantiate()
    {
    }
    /**
     * Get theme settings search data.
     */
    function woodmart_get_theme_settings_search_data()
    {
    }
    /**
     * Get theme settings typography data.
     */
    function woodmart_get_theme_settings_typography_data()
    {
    }
    /**
     * Add scripts for WPB fields.
     */
    function woodmart_admin_wpb_scripts()
    {
    }
    /**
     * Add styles for WPB fields.
     */
    function woodmart_admin_wpb_styles()
    {
    }
    /**
     * WPB frontend editor scripts.
     */
    function woodmart_wpb_frontend_editor_enqueue_scripts()
    {
    }
    /**
     * Enqueue a scripts.
     */
    function woodmart_enqueue_widgets_admin_scripts()
    {
    }
    /**
     * Enqueue a scripts.
     */
    function woodmart_enqueue_admin_scripts()
    {
    }
    /**
     * Enqueue a CSS stylesheets.
     */
    function woodmart_enqueue_admin_styles()
    {
    }
    /**
     * This function creates and includes a custom CSS for the WordPress admin panel when the css_backend option is passed.
     *
     * @return void
     */
    function woodmart_admin_custom_css_file()
    {
    }
    /**
     * Get html block links.
     *
     * @return false|string
     */
    function woodmart_get_html_block_links()
    {
    }
    /**
     * Update tgmpa link actions.
     *
     * @param string $action_link Action link.
     * @return string|void
     */
    function woodmart_update_tgmpa_link($action_link)
    {
    }
    /**
     * Get data button action from plugins status.
     *
     * @param string $plugin Plugins slug.
     * @return array
     */
    function woodmart_get_compatible_plugin_btn($plugin)
    {
    }
    /**
     * AJAX update enqueue icon fonts.
     *
     * @return void
     */
    function woodmart_get_update_enqueue_icons_fonts()
    {
    }
    /**
     * Register slider metaboxes
     *
     * @since 1.0.0
     */
    function woodmart_register_slider_metaboxes()
    {
    }
    /**
     * Register page metaboxes
     *
     * @since 1.0.0
     */
    function woodmart_register_page_metaboxes()
    {
    }
    /**
     * Register page metaboxes
     *
     * @since 1.0.0
     */
    function woodmart_register_product_metaboxes()
    {
    }
    /**
     * Enqueue script and styles for child theme
     */
    function woodmart_child_enqueue_styles()
    {
    }
    function woodmart_gallery_shortcode($attr)
    {
    }
    function woodmart_shortcode_text_block($atts, $content)
    {
    }
    /**
     * Get slide data.
     */
    function woodmart_get_slide_data($id, $title)
    {
    }
    /**
     * Slider shortcode.
     *
     * @param array $atts Element settings.
     *
     * @return false|string|void
     */
    function woodmart_shortcode_slider($atts)
    {
    }
    /**
     * Get slider CSS.
     *
     * @param int   $id     Post ID.
     * @param int   $el_id  Element ID.
     * @param array $slides Slides.
     */
    function woodmart_get_slider_css($id, $el_id, $slides)
    {
    }
    /**
     * Get CSS rule.
     *
     * @param string $rule CSS rule.
     * @param string $value Value.
     * @param string $before Before value.
     * @param string $after After value.
     */
    function woodmart_maybe_set_css_rule($rule, $value = '', $before = '', $after = '')
    {
    }
    /**
     * Get slider classes.
     *
     * @param int $id Slider ID.
     *
     * @return string
     */
    function woodmart_get_slider_class($id)
    {
    }
    /**
     * Get slide classes.
     *
     * @param int $id Post ID.
     *
     * @return string
     */
    function woodmart_get_slide_class($id)
    {
    }
    function woodmart_shortcode_image($atts)
    {
    }
    function woodmart_shortcode_products_tabs($atts = array(), $content = \null)
    {
    }
    function woodmart_shortcode_products_tab($atts)
    {
    }
    function woodmart_images_gallery_shortcode($atts)
    {
    }
    /**
     * This method accepts a list of markers and returns a prepared array of coordinates.
     * If the token list is empty, the method will return an empty array.
     *
     * @param array $markers List of markers.
     * @return array|string Return array with coords or empty string.
     */
    function woodmart_get_settings_coords_for_open_street_map($markers)
    {
    }
    /***
     * Render tabs shortcode.
     *
     * @param array  $attr Shortcode attributes.
     * @param string $content Inner content (shortcode).
     *
     * @return false|string
     */
    function woodmart_shortcode_open_street_map($attr, $content)
    {
    }
    /**
     * Render member-social.
     *
     * @param array $settings Settings list.
     *
     * @return string|void
     */
    function woodmart_shortcode_team_member_show_member_social($settings)
    {
    }
    /**
     * Team member element shortcode.
     *
     * @param array  $atts Shortcode attributes.
     * @param string $content content.
     *
     * @return string
     */
    function woodmart_shortcode_team_member($atts, $content = '')
    {
    }
    /***
     * Render off canvas button shortcode.
     *
     * @param array  $attr Shortcode attributes.
     * @param string $content Inner shortcode.
     *
     * @return false|string
     */
    function woodmart_shortcode_off_canvas_btn($attr, $content)
    {
    }
    function woodmart_shortcode_animated_counter($atts)
    {
    }
    /**
     * Render nested carousel wrapper shortcode.
     *
     * @param array  $atts Shortcode attributes.
     * @param string $content Inner content (shortcode).
     *
     * @return false|string
     */
    function woodmart_shortcode_nested_carousel($atts, $content)
    {
    }
    /**
     * Render nested carousel item shortcode.
     *
     * @param array  $atts Shortcode attributes.
     * @param string $content Inner content (shortcode).
     *
     * @return false|string
     */
    function woodmart_shortcode_nested_carousel_item($atts, $content)
    {
    }
    function woodmart_shortcode_button($atts, $popup = \false)
    {
    }
    function woodmart_shortcode_menu_price($atts, $content)
    {
    }
    function woodmart_product_filters_shortcode($atts, $content)
    {
    }
    function woodmart_filters_categories_shortcode($atts, $content)
    {
    }
    function woodmart_stock_status_shortcode($atts)
    {
    }
    function woodmart_filters_attribute_shortcode($atts, $content)
    {
    }
    function woodmart_filters_price_slider_shortcode($atts, $content)
    {
    }
    function woodmart_get_filtered_price()
    {
    }
    function woodmart_orderby_filter_template()
    {
    }
    function woodmart_shortcode_countdown_timer($atts, $content)
    {
    }
    function woodmart_shortcode_video($settings)
    {
    }
    function woodmart_shortcode_portfolio($atts)
    {
    }
    function woodmart_html_block_shortcode($atts)
    {
    }
    function woodmart_shortcode_pricing_tables($atts = array(), $content = \null)
    {
    }
    function woodmart_shortcode_pricing_plan($atts, $content)
    {
    }
    function woodmart_shortcode_extra_menu($atts = array(), $content = \null)
    {
    }
    function woodmart_shortcode_extra_menu_list($atts, $content)
    {
    }
    function woodmart_get_menu_label_tag($label, $label_text)
    {
    }
    function woodmart_get_menu_label_class($label)
    {
    }
    function woodmart_generate_posts_slider($atts, $query = \false, $products = \false)
    {
    }
    function woodmart_carousel_query_item($query = \false, $product = \false)
    {
    }
    function woodmart_shortcode_testimonials($atts = array(), $content = \null)
    {
    }
    function woodmart_shortcode_testimonial($atts, $content)
    {
    }
    /**
     * This method accepts a list of markers and returns a prepared array of coordinates.
     * If the token list is empty, the method will return an empty array.
     *
     * @param array $markers List of markers.
     * @return array|string Return array with coords or empty string.
     */
    function woodmart_get_settings_coords_for_google_map($markers)
    {
    }
    /***
     * Render tabs shortcode.
     *
     * @param array  $atts Shortcode attributes.
     * @param string $content Inner shortcode.
     *
     * @return false|string
     */
    function woodmart_shortcode_google_map($atts, $content)
    {
    }
    function woodmart_list_shortcode($atts)
    {
    }
    function woodmart_shortcode_social($atts)
    {
    }
    function woodmart_row_divider($atts)
    {
    }
    function woodmart_shortcode_instagram($atts, $content = '')
    {
    }
    function woodmart_pretty_number($x = 0)
    {
    }
    function woodmart_scrape_instagram($username, $slice = 9, $ajax_body = \false, $data_source = 'scrape')
    {
    }
    function woodmart_get_api_insta_images()
    {
    }
    /**
     * Insert image from url.
     *
     * @param string $url Image url.
     *
     * @return int|WP_Error
     */
    function xts_insert_image_from_url($url)
    {
    }
    /**
     * Get image id by slug
     *
     * @param string $slug Image slug.
     *
     * @return int
     */
    function woodmart_get_image_id_by_slug($slug)
    {
    }
    /**
     * Default images sizes.
     *
     * @since 1.0.0
     *
     * @return array
     */
    function woodmart_get_instagram_insert_image_sizes()
    {
    }
    /**
     * Allowed image extensions for instagram API.
     *
     * @param array $allowed_extensions Allowed image extensions.
     * @return array
     */
    function woodmart_get_instagram_image_sideload_extensions($allowed_extensions)
    {
    }
    function woodmart_get_scrape_insta_images($data)
    {
    }
    function woodmart_instagram_ajax_query()
    {
    }
    function woodmart_get_instagram_custom_images($images, $size, $link, $likes, $comments)
    {
    }
    function woodmart_shortcode_promo_banner($atts, $content)
    {
    }
    function woodmart_shortcode_banners_carousel($atts = array(), $content = \null)
    {
    }
    function woodmart_shortcode_mega_menu($atts, $content)
    {
    }
    function woodmart_shortcode_info_box($atts, $content)
    {
    }
    function woodmart_shortcode_info_box_carousel($atts = array(), $content = \null)
    {
    }
    function woodmart_image_hotspot_shortcode($atts, $content)
    {
    }
    function woodmart_hotspot_shortcode($atts, $content)
    {
    }
    function woodmart_get_hotspot_image()
    {
    }
    function woodmart_shortcode_3d_view($atts, $content)
    {
    }
    function woodmart_size_guide_shortcode($element_args)
    {
    }
    /***
     * Render tabs shortcode.
     *
     * @param array  $attr Shortcode attributes.
     * @param string $content Inner shortcode.
     *
     * @return false|string
     */
    function woodmart_shortcode_tabs($attr, $content)
    {
    }
    /**
     * Render tab shortcode.
     *
     * @param array  $attr Shortcode attributes.
     * @param string $content Inner shortcode.
     * @return false|string
     */
    function woodmart_shortcode_tab($attr, $content)
    {
    }
    /**
     * This function get tabs shortcodes ( string $content ), and return tabs data list ( array ).
     *
     * @param string $content Tabs Shortcodes.
     * @return array Tabs titles list.
     */
    function woodmart_get_tabs_title_from_shortcode($content)
    {
    }
    function woodmart_timeline_shortcode($atts, $content)
    {
    }
    function woodmart_timeline_item_shortcode($atts, $content)
    {
    }
    function woodmart_timeline_breakpoint_shortcode($atts, $content)
    {
    }
    function woodmart_shortcode_blog($atts)
    {
    }
    function woodmart_shortcode_responsive_text_block($atts, $content)
    {
    }
    function woodmart_shortcode_table($settings, $content)
    {
    }
    function woodmart_shortcode_table_row($settings, $content)
    {
    }
    /**
     * Get row item css.
     *
     * @param string $attr Data value.
     *
     * @return string
     */
    function woodmart_get_table_attribute($attr)
    {
    }
    function woodmart_shortcode_author_area($atts, $content)
    {
    }
    function woodmart_shortcode_user_panel($atts)
    {
    }
    function woodmart_shortcode_categories($atts, $content)
    {
    }
    /**
     * Sidebar shortcode.
     *
     * @param array $settings Shortcode attributes.
     */
    function woodmart_shortcode_sidebar($settings)
    {
    }
    function woodmart_shortcode_title($atts)
    {
    }
    /**
     * Render marquee shortcode.
     *
     * @param array  $atts Shortcode attributes.
     * @param string $content Inner content (shortcode).
     *
     * @return false|string
     */
    function woodmart_shortcode_marquee($atts, $content)
    {
    }
    function woodmart_shortcode_popup($atts, $content = '')
    {
    }
    function woodmart_shortcode_mailchimp($atts)
    {
    }
    function woodmart_shortcode_brands($atts, $content = '')
    {
    }
    /***
     * Render accordion shortcode.
     *
     * @param array  $args Shortcode attributes.
     * @param string $content Inner shortcode.
     *
     * @return false|string
     */
    function woodmart_shortcode_accordion($args, $content)
    {
    }
    /**
     * Render accordion item shortcode.
     *
     * @param array  $args Shortcode arguments.
     * @param string $content Inner shortcode.
     * @return false|string
     */
    function woodmart_shortcode_accordion_item($args, $content)
    {
    }
    /**
     * This function get accordion shortcodes ( string $content ), and return accordion data list ( array ).
     *
     * @param string $content accordion Shortcodes.
     * @return array accordion titles list.
     */
    function woodmart_get_accordion_data($content)
    {
    }
    function woodmart_twitter($atts)
    {
    }
    function woodmart_shortcode_products($atts, $query = \false)
    {
    }
    function woodmart_order_by_rating_post_clauses($args)
    {
    }
    function woodmart_get_default_product_shortcode_atts()
    {
    }
    function woodmart_ajax_search($atts)
    {
    }
    /**
     * Add scripts and styles to default gallery shortcode.
     *
     * @param string $output Gallery styles.
     *
     * @return string
     */
    function woodmart_gallery_shortcode_add_scripts_styles($output)
    {
    }
    function woodmart_theme_setup()
    {
    }
    function woodmart_upload_mimes($mimes)
    {
    }
    function woodmart_widget_init()
    {
    }
    function woodmart_register_required_plugins()
    {
    }
    /**
     * Single product change class with webp.
     *
     * @param string $class CSS Class.
     *
     * @return string
     */
    function woodmart_single_product_gallery_images_webp($class)
    {
    }
    function woodmart_get_vc_map_text_block()
    {
    }
    function woodmart_get_vc_map_slider()
    {
    }
    function woodmart_get_sliders_for_vc()
    {
    }
    function woodmart_get_vc_map_image()
    {
    }
    function woodmart_get_vc_map_products_tabs()
    {
    }
    function woodmart_get_vc_map_products_tab()
    {
    }
    function woodmart_get_vc_map_gallery()
    {
    }
    /**
     * Displays the shortcode settings fields in the admin.
     */
    function woodmart_get_vc_map_open_street_map()
    {
    }
    /**
     * Team member element map.
     *
     * @return array
     */
    function woodmart_get_vc_map_team_member()
    {
    }
    /**
     * Displays the shortcode settings fields in the admin.
     */
    function woodmart_get_vc_map_off_canvas_btn()
    {
    }
    function woodmart_get_vc_map_animated_counter()
    {
    }
    /**
     * Displays the shortcode settings fields in the admin.
     */
    function woodmart_get_vc_map_nested_carousel()
    {
    }
    /**
     * Displays the shortcode settings fields in the admin.
     */
    function woodmart_get_vc_map_nested_carousel_item()
    {
    }
    function woodmart_get_woodmart_button_shortcode_args()
    {
    }
    function woodmart_get_button_shortcode_params()
    {
    }
    function woodmart_get_vc_map_menu_price()
    {
    }
    function woodmart_get_vc_map_wishlist()
    {
    }
    function woodmart_get_vc_map_product_filters()
    {
    }
    function woodmart_get_vc_map_filter_categories()
    {
    }
    function woodmart_get_vc_map_filters_attribute()
    {
    }
    function woodmart_get_vc_map_stock_status()
    {
    }
    function woodmart_get_vc_map_filters_price_slider()
    {
    }
    function woodmart_get_vc_map_filters_orderby()
    {
    }
    function woodmart_get_vc_map_countdown_timer()
    {
    }
    function woodmart_get_vc_map_video()
    {
    }
    function woodmart_get_vc_map_portfolio()
    {
    }
    function woodmart_get_vc_map_html_block()
    {
    }
    function woodmart_get_vc_map_pricing_tables()
    {
    }
    function woodmart_get_vc_map_pricing_plan()
    {
    }
    function woodmart_get_vc_map_extra_menu()
    {
    }
    function woodmart_get_vc_map_extra_menu_list()
    {
    }
    function woodmart_get_vc_map_testimonials()
    {
    }
    function woodmart_get_vc_map_testimonial()
    {
    }
    /**
     * Displays the shortcode settings fields in the admin.
     */
    function woodmart_get_vc_map_google_map()
    {
    }
    function woodmart_get_vc_map_list()
    {
    }
    function woodmart_get_social_buttons_shortcode_args()
    {
    }
    function woodmart_get_social_shortcode_params()
    {
    }
    function woodmart_get_vc_map_row_divider()
    {
    }
    function woodmart_get_vc_map_instagram()
    {
    }
    function woodmart_get_instagram_params()
    {
    }
    function woodmart_get_vc_map_shortcode_products_widget()
    {
    }
    function woodmart_vc_register_maps()
    {
    }
    function woodmart_get_vc_map_promo_banner()
    {
    }
    function woodmart_get_vc_map_banners_carousel()
    {
    }
    function woodmart_get_banner_params()
    {
    }
    function woodmart_get_vc_map_mega_menu()
    {
    }
    function woodmart_get_vc_map_info_box_carousel()
    {
    }
    function woodmart_get_woodmart_info_box_shortcode_args()
    {
    }
    function woodmart_get_info_box_shortcode_params()
    {
    }
    function woodmart_get_vc_map_image_hotspot()
    {
    }
    function woodmart_get_vc_map_hotspot()
    {
    }
    function woodmart_productIdAutocompleteSuggester($query)
    {
    }
    function woodmart_productIdAutocompleteSuggester_new($query)
    {
    }
    function woodmart_productIdAutocompleteRender($query)
    {
    }
    function woodmart_get_vc_map_3d_view()
    {
    }
    function woodmart_get_vc_map_size_guide()
    {
    }
    /**
     * Displays the shortcode settings fields in the admin.
     */
    function woodmart_get_vc_map_tabs()
    {
    }
    function woodmart_get_vc_map_tab()
    {
    }
    function woodmart_get_vc_map_timeline()
    {
    }
    function woodmart_get_vc_map_timeline_item()
    {
    }
    function woodmart_get_vc_map_timeline_breakpoint()
    {
    }
    function woodmart_get_vc_map_blog()
    {
    }
    function woodmart_get_vc_map_responsive_text_block()
    {
    }
    function woodmart_get_vc_map_table()
    {
    }
    function woodmart_get_vc_map_table_row()
    {
    }
    function woodmart_get_vc_shortcode_compare()
    {
    }
    function woodmart_get_vc_map_author_area()
    {
    }
    function woodmart_get_author_area_params()
    {
    }
    function woodmart_parallax_scroll_map($key)
    {
    }
    function woodmart_parallax_scroll_data($x, $y, $z, $smooth)
    {
    }
    function woodmart_parallax_scroll($output, $obj, $attr, $shortcode)
    {
    }
    function woodmart_wpb_class_sorting($css_classes)
    {
    }
    function woodmart_add_field_to_video()
    {
    }
    function woodmart_add_video_poster($output, $obj, $attr)
    {
    }
    function woodmart_get_vc_shortcode_categories()
    {
    }
    function woodmart_productCategoryCategoryAutocompleteSuggester($query, $slug = \false)
    {
    }
    function woodmart_productCategoryCategoryRenderByIdExact($query)
    {
    }
    function woodmart_productCategoryTermOutput($term)
    {
    }
    /**
     * Sidebar map.
     */
    function woodmart_get_vc_map_sidebar()
    {
    }
    /**
     * Get all sidebars for shop page builder.
     *
     * @return array
     */
    function woodmart_get_sidebars_for_builder_in_shop_page()
    {
    }
    function woodmart_get_vc_map_title()
    {
    }
    /**
     * Get Section Title Color.
     *
     * @return array List of title color variation.
     */
    function woodmart_section_title_color_variation()
    {
    }
    /**
     * Get Gradient Section Title Color Picker.
     *
     * @return array List of title color variation.
     */
    function woodmart_title_gradient_picker()
    {
    }
    /**
     * Displays the shortcode settings fields in the admin.
     */
    function woodmart_get_vc_map_marquee()
    {
    }
    function woodmart_get_vc_map_popup()
    {
    }
    function woodmart_get_vc_map_mailchimp()
    {
    }
    function woodmart_get_vc_map_brands()
    {
    }
    function woodmart_productBrandsAutocompleteSuggester($query, $slug = \false)
    {
    }
    function woodmart_productBrandsRenderByIdExact($query)
    {
    }
    /**
     * Displays the shortcode settings fields in the admin.
     */
    function woodmart_get_vc_map_accordion()
    {
    }
    function woodmart_get_vc_map_accordion_item()
    {
    }
    function woodmart_get_vc_map_twitter()
    {
    }
    function woodmart_get_products_shortcode_map_params()
    {
    }
    function woodmart_get_products_shortcode_params()
    {
    }
    function woodmart_vc_autocomplete_taxonomies_field_render($term)
    {
    }
    function woodmart_vc_autocomplete_taxonomies_field_search($search_string)
    {
    }
    function woodmart_get_vc_map_ajax_search()
    {
    }
    /**
     * Register element map.
     *
     * @param string          $tag Element tag.
     * @param callable-string $callback Map callback.
     *
     * @return void
     */
    function woodmart_vc_map($tag, $callback)
    {
    }
    /**
     * Update custom params map to Default Row element in WPBakery.
     *
     * @throws Exception .
     */
    function woodmart_vc_row_custom_options()
    {
    }
    /**
     * Update custom params map to Default Column element in WPBakery.
     *
     * @throws Exception .
     */
    function woodmart_vc_column_custom_options()
    {
    }
    /**
     * Update custom params map to Default Section element in WPBakery.
     *
     * @throws Exception .
     */
    function woodmart_vc_section_custom_options()
    {
    }
    /**
     * Update custom params map to Default Empty Space element in WPBakery.
     *
     * @throws Exception .
     */
    function woodmart_vc_empty_space_custom_options()
    {
    }
    /**
     * Update custom params map to Default Column Text element in WPBakery.
     *
     * @throws Exception .
     */
    function woodmart_vc_column_text_custom_options()
    {
    }
    /**
     * Update custom params map to Default Images Carousel element in WPBakery.
     *
     * @throws Exception .
     */
    function woodmart_vc_images_carousel_custom_options()
    {
    }
    /**
     * Update custom params map to Default Single Image element in WPBakery.
     *
     * @throws Exception .
     */
    function woodmart_vc_single_image_custom_options()
    {
    }
    /**
     * Update custom params map to Default Contact Form 7 element in WPBakery.
     *
     * @throws Exception .
     */
    function woodmart_contact_form_7_custom_options()
    {
    }
    /**
     * Update custom params map to Default Separator element in WPBakery.
     *
     * @throws Exception .
     */
    function woodmart_vc_separator_custom_options()
    {
    }
    /**
     * Adds classes depending on the passed settings.
     *
     * @param array $class list of classes.
     * @param mixed $base .
     * @param array $atts list of settings.
     * @return string new classes.
     */
    function woodmart_vc_extra_classes($class, $base, $atts)
    {
    }
    /**
     * Get display inline option map.
     *
     * @return array map.
     */
    function woodmart_get_vc_display_inline_map()
    {
    }
    /**
     * Get responsive spacing option map.
     *
     * @return array map.
     */
    function woodmart_get_vc_responsive_spacing_map()
    {
    }
    /**
     * Get responsive visible option map.
     *
     * @param string $key Needed map. Should be equal to map param_name.
     *
     * @return array map.
     */
    function woodmart_get_vc_responsive_visible_map($key)
    {
    }
    /**
     * Get mobile reset option map.
     *
     * @param string $key Needed map. Should be equal to map param_name.
     *
     * @return array map.
     */
    function woodmart_get_responsive_reset_margin_map($key)
    {
    }
    /**
     * Add animation map settings for VC.
     *
     * @param array $animations list of animations.
     * @return array
     */
    function woodmart_add_css_animation($animations)
    {
    }
    /**
     * Get animation map settings for VC.
     *
     * @param string $key Needed map. Should be equal to map param_name.
     *
     * @return array
     */
    function woodmart_get_vc_animation_map($key)
    {
    }
    /**
     * Get tab title category for WPB builder.
     *
     * @param string $title Title category.
     *
     * @return string
     */
    function woodmart_get_tab_title_category_for_wpb($title, $layout = '')
    {
    }
    /**
     * Encode urlencoded json.
     *
     * @param string $string String.
     * @param string $encoding Format.
     * @param array  $original_string Original string.
     * @return string
     */
    function woodmart_wpml_pb_shortcode_encode_urlencoded_json($string, $encoding, $original_string)
    {
    }
    /**
     * Decode urlencoded json.
     *
     * @param string $string String.
     * @param string $encoding Format.
     * @param string $original_string Original string.
     * @return string
     */
    function woodmart_wpml_pb_shortcode_decode_urlencoded_json($string, $encoding, $original_string)
    {
    }
    /**
     * Woodmart slider param.
     *
     * @param array  $settings Settings.
     * @param string $value    Value.
     *
     * @return string
     */
    function woodmart_get_slider_param($settings, $value)
    {
    }
    /**
     * This function creates html for the woodmart_switch field in WPBakery.
     *
     * @param array $settings .
     * @param array $value .
     * @return string
     */
    function woodmart_get_switch_param($settings, $value)
    {
    }
    function woodmart_get_responsive_size_param($settings, $value)
    {
    }
    /**
     * Get typography map.
     *
     * @param array $args Arguments.
     *
     * @return array
     */
    function woodmart_get_typography_map($args)
    {
    }
    /**
     * Get control data.
     *
     * @param mixed  $data   Data.
     * @param string $device Device name.
     *
     * @return string
     */
    function woodmart_vc_get_control_data($data, $device)
    {
    }
    /**
     * This function parse post content data and return fields params.
     *
     * @param mixed $content post content.
     *
     * @return string|void
     * @throws Exception .
     */
    function woodmart_parse_shortcodes_css_data_new($content)
    {
    }
    /**
     * This function return field css.
     *
     * @param int $post_id Post id.
     *
     * @throws Exception .
     */
    function woodmart_get_fields_css($post_id)
    {
    }
    /**
     * This function save field css.
     *
     * @param int $post_id Post id.
     *
     * @throws Exception .
     */
    function woodmart_save_fields_css($post_id)
    {
    }
    /**
     * This function prepares the css.
     *
     * @param array $css_data array with css data in base64.
     * @param int   $post_id  Post id.
     *
     * @return string $result finished css.
     */
    function woodmart_fields_css_data_to_css($data_array, $post_id)
    {
    }
    /**
     * Save shortcodes fonts.
     *
     * @param array $fonts   Fonts array.
     * @param int   $post_id Post id.
     *
     * @return void
     */
    function woodmart_save_fields_fonts($fonts, $post_id)
    {
    }
    /**
     * Load fields fonts.
     */
    function woodmart_load_fields_fonts()
    {
    }
    function woodmart_parse_shortcodes_css_data($content)
    {
    }
    /**
     * This function return old field css.
     *
     * @param int $post_id Post id.
     * @throws Exception .
     */
    function woodmart_get_fields_css_old($post_id)
    {
    }
    function woodmart_print_shortcodes_css($id = \null)
    {
    }
    function woodmart_shortcodes_css_data_to_css($css_data)
    {
    }
    function woodmart_get_title_divider_param($settings, $value)
    {
    }
    /**
     * Button set param.
     *
     * @param array  $settings Settings.
     * @param string $value    Value.
     *
     * @return string
     */
    function woodmart_get_button_set_param($settings, $value)
    {
    }
    function woodmart_get_dropdown_param($settings, $value)
    {
    }
    /**
     * Color picker.
     *
     * @param array  $settings Settings.
     * @param string $value    Value.
     *
     * @return string
     */
    function woodmart_get_colorpicker_param($settings, $value)
    {
    }
    function woodmart_get_datepicker_param($settings, $value)
    {
    }
    function woodmart_get_empty_space_param($settings, $value)
    {
    }
    function woodmart_image_hotspot($settings, $value)
    {
    }
    function woodmart_get_responsive_spacing_param($settings, $value)
    {
    }
    function woodmart_get_responsive_spacing_template($device)
    {
    }
    /**
     * Woodmart slider param.
     *
     * @param array  $settings Settings.
     * @param string $value    Value.
     *
     * @return string
     */
    function woodmart_get_slider_responsive_param($settings, $value)
    {
    }
    /**
     * This function render slider responsive.
     *
     * @param string $device          Device name ( 'desktop', 'tablet', 'mobile' ).
     * @param array  $settings        All slider responsive settings.
     * @param array  $device_settings Device settings.
     *
     * @return false|string
     */
    function woodmart_render_slider_responsive($device, $settings, $device_settings)
    {
    }
    /**
     * This function rendering Number field.
     *
     * @param array  $settings Settings.
     * @param string $value    Value.
     *
     * @return false|string
     */
    function woodmart_get_number_param($settings, $value)
    {
    }
    /**
     * Box shadow.
     *
     * @param array  $settings Settings.
     * @param string $value    Value.
     *
     * @return string
     */
    function woodmart_get_box_shadow_param($settings, $value)
    {
    }
    /**
     * Woodmart attachment param.
     *
     * @param array  $settings Settings.
     * @param string $value    Value.
     *
     * @return string
     */
    function woodmart_get_upload_param($settings, $value)
    {
    }
    function woodmart_get_notice_param($settings, $value)
    {
    }
    /**
     * Woodmart slider param.
     *
     * @param array  $settings Settings.
     * @param string $value    Value.
     *
     * @return string
     */
    function woodmart_get_dimensions_responsive_param($settings, $value)
    {
    }
    /**
     * This function render slider responsive.
     *
     * @param string $device          Device name ( 'desktop', 'tablet', 'mobile' ).
     * @param array  $settings        All slider responsive settings.
     * @param array  $device_settings Device settings.
     *
     * @return false|string
     */
    function woodmart_render_dimension_responsive($device, $settings, $device_settings)
    {
    }
    /**
     * This function rendering dropdown field.
     *
     * @param array  $settings Settings.
     * @param string $value    Value.
     *
     * @return false|string
     */
    function woodmart_get_select_param($settings, $value)
    {
    }
    /**
     * This function rendering dropdown field.
     *
     * @param array  $settings Settings.
     * @param string $value    Value.
     *
     * @return false|string
     */
    function woodmart_get_fonts_param($settings, $value)
    {
    }
    /**
     * Woodmart color picker param.
     *
     * @param array  $settings Settings.
     * @param string $value    Value.
     *
     * @return string
     */
    function woodmart_get_wd_colorpicker_param($settings, $value)
    {
    }
    function woodmart_get_css_id_param($settings, $value)
    {
    }
    function woodmart_add_gradient_type($settings, $value)
    {
    }
    function woodmart_get_gradient_field($param_name, $value, $is_VC = \false)
    {
    }
    function woodmart_add_image_select_type($settings, $value)
    {
    }
    function woodmart_wpml_js_data()
    {
    }
    function woodmart_wpml_compatibility($ajax_actions)
    {
    }
    function woodmart_wpml_variation_gallery_data($post_id_from, $post_id_to, $meta_key)
    {
    }
    function woodmart_wpml_register_header_builder_strings($file)
    {
    }
    /**
     * Output WPML languages in mobile menu.
     *
     * @param string  $items Items.
     * @param array   $args Args.
     * @param boolean $return Return.
     *
     * @return mixed|string
     */
    function woodmart_get_wpml_languages_in_mobile_menu($items = '', $args = array(), $return = \false)
    {
    }
    function woodmart_wpml_product_video_attachment_id($attachment_id, $product)
    {
    }
    function woodmart_wpml_shipping_progress_bar_amount($limit)
    {
    }
    /**
     * The downsizer. This only does something if the existing image size doesn't exist yet.
     *
     * @param boolean $out false.
     * @param int     $id Attachment ID.
     * @param mixed   $size The size name, or an array containing the width & height.
     * @return  mixed False if the custom downsize failed, or an array of the image if successful
     */
    function gambit_otf_regen_thumbs_media_downsize($out, $id, $size)
    {
    }
    function woodmart_wcmp_dequeue_styles()
    {
    }
    function woodmart_wcmp_custom_css()
    {
    }
    function woodmart_dokan_edit_product_wrap_start()
    {
    }
    function woodmart_dokan_edit_product_wrap_end()
    {
    }
    function woodmart_dokan_lazy_load_fix()
    {
    }
    function woodmart_dokan_remove_map_from_shop_page()
    {
    }
    function woodmart_dokan_add_map_before_main_content()
    {
    }
    /**
     * Remove from CSS exclude Elementor post file..
     *
     * @param array $excluded_files Excluded files.
     *
     * @return array
     */
    function woodmart_remove_elementor_css_from_exclude($excluded_files)
    {
    }
    /**
     * Exclusions JS files.
     *
     * @param array $exclude_delay_js Exclude files.
     * @return array
     */
    function woodmart_delay_js_exclusions($exclude_delay_js)
    {
    }
    /**
     * Add woodmart uris to the wp_rocket rejected uri
     *
     * @param array $uris List of rejected uri.
     */
    function woodmart_rejected_uri_exclusions($uris)
    {
    }
    /**
     * Exclude woodmart layout from Optimize SEO.
     *
     * @param array $post_types Post type.
     * @return mixed
     */
    function woodmart_layout_post_type_filter($post_types)
    {
    }
    /**
     * Exclude woodmart layout from Optimize SEO.
     *
     * @param array $post_types Post type.
     * @return mixed
     */
    function woodmart_indexable_excluded_post_types($post_types)
    {
    }
    function woodmart_wcfm_stock_progress_bar_field($fields, $product_id)
    {
    }
    function woodmart_wcfm_save_total_stock_quantity($post_id, $form_data)
    {
    }
    /**
     * Update order.
     *
     * @param mixed   $additional_data Additional data.
     * @param string  $index Email index.
     * @param integer $order_id Order ID.
     * @param object  $current_email Emails data.
     *
     * @return bool|void
     */
    function woodmart_woo_preview_update_order($additional_data, $index, $order_id, $current_email)
    {
    }
    /**
     * Trigger emails content.
     *
     * @param object $current_email Emails data.
     * @param mixed  $additional_data Additional data.
     *
     * @return void
     */
    function woodmart_woo_preview_order_trigger($current_email, $additional_data)
    {
    }
    /**
     * Video custom controls
     *
     * @since 1.0.0
     *
     * @param object $element The control.
     */
    function woodmart_add_video_custom_controls($element)
    {
    }
    /**
     * Add class to section is content with is set.
     *
     * @since 1.0.0
     *
     * @param object $widget Element.
     */
    function woodmart_add_section_class_if_content_width($widget)
    {
    }
    /**
     * Section negative gap fix.
     *
     * @since 1.0.0
     */
    function woodmart_section_negative_gap()
    {
    }
    /**
     * Section full width option
     *
     * @since 1.0.0
     *
     * @param object $element The control.
     */
    function woodmart_add_section_full_width_control($element)
    {
    }
    /**
     * Add custom fonts to theme group
     *
     * @since 1.0.0
     *
     * @param Controls_Stack $control_stack The control.
     */
    function woodmart_override_section_margin_control($control_stack)
    {
    }
    /**
     * Section before render.
     *
     * @since 1.0.0
     *
     * @param object $widget Element.
     */
    function woodmart_section_before_render($widget)
    {
    }
    /**
     * Column section controls.
     *
     * @since 1.0.0
     *
     * @param Controls_Stack $element The control.
     */
    function woodmart_add_section_custom_controls($element)
    {
    }
    /**
     * Add color scheme option to text element
     *
     * @since 1.0.0
     *
     * @param object $element The control.
     */
    function woodmart_add_color_scheme_to_text_element($element)
    {
    }
    /**
     * Add content align option to text element
     *
     * @since 1.0.0
     *
     * @param object $element The control.
     */
    function woodmart_add_content_align_to_text_element($element)
    {
    }
    /**
     * Add content width option to text element
     *
     * @since 1.0.0
     *
     * @param object $element The control.
     */
    function woodmart_add_content_width_to_text_element($element)
    {
    }
    /**
     * Container full width option.
     *
     * @since 1.0.0
     *
     * @param object $element The control.
     */
    function woodmart_add_container_full_width_control($element)
    {
    }
    /**
     * Container custom controls.
     *
     * @since 1.0.0
     *
     * @param object $element The control.
     */
    function woodmart_add_container_color_scheme_control($element)
    {
    }
    /**
     * Container section controls.
     *
     * @since 1.0.0
     *
     * @param Controls_Stack $element The control.
     */
    function woodmart_add_container_custom_controls($element)
    {
    }
    /**
     * Section before render.
     *
     * @since 1.0.0
     *
     * @param object $widget Element.
     */
    function woodmart_container_before_render($widget)
    {
    }
    /**
     * Add class to container is content with is set.
     *
     * @since 1.0.0
     *
     * @param object $widget Element.
     */
    function woodmart_add_container_class_if_content_width($widget)
    {
    }
    /**
     * Column before render.
     *
     * @since 1.0.0
     *
     * @param object $widget Element.
     */
    function woodmart_column_before_render($widget)
    {
    }
    /**
     * Column custom controls
     *
     * @since 1.0.0
     *
     * @param object $element The control.
     */
    function woodmart_add_column_color_scheme_control($element)
    {
    }
    /**
     * Column custom controls
     *
     * @since 1.0.0
     *
     * @param object $element The control.
     */
    function woodmart_add_column_custom_controls($element)
    {
    }
    /**
     * Common before render.
     *
     * @since 1.0.0
     *
     * @param object $widget Element.
     */
    function woodmart_common_before_render($widget)
    {
    }
    /**
     * Elements custom controls
     *
     * @since 1.0.0
     *
     * @param object $element The control.
     */
    function woodmart_add_elements_custom_controls($element)
    {
    }
    /**
     * Accordion custom controls
     *
     * @since 1.0.0
     *
     * @param object $element The control.
     */
    function woodmart_add_accordion_custom_controls($element)
    {
    }
    /**
     * Retrieve builder content css.
     *
     * @since 1.0.0
     *
     * @param integer $id The post ID.
     *
     * @return string
     */
    function woodmart_elementor_get_content_css($id)
    {
    }
    /**
     * Retrieve builder content for display.
     *
     * @since 1.0.0
     *
     * @param integer $id The post ID.
     *
     * @return string
     */
    function woodmart_elementor_get_content($id)
    {
    }
    /**
     * Get image url
     *
     * @since 1.0.0
     *
     * @param array $link Link data array.
     *
     * @return string
     */
    function woodmart_get_link_attrs($link)
    {
    }
    /**
     * Render Icon
     *
     * @since 1.0.0
     *
     * @param array  $icon       Icon Type, Icon value.
     * @param array  $attributes Icon HTML Attributes.
     * @param string $tag        Icon HTML tag, defaults to <i>.
     *
     * @return mixed|string
     */
    function woodmart_elementor_get_render_icon($icon, $attributes = [], $tag = 'i')
    {
    }
    /**
     * Custom shapes.
     *
     * @since 1.0.0
     *
     * @param string $location Location.
     *
     * @return bool
     */
    function woodmart_elementor_has_location($location)
    {
    }
    /**
     * Get image url
     *
     * @since 1.0.0
     *
     * @param array  $settings       Control settings.
     * @param string $image_size_key Settings key for image size.
     *
     * @return string
     */
    function woodmart_get_image_html($settings, $image_size_key = '')
    {
    }
    /**
     * Whether the edit mode is active.
     *
     * @since 1.0.0
     */
    function woodmart_elementor_is_edit_mode()
    {
    }
    /**
     * Whether the preview mode is active.
     *
     * @since 1.0.0
     */
    function woodmart_elementor_is_preview_mode()
    {
    }
    /**
     * Whether the preview page.
     *
     * @since 1.0.0
     */
    function woodmart_elementor_is_preview_page()
    {
    }
    /**
     * Get image url
     *
     * @since 1.0.0
     *
     * @param integer $id             Image id.
     * @param string  $image_size_key Settings key for image size.
     * @param array   $settings       Control settings.
     *
     * @return string
     */
    function woodmart_get_image_url($id, $image_size_key, $settings)
    {
    }
    /**
     * Retrieve available image sizes names
     *
     * @since 1.0.0
     *
     * @param string $style Array output style.
     *
     * @return array
     */
    function woodmart_get_all_image_sizes_names($style = 'default')
    {
    }
    function woodmart_elementor_button_template($settings)
    {
    }
    /**
     * Get button map.
     *
     * @param  object $element  Element object.
     * @param  array  $custom_args  Custom args.
     *
     * @since 1.0.0
     */
    function woodmart_get_button_content_general_map($element, $custom_args = array())
    {
    }
    /**
     * Get button map.
     *
     * @param  object $element  Element object.
     *
     * @since 1.0.0
     */
    function woodmart_get_button_style_general_map($element)
    {
    }
    /**
     * Get button map.
     *
     * @param  object $element  Element object.
     *
     * @since 1.0.0
     */
    function woodmart_get_button_style_layout_map($element)
    {
    }
    /**
     * Get button map.
     *
     * @param  object $element  Element object.
     *
     * @since 1.0.0
     */
    function woodmart_get_button_style_icon_map($element, $prefix_key = '')
    {
    }
    function woodmart_elementor_banner_carousel_template($settings)
    {
    }
    function woodmart_elementor_banner_template($settings)
    {
    }
    function woodmart_elementor_products_tabs_template($settings)
    {
    }
    function woodmart_elementor_products_tab_template($settings)
    {
    }
    function woodmart_elementor_infobox_carousel_template($settings)
    {
    }
    function woodmart_elementor_infobox_template($settings)
    {
    }
    function woodmart_elementor_portfolio_template($settings)
    {
    }
    function woodmart_elementor_instagram_template($settings)
    {
    }
    /**
     * Products element config
     *
     * @since 1.0.0
     *
     * @return array
     */
    function woodmart_get_elementor_products_config()
    {
    }
    function woodmart_elementor_products_template($settings)
    {
    }
    function woodmart_elementor_blog_template($settings)
    {
    }
    /**
     * Get animation map
     *
     * @since 1.0.0
     *
     * @param object $element Element object.
     * @param array  $condition Element condition. Default empty.
     */
    function woodmart_get_animation_map($element, $condition = array())
    {
    }
    /**
     * Ini woo cart in elementor.
     */
    function woodmart_elementor_maybe_init_cart()
    {
    }
    /**
     * Ini woo cart in elementor.
     */
    function woodmart_elementor_enqueue_scripts()
    {
    }
    /**
     * Register Elementor Locations.
     *
     * @param ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager $elementor_theme_manager theme manager.
     *
     * @return void
     */
    function woodmart_elementor_register_elementor_locations($elementor_theme_manager)
    {
    }
    /**
     * Custom shapes.
     *
     * @since 1.0.0
     *
     * @return array
     */
    function woodmart_elementor_custom_shapes()
    {
    }
    /**
     * Custom animations.
     *
     * @since 1.0.0
     *
     * @return array
     */
    function woodmart_elementor_custom_animations()
    {
    }
    /**
     * Get post by search
     *
     * @since 1.0.0
     */
    function woodmart_get_posts_by_query()
    {
    }
    /**
     * Get post title by ID
     *
     * @since 1.0.0
     */
    function woodmart_get_posts_title_by_id()
    {
    }
    /**
     * Get taxonomies title by id
     *
     * @since 1.0.0
     */
    function woodmart_get_taxonomies_title_by_id()
    {
    }
    /**
     * Get taxonomies by search
     *
     * @since 1.0.0
     */
    function woodmart_get_taxonomies_by_query()
    {
    }
    /**
     * Enqueue elementor editor custom styles
     *
     * @since 1.0.0
     */
    function woodmart_elementor_enqueue_editor_styles()
    {
    }
    /**
     * Add custom font group to font control
     *
     * @since 1.0.0
     *
     * @param array $font_groups Default font groups.
     *
     * @return array
     */
    function woodmart_add_custom_font_group($font_groups)
    {
    }
    /**
     * Add custom fonts to theme group
     *
     * @since 1.0.0
     *
     * @param array $additional_fonts Additional fonts.
     *
     * @return array
     */
    function woodmart_add_custom_fonts_to_theme_group($additional_fonts)
    {
    }
    function woodmart_wcfmmp_shop_page_link($user_id)
    {
    }
    function woodmart_wcfmmp_per_page_custom_expression()
    {
    }
    function woodmart_wcfmmp_per_page()
    {
    }
    /**
     * Get widget title tag
     */
    function woodmart_get_widget_title_tag()
    {
    }
    function woodmart_is_new_label_needed($product_id)
    {
    }
    function woodmart_woocommerce_installed()
    {
    }
    function woodmart_js_composer_installed()
    {
    }
    function woodmart_is_woo_ajax()
    {
    }
    function woodmart_is_pjax()
    {
    }
    function woodmart_is_layered_nav_active()
    {
    }
    function woodmart_is_layered_price_active()
    {
    }
    /**
     * FIX CMB2 bug
     */
    function woodmart_get_current_term_id()
    {
    }
    function woodmart_is_product_attribute_archive()
    {
    }
    /**
     * This function checked is woocommerce legacy rest api.
     *
     * @return bool
     */
    function woodmart_is_woocommerce_legacy_rest_api()
    {
    }
    function woodmart_font_icon_preload()
    {
    }
    function woocommerce_template_loop_product_title()
    {
    }
    function woodmart_checkout_steps()
    {
    }
    function woodmart_category_thumb_double_size($category)
    {
    }
    function woodmart_product_sale_countdown($settings = array())
    {
    }
    function woodmart_clear_countdown_variable_cache($post_id)
    {
    }
    function woodmart_hover_image()
    {
    }
    function woodmart_woo_wrapper_start()
    {
    }
    function woodmart_woo_wrapper_end()
    {
    }
    function woodmart_before_my_account_navigation()
    {
    }
    function woodmart_after_my_account_navigation()
    {
    }
    function woodmart_product_extra_content($tabs)
    {
    }
    function woodmart_product_video_button()
    {
    }
    function woodmart_product_zoom_button()
    {
    }
    function woodmart_additional_galleries_open()
    {
    }
    function woodmart_additional_galleries_close()
    {
    }
    function woodmart_product_share_buttons()
    {
    }
    function woodmart_product_instagram()
    {
    }
    function woodmart_filter_buttons()
    {
    }
    function woodmart_sorting_widget()
    {
    }
    function woodmart_price_widget()
    {
    }
    function woodmart_empty_cart_text()
    {
    }
    function woodmart_open_table_wrapper_div()
    {
    }
    function woodmart_close_table_wrapper_div()
    {
    }
    function woodmart_show_sidebar_btn()
    {
    }
    function woodmart_products_per_page_select($is_element = \false, $settings = \false)
    {
    }
    function woodmart_products_view_select($is_element = \false, $settings = \false)
    {
    }
    /**
     * Make query and render categories in navigation style.
     *
     * @param array|false $new_list_args Arguments list for wp_list_categories() function. Default = false.
     * @see wp_list_categories() Render categoriel html.
     * @return void
     */
    function woodmart_product_categories_nav($new_list_args = \false, $settings = \false)
    {
    }
    function woodmart_show_category_ancestors($settings = \false)
    {
    }
    function woodmart_product_categories()
    {
    }
    function woodmart_cart_data($array)
    {
    }
    function woodmart_cart_count()
    {
    }
    function woodmart_cart_subtotal()
    {
    }
    function woodmart_product_label()
    {
    }
    function woodmart_my_account_links()
    {
    }
    function woodmart_my_account_wrapp_start()
    {
    }
    function woodmart_my_account_wrapp_end()
    {
    }
    function woodmart_mini_cart_view_cart_btn()
    {
    }
    function woodmart_get_product_attributes_label()
    {
    }
    function woodmart_before_add_to_cart_area()
    {
    }
    function woodmart_after_add_to_cart_area()
    {
    }
    function woodmart_clear_filters_btn()
    {
    }
    function woodmart_sticky_single_add_to_cart()
    {
    }
    function woodmart_shop_vc_css()
    {
    }
    function woodmart_sticky_sidebar_button($echo = \true, $toolbar = \false)
    {
    }
    function woodmart_hide_price_not_logged_in()
    {
    }
    function woodmart_print_login_to_see()
    {
    }
    function woodmart_shop_filters_area()
    {
    }
    function woodmart_get_header_links($settings = \false)
    {
    }
    function woodmart_topbar_links($items = '', $args = array(), $return = \false)
    {
    }
    function woodmart_header_block_wishlist()
    {
    }
    function woodmart_get_my_account_menu()
    {
    }
    function woodmart_add_logout_link($items = '', $args = array(), $return = \false)
    {
    }
    function woodmart_login_form($echo = \true, $action = \false, $message = \false, $hidden = \false, $redirect = \false)
    {
    }
    function woodmart_cart_side_widget()
    {
    }
    function woodmart_sidebar_login_form()
    {
    }
    function woodmart_products_widget_template($upsells, $small_grid = \false)
    {
    }
    function woodmart_my_account_navigation($items)
    {
    }
    function woodmart_my_account_navigation_endpoint_url($url, $endpoint, $value, $permalink)
    {
    }
    /**
     * Show notice if cart is empty.
     *
     * @since 1.0.0
     */
    function woodmart_wc_empty_cart_message()
    {
    }
    /**
     * Output product SKU.
     *
     * @return void
     */
    function woodmart_product_sku()
    {
    }
    /**
     * Output stock status after title.
     *
     * @return void
     */
    function woodmart_stock_status_after_title()
    {
    }
    /**
     * Get HTML for ratings.
     *
     * @param string $style [optional] Specify the name of the style in which to display the product rating. By default, this parameter is 'default'.
     * @param int $precision [optional] The optional number of decimal digits to round to.
     * @return mixed|string|void
     */
    function woodmart_get_product_rating($style = 'default', $precision = \null)
    {
    }
    /**
     * Get HTML for star rating.
     *
     * @param string $rating Rating.
     * @return mixed|void
     */
    function woodmart_get_star_rating_html($rating)
    {
    }
    /**
     * Get HTML for simple star rating.
     *
     * @param string $rating Rating.
     * @return mixed|void
     */
    function woodmart_get_simple_star_rating_html($rating)
    {
    }
    /**
     * Render reviews count when 'show_reviews_count' option is enabled.
     *
     * @return void
     */
    function woodmart_show_reviews_count()
    {
    }
    /**
     * Get compare page ID.
     *
     * @since 3.3
     */
    function woodmart_get_compare_page_url()
    {
    }
    /**
     * Get compare number.
     */
    function woodmart_get_compare_count()
    {
    }
    /**
     * Add to compare button on loop product.
     */
    function woodmart_add_to_compare_loop_btn()
    {
    }
    /**
     * The URL to add the product into the comparison table YITH.
     *
     * @param integer $product_id ID of the product to add.
     * @return string
     */
    function woodmart_compare_add_product_url($product_id)
    {
    }
    /**
     * All available fields for Theme Settings sorter option.
     *
     * @param bool $new New options.
     *
     * @return mixed
     */
    function woodmart_compare_available_fields()
    {
    }
    function woodmart_product_quantity($product)
    {
    }
    function woodmart_update_cart_item()
    {
    }
    function woodmart_quick_view($id = \false)
    {
    }
    function woodmart_product_images_slider()
    {
    }
    function woodmart_quick_view_btn($id = \false)
    {
    }
    function woodmart_maintenance_mode()
    {
    }
    function woodmart_stock_progress_bar()
    {
    }
    function woodmart_total_stock_quantity_input()
    {
    }
    function woodmart_save_total_stock_quantity($post_id)
    {
    }
    function woodmart_export_variation_gallery($value, $meta, $product, $row)
    {
    }
    function woodmart_importer_variation_gallery($data)
    {
    }
    function woodmart_avi_save_images($variation_id)
    {
    }
    function woodmart_avi_get_attachments_data($variation)
    {
    }
    function woodmart_avi_get_attachments($variation)
    {
    }
    function woodmart_avi_admin_html($loop, $variation_data, $variation)
    {
    }
    function woodmart_avi_update_available_variation($available_variation, $variation_object, $variation)
    {
    }
    function woodmart_avi_get_default_data($product_id)
    {
    }
    function woodmart_avi_get_image_data($attachment_id, $main_image = \false)
    {
    }
    function woodmart_catalog_mode_init()
    {
    }
    function woodmart_catalog_mode_pages_redirect()
    {
    }
    function woodmart_vg_admin_html($loop, $variation_data, $variation)
    {
    }
    function woodmart_save_vg_images($variation_id, $i)
    {
    }
    function woodmart_remove_unnecessary_vg_data($post_id)
    {
    }
    function woodmart_get_vg_data()
    {
    }
    function woodmart_get_default_vg_data($product_id)
    {
    }
    function woodmart_get_vg_image_data($attachment_id)
    {
    }
    function woodmart_single_product_vg_data()
    {
    }
    function woodmart_quick_view_vg_data($is_quick_view)
    {
    }
    function woodmart_360_metabox_output($post)
    {
    }
    function woodmart_proccess_360_view_metabox($post_id, $post)
    {
    }
    function woodmart_get_360_gallery_attachment_ids()
    {
    }
    function woodmart_product_360_view()
    {
    }
    /**
     * Status button template for Dynamic discounts post type.
     *
     * @var string $status Discount rule status.
     * @var int $post_id Dynamic discounts post id.
     * @package Woodmart
     */
    $classes = \null;
    function woodmart_swatches_metaboxes()
    {
    }
    function woodmart_product_attributes_thumbnail($columns)
    {
    }
    function woodmart_product_attributes_add_thumbnail_column($columns)
    {
    }
    function woodmart_product_attributes_thumbnail_column_content($content, $column_name, $term_id)
    {
    }
    function woodmart_has_swatches($id, $attr_name, $options, $available_variations, $swatches_use_variation_images = \false)
    {
    }
    function woodmart_has_swatch($id, $attr_name, $value)
    {
    }
    function woodmart_get_option_variations($attribute_name, $available_variations, $option = \false, $product_id = \false)
    {
    }
    function woodmart_swatches_list($attribute_name = \false)
    {
    }
    /**
     * Default swatches template.
     *
     * @param string $attribute_name Attribute name.
     * @param array  $available_variations Available variations data.
     * @return false|string
     */
    function woodmart_swatches_grid_template($attribute_name, $available_variations)
    {
    }
    /**
     * Product swatches template with variation form for product grid.
     *
     * @param array $available_variations Available variations data.
     * @return false|string
     */
    function woodmart_swatches_form_grid_template($available_variations)
    {
    }
    /**
     * Check have product swatches template.
     *
     * @return bool
     */
    function woodmart_have_product_swatches_template()
    {
    }
    function woodmart_clear_swatches_cache_save_post($post_id)
    {
    }
    function woodmart_clear_swatches_cache_on_product_object_save($data)
    {
    }
    function woodmart_get_active_variations($attribute_name, $available_variations)
    {
    }
    function woodmart_show_out_of_stock_variation_products()
    {
    }
    function woodmart_hide_out_of_stock_variation_products()
    {
    }
    /**
     * Get wishlist page url.
     *
     * @since 1.0
     *
     * @return string
     */
    function woodmart_get_wishlist_page_url()
    {
    }
    /**
     * Get wishlist count.
     *
     * @since 1.0
     *
     * @return integer
     */
    function woodmart_get_wishlist_count()
    {
    }
    /**
     * Set cookies.
     *
     * @since 1.0.0
     *
     * @param string $name Name.
     * @param string $value Value.
     */
    function woodmart_set_cookie($name, $value)
    {
    }
    /**
     * Get cookie.
     *
     * @since 1.0.0
     *
     * @param string $name Name.
     *
     * @return string
     */
    function woodmart_get_cookie($name)
    {
    }
    /**
     * Get wishlist groups user.
     *
     * @return array
     */
    function woodmart_get_wishlist_groups()
    {
    }
    /**
     * Get unsubscribe link by user ID.
     *
     * @param integer $user_id User ID.
     *
     * @return string
     */
    function woodmart_get_unsubscribe_link($user_id)
    {
    }
    /**
     * Check this email notification is enabled in woocommerce.
     *
     * @param string $option Name option.
     * @param string $default Default option value. If the $option is not saved in the database, then $default will be taken.
     *
     * @return bool
     */
    function woodmart_check_this_email_notification_is_enabled($option, $default = 'no')
    {
    }
    /**
     * This function save woocommerce attribute data after push 'update' button.
     *
     * @param mixed $attribute_id .
     * @param mixed $attribute .
     * @param mixed $old_attribute_name .
     */
    function woodmart_wc_attribute_update($attribute_id, $attribute, $old_attribute_name)
    {
    }
    /**
     * This function save woocommerce attribute data after push 'Add attribute' button.
     *
     * @param mixed $attribute_id .
     * @param mixed $attribute .
     */
    function woodmart_wc_attribute_add($attribute_id, $attribute)
    {
    }
    /**
     * Get attribute term.
     *
     * @param mixed $attribute_name .
     * @param mixed $term .
     * @return false|mixed|void
     */
    function woodmart_wc_get_attribute_term($attribute_name, $term, $default = \false)
    {
    }
    /**
     * Add product attribute labels options
     *
     * @since 1.0.0
     */
    function woodmart_render_product_attrs_admin_options()
    {
    }
    function woodmart_sguide_metaboxes($post)
    {
    }
    function woodmart_sguide_table_template($tables)
    {
    }
    function woodmart_sguide_table_save($post_id)
    {
    }
    function woodmart_sguide_dropdown_template($post)
    {
    }
    function woodmart_sguide_dropdown_save($post_id)
    {
    }
    function woodmart_sguide_display($post_id = \false, $args = array())
    {
    }
    function woodmart_sguide_display_table_template($sguide_post, $size_tables, $args = array())
    {
    }
    function woodmart_sguide_save_category($post_id)
    {
    }
    function woodmart_sguide_category_template($post)
    {
    }
    function woodmart_sguide_hide_table_template($post)
    {
    }
    function woodmart_sguide_hide_table_save($post_id)
    {
    }
    function woodmart_quick_shop($id = \false)
    {
    }
    function woodmart_quick_shop_wrapper()
    {
    }
    function woodmart_load_available_variations()
    {
    }
    function woodmart_product_brand()
    {
    }
    function woodmart_product_brands_links()
    {
    }
    function woodmart_product_brand_tab($tabs)
    {
    }
    function woodmart_product_brand_tab_content()
    {
    }
    /**
     * Set default Woocommerce shortcode for cart and checkout pages content.
     *
     * @param array $pages Woocommerce pages data.
     * @return array
     */
    function woodmart_woo_set_default_dummy_content($pages)
    {
    }
    /**
     * Clear shop per page cookie on settings save.
     */
    function woodmart_clear_shop_per_page_cookie()
    {
    }
    /**
     * Get active filter element width wrapper.
     */
    function woodmart_update_cart_fragments_fix()
    {
    }
    /**
     * Get active filter element width wrapper.
     */
    function woodmart_get_active_filters()
    {
    }
    /**
     * Add structured data to product page.
     *
     * @param  array $markup Markup.
     * @return array
     */
    function woodmart_add_brands_to_structured_data($markup)
    {
    }
    /**
     * AJAX variation threshold.
     *
     * @since 1.0.0
     *
     * @param integer $limit Limit.
     *
     * @return mixed
     */
    function woodmart_wc_ajax_variation_threshold($limit)
    {
    }
    /**
     * Woocommerce products shortcode compatibility.
     *
     * @since 1.0.0
     */
    function woodmart_wc_products_shortcode_compatibility()
    {
    }
    /**
     * Enqueue script.
     *
     * @since 1.0.0
     *
     * @param string $template_name Template_name.
     */
    function woodmart_product_price_slider_script($template_name)
    {
    }
    /**
     * Enqueue script.
     *
     * @since 1.0.0
     *
     * @param string $data Data.
     *
     * @return string
     */
    function woodmart_product_categories_widget_script($data)
    {
    }
    /**
     * Enqueue style for woo widgets.
     *
     * @since 1.0.0
     *
     * @param string $data Data.
     *
     * @return string
     */
    function woodmart_woo_widgets_select2($data)
    {
    }
    /**
     * Enqueue single product scripts.
     *
     * @since 1.0.0
     */
    function woodmart_single_product_add_to_cart_scripts()
    {
    }
    /**
     * Enqueue product loop.
     *
     * @since 1.0.0
     *
     * @param mixed $data Data.
     *
     * @return mixed
     */
    function woodmart_product_loop_add_to_cart_scripts($data)
    {
    }
    /**
     * Retrieves the previous product.
     *
     * @since 2.4.3
     *
     * @param bool         $in_same_term Optional. Whether post should be in a same taxonomy term. Default false.
     * @param array|string $excluded_terms Optional. Comma-separated list of excluded term IDs. Default empty.
     * @param string       $taxonomy Optional. Taxonomy, if $in_same_term is true. Default 'product_cat'.
     *
     * @return WC_Product|false Product object if successful. False if no valid product is found.
     */
    function woodmart_get_previous_product($in_same_term = \false, $excluded_terms = '', $taxonomy = 'product_cat')
    {
    }
    /**
     * Retrieves the next product.
     *
     * @since 2.4.3
     *
     * @param bool         $in_same_term Optional. Whether post should be in a same taxonomy term. Default false.
     * @param array|string $excluded_terms Optional. Comma-separated list of excluded term IDs. Default empty.
     * @param string       $taxonomy Optional. Taxonomy, if $in_same_term is true. Default 'product_cat'.
     *
     * @return WC_Product|false Product object if successful. False if no valid product is found.
     */
    function woodmart_get_next_product($in_same_term = \false, $excluded_terms = '', $taxonomy = 'product_cat')
    {
    }
    function woodmart_get_products_tab_ajax()
    {
    }
    function woodmart_get_shortcode_products_ajax()
    {
    }
    function woodmart_widget_get_current_page_url($link)
    {
    }
    function woodmart_get_filtered_price_new()
    {
    }
    function woodmart_woocommerce_main_loop($fragments = \false)
    {
    }
    function woodmart_shop_products_per_page()
    {
    }
    function woodmart_shop_page_link($keep_query = \false, $taxonomy = '')
    {
    }
    function woodmart_product_design()
    {
    }
    function woodmart_product_sticky()
    {
    }
    function woodmart_add_image_size()
    {
    }
    /**
     * Get all product thumbnails urls.
     *
     * @return array List of product thumbnails urls.
     * This array include all images from gallery and primary thumbnail image.
     */
    function woodmart_get_all_product_thumbnails_urls()
    {
    }
    /**
     * Pagination for thumbnails gallery on products loop.
     */
    function woodmart_get_thumbnails_gallery_pagin()
    {
    }
    /**
     * Render thumbnails gallery for products loop.
     */
    function woodmart_template_loop_product_thumbnails_gallery()
    {
    }
    function woodmart_template_loop_product_thumbnail()
    {
    }
    function woodmart_get_product_thumbnail($size = 'woocommerce_thumbnail', $attach_id = \false)
    {
    }
    function woodmart_grid_swatches_attribute()
    {
    }
    function woodmart_product_images_class()
    {
    }
    function woodmart_product_images_size()
    {
    }
    function woodmart_product_summary_class()
    {
    }
    function woodmart_product_summary_size()
    {
    }
    function woodmart_single_product_class()
    {
    }
    function woodmart_get_product_gallery_settings()
    {
    }
    function woodmart_get_widget_column_class($sidebar_id = 'filters-area')
    {
    }
    /**
     * This function just wrapper comments_template.
     */
    function woodmart_wc_comments_template()
    {
    }
    function woodmart_woocommerce_hooks()
    {
    }
    function woodmart_woocommerce_init_hooks()
    {
    }
    function woodmart_single_product_countdown($tabs)
    {
    }
    function woodmart_display_product_attributes()
    {
    }
    function woodmart_custom_product_tabs($tabs)
    {
    }
    function woodmart_additional_product_tab_content()
    {
    }
    function woodmart_additional_product_tab_2_content()
    {
    }
    function woodmart_additional_product_tab_3_content()
    {
    }
    function woodmart_custom_product_tab_content()
    {
    }
    function woodmart_custom_product_tab_content_2()
    {
    }
    /**
     * Remove reviews tab
     *
     * @since 1.0.0
     *
     * @param array $tabs Array of tabs.
     *
     * @return array
     */
    function woodmart_single_product_remove_additional_information_tab($tabs)
    {
    }
    /**
     * Remove reviews tab
     *
     * @since 1.0.0
     *
     * @param array $tabs Array of tabs.
     *
     * @return array
     */
    function woodmart_single_product_remove_reviews_tab($tabs)
    {
    }
    /**
     * Remove description tab
     *
     * @since 1.0.0
     *
     * @param array $tabs Array of tabs.
     *
     * @return array
     */
    function woodmart_single_product_remove_description_tab($tabs)
    {
    }
    function woodmart_filter_widgts_classes($count)
    {
    }
    function woodmart_set_customer_session()
    {
    }
    function woodmart_products_per_page_action()
    {
    }
    function woodmart_woo_products_per_page_action()
    {
    }
    function woodmart_get_products_per_page()
    {
    }
    function woodmart_new_get_products_per_page()
    {
    }
    function woodmart_woo_get_products_per_page()
    {
    }
    /**
     * Get per page.
     *
     * @param integer $request Product count in page.
     * @return integer
     */
    function woodmart_get_current_products_per_page($request)
    {
    }
    function woodmart_shop_view_action()
    {
    }
    function woodmart_woo_shop_view_action()
    {
    }
    function woodmart_get_products_columns_per_row()
    {
    }
    function woodmart_get_shop_view()
    {
    }
    function woodmart_new_get_products_columns_per_row($per_row = '', $is_builder_element = \false)
    {
    }
    function woodmart_new_get_shop_view($shop_view = '', $is_builder_element = \false)
    {
    }
    function woodmart_woo_get_products_columns_per_row()
    {
    }
    function woodmart_woo_get_shop_view()
    {
    }
    function woodmart_filter_product_categories_widget_args($list_args)
    {
    }
    function woodmart_ajax_add_to_cart()
    {
    }
    function woodmart_related_count()
    {
    }
    function woodmart_reset_loop()
    {
    }
    function woodmart_loop_prop($prop, $default = '')
    {
    }
    function woodmart_set_loop_prop($prop, $value = '')
    {
    }
    function woodmart_setup_loop($args = array())
    {
    }
    function woodmart_hide_outdated_templates_notice($value, $notice)
    {
    }
    /**
     * Change default `gallery_thumbnail` size values
     *
     * @since 1.0.0
     *
     * @return array
     */
    function woodmart_single_product_thumbnails_gallery_image_width()
    {
    }
    /**
     * This function added inline style for WooCommerce demo store option.
     * You can see it in Theme Customize when active Customizing ▸ WooCommerce ▸ Store Notice ▸ Enable store notice.
     *
     * @param string $content demo store content.
     * @return string
     */
    function woodmart_demo_storage_filter($content)
    {
    }
    /**
     * Track product views.
     */
    function woodmart_wc_track_product_view()
    {
    }
    /**
     * Update AJAX recently viewed products.
     *
     * @return void
     */
    function woodmart_get_recently_viewed_products()
    {
    }
    /**
     * Get availability option in stock status.
     *
     * @param array $availability Availability of the product.
     * @return array
     */
    function woodmart_get_availability_stock_status($availability)
    {
    }
    /**
     * Show SKU in email order.
     *
     * @param array $args Attributes.
     * @return array
     */
    function woodmart_show_sku_in_email($args)
    {
    }
    /**
     * Output extra content description.
     */
    function woodmart_get_extra_description_category()
    {
    }
    /**
     * Enqueue JS files for shop page with shop page display type category.
     *
     * @return void
     */
    function woodmart_enqueue_js_files_for_shop()
    {
    }
    /**
     * Get all product attributes.
     *
     * @return array
     */
    function woodmart_get_products_attributes()
    {
    }
    /**
     * Back convector bundle product price.
     *
     * @param float  $price Product price.
     * @param object $cart_item Product cart data.
     * @return mixed|string
     */
    function woodmart_woocs_convert_product_bundle_in_cart($price, $cart_item)
    {
    }
    /**
     * Converse shipping progress bar limit
     *
     * @param float $limit
     * @return float
     */
    function woodmart_woocs_shipping_progress_bar_amount($limit)
    {
    }
    /**
     * Convector bundle product price.
     *
     * @param float $price Product price.
     * @return mixed|string
     */
    function woodmart_woocs_convert_price($price)
    {
    }
    /**
     * Gutenberg disable svg.
     */
    function woodmart_gutenberg_disable_svg()
    {
    }
    /**
     * Gutenberg show widgets.
     *
     * @return array
     */
    function woodmart_gutenberg_show_widgets()
    {
    }
    /**
     * Gutenberg styles.
     *
     * @since 1.0.0
     */
    function woodmart_gutenberg_enqueue_editor_styles()
    {
    }
    /**
     * Gutenberg styles.
     *
     * @since 1.0.0
     */
    function woodmart_gutenberg_editor_styles()
    {
    }
    /**
     * Gutenberg styles.
     *
     * @since 1.0.0
     */
    function woodmart_gutenberg_editor_custom_styles()
    {
    }
    /**
     * Helper function to register a collection of required plugins.
     *
     * @since 2.0.0
     * @api
     *
     * @param array $plugins An array of plugin arrays.
     * @param array $config  Optional. An array of configuration values.
     */
    function tgmpa($plugins, $config = array())
    {
    }
    /**
     * Load bulk installer
     */
    function tgmpa_load_bulk_installer()
    {
    }
    function woodmart_get_whb_headers_array($get_from_options = \false, $new = \false)
    {
    }
    /**
     * Fix for pagination with PJAX.
     *
     * @param string $link Link.
     *
     * @return false|string
     */
    function woodmart_pjax_with_pagination_fix($link)
    {
    }
    function woodmart_is_css_encode($data)
    {
    }
    /**
     * Setup default header from theme settings
     *
     * @since 1.0.0
     */
    function woodmart_set_default_header()
    {
    }
    function woodmart_enqueue_gallery_script($html5)
    {
    }
    function woodmart_get_blog_shortcode_ajax()
    {
    }
    function woodmart_get_portfolio_shortcode_ajax()
    {
    }
    function woodmart_get_color_value($key, $default)
    {
    }
    function woodmart_get_css_animation($css_animation)
    {
    }
    function woodmart_get_user_panel_params()
    {
    }
    function woodmart_vc_get_link_attr($link)
    {
    }
    function woodmart_get_link_attributes($link, $popup = \false)
    {
    }
    /**
     * Autocomplete by taxonomies ids.
     *
     * @since 1.0.0
     *
     * @param array $ids Posts ids.
     *
     * @return array
     */
    function woodmart_get_taxonomies_by_ids_autocomplete($ids)
    {
    }
    /**
     * Autocomplete by taxonomies.
     *
     * @since 1.0.0
     */
    function woodmart_get_taxonomies_by_query_autocomplete()
    {
    }
    /**
     * Autocomplete by post ids.
     *
     * @since 1.0.0
     *
     * @param array $ids Posts ids.
     *
     * @return array
     */
    function woodmart_get_post_by_ids_autocomplete($ids)
    {
    }
    /**
     * Autocomplete by post.
     *
     * @since 1.0.0
     */
    function woodmart_get_post_by_query_autocomplete()
    {
    }
    /**
     * Get default theme settings value
     *
     * @since 1.0.0
     *
     * @param string $key Value key.
     *
     * @return string
     */
    function xts_get_default_value($key)
    {
    }
    function woodmart_product_attributes_array()
    {
    }
    /**
     * Get all pages array
     *
     * @since 1.0.0
     *
     * @return array
     */
    function woodmart_get_pages_array()
    {
    }
    function woodmart_body_class($classes)
    {
    }
    function woodmart_get_header_body_classes()
    {
    }
    function woodmart_wp_title($title, $sep)
    {
    }
    function woodmart_get_footer_config($index)
    {
    }
    \define('YITH_REFER_ID', '1040314');
    function woodmart_3d_plugins()
    {
    }
    function woodmart_vcSetAsTheme()
    {
    }
    function woodmart_get_the_ID($args = array())
    {
    }
    function woodmart_get_html_block($id)
    {
    }
    function woodmart_get_static_blocks_array($new = \false, $empty = \false)
    {
    }
    /**
     * Function to get array of HTML Blocks in theme settings array style.
     *
     * @return array
     */
    function woodmart_get_theme_settings_html_blocks_array()
    {
    }
    /**
     * Function to get array of HTML Blocks in WPB element array style.
     *
     * @return array
     */
    function woodmart_get_html_blocks_array_with_empty()
    {
    }
    /**
     * Function to get array of HTML Blocks.
     *
     * @return array
     */
    function woodmart_get_elementor_html_blocks_array()
    {
    }
    function woodmart_excerpt_length($length)
    {
    }
    function woodmart_new_excerpt_more($more)
    {
    }
    function woodmart_scroll_top_btn($more)
    {
    }
    function woodmart_get_related_posts_args($post_id)
    {
    }
    function woodmart_get_related_projects_args($post_id)
    {
    }
    function woodmart_load_html_dropdowns_action()
    {
    }
    function woodmart_strip_shortcode_gallery($content)
    {
    }
    function woodmart_excerpt_from_content($post_content, $limit, $shortcodes = '')
    {
    }
    function woodmart_get_projects_cats_array()
    {
    }
    function woodmart_get_menus_array($style = 'default')
    {
    }
    function woodmart_get_sidebars_array($new = \false)
    {
    }
    /**
     * Get sidebars array in theme settings array style.
     *
     * @return array
     */
    function woodmart_get_theme_settings_sidebars_array()
    {
    }
    function woodmart_pages_ids_from_template($name)
    {
    }
    function woodmart_get_svg_content($name)
    {
    }
    function woodmart_get_any_svg($file, $id = \false)
    {
    }
    function woodmart_get_gradient_attr($output, $obj, $attr)
    {
    }
    function woodmart_get_gradient_css($gradient_attr)
    {
    }
    /**
     * Retrieve available image sizes
     *
     * @since 1.0.0
     *
     * @return array
     */
    function woodmart_get_all_image_sizes()
    {
    }
    /**
     * This function return size array by size key.
     *
     * @param string $size_key enter 'thumbnail' if you want to get size thumbnail array.
     * @return array
     */
    function woodmart_get_image_dimensions_by_size_key($size_key)
    {
    }
    function woodmart_get_image_size($thumb_size)
    {
    }
    function woodmart_get_image_src($thumb_id, $thumb_size)
    {
    }
    function woodmart_append_hover_state($selectors, $focus = \false)
    {
    }
    function woodmart_twitter_process_links($tweet)
    {
    }
    function woodmart_owl_items_per_slide($slides_per_view, $hide = array(), $post_type = \false, $location = \false, $custom_sizes = \false)
    {
    }
    function woodmart_get_owl_items_numbers($slides_per_view, $post_type = \false, $custom_sizes = \false)
    {
    }
    function woodmart_get_grid_el_columns($columns)
    {
    }
    function woodmart_get_col_sizes($desktop_columns)
    {
    }
    function woodmart_get_grid_el_class_new($loop = 0, $different_sizes = \false, $desktop_columns = 3, $tablet_columns = 4, $mobile_columns = 1)
    {
    }
    function woodmart_get_grid_el_class($loop = 0, $columns = 4, $different_sizes = \false, $xs_size = \false, $sm_size = 4, $lg_size = 3, $md_size = \false)
    {
    }
    function woodmart_get_wide_items_array($different_sizes = \false)
    {
    }
    function woodmart_settings_js()
    {
    }
    function woodmart_get_header_classes()
    {
    }
    function woodmart_add_inline_script($key, $content, $position = 'after')
    {
    }
    function woodmart_responsive_text_size_css($id, $class, $data, $action = 'echo')
    {
    }
    /**
     * Function to set custom 404 page.
     *
     * @param $template
     *
     * @return mixed|string
     */
    function woodmart_custom_404_page($template)
    {
    }
    /**
     * Display cart widget side
     *
     * @since 1.0.0
     */
    function woodmart_android_browser_bar_color()
    {
    }
    function woodmart_settings_css()
    {
    }
    /**
     * Remove JQuery migrate.
     *
     * @param WP_Scripts $scripts wp script object.
     */
    function woodmart_remove_jquery_migrate($scripts)
    {
    }
    /**
     *
     * The framework's functions and definitions
     */
    \define('WOODMART_THEME_DIR', \get_template_directory_uri());
    \define('WOODMART_THEMEROOT', \get_template_directory());
    \define('WOODMART_IMAGES', \WOODMART_THEME_DIR . '/images');
    \define('WOODMART_SCRIPTS', \WOODMART_THEME_DIR . '/js');
    \define('WOODMART_STYLES', \WOODMART_THEME_DIR . '/css');
    \define('WOODMART_FRAMEWORK', '/inc');
    \define('WOODMART_DUMMY', \WOODMART_THEME_DIR . '/inc/dummy-content');
    \define('WOODMART_CLASSES', \WOODMART_THEMEROOT . '/inc/classes');
    \define('WOODMART_CONFIGS', \WOODMART_THEMEROOT . '/inc/configs');
    \define('WOODMART_HEADER_BUILDER', \WOODMART_THEME_DIR . '/inc/header-builder');
    \define('WOODMART_ASSETS', \WOODMART_THEME_DIR . '/inc/admin/assets');
    \define('WOODMART_ASSETS_IMAGES', \WOODMART_ASSETS . '/images');
    \define('WOODMART_API_URL', 'https://xtemos.com/wp-json/xts/v1/');
    \define('WOODMART_DEMO_URL', 'https://woodmart.xtemos.com/');
    \define('WOODMART_PLUGINS_URL', \WOODMART_DEMO_URL . 'plugins/');
    \define('WOODMART_DUMMY_URL', \WOODMART_DEMO_URL . 'dummy-content-new/');
    \define('WOODMART_TOOLTIP_URL', \WOODMART_DEMO_URL . 'theme-settings-tooltips/');
    \define('WOODMART_SLUG', 'woodmart');
    \define('WOODMART_CORE_VERSION', '1.0.40');
    \define('WOODMART_WPB_CSS_VERSION', '1.0.2');
    function woodmart_load_classes()
    {
    }
    \define('WOODMART_VERSION', \woodmart_get_theme_info('Version'));
}