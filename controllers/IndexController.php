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
     * Omeka needs the controller's indexAction function to render the index view.
     * 
     * @return void
     */
    public function indexAction(): void
    {
        // This will automatically render views/admin/index/index.php
        debug("Template: indexAction()");
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


    /**
     *  Navigation
     * 
     *  The following section contains actions which are used to build the navigation views
     */

    /**
     * This action is called when the user clicks on the second view link in the navigation.
     * It will render the secondview.php view file.
     * 
     * @return void
     */
    public function secondviewAction()
    {
        // This will automatically render views/admin/index/secondview.php
        // Do something else: ...
        debug("Template: secondviewAction() called");
    }

    /**
     * This action is called when the user clicks on the third view link in the navigation.
     * It will render the thirdview.php view file.
     * 
     * @return void
     */
    public function thirdviewAction()
    {
        // This will automatically render views/admin/index/thirdview.php
        debug("Template: thirdviewAction() called");

        // Load some data from the database using the `getTable()` function from the database object (Omeka_Db_Table), to display in the third view:
        $this->view->columns= get_db()->getTable('ItemType')->getColumns(); // getColumns() returns an array of column names for the ItemType table
        $this->view->pairs= get_db()->getTable('ItemType')->findPairsForSelectForm(); // findPairsForSelectForm() returns an array of pairs for a select form

        $this->view->itemTypes = get_db()->getTable('ItemType')->findAll();                 // NOTE: Database table: omeka_item_types | getTable() value: 'ItemType'
        $this->view->itemTypeElements = get_db()->getTable('ItemTypesElements')->findAll(); // NOTE: Database table: omeka_item_types_elements | getTable() value: 'ItemTypesElements'
        $this->view->element = get_db()->getTable('Element')->findAll();                    // NOTE: Database table: omeka_elements | getTable() value: 'Element' (without `s`)
        $this->view->elementSet = get_db()->getTable('ElementSet')->findAll();              // NOTE: Database table: omeka_elemet_sets | getTable() value: 'ElementSet' (without `s`)
    }
}

?>