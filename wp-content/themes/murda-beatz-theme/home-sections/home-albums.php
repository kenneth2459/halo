<section class="bk-albums padding-top-lg padding-bottom-lg">
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding-top-lg padding-bottom-lg">
				<h2 class="title-white-bk-transparent">
					Releases
				</h2>
			</div>
			<div class="col-lg-6">
				<?php query_posts('post_type=albums&posts_per_page=1') ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="text-center wow animate__animated animate__fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
						<?php the_post_thumbnail('full', array ( "class"=>"img-fluid" ) ); ?>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<?php query_posts('post_type=albums&posts_per_page=4&offset=1') ?>
					<?php $cont=0; ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php 
							$cont++ ; 
							if($cont>2){
								$margin = "margin-top-sm";
							}else{
								$margin = "";
							}
						?>
						<div class="col-lg-6">
							<div class="text-center <?php echo $margin; ?>">
								<?php the_post_thumbnail('full', array ( "class"=>"img-fluid" ) ); ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="col-lg-12 margin-top-lg margin-bottom-lg">
				<a href="" class="btn btn-link btn-yellow float-end hvr-sweep-to-top margin-top-lg uppercase">
					View All Releases
				</a>
			</div>
		</div>
	</div>
</section>