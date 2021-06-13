<?php
// example of how to modify HTML contents
include('../simple_html_dom.php');

// get DOM from URL or file
$html = file_get_html('https://www.blogger.com/video.g?token=AD6v5dwDDfgo5TTOLPjrtoiP0Di0i-bbn4x2tiyv2deFVXh9o4S1lX4bllX7ZD-LbR20XRXj4lOQb7TPGov72iL0-FD2Sa_1Y5uXh037hZInnONhILXK1KPbhcMnBH6A3oiqrcwkMhX0');

// dump contents
echo $html;
?>