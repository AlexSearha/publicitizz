<?php
if (!defined('ABSPATH'))
    die('No direct access allowed');
?>

<li data-key="<?php esc_attr_e($key) ?>" class="woof_options_li">

    <?php
    $show = 0;
    if (isset($woof_settings[$key]['show']))
    {
        $show = (int) $woof_settings[$key]['show'];
    }
    ?>

                <span class="icon-arrow-combo help_tip woof_drag_and_drope" data-tip="<?php esc_html_e("drag and drope", 'woocommerce-products-filter'); ?>"></span>

    <strong class="woof_fix1"><?php esc_html_e("In stock checkbox", 'woocommerce-products-filter'); ?>:</strong>

    <span class="icon-question help_tip" data-tip="<?php esc_html_e('Show In stock only checkbox inside woof search form', 'woocommerce-products-filter') ?>"></span>

    <div class="select-wrap">
        <select name="woof_settings[<?php esc_attr_e($key) ?>][show]" class="woof_setting_select">
            <option value="0" <?php selected($show, 0) ?>><?php esc_html_e('No', 'woocommerce-products-filter') ?></option>
            <option value="1" <?php selected($show, 1) ?>><?php esc_html_e('Yes', 'woocommerce-products-filter') ?></option>
        </select>
    </div>


    <a href="#" data-key="<?php esc_attr_e($key) ?>" data-name="<?php esc_html_e("Search by InStock", 'woocommerce-products-filter'); ?>" class="woof-button js_woof_options js_woof_options_<?php esc_attr_e($key) ?> help_tip" data-tip="<?php esc_html_e('additional options', 'woocommerce-products-filter') ?>"><span class="icon-cog-outline"></span></a>



    <?php
    if (!isset($woof_settings[$key]['use_for']))
    {
        $woof_settings[$key]['use_for'] = 'simple';
    }
	if (!isset($woof_settings[$key]['new_db']))
    {
        $woof_settings[$key]['new_db'] = 0;
    }
    ?>

    <input type="hidden" name="woof_settings[<?php esc_attr_e($key) ?>][use_for]" value="<?php esc_html_e($woof_settings[$key]['use_for']) ?>" />
	<input type="hidden" name="woof_settings[<?php esc_attr_e($key) ?>][new_db]" value="<?php esc_html_e($woof_settings[$key]['new_db']) ?>" />

    <div id="woof-modal-content-<?php esc_attr_e($key) ?>" style="display: none;">

        <div class="woof-form-element-container">

            <div class="woof-name-description">
                <strong><?php esc_html_e('Search in variable produts', 'woocommerce-products-filter') ?></strong>
                <span><?php esc_html_e('Will the plugin look in each variable of variable products. Request for variables products creates more mysql queries in database ...', 'woocommerce-products-filter') ?></span>
            </div>

            <div class="woof-form-element">
                <?php
                $use_for = array(
                    'simple' => esc_html__('Simple products only', 'woocommerce-products-filter'),
                    'both' => esc_html__('Search in products and their variations', 'woocommerce-products-filter')
                );
                ?>
                <div class="select-wrap">
                    <select class="woof_popup_option" data-option="use_for">
                        <?php foreach ($use_for as $key => $value) : ?>
                            <option value="<?php esc_attr_e($key) ?>"><?php esc_html_e($value) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

            </div>

        </div>
        <div class="woof-form-element-container">

            <div class="woof-name-description">
                <strong><?php esc_html_e('Use new DB.', 'woocommerce-products-filter') ?></strong>
                <span><?php esc_html_e('This can speed up in stock searches for variable products.', 'woocommerce-products-filter') ?></span>
            </div>

            <div class="woof-form-element">
                <?php
                $new_db = array(
                    0 => esc_html__('No', 'woocommerce-products-filter'),
                    1 => esc_html__('Yes', 'woocommerce-products-filter')
                );
                ?>
                <div class="select-wrap">
                    <select class="woof_popup_option" data-option="new_db">
                        <?php foreach ($new_db as $key => $value) : ?>
                            <option value="<?php esc_attr_e($key) ?>"><?php esc_html_e($value) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

            </div>

        </div>


    </div>


</li>
