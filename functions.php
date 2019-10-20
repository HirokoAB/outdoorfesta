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
?>