<?php

interface iterator{

    function rewind(); //starding index set kore day.
    function current(); // current object return kore.
    function key(); //current key return kore.
    function next(); // ture false return kore, loop a modde kono object thakle.
    function valid(); // current object return kore jodi tar modde akta value thake.
     
}

?>