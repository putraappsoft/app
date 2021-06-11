<?php
$id='1pnKbOlaC7yJ7kA21tPinhbkRr9LFA6QW';
$dt=file_get_contents("https://drive.google.com/get_video_info?docid=$id&el=embedded&ps=default&eurl=&gl=US&hl=en");
$x=explode("&",$dt);
$t=array(); $g=array(); $h=array();
echo "<pre>\r\n";
foreach($x as $r){
    $c=explode("=",$r);
    $n=$c[0]; $v=$c[1];
    $y=urldecode($v);
    $t[$n]=$v;
}
$streams = explode(',',urldecode($t['url_encoded_fmt_stream_map']));
foreach($streams as $dt){ 
    $x=explode("&",$dt);
    foreach($x as $r){
        $c=explode("=",$r);
        $n=$c[0]; $v=$c[1];
        $h[$n]=preg_replace("/\/[^\/]+\.(google|googlevideo)\.com/","/redirector.googlevideo.com",urldecode($v));
    }
    $g[]=$h;
}
print_r($g);

echo "\r\n</pre>";
?>