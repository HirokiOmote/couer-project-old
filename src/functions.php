<?php

//不要なタグを削除
remove_action( 'wp_head', 'feed_links', 2 ); //サイト全体のフィード
remove_action( 'wp_head', 'feed_links_extra', 3 ); //その他のフィード
remove_action( 'wp_head', 'rsd_link' ); //Really Simple Discoveryリンク
remove_action( 'wp_head', 'wlwmanifest_link' ); //Windows Live Writerリンク
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); //前後の記事リンク
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); //ショートリンク
remove_action( 'wp_head', 'rel_canonical' ); //canonical属性
remove_action( 'wp_head', 'wp_generator' ); //WPバージョン

//CSSとjavascriptのバージョン表示を削除
function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );

function cc_mime_types ( $mimes )  {
  $mimes [ 'svg' ]  =  'image/svg+xml' ;
  return $mimes ;
}
function fix_svg_thumb_display() {
  echo '
      td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail {
      width: 100% !important;
      height: auto !important;
    }
  ';
}
add_filter ( 'upload_mimes' , 'cc_mime_types' );

remove_filter ( 'the_content', 'wpautop' );
remove_filter ( 'the_excerpt', 'wpautop' );
add_filter('tiny_mce_before_init', function($init) {
	$init['wpautop'] = false;
	$init['apply_source_formatting'] = ture;
	return $init;
});


// メディアを挿入の初期表示を「この投稿へのアップロード」にする
function media_uploader_default_view() {
    echo '<script type="text/javascript">jQuery(function( $ ){ ';
    echo 'wp.media.view.Modal.prototype.on( \'ready\', function( ){ $( \'select.attachment-filters\' ).find( \'[value="uploaded"]\').attr( \'selected\', true ).parent().trigger(\'change\'); });';
    echo '});</script>'."\n";
}
add_action( 'admin_footer-post-new.php', 'media_uploader_default_view' );
add_action( 'admin_footer-post.php', 'media_uploader_default_view' );

// サムネイル画像
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 180, 180 );
add_image_size( 'media_thumbnail_5column', 143, 143 );
add_image_size( 'media_thumbnail_8column', 216, 216 );
add_image_size( 'archive_main', 1200, 675 );
add_filter('jpeg_quality', create_function('$arg','return 100;'));

function is_mobile() {
	$useragents = array(
		'iPhone',          // iPhone
		'iPod',            // iPod touch
		'Android',         // 1.5+ Android
		'dream',           // Pre 1.5 Android
		'CUPCAKE',         // 1.5+ Android
		'blackberry9500',  // Storm
		'blackberry9530',  // Storm
		'blackberry9520',  // Storm v2
		'blackberry9550',  // Storm v2
		'blackberry9800',  // Torch
		'webOS',           // Palm Pre Experimental
		'incognito',       // Other iPhone browser
		'webmate'          // Other iPhone browser
	);
	$pattern = '/'.implode('|', $useragents).'/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

if (!is_admin()) {
	function register_style() {
		wp_register_style('style', get_stylesheet_directory_uri().'/style.css');
	}

  function add_stylesheet() {
      register_style();
      wp_enqueue_style('style');
  }

	function register_script(){
		wp_register_script('GoogleMap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAVduOE9gHIuvnRCT0zus53tT-HXR-Sn98', null, null, true);
		wp_register_script('main', get_stylesheet_directory_uri() . '/js/main.js', array(), '', true);
	}

	function add_script() {
		register_script();
		wp_enqueue_script('GoogleMap');
    wp_enqueue_script('main');
  }

	add_action('wp_print_styles', 'add_stylesheet');
	add_action('wp_print_scripts', 'add_script');
}

if ( function_exists('register_sidebar') ) {
  register_sidebar( array(
   'name' => 'ブログサイドバー',
   'id' => 'sidebar',
   'description' => 'トップページのウィジットエリアです。',
   'before_widget' => '<section id="%1$s" class="widget %2$s">',
   'after_widget' => '</section>',
   'before_title' => '<h3 id="%1$s" class="widget %2$s">',
   'after_title' => '</h3>',
  ) );
}

function wp_pagination() {
	global $wp_query;
	$big = 99999999;
	$page_format = paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'type'  => 'array'
	) );
	if( is_array($page_format) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<ul>';
		foreach ( $page_format as $page ) {
    		echo "<li>$page</li>";
		}
			echo '</ul>';
	}
	wp_reset_query();
}

function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyAVduOE9gHIuvnRCT0zus53tT-HXR-Sn98');
}
add_action('acf/init', 'my_acf_init');

//Custom Post
function works() {
	$labels = array(
		'name' => 'Works',
		'singular_name' => 'プロジェクト',
		'add_new_item' => 'プロジェクトを追加',
		'add_new' => 'プロジェクトを追加',
		'new_item' => 'プロジェクト',
		'view_item' => 'プロジェクト一覧を表示',
		'not_found' => 'プロジェクトは見つかりませんでした',
		'not_found_in_trash' => 'プロジェクトはありません。',
		'search_items' => 'プロジェクトを検索'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => 5,
		'slug' => 'works',
		'supports' => array('title', 'editor', 'thumbnail')
	);
	register_post_type('works', $args);
	flush_rewrite_rules( false );
}
add_action('init', 'works');

function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
	if ( is_home() ) {
		$query->set( 'posts_per_page', '5' );
	}
	if ( $query->is_page('works') ) {
		$query->set( 'post_type', 'works' );
        $query->set( 'posts_per_page', '49' );
    }
    if ( $query->is_post_type_archive( array('works') ) ) {
        $query->set( 'posts_per_page', '49' );
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

function meta_title() {
	global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
}
