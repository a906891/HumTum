<?php

require 'vendor/autoload.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$logger = "";
$gif_width = "100";
$gif_height = "100";
$thumbnail_size = "400x400";
$interval = 5;
$thumbnail_image_name = "thumb.png";

$ffmpeg = FFMpeg\FFMpeg::create(array(
    'ffmpeg.binaries'  => 'ffmpeg/ffmpeg',
    'ffprobe.binaries' => 'ffmpeg/ffprobe',
    'timeout'          => 3600, // The timeout for the underlying process
    'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
), null);


$videoURL="1122.mp4";
$video = $ffmpeg->open($videoURL);

// Set the formats

/********************convert video to audio**************************/
$output_format = new FFMpeg\Format\Audio\Mp3(); // Here you choose your output format
$output_format->setAudioCodec("libmp3lame");

$video->save($output_format, 'audio1.mp3');
/********************end convert video to audio**************************/


/********************convert video to gif**************************/

$video
    ->gif(FFMpeg\Coordinate\TimeCode::fromSeconds(1), new FFMpeg\Coordinate\Dimension($gif_width, $gif_height), 1)
    ->save("gif.gif"); 


$video
    ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
    ->save('frame11.jpg');
    
    
/********************end convert video to gif**************************/

/********************thumbnail generate**************************/
$ffmpeg_string = 'ffmpeg/ffmpeg';  
$video_thumb = "https://apps.qboxus.com/video/1122.mp4";
$cmd = "$ffmpeg_string -i $video_thumb -deinterlace -an -ss $interval -f mjpeg -t 1 -r 1 -y -s $thumbnail_size $thumbnail_image_name 2>&1";

exec($cmd);

/********************end thumbnail generate**************************/


$video_url = "http://apps.qboxus.com/video/1122.mp4";
$cmd_new = "$ffmpeg_string -i $video_url -c:v libx265 -crf 28 output1.mp4";

exec($cmd_new);




?>