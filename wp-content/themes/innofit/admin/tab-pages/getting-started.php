<?php
/**
 * Getting started template
 */
?>

<div id="getting_started" class="innofit-tab-pane active">

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="innofit-info-title text-center"><?php echo esc_html__('Innofit theme Configuration','innofit'); ?><?php if( !empty($innofit['Version']) ): ?> <sup id="innofit-theme-version"><?php echo esc_html( $innofit['Version'] ); ?> </sup><?php endif; ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">

				<div class="innofit-page">
				<div class="innofit-page-top"><?php esc_html_e( 'Links to Customizer Settings', 'innofit' ); ?></div>
				<div class="innofit-page-content">
					<ul class="innofit-page-list-flex">
						<li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=title_tagline' ) ); ?>" target="_blank"><?php esc_html_e('Site Logo','innofit'); ?></a>
						</li>
						<li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=layout_settings' ) ); ?>" target="_blank"><?php esc_html_e('Layout','innofit'); ?></a>
						</li>
						<li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=colors_back_settings' ) ); ?>" target="_blank"><?php esc_html_e('Colors / Background','innofit'); ?></a>
						</li>
						 <li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=widgets' ) ); ?>" target="_blank"><?php esc_html_e('Footer Widgets','innofit'); ?></a>
						</li>

						<li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=section_settings' ) ); ?>" target="_blank"><?php esc_html_e('Homepage Sections','innofit'); ?></a>
						</li>

					<?php

					include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
					if ( function_exists( 'innofitp_activate' ) ):

					?>

						<li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=theme_style' ) ); ?>" target="_blank"><?php esc_html_e('Theme Color Schemes','innofit'); ?></a>
						</li>

						<li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=innofit_typography_setting' ) ); ?>" target="_blank"><?php esc_html_e('Typography','innofit'); ?></a>
						</li>

						<li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=frontpage_layout' ) ); ?>" target="_blank"><?php esc_html_e('Homepage Section Ordering','innofit'); ?></a>
						</li>


				<?php endif; ?>

					</ul>
				</div>
				</div>

			</div>
			<div class="col-md-6">

			    <div class="innofit-page">
				<?php
					$innofit_actions = $this->recommended_actions;
					$innofit_actions_todo = get_option( 'recommended_actions', false );
				?>

				<div class="action-list">
					<?php if($innofit_actions): foreach ($innofit_actions as $key => $val): ?>
					<div class="action" id="<?php echo esc_attr($val['id']); ?>">
						<div class="action-watch">
						<?php if(!$val['is_done']): ?>
							<?php if(!isset($innofit_actions_todo[$val['id']]) || !$innofit_actions_todo[$val['id']]): ?>
								<span class="dashicons dashicons-visibility"></span>
							<?php else: ?>
								<span class="dashicons dashicons-hidden"></span>
							<?php endif; ?>
						<?php else: ?>
							<span class="dashicons dashicons-yes"></span>
						<?php endif; ?>
						</div>
						<div class="action-inner">
							<h4 class="action-title"><?php echo esc_html($val['title']); ?></h4>
							<div class="action-desc"><?php echo esc_html($val['desc']); ?></div>
							<?php echo wp_kses_post($val['link']); ?>
						</div>
					</div>
					<?php endforeach; endif; ?>
				</div>


				</div>

			</div>
		</div>

		<div class="row">

			<div class="col-md-6">

				<div class="innofit-page">
				<div class="innofit-page-top"><?php esc_html_e( 'Additional features in premium add-on (Innofit Plus)
', 'innofit' ); ?></div>
				<div class="innofit-page-content">
					<ul class="innofit-page-list-flex">
						<li>
							<?php echo esc_html__('Unlimited slides','innofit'); ?>
						</li>
						<li>
							<?php echo esc_html__('Video slider','innofit'); ?>
						</li>

						<li>
							<?php echo esc_html__('Box layout support','innofit'); ?>
						</li>
						<li>
							<?php echo esc_html__('3 Types of footer layout','innofit'); ?>
						</li>
						<li>
							<?php echo esc_html__('Portfolio section','innofit'); ?>
						</li>
						<li>
							<?php echo esc_html__('Funfact section','innofit'); ?>
						</li>

						<li>
							<?php echo esc_html__('Pricing section','innofit'); ?>
						</li>

						<li>
							<?php echo esc_html__('Google Map section','innofit'); ?>
						</li>
						<li>
							<?php echo esc_html__('Client section','innofit'); ?>
						</li>
						<li>
							<?php echo esc_html__('Instagram Gallery section','innofit'); ?>
						</li>
						<li>
							<?php echo esc_html__('3 Blog Templates','innofit'); ?>
						</li>
						<li>
							<?php echo esc_html__('Typography','innofit'); ?>
						</li>

						<li>
							<?php echo esc_html__('WPML Support','innofit'); ?>
						</li>

						<li>
							<?php echo esc_html__('Mulitple Color Schemes','innofit'); ?>
						</li>

						<li>
							<?php echo esc_html__('Drag and drop section orders','innofit'); ?>
						</li>

						<li>
							<?php echo esc_html__('Team section with carousel effect','innofit'); ?>
						</li>

						<li>
							<?php echo esc_html__('Shop section with unlimited items','innofit'); ?>
						</li>
						<li>
							<?php echo esc_html__('Shop section with carousel effect','innofit'); ?>
						</li>
						<li>
							<?php echo esc_html__('Testimonial section with carousel effect','innofit'); ?>
						</li>
						<li>
							<?php echo esc_html__('Homepage Sections Before / After Hooks','innofit'); ?>
						</li>

						<li>
							<?php echo esc_html__('Latest news section with unlimited number of articles','innofit'); ?>
						</li>
						<li>
							<?php echo esc_html__('Latest news section with carousel effect','innofit'); ?>
						</li>

					</ul>
				</div>
				</div>

			</div>

			<div class="col-md-6">

				<div class="innofit-page">
				<div class="innofit-page-top"><?php esc_html_e( 'Useful Links', 'innofit' ); ?></div>
				<div class="innofit-page-content">
					<ul class="innofit-page-list-flex">
						<li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url('https://demo.spicethemes.com/?theme=Innofit'); ?>" target="_blank"><?php echo esc_html__('Innofit Demo','innofit'); ?></a>
						</li>
						<li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url('https://demo.spicethemes.com/?theme=Innofit%20Pro'); ?>" target="_blank"><?php echo esc_html__('Innofit Plus Demo','innofit'); ?></a>
						</li>

						<li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url('https://wordpress.org/support/theme/innofit'); ?>" target="_blank"><?php echo esc_html__('Innofit Theme Support','innofit'); ?></a>
						</li>

						 <li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url('https://support.spicethemes.com/index.php?p=/categories/innofit'); ?>" target="_blank"><?php echo esc_html__('Innofit Plus Support','innofit'); ?></a>
						</li>

					    <li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url('https://wordpress.org/support/view/theme-reviews/innofit'); ?>" target="_blank"><?php echo esc_html__('Your feedback is valuable to us','innofit'); ?></a>
						</li>

						<li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/innofit-plus/'); ?>" target="_blank"><?php echo esc_html__('Innofit Plus Details','innofit'); ?></a>
						</li>

						<li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url('https://helpdoc.spicethemes.com/category/innofit/'); ?>" target="_blank"><?php echo esc_html__('Innofit Documentation','innofit'); ?></a>
						</li>

						<li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url('https://helpdoc.spicethemes.com/category/innofit-plus/'); ?>" target="_blank"><?php echo esc_html__('Innofit Plus Documentation','innofit'); ?></a>
						</li>

					    <li>
							<a class="innofit-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/contact/'); ?>" target="_blank"><?php echo esc_html__('Pre-sales enquiry','innofit'); ?></a>
						</li>

					</ul>
				</div>
				</div>

			</div>

		</div>

	</div>
</div>
