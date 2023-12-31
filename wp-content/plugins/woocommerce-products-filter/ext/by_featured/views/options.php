<?php
if (!defined('ABSPATH'))
    die('No direct access allowed');
?>

<li data-key="<?php esc_attr_e($key) ?>" class="woof_options_li">

    <?php
    $show = 0;
    if (isset($woof_settings[$key]['show'])) {
        $show = (int) $woof_settings[$key]['show'];
    }
    ?>

    <span class="icon-arrow-combo help_tip woof_drag_and_drope" data-tip="<?php esc_html_e("drag and drope", 'woocommerce-products-filter'); ?>"></span>

    <strong class="woof_fix1"><?php esc_html_e("Featured checkbox", 'woocommerce-products-filter'); ?>:</strong>


    <span class="icon-question help_tip" data-tip="<?php esc_html_e('Show Featured products checkbox inside WOOF search form', 'woocommerce-products-filter') ?>"></span>

    <div class="select-wrap">
        <select name="woof_settings[<?php esc_attr_e($key) ?>][show]" class="woof_setting_select">
            <option value="0" <?php selected($show, 0) ?>><?php esc_html_e('No', 'woocommerce-products-filter') ?></option>
            <option value="1" <?php selected($show, 1) ?>><?php esc_html_e('Yes', 'woocommerce-products-filter') ?></option>
        </select>
    </div>


    <div id="woof-modal-content-<?php esc_attr_e($key) ?>" style="display: none;"></div>


</li>
