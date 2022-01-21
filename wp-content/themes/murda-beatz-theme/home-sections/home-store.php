<section class="bk-store padding-top-lg padding-bottom-lg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 padding-top-lg padding-bottom-lg">
				<h2 class="title-store">
					Store
				</h2>
			</div>
			<?php query_posts('post_type=store&posts_per_page=3') ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php $store_price = get_post_meta(get_the_ID(), 'Store_Price', TRUE); ?>
				<div class="col-lg-4 hvr-float-shadow">
					<?php the_post_thumbnail('full', array ( "class"=>"img-fluid" ) ); ?>
					<h3 class="title-store-product margin-top-md"><?php the_title(); ?></h3>
					<p class="font-sedgwick price"><?php echo $store_price; ?></p>
				</div>
			<?php endwhile ?>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="margin-top-lg">
					<a href="" class="btn btn-link btn-black font-sen uppercase hvr-outline-out float-end">
						Shop all
					</a>
				</div>
			</div>
		</div>
	</div>
</section>