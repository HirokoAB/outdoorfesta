<?php  get_header();?>

<body>	
<header id="header">
	<div class="global-nabi-container container">
		<nav row>
			<ul col-xs-8>
				<li>ホーム</li>
				<li>ブログ一覧</li>
				<li>お問い合わせ</li>
			</ul>
		</nav>
	</div>
</header>
<main>
	<section id="main container-filled">
		<div class="header ">
			<h1>神割崎感謝祭 みなみさんりくアウトドアフェスタ</h1>
			<div>
				お天気のコンテンツ
			</div>	

		</div>
		<!-- メインのスライダーを入れる -->
		<div class="top_containts">
			<h1>event Photo<br>こんなことやります</h1>

		<div class="owl-carousel owl-theme owl-loaded">
		    <div class="owl-stage-outer">
		        <div class="owl-stage">
		            <div class="owl-item"><img src="<?php echo get_template_directory_uri(); ?>/img/sample_150.png" alt="" ></div>
		            <div class="owl-item"><img src="<?php echo get_template_directory_uri(); ?>/img/sample_150.png" alt="" ></div>
		            <div class="owl-item"><img src="<?php echo get_template_directory_uri(); ?>/img/sample_150.png" alt="" ></div>
		        </div>
		    </div>	
		    <div class="owl-dots">
		        <div class="owl-dot active"><span></span></div>
		        <div class="owl-dot"><span></span></div>
		        <div class="owl-dot"><span></span></div>
		    </div>
		</div>
			
			<div class="main-index">
			</div>
		</div>
	
		 <!-- こんなことやります　プログラムの案内 -->
		 <div id="program" class="">
		 	<h2>INFOMATION<br>毎日更新中</h2>
		 	
		 </div>



		<div class="infoomation_container">
			<div id="infomation">
				<?php get_template_part('single'); ?>
			</div>
		</div>
	</section>



</main>

</body>
<?php  get_footer();?>