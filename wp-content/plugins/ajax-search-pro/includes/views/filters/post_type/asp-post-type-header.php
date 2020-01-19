<fieldset class="asp_filter_cpt asp_sett_scroll<?php echo !$filter->isEmpty() ? '' : ' hiddend'; ?><?php echo $filter->display_mode == 'checkboxes' ? ' asp_checkboxes_filter_box' : ''; ?>">
    <?php if ($filter->label != ''): ?>
    <legend><?php echo esc_html($filter->label);  ?></legend>
    <?php endif; ?>