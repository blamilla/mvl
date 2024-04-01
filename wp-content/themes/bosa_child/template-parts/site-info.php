<?php
/**
 * Template part for displaying site info
 *
 * @package Bosa
 */

?>

<div class="site-info">
	<?php 
		echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'bosa' ) ) );
	?>
		<script>document.write(new Date().getFullYear())</script>
	<?php
		printf( esc_html__( ' MVL Consulting SRL' ) );
	?>	
</div><!-- .site-info -->