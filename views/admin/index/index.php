<?php
$head = array(
        'bodyclass' => 'Template index',
        'title' => html_escape(__('Template'))
    );

    echo head($head);
?>

<h2>Template Plugin Admin View</h2>
<p>This is a sample admin view for the Template plugin.</p>
<p>Saved Option: <strong><?php echo htmlspecialchars(get_option('template_option')); ?></strong></p>

<?php
    echo foot();
?>