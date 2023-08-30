<?php

for($i=0; $i<10; $i++){}

$arr = array("HTML", "CSS", "PHP", "JavaScript");
$coding = new ArrayObject($arr);
$coding->append("JAVA");

$iterator = $coding->getIterator();
echo $iterator->current()."<br/>";
while ($iterator->valid()){
    echo $iterator->current()."<br/>";
    $iterator->next();
}

?>