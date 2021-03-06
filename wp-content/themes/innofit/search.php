<?php 
/**
 * Archive page template
 */
get_header();  
innofit_breadcrumbs(); ?>
<!-- Blog & Sidebar Section -->
<section class="site-content">
	<div class="container<?php echo esc_html(innofit_blog_post_container());?>">
		<div class="row">	
			<!--Blog Section-->
			<div class="col-md-<?php echo ( !is_active_sidebar( 'sidebar-1' ) ? '12' :'8' ); ?> col-sm-12 col-xs-12">
				<div class="blog" id="content">
					<?php 
					if ( have_posts() ) :
						// Start the Loop.
						while ( have_posts() ) : the_post();
							// Include the post format-specific template for the content.
							get_template_part( 'content','');
						endwhile;
						
						// Previous/next page navigation.
						the_posts_pagination( array(
							'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
							'next_text'          => '<i class="fa fa-angle-double-right"></i>'
						) );
						
					else : ?>
					<article class="post">	
						<div class="post-content">
							<h2><?php esc_html_e('Nothing Found', 'innofit'); ?></h2>
							<p><?php esc_html_e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.','innofit'); ?></p>
						</div>
					</article>
					<?php endif; ?>
				</div>	
			</div>
			<!--/Blog Section-->
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<!-- /Blog & Sidebar Section -->

<?php get_footer(); ?>