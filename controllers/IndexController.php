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
    /**
     * Omeka needs the controller's indexAction function
     * 
     * @return void
     */
    public function indexAction(): void
    {
        debug("Template: indexAction()");
        // This will automatically render views/admin/index/index.php
        // Do something else: ...
    }

    // here comming all actions performed on that page: ...

    /**
     * The action performed when clicking the the test button
     * 
     * @return void
     */
    public function test1Action(): void 
    {
        debug("Template: Test button debug message!"); // Print a debug message
        $this->_helper->flashMessenger(__('Button is working great!'), 'success'); // Show a green flash message
        $this->_helper->redirector('index', 'index'); // Return back to the index site
    }

    /**
     * The action performed when clicking the the second test button
     * 
     * @return void
     */
    public function test2Action(): void 
    {
        $par = $this->getRequest()->getParam('par');
        debug("Template: Second test button debug message with parameter: " . $par); // Print a debug message
        $this->_helper->flashMessenger(__('Button parameter was: ' . $par), 'success'); // Show a green flash message
        $this->_helper->redirector('index', 'index'); // Return back to the index site
    }
}

?>