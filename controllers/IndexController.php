<?php

/**
 * // TODO
 * 
 * See: https://omeka.readthedocs.io/en/latest/Reference/controllers/IndexController.html#IndexController
 *
 * @package Template
 * @copyright Copyright 2024, Christos Sidiropoulos
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 or any later version
 */
class Template_IndexController extends Omeka_Controller_AbstractActionController
{

    // /**
    //  * Initialize the controller.
    //  */
    // public function init()
    // {
    //     parent::init();
    // }

    /**
     * Omeka needs the controller's indexAction function
     * 
     * @return void
     */
    public function indexAction(): void
    {
        // This will automatically render views/admin/index/index.php
        // Do something else: ...
    }

    // here comming all actions performed on that page: ...
}

?>