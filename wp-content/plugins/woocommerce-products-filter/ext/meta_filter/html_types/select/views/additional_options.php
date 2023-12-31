<?php
if (!defined('ABSPATH'))
    die('No direct access allowed');
?>
<input type="hidden" name="woof_settings[<?php esc_attr_e($key) ?>][show_title_label]" value="<?php echo intval(isset($settings[$key]['show_title_label']) ? $settings[$key]['show_title_label'] : 1) ?>" /> 
<input type="hidden" name="woof_settings[<?php esc_attr_e($key) ?>][show_toggle_button]" value="<?php echo intval(isset($settings[$key]['show_toggle_button']) ? $settings[$key]['show_toggle_button'] : 0) ?>" /> 
<input type="hidden" name="woof_settings[<?php esc_attr_e($key) ?>][tooltip_text]" value="<?php echo wp_kses_post(wp_unslash(isset($settings[$key]['tooltip_text']) ? stripcslashes($settings[$key]['tooltip_text']) : "")) ?>" />
<input type="hidden" name="woof_settings[<?php esc_attr_e($key) ?>][options]" value="<?php echo esc_textarea(isset($settings[$key]['options']) ? $settings[$key]['options'] : "") ?>" /> 
<div id="woof-modal-content-<?php esc_attr_e($key) ?>" style="display: none;">
    <div class="woof-form-element-container">
        <div class="woof-name-description">
            <strong><?php esc_html_e('Show title label', 'woocommerce-products-filter') ?></strong>
            <span><?php esc_html_e('Show/Hide meta block title on the front', 'woocommerce-products-filter') ?></span>
        </div>

        <div class="woof-form-element">
            <?php
            $show_title = array(
                0 => esc_html__('No', 'woocommerce-products-filter'),
                1 => esc_html__('Yes', 'woocommerce-products-filter')
            );
            ?>

            <div class="select-wrap">
                <select class="woof_popup_option" data-option="show_title_label">
                    <?php foreach ($show_title as $id => $value) : ?>
                        <option value="<?php esc_attr_e($id) ?>"><?php esc_html_e($value) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

        </div>

    </div> 

    <div class="woof-form-element-container">
        <div class="woof-name-description">
            <strong><?php esc_html_e('Show toggle button', 'woocommerce-products-filter') ?></strong>
            <span><?php esc_html_e('Show toggle button near the title on the front above the block of html-items', 'woocommerce-products-filter') ?></span>
        </div>

        <div class="woof-form-element">
            <?php
            $show_toogle = array(
                0 => esc_html__('No', 'woocommerce-products-filter'),
                1 => esc_html__('Yes, show as closed', 'woocommerce-products-filter'),
                2 => esc_html__('Yes, show as opened', 'woocommerce-products-filter')
            );
            ?>

            <div class="select-wrap">
                <select class="woof_popup_option" data-option="show_toggle_button">
                    <?php foreach ($show_toogle as $id => $value) : ?>
                        <option value="<?php esc_attr_e($id) ?>"><?php esc_html_e($value) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

        </div>

    </div>  
    <div class="woof-form-element-container">

        <div class="woof-name-description">
            <strong><?php esc_html_e('Tooltip', 'woocommerce-products-filter') ?></strong>
            <span><?php esc_html_e('Show tooltip', 'woocommerce-products-filter') ?></span>
        </div>

        <div class="woof-form-element">

            <div class="select-wrap">
                <textarea class="woof_popup_option" data-option="tooltip_text" ></textarea>
            </div>

        </div>

    </div> 

</div>

