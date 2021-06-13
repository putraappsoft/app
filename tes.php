<?php

function Drive($link) {
    $url = urldecode($link);
    $get = curl1($url);
    $data = explode(',["fmt_stream_map","', $get);
    $data = explode('"]', $data[1]);
    $data = str_replace(array('\u003d', '\u0026'), array('=', '&'), $data[0]);
    $data = explode(',', $data);
    asort($data);
    foreach($data as $list) {
        $data2 = explode('|', $list);
        if($data2[0] == 37) {$q1080p = preg_replace("/\/[^\/]+\.google\.com/","/redirector.googlevideo.com",$data2[1]);}    // 1080P
        if($data2[0] == 22) {$q720p = preg_replace("/\/[^\/]+\.google\.com/","/redirector.googlevideo.com",$data2[1]);}     // 720P
        if($data2[0] == 59) {$q480p = preg_replace("/\/[^\/]+\.google\.com/","/redirector.googlevideo.com",$data2[1]);}     // 480P
        if($data2[0] == 18) {$q360p = preg_replace("/\/[^\/]+\.google\.com/","/redirector.googlevideo.com",$data2[1]);}     // 360P
    }
    $js[0][0] = "$q1080p";
    $js[0][1] = "$q720p";
    $js[0][2] = "$q480p";
    $js[0][3] = "$q360p";
    $js[1][0] = "1080P";
    $js[1][1] = "720P";
    $js[1][2] = "480P";
    $js[1][3] = "360P";
    return $js;     
}
if ($jw[0][0] != "") {
    echo('{file: "'.urldecode($jw[0][0]).'",type: "video/mp4",label: "'.urldecode($jw[1][0]).'"},');
}
if ($jw[0][1] != "") {
    echo('{file: "'.urldecode($jw[0][1]).'",type: "video/mp4",label: "'.urldecode($jw[1][1]).'"},');
}   
if ($jw[0][2] != "") {
    echo('{file: "'.urldecode($jw[0][2]).'",type: "video/mp4",label: "'.urldecode($jw[1][2]).'"},');
}   
if ($jw[0][3] != "") {
    echo('{file: "'.urldecode($jw[0][3]).'",type: "video/mp4",label: "'.urldecode($jw[1][3]).'"},');
}