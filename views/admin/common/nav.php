<nav id="section-nav" class="navigation vertical">
<?php
    // Build nav array with three main tabs:
    $navArray = array(
        array(
            'label' => 'Mainview',
            'action' => 'index',
            'module' => 'template',
        ),
        array(
            'label' => 'SecondView',
            'action' => 'secondview',
            'module' => 'template',
        ),
        array(
            'label' => 'ThirdView',
            'action' => 'thirdview',
            'module' => 'template',
        )
    );

    echo nav($navArray, 'admin_navigation_settings');
?>
</nav>