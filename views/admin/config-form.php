<?php
    $template_option = get_option('template_option');
    $template_option_3 = get_option('template_option_3');
    $template_option_4 = get_option('template_option_4');
?>

<!-- Examples of `formText()` -->
<div class="field template-formText">
    <div class="two columns alpha">
        <?php echo get_view()->formLabel('template-option', __('Template Option')); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            <?php echo __('Any explanatory text about the form element.'); ?>
        </p>
        <?php echo get_view()->formText('template-option', $template_option); ?>
    </div>
</div>

<div class="field template-formText">
    <div class="two columns alpha">
        <?php echo get_view()->formLabel('template-option-3', __('Template Option 3')); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            <?php echo __('Any explanatory text about the form element.'); ?>
        </p>
        <?php echo get_view()->formText('template-option-3', $template_option_3); ?>
    </div>
</div>

<!-- Example of `formCheckbox()` -->
<div class="field template-formCheckbox">
    <div class="two columns alpha">
        <?php echo get_view()->formLabel('template-option-4', __('Template Option 4')); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            <?php echo __('Any explanatory text about the form element.'); ?>
        </p>
        <?php echo get_view()->formCheckbox(
                'template-option-4',                    // Name attribute
                true,                                   // Value when checked
                ['id' => 'template-option-4-id'],       // Additional attributes (optional)
                $template_option_4 ? [true] : [false]   // Preset value (Expects array, therefore conversion)
            );
        ?>
    </div>
</div>
