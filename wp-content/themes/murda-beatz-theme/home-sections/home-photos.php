<section class="bk-photo padding-top-lg padding-bottom-lg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 padding-top-lg padding-bottom-lg">
				<h2 class="title-photo">
					Photos
				</h2>
			</div>
		</div>
		<div class="row">
			<?php 
				$args = array(
					'post_type' => 'page',
					'post__in' => array( 46),
				);
				$query = new WP_Query( $args );

			?>
			<div class="col-lg-12">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
			<div class="col-lg-12 margin-top-lg margin-bottom-lg">
				<a href="" class="btn btn-link btn-yellow float-end hvr-sweep-to-top margin-top-lg uppercase">
					View all the photos
				</a>
			</div>
		</div>
	</div>
</section>