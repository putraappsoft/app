<?php

$file_id = '1M5H1ivjaLIDFkoSskSLM2ysrhJABAwIF';
$url = 'https://drive.google.com/file/d/' . 
$file_id;
$content = file_get_contents( $url );

echo '<pre>';
print_r( $content );
echo '</p>';