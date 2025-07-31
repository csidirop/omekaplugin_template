<?php
$head = array(
        'bodyclass' => 'Template index',
        'title' => html_escape(__('Template'))
    );

    echo head($head);
    echo flash(); // this is needed to show flash messages (see IndexController::testAction() for one example)

    // <!--  For view-related function see: https://omeka.readthedocs.io/en/latest/Reference/packages/Function/View/index.html -->
?>

<div class="pagination"><?php echo pagination_links(); ?></div>
<?php echo $this->partial('common/nav.php');?> <!-- This will include the navigation from Template/views/admin/common/nav.php -->

<h2>Template Plugin Admin View</h2>
<p>This is a sample admin view for this (unofficial) template and demonstration plugin. It contains some common building blocks used for Omeka Classic plugins. Look into the source code for more details.</p>
<p>Here are some of the options set by this plugin (in the config view):</p>

<ul>
    <li>Config option 1: <strong><?php echo htmlspecialchars(get_option('template_option_1')); ?></strong></li>
    <li>Config option 2: <strong><?php echo htmlspecialchars(get_option('template_option_2')); ?></strong></li>
    <li>Config option 3: <strong><?php echo htmlspecialchars(get_option('template_option_3')); ?></strong></li>
</ul>

<p>Here are some buttons:</p>
<div>
    <p class="explanation"><?php echo __('This is a simple Button:')?></p>
    <a class="button green" href="<?php echo url('template/index/test1'); ?>">TEST</a>
    <p class="explanation"><?php echo __('This is a Button with a parameter:')?></p>
    <a class="button green" href="<?php echo url('template/index/test2/par/custom'); ?>">TEST</a>
</div>


<div class="search-filters"><?php echo item_search_filters();?></div>

<div class="pagination"><?php echo pagination_links(); ?></div>

<?php
    echo foot();
?>