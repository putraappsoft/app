<?php

$file_id = '1pnKbOlaC7yJ7kA21tPinhbkRr9LFA6QW';
$url = 'https://drive.google.com/get_video_info?docid=' . $file_id;
$content = file_get_contents( $url );

parse_str( $content, $params );
$fmt_stream_map = explode( '|', $params['fmt_stream_map'] );

echo '<pre>';
print_r( $fmt_stream_map );
echo '</p>';