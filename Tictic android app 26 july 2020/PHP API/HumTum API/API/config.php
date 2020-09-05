<?php
	
    
    $logger = "";
    $gif_width = "100";
    $gif_height = "100";
    $thumbnail_size = "400x400";
    $interval = 5;
    $thumbnail_image_name = "thumb.png";
    $watermarkPath = "assets/images/logo.png";  // you can change the logo for watermark  recommended size is 100x31px
    
    $ffmpeg_lib="/usr/bin/ffmpeg";    // eg.  /usr/bin/ffmpeg
    $ffprobe_lib="/usr/bin/ffprobe"; //eg.   /usr/bin/ffprobe
    
    
    //web API path
	//eg http://domain.com/API/
	$API_path="http://domain.com/API";
	define("API_path",$API_path);
	define("ffmpeg_lib",$ffmpeg_lib);
    define("ffprobe_lib",$ffprobe_lib);
    define("watermark_Path",$watermarkPath);
    
	// check how you can get firebase server key https://i.gyazo.com/7c3f23a30c14d3008533605a9821f944.png
    define("firebase_key","firebase server key here");
    
    //dont modify this
    define("STATUS","live"); //live or demo
    define("API-KEY","4444-3333-2222-1111"); //dont change api key from here
    
    //amazon S3 configuration
    define("media_storage","local");  // if you want to enable AWS s3 then you have to put the value "s3" and if you put "local" videos will be stored in your local server/hosting
    
   //database configration
	$servername = "localhost";  // dont change this most of hosting work with "localhost" only cloud work with ip address
 	$database = "Your database name here";
 	$username = "your databaes username here";
 	$password = "Your database user password here";
	

    
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
    mysqli_query($conn,"SET SESSION sql_mode = 'NO_ENGINE_SUBSTITUTION'");
	// Check connection

	if (!$conn) {

	    die("Connection failed: " . mysqli_connect_error());

	}
   
    
	
?>