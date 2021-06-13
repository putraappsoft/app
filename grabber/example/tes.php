<?php
// example of how to modify HTML contents
include('../simple_html_dom.php');

// get DOM from URL or file
$html = file_get_html('http://www.google.com/');

// replace all input
foreach($html->find('input') as $e)
    $e->outertext = '[INPUT]';

// dump contents
echo $html;
?>