<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: audio/mpeg");

// Live stream endpoint
$stream = "https://ssl-1.stream.miriamtech.net/red-c/KYAR";

// Open a read stream
$handle = fopen($stream, "r");

// Continuously pipe audio to the client
while (!feof($handle)) {
    echo fread($handle, 8192);
    flush();
}

fclose($handle);
