<?php 
/**
 * The main template file
 */
get_header();
innofit_breadcrumbs();
?>
<!-- Blog & Sidebar Section -->
<section class="site-content">
	<div class="container<?php echo innofit_single_post_container();?>">
		<div class="row">	
			<!--Blog Section-->
			<div class="col-md-<?php echo ( !is_active_sidebar( 'sidebar-1' ) ? '12' :'8' ); ?> col-sm-12 col-xs-12">
				<div class="blog" id="content">
					<?php 
					// Start the Loop.
					while ( have_posts() ) : the_post();
						// Include the page
						get_template_part( 'template-parts/content','single');

						if(get_theme_mod('innofit_enable_single_post_admin_details',true)===true):?>
						<article class="blog-author media">
							<figure class="avatar">
								<?php echo get_avatar( get_the_author_meta( 'ID') , 120); ?>
							</figure>
							<div class="media-body">
							<h5 class="name"> <?php the_author(); ?> <span> <?php $innofit_user = new WP_User( get_the_author_meta( 'ID' ) ); echo esc_html($innofit_user->roles[0]);?> </span></h5>
							<p><?php the_author_meta( 'description' ); //the_author_description(); ?> </p>
							</div>						   
						</article>
							<?php 
						endif;
						
							comments_template( '', true ); // show comments 
						
					endwhile;
					?>
				</div>
			</div>	
			<!--/Blog Section-->
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<!-- /Blog & Sidebar Section -->
<!--/End of Blog & Sidebar Section-->
<?php get_footer(); ?>