<!DOCTYPE html>
<html lang="ja">
<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index_style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>戸倉ネイチャーパーク PHP</title>

</head>
<body>
	<main>
		<section>
			<div class="cover_img"></div>
			<div class="video_wrappar">
			
				<div class="map_container">
						<div  type="image/svg+xml" class="map map_base">
							<img class="" src="<?php echo get_template_directory_uri(); ?>/img/map_base.svg" usemap="#tgitem" alt="" />
						</div>
						<div  type="image/svg+xml" class="map main_title">
							<img src="<?php echo get_template_directory_uri(); ?>/img/map_title.svg">	
						</div>
						<div  type="image/svg+xml" class="map sub_title">
							<img class=""src="<?php echo get_template_directory_uri(); ?>/img/map_sub_title.svg">	
						</div>
						
						<div  type="image/svg+xml"  class="map map_base">
						<div class="map_content ">
						<div  type="image/svg+xml" class="map index ">
							<img class="" src="<?php echo get_template_directory_uri(); ?>/img/map_index.svg">
						</div>
						<div  type="image/svg+xml" class="map label vertical">
							<img class="horizontal" src="<?php echo get_template_directory_uri(); ?>/img/map_label.svg">
						</div>
						<div  type="image/svg+xml" class="map label_sec vertical_sec">
							<img class="holizontal_sec"src="<?php echo get_template_directory_uri(); ?>/img/map_lavel_2.svg">S
						</div>
						<div  type="image/svg+xml"  class="map item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/map_overitem.svg" usemap="#tgitem" alt="ネイチャーパークスッポット名">
						</div>
						<div  type="image/svg+xml" style="z-index:96;"class="map item icon">
							<img  class="item_dwn"src="<?php echo get_template_directory_uri(); ?>/img/map_overitem_dwn.svg" usemap="#tgitem" alt="ネイチャーパークスッポット名">
						</div>
						<div  type="image/svg+xml" style="z-index:97;"class="map item icon">
							<img class="item_up"src="<?php echo get_template_directory_uri(); ?>/img/map_overitem_up.svg" usemap="#tgitem" alt="ネイチャーパークスッポット名">
						</div>
						<div  class="map item icon " style="z-index:97;">
							<img class="item_up_2"src="<?php echo get_template_directory_uri(); ?>/img/map_overitem_up_2.svg" usemap="#tgitem" alt="ネイチャーパークスッポット名">
						</div>
						
						<div  type="image/svg+xml" class="map keybox" id="">
							<img class="key" src="<?php echo get_template_directory_uri(); ?>/img/map_keybox.svg" usemap="#tgitem" alt="" />
							<img class="guide flash" src="<?php echo get_template_directory_uri(); ?>/img/guide_2.svg" alt="">
						</div>	
						<div  type="image/svg+xml" class="map eagle shake">
							<img  src="<?php echo get_template_directory_uri(); ?>/img/map_eagle.svg">
						</div>
						<div  type="image/svg+xml" class="map compass">
							<img class="" src="<?php echo get_template_directory_uri(); ?>/img/map_compass.svg">
						</div>

					<map name="tgitem">
					  <area onFocus="this.blur();" shape="rect" coords="64,70,78,86" href="https://www.tamipack.jp/" alt="たみ子の海パックホームページへ遷移" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="50,92,85,108" href="#" alt="釣り体験" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="91,108,121,134" href="https://o-eels.org/" alt="おきなくらイールズホームページへ遷移" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="143,90,179,100" href="#" alt="漁業体験" target="__blank" />
					  <area onFocus="this.blur();" shape="rect" coords="142,66,167,79" href="https://m-inuwashi.jp/" alt="南三陸町ネイチャーセンターホームページへ遷移" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="124,38,148,55" href="http://studio-elephant.com/flow/" alt="波伝の森山学校ホームページへ遷移" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="105,71,134,81" href="http://kawatouminovisitorcenter.jp/umi/index.html" alt="海のビジターセンターホームページへ遷移" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="24,67,52,82" href="神割キャンプ場ホームページへ遷移" alt="神割キャンプ場ホームページへ遷移" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="87,59,115,71" href="https://www.pref.miyagi.jp/soshiki/sz-seinen/" alt="志津川自然の家ホームページへ遷移" target="_blank" />
					  <area onFocus="this.blur();" shape="rect" coords="3,104,52,148" href="<?php echo get_permalink( HOME );?> "alt="" target="_blank"/>
					</map>
					</div>
			
      <!-- <video src="<?php echo get_template_directory_uri(); ?>/img/bk_sky5.mp4"  autoplay muted loop playsinline ></video> -->

			</div>
		</div>
	</section>

	</main>
	<aside>


	</aside>












<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.rwdImageMaps.min.js"></script>
<script>
        $('img[usemap]').rwdImageMaps();
</script>

</body>

