<?php
/**
 * Hostorio Admin Settings Page
 * Currency rates and translations management.
 *
 * @package Hostorio
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* ───────────────────────────────────────────
   Register settings page
   ─────────────────────────────────────────── */
add_action( 'admin_menu', 'hostorio_admin_menu' );
function hostorio_admin_menu() {
    add_theme_page(
        __( 'Hostorio Settings', 'hostorio' ),
        __( 'Hostorio Settings', 'hostorio' ),
        'manage_options',
        'hostorio-settings',
        'hostorio_settings_page'
    );
}

/* ───────────────────────────────────────────
   Register settings
   ─────────────────────────────────────────── */
add_action( 'admin_init', 'hostorio_register_settings' );
function hostorio_register_settings() {
    register_setting( 'hostorio_settings_group', 'hostorio_settings', 'hostorio_sanitize_settings' );

    // Currency Section
    add_settings_section(
        'hostorio_currency_section',
        __( 'Currency Settings', 'hostorio' ),
        function() {
            echo '<p>' . esc_html__( 'Configure currency conversion rates used in the pricing displays.', 'hostorio' ) . '</p>';
        },
        'hostorio-settings'
    );

    add_settings_field(
        'exchange_rate',
        __( 'BDT per 1 USD', 'hostorio' ),
        'hostorio_field_exchange_rate',
        'hostorio-settings',
        'hostorio_currency_section'
    );

    add_settings_field(
        'default_currency',
        __( 'Default Currency', 'hostorio' ),
        'hostorio_field_default_currency',
        'hostorio-settings',
        'hostorio_currency_section'
    );

    add_settings_field(
        'default_language',
        __( 'Default Language', 'hostorio' ),
        'hostorio_field_default_language',
        'hostorio-settings',
        'hostorio_currency_section'
    );

    // Translation Override Section
    add_settings_section(
        'hostorio_translations_section',
        __( 'Translation Overrides', 'hostorio' ),
        function() {
            echo '<p>' . esc_html__( 'Override specific translation keys. These will be merged with the JavaScript translation files. Format: one key=value per line.', 'hostorio' ) . '</p>';
        },
        'hostorio-settings'
    );

    add_settings_field(
        'translation_overrides_en',
        __( 'English Overrides', 'hostorio' ),
        'hostorio_field_translation_overrides_en',
        'hostorio-settings',
        'hostorio_translations_section'
    );

    add_settings_field(
        'translation_overrides_bn',
        __( 'Bengali Overrides', 'hostorio' ),
        'hostorio_field_translation_overrides_bn',
        'hostorio-settings',
        'hostorio_translations_section'
    );
}

/* ───────────────────────────────────────────
   Field renderers
   ─────────────────────────────────────────── */
function hostorio_get_option( $key, $default = '' ) {
    $options = get_option( 'hostorio_settings', array() );
    return isset( $options[ $key ] ) ? $options[ $key ] : $default;
}

function hostorio_field_exchange_rate() {
    $value = hostorio_get_option( 'exchange_rate', '125' );
    echo '<input type="number" step="0.01" name="hostorio_settings[exchange_rate]" value="' . esc_attr( $value ) . '" class="small-text" />';
    echo '<p class="description">' . esc_html__( 'Exchange rate for BDT to USD conversion (e.g. 125 means 125 BDT = 1 USD).', 'hostorio' ) . '</p>';
}

function hostorio_field_default_currency() {
    $value = hostorio_get_option( 'default_currency', 'BDT' );
    echo '<select name="hostorio_settings[default_currency]">';
    echo '<option value="BDT"' . selected( $value, 'BDT', false ) . '>BDT (৳)</option>';
    echo '<option value="USD"' . selected( $value, 'USD', false ) . '>USD ($)</option>';
    echo '</select>';
}

function hostorio_field_default_language() {
    $value = hostorio_get_option( 'default_language', 'en' );
    echo '<select name="hostorio_settings[default_language]">';
    echo '<option value="en"' . selected( $value, 'en', false ) . '>English</option>';
    echo '<option value="bn"' . selected( $value, 'bn', false ) . '>Bengali (বাংলা)</option>';
    echo '</select>';
}

function hostorio_field_translation_overrides_en() {
    $value = hostorio_get_option( 'translation_overrides_en', '' );
    echo '<textarea name="hostorio_settings[translation_overrides_en]" rows="8" cols="60" class="large-text code">' . esc_textarea( $value ) . '</textarea>';
    echo '<p class="description">' . esc_html__( 'Example: nav.home=Home Page', 'hostorio' ) . '<br/>';
    echo esc_html__( 'One override per line. Use dot notation for nested keys.', 'hostorio' ) . '</p>';
}

function hostorio_field_translation_overrides_bn() {
    $value = hostorio_get_option( 'translation_overrides_bn', '' );
    echo '<textarea name="hostorio_settings[translation_overrides_bn]" rows="8" cols="60" class="large-text code">' . esc_textarea( $value ) . '</textarea>';
    echo '<p class="description">' . esc_html__( 'Example: nav.home=হোম পেজ', 'hostorio' ) . '</p>';
}

/* ───────────────────────────────────────────
   Sanitize
   ─────────────────────────────────────────── */
function hostorio_sanitize_settings( $input ) {
    $output = array();
    $output['exchange_rate']           = isset( $input['exchange_rate'] ) ? floatval( $input['exchange_rate'] ) : 125;
    $output['default_currency']        = isset( $input['default_currency'] ) && in_array( $input['default_currency'], array( 'BDT', 'USD' ), true ) ? $input['default_currency'] : 'BDT';
    $output['default_language']        = isset( $input['default_language'] ) && in_array( $input['default_language'], array( 'en', 'bn' ), true ) ? $input['default_language'] : 'en';
    $output['translation_overrides_en'] = isset( $input['translation_overrides_en'] ) ? sanitize_textarea_field( $input['translation_overrides_en'] ) : '';
    $output['translation_overrides_bn'] = isset( $input['translation_overrides_bn'] ) ? sanitize_textarea_field( $input['translation_overrides_bn'] ) : '';
    return $output;
}

/* ───────────────────────────────────────────
   Settings page render
   ─────────────────────────────────────────── */
function hostorio_settings_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <?php settings_errors(); ?>
        <form method="post" action="options.php">
            <?php
            settings_fields( 'hostorio_settings_group' );
            do_settings_sections( 'hostorio-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

/* ───────────────────────────────────────────
   Output admin overrides as inline JS
   ─────────────────────────────────────────── */
add_action( 'wp_footer', 'hostorio_output_admin_overrides', 5 );
function hostorio_output_admin_overrides() {
    $options  = get_option( 'hostorio_settings', array() );
    $rate     = isset( $options['exchange_rate'] ) ? floatval( $options['exchange_rate'] ) : 0;
    $def_curr = isset( $options['default_currency'] ) ? $options['default_currency'] : '';
    $def_lang = isset( $options['default_language'] ) ? $options['default_language'] : '';
    $en_raw   = isset( $options['translation_overrides_en'] ) ? $options['translation_overrides_en'] : '';
    $bn_raw   = isset( $options['translation_overrides_bn'] ) ? $options['translation_overrides_bn'] : '';

    $overrides = array( 'en' => array(), 'bn' => array() );

    foreach ( array( 'en' => $en_raw, 'bn' => $bn_raw ) as $lang => $raw ) {
        if ( empty( $raw ) ) continue;
        $lines = explode( "\n", $raw );
        foreach ( $lines as $line ) {
            $line = trim( $line );
            if ( empty( $line ) || strpos( $line, '=' ) === false ) continue;
            list( $key, $val ) = explode( '=', $line, 2 );
            $overrides[ $lang ][ trim( $key ) ] = trim( $val );
        }
    }

    $has_overrides = ! empty( $overrides['en'] ) || ! empty( $overrides['bn'] );
    $has_settings  = $rate > 0 || ! empty( $def_curr ) || ! empty( $def_lang );

    if ( ! $has_overrides && ! $has_settings ) {
        return;
    }

    echo "<script>\n";

    // Apply translation overrides
    if ( $has_overrides ) {
        echo "(function(){\n";
        echo "var t=window.translations||{en:{},bn:{}};\n";
        echo "function set(obj,path,val){var k=path.split('.'),o=obj;for(var i=0;i<k.length-1;i++){if(!o[k[i]])o[k[i]]={};o=o[k[i]];}o[k[k.length-1]]=val;}\n";
        foreach ( $overrides as $lang => $pairs ) {
            foreach ( $pairs as $key => $val ) {
                echo 'set(t.' . esc_js( $lang ) . ',' . wp_json_encode( $key ) . ',' . wp_json_encode( $val ) . ");\n";
            }
        }
        echo "})();\n";
    }

    // Apply exchange rate override
    if ( $rate > 0 ) {
        echo "if(window.i18n){window.i18n.exchangeRate=" . floatval( $rate ) . ";}\n";
    }

    // Apply default currency/language (only if no saved preference)
    if ( ! empty( $def_curr ) ) {
        echo "if(window.i18n&&!localStorage.getItem('selectedCurrency')){window.i18n.setCurrency('" . esc_js( $def_curr ) . "');}\n";
    }
    if ( ! empty( $def_lang ) ) {
        echo "if(window.i18n&&!localStorage.getItem('selectedLanguage')){window.i18n.setLanguage('" . esc_js( $def_lang ) . "');}\n";
    }

    echo "</script>\n";
}
