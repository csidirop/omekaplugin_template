<?php
    queue_css_file('template'); // Load the CSS file located under /view/admin/css/ with the filename template(.css) for this view

    $head = array('bodyclass' => 'Template index','title' => html_escape(__('Template')));
    echo head($head);
    echo flash();
?>

<?php echo $this->partial('common/nav.php');?>

<h2>Second View</h2>

<div>


</div>
