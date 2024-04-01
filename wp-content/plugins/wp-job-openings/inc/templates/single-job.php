<?php
/**
 * Template for displaying single job listing
 *
 * This template can be overridden by copying it to currenttheme/wp-job-openings/single-job.php
 *
 * @package wp-job-openings
 * @version 1.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

/**
 * before_awsm_jobs_main_content hook
 *
 * @since 1.1
 */
do_action( 'before_awsm_jobs_main_content' );

?>
	<div class="awsm-job-main awsm-job-single-content">		
		<div class="awsm-job-container">
			<a class="flecha-volver" href="/empleos" style="font-size: 35px;color: #2342ac;">
				<i class="fa fa-long-arrow-alt-left"></i>
			</a>

			<?php
				/**
				 * before_awsm_jobs_single_loop hook
				 *
				 * Fires before The Loop to query for single job listing
				 *
				 * @since 1.1
				 */
				do_action( 'before_awsm_jobs_single_loop' );

			while ( have_posts() ) {
				the_post();

				/**
				 * before_awsm_jobs_single_content hook
				 *
				 * @hooked awsm_jobs_single_title
				 * @hooked awsm_jobs_single_featured_image
				 *
				 * @since 1.1
				 */
				do_action( 'before_awsm_jobs_single_content' );

				the_content();

				/**
				 * after_awsm_jobs_single_content hook
				 *
				 * @since 1.1
				 */
				do_action( 'after_awsm_jobs_single_content' );
			}

				/**
				 * after_awsm_jobs_single_loop hook
				 *
				 * Fires after The Loop
				 *
				 * @since 1.1
				 */
				do_action( 'after_awsm_jobs_single_loop' );
			?>			
			
			<div style="width: 100%; text-align: center;">
				<a class="btn-volver" style="border-radius: 24px 24px 24px 24px;font-family: 'Open Sans', Sans-serif; font-size: 16px; font-weight: 600; text-transform: capitalize; color: #FFFFFF;background-color: #838687;padding: 12px 30px 12px 30px;display: inline-block;text-align: center;  overflow: hidden;transition: all .4s;" href="/empleos">
					Volver
				</a>
			</div>

			<style type="text/css">
				.flecha-volver:hover {
					color: #838687 !important;
				}
				.btn-volver:hover {
					background-color: #2C75BA !important;
				}
			</style>
			
		</div>
	</div>
<?php
/**
 * after_awsm_jobs_main_content hook
 *
 * @since 1.1
 */
do_action( 'after_awsm_jobs_main_content' );

get_footer();
