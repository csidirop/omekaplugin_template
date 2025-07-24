<?php
    $view = get_view();

    $template_option = get_option('template_option');
    $template_option_3 = get_option('template_option_3');
    $template_option_4 = get_option('template_option_4');
?>

<!-- Examples of `formText()` -->
<h2><?= __('Examples of `formText()`') ?></h2>
<div class="field template-formText">
    <div class="two columns alpha">
        <?php echo $view->formLabel('template-option', __('Template Option')); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            <?php echo __('Any explanatory text about the first form element.'); ?>
        </p>
        <?php echo $view->formText('template-option', $template_option); ?>
    </div>
</div>

<div class="field template-formText">
    <div class="two columns alpha">
        <?php echo $view->formLabel('template-option-3', __('Template Option 3')); ?>
        <p class="explanation">
            <?php echo __('Some additional info.'); ?>
        </p>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            <?php echo __('Any explanatory text about the second form element.'); ?>
        </p>
        <?php echo $view->formText('template-option-3', $template_option_3); ?>
    </div>
</div>

<h2><?= __('Examples of `formCheckbox()`') ?></h2>
<!-- Example of `formCheckbox()` -->
<div class="field template-formCheckbox">
    <div class="two columns alpha">
        <?php echo $view->formLabel('template-option-4', __('Template Option 4')); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            <?php echo __('Any explanatory text about the form element.'); ?>
        </p>
        <?php echo $view->formCheckbox(
                'template-option-4',                    // Name attribute
                true,                                   // Value when checked
                ['id' => 'template-option-4-id'],       // Additional attributes (optional)
                $template_option_4 ? [true] : [false]   // Preset value (Expects array, therefore conversion)
            );
        ?>
    </div>
</div>

<h2><?= __('Examples of `formSelect()`') ?></h2>
<!-- Example of `formSelect()` -->
<div class="field">
    <div class="two columns alpha">
        <?php echo get_view()->formLabel('user_select', "Select Users"); ?>
        <p class="explanation">Blabla</p>
    </div>
    <div class="inputs five columns omega">
        <?php echo get_view()->formSelect("user_select2", null, null, [  'install',
                                                            'uninstall',
                                                            'config',
                                                            'config_form',
                                                            'define_acl']); ?>
        <select name="user_select[]" id="user_select" multiple>
            <option value="user1">User 1</option>
            <option value="user2">User 2</option>
            <option value="user3">User 3</option>
        </select>
        <p class="explanation">Hold down the Ctrl (Windows) or Command (Mac) key to select multiple options.</p>
    </div>
</div>
