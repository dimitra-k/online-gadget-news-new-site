<?php

/**
* Homepage Template
* Template Name: Homepage
*
*/

get_header(); ?>

<?php


///build the queries
//1)popular

$args = array(
		'post_type'=>'post',
		'posts_per_page'=>'5',
		'meta_key'=>'post_views_count',
		'order'=>'DESC'	,
		'orderby' => 'meta_value_num'
		);	
			
$populars_query = new WP_Query($args);

wp_reset_query();
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
			<div class="images-header">
				<div class="row header-row first">
					<div class="col-xs-12 header-col">
					<?php 
						query_posts('posts_per_page=1&cat=2');
						while (have_posts()) : the_post();
							 if(has_post_thumbnail()): ?> 
							<div class="image"><a href="<?php echo the_permalink(); ?>"><?php echo the_post_thumbnail('large'); ?></a></div>
							<?php endif; ?>
							<div class="title"><?php echo the_title(); ?> </div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
				<div class="row header-row second">
					<div class="col-xs-5 header-col">
						<?php 
						query_posts('posts_per_page=1&cat=7');
						while (have_posts()) : the_post();
							 if(has_post_thumbnail()): ?> 
							<div class="image"><a href="<?php echo the_permalink(); ?>"><?php echo the_post_thumbnail('large'); ?></a></div>
							<?php endif; ?>
							<div class="title"><?php echo the_title(); ?> </div>
						<?php endwhile;	?>		
						<?php wp_reset_query(); ?>				
						<?php wp_reset_postdata(); ?>
					</div>
					<div class="col-xs-3 header-col">
						<?php 
						query_posts('posts_per_page=1&cat=5');
						while (have_posts()) : the_post();
							 if(has_post_thumbnail()): ?> 
							<div class="image"><a href="<?php echo the_permalink(); ?>"><?php echo the_post_thumbnail('large'); ?></a></div>
							<?php endif; ?>
							<div class="title"><?php echo the_title(); ?> </div>
						<?php endwhile;	?>
						<?php wp_reset_query(); ?>					
						<?php wp_reset_postdata(); ?>
					</div>
					<div class="col-xs-4 header-col">
						<?php 
						query_posts('posts_per_page=1&cat=6');
						while (have_posts()) : the_post();
							 if(has_post_thumbnail()): ?> 
							<div class="image"><a href="<?php echo the_permalink(); ?>"><?php echo the_post_thumbnail('large'); ?></a></div>
							<?php endif; ?>
							<div class="title"><?php echo the_title(); ?> </div>
						<?php endwhile;	?>
						<?php wp_reset_query(); ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
				<div class="row header-row third">
					<div class="col-xs-6 header-col">
						<?php 
							query_posts('posts_per_page=1&cat=4');
							while (have_posts()) : the_post();
								 if(has_post_thumbnail()): ?> 
								<div class="image"><a href="<?php echo the_permalink(); ?>"><?php echo the_post_thumbnail('large'); ?></a></div>
								<?php endif; ?>
								<div class="title"><?php echo the_title(); ?> </div>
							<?php endwhile;	?>
							<?php wp_reset_query(); ?>
							<?php wp_reset_postdata(); ?>
					</div>
					<div class="col-xs-6 header-col">
						<?php 
						query_posts('posts_per_page=1&cat=3');
						while (have_posts()) : the_post();
							 if(has_post_thumbnail()): ?> 
							<div class="image"><a href="<?php echo the_permalink(); ?>"><?php echo the_post_thumbnail('large'); ?></a></div>
							<?php endif; ?>
							<div class="title"><?php echo the_title(); ?> </div>
						<?php endwhile;	?>
						<?php wp_reset_query(); ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
				<div class="row posts-row">
					<div class="col-sm-9 post-col">
						<ul class="post-menu" role="tablist">
							<li class="active"><a href="#recent" aria-controls="recent" role="tab" data-toggle="tab">recent posts</a></li>
							<li><a href="#most-popular" aria-controls="most-popular" role="tab" data-toggle="tab">most popular</a></li>
						</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="recent">
							<?php query_posts('posts_per_page=5&paged');
							while(have_posts()) :
							the_post(); ?>
								<div class="row recent-single-post">
								<?php if(has_post_thumbnail()): ?>
									<div class="col-sm-4 recent-img"><div class="img-container"><a href="<?php echo the_permalink(); ?>"><?php echo the_post_thumbnail('large'); ?></a></div>
								<?php endif; ?>
								</div>
									<div class="col-sm-8 recent-info">
										<a class="post-title" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>								
										<p><?php echo exc_excerpt(20); ?><a href="<?php echo the_permalink(); ?>">read more</a></p>										
									</div>
								</div>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>							
							<?php wp_reset_postdata(); ?>
							
						</div>
						<div class="tab-pane" id="most-popular">
							<div class="row recent-single-post">
								<?php
									while($populars_query->have_posts()) :
									$populars_query->the_post(); ?>
								<div class="col-sm-4 recent-img">
									<?php if(has_post_thumbnail()): ?>
									<div class="image"><a href="<?php echo the_permalink(); ?>"><?php echo the_post_thumbnail('large'); ?></a></div>
									<?php endif; ?>
									</div>
									<div class="col-sm-8 recent-info">
										<a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
										<p><?php echo exc_excerpt(20); ?></p>										
									</div>
								
								<?php endwhile; ?>
								<?php wp_reset_query(); ?>
								<?php wp_reset_postdata(); ?>
								
							</div>
						</div>					
					 </div>
	
					</div>
					<div class="col-sm-3 sidebar-col">
						<div class="ads"><?php if (!dynamic_sidebar('Ad2 Widget Area')) :?> <?php endif;?></div>
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
				</div>
				
				<div class="ads bottom-ad"><?php if (!dynamic_sidebar('Ad3 Widget Area')) :?> <?php endif;?></div>
				
			</div>
		
				
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
