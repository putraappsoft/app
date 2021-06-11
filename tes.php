<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, $return);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function Drive($id) {
    $o = [];
    $url = "https://drive.google.com/get_video_info?docid=$id";
    $get = curl($url);

    parse_str($get, $out);
    $data = explode(",", $out["fmt_stream_map"]);

    foreach($data as $d) {
        switch ((int)substr($d, 0, 2)) {
            case 18:
                $r = "360P";
                break;
            case 22:
                $r = "720P";
                break;
            case 37:
                $r = "1080P";
                break;
            case 59:
                $r = "480P";
                break;
            default:
                break;
        }
        $o[$r] = substr(preg_replace("/\/[^\/]+\.google\.com/","/redirector.googlevideo.com", $d), 3);
    }
    ksort($o);
    return $o;
}
$jw = Drive(1pnKbOlaC7yJ7kA21tPinhbkRr9LFA6QW);

foreach ($jw as $k => $r) {
    echo json_encode(array("file"=> $r, "type"=> "video/mp4", "label"=> $k))."\n";
