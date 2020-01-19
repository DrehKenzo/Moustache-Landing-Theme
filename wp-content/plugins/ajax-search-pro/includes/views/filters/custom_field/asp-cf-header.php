<?php if ($filter->display_mode != 'hidden'): ?>
<fieldset
        class="asp_custom_f<?php echo in_array($filter->display_mode, array('checkboxes', 'radio')) ? ' asp_sett_scroll' : ''; ?> asp_filter_cf_<?php echo esc_attr($filter->data['field']); ?> asp_filter_id_<?php echo $filter->id; ?> asp_filter_n_<?php echo $filter->position; ?>">
    <legend><?php echo $filter->label; ?></legend>
<?php endif; ?>