<?php

$nama_file = "video";
ignore_user_abort(true);
ini_set("max_execution_time",false);
ini_set("memory_limit","3072M");
set_time_limit(false);
$file_id = '1pnKbOlaC7yJ7kA21tPinhbkRr9LFA6QW';
$url = 'https://drive.google.com/get_video_info?docid' . $file_id;
$grab = file_get_contents($url);
parse_str($grab,$qc);
$go = explode('|',$qc['fmt_stream_map']);
unset($file_id,$url);
$ch = curl_init();
$options = array(
CURLOPT_URL=>$go[1],
CURLOPT_SSL_VERIFYPEER=>false,
CURLOPT_RETURNTRANSFER=>true,
CURLOPT_USERAGENT=>"Mozilla/5.0 (Windows NT 6.1; rv:50.0) Gecko/20100101 Firefox/50.0",
CURLOPT_ENCODING=>"",
CURLOPT_FOLLOWLOCATION=>true,
);
curl_setopt_array($ch,$options);
$q = curl_exec($ch);
$handle = fopen($nama_file,"w");
fwrite($handle,$q);
fclose($handle);
if (file_exists($nama_file)) {
header("location:".$nama_file);
}