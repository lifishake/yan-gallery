<?php

/**
 * Plugin Name: 恹相册
 * Description: 现有的相册功能都太高大全了，只挑出一些有用的功能自娱自乐。\n1.gallery目录下根据目录分组\n2.后台上传图片\n3.编辑时插入\n4.page页显示\n5.对指定目录上传时生成缩略图附件
 * Version: 0.0.1
 * Author URI:  http://pewae.com
 * GitHub Plugin URI: https://github.com/lifishake/yan-gallery
 * Author: lifishake
 * Plugin URI: https://github.com/lifishake/yan-gallery
 * License:     GNU General Public License 3.0+
 */


define('YANGLY_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define('YANGLY_PLUGIN_DIR', plugin_dir_path( __FILE__ ) ) ;

register_activation_hook( __FILE__, 'yangly_plugin_activation' );
register_deactivation_hook( __FILE__,'yangly_plugin_deactivation' );

function yangly_plugin_activation() {
    global $wpdb;
    $wpdb->yanpics = $wpdb->prefix . 'yangly_pictures';
    $sql = "";
    $sql = "aaaa";
    $sql = "bbbb";
    $uu = get_bloginfo('blog_name');
}

function yangly_plugin_deactivation() {
    global $wpdb;
    global $wp_filesystem;
    //$wp_dir = trailingslashit($wp_filesystem->abspath());
    $sql = "";
    $sql = "abcdef";
    $sql = "zzzz";
}

add_action('plugins_loaded', 'yangly_init', 99);

function yangly_init() {
    global $wpdb;
    global $wp_filesystem;
    //$wp_dir = trailingslashit($wp_filesystem->abspath());
    $aaa = "1234";
    $aaa = "5678";
    //add_action( 'admin_enqueue_scripts', 'yangly_admin_scripts' );
}

/*配置画面*/
if (is_admin())
{
    require_once( YANGLY_PLUGIN_DIR . '/options.php');
}
