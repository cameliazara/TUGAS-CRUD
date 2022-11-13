<?php
echo "<hr />";
foreach($data as $dt) {

    echo "<br> ID : ".$dt->id;
    echo "<br> TITLE : ".$dt->title;
    echo "<br> DESCPRIPTION : ".$dt->description;
    echo "<hr />";
}