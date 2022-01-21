<section class="bk-tour padding-top-lg padding-bottom-lg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 padding-top-lg padding-bottom-lg">
				<h2 class="title-tour">
					Tour
				</h2>
			</div>
		</div>
		<div class="row">
			<?php query_posts('post_type=tour&posts_per_page=6') ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					$tour_date = get_post_meta(get_the_ID(), 'Tour_Date', TRUE);
					$tour_state = get_post_meta(get_the_ID(), 'Tour_state', TRUE);
					$tour_tickets = get_post_meta(get_the_ID(), 'Tour_tickets', TRUE);
					$tour_vip = get_post_meta(get_the_ID(), 'Tour_VIP', TRUE);
					$tour_rsvp = get_post_meta(get_the_ID(), 'Tour_RSVP', TRUE);
				?>
				<div class="col-lg-6 margin-top-lg margin-bottom-lg">
					<div class="border-bottom padding-bottom-lg">
						<div class="row">
							<div class="col-md-6 col-12">
								<div class="font-sedgwick font-white tour-date"><?php echo $tour_date; ?></div>
								<h3 class="title-individual-tour font-white"><?php the_title(); ?></h3>
								<div class="font-white font-sen margin-top-sm"><?php echo $tour_state; ?></div>
							</div>
							<div class="col-md-6 col-12 align-self-center">
								<div class="row">
									<div class="col-4">
										<div class="text-center">
											<a class="font-yellow" href="<?php echo $tour_tickets ?>">Tickets</a>
										</div>
									</div>
									<div class="col-4 align-self-center">
										<div class="text-center">
											<a class="font-yellow" href="<?php echo $tour_vip ?>">Vip</a>
										</div>
									</div>
									<div class="col-4 align-self-center">
										<div class="text-center">
											<a class="font-yellow" href="<?php echo $tour_rsvp ?>">Rsvp</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<div class="col-lg-12 margin-top-lg margin-bottom-lg">
				<a href="" class="btn btn-link btn-yellow float-end hvr-sweep-to-top margin-top-lg uppercase">
					View All Dates
				</a>
			</div>
		</div>
	</div>
</section>