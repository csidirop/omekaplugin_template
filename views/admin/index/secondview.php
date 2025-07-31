<?php
    queue_css_file('belogs');

    $head = array('bodyclass' => 'Template index','title' => html_escape(__('Template')));
    echo head($head);
    echo flash();
?>

<?php echo $this->partial('common/nav.php');?>

<h2>Second View</h2>

<div>


</div>
