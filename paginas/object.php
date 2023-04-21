



<?php

$obj = (object) array('1' => 'foo');
var_dump(isset($obj->{'1'})); 
var_dump(key($obj)); 

?>