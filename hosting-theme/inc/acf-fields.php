<?php
/**
 * ACF Field Groups registered programmatically.
 *
 * Two field groups:
 *   1. "Hosting Plan Details" — attached to the hosting_plan post type.
 *   2. "Theme Settings"       — attached to the ACF Options page.
 *
 * All text fields include instructions for Polylang translators.
 * Requires Advanced Custom Fields PRO (for repeater + options page).
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register ACF field groups once ACF is loaded.
 */
function hosting_theme_register_acf_fields() {

	// Bail early if ACF is not active.
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	/*
	|--------------------------------------------------------------------------
	| Field Group 1: Hosting Plan Details
	|--------------------------------------------------------------------------
	|
	| Attached to the hosting_plan custom post type.
	| Provides all pricing, resource, and feature data for a single plan.
	|
	*/
	acf_add_local_field_group( array(
		'key'      => 'group_hosting_plan_details',
		'title'    => __( 'Hosting Plan Details', 'hosting-theme' ),
		'fields'   => array(

			/*
			 * ── Basic Info Tab ──────────────────────────────
			 */
			array(
				'key'   => 'field_plan_tab_basic',
				'label' => __( 'Basic Info', 'hosting-theme' ),
				'name'  => '',
				'type'  => 'tab',
				'placement' => 'top',
			),
			array(
				'key'          => 'field_plan_name',
				'label'        => __( 'Plan Name', 'hosting-theme' ),
				'name'         => 'plan_name',
				'type'         => 'text',
				'required'     => 1,
				'instructions' => __( 'Display name of the plan (e.g. "Starter Cloud"). Translatable via Polylang.', 'hosting-theme' ),
				'placeholder'  => 'Starter Cloud',
			),
			array(
				'key'          => 'field_plan_description',
				'label'        => __( 'Plan Description', 'hosting-theme' ),
				'name'         => 'plan_description',
				'type'         => 'textarea',
				'instructions' => __( 'Short tagline shown below the plan name. Translatable via Polylang.', 'hosting-theme' ),
				'placeholder'  => 'Ideal for beginner/personal websites',
				'rows'         => 2,
				'new_lines'    => 'br',
			),
			array(
				'key'          => 'field_is_popular',
				'label'        => __( 'Most Popular?', 'hosting-theme' ),
				'name'         => 'is_popular',
				'type'         => 'true_false',
				'instructions' => __( 'Enable to show the "Most Popular" badge on this plan card.', 'hosting-theme' ),
				'default_value' => 0,
				'ui'           => 1,
			),

			/*
			 * ── Pricing Tab ────────────────────────────────
			 */
			array(
				'key'   => 'field_plan_tab_pricing',
				'label' => __( 'Pricing', 'hosting-theme' ),
				'name'  => '',
				'type'  => 'tab',
				'placement' => 'top',
			),
			array(
				'key'          => 'field_price_bdt',
				'label'        => __( 'Price (BDT / month)', 'hosting-theme' ),
				'name'         => 'price_bdt',
				'type'         => 'number',
				'required'     => 1,
				'instructions' => __( 'Monthly price in Bangladeshi Taka. This is the primary currency.', 'hosting-theme' ),
				'min'          => 0,
				'step'         => 0.01,
				'placeholder'  => '250',
			),
			array(
				'key'          => 'field_price_usd',
				'label'        => __( 'Price (USD / month)', 'hosting-theme' ),
				'name'         => 'price_usd',
				'type'         => 'number',
				'required'     => 0,
				'instructions' => __( 'Monthly price in US Dollars. Leave empty to auto-calculate from BDT using the exchange rate in Theme Settings.', 'hosting-theme' ),
				'min'          => 0,
				'step'         => 0.01,
				'placeholder'  => '2.24',
			),
			array(
				'key'          => 'field_price_original_bdt',
				'label'        => __( 'Original Price (BDT / month)', 'hosting-theme' ),
				'name'         => 'price_original_bdt',
				'type'         => 'number',
				'required'     => 0,
				'instructions' => __( 'Strikethrough "was" price in BDT. Leave empty to hide.', 'hosting-theme' ),
				'min'          => 0,
				'step'         => 0.01,
				'placeholder'  => '980',
			),
			array(
				'key'          => 'field_price_original_usd',
				'label'        => __( 'Original Price (USD / month)', 'hosting-theme' ),
				'name'         => 'price_original_usd',
				'type'         => 'number',
				'required'     => 0,
				'instructions' => __( 'Strikethrough "was" price in USD. Leave empty to auto-calculate.', 'hosting-theme' ),
				'min'          => 0,
				'step'         => 0.01,
				'placeholder'  => '8.95',
			),
			array(
				'key'          => 'field_discount_badge',
				'label'        => __( 'Discount Badge Text', 'hosting-theme' ),
				'name'         => 'discount_badge',
				'type'         => 'text',
				'instructions' => __( 'e.g. "Save 75%". Translatable via Polylang.', 'hosting-theme' ),
				'placeholder'  => 'Save 75%',
			),

			/*
			 * ── Resources Tab ──────────────────────────────
			 */
			array(
				'key'   => 'field_plan_tab_resources',
				'label' => __( 'Resources', 'hosting-theme' ),
				'name'  => '',
				'type'  => 'tab',
				'placement' => 'top',
			),
			array(
				'key'          => 'field_storage',
				'label'        => __( 'Storage', 'hosting-theme' ),
				'name'         => 'storage',
				'type'         => 'text',
				'instructions' => __( 'e.g. "25GB NVMe RAID 1 (US)" or "Unlimited".', 'hosting-theme' ),
				'placeholder'  => '25GB NVMe RAID 1 (US)',
			),
			array(
				'key'          => 'field_bandwidth',
				'label'        => __( 'Bandwidth', 'hosting-theme' ),
				'name'         => 'bandwidth',
				'type'         => 'text',
				'instructions' => __( 'e.g. "Unlimited" or "500GB".', 'hosting-theme' ),
				'placeholder'  => 'Unlimited',
			),
			array(
				'key'          => 'field_ram',
				'label'        => __( 'RAM', 'hosting-theme' ),
				'name'         => 'ram',
				'type'         => 'text',
				'instructions' => __( 'e.g. "1 GB", "2 GB".', 'hosting-theme' ),
				'placeholder'  => '1 GB',
			),
			array(
				'key'          => 'field_cpu_cores',
				'label'        => __( 'CPU Cores', 'hosting-theme' ),
				'name'         => 'cpu_cores',
				'type'         => 'text',
				'instructions' => __( 'e.g. "1", "2", "4".', 'hosting-theme' ),
				'placeholder'  => '1',
			),
			array(
				'key'          => 'field_websites_allowed',
				'label'        => __( 'Websites Allowed', 'hosting-theme' ),
				'name'         => 'websites_allowed',
				'type'         => 'text',
				'instructions' => __( 'e.g. "1", "7", "Unlimited".', 'hosting-theme' ),
				'placeholder'  => '1',
			),
			array(
				'key'          => 'field_visits_monthly',
				'label'        => __( 'Monthly Visits', 'hosting-theme' ),
				'name'         => 'visits_monthly',
				'type'         => 'text',
				'instructions' => __( 'e.g. "~10,000", "~50,000".', 'hosting-theme' ),
				'placeholder'  => '~10,000',
			),
			array(
				'key'          => 'field_databases',
				'label'        => __( 'Databases', 'hosting-theme' ),
				'name'         => 'databases',
				'type'         => 'text',
				'instructions' => __( 'e.g. "Unlimited" or "10".', 'hosting-theme' ),
				'placeholder'  => 'Unlimited',
			),
			array(
				'key'          => 'field_email_accounts',
				'label'        => __( 'Email Accounts', 'hosting-theme' ),
				'name'         => 'email_accounts',
				'type'         => 'text',
				'instructions' => __( 'e.g. "Unlimited" or "5".', 'hosting-theme' ),
				'placeholder'  => 'Unlimited',
			),
			array(
				'key'          => 'field_inodes',
				'label'        => __( 'Inodes (File Limit)', 'hosting-theme' ),
				'name'         => 'inodes',
				'type'         => 'text',
				'instructions' => __( 'e.g. "250,000", "500,000".', 'hosting-theme' ),
				'placeholder'  => '250,000',
			),
			array(
				'key'          => 'field_free_domain',
				'label'        => __( 'Free Domain Included?', 'hosting-theme' ),
				'name'         => 'free_domain',
				'type'         => 'text',
				'instructions' => __( 'e.g. "24 or 36 month term" or leave empty for none.', 'hosting-theme' ),
				'placeholder'  => '',
			),

			/*
			 * ── Features Tab (repeater) ────────────────────
			 */
			array(
				'key'   => 'field_plan_tab_features',
				'label' => __( 'Features', 'hosting-theme' ),
				'name'  => '',
				'type'  => 'tab',
				'placement' => 'top',
			),
			array(
				'key'          => 'field_features',
				'label'        => __( 'Feature List', 'hosting-theme' ),
				'name'         => 'features',
				'type'         => 'repeater',
				'instructions' => __( 'Add the feature lines shown on the pricing card. Translatable via Polylang.', 'hosting-theme' ),
				'min'          => 0,
				'max'          => 0,
				'layout'       => 'table',
				'button_label' => __( 'Add Feature', 'hosting-theme' ),
				'sub_fields'   => array(
					array(
						'key'          => 'field_feature_item',
						'label'        => __( 'Feature Text', 'hosting-theme' ),
						'name'         => 'feature_item',
						'type'         => 'text',
						'required'     => 1,
						'instructions' => '',
						'placeholder'  => 'FREE cPanel',
						'wrapper'      => array( 'width' => '70' ),
					),
					array(
						'key'          => 'field_is_available',
						'label'        => __( 'Available?', 'hosting-theme' ),
						'name'         => 'is_available',
						'type'         => 'true_false',
						'instructions' => '',
						'default_value' => 1,
						'ui'           => 1,
						'wrapper'      => array( 'width' => '30' ),
					),
				),
			),

			/*
			 * ── Order Link Tab ─────────────────────────────
			 */
			array(
				'key'   => 'field_plan_tab_order',
				'label' => __( 'Order Link', 'hosting-theme' ),
				'name'  => '',
				'type'  => 'tab',
				'placement' => 'top',
			),
			array(
				'key'          => 'field_order_url',
				'label'        => __( 'Order Button URL', 'hosting-theme' ),
				'name'         => 'order_url',
				'type'         => 'url',
				'instructions' => __( 'Link for the "Order Now" button. e.g. WHMCS cart URL.', 'hosting-theme' ),
				'placeholder'  => 'https://hostorio.com/cart/',
			),
			array(
				'key'          => 'field_order_button_text',
				'label'        => __( 'Order Button Label', 'hosting-theme' ),
				'name'         => 'order_button_text',
				'type'         => 'text',
				'instructions' => __( 'Defaults to "Order Now". Translatable via Polylang.', 'hosting-theme' ),
				'default_value' => 'Order Now',
				'placeholder'  => 'Order Now',
			),

		),
		'location'  => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'hosting_plan',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	) );

	/*
	|--------------------------------------------------------------------------
	| Field Group 2: Theme Settings (Options Page)
	|--------------------------------------------------------------------------
	|
	| Global settings used across the site: exchange rate, company info,
	| contact details, and social media links.
	|
	*/
	acf_add_local_field_group( array(
		'key'    => 'group_theme_settings',
		'title'  => __( 'Theme Settings', 'hosting-theme' ),
		'fields' => array(

			/*
			 * ── Currency & Pricing ─────────────────────────
			 */
			array(
				'key'   => 'field_settings_tab_currency',
				'label' => __( 'Currency & Pricing', 'hosting-theme' ),
				'name'  => '',
				'type'  => 'tab',
				'placement' => 'left',
			),
			array(
				'key'          => 'field_exchange_rate',
				'label'        => __( 'BDT → USD Exchange Rate', 'hosting-theme' ),
				'name'         => 'exchange_rate',
				'type'         => 'number',
				'instructions' => __( 'Used to auto-calculate USD prices when the USD field is empty. e.g. 0.0091 means 1 BDT = 0.0091 USD.', 'hosting-theme' ),
				'default_value' => 0.0091,
				'min'          => 0,
				'step'         => 0.0001,
				'placeholder'  => '0.0091',
			),
			array(
				'key'          => 'field_default_currency',
				'label'        => __( 'Default Currency', 'hosting-theme' ),
				'name'         => 'default_currency',
				'type'         => 'select',
				'instructions' => __( 'Currency shown by default on page load.', 'hosting-theme' ),
				'choices'      => array(
					'BDT' => 'BDT (৳)',
					'USD' => 'USD ($)',
				),
				'default_value' => 'BDT',
			),

			/*
			 * ── Company Info ───────────────────────────────
			 */
			array(
				'key'   => 'field_settings_tab_company',
				'label' => __( 'Company Info', 'hosting-theme' ),
				'name'  => '',
				'type'  => 'tab',
				'placement' => 'left',
			),
			array(
				'key'          => 'field_company_name',
				'label'        => __( 'Company Name', 'hosting-theme' ),
				'name'         => 'company_name',
				'type'         => 'text',
				'instructions' => __( 'Shown in the footer and copyright. Translatable via Polylang.', 'hosting-theme' ),
				'default_value' => 'Hostorio',
				'placeholder'  => 'Hostorio',
			),
			array(
				'key'          => 'field_company_description',
				'label'        => __( 'Company Description', 'hosting-theme' ),
				'name'         => 'company_description',
				'type'         => 'textarea',
				'instructions' => __( 'Short paragraph for the footer "About" column. Translatable via Polylang.', 'hosting-theme' ),
				'default_value' => 'Hostorio is a popular web hosting services provider. Hostorio provides Shared Hosting, Business Hosting, Reseller Hosting, VPS, and domain Registration-Transfer services.',
				'rows'         => 3,
			),

			/*
			 * ── Contact Info ───────────────────────────────
			 */
			array(
				'key'   => 'field_settings_tab_contact',
				'label' => __( 'Contact Info', 'hosting-theme' ),
				'name'  => '',
				'type'  => 'tab',
				'placement' => 'left',
			),
			array(
				'key'          => 'field_contact_email',
				'label'        => __( 'Contact Email', 'hosting-theme' ),
				'name'         => 'contact_email',
				'type'         => 'email',
				'instructions' => __( 'Primary email shown in footer and contact sections.', 'hosting-theme' ),
				'default_value' => 'mail@hostorio.com',
				'placeholder'  => 'mail@hostorio.com',
			),
			array(
				'key'          => 'field_contact_phone',
				'label'        => __( 'Contact Phone', 'hosting-theme' ),
				'name'         => 'contact_phone',
				'type'         => 'text',
				'instructions' => __( 'Primary phone number shown in the top bar and footer.', 'hosting-theme' ),
				'default_value' => '+8801779440297',
				'placeholder'  => '+8801779440297',
			),
			array(
				'key'          => 'field_address_line_1',
				'label'        => __( 'Address Line 1', 'hosting-theme' ),
				'name'         => 'address_line_1',
				'type'         => 'text',
				'default_value' => 'Kanchan, Rupganj, Narayanganj',
			),
			array(
				'key'          => 'field_address_line_2',
				'label'        => __( 'Address Line 2', 'hosting-theme' ),
				'name'         => 'address_line_2',
				'type'         => 'text',
				'default_value' => 'H-161, OABDA SOROK MATHBARIA',
			),

			/*
			 * ── Social Media ───────────────────────────────
			 */
			array(
				'key'   => 'field_settings_tab_social',
				'label' => __( 'Social Media', 'hosting-theme' ),
				'name'  => '',
				'type'  => 'tab',
				'placement' => 'left',
			),
			array(
				'key'          => 'field_social_facebook',
				'label'        => __( 'Facebook URL', 'hosting-theme' ),
				'name'         => 'social_facebook',
				'type'         => 'url',
				'placeholder'  => 'https://facebook.com/hostorio',
			),
			array(
				'key'          => 'field_social_twitter',
				'label'        => __( 'Twitter / X URL', 'hosting-theme' ),
				'name'         => 'social_twitter',
				'type'         => 'url',
				'placeholder'  => 'https://twitter.com/hostorio',
			),
			array(
				'key'          => 'field_social_youtube',
				'label'        => __( 'YouTube URL', 'hosting-theme' ),
				'name'         => 'social_youtube',
				'type'         => 'url',
				'placeholder'  => 'https://youtube.com/@hostorio',
			),
			array(
				'key'          => 'field_social_linkedin',
				'label'        => __( 'LinkedIn URL', 'hosting-theme' ),
				'name'         => 'social_linkedin',
				'type'         => 'url',
				'placeholder'  => 'https://linkedin.com/company/hostorio',
			),

		),
		'location'  => array(
			array(
				array(
					'param'    => 'options_page',
					'operator' => '==',
					'value'    => 'theme-settings',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	) );
}
add_action( 'acf/init', 'hosting_theme_register_acf_fields' );
