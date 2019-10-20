<?php  get_header();?>

<body>	
<header id="header">
			<ul class="">
				<li>ホーム</li>
				<li>お問い合わせ</li>
			</ul>
			<div id="toggle"class="js-hamburger hamburger"><span></span>
			</div>
</header>

<main>
<section>
	<div class="page">	
	<div class="img_box">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.svg" alt="">
			<div id="timer"></div>	
	</div>
	
	<!-- メインのスライダーを入れる -->
	<div class="content container">
		<div class="row">

			<p><h1>Event Photo<br>こんなことやります</h1></p>

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
		

		 <!-- こんなことやります　プログラムの案内 -->
		 <div id="program" class="">
		 	<p><h2>INFOMATION<br>毎日更新中</h2></p>
		 </div>



		<div class="container">
				<?php get_template_part('loop' , 'blog'); ?>
		</div>
		</div>
		</div>
	</div>
</section>



</main>

</body>
<?php  get_footer();?>