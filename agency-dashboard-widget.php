<?php
/**
 * Plugin Name: Agency Dashboard Widget
 * Description: Displays agency support information on the WordPress dashboard.
 * Version: 1.3
 * Author: Your Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_dashboard_setup', 'agency_register_dashboard_widget' );

function agency_register_dashboard_widget() {
	wp_add_dashboard_widget(
		'agency_support_widget',
		'🛠 Agency Support',
		'agency_dashboard_widget_content'
	);
}

function agency_dashboard_widget_content() {
	?>
	<div style="font-size:14px;line-height:1.7;">
		<p>
			<strong>Your support contract is active until 31st July 2026.</strong>
		</p>

		<p>
			Need assistance? We're here to help.
		</p>

		<p>
			📧 <strong>Email:</strong>
			<a href="mailto:support@agency.com">support@agency.com</a><br>

			💬 <strong>WhatsApp:</strong>
			<a href="https://wa.me/919999997777" target="_blank">
				+91 999 999 8888
			</a>
		</p>

		<hr>

		<p style="margin-bottom:0;color:#666;">
			Thank you for choosing our agency. We look forward to supporting your website.
		</p>
	</div>
	<?php
}
