<fieldset class="asp_content_type_filters asp_filter_id_<?php echo $filter->id; ?> asp_filter_n_<?php echo $filter->position; ?>">
    <?php if ($filter->label != ''): ?>
        <legend><?php echo asp_icl_t("Content type filter label", $filter->label, true);  ?></legend>
    <?php endif; ?>