<?php
if (!defined('ABSPATH'))
    die('No direct access allowed');
//***
extract($options);
?>
<div class="woof-control-section">

    <h4><?php esc_html_e($title) ?></h4>

    <div class="woof-control-container">
        <div class="woof-control">
            <?php
            if (!isset($woof_settings[$key]))
            {
                $woof_settings[$key] = $default;
            }
            //***
            switch ($type)
            {
                case 'textinput':
                    ?>
                    <input type="text" placeholder="<?php esc_attr_e($placeholder) ?>" name="woof_settings[<?php esc_attr_e($key) ?>]" value="<?php echo stripcslashes(wp_kses_post(wp_unslash($woof_settings[$key]))) ?>" id="<?php esc_attr_e($key) ?>" />
                    <?php
                    break;
                case 'color':
                    ?>
                    <input type="text" placeholder="<?php esc_attr_e($placeholder) ?>" class="woof-color-picker" name="woof_settings[<?php esc_attr_e($key) ?>]" value="<?php esc_html_e($woof_settings[$key]) ?>" id="<?php esc_attr_e($key) ?>" />
                    <?php
                    break;
                case 'select':
                    ?>
                    <select name="woof_settings[<?php esc_attr_e($key) ?>]" id="<?php esc_attr_e($key) ?>">
                        <?php
                        if (!empty($select_options))
                        {
                            foreach ($select_options as $opt_key => $opt_title)
                            {
                                ?>
                                <option <?php selected($woof_settings[$key], $opt_key) ?> value="<?php esc_attr_e($opt_key) ?>"><?php esc_html_e($opt_title) ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                    <?php
                    break;
                case 'image':
                    ?>
                        <input type="text" name="woof_settings[<?php esc_attr_e($key) ?>]" value="<?php esc_html_e($woof_settings[$key]) ?>" id="<?php esc_attr_e($key) ?>" />
                        <a href="#" class="woof-button woof_select_image"><?php esc_html_e($placeholder) ?></a>                    
                    <?php
                    break;

                default:
                    break;
            }
            ?>


        </div>
        <div class="woof-description">
            <p class="description"><?php esc_html_e($description) ?></p>
        </div>
    </div>

</div><!--/ .woof-control-section-->
