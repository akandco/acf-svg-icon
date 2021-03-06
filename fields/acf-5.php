<?php
class acf_field_svg_icon_5 extends acf_field_svg_icon
{

    public function __construct()
    {
        // do not delete!
        parent::__construct();
    }

    /**
     * Enqueue assets for the SVG icon field in admin
     *
     * @since 1.0.0
     */
    public function input_admin_enqueue_scripts()
    {
        // Min version ?
        $suffix = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG === true ? '' : '.min';

        wp_register_script('acf-input-svg-icon', ACF_SVG_ICON_URL . 'assets/js/input-5' . $suffix . '.js', [
            'jquery',
            'select2',
            'acf-input',
        ], ACF_SVG_ICON_VER);
        wp_enqueue_script('acf-input-svg-icon');

        parent::input_admin_enqueue_scripts();
    }
}
