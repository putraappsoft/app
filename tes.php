<?php

$file_id = 'playlist.m3u8';
$url = 'http://51.81.66.195:1935/krtv/mnet_540/' . $file_id;
$content = file_get_contents( $url );

echo '<pre>';
print_r( $content );
echo '</p>';