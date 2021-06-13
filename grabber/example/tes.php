<?php
// example of how to modify HTML contents
include('../simple_html_dom.php');

// get DOM from URL or file
$html = file_get_html('http://www.google.com/');

// dump contents
echo $html;
?>