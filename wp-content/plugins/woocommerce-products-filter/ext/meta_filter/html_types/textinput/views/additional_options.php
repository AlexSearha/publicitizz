<?php
if (!defined('ABSPATH'))
    die('No direct access allowed');
?>

<input type="hidden" name="woof_settings[<?php esc_attr_e($key) ?>][text_conditional]" value="<?php esc_html_e(isset($settings[$key]['text_conditional'])? $settings[$key]['text_conditional']:'LIKE') ?>" /> 
<input type="hidden" name="woof_settings[<?php esc_attr_e($key) ?>][text_autocomplate]" value="<?php echo intval(isset($settings[$key]['text_autocomplate'])? $settings[$key]['text_autocomplate']:0) ?>" /> 

<div id="woof-modal-content-<?php esc_attr_e($key) ?>" style="display: none;">

    <div class="woof-form-element-container">

        <div class="woof-name-description">
            <strong><?php esc_html_e('Text search conditional', 'woocommerce-products-filter') ?></strong>
            <span><?php esc_html_e('TEXT', 'woocommerce-products-filter') ?></span>
        </div>

        <div class="woof-form-element">
            <?php
            $text_conditional = array(
                'LIKE' => esc_html__('LIKE', 'woocommerce-products-filter'),
                '=' => esc_html__('EXACT', 'woocommerce-products-filter')
            );
            ?>

            <div class="select-wrap">
                <select class="woof_popup_option" data-option="text_conditional">
                    <?php foreach ($text_conditional  as $id => $value) : ?>
                        <option value="<?php esc_attr_e($id) ?>"><?php esc_html_e($value) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

        </div>

    </div>        

</div>

