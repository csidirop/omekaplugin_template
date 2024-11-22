<?php

class TemplatePlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = [
        'install',
        'uninstall',
        'config',
        'config_form',
    ];

    /**
     * @var array Filters for the plugin.
     */
    protected $_filters = [
        'admin_navigation_main',
    ];

    /**
     * Install the plugin.
     */
    public function hookInstall(): void
    {
        set_option('template_option', 'Default Value');
    }

    /**
     * Uninstall the plugin.
     */
    public function hookUninstall(): void
    {
        delete_option('template_option');
    }

    /**
     * Display the configuration form.
     */
    public function hookConfigForm(): void
    {
        include 'views/admin/config-form.php';
    }

    /**
     * Process the configuration form submission.
     */
    public function hookConfig($args): void
    {
        $option = trim($args['post']['template_option']);
        set_option('template_option', $option);
    }


    /**
     * Add the Template link to the admin main navigation.
     * 
     * @param array Navigation array.
     * @return array Filtered navigation array.
     */
    public function filterAdminNavigationMain($nav): array
    {
        $nav[] = array(
            'label' => __('Template Menuitem'),
            'uri' => url('temmplate-url'),
            // 'resource' => 'Template_Index',
            'privilege' => 'index'  // index:
            // 'privilege' => 'browse' // browse: 
        );
        return $nav;
    }

    /*
        Some commonly used hooks:
            hookAdminCollectionsShow
            hookAdminFooter
            hookAdminHead
            hookAdminItemsBatchEditForm
            hookAdminItemsBrowseSimpleEach
            hookAdminItemsSearch
            hookAdminItemsShow
            hookAdminItemsShowSidebar
            hookAfterDeleteItem
            hookAfterSaveItem
            hookBeforeSaveItem
            hookCollectionsBrowseSql
            hookConfig
            hookConfigForm
            hookDefineAcl
            hookDefineRoutes
            hookHtmlPurifierFormSubmission
            hookInitialize
            hookInstall
            hookItemsBatchEditCustom
            hookItemsBrowseSql
            hookNeatlinePublicStatic
            hookPublicCollectionsBrowse
            hookPublicFacets
            hookPublicFooter
            hookPublicHead
            hookPublicItemsBrowse
            hookPublicItemsShow
            hookUninstall
            hookUpgrade
        For the complete list visit: https://omeka.readthedocs.io/en/latest/Reference/hooks/
    */
}
