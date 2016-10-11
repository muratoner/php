<?php
    require "Select.php";
    $select = new HTML_Select("country", 2, true, array("style" => "width:500px;height:200px;"));
    $select->addStartOptionGroup("Turkey");
    $select->addOption("İstanbul","34");
    $select->addOption("Kocaeli", "41");
    $select->addOption("Van", "65");
    echo $select->toHtml();
?>