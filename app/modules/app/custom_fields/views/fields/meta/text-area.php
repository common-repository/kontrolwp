<textarea name="_kontrol[<?php echo $field->field_key?>]" class="<?php echo $field_validation?>" <?php echo (isset($field->settings['height']) && !empty($field->settings['height'])) ? 'style="height: '.$field->settings['height'].'px;"':''; ?> ><?php echo !empty($field_value) ? $field_value : $field->settings['default_value'];?></textarea>
  