<?php 
/**
 * The main template file
 */
get_header();
innofit_breadcrumbs();
?>
<!-- Blog & Sidebar Section -->
<section class="site-content page-default">
	<div class="container<?php echo esc_html(innofit_container());?>">
		<div class="row" id="content">	
			<!--Blog Section-->
			<?php if ( class_exists( 'WooCommerce' ) ) {
					
					if( is_account_page() || is_cart() || is_checkout() ) {
							echo '<div class=" blog col-md-'.( !is_active_sidebar( "woocommerce" ) ?"12" :"8" ).' col-xs-12">'; 
					}
					else{ 
				
					echo '<div class=" blog col-md-'.( !is_active_sidebar( "sidebar-1" ) ?"12" :"8" ).' col-xs-12">'; 
					
					}
					
				}
				else{ 
				
					echo '<div class=" blog col-md-'.( !is_active_sidebar( "sidebar-1" ) ?"12" :"8" ).' col-xs-12">';
					
					}
					?>
				<?php
				if ( class_exists( 'WooCommerce' ) ) {
					
					if( is_account_page() || is_cart() || is_checkout() ) {
						
					while ( have_posts() ) : the_post();
					// Include the page
					get_template_part( 'content','page' );
					
					comments_template( '', true ); // show comments
					
					endwhile;	
				
				} 
				else
				{
					while ( have_posts() ) : the_post();
					// Include the page
					get_template_part( 'content','page' );
					
					comments_template( '', true ); // show comments
					
					
				endwhile;
					
				}
				
				}
				else 
				{
					while ( have_posts() ) : the_post();
					// Include the page
					get_template_part( 'content','page' );
					
					comments_template( '', true ); // show comments 
					
					
				endwhile;
				}
				
				// Start the Loop.
				?>
			</div>	
			<!--/Blog Section-->
			<?php if ( class_exists( 'WooCommerce' ) ) {
					
					if( is_account_page() || is_cart() || is_checkout() ) {
							get_sidebar('woocommerce'); 
					}
					else{ 
				
					get_sidebar(); 
					
					}
					
				}
					else{ 
				
					get_sidebar(); 
					
					}?>
		</div>
	</div>
</section>
<!-- /Blog & Sidebar Section -->

<?php get_footer(); ?>