<?php
/**
 * Template Name: Blog Full Width
 */
get_header();
innofit_breadcrumbs();
?>
<!-- Blog & Sidebar Section -->
<section class="site-content">
	<div class="container<?php echo esc_html(innofit_blog_post_container());?>">
		<div class="row">
			<!--Blog Posts-->
			<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="blog" id="content">
			<?php 
			if ( ! function_exists( 'innofitp_activate' ) ){
				do_action('innofit_blog_template_hook');
				}	

			else{
				if(get_theme_mod('post_nav_style_setting','pagination')=='pagination')
		          {
		            $pagedno = (get_query_var('paged')) ? get_query_var('paged') : 1;
		            $args = array( 'post_type' => 'post','paged'=>$pagedno);
		            $loop = new WP_Query( $args );
		            if ( $loop->have_posts() ) :
		              // Start the Loop.
		              while ( $loop->have_posts() ) : $loop->the_post();
		                // Include the post format-specific template for the content.
		                include(INNOFITP_PLUGIN_DIR.'/inc/functions/template-parts/content.php');

		              endwhile;
		              
		              // pagination function
		              $obj = new innofit_pagination();
		              $obj->innofit_page($loop);
		            endif;
		          }else{
		            echo do_shortcode('[ajax_posts]');
		          }
			}?>
			</div>
			</div>
			<!--/Blog Posts-->
		</div>			
	</div>
</section>
<!--/End of Blog & Sidebar Section-->
<?php get_footer(); ?>