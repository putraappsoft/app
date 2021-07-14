<?php

$file_id = 'key.txt';
$url = 'https://redirector-putraappsoft.herokuapp.com/' . $file_id;
$content = file_get_contents( $url );

echo '<pre>';
print_r( $content );
echo '</p>';