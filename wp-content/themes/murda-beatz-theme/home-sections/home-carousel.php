<section class="bk-carousel padding-bottom-lg">
	<div class="container-fluid">
		<div class="row padding-bottom-lg">
			<div class="col-xxl-5 col-lg-6 align-self-end first">
				<h3 class="font-sedgwick h3-font-title-carousel">Check out on Splice</h3>
				<h1 class="title-carousel font-sen">
					Murda Beatz’ Quarantine Kit Sample Pack
				</h1>
				<div class="margin-top-lg">
					<a href="" class="btn btn-link btn-black font-sen uppercase hvr-outline-out">
						Listen now
					</a>
				</div>
			</div>
			<div class="col-xxl-4 col-lg-6">
				<?php query_posts('post_type=carousel&posts_per_page=-1') ?>
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
				  <div class="carousel-inner">
				  	<?php 
				  		$c=0;
						while (have_posts()): the_post(); 
						if($c==0){
							$active = 'active';
						} else{
							$active = '';
						}
						$c++;
					?>

				    <div class="carousel-item <?php echo $active; ?>">
				      <?php the_post_thumbnail('full', array('class'=>'img-fluid')); ?>
				    </div>
				    <?php endwhile; ?>
				    <?php wp_reset_query(); ?>
				  </div>
				</div>
			</div>
			<div class="col-xxl-2 col-lg-6 align-self-end">
				<a class="button-carousel" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
				    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
					  <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
					</svg>
				    <span class="visually-hidden">Previous</span>
				</a>
				<a class="button-carousel" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
				    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
					  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
					</svg>
				    <span class="visually-hidden">Next</span>
				</a>
			</div>
			<div class="col-xxl-1 col-lg-6 align-self-center">
				<ul class="social">
				<?php if ( get_theme_mod( 'url_facebook' ) ) : ?>
                    <li class="text-center"><a class="hvr-pulse" href="<?php echo get_theme_mod( "url_facebook" ); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <?php endif; ?>

                <!--Twitter Icon-->
                <?php if ( get_theme_mod( 'url_twitter' ) ) : ?>
                    <li class="text-center"><a class="hvr-pulse" href="<?php echo get_theme_mod( "url_twitter" ); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <?php endif; ?>
                
                <!--Youtube Icon-->
                <?php if ( get_theme_mod( 'url_song' ) ) : ?>
                    <li class="text-center"><a class="hvr-pulse" href="<?php echo get_theme_mod( "url_song" ); ?>"><i class="fa fa-music" aria-hidden="true"></i></a></li>
                <?php endif; ?>
                
                <!--Instagram Icon-->
                <?php if ( get_theme_mod( 'url_instagram' ) ) : ?>
                    <li class="text-center"><a class="hvr-pulse" href="<?php echo get_theme_mod( "url_instagram" ); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <?php endif; ?>

                <!--Instagram Icon-->
                <?php if ( get_theme_mod( 'url_personal_mail' ) ) : ?>
                    <li class="text-center"><a class="hvr-pulse" href="<?php echo get_theme_mod( "url_personal_mail" ); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                <?php endif; ?>

                <!--Instagram Icon-->
                <?php if ( get_theme_mod( 'url_spotify' ) ) : ?>
                    <li class="text-center"><a class="hvr-pulse" href="<?php echo get_theme_mod( "url_spotify" ); ?>"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>
                <?php endif; ?>
            	</ul>
			</div>
		</div>
	</div>
</section>