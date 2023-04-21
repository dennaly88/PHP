




<?php
// variable defined in the global scope 
$website_name = 'tutsplus.com';
function displayWebsiteName() {
     // PHP Notice: Undefined variable: website_name 
     //echo 'Website: ' . $website_name;
     // outputs “Website: tutsplus.com” 
     echo $GLOBALS['website_name'];
}
displayWebsiteName();
?>