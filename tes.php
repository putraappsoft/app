<?php

$file_id = 'AD6v5dy_l7SvmSV0mdMiUXWy6MKCF4n7Ge8Vduw_dfSap-rhjB9xj2uifrjigl0qwt-kjrDY-StBp5vc0DfeXsgVcgy4D1YqlDb27iV5JQZ3wk0jZLR28-SkO9Q9CRxVPo3sG2kyZ6bb';
$url = 'https://www.blogger.com/video.g?token=' . 
$file_id;
$content = file_get_contents( $url );

parse_str( $content, $params );
$fmt_stream_map = explode( '|', $params['fmt_stream_map'] );

echo '<pre>';
print_r( $fmt_stream_map );
echo '</p>';