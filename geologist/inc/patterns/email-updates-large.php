<?php
/**
 * Email Updates (Large)
 *
 * @package Geologist
 */

return array(
	'title'      => __( 'Email Updates (Large)', 'geologist' ),
	'categories' => array( 'geologist' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:heading {"level":3} -->
	<h3>' . esc_html__( 'Our newsletter rocks! Sign up here to receive every post in your inbox.', 'geologist' ) . '</h3>
	<!-- /wp:heading -->

	<!-- wp:jetpack/subscriptions -->
	<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" custom_font_size="16px" custom_border_radius="0" custom_border_weight="1" custom_padding="15" custom_spacing="10" submit_button_classes="" email_field_classes="" show_only_email_and_button="true"]</div>
	<!-- /wp:jetpack/subscriptions -->',
);
