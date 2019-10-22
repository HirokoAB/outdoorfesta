<?php  

/**

* Bootstrapのスクリプトとスタイルをエンキュー

*/

// JSファイルのエンキュー
	function my_scripts() {
  	wp_enqueue_script( 'app.js', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), '1.4.1', true );

  	
}
	add_action( 'wp_enqueue_scripts', 'my_scripts' );


   add_theme_support('post-thumbnails');
   



	function my_bootstrap_style() {

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/lib/bootstrap-4.3.1-dist/css/bootstrap.min.css');

	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/lib/bootstrap-4.3.1-dist/js/bootstrap.min.js', array(), '1.0.0', true );

}

	add_action( 'wp_enqueue_scripts', 'my_bootstrap_style' );


//スライダーcssとjsを読み込み
	function my_owl_scripts() {

	wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/lib/assets/css/owl.carousel.css');

	wp_enqueue_style( 'owl.theme.default.css', get_template_directory_uri() . '/lib/assets/css/owl.theme.default.css');

	wp_enqueue_script( 'jquery.min.js', get_template_directory_uri() . '/lib/assets/js/jquery.min.js');


	wp_enqueue_script( 'owl.carousel.js', get_template_directory_uri() . '/lib/assets/js/owl.carousel.js');

	wp_enqueue_script( 'owl.app.js', get_template_directory_uri() . '/lib/assets/js/app.js');



}

	add_action( 'wp_enqueue_scripts' , 'my_owl_scripts' );

//カウントダウンの読み込み
	function my_countdown_scripts() {

	wp_enqueue_script( 'yycountdown.min.js', get_template_directory_uri() . '/lib/yycountdown/js/jquery.yycountdown.min.js');
	wp_enqueue_script( 'app.js', get_template_directory_uri() . '/js/app.js' );
}
	add_action( 'wp_enqueue_scripts' , 'my_countdown_scripts' );


// CSSファイルのエンキュー

	function my_styles() {
  	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/css/style.css', array(), '1.0.3' );
}
	add_action( 'wp_enqueue_scripts', 'my_styles' );


//抜粋の削除
function new_excerpt_more($more){
    global $post;
    return '';
}
add_filter('excerpt_more','new_excerpt_more',9999);
//抜粋の文字数の指定
function custom_excerpt_length( $length ) {
     return 110; 
}       
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// カスタム投稿タイプの追加
add_action( 'init', 'create_post_type' );

function create_post_type() {
register_post_type( 'event', // 投稿タイプ名の定義
array(
'labels' => array(
'name' => __( 'イベント' ), // 表示する投稿タイプ名
'singular_name' => __( 'イベント' )
),
'supports' => array( 'title', 'editor', 'thumbnail' ),
'public' => true,
'menu_position' =>5,
)
);
}






























?>