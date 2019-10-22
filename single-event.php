<?php get_header(); ?>

<article style="padding-top: 100px">
	<div class="container">
		<div class="row"_>
			<div class="col-8 main-con margin-auto">
				<?php if(have_posts()): the_post(); ?>
					<div class="article-upper" style="height: auto;">
						<div class="article_img">
		                	<?php the_post_thumbnail(''); ?>
		              	</div>
		              	<div class= "post_title " style="color:black;">
		              		<!--タイトルを取得-->
		                    <h1><?php the_title(); ?></h1>
		                    <!--投稿日を取得-->
		                    <span class="post-date">
		                        <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time>
		                    </span>
		                </div>

		                <!-- 本文取得 -->
		              	<div class="post-content">
							<?php the_content(); ?>
		              	</div>

		        <?php endif;?>

		        		<div class="nav-below margin-auto">
			              <span class="pre_text" >
			                <?php previous_post_link('%link','< 前へ'); ?>
			              </span>
			              <span class="next_text">  
			                    <?php next_post_link('%link','次へ >'); ?>
			              </span>
			          	</div>
			         </div>

			         <aside>
			         	<div class="article-lower">			         
						    <div class="list-btn">
			            	<a href="<?php echo home_url(); ?>">TOPへ</a>
			          		</div>
			          	</div>
			         	
			         </aside>
				</div>
			</div>
		</div>
	</div>

</article>

<?php get_footer(); ?>