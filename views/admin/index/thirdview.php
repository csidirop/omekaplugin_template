<?php
    queue_css_file('template'); // Load the CSS file located under /view/admin/css/ with the filename template(.css) for this view

    $head = array('bodyclass' => 'Template index','title' => html_escape(__('Template')));
    echo head($head);
    echo flash();
?>

<?php echo $this->partial('common/nav.php');?>

<h2>Third View</h2>
<p>This is the third view of the Template plugin. It demonstrates how to display data from the database by using the <code>`getTable()`</code> function in the controller. (The data is displayed in a table hidden by a &lt;details&gt;-Element. So nothing here is specific to Omeka.) In this example <strong>item types</strong> and their elements are used.</p>

<!-- <p> element: <?php // var_dump(value: $this->col) ?> </p> -->
<!-- <p> test_itemTypes: <?php // foreach($this->itemTypeElements as $singleItemTypeElement) :  echo $singleItemTypeElement->name ; endforeach ?> </p> -->

<h4><code>getTable('TableName')->getColumns()</code></h4>
<p>This returns an array of column names for the given table. Here are some columns retrieved by <code>`getTable('ItemType')->getColumns()`</code>:</p>
<div>
    <?php foreach($this->columns as $key) : echo $key." | " ; endforeach ?>
</div>

<h4><code>`getTable('TableName')->findPairsForSelectForm()`</code></h4>
<p>This returns an array of pairs for a select form. Here are some pairs retrieved by <code>`getTable('ItemType')->findPairsForSelectForm()`</code>:</p>
<div>
    <?php foreach($this->pairs as $key => $value): ?>
        <span><?php echo htmlspecialchars($key) . ': ' . htmlspecialchars($value) . " | "; ?></span>
    <?php endforeach; ?>
</div>

<h4><code>`getTable('TableName')->findAll()`</code></h4>
<p>This returns all entries of the given table. Here are some entries retrieved by <code>`getTable('ItemType')->findAll()`</code>:</p>
<div>
    <details>
        <summary><strong>Item Types</strong></summary>
        <div>Database table: omeka_item_types | getTable() value: 'ItemType'</div>
         <div> -> This is what is listed under: <a href="../../item-types">Item Types</a></div>
        <div class="scrollable">
            <table border="1" cellpadding="4" cellspacing="0">
                <thead>
                    <tr>
                        <th>Item Type ID</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($this->itemTypes as $singleItemType): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($singleItemType->id); ?></td>
                            <td><?php echo htmlspecialchars($singleItemType->name); ?></td>
                            <td><?php echo htmlspecialchars($singleItemType->description); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </details>

    <details>
        <summary><strong>Item Types Elements</strong></summary>
        <div>Database table: omeka_elements | getTable() value: 'Element' (without `s`)</div>
        <div> -> This is what is listed under: <a href="../../settings/edit-item-type-elements">Settings -> Item Type Elements</a></div>
        <div class="scrollable">
            <table border="1" cellpadding="4" cellspacing="0">
                <thead>
                    <tr>
                        <th>Element ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Comment</th>
                        <th>Element Set ID</th>
                        <th>Set Name</th>
                        <th>Order</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($this->element as $singleElement): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($singleElement->id); ?></td>
                            <td><?php echo htmlspecialchars($singleElement->name); ?></td>
                            <td><?php echo htmlspecialchars($singleElement->description); ?></td>
                            <td><?php echo htmlspecialchars($singleElement->comment); ?></td>                            
                            <td><?php echo htmlspecialchars($singleElement->element_set_id); ?></td>
                            <td><?php echo htmlspecialchars($singleElement->set_name); ?></td>
                            <td><?php echo htmlspecialchars($singleElement->order); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </details>

    <details>
        <summary><strong>Item Types Elements (relations)</strong></summary>
        <div>Database table: omeka_item_types_elements | getTable() value: 'ItemTypesElements'</div>
        <div>Shows the relations between Item Types and the Item Type Elements</div>
        <div class="scrollable">
            <table border="1" cellpadding="4" cellspacing="0">
                <thead>
                    <tr>
                        <th>Item Type ID</th>
                        <th>Element ID</th>
                        <th>Order</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($this->itemTypeElements as $singleItemTypeElement): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($singleItemTypeElement->item_type_id); ?></td>
                            <td><?php echo htmlspecialchars($singleItemTypeElement->element_id); ?></td>
                            <td><?php echo htmlspecialchars($singleItemTypeElement->order); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </details>

    <details>
        <summary><strong>Element Set</strong></summary>
        <div> Database table: omeka_elemet_sets | getTable() value: 'ElementSet' (without `s`)</div>
        <div> -> This is what is listed under: <a href="../../settings/element-sets">Settings -> Element Sets</a> plus the Item Type Metadata element set.</div>
        <div class="scrollable">
            <table border="1" cellpadding="4" cellspacing="0">
                <thead>
                    <tr>
                        <th>Element Set ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Record Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($this->elementSet as $singleElementSet): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($singleElementSet->id); ?></td>
                            <td><?php echo htmlspecialchars($singleElementSet->name); ?></td>
                            <td><?php echo htmlspecialchars($singleElementSet->description); ?></td>
                            <td><?php echo htmlspecialchars($singleElementSet->record_type); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </details>
</div>

<h4>Unrelated, but adding some new item types:</h4>
<p>To add a new item type, you can use the <code>`ItemType`</code> object. It will handle everthing else internally. This function creates a new ItemType record and saves it to the database.</p>
<form method="post" action="<?php echo url('template/index/add-item-type'); ?>">
    <label for="item-type-name">Item Type Name:</label>
    <input
        type="text"
        name="name"
        required
        placeholder="Enter a name for the new type"
    />
    <input type="submit" value="Add Item Type" />
</form>