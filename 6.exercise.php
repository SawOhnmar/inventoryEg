<?php

//Create Inventory Class
//There should be add item method which can add the new item and qty into the list property
//There should be a sale class which will reduce the qty of the item

class Inventory{

    //Private properties -> Item List[]
    private $items;

    function _construct(){
        $this->items=[];
    }

    function addItem($item, $qty){
        $this->items[$item] = $qty;
    }

    function sale($item, $qty){
        foreach(  $this->items as $k=>&$v ){
            if( $k == $item) {
                $v -=$qty;
            }
        }
        
    }

    function getItems(){
        print_r($this->items);
        echo "<br/>";
    }
    
}

$obj = new Inventory();
$obj->addItem('Sugar', 10);
$obj->addItem('Coffee Powder', 20);
$obj->getItems();

$obj->sale('Sugar', 3);
$obj->sale('Coffee Powder', 6);
$obj->getItems();