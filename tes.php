<?php

$file_id = 'AD6v5dy';
$url = 'https://www.blogger.com/video.g?token=' . 
$file_id;
$content = file_get_contents( $url );

echo '<pre>';
print_r( $content );
echo '</p>';