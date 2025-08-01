<?php
    queue_css_file('belogs');

    $head = array('bodyclass' => 'Template index','title' => html_escape(__('Template')));
    echo head($head);
    echo flash();
?>

<?php echo $this->partial('common/nav.php');?>

<h2>Third View</h2>
<p>This is the third view of the Template plugin. It demonstrates how to display data from the database, in this example item types and their elements.</p>
<p>Here are some item types and their elements:</p>

<div>
    <div>
        <p> ItemTypes: <br />
            <pre><?php
                foreach($this->itemTypes as $singleItemType){
                    echo "name: " . $singleItemType->name . "\n <br />";
                    echo "description: " . $singleItemType->description . "\n <br />";
                    echo "<br />";
                }
            ?></pre>
        </p>
    </div>

    <div><br /><br /></div>

    <div>
        <!-- <p> test_itemTypes: <?php // foreach($this->itemTypeElements as $singleItemTypeElement) :  echo $singleItemTypeElement->name ; endforeach ?> </p> -->
        <p> ItemTypesElements: <br />
            <pre><?php
                foreach($this->itemTypeElements as $singleItemTypeElement){
                    echo "item_type_id: " . $singleItemTypeElement->item_type_id . "\n <br />";
                    echo "element_id: " . $singleItemTypeElement->element_id . "\n <br />";
                    echo "order: " . $singleItemTypeElement->order . "\n <br />";
                    echo "<br />";
                }
            ?></pre>
        </p>
    </div>
</div>
