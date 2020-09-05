<?php
	
		
    if(isset($_GET["p"]))
	{
		if($_GET["p"]=="uploadVideo")
		{
			uploadVideo();
		}
		else
		if($_GET["p"]=="my_private_video")
		{
			my_private_video();
		}
		else
		if($_GET["p"]=="uploadVideo_json")
		{
			uploadVideo_json();
		}
	    else
		if($_GET["p"]=="gifupload")
		{
			gifupload();
		}
		
		else
		if($_GET["p"]=="signup")
		{
			signup();
		}
		else
		if($_GET["p"]=="showAllVideos")
		{
			showAllVideos();
		}
		else
		if($_GET["p"]=="showMyAllVideos")
		{
			showMyAllVideos();
		}
		else
		if($_GET["p"]=="likeDislikeVideo")
		{
			likeDislikeVideo();
		}
		else
		if($_GET["p"]=="postComment")
		{
			postComment();
		}
		else
		if($_GET["p"]=="showVideoComments")
		{
			showVideoComments();
		}
		else
		if($_GET["p"]=="updateVideoView")
		{
			updateVideoView();
		}
		else
		if($_GET["p"]=="allSounds")
		{
			allSounds();
		}
		else
		if($_GET["p"]=="fav_sound")
		{
			fav_sound();
		}
		else
		if($_GET["p"]=="my_FavSound")
		{
			my_FavSound();
		}
		else
		if($_GET["p"]=="my_liked_video")
		{
			my_liked_video();
		}
		else
		if($_GET["p"]=="discover")
		{
			discover();
		}
		else
		if($_GET["p"]=="edit_profile")
		{
			edit_profile();
		}
		else
		if($_GET["p"]=="follow_users")
		{
			follow_users();
		}
		else
		if($_GET["p"]=="get_user_data")
		{
			get_user_data();
		}
		else
		if($_GET["p"]=="get_followers")
		{
			get_followers();
		}
		else
		if($_GET["p"]=="get_followings")
		{
			get_followings();
		}
		else
		if($_GET["p"]=="SearchByHashTag")
		{
			SearchByHashTag();
		}
        else
		if($_GET["p"]=="DeleteSound")
		{
			DeleteSound();
		}
		else
		if($_GET["p"]=="DeleteVideo")
		{
			DeleteVideo();
		}
    	else
    	if($_GET["p"]=="sendPushNotification")
		{
			sendPushNotification();
		}
		else
    	if($_GET["p"]=="uploadImage")
		{
			uploadImage();
		}
		else
    	if($_GET["p"]=="editSoundSection")
		{
			editSoundSection();
		}
		else
    	if($_GET["p"]=="getNotifications")
		{
			getNotifications();
		}
		else
    	if($_GET["p"]=="search")
		{
			search();
		}
    	else
    	if($_GET["p"]=="downloadFile")
		{
			downloadFile();
		}
		
		
		//admin panel functions
		else
		if($_GET["p"]=="Admin_Login")
		{
			Admin_Login();
		}
		else
		if($_GET["p"]=="All_Users")
		{
			All_Users();
		}
		else
		if($_GET["p"]=="admin_all_sounds")
		{
			admin_all_sounds();
		}
		else
		if($_GET["p"]=="admin_uploadSound")
		{
			admin_uploadSound();
		}
		else
		if($_GET["p"]=="admin_getSoundSection")
		{
			admin_getSoundSection();
		}
		else
		if($_GET["p"]=="admin_show_allVideos")
		{
			admin_show_allVideos();
		}
		else
		if($_GET["p"]=="admin_addSection")
		{
			admin_addSection();
		}
		else
		if($_GET["p"]=="DeleteSoundSectino")
		{
			DeleteSoundSectino();
		}
		else
		if($_GET["p"]=="all_discovery_sections")
		{
			all_discovery_sections();
		}
		else
		if($_GET["p"]=="deleteSection")
		{
			deleteSection();
		}
		else
		if($_GET["p"]=="assignSection")
		{
			assignSection();
		}
		else
		if($_GET["p"]=="blockUser")
		{
			blockUser();
		}
		else
		if($_GET["p"]=="getSingleSectionDetails")
		{
			getSingleSectionDetails();
		}
		else
		if($_GET["p"]=="addVideointoDiscovry")
		{
			addVideointoDiscovry();
		}
		else
		if($_GET["p"]=="discovery_sections_edit")
		{
			discovery_sections_edit();
		}
		else
		if($_GET["p"]=="add_discovery_Section")
		{
			add_discovery_Section();
		}
		else
		if($_GET["p"]=="delete_discovery_Section")
		{
			delete_discovery_Section();
		}
		else
		if($_GET["p"]=="changePassword")
		{
			changePassword();
		}
		else
		if($_GET["p"]=="allProfileVerification")
		{
			allProfileVerification();
		}
		else
		if($_GET["p"]=="updateVerificationStatus")
		{
			updateVerificationStatus();
		}
		else
		if($_GET["p"]=="getVerified")
		{
			getVerified();
		}
	
	}
	else
	{
		echo ServerStatus();
	}
	
	
	function ServerStatus()
	{
	   
	   require_once("config.php");
	   if (isset($_GET["action"])) 
	   {
            // if ($_GET["action"]=="setupDatabase") 
            // {
            //     $data = [
            //         "code" => "200"
            //     ];
            //     $baseurl = $_POST['firebaseURL'];
            //     $jsondata = curlsingle_request($data, $baseurl);
                
                
            //     $returnCode=$jsondata['code'];
            //     $firebaseURL_return="201";
            //     if($returnCode=="200")
            //     {
            //         $firebaseURL_return="200";
            //     }
            //     else
            //     {
            //         die();
            //     }
                
            //     $servername =  $_POST['hostname'];
            //     $username =  $_POST['username'];
            //     $password =  $_POST['password'];
            //     $database =  $_POST['database'];
            
            //     $conn = @mysqli_connect($servername, $username, $password, $database);
            //     // Check connection
            //     if (!$conn) 
            //     {
            //         echo mysqli_connect_error();
            //         die();
            //     }
            //     else
            //     {
                    
            //         $search_servername_string = '$servername = "server_name";';
            //         $replace_servername_string = '$servername = "' . $_POST["servername"] . '";';
            
            //         $search_database_string = '$database = "database_name";';
            //         $replace_database_string = '$database = "' . $_POST["database"] . '";';
            
            
            //         $search_username_string = '$username = "database_username";';
            //         $replace_username_string = '$username = "' . $_POST["username"] . '";';
            
            
            //         $search_password_string = '$password = "database_password";';
            //         $replace_password_string = '$password = "' . $_POST["password"] . '";';
                    
            //         $search_firebaseURL_string = '$firebaes_Databaes_URL = "firebaseURL";';
            //         $replace_firebaseURL_string = '$firebaes_Databaes_URL = "' . $_POST["firebaseURL"] . '";';
                    
            //         $search_firebase_key_string = 'define("firebase_key","firebase_key");';
            //         $replace_firebase_key_string = '$firebaes_firebase_key = "' . $_POST["firebase_key"] . '";';
                    
            
            //         $path_to_file = 'config.php';
            //         $file_contents = file_get_contents($path_to_file);
                    
            //         $file_contents = str_replace($search_servername_string, "$replace_servername_string", $file_contents);
            //         $file_contents = str_replace($search_database_string, "$replace_database_string", $file_contents);
            //         $file_contents = str_replace($search_username_string, "$replace_username_string", $file_contents);
            //         $file_contents = str_replace($search_password_string, "$replace_password_string", $file_contents);
            //         $file_contents = str_replace($search_firebaseURL_string, "$replace_firebaseURL_string", $file_contents);
            //         $file_contents = str_replace($search_firebase_key_string, "$replace_firebase_key_string", $file_contents);
            
            //         file_put_contents($path_to_file, $file_contents);
            
            //         echo "<script>window.location='index.php?action=success'</script>";
            //     }
            // }
            
        }   
	    
	    
	    ?>
	        <!DOCTYPE html>
            <html>
            <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <script src="jquery-1.12.4.js"></script>
                <title>Qboxus - Server Requirements</title>
                <style>
                    body {
                        padding-top: 18px;
                        font-family: sans-serif;
                        background: #f9fafb;
                        font-size: 14px;
                    }
            
                    #container {
                        width: 600px;
                        margin: 0 auto;
                        background: #fff;
                        border-radius: 10px;
                        padding: 15px;
                        border: 2px solid #f0f0f0;
                        -webkit-box-shadow: 0px 1px 15px 1px rgba(90, 90, 90, 0.08);
                        box-shadow: 0px 1px 15px 1px rgba(90, 90, 90, 0.08);
                    }
            
                    a {
                        text-decoration: none;
                        color: red;
                    }
            
                    h1 {
                        text-align: center;
                        color: #424242;
                        border-bottom: 1px solid #e4e4e4;
                        padding-bottom: 25px;
                        font-size: 22px;
                        font-weight: normal;
                    }
            
                    table {
                        width: 100%;
                        padding: 10px;
                        border-radius: 3px;
                    }
            
                    table thead th {
                        text-align: left;
                        padding: 5px 0px 5px 0px;
                    }
            
                    table tbody td {
                        padding: 5px 0px;
                    }
            
                    table tbody td:last-child, table thead th:last-child {
                        text-align: right;
                    }
            
                    .label {
                        padding: 3px 10px;
                        border-radius: 4px;
                        color: #fff;
            
                    }
            
                    .label.label-success {
                        background: #4ac700;
                        padding: 4px 22px;
                        font-weight: 500;
                    }
            
                    .label.label-warning {
                        background: #dc2020;
                    }
            
            
                    .logo {
                        margin-bottom: 30px;
                        margin-top: 20px;
                        display: block;
                    }
            
                    .logo img {
                        margin: 0 auto;
                        display: block;
                        border-radius: 50%;
                    }
            
                    .newform label {
                        width: 100%;
                        display: block;
                        font-size: 15px;
                        margin: 10px 0px;
                    }
            
                    .newform input {
                        width: 100%;
                        border: 1px solid #ccc;
                        height: 27px;
                        border-radius: 3px;
                        padding: 4px 0px;
                    }
            
                    .arrange {
                        text-align: right;
                    }
            
                    .newbtnn {
                        border: none;
            
                        padding: 10px;
                        height: unset !important;
                        cursor: pointer;
            
                    }
            
                    .step {
                        margin: 10px 0px;
                        display: block;
                        text-align: right;
                        width: 100.7%;
                    }
            
                    #validating {
                        width: unset;
                        border: 0;
                    }
            
                    .scene {
                        width: 100%;
                        height: 100%;
                        perspective: 600px;
                        display: -webkit-box;
                        display: -moz-box;
                        display: -ms-flexbox;
                        display: -webkit-flex;
                        display: flex;
                        align-items: center;
                        justify-content: center;
            
                    svg {
                        width: 240px;
                        height: 240px;
                    }
            
                    }
            
                    @keyframes arrow-spin {
                        50% {
                            transform: rotateY(360deg);
                        }
                    }
                </style>
            </head>
            <body>
            <div id="container">
                <div class="logo">
                    <a href="#">
                        <img width="80px"
                             src=" data:image/jpeg;base64,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"></a>
                </div>
                <?php
                    
                    $error = false;
                    $data = [];
                    $PHP_VERSION = PHP_VERSION;
                    
                    $servername =  $servername;
                    $username =  $username;
                    $password =  $password;
                    $database =  $database;
                
                    $conn = mysqli_connect($servername, $username, $password, $database);

                	// Check connection
                
                    if ($conn) 
                    {
                        $requirement0 = "<span class='label label-success'>Enabled</span>";
                        $data['require0'] = 1;
                    }
                    else {
                        $error = true;
                        $error=mysqli_connect_error();
                        $requirement0 = '<span class="label label-warning">Failed</span>';
                    }
                    
                    if($firebaseURL_return=="200")
                    {
                        $requirement_firebase = "<span class='label label-success'>Enabled</span>";
                        $data['require_requirement_firebase'] = 1;
                    }
                    else
                    {
                        $error = true;
                        $requirement_firebase = '<span class="label label-warning">Failed</span>';
                    }
                    
                    if ($PHP_VERSION >= 7 && $PHP_VERSION < 7.1) {
                        $requirement1 = "<span class='label label-success'>v." . PHP_VERSION . '</span>';
                        $data['require1'] = 1;
                    } else {
                        $error = true;
                        $requirement1 = "<span class='label label-success'>Your PHP version is " . $PHP_VERSION . '</span>';
                    }
            
                    if (!extension_loaded('tokenizer')) {
                        $error = true;
                        $requirement2 = "<span class='label label-warning'>Error</span>";
            
                    } else {
                        $requirement2 = "<span class='label label-success'>Enabled</span>";
                        $data['require2'] = 1;
                    }
            
                    if (!extension_loaded('pdo')) {
                        $error = true;
                        $requirement3 = "<span class='label label-warning'>Error</span>";
                    } else {
                        $requirement3 = "<span class='label label-success'>Enabled</span>";
                        $data['require3'] = 1;
                    }
            
                    if (!extension_loaded('curl')) {
                        $error = true;
                        $requirement4 = "<span class='label label-warning'>Error</span>";
                    } else {
                        $requirement4 = "<span class='label label-success'>Enabled</span>";
                        $data['require4'] = 1;
                    }
            
                    if (!extension_loaded('openssl')) {
                        $error = true;
                        $requirement5 = "<span class='label label-warning'>Error</span>";
                    } else {
                        $requirement5 = "<span class='label label-success'>Enabled</span>";
                        $data['require5'] = 1;
                    }
            
                    if (!extension_loaded('mbstring')) {
                        $error = true;
                        $requirement6 = "<span class='label label-warning'>Error</span>";
                    } else {
                        $requirement6 = "<span class='label label-success'>Enabled</span>";
                        $data['require6'] = 1;
                    }
            
                    if (!extension_loaded('ctype') && !function_exists('ctype')) {
                        $error = true;
                        $requirement7 = "<span class='label label-warning'>Error</span>";
                    } else {
                        $requirement7 = "<span class='label label-success'>Enabled</span>";
                        $data['require7'] = 1;
                    }
            
            
                    if (!extension_loaded('gd')) {
                        $error = true;
                        $requirement9 = "<span class='label label-warning'>Error</span>";
                    } else {
                        $requirement9 = "<span class='label label-success'>Enabled</span>";
                        $data['require8'] = 1;
                    }
            
                    if (!extension_loaded('zip')) {
                        $error = true;
                        $requirement10 = "<span class='label label-warning'>Error</span>";
                    } else {
                        $requirement10 = "<span class='label label-success'>Enabled</span>";
                        $data['require9'] = 1;
                    }
            
                    $url_f_open = ini_get('allow_url_fopen');
                    if ($url_f_open != "1" && $url_f_open != 'On') {
                        $error = true;
                        $requirement11 = "<span class='label label-warning'>Error</span>";
                    } else {
                        $requirement11 = "<span class='label label-success'>Enabled</span>";
                        $data['require10'] = 1;
                    }
                    
                    
                    //check shell
                    $cmd_new = "ls";
                    exec($cmd_new,$output);
                    
                    if(count($output)!="")
                    {
                        $shell = "<span class='label label-success'>Enabled</span>";
                    }
                    else
                    {
                        $shell = "<span class='label label-warning'>You have to enable exec , shell_exec() from your server</span>";
                    }
                    
                    if(media_storage=="s3")
                    {   
                        $S3_return=@uploadS3("assets/images/test.jpg","");
                        
                        $curl = curl_init();
                        
                        $URL=$S3_return;
                        curl_setopt_array($curl, array(
                            CURLOPT_URL => $URL,
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_ENCODING => "",
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 0,
                            CURLOPT_FOLLOWLOCATION => true,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => "GET",
                            CURLOPT_POSTFIELDS =>"",
                            CURLOPT_HTTPHEADER => array(
                            "Content-Type: application/json"
                            ),
                        ));
                        
                        $response = curl_exec($curl);
                        
                        curl_close($curl);
                      
                      
                       
                        if(s3_Error=="NoSuchBucket")
                        {
                            $s3 = "<span class='label label-warning'>NoSuchBucket</span>";
                        }
                        else
                        if(strpos($response,"AccessDenied")=="")
                        {
                            $s3 = "<span class='label label-success'><a href='$URL' target='_blank' style='color:white;'>View Image</a></span>";
                        }
                        else
                        {
                            $s3 = "<span class='label label-warning'>Please make your directory public in aws</span>";
                        }
                    }
                    
                    
                    $ffmpeg = trim(shell_exec('ffmpeg -version'));
                    $ffmpeg = explode(" ",$ffmpeg);
                    $ffmpeg="<span class='label label-success'>".$ffmpeg[2]."</span>"; 
                    
                    $upload_max_size = ini_get('upload_max_filesize');
                    $size =  str_replace("M","","$upload_max_size");
                    if($size > 100)
                    {
                        $upload_max_filesize = "<span class='label label-success'>upload_max_filesize is Ok</span>";
                    }
                    else
                    {
                        $upload_max_filesize = "<span class='label label-warning'>upload_max_filesize must a more then 100M</span>";
                    }
                    
                    
                    $upload_max_size = ini_get('post_max_size');
                    $size =  str_replace("M","","$upload_max_size");
                    if($size > 100)
                    {
                        $post_max_size = "<span class='label label-success'>post_max_size is Ok</span>";
                    }
                    else
                    {
                        $post_max_size = "<span class='label label-warning'>post_max_size must a more then 100M</span>";
                    }
                    
                    ?>
            
                    <h1>Server Requirements</h1>
            
                    <table class="table table-hover" id="requirements">
                        <thead>
                        <tr>
                            <th>Requirements</th>
                            <th>Result</th>
                        </tr>
                        </thead>
            
                        <tr>
                            <td>PHP Version</td>
                            <td><?php echo $requirement1; ?></td>
                        </tr>
                        <tr>
                            <td>Database Connection</td>
                            <td><?php echo $requirement0; ?></td>
                        </tr>
                        <tr>
                            <td>TOKENIZER</td>
                            <td><?php echo $requirement2; ?></td>
                        </tr>
                        <tr>
                            <td>PDO PHP Extension</td>
                            <td><?php echo $requirement3; ?></td>
                        </tr>
                        <tr>
                            <td>cURL PHP Extension</td>
                            <td><?php echo $requirement4; ?></td>
                        </tr>
                        <tr>
                            <td>OpenSSL PHP Extension</td>
                            <td><?php echo $requirement5; ?></td>
                        </tr>
                        <tr>
                            <td>MBString PHP Extension</td>
                            <td><?php echo $requirement6; ?></td>
                        </tr>
            
            
                        <tr>
                            <td>GD PHP Extension</td>
                            <td><?php echo $requirement9; ?></td>
                        </tr>
                        <tr>
                            <td>Zip PHP Extension</td>
                            <td><?php echo $requirement10; ?></td>
                        </tr>
                        <tr>
                            <td>allow_url_fopen</td>
                            <td><?php echo $requirement11; ?></td>
                        </tr>
                        
                        <tr>
                            <td>exec , shell_exec()</td>
                            <td><?php echo $shell; ?></td>
                        </tr>
                        
                        <?php
                            if(media_storage=="s3")
                            {
                                 ?>
                                    <tr>
                                        <td>AWS S3 Bucket Permission</td>
                                        <td><?php echo $s3; ?></td>
                                    </tr>
                                <?php
                            }
                           
                        ?>
                        
                        <tr>
                            <td>ffmpeg Version</td>
                            <td><?php echo $ffmpeg; ?></td>
                        </tr>
                        
                        <tr>
                            <td>upload_max_filesize</td>
                            <td><?php echo $upload_max_filesize; ?></td>
                        </tr>
                        
                        <tr>
                            <td>post_max_size</td>
                            <td><?php echo $post_max_size; ?></td>
                        </tr>
            
                    </table>
                    
                    <div>
                        <?php 
                            $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
                            $actual_link=str_replace("index.php",'',$actual_link);
                            
                            if(STATUS=="live")
                            {
                                
                                ?>
                                    <h3>API URL</h3>
                                    <hr style="color: #80808012;">
                            
                                    <span>Android APP</span>
                                    <p style="margin: 13px 0 8px 0;"><?php echo $actual_link; ?></p>
                            
                                    <br>
                                    <hr style="color: #80808012;">
                                    <span>Admin Panel</span>
                                    <p style="margin: 13px 0 8px 0;">
                                            
                                    </p>
                                    
                                    <span style="font-size: 11px;color: grey;">* You have to replace this same code in your admin panel "config.php" </span>
                                    <br><br>
                                    <span>Example</span>
                                    <br><br>
                                    <code style="background: #e8e8e8;padding: 5px 7px;border-radius: 3px;">
                                        $baseurl = "<?php echo $actual_link; ?>";
                                    </code>
                            
                                <?php
                                
                            }
                            
                        ?>
                        
                
                    </div>
            
                    
            </div>
        
            </body>
            </html>

	    <?php
	}
	
	
	function sendPushNotificationToMobileDevice($data)
	{
        require_once("config.php");
        $key=firebase_key;
      
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "authorization: key=".$key."",
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: 85f96364-bf24-d01e-3805-bccf838ef837"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) 
        {
           // print_r($err);
        } 
        else 
        {
            //print_r($response);
        }

    }
	
	function checkVideoUrl($url)
	{
	    require_once("config.php");
	    
	    $aws=strpos($url,'amazonaws');
	    $cloudfront=strpos($url,'cloudfront');
	    if($aws==true)
	    {
	        if(STATUS=="demo")
	        {
	            $replace=str_replace("https://tictic-videos.s3.ap-south-1.amazonaws.com/","http://d1eq4oei2752cy.cloudfront.net/",$url);
	            return $replace;
	        }
	        else
	        {
	            return $url;
	        }
	    }
	    else
	    {
	        return API_path."/".$url;
	    }
	}
	
	function checkProfileURL($url)
	{
	    require_once("config.php");
	    
	    
	    $checkImageURL=strpos($url,'.com');
	    if($checkImageURL==true)
	    {
	        return $url;
	    }
	    else
	    if($url=="null")
	    {
	        return "null";
	    }
	    else
	    {
	        return API_path."/".$url;
	    }
	}
	
    			
    			
	function signup()
	{
		require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		//get headers
// 		$headers = apache_request_headers();
	    
// 	    $header_device = $headers['Device'];
// 	    $header_version = $headers['Version'];
// 	    $header_tokon = $headers['Tokon'];
// 	    $header_deviceid = $headers['Deviceid'];
	    //get headers
	    
		if(isset($event_json['fb_id']) && isset($event_json['first_name']) && isset($event_json['last_name']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$first_name=htmlspecialchars(strip_tags($event_json['first_name'] , ENT_QUOTES));
			$last_name=htmlspecialchars(strip_tags($event_json['last_name'] , ENT_QUOTES));
			$gender=htmlspecialchars(strip_tags($event_json['gender'] , ENT_QUOTES));
			$profile_pic=htmlspecialchars_decode(stripslashes($event_json['profile_pic']));
			$image=$event_json['image']['file_data'];
			$version=htmlspecialchars_decode(stripslashes($event_json['version']));
			$device=htmlspecialchars_decode(stripslashes($event_json['device']));
			$signup_type=htmlspecialchars_decode(stripslashes($event_json['signup_type']));
		    $username=$first_name.rand();
		    
			$log_in="select * from users where fb_id='".$fb_id."' ";
			$log_in_rs=mysqli_query($conn,$log_in);
			
			$get_device_tkon="select * from device_tokon where fb_id='".$fb_id."' and phone_id='".$header_deviceid."' ";
			$get_device_tkon1=mysqli_query($conn,$get_device_tkon);
			$dvice_tokon=mysqli_fetch_object($get_device_tkon1);
			
			if(mysqli_num_rows($log_in_rs))
			{   
			    $rd=mysqli_fetch_object($log_in_rs);  
			     
				if($rd->block=='0')
				{
					$array_out = array();
					 $array_out[] = 
						//array("code" => "200");
						array(
							"fb_id" => $rd->fb_id,
							"action" => "login",
							"profile_pic" => checkProfileURL($rd->profile_pic),
							"first_name" => $rd->first_name,
							"last_name" => $rd->last_name,
							"username" => "@".$rd->username,
							"verified" => $rd->verified,
							"bio" => $rd->bio,
							"gender" => $rd->gender,
							"tokon" => $dvice_tokon->tokon
						);
					
					$output=array( "code" => "200", "msg" => $array_out);
					print_r(json_encode($output, true));
				}
				else
				{
					$array_out = "error in login";
					$output=array( "code" => "201", "msg" => $array_out);
					print_r(json_encode($output, true));
				}
				
			}	
			else
			{
			    
    		    $fileName=$fb_id."_".rand();
    			$imageURl="upload/images/".$fileName.".jpg";
    			
    			$image = base64_decode($image);
    			file_put_contents($imageURl, $image);
    			
			    $qrry_1="insert into users(fb_id,username,first_name,last_name,profile_pic,version,device,signup_type,gender)values(";
    			$qrry_1.="'".$fb_id."',";
    			$qrry_1.="'".$username."',";
    			$qrry_1.="'".$first_name."',";
    			$qrry_1.="'".$last_name."',";
    			$qrry_1.="'".$imageURl."',";
    			$qrry_1.="'".$version."',";
    			$qrry_1.="'".$device."',";
    			$qrry_1.="'".$signup_type."',";
    			$qrry_1.="'".$gender."'";
    			$qrry_1.=")";
    			if(mysqli_query($conn,$qrry_1))
    			{
				     $last_insert_fb_id = mysqli_insert_id($conn);
				     
				    //register tokon
				    $tokon=time().rand();
				    $qrry_1="insert into device_tokon(fb_id,tokon,phone_id)values(";
        			$qrry_1.="'".$fb_id."',";
        			$qrry_1.="'".$tokon."',";
        			$qrry_1.="'".$header_deviceid."'";
        			$qrry_1.=")";
        			mysqli_query($conn,$qrry_1);
        			//register tokon
        			
				     $array_out = array();
    				 $array_out[] = 
    					//array("code" => "200");
    					array(
    						"fb_id" => $fb_id,
    						"username" => "@".$username,
    						"action" => "signup",
    						"profile_pic" => $profile_pic,
    						"first_name" => $first_name,
    						"last_name" => $last_name,
    						"signup_type" => $signup_type,
    						"gender" => $gender,
    						"tokon" => $tokon
    					);
    				
    				$output=array( "code" => "200", "msg" => $array_out);
    				print_r(json_encode($output, true));
    			}
    			else
    			{
    			    //echo mysqli_error();
    			    $array_out = array();
    					
            		 $array_out[] = 
            			array(
            			"response" =>"problem in signup");
            		
            		$output=array( "code" => "201", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
			}
			
			
			
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing 1");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	function uploadImage()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		//0= owner  1= company 2= ind mechanic
		
		if(isset($event_json['fb_id']) && isset($event_json['image']) )
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			//$image_link=stripslashes(strip_tags($event_json['image_link']));
		    
		    $image=$event_json['image']['file_data'];
		    
		    $fileName=$fb_id."_".rand();
			$imageURl="upload/images/".$fileName.".jpg";
			
			$image = base64_decode($image);
			file_put_contents($imageURl, $image);
			
			$qrry_1="select * from users WHERE fb_id ='".$fb_id."' ";
			$log_in_rs=mysqli_query($conn,$qrry_1);
			
			if(mysqli_num_rows($log_in_rs))
			{
			    $rd=mysqli_fetch_object($log_in_rs);
			   	
			    $qrry_1="update users SET profile_pic ='".$imageURl."' WHERE fb_id ='".$fb_id."' ";
    			if(mysqli_query($conn,$qrry_1))
    			{
    			    $array_out = array();
    					
            		 $array_out[] = 
            			array(
                			"first_name" => utf8_encode($rd->first_name),
                			"last_name" => utf8_encode($rd->last_name),
                			"profile_pic" => checkProfileURL($imageURl),
                			"username" => utf8_encode("@".$rd->username),
                			"verified" => $rd->verified,
                			"bio" => utf8_encode($rd->bio),
                			"gender" => $rd->gender,
            		    );
            		
            		$output=array( "code" => "200", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
    			else
    			{
    			    $array_out = array();
    					
            		 $array_out[] = 
            			array(
            			"response" =>"problem in uploading");
            		
            		$output=array( "code" => "201", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
			}   
	    	
			
			
			
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing 2");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	function gifupload()
	{
	            //giffimage
	            
				require_once("config.php");
        		$input = file_get_contents("php://input");
        	    $event_json = json_decode($input,true);
        	   
        	    //print_r($event_json);
        	    $gif1 = $event_json['giffimage']['file_data'];
        	    
        	    
        	    $event_json['giffimage'];
        	    //print_r($event_json['fb_id']);
        	    
        	    $gif = base64_decode($gif1);
			    
			    
			      $fileName="hamza".rand();
			 
			
		    	file_put_contents("upload/gif/".$fileName.".gif", $gif);
			    
			


	}
	
	function uploadVideo()
	{
	    require 'video_editor/vendor/autoload.php';
	    require_once("config.php");
		//$input = @file_get_contents("php://input");
	    //$event_json = json_decode($input,true);
		//print_r($event_json);
		
		$ffmpeg = FFMpeg\FFMpeg::create(array(
            'ffmpeg.binaries'  => ffmpeg_lib,
            'ffprobe.binaries' => ffprobe_lib,
            'timeout'          => 3600, // The timeout for the underlying process
            'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
        ), null);
        $ffmpeg_string = ffmpeg_lib;
        $ffprobe_lib = ffprobe_lib;
        
        
		//checkTokon();
		//&& isset($event_json['picbase64'])  && isset($event_json['videobase64'])
		if(isset($_POST['fb_id']))
		{   
		    $fb_id=htmlspecialchars(strip_tags($_POST['fb_id'] , ENT_QUOTES));
		    $description=htmlspecialchars(strip_tags($_POST['description'] , ENT_QUOTES));
		    $sound_id=htmlspecialchars(strip_tags($_POST['sound_id'] , ENT_QUOTES));
		    
		    $privacy_type=htmlspecialchars(strip_tags($_POST['privacy_type'] , ENT_QUOTES));
		    $allow_comments=htmlspecialchars(strip_tags($_POST['allow_comments'] , ENT_QUOTES));
		    
		    if($privacy_type=="")
		    {
		        $privacy_type="public";
		    }
		    
		    if($allow_comments=="")
		    {
		        $allow_comments="true";
		    }
		    
		    //$thum = $event_json['picbase64']['file_data'];
		    //$video = $event_json['videobase64']['file_data'];
		    //$gif = $event_json['gifbase64']['file_data'];
            
            $fileName=time()."_".rand();
			$video_url="upload/video/".$fileName.".mp4";
			$thum_url="upload/thum/".$fileName.".jpg";
			$gif_url="upload/gif/".$fileName.".gif";
			
			/*list($type, $data) = explode(',', $data);
			list(, $data)      = explode(',', $data);*/
			
			
			//convert video from base64 and store into temp
			$tempName=time().rand();
			$orignalVideoPath = "tmp/".$tempName.".mp4";
            
            if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $orignalVideoPath)) 
            {
                //echo "success";
            } 
            else
            {
                die();
            }
            
			/********************optimize video size**************************/
			    $cmd ="$ffprobe_lib -i $orignalVideoPath -show_streams -select_streams a -loglevel error";
                exec($cmd,$output);
                if(count($output)>0)
                {
                    $optimizeResultFile = "tmp/".$fileName."_optimize.mp4";
        	        $cmd_new = "$ffmpeg_string -i $orignalVideoPath -c:v libx264 -crf 28 $optimizeResultFile";
                    exec($cmd_new); 
                }
                else
                {
                    $optimizeResultFile=$orignalVideoPath;
                }
			/********************optimize video size**************************/         
			
			/********************convert video to audio**************************/
                
                if($sound_id=="null")
                {
                    $cmd ="$ffprobe_lib -i $optimizeResultFile -show_streams -select_streams a -loglevel error";
                    exec($cmd,$output);
                    if(count($output)>0)
                    {   
                        $query1=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
		                $rd=mysqli_fetch_object($query1);
		                $soundName="Orignal Sound - ".$rd->first_name;
		                
                        $qrry_1="insert into sound(sound_name,description,section,uploaded_by,thum)values(";
                        $qrry_1.="'$soundName',";
                        $qrry_1.="'',";
                        $qrry_1.="'',";
                        $qrry_1.="'$fb_id',";
                        $qrry_1.="''";
                        $qrry_1.=")";
                        if(mysqli_query($conn,$qrry_1))
                        {   
                            $video = $ffmpeg->open($optimizeResultFile);
                        
                            $output_format = new FFMpeg\Format\Audio\Mp3(); // Here you choose your output format
                            $output_format->setAudioCodec("libmp3lame");
                            
                            //generate mp3 file
                                $generateMP3FromVideo = "tmp/".$fileName.".mp3";
                                $video->save($output_format, $generateMP3FromVideo);
                            //generate mp3 file
                            
                            //convert mp3 file into aac
                                $generateAacFromMp3 = "tmp/".$fileName.".aac";
                                $command_new = "$ffmpeg_string -i $generateMP3FromVideo -c:a aac -b:a 192k $generateAacFromMp3";
                                exec($command_new);
                            //convert mp3 file into aac
                            
                            //copy aac file into sound folder
                                $insert_id=mysqli_insert_id($conn);
                                @copy($generateAacFromMp3,'upload/audio/'.$insert_id.'.aac');
                            //copy aac file into sound folder
                            $sound_id=$insert_id;
                        }
                        
                    }
                    else
                    {
                        $sound_id="null";
                    }
                }
            
            /********************end convert video to audio**************************/
			
			/********************generate jpg from video**************************/
                 
                 $video = $ffmpeg->open($orignalVideoPath);
                 
                 $generateJpg = "tmp/".$fileName.".jpg";
                 $video
                    ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(2))
                    ->save($generateJpg);
                // //upload jpg on s3
                //  
                 
            /********************generate jpg from video**************************/
             
            /********************generate gif from the video file and upload on aws s3**************************/
                
                $video = $ffmpeg->open($orignalVideoPath);
                $genrateGif = "tmp/".$fileName.".gif";
                
                $video
                ->gif(FFMpeg\Coordinate\TimeCode::fromSeconds(1), new FFMpeg\Coordinate\Dimension($gif_width, $gif_height), 1)
                ->save($genrateGif);
                
            /********************generate gif from the video file and upload on aws s3**************************/ 
                
			if(media_storage=="s3")
			 {  
			    
			    if(is_numeric($sound_id))
                {
                        //generate video with out any sound
                            $generateNoSoundVideo="tmp/".$fileName."noSound.mp4";
                            $without_audio = "$ffmpeg_string -i $optimizeResultFile -c copy -an $generateNoSoundVideo";
                            exec($without_audio);
                        //generate video with out any sound
                        
                        //merge sound and save video
                            $margeVideoWithSound= "tmp/".$fileName."withSound.mp4";
                            $soundFile="upload/audio/".$sound_id.".aac";
                            $cmd_new = "$ffmpeg_string -i $generateNoSoundVideo -i $soundFile -c:v copy -c:a aac -shortest $margeVideoWithSound";
                            exec($cmd_new);
                        //merge sound and save video
                         
                        //upload video on AWS S3
                        $video_url=uploadS3($margeVideoWithSound,"videos"); 
                        
                        @unlink($generateNoSoundVideo);
                        @unlink($margeVideoWithSound);
                }
                else
                {
                    //upload files on aws s3
                    $video_url=uploadS3($optimizeResultFile,"videos");
                }
                   
                //upload jpg on aws s3
                $thum_url=uploadS3($generateJpg,"thum");
                
                //upload gif on aws s3
                $gif_url=uploadS3($genrateGif,"gif");
                 
                //delete file from temp
                @unlink($orignalVideoPath);
                @unlink($generateJpg);
                @unlink($genrateGif);
                @unlink($optimizeResultFile);
                 
             }
			 else
			 if(media_storage=="local")
			 {  
			     @copy($optimizeResultFile,$video_url);
			     @copy($generateJpg,$thum_url);
			     @copy($genrateGif,$gif_url);
			 }
			 
			 
		    $qrry_1="insert into videos(description,video,sound_id,fb_id,gif,privacy_type,allow_comments,thum)values(";
			$qrry_1.="'".$description."',";
			$qrry_1.="'".$video_url."',";
			$qrry_1.="'".$sound_id."',";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$gif_url."',";
			$qrry_1.="'".$privacy_type."',";
			$qrry_1.="'".$allow_comments."',";
			$qrry_1.="'".$thum_url."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
			   $array_out = array();
    			$array_out[] = 
    				array(
    					"response" => "file uploaded"
    				);
    			
    			$output=array( "code" => "200", "msg" => $array_out);
    			print_r(json_encode($output, true)); 
			}
			else
			{
			    $array_out = array();
    			$array_out[] = 
    				array(
    					"response" => "error in uploading files"
    				);
    			
    			$output=array( "code" => "201", "msg" => $array_out);
    			print_r(json_encode($output, true)); 
			}
			
			
			
			
		}
		else
		{
			$array_out = array();
			$array_out[] = 
				array(
					"response" => "json parem missing 3"
				);
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	
	}
	
	function uploadVideo_json()
	{
	    require 'video_editor/vendor/autoload.php';
	    require_once("config.php");
		$input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
	    //	print_r($event_json);
		
		$ffmpeg = FFMpeg\FFMpeg::create(array(
            'ffmpeg.binaries'  => ffmpeg_lib,
            'ffprobe.binaries' => ffprobe_lib,
            'timeout'          => 3600, // The timeout for the underlying process
            'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
        ), null);
        $ffmpeg_string = ffmpeg_lib;
        $ffprobe_lib = ffprobe_lib;
        
        
		//checkTokon();
		//&& isset($event_json['picbase64'])  && isset($event_json['videobase64'])
		if(isset($event_json['fb_id']))
		{   
		    $fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		    $description=htmlspecialchars(strip_tags($event_json['description'] , ENT_QUOTES));
		    $sound_id=htmlspecialchars(strip_tags($event_json['sound_id'] , ENT_QUOTES));
		    
		    $privacy_type=htmlspecialchars(strip_tags($event_json['privacy_type'] , ENT_QUOTES));
		    $allow_comments=htmlspecialchars(strip_tags($event_json['allow_comments'] , ENT_QUOTES));
		    
		    if($privacy_type=="")
		    {
		        $privacy_type="public";
		    }
		    
		    if($allow_comments=="")
		    {
		        $allow_comments="true";
		    }
		    
		    
		    
		    //$thum = $event_json['picbase64']['file_data'];
		    $video = $event_json['videobase64']['file_data'];
		    //$gif = $event_json['gifbase64']['file_data'];
            
            $fileName=time()."_".rand();
			$video_url="upload/video/".$fileName.".mp4";
			$thum_url="upload/thum/".$fileName.".jpg";
			$gif_url="upload/gif/".$fileName.".gif";
			
			/*list($type, $data) = explode(',', $data);
			list(, $data)      = explode(',', $data);*/
			
			
			$video = base64_decode($video);
			$orignalVideoPath = "tmp/".$fileName.".mp4";
	        file_put_contents($orignalVideoPath, $video);
	       
			/********************optimize video size**************************/
			    $cmd ="$ffprobe_lib -i $orignalVideoPath -show_streams -select_streams a -loglevel error";
                exec($cmd,$output);
                if(count($output)>0)
                {
                    $optimizeResultFile = "tmp/".$fileName."_optimize.mp4";
        	        $cmd_new = "$ffmpeg_string -i $orignalVideoPath -c:v libx264 -crf 28 $optimizeResultFile";
                    exec($cmd_new); 
                }
                else
                {
                    $optimizeResultFile=$orignalVideoPath;
                }
			/********************optimize video size**************************/         
			
			/********************convert video to audio**************************/
                
                if($sound_id=="null")
                {
                    $cmd ="$ffprobe_lib -i $optimizeResultFile -show_streams -select_streams a -loglevel error";
                    exec($cmd,$output);
                    if(count($output)>0)
                    {
                        $qrry_1="insert into sound(sound_name,description,section,uploaded_by,thum)values(";
                        $qrry_1.="'',";
                        $qrry_1.="'',";
                        $qrry_1.="'',";
                        $qrry_1.="'$fb_id',";
                        $qrry_1.="''";
                        $qrry_1.=")";
                        if(mysqli_query($conn,$qrry_1))
                        {   
                            $video = $ffmpeg->open($optimizeResultFile);
                        
                            $output_format = new FFMpeg\Format\Audio\Mp3(); // Here you choose your output format
                            $output_format->setAudioCodec("libmp3lame");
                            
                            //generate mp3 file
                                $generateMP3FromVideo = "tmp/".$fileName.".mp3";
                                $video->save($output_format, $generateMP3FromVideo);
                            //generate mp3 file
                            
                            //convert mp3 file into aac
                                $generateAacFromMp3 = "tmp/".$fileName.".aac";
                                $command_new = "$ffmpeg_string -i $generateMP3FromVideo -c:a aac -b:a 192k $generateAacFromMp3";
                                exec($command_new);
                            //convert mp3 file into aac
                            
                            //copy aac file into sound folder
                                $insert_id=mysqli_insert_id($conn);
                                @copy($generateAacFromMp3,'upload/audio/'.$insert_id.'.aac');
                            //copy aac file into sound folder
                            $sound_id=$insert_id;
                        }
                        
                    }
                    else
                    {
                        $sound_id="null";
                    }
                }
            
            /********************end convert video to audio**************************/
			
			/********************generate jpg from video**************************/
                 
                 $video = $ffmpeg->open($orignalVideoPath);
                 
                 $generateJpg = "tmp/".$fileName.".jpg";
                 $video
                    ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(2))
                    ->save($generateJpg);
                // //upload jpg on s3
                //  
                 
            /********************generate jpg from video**************************/
             
            /********************generate gif from the video file and upload on aws s3**************************/
                
                $video = $ffmpeg->open($orignalVideoPath);
                $genrateGif = "tmp/".$fileName.".gif";
                
                $video
                ->gif(FFMpeg\Coordinate\TimeCode::fromSeconds(1), new FFMpeg\Coordinate\Dimension($gif_width, $gif_height), 1)
                ->save($genrateGif);
                
            /********************generate gif from the video file and upload on aws s3**************************/ 
                
			if(media_storage=="s3")
			 {  
			    
			    if(is_numeric($sound_id))
                {
                        //generate video with out any sound
                            $generateNoSoundVideo="tmp/".$fileName."noSound.mp4";
                            $without_audio = "$ffmpeg_string -i $optimizeResultFile -c copy -an $generateNoSoundVideo";
                            exec($without_audio);
                        //generate video with out any sound
                        
                        //merge sound and save video
                            $margeVideoWithSound= "tmp/".$fileName."withSound.mp4";
                            $soundFile="upload/audio/".$sound_id.".aac";
                            $cmd_new = "$ffmpeg_string -i $generateNoSoundVideo -i $soundFile -c:v copy -c:a aac -shortest $margeVideoWithSound";
                            exec($cmd_new);
                        //merge sound and save video
                         
                        //upload video on AWS S3
                        $video_url=uploadS3($margeVideoWithSound,"videos"); 
                        
                        // @unlink($generateNoSoundVideo);
                        // @unlink($margeVideoWithSound);
                }
                else
                {
                    //upload files on aws s3
                    $video_url=uploadS3($optimizeResultFile,"videos");
                }
                   
                //upload jpg on aws s3
                $thum_url=uploadS3($generateJpg,"thum");
                
                //upload gif on aws s3
                $gif_url=uploadS3($genrateGif,"gif");
                 
                //delete file from temp
                @unlink($orignalVideoPath);
                @unlink($generateJpg);
                @unlink($genrateGif);
                @unlink($optimizeResultFile);
                 
             }
			 else
			 if(media_storage=="local")
			 {  
			     @copy($optimizeResultFile,$video_url);
			     @copy($generateJpg,$thum_url);
			     @copy($genrateGif,$gif_url);
			 }
			 
			 
		    $qrry_1="insert into videos(description,video,sound_id,fb_id,gif,privacy_type,allow_comments,thum)values(";
			$qrry_1.="'".$description."',";
			$qrry_1.="'".$video_url."',";
			$qrry_1.="'".$sound_id."',";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$gif_url."',";
			$qrry_1.="'".$privacy_type."',";
			$qrry_1.="'".$allow_comments."',";
			$qrry_1.="'".$thum_url."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
			   $array_out = array();
    			$array_out[] = 
    				array(
    					"response" => "file uploaded"
    				);
    			
    			$output=array( "code" => "200", "msg" => $array_out);
    			print_r(json_encode($output, true)); 
			}
			else
			{
			    $array_out = array();
    			$array_out[] = 
    				array(
    					"response" => "error in uploading files"
    				);
    			
    			$output=array( "code" => "201", "msg" => $array_out);
    			print_r(json_encode($output, true)); 
			}
			
			
			
			
		}
		else
		{
			$array_out = array();
			$array_out[] = 
				array(
					"response" => "json parem missing 3"
				);
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	
	}
	
	function showAllVideos()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	    
	     
        
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$token=$event_json['token'];
			$type=$event_json['type'];
			
			@mysqli_query($conn,"update users set tokon='".$token."' where fb_id='".$fb_id."' ");
			
			
			if($event_json['video_id'])
			{
			    $query=mysqli_query($conn,"select * from videos where id='".$event_json['video_id']."' ");
			}
			else
			if($type=="related")
			{
			    $query=mysqli_query($conn,"select * from videos where privacy_type='public' order by rand() limit 100");
			}
			else
			if($type=="following")
			{
		    	$query123=mysqli_query($conn,"select * from follow_users where fb_id='".$fb_id."' ");
		        $array_out_count_heart ="";
        		while($row123=mysqli_fetch_array($query123))
        		{
        		  	$array_out_count_heart .=$row123['followed_fb_id'].',';
        		}
        		
        		$array_out_count_heart=$array_out_count_heart.'0';
        		
			    $query=mysqli_query($conn,"select * from videos where privacy_type='public' and fb_id IN($array_out_count_heart) order by rand() limit 100");
			}
			else
			{
			    $query=mysqli_query($conn,"select * from videos where privacy_type='public' order by rand() limit 100");
			}
			
		        
    		$array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		    
    		    $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
		        $rd=mysqli_fetch_object($query1);
		       
		        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		        $rd12=mysqli_fetch_object($query112);
		        
		        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
		        
		        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
                
                
                $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$fb_id."' ");
                $liked_count=mysqli_fetch_assoc($liked);
		        
		       
        	   	$array_out[] = 
        			array(
        			"id" => $row['id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => utf8_encode($rd->first_name),
                        			"last_name" => utf8_encode($rd->last_name),
                        			"profile_pic" => checkProfileURL($rd->profile_pic),
                        			"username" => utf8_encode("@".$rd->username),
                        			"verified" => $rd->verified,
                        			"bio" => utf8_encode($rd->bio),
                        			"gender" => $rd->gender,
            					),
            		"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count']
            					),
            		"liked"=> $liked_count['count'],			
            	    "video" => checkVideoUrl($row['video']),
        			"thum" => checkVideoUrl($row['thum']),
        			"gif" => checkVideoUrl($row['gif']),
        			"privacy_type" => $row['privacy_type'],
        			"allow_comments" => $row['allow_comments'],
        			
        			"description" => $row['description'],
        			"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => utf8_encode($rd12->description),
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing4");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	function SearchByHashTag()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$tag=htmlspecialchars(strip_tags($event_json['tag'] , ENT_QUOTES));
			$token=$event_json['token'];
			
			@mysqli_query($conn,"update users set tokon='".$token."' where fb_id='".$fb_id."' ");
			
			$query=mysqli_query($conn,"select * from videos where description like '%".$tag."%' and privacy_type='public' order by rand() ");
		        
    		$array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		    
    		    $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
		        $rd=mysqli_fetch_object($query1);
		       
		        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		        $rd12=mysqli_fetch_object($query112);
		        
		        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
		        
		        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
                
                
                $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$fb_id."' ");
                $liked_count=mysqli_fetch_assoc($liked);
		        
        	   	$array_out[] = 
        			array(
        			"id" => $row['id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => checkProfileURL($rd->profile_pic),
                        			"username" => "@".$rd->username,
                        			"verified" => $rd->verified,
            					),
            		"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count'],
                        			"view" => $row['view'],
            					),
            		"liked"=> $liked_count['count'],			
            	    "video" => checkVideoUrl($row['video']),
        			"thum" => checkVideoUrl($row['thum']),
        			"gif" => checkVideoUrl($row['gif']),
        			"allow_comments" => $row['allow_comments'],
        			
        			"description" => $row['description'],
        			"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing5");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	function showMyAllVideos()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['fb_id']) && isset($event_json['my_fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$my_fb_id=htmlspecialchars(strip_tags($event_json['my_fb_id'] , ENT_QUOTES));
			
		    $query1=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
		    $rd=mysqli_fetch_object($query1);
		    if(mysqli_num_rows($query1))
		    {
		        
		        $query=mysqli_query($conn,"select * from videos where fb_id='".$fb_id."' and privacy_type='public' order by id DESC");
		        
		        $array_out_video = array();
        		while($row=mysqli_fetch_array($query))
        		{
        		  
        		   $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                   $countLikes_count=mysqli_fetch_assoc($countLikes);
    		       
    		       $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		           $rd12=mysqli_fetch_object($query112);
		        
    		       $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                   $countcomment_count=mysqli_fetch_assoc($countcomment);
                   
                   $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$fb_id."' ");
                   $liked_count=mysqli_fetch_assoc($liked);
                
        		   $array_out_video[] = 
            			array(
            			"id" => $row['id'],
            			"video" => checkVideoUrl($row['video']),
            			"thum" => checkVideoUrl($row['thum']),
            			"gif" => checkVideoUrl($row['gif']."?time=".rand()),
            		    "privacy_type" => $row['privacy_type'],
            		    "allow_comments" => $row['allow_comments'],
            		    
            			"description" => $row['description'],
            			"liked" => $liked_count['count'],
            			"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count'],
                        			"view" => $row['view'],
            					),
    					"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
            			"created" => $row['created']
            		);
        			
        		}
		        
		        
		        //count total heart
		            $query123=mysqli_query($conn,"select * from videos where fb_id='".$fb_id."' ");
		        
    		        $array_out_count_heart ="";
            		while($row123=mysqli_fetch_array($query123))
            		{
            		  	$array_out_count_heart .=$row123['id'].',';
            		}
            		
            		$array_out_count_heart=$array_out_count_heart.'0';
            		
            		$hear_count=mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id IN($array_out_count_heart) ");
		            $hear_count=mysqli_fetch_assoc($hear_count);
		            
		        //count total heart
		        
		        //count total_fans
		        
		            $total_fans=mysqli_query($conn,"SELECT count(*) as count from follow_users where followed_fb_id='".$fb_id."' ");
		            $total_fans=mysqli_fetch_assoc($total_fans);
		            
		        //count total_fans
		        
		        //count total_following
		        
		            $total_following=mysqli_query($conn,"SELECT count(*) as count from follow_users where fb_id='".$fb_id."' ");
		            $total_following=mysqli_fetch_assoc($total_following);
		            
		        //count total_following
		        
		        
		        $count_video_rows=count($array_out_video);
		        if($count_video_rows=="0")
		        {
		            $array_out_video=array(0);
		        }
		        
		        
		        
		        //get private video
		        $query_private=mysqli_query($conn,"select * from videos where fb_id='".$fb_id."' and privacy_type='private' order by id DESC");
		        
		        $array_out_private_video = array();
        		while($row=mysqli_fetch_array($query_private))
        		{
        		  
        		   $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                   $countLikes_count=mysqli_fetch_assoc($countLikes);
    		       
    		       $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
		           $rd12=mysqli_fetch_object($query112);
		        
    		       $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                   $countcomment_count=mysqli_fetch_assoc($countcomment);
                   
                   $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$fb_id."' ");
                   $liked_count=mysqli_fetch_assoc($liked);
                
        		   $array_out_private_video[] = 
            			array(
            			"id" => $row['id'],
            			"video" => checkVideoUrl($row['video']),
            			"thum" => checkVideoUrl($row['thum']),
            			"gif" => checkVideoUrl($row['gif']."?time=".rand()),
            		    "privacy_type" => $row['privacy_type'],
            		    "allow_comments" => $row['allow_comments'],
            		    
            			"description" => $row['description'],
            			"liked" => $liked_count['count'],
            			"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count'],
                        			"view" => $row['view'],
            					),
    					"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
            			"created" => $row['created']
            		);
        			
        		}
        		
        		//end private video
		        
                $query2=mysqli_query($conn,"SELECT count(*) as count from follow_users where fb_id='".$my_fb_id."' and followed_fb_id='".$fb_id."' ");
		        $follow_count=mysqli_fetch_assoc($query2);
		        
		       
                if($follow_count['count']=="0")
                {
                    $follow="0";
                    $follow_button_status="Follow";
                }
                else
                if($follow_count['count']!="0")
                {
                    $follow="1";
                    $follow_button_status="Unfollow";
                }
                
                
		        $array_out = array();
		        $array_out[] = 
        			array(
        			"fb_id" => $fb_id,
        			"user_info" =>array
            					(   
            					    "fb_id" => $rd->fb_id,
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => checkProfileURL($rd->profile_pic),
                        			"gender" => $rd->gender,
        	                		"created" => $rd->created,
        	                		"username" => "@".$rd->username,
        	                		"verified" => $rd->verified,
        	                		"bio" => utf8_encode($rd->bio),
                        			"gender" => $rd->gender,
            					),
        			"follow_Status" =>array
            					(
            					    "follow" => $follow,
                        			"follow_status_button" => $follow_button_status
            					),
        			"total_heart" => $hear_count['count'],
        			"total_fans" => $total_fans['count'],
        			"total_following" => $total_following['count'],
        			"user_videos" => $array_out_video,
        			"pricate_video" => $array_out_private_video
            	    
        		);
		        
		      
		    } 
		    
		    $output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing6");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	function updateVideoView()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['id']))
		{
			$id=htmlspecialchars(strip_tags($event_json['id'] , ENT_QUOTES));
		       
		    mysqli_query($conn,"update videos SET view =view+1 WHERE id ='".$id."' ");
    		
    		$array_out[] = 
				array(
				"response" =>"success");
				
		    $output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			$array_out[] = 
				array(
				"response" =>"Json Parem are missing7");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	    
	}
	
	
	
	
	function likeDislikeVideo()
	{
	    require_once("config.php");
		$input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		if(isset($event_json['fb_id']) && isset($event_json['video_id']) )
		{   
		    $fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		    $video_id=htmlspecialchars(strip_tags($event_json['video_id'] , ENT_QUOTES));
		    $action=htmlspecialchars(strip_tags($event_json['action'] , ENT_QUOTES));
		   
		    if($action=="0")
		    {
		        mysqli_query($conn,"Delete from video_like_dislike where video_id ='".$video_id."' and fb_id='".$fb_id."' ");
	    
        	    $array_out = array();
        					
        			 $array_out[] = 
        				array(
        				"response" =>"video unlike");
        	        
            	$output=array( "code" => "200", "msg" => $array_out);
        		print_r(json_encode($output, true));
		    }
		    else
		    {
		        $qrry_1="insert into video_like_dislike(video_id,fb_id,action)values(";
    			$qrry_1.="'".$video_id."',";
    			$qrry_1.="'".$fb_id."',";
    			$qrry_1.="'".$action."'";
    			$qrry_1.=")";
    			if(mysqli_query($conn,$qrry_1))
    			{
    			   $array_out = array();
        			$array_out[] = 
        				array(
        					"response" => "actions success"
        				);
        			
        			$output=array( "code" => "200", "msg" => $array_out);
        			print_r(json_encode($output, true)); 
        			
        			$query=mysqli_query($conn,"select * from videos where id='".$video_id."' ");
	                $rd1=mysqli_fetch_object($query);
        			$effected_fb_id=$rd1->fb_id;
        			
        			$qrry_2="insert into notification(my_fb_id,effected_fb_id,type,value)values(";
        			$qrry_2.="'".$fb_id."',";
        			$qrry_2.="'".$effected_fb_id."',";
        			$qrry_2.="'video_like',";
        			$qrry_2.="'".$video_id."'";
        			$qrry_2.=")";
        			mysqli_query($conn,$qrry_2);
        			
        			//push notification
    			        
    			        //fetch user tokon 
    			        
        			        $query1=mysqli_query($conn,"select * from videos where id='".$video_id."' ");
    		                $rd=mysqli_fetch_object($query1);
    		                
    		                $query11=mysqli_query($conn,"select * from users where fb_id='".$rd->fb_id."' ");
    		                $rd1=mysqli_fetch_object($query11);
		                
		                //fetch user tokon 
		                
		                //fetch name of a person who is liking other person video
    		                $query111=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
    		                $rd11=mysqli_fetch_object($query111);
    		                
    		            //fetch name of a person who is liking other person video
		                
        			    $title=$rd11->first_name." Liked Your Video";
        			    $message="You have received 1 more like on your video";
        			    
        			    $notification['to'] = $rd1->tokon;
                        $notification['notification']['title'] = $title;
                        $notification['notification']['body'] = $message;
                        // $notification['notification']['text'] = $sender_details['User']['username'].' has sent you a friend request';
                        $notification['notification']['badge'] = "1";
                        $notification['notification']['sound'] = "default";
                        $notification['notification']['icon'] = "";
                         $notification['notification']['image'] = "";
                        $notification['notification']['type'] = "";
                        $notification['notification']['data'] = "";
        
                        sendPushNotificationToMobileDevice(json_encode($notification));
                        
	                //push notification
    			}
    			else
    			{
    			    $array_out = array();
        			$array_out[] = 
        				array(
        					"response" => "error in uploading files"
        				);
        			
        			$output=array( "code" => "201", "msg" => $array_out);
        			print_r(json_encode($output, true)); 
    			}
    			
    			
    			
    			
		    }
		   	
			
		}
		else
		{
			$array_out = array();
			$array_out[] = 
				array(
					"response" => "json parem missing8"
				);
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
    function postComment()
    {
           
        require_once("config.php");
		$input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
// 		checkTokon();
		
		if(isset($event_json['fb_id']) && isset($event_json['video_id']) )
		{   
		    $fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		    $video_id=htmlspecialchars(strip_tags($event_json['video_id'] , ENT_QUOTES));
		    $comment=htmlspecialchars(strip_tags($event_json['comment'] , ENT_QUOTES));
		    
		    $query1=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
		    $rd=mysqli_fetch_object($query1);
		        
    	    $qrry_1="insert into video_comment(video_id,fb_id,comments)values(";
			$qrry_1.="'".$video_id."',";
			$qrry_1.="'".$fb_id."',";
			$qrry_1.="'".$comment."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
			   $array_out = array();
    			$array_out[] = 
    				array(
    					"fb_id" => $fb_id,
    					"video_id" => $video_id,
    					"comments" => $comment,
    					"user_info" =>array
            					(
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => checkProfileURL($rd->profile_pic),
                        			"username" => "@".$rd->username,
                        			"verified" => $rd->verified,
            					),
    				);
    			
    			$output=array( "code" => "200", "msg" => $array_out);
    			print_r(json_encode($output, true)); 
    			
    			
    			$query=mysqli_query($conn,"select * from videos where id='".$video_id."' ");
                $rd1=mysqli_fetch_object($query);
    			$effected_fb_id=$rd1->fb_id;
    			
    			$qrry_2="insert into notification(my_fb_id,effected_fb_id,type,value)values(";
    			$qrry_2.="'".$fb_id."',";
    			$qrry_2.="'".$effected_fb_id."',";
    			$qrry_2.="'comment_video',";
    			$qrry_2.="'".$video_id."'";
    			$qrry_2.=")";
    			mysqli_query($conn,$qrry_2);
    			
                //push notification
    			        
			        //fetch user tokon 
			        
    			        $query1=mysqli_query($conn,"select * from videos where id='".$video_id."' ");
		                $rd=mysqli_fetch_object($query1);
		                
		                $query11=mysqli_query($conn,"select * from users where fb_id='".$rd->fb_id."' ");
		                $rd1=mysqli_fetch_object($query11);
	                
	                //fetch user tokon 
	                
	                //fetch name of a person who is liking other person video
		                $query111=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
		                $rd11=mysqli_fetch_object($query111);
		                
		            //fetch name of a person who is liking other person video
	                
    			    $title=$rd11->first_name." Post comment on your video";
    			    $message=$comment;
    			    
    			    $notification['to'] = $rd1->tokon;
                    $notification['notification']['title'] = $title;
                    $notification['notification']['body'] = $message;
                    // $notification['notification']['text'] = $sender_details['User']['username'].' has sent you a friend request';
                    $notification['notification']['badge'] = "1";
                    $notification['notification']['sound'] = "default";
                    $notification['notification']['icon'] = "";
                     $notification['notification']['image'] = "";
                    $notification['notification']['type'] = "";
                    $notification['notification']['data'] = "";
    
                    sendPushNotificationToMobileDevice(json_encode($notification));
                    
                //push notification
			}
			else
			{
			    $array_out = array();
    			$array_out[] = 
    				array(
    					"response" => "error"
    				);
    			
    			$output=array( "code" => "201", "msg" => $array_out);
    			print_r(json_encode($output, true)); 
			}
			
		}
		else
		{
			$array_out = array();
			$array_out[] = 
				array(
					"response" => "json parem missing9"
				);
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
		
    }
    
    function showVideoComments()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['video_id']))
		{
			$video_id=htmlspecialchars(strip_tags($event_json['video_id'] , ENT_QUOTES));
			
			$query=mysqli_query($conn,"select * from video_comment where video_id='".$video_id."' order by id DESC");
		        
    		$array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		  
    		   $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
		       $rd=mysqli_fetch_object($query1);
		        
    		   $array_out[] = 
        			array(
        			"video_id" => $row['video_id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => checkProfileURL($rd->profile_pic),
                        			"username" => "@".$rd->username,
                        			"verified" => $rd->verified,
            					),
            	    
        			"comments" => $row['comments'],
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing10");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	function allSounds()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	    $fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
	    
		$query=mysqli_query($conn,"select * from sound_section ");
	        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		  
		   //echo $row['section'];
		   //echo "select * from sound where section ='".$row['section']."' ";
		   $query1=mysqli_query($conn,"select * from sound where section ='".$row['id']."' ");
		   $array_out1 = array();
		   while($row1=mysqli_fetch_array($query1))
		   {
		        $qrry="select * from fav_sound WHERE fb_id='".$fb_id."' and sound_id ='".$row1['id']."' ";
    			$log_in_rs=mysqli_query($conn,$qrry);
    			$CountFav = mysqli_num_rows($log_in_rs); 
    		    if($CountFav=="")
    		    {
    		        $CountFav="0";
    		    }
    		    
		        $array_out1[] = 
        			array(
            			"id" => $row1['id'],
            			
            			"audio_path" => 
                    			array(
                        			"mp3" => $API_path."/upload/audio/".$row1['id'].".mp3",
            			            "acc" => $API_path."/upload/audio/".$row1['id'].".aac"
                        		),
            			"sound_name" => $row1['sound_name'],
            			"description" => $row1['description'],
            			"section" => $row1['section'],
            			"thum" => $API_path."/".$row1['thum'],
            			"created" => $row1['created'],
            			"fav" => $CountFav
            		);
		    }
		    
			if(count($array_out1)!="0")
			{		
				$array_out2[] = 
					array(
					"section_name" => $row['section_name'],
					"sections_sounds" => $array_out1
					
				);
			}
		    
		   
			
		}
		$output=array( "code" => "200", "msg" => $array_out2);
		print_r(json_encode($output, true));
		
	}
	
	
	function fav_sound()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		if(isset($event_json['fb_id']) && isset($event_json['sound_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$sound_id=htmlspecialchars(strip_tags($event_json['sound_id'] , ENT_QUOTES));
			$fav=htmlspecialchars(strip_tags($event_json['fav'] , ENT_QUOTES));
			
			if($fav=="1")
			{
			    $qrry_1="insert into fav_sound(fb_id,sound_id)values(";
    			$qrry_1.="'".$fb_id."',";
    			$qrry_1.="'".$sound_id."'";
    			$qrry_1.=")";
    			if(mysqli_query($conn,$qrry_1))
    			{
    			 
    			
    				 $array_out = array();
    				 $array_out[] = 
    					//array("code" => "200");
    					array(
            			"response" =>"successful");
    				
    				$output=array( "code" => "200", "msg" => $array_out);
    				print_r(json_encode($output, true));
    			}
    			else
    			{
    			    //echo mysqli_error();
    			    $array_out = array();
    					
            		 $array_out[] = 
            			array(
            			"response" =>"problem");
            		
            		$output=array( "code" => "201", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
			}
			else
			if($fav=="0")
			{
			    $qrry_1="Delete from fav_sound where fb_id ='".$fb_id."' and sound_id='".$sound_id."' ";
    			if(mysqli_query($conn,$qrry_1))
    			{
    			 
    			
    				 $array_out = array();
    				 $array_out[] = 
    					//array("code" => "200");
    					array(
            			"response" =>"successful");
    				
    				$output=array( "code" => "200", "msg" => $array_out);
    				print_r(json_encode($output, true));
    			}
    			else
    			{
    			    //echo mysqli_error();
    			    $array_out = array();
    					
            		 $array_out[] = 
            			array(
            			"response" =>"problem");
            		
            		$output=array( "code" => "201", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
			}
			
			
			
			
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing12");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	function my_FavSound()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	    
	    if(isset($event_json['fb_id']))
		{
		    
		   $fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		    
    	   $query1=mysqli_query($conn,"select * from fav_sound where fb_id ='".$fb_id."' ");
		   $array_out1 = array();
		   while($row1=mysqli_fetch_array($query1))
		   {
		        
		        $qrry="select * from sound WHERE id ='".$row1['sound_id']."' ";
    			$log_in_rs=mysqli_query($conn,$qrry);
    			
    		    $rd=mysqli_fetch_object($log_in_rs);
    			    
    			$array_out1[] = 
        			array(
            			"id" => $rd->id,
            			
            			"audio_path" => 
                    			array(
                        			"mp3" => $API_path."/upload/audio/".$row1['sound_id'].".mp3",
            			            "acc" => $API_path."/upload/audio/".$row1['sound_id'].".aac"
                        		),
            			"sound_name" => $rd->sound_name,
            			"description" => $rd->description,
            			"section" => $rd->section,
            			"thum" => $API_path."/".$rd->thum,
            			"created" => $rd->created,
            		);
		    }
		    
		    $output=array( "code" => "200", "msg" => $array_out1);
			print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing13");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
		
	}
	
	
	
	function my_liked_video()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			
		    $query1=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
		    $rd=mysqli_fetch_object($query1);
		    if(mysqli_num_rows($query1))
		    {
		        
		        $query=mysqli_query($conn,"select * from video_like_dislike where fb_id='".$fb_id."' order by id DESC");
		        
		        $array_out_video = array();
        		while($row=mysqli_fetch_array($query))
        		{
        		   
        		   $query11=mysqli_query($conn,"select * from videos where id='".$row['video_id']."' ");
		           $rdd=mysqli_fetch_object($query11);
		            
		           $query112=mysqli_query($conn,"select * from sound where id='".$rdd->sound_id."' ");
		           $rd12=mysqli_fetch_object($query112);
		        
        		   $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['video_id']."' ");
                   $countLikes_count=mysqli_fetch_assoc($countLikes);
    		        
    		       $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['video_id']."' ");
                   $countcomment_count=mysqli_fetch_assoc($countcomment);
                   
                   $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['video_id']."' and fb_id='".$fb_id."' ");
                   $liked_count=mysqli_fetch_assoc($liked);
                   
                   $query111=mysqli_query($conn,"select * from users where fb_id='".$rdd->fb_id."' ");
		           $rd11=mysqli_fetch_object($query111);
                    
                    
                    
                    //count total heart
    		            $query123=mysqli_query($conn,"select * from videos where fb_id='".$fb_id."' ");
    		        
        		        $array_out_count_heart ="";
                		while($row123=mysqli_fetch_array($query123))
                		{
                		  	$array_out_count_heart .=$row123['id'].',';
                		}
                		
                		$array_out_count_heart=$array_out_count_heart.'0';
                		
                		$hear_count=mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id IN($array_out_count_heart) ");
    		            $hear_count=mysqli_fetch_assoc($hear_count);
    		            
    		        //count total heart
    		        
    		        //count total_fans
    		        
    		            $total_fans=mysqli_query($conn,"SELECT count(*) as count from follow_users where followed_fb_id='".$fb_id."' ");
    		            $total_fans=mysqli_fetch_assoc($total_fans);
    		            
    		        //count total_fans
    		        
    		        //count total_following
    		        
    		            $total_following=mysqli_query($conn,"SELECT count(*) as count from follow_users where fb_id='".$fb_id."' ");
    		            $total_following=mysqli_fetch_assoc($total_following);
    		            
    		        //count total_following
    		        
    		        
        		   $array_out_video[] = 
            			array(
            			"id" => $rdd->id,
            			"video" => checkVideoUrl(@$rdd->video),
            			"thum" => checkVideoUrl(@$rdd->thum),
            			"gif" => checkVideoUrl(@$rdd->gif),
            		
            			"description" => $rdd->description,
            			"liked" => $liked_count['count'],
            			"user_info" =>array
        					(
        					    "fb_id" => $rd11->fb_id,
        					    "first_name" => $rd11->first_name,
        					    "username" => "@".$rd11->username,
        					    "verified" => $rd11->verified,
                    			"last_name" => $rd11->last_name,
                    			"profile_pic" => checkProfileURL($rd11->profile_pic),
        					),
            			"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count'],
                        			"view" => $rdd->view,
            					),
    					"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".@$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".@$rd12->id.".aac"
                                		),
                        			"sound_name" => @$rd12->sound_name,
                        			"description" => @$rd12->description,
                        			"thum" => @$rd12->thum,
                        			"section" => @$rd12->section,
                        			"created" => @$rd12->created,
            					),
            			"created" => $row['created']
            		);
        			
        		}
		        
		        $count_video_rows=count($array_out_video);
		        if($count_video_rows=="0")
		        {
		            $array_out_video=array(0);
		        }
		        
		        
		        
		        
                
                
		        $array_out = array();
		        $array_out[] = 
        			array(
        			"fb_id" => $fb_id,
        			"user_info" =>array
            					(
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => checkProfileURL($rd->profile_pic),
                        			"gender" => $rd->gender,
        	                		"created" => $rd->created,
        	                		"username" => "@".$rd->username,
        	                		"verified" => $rd->verified,
            					),
        			
        			"total_heart" => $hear_count['count'],
        			"total_fans" => $total_fans['count'],
        			"total_following" => $total_following['count'],
        			"user_videos" => $array_out_video
            	    
        		);
		        
		      
		    } 
		    
		    $output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing14");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	function my_private_video()
	{
	    
	}
	
	function get_followers()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			
		    $query=mysqli_query($conn,"select * from follow_users where followed_fb_id='".$fb_id."' order by id DESC");
		        
	        $array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		   
    		   $query11=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
		       $rd1=mysqli_fetch_object($query11);
		       
		       
                $query2=mysqli_query($conn,"SELECT count(*) as count from follow_users where followed_fb_id='".$row['fb_id']."' and fb_id='".$fb_id."'  ");
                $follow_count=mysqli_fetch_assoc($query2);
                
                if($follow_count['count']=="0")
                {
                	$follow="0";
                	$follow_button_status="Follow";
                }
                else
                if($follow_count['count']!="0")
                {
                	$follow="1";
                	$follow_button_status="Unfollow";
                }
                

    		   $array_out[] = 
        			array(
        			    "fb_id" => $rd1->fb_id,
					    "username" => "@".$rd1->username,
					    "verified" => $rd1->verified,
					    "first_name" => $rd1->first_name,
					    "last_name" => $rd1->last_name,
					    "gender" => $rd1->gender,
					    "bio" => $rd1->bio,
					    "profile_pic" => checkProfileURL($rd1->profile_pic),
					    "created" => $rd1->created,
					    "follow_Status" =>array
                		(
                			"follow" => $follow,
                			"follow_status_button" => $follow_button_status
                		)
        		);
    			
    		}
	        
	        
		    $output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing15");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	function get_followings()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		if(isset($event_json['fb_id']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			
		    $query=mysqli_query($conn,"select * from follow_users where fb_id='".$fb_id."' order by id DESC");
		        
	        $array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		   
    		   $query11=mysqli_query($conn,"select * from users where fb_id='".$row['followed_fb_id']."' ");
		       $rd1=mysqli_fetch_object($query11);
		       
		       $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
		       $rd=mysqli_fetch_object($query1);
		        
		        
                $query2=mysqli_query($conn,"SELECT count(*) as count from follow_users where fb_id='".$fb_id."' and followed_fb_id='".$row['followed_fb_id']."' ");
                $follow_count=mysqli_fetch_assoc($query2);
                
                if($follow_count['count']=="0")
                {
                	$follow="0";
                	$follow_button_status="Follow";
                }
                else
                if($follow_count['count']!="0")
                {
                	$follow="1";
                	$follow_button_status="Unfollow";
                }
                

    		   $array_out[] = 
        			array(
        			    "fb_id" => $rd1->fb_id,
					    "username" => "@".$rd1->username,
					    "verified" => $rd1->verified,
					    "first_name" => $rd1->first_name,
					    "last_name" => $rd1->last_name,
					    "gender" => $rd1->gender,
					    "bio" => $rd1->bio,
					    "profile_pic" => checkProfileURL($rd1->profile_pic),
					    "created" => $rd1->created,
					    "follow_Status" =>array
                		(
                			"follow" => $follow,
                			"follow_status_button" => $follow_button_status
                		)
        		);
    			
    		}
	        
	        
		    $output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing16");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	
	function discover()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
	
		$query=mysqli_query($conn,"select * from discover_section ");
	        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		  
		   //echo $row['section'];
		   //echo "select * from sound where section ='".$row['section']."' ";
		   
		   $query1=mysqli_query($conn,"select * from videos where section ='".$row['id']."' ");
		   $array_out1 = array();
		   while($row1=mysqli_fetch_array($query1))
		   {    
		        $query11=mysqli_query($conn,"select * from users where fb_id='".$row1['fb_id']."' ");
		        $rd1=mysqli_fetch_object($query11);
		        
		        $query112=mysqli_query($conn,"select * from sound where id='".$row1['sound_id']."' ");
		        $rd12=mysqli_fetch_object($query112);
		        
		        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row1['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
		        
		        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row1['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
               
		        $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row1['id']."' and fb_id='".$fb_id."' ");
                $liked_count=mysqli_fetch_assoc($liked);
                   
		        $array_out1[] = 
        			array(
            			"id" => $row1['id'],
            			"video" => checkVideoUrl($row1['video']),
            			"thum" => checkVideoUrl($row1['thum']),
            			"gif" => checkVideoUrl($row1['gif']),
           
            			"description" => $row1['description'],
            			"liked" => $liked_count['count'],
            			"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count'],
                        			"view" => $row1['view'],
            					),
            			"user_info" =>array
            					(
            					    "fb_id" => $rd1->fb_id,
            					    "first_name" => utf8_encode($rd1->first_name),
                        			"last_name" => utf8_encode($rd1->last_name),
                        			"profile_pic" => checkProfileURL($rd1->profile_pic),
                        			"gender" => $rd1->gender,
        	                		"created" => $rd1->created,
        	                		"username" => "@".utf8_encode($rd1->username),
        	                		"verified" => $rd1->verified,
            					),
    					"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
            			"created" => $row1['created']
            		);
		    }
		    
		    if(count($array_out1)!="0")
		    {
		        $array_out2[] = 
        			array(
        			"section_name" => $row['section_name'],
        			"sections_videos" => $array_out1
        			
        		);  
		    }
		    
		}
		$output=array( "code" => "200", "msg" => $array_out2);
		print_r(json_encode($output, true));
		
	}
	
	function all_discovery_sections()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		$id=htmlspecialchars(strip_tags($event_json['id'] , ENT_QUOTES));
		
		if($id!="")
		{
		    $query=mysqli_query($conn,"select * from discover_section where id='".$id."' ");
		}
		else
		{
		    $query=mysqli_query($conn,"select * from discover_section ");
		}
		
	        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		  
		   //echo $row['section'];
		   //echo "select * from sound where section ='".$row['section']."' ";
    		  $array_out1[] = 
        			array(
        			"id" => $row['id'],
        			"section_name" => $row['section_name'],
        			"created" => $row['created']
        	  );
		}
		$output=array( "code" => "200", "msg" => $array_out1);
		print_r(json_encode($output, true));
		
// 		$query=mysqli_query($conn,"select DISTINCT section from videos where section!='0' ");
	        
// 		$array_out = array();
// 		while($row=mysqli_fetch_array($query))
// 		{
		  
// 		   //echo $row['section'];
// 		   //echo "select * from sound where section ='".$row['section']."' ";
//     		  $array_out1[] = 
//         			array(
//         			"section_name" => $row['section']
//         	  );
// 		}
// 		$output=array( "code" => "200", "msg" => $array_out1);
// 		print_r(json_encode($output, true));
	}
	
	function discovery_sections_edit()
	{   
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		if(STATUS=="demo")
		{
		    die();
		}
		
		$section_name=$event_json['section_name'];
		$id=$event_json['id'];
		
		@mysqli_query($conn,"update discover_section set section_name = '".$section_name."' where id='".$id."'");
		
		$output=array( "code" => "200", "msg" => "updated");
		print_r(json_encode($output, true));
		
	    
	}
	
	function add_discovery_Section()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		$section_name=htmlspecialchars(strip_tags($event_json['section_name'] , ENT_QUOTES));
		
		if(STATUS=="demo")
		{
		    die();
		}
		
	    $qrry_1="insert into discover_section(section_name)values(";
		$qrry_1.="'".$section_name."'";
		$qrry_1.=")";
		if(mysqli_query($conn,$qrry_1))
		{
		 
		
			 $array_out = array();
			 $array_out[] = 
				//array("code" => "200");
				array(
    			"response" =>"follow successful");
			
			$output=array( "code" => "200", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
		else
		{
		    //echo mysqli_error();
		    $array_out = array();
				
    		 $array_out[] = 
    			array(
    			"response" =>"problem in signup");
    		
    		$output=array( "code" => "201", "msg" => $array_out);
    		print_r(json_encode($output, true));
		}
	}
	
	function delete_discovery_Section()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		if(STATUS=="demo")
		{
		    die();
		}
	    
	    $id=htmlspecialchars(strip_tags($event_json['id'] , ENT_QUOTES));
		
		mysqli_query($conn,"update videos set section='' where section ='".$id."'  ");
	    $qrry_1=mysqli_query($conn,"Delete from discover_section where id ='".$id."'  ");
		if($qrry_1)
		{
		 
			 $array_out = array();
			 $array_out[] = 
				//array("code" => "200");
				array(
    			"response" =>"follow successful");
			
			$output=array( "code" => "200", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
		else
		{
		    //echo mysqli_error();
		    $array_out = array();
				
    		 $array_out[] = 
    			array(
    			"response" =>"problem in signup");
    		
    		$output=array( "code" => "201", "msg" => $array_out);
    		print_r(json_encode($output, true));
		}
	}
	
	function deleteSection()
	{   
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		if(STATUS=="demo")
		{
		    die();
		}
		
		$name=$event_json['name'];
		
		@mysqli_query($conn,"update videos set section='0' where section='".$name."' ");
		
		$output=array( "code" => "200", "msg" => "deleted");
		print_r(json_encode($output, true));
		
	    
	}
	
	function assignSection()
	{   
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		$name=$event_json['name'];
		$id=$event_json['id'];
		
		@mysqli_query($conn,"update videos set section='".$name."' where id='".$id."' ");
		
		$output=array( "code" => "200", "msg" => "updated");
		print_r(json_encode($output, true));
		
	    
	}
	
	function edit_profile()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		//0= owner  1= company 2= ind mechanic
		
		//checkTokon();
		
		if(isset($event_json['fb_id']) && isset($event_json['first_name']) && isset($event_json['last_name']) && isset($event_json['gender']) && isset($event_json['bio']) )
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$first_name=htmlspecialchars(strip_tags($event_json['first_name'] , ENT_QUOTES));
			$last_name=htmlspecialchars(strip_tags($event_json['last_name'] , ENT_QUOTES));
			$gender=htmlspecialchars(strip_tags($event_json['gender'] , ENT_QUOTES));
		    $bio=htmlspecialchars(strip_tags($event_json['bio'] , ENT_QUOTES));
			$username=htmlspecialchars(strip_tags($event_json['username'] , ENT_QUOTES));
			
			$username=str_replace("@","",$username);
			
			//check username
			$qrry_1="select * from users WHERE username='".$username."' ";
			$log_in_rs=mysqli_query($conn,$qrry_1);
			$rd=mysqli_fetch_object($log_in_rs); 
			
			
			if($rd->fb_id=="" || $rd->fb_id == $fb_id)
			{
			    $rd=mysqli_fetch_object($log_in_rs);    
			    
			    $qrry_1="update users SET first_name ='".$first_name."' , last_name ='".$last_name."', gender ='".$gender."' , bio ='".$bio."' , username ='".$username."'  WHERE fb_id ='".$fb_id."' ";
    			if(mysqli_query($conn,$qrry_1))
    			{
    			    $array_out = array();
    				 
    				$qrry_1="select * from users WHERE fb_id ='".$fb_id."' ";
        			$log_in_rs=mysqli_query($conn,$qrry_1);
        			
        			if(mysqli_num_rows($log_in_rs))
        			{   
        			    
                        
        			    $rd=mysqli_fetch_object($log_in_rs);
        			    
        			       $array_out = array();
        					
                		 $array_out[] = 
                			array(
                			"first_name" => $rd->first_name,
                			"username" => "@".$rd->username,
                			"verified" => $rd->verified,
                			"last_name" => $rd->last_name,
                			"gender" => $rd->gender,
                			"bio" => bio
                			);
                		
                		$output=array( "code" => "200", "msg" => $array_out);
                		print_r(json_encode($output, true));
        			}
    			
            		
    			}
    			else
    			{
    			    $array_out = array();
    					
            		 $array_out[] = 
            			array(
            			"response" =>"problem in updating");
            		
            		$output=array( "code" => "201", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
			}
			else
    			{
    			    $array_out = array();
    					
            		 $array_out[] = 
            			array(
            			"response" =>"username already exist");
            		
            		$output=array( "code" => "201", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
			//check username
			
		
    		
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing17");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	    
	}
	
	
	function follow_users()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		//0= owner  1= company 2= ind mechanic
		
// 		checkTokon();
		
		if(isset($event_json['fb_id']) && isset($event_json['followed_fb_id']) && isset($event_json['status']))
		{
			$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
			$followed_fb_id=htmlspecialchars(strip_tags($event_json['followed_fb_id'] , ENT_QUOTES));
			$status=htmlspecialchars(strip_tags($event_json['status'] , ENT_QUOTES));
			
			if($status=="0")
			{
			    mysqli_query($conn,"Delete from follow_users where fb_id ='".$fb_id."' and followed_fb_id='".$followed_fb_id."'  ");
			    
			    $array_out = array();
    				 $array_out[] = 
    					//array("code" => "200");
    					array(
            			"response" =>"unfollow");
    				
    				$output=array( "code" => "200", "msg" => $array_out);
    				print_r(json_encode($output, true));
			}
			else
			{
			    $qrry_1="insert into follow_users(fb_id,followed_fb_id)values(";
    			$qrry_1.="'".$fb_id."',";
    			$qrry_1.="'".$followed_fb_id."'";
    			$qrry_1.=")";
    			if(mysqli_query($conn,$qrry_1))
    			{
    			 
    			
    				 $array_out = array();
    				 $array_out[] = 
    					//array("code" => "200");
    					array(
            			"response" =>"follow successful");
    				
    				$output=array( "code" => "200", "msg" => $array_out);
    				print_r(json_encode($output, true));
    				
    				
    				$qrry_2="insert into notification(my_fb_id,effected_fb_id,type,value)values(";
        			$qrry_2.="'".$fb_id."',";
        			$qrry_2.="'".$followed_fb_id."',";
        			$qrry_2.="'following_you',";
        			$qrry_2.="''";
        			$qrry_2.=")";
        			mysqli_query($conn,$qrry_2);
    			}
    			else
    			{
    			    //echo mysqli_error();
    			    $array_out = array();
    					
            		 $array_out[] = 
            			array(
            			"response" =>"problem in signup");
            		
            		$output=array( "code" => "201", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
			}
			
			
			
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing18");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	
	
	//admin panel services
	
	function Admin_Login()
	{   
	   	require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		//0= owner  1= company 2= ind mechanic
		
		if(isset($event_json['email']) && isset($event_json['password']) )
		{
			$email=htmlspecialchars(strip_tags($event_json['email'] , ENT_QUOTES));
			$password=strip_tags($event_json['password']);
		
			
			$log_in="select * from admin where email='".$email."' and pass='".md5($password)."' ";
			$log_in_rs=mysqli_query($conn,$log_in);
			
			if(mysqli_num_rows($log_in_rs))
			{
				$array_out = array();
				 $array_out[] = 
					//array("code" => "200");
					array(
						"response" => "login success"
					);
				
				$output=array( "code" => "200", "msg" => $array_out);
				print_r(json_encode($output, true));
			}	
			else
			{
			    
    			$array_out = array();
    					
        		 $array_out[] = 
        			array(
        			"response" =>"Error in login");
        		
        		$output=array( "code" => "201", "msg" => $array_out);
        		print_r(json_encode($output, true));
			}
			
			
			
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing19");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	
	function All_Users()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		$query=mysqli_query($conn,"select * from users order by id DESC");
		        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		     
		   	 $array_out[] = 
				array(
					"fb_id" => $row['fb_id'],
					"username" => utf8_encode("@".$row['username']),
					"verified" => $row['verified'],
					"first_name" => utf8_encode($row['first_name']),
					"last_name" => utf8_encode($row['last_name']),
					"gender" => $row['gender'],
					"profile_pic" => checkProfileURL($row['profile_pic']),
					"block" => $row['block'],
					"version" => $row['version'],
					"device" => $row['device'],
					"signup_type" => $row['signup_type'],
					"created" => $row['created'],
					
				);
			
		}
		$output=array( "code" => "200", "msg" => $array_out);
		print_r(json_encode($output, true));
		
	    
	}
	
	
	
	function admin_all_sounds()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		$query=mysqli_query($conn,"select * from sound order by id DESC");
		        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		     
		   	 $array_out[] = 
				array(
					"id" => $row['id'],
					"sound_name" => $row['sound_name'],
					"description" => $row['description'],
					"thum" => $API_path."/".$row['thum'],
					"section" => $row['section'],
					"created" => $row['created']
					
				);
			
		}
		$output=array( "code" => "200", "msg" => $array_out);
		print_r(json_encode($output, true));
		
	    
	}
	
	function admin_uploadSound()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		//0= owner  1= company 2= ind mechanic
		
		if(STATUS=="demo")
		{
		    die();
		}
		
		if(isset($event_json['fileUrl']))
		{
			$fileUrl=$event_json['fileUrl'];
			$sound_name=htmlspecialchars(strip_tags($event_json['sound_name'] , ENT_QUOTES));
			$description=htmlspecialchars(strip_tags($event_json['description'] , ENT_QUOTES));
			$section_id=htmlspecialchars(strip_tags($event_json['section_id'] , ENT_QUOTES));
			$thum = $event_json['image']['file_data'];
			$fileName=rand();
			
			$thumPath="upload/audio/".$fileName.".jpg";
			
			$qrry_1="insert into sound(sound_name,description,section,thum)values(";
			$qrry_1.="'".$sound_name."',";
			$qrry_1.="'".$description."',";
			$qrry_1.="'".$section_id."',";
			$qrry_1.="'".$thumPath."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
			    $insert_id=mysqli_insert_id($conn);
			    @copy($fileUrl,'upload/audio/'.$insert_id.'.aac');
			     
			    $thum = base64_decode($thum);
                file_put_contents("upload/audio/".$fileName.".jpg", $thum);
                
                $array_out = array();
				$array_out[] = 
					//array("code" => "200");
					array(
        			"response" =>"successful");
				
				$output=array( "code" => "200", "msg" => $array_out);
				print_r(json_encode($output, true));
			}
			else
			{
			    //echo mysqli_error();
			    $array_out = array();
					
        		 $array_out[] = 
        			array(
        			"response" =>"problem in signup");
        		
        		$output=array( "code" => "201", "msg" => $array_out);
        		print_r(json_encode($output, true));
			}
			
			
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing20");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	
	function admin_getSoundSection()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		$query=mysqli_query($conn,"select * from sound_section");
		        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		     
		   	 $array_out[] = 
				array(
					"id" => $row['id'],
					"section_name" => $row['section_name'],
					"created" => $row['created']
				);
			
		}
		$output=array( "code" => "200", "msg" => $array_out);
		print_r(json_encode($output, true));
	}
	
	
	function admin_show_allVideos()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	
		$query=mysqli_query($conn,"select * from videos order by id DESC");
	        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		    
		    $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
	        $rd=mysqli_fetch_object($query1);
	       
	        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
	        $rd12=mysqli_fetch_object($query112);
	        
	        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
            $countLikes_count=mysqli_fetch_assoc($countLikes);
	        
	        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
            $countcomment_count=mysqli_fetch_assoc($countcomment);
            
            
            $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$row['fb_id']."' ");
            $liked_count=mysqli_fetch_assoc($liked);
	        
	        $array_out[] = 
    			array(
    			"id" => $row['id'],
    			"fb_id" => $row['fb_id'],
    			"user_info" =>array
        					(
        					    "first_name" => utf8_encode($rd->first_name),
        					    "username" => utf8_encode("@".$rd->username),
        					    "verified" => $rd->verified,
                    			"last_name" => utf8_encode($rd->last_name),
                    			"profile_pic" => checkProfileURL($rd->profile_pic)
        					),
        		"count" =>array
        					(
        					    "like_count" => $countLikes_count['count'],
                    			"video_comment_count" => $countcomment_count['count']
        					),
        		"liked"=> $liked_count['count'],			
        	    "video" => checkVideoUrl($row['video']),
        	    "thum" => checkVideoUrl($row['thum']),
    			"gif" => checkVideoUrl($row['gif']),
    			
    			"section" => $row['section'],
    			"sound" =>array
        					(
        					    "id" => $rd12->id,
        					    "audio_path" => 
                        			array(
                            			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                            		),
                    			"sound_name" => $rd12->sound_name,
                    			"description" => utf8_encode($rd12->description),
                    			"thum" => $rd12->thum,
                    			"section" => utf8_encode($rd12->section),
                    			"created" => $rd12->created,
        					),
    			"created" => $row['created']
    		);
			
		}
		$output=array( "code" => "200", "msg" => $array_out);
		print_r(json_encode($output, true));
	}
	
	
	function get_user_data()
	{
	   
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	    
	    $fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		$query=mysqli_query($conn,"select * from users where fb_id='".$fb_id."' ");
	   
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		    
		    $array_out[] = 
    			array(
    			"fb_id" => $row['fb_id'],
    			"username" => "@".$row['username'],
    			"verified" => $row['verified'],
    			"first_name"=> $row['first_name'],			
        	    "last_name" => $row['last_name'],
    			"gender" => $row['gender'],
    			"bio" => $row['bio'],
    			"profile_pic" => checkProfileURL($row['profile_pic']),
    			"created" => $row['created']
    		);
			
		}
		$output=array( "code" => "200", "msg" => $array_out);
		print_r(json_encode($output, true));
	}
	
	function changePassword()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
	    
	    //print_r($event_json);
		
		if(isset($event_json['new_password']) && isset($event_json['old_password']))
		{
			$old_password=strip_tags($event_json['old_password']);
			$new_password=strip_tags($event_json['new_password']);
		    
		    if(STATUS=="demo")
    		{
    		    die();
    		}
		    
		    $qrry_1="select * from admin where pass ='".md5($old_password)."' ";
			$log_in_rs=mysqli_query($conn,$qrry_1);
			$rd=mysqli_fetch_object($log_in_rs);
			
			if($rd->id!="")
			{
			    $qrry_1="update admin SET pass ='".md5($new_password)."' where id='".$rd->id."'  ";
    			if(mysqli_query($conn,$qrry_1))
    			{
    			    $array_out = array();
    					
            		 $array_out[] = 
            			array(
            			"response" =>"success");
            		
            		$output=array( "code" => "200", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
    			else
    			{
    			    $array_out = array();
    					
            		 $array_out[] = 
            			array(
            			"response" =>"problem in updating");
            		
            		$output=array( "code" => "201", "msg" => $array_out);
            		print_r(json_encode($output, true));
    			}
			}
			else
			{
			    $array_out = array();
					
        		 $array_out[] = 
        			array(
        			"response" =>"problem in updating");
        		
        		$output=array( "code" => "201", "msg" => $array_out);
        		print_r(json_encode($output, true));
			}
			
			
		}
		else
		{
			$array_out = array();
					
			 $array_out[] = 
				array(
				"response" =>"Json Parem are missing21");
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	    
	}
	
	
	function DeleteSound()
	{
	    require_once("config.php");
		$input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		if(STATUS=="demo")
		{
		    die();
		} 
		
		if(isset($event_json['id']))
		{   
		    $id=htmlspecialchars(strip_tags($event_json['id'] , ENT_QUOTES));
		    
		    mysqli_query($conn,"Delete from sound where id ='".$id."' ");
		    mysqli_query($conn,"Delete from fav_sound where sound_id ='".$id."' ");
	    	mysqli_query($conn,"update videos set sound_id='0' where sound_id ='".$id."' ");
		
    	    $array_out = array();
    					
    			 $array_out[] = 
    				array(
    				"response" =>"video unlike");
    	        
        	$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
		
		}
		else
		{
			$array_out = array();
			$array_out[] = 
				array(
					"response" => "json parem missing22"
				);
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	function DeleteVideo()
	{
	    require_once("config.php");
		$input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		if(STATUS=="demo")
		{
		    die();
		}
		
		if(isset($event_json['id']))
		{   
		    $id=htmlspecialchars(strip_tags($event_json['id'] , ENT_QUOTES));
		   	
			$qrry_1="select * from videos where id ='".$id."' ";
			$log_in_rs=mysqli_query($conn,$qrry_1);
			$rd=mysqli_fetch_object($log_in_rs);
			
			$videoPath=$rd->video;
			$thumPath=$rd->thum;
			$gifPath=$rd->gif;
			
			@unlink($videoPath);
			@unlink($thumPath);
			@unlink($gifPath);
			
			
		    mysqli_query($conn,"Delete from videos where id ='".$id."' ");
			mysqli_query($conn,"Delete from video_like_dislike where video_id ='".$id."' ");
			mysqli_query($conn,"Delete from video_comment where video_id ='".$id."' ");
		   
		   	
			
    	    $array_out = array();
    					
    			 $array_out[] = 
    				array(
    				"response" =>"video unlike");
    	        
        	$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
		
		}
		else
		{
			$array_out = array();
			$array_out[] = 
				array(
					"response" => "json parem missing"
				);
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		} 
	}
	
	function admin_addSection()
	{
	    require_once("config.php");
		$input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json['name']);
		
		if(STATUS=="demo")
		{
		    die();
		}
		
		$name=$event_json['name'];
		if(isset($name))
		{   
		    $qrry_1="insert into sound_section(section_name)values(";
			$qrry_1.="'".$name."'";
			$qrry_1.=")";
			if(mysqli_query($conn,$qrry_1))
			{
			   $array_out = array();
    			$array_out[] = 
    				array(
    					"response" => "success"
    				);
    			
    			$output=array( "code" => "200", "msg" => $array_out);
    			print_r(json_encode($output, true)); 
    			
    		
			}
			else
			{
			    
			    $array_out = array();
    			$array_out[] = 
    				array(
    					"response" => "error"
    				);
    			
    			$output=array( "code" => "201", "msg" => $array_out);
    			print_r(json_encode($output, true)); 
			}
			
		}
		else
		{
			$array_out = array();
			$array_out[] = 
				array(
					"response" => "json parem missing23"
				);
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
	}
	
	function DeleteSoundSectino()
	{
	    require_once("config.php");
		$input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		if(STATUS=="demo")
		{
		    die();
		}
		
		if(isset($event_json['id']))
		{   
		    $id=htmlspecialchars(strip_tags($event_json['id'] , ENT_QUOTES));
		   
		    mysqli_query($conn,"Delete from sound_section where id ='".$id."' ");
			mysqli_query($conn,"update sound set section='' ");
		   
    	    $array_out = array();
    					
    			 $array_out[] = 
    				array(
    				"response" =>"video unlike");
    	        
        	$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
		
		}
		else
		{
			$array_out = array();
			$array_out[] = 
				array(
					"response" => "json parem missing24"
				);
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		} 
	}
	
	function blockUser()
	{
		require_once("config.php");
		$input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		
		if(isset($event_json['user_id']))
		{   
		    $user_id=htmlspecialchars(strip_tags($event_json['user_id'] , ENT_QUOTES));
			$block=htmlspecialchars(strip_tags($event_json['block'] , ENT_QUOTES));
		   
		    mysqli_query($conn,"update users set block='".$block."' where fb_id ='".$user_id."' ");
		   
    	    $array_out = array();
    					
    			 $array_out[] = 
    				array(
    				"response" =>"user blocked");
    	        
        	$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
		
		}
		else
		{
			$array_out = array();
			$array_out[] = 
				array(
					"response" => "json parem missing25"
				);
			
			$output=array( "code" => "201", "msg" => $array_out);
			print_r(json_encode($output, true));
		} 
	}
	
	
	function getSingleSectionDetails()
	{
		require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
	    
	    //print_r($event_json);
		$id=strip_tags($event_json['id']);
		 
		$qrry_1="select * from sound_section where id ='".$id."' ";
		$log_in_rs=mysqli_query($conn,$qrry_1);
		$rd=mysqli_fetch_object($log_in_rs);
		
		$array_out[] = 
    			array(
    			"id" => $rd->id,
    			"section_name" => $rd->section_name,
    			"created"=> $rd->created
    		);
			
	
		$output=array( "code" => "200", "msg" => $array_out);
		print_r(json_encode($output, true));
	
	
	}
	
	function editSoundSection()
	{
		require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
	    
	    //print_r($event_json);
		$id=strip_tags($event_json['id']);
		$section_name=htmlspecialchars(strip_tags($event_json['section_name'] , ENT_QUOTES));
		 
		$qrry_1="update sound_section set section_name='".$section_name."'  where id ='".$id."' ";
		$log_in_rs=mysqli_query($conn,$qrry_1);
		$rd=mysqli_fetch_object($log_in_rs);
		
		
	
		$output=array( "code" => "200", "msg" => "updated");
		print_r(json_encode($output, true));
	
	
	}
	
	function addVideointoDiscovry()
	{
		require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
	    
	    //print_r($event_json);
		$id=strip_tags($event_json['id']);
		$section_name=htmlspecialchars(strip_tags($event_json['section_name'] , ENT_QUOTES));
		 
		$qrry_1="update videos set section='".$section_name."'  where id ='".$id."' ";
		$log_in_rs=mysqli_query($conn,$qrry_1);
		$rd=mysqli_fetch_object($log_in_rs);
		
		
	
		$output=array( "code" => "200", "msg" => "updated");
		print_r(json_encode($output, true));
	}
	
	
	function sendPushNotification()
	{
		require_once("config.php");
		$input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		$log_in="select * from users where fb_id='".$event_json['receiverid']."' ";
		$log_in_rs=mysqli_query($conn,$log_in);
		$rd=mysqli_fetch_object($log_in_rs);  
		
		$tokon=$rd->tokon;
		$title=htmlspecialchars(strip_tags($event_json['title'] , ENT_QUOTES));
		$message=htmlspecialchars(strip_tags($event_json['message'] , ENT_QUOTES));
		$icon=htmlspecialchars(strip_tags($event_json['icon'] , ENT_QUOTES));
		$senderid=htmlspecialchars(strip_tags($event_json['senderid'] , ENT_QUOTES));
		$receiverid=htmlspecialchars(strip_tags($event_json['receiverid'] , ENT_QUOTES));
		$action_type=htmlspecialchars(strip_tags($event_json['action_type'] , ENT_QUOTES));
		
		
		
		$notification['to'] = $tokon;
		$notification['notification']['title'] = $title;
		$notification['notification']['body'] = $message;
		// $notification['notification']['text'] = $sender_details['User']['username'].' has sent you a friend request';
		$notification['notification']['badge'] = "1";
		$notification['notification']['sound'] = "default";
		$notification['notification']['icon'] = "";
		 $notification['notification']['image'] = "";
		$notification['notification']['type'] = "";
		
		$notification['data']['title'] = $title;
		$notification['data']['body'] = $message;
		$notification['data']['icon'] = $icon;
		$notification['data']['senderid'] = $senderid;
		$notification['data']['receiverid'] = $receiverid;
		$notification['data']['action_type'] = $action_type;	
		
		sendPushNotificationToMobileDevice(json_encode($notification));  
	}
	
	function getNotifications()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		
		$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		
		$query=mysqli_query($conn,"select * from notification where effected_fb_id='".$fb_id."' order by id desc ");
		        
		$array_out = array();
		while($row=mysqli_fetch_array($query))
		{
		        $query1=mysqli_query($conn,"select * from users where fb_id='".$row['my_fb_id']."' ");
	            $rd=mysqli_fetch_object($query1);
	            
	            //get video data
	            $query11=mysqli_query($conn,"select * from videos where id='".$row['value']."' ");
	            $rd1=mysqli_fetch_object($query11);
                            		       
		   	 $array_out[] = 
				array(
					"fb_id" => $row['my_fb_id'],
					"fb_id_details" => array(
                    					    "first_name" => $rd->first_name,
                                			"last_name" => $rd->last_name,
                                			"profile_pic" => checkProfileURL($rd->profile_pic),
                                			"username" => "@".$rd->username,
                                			"verified" => $rd->verified,
                    					),
					
					"effected_fb_id" => $row['effected_fb_id'],
					"type" => $row['type'],
					"value" => $row['value'],
					"value_data" =>array(
                            			"id" => $rd1->id,
                            			"video" => checkVideoUrl($rd1->video),
                            			"thum" => checkVideoUrl($rd1->thum),
                            			"gif" => checkVideoUrl($rd1->gif)
                            	
                            		),
					"created" => $row['created']
					
				);
			
		}
		$output=array( "code" => "200", "msg" => $array_out);
		print_r(json_encode($output, true));
	}
	
	function checkTokon()
	{
	    include("config.php");
	    
	    //get headers
		$headers = apache_request_headers();
	   // print_r($headers);
	   // echo "123";
	    
	    $header_device = $headers['Device'];
	    $header_version = $headers['Version'];
	    $header_tokon = $headers['Tokon'];
	    $header_deviceid = $headers['Deviceid'];
	    $header_fb_id = $headers['Fb-Id'];
	    //get headers
	    
	    
	    echo $get_device_tkon="select * from device_tokon where fb_id='".$header_fb_id."' and tokon='".$header_tokon."' and phone_id='".$header_deviceid."' ";
		$get_device_tkon1=mysqli_query($conn,$get_device_tkon);
		$countRows=mysqli_num_rows($get_device_tkon1);
		
// 		$query1=mysqli_query($conn,"select * from device_tokon where fb_id='".$header_fb_id."' and tokon='".$header_tokon."' and phone_id='".$header_deviceid."' ");
// 	    $rd=mysqli_fetch_object($query1);
	   
	    //print_r($conn);
	   
		//$rd->id;
		
		if($countRows=="" || $countRows=="0")
		{
		    $output=array( "code" => "400", "msg" => "tokon mismatch");
			print_r(json_encode($output, true));
			die();
		}
	}
	
	
	function search()
	{
	    
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
	    
	    $fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		$type=htmlspecialchars(strip_tags($event_json['type'] , ENT_QUOTES));
		$keyword=htmlspecialchars(strip_tags($event_json['keyword'] , ENT_QUOTES));
		
		if($type=="video")
	    {
	        $query=mysqli_query($conn,"select * from videos where description like '%".$keyword."%' order by rand() ");
    	    $array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		    
    		    $query1=mysqli_query($conn,"select * from users where fb_id='".$row['fb_id']."' ");
    	        $rd=mysqli_fetch_object($query1);
    	       
    	        $query112=mysqli_query($conn,"select * from sound where id='".$row['sound_id']."' ");
    	        $rd12=mysqli_fetch_object($query112);
    	        
    	        $countLikes = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' ");
                $countLikes_count=mysqli_fetch_assoc($countLikes);
    	        
    	        $countcomment = mysqli_query($conn,"SELECT count(*) as count from video_comment where video_id='".$row['id']."' ");
                $countcomment_count=mysqli_fetch_assoc($countcomment);
                
                
                $liked = mysqli_query($conn,"SELECT count(*) as count from video_like_dislike where video_id='".$row['id']."' and fb_id='".$fb_id."' ");
                $liked_count=mysqli_fetch_assoc($liked);
    	        
        	   	$array_out[] = 
        			array(
        			"id" => $row['id'],
        			"fb_id" => $row['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => checkProfileURL($rd->profile_pic),
                        			"username" => "@".$rd->username,
                        			"verified" => $rd->verified,
            					),
            		"count" =>array
            					(
            					    "like_count" => $countLikes_count['count'],
                        			"video_comment_count" => $countcomment_count['count'],
                        			"view" => $row['view'],
            					),
            		"liked"=> $liked_count['count'],			
            	    "video" => checkVideoUrl($row['video']),
        			"thum" => checkVideoUrl($row['thum']),
        			"gif" => checkVideoUrl($row['gif']),
        		
        			"description" => $row['description'],
        			"sound" =>array
            					(
            					    "id" => $rd12->id,
            					    "audio_path" => 
                            			array(
                                			"mp3" => $API_path."/upload/audio/".$rd12->id.".mp3",
                    			            "acc" => $API_path."/upload/audio/".$rd12->id.".aac"
                                		),
                        			"sound_name" => $rd12->sound_name,
                        			"description" => $rd12->description,
                        			"thum" => $rd12->thum,
                        			"section" => $rd12->section,
                        			"created" => $rd12->created,
            					),
        			"created" => $row['created']
        		);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
	    }
	    else
	    if($type=="users")
	    {
	        $query=mysqli_query($conn,"select * from users where first_name like '%".$keyword."%' or last_name like '%".$keyword."%' or username like '%".$keyword."%'   ");
    	    $array_out = array();
    		while($row=mysqli_fetch_array($query))
    		{
    		     $query1=mysqli_query($conn,"select * from videos where fb_id='".$row['fb_id']."' ");
	             $videoCount=mysqli_num_rows($query1);
            
    		   	 $array_out[] = 
    				array(
    					"fb_id" => $row['fb_id'],
    					"username" => utf8_encode("@".$row['username']),
    					"verified" => $row['verified'],
    					"first_name" => utf8_encode($row['first_name']),
    					"last_name" => utf8_encode($row['last_name']),
    					"gender" => $row['gender'],
    					"profile_pic" => checkProfileURL($row['profile_pic']),
    					"block" => $row['block'],
    					"version" => $row['version'],
    					"device" => $row['device'],
    					"signup_type" => $row['signup_type'],
    					"created" => $row['created'],
    					"videos" => $videoCount
    				);
    			
    		}
    		$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
	    }
		else
        if($type=="sound")
		{
		   $query1=mysqli_query($conn,"select * from sound where sound_name like '%".$keyword."%' or description like '%".$keyword."%' ");
	       $array_out1 = array();
		   while($row1=mysqli_fetch_array($query1))
		   {
		        $qrry="select * from fav_sound WHERE fb_id='".$fb_id."' and sound_id ='".$row1['id']."' ";
    			$log_in_rs=mysqli_query($conn,$qrry);
    			$CountFav = mysqli_num_rows($log_in_rs); 
    		    if($CountFav=="")
    		    {
    		        $CountFav="0";
    		    }
    		    
		        $array_out1[] = 
        			array(
            			"id" => $row1['id'],
            			
            			"audio_path" => 
                    			array(
                        			"mp3" => $API_path."/upload/audio/".$row1['id'].".mp3",
            			            "acc" => $API_path."/upload/audio/".$row1['id'].".aac"
                        		),
            			"sound_name" => $row1['sound_name'],
            			"description" => $row1['description'],
            			"section" => $row1['section'],
            			"thum" => $API_path."/".$row1['thum'],
            			"created" => $row1['created'],
            			"fav" => $CountFav
            		);
		    }
		    
			
    		$output=array( "code" => "200", "msg" => $array_out1);
    		print_r(json_encode($output, true));
		}
		
	}
	
	
	function allProfileVerification()
	{
	   
	    require_once("config.php");
        $input = @file_get_contents("php://input");
        $event_json = json_decode($input,true);
    	//print_r($event_json);
    
		
	   $query1=mysqli_query($conn,"select * from verification_request ");
       $array_out1 = array();
	   while($row1=mysqli_fetch_array($query1))
	   {
	        $query1=mysqli_query($conn,"select * from users where fb_id='".$row1['fb_id']."' ");
    	    $rd=mysqli_fetch_object($query1);
	        
	        $array_out1[] = 
    			array(
        			"id" => $row1['id'],
        			"fb_id" => $row1['fb_id'],
        			"user_info" =>array
            					(
            					    "first_name" => $rd->first_name,
                        			"last_name" => $rd->last_name,
                        			"profile_pic" => checkProfileURL($rd->profile_pic),
                        			"username" => "@".$rd->username,
                        			"verified" => $rd->verified,
            					),
        			"attachment" => $row1['attachment'],
        			"created" => $row1['created']
        		);
	    }
	    
		
		$output=array( "code" => "200", "msg" => $array_out1);
		print_r(json_encode($output, true));
	}
	
	
	function updateVerificationStatus()
	{
	   
	    require_once("config.php");
        $input = @file_get_contents("php://input");
        $event_json = json_decode($input,true);
    	//print_r($event_json);
    
		$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		$action=htmlspecialchars(strip_tags($event_json['action'] , ENT_QUOTES));
		
		if($action=="approve")
		{
		    $qrry_1="update users SET verified ='1' WHERE fb_id ='".$fb_id."' ";
    		if(mysqli_query($conn,$qrry_1))
    		{
    		    mysqli_query($conn,"Delete from verification_request where fb_id ='".$fb_id."' ");
    		    $array_out = array();
    				
        		 $array_out[] = 
        			array(
        			"response" =>"success");
        		
        		$output=array( "code" => "200", "msg" => $array_out);
        		print_r(json_encode($output, true));
    		}
    		else
    		{
    		    $array_out = array();
    				
        		 $array_out[] = 
        			array(
        			"response" =>"error");
        		
        		$output=array( "code" => "201", "msg" => $array_out);
        		print_r(json_encode($output, true));
    		}
		}
		else
		if($action=="decline")
		{
		    mysqli_query($conn,"Delete from verification_request where fb_id ='".$fb_id."' ");
	    
    	    $array_out = array();
    					
    			 $array_out[] = 
    				array(
    				"response" =>"request rejected and deleted");
    	        
        	$output=array( "code" => "200", "msg" => $array_out);
    		print_r(json_encode($output, true));
		}
		
		
	   
	}
	
	
	function getVerified()
	{
	    require_once("config.php");
	    $input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
		//print_r($event_json);
		$fb_id=htmlspecialchars(strip_tags($event_json['fb_id'] , ENT_QUOTES));
		$attachment=htmlspecialchars(strip_tags($event_json['attachment'] , ENT_QUOTES));
		
	    $qrry_1="insert into verification_request(fb_id,attachment)values(";
		$qrry_1.="'".$fb_id."',";
		$qrry_1.="'".$attachment."'";
		$qrry_1.=")";
		if(mysqli_query($conn,$qrry_1))
		{
		 
		
			 $array_out = array();
			 $array_out[] = 
				//array("code" => "200");
				array(
    			"response" =>"successful");
			
			$output=array( "code" => "200", "msg" => $array_out);
			print_r(json_encode($output, true));
		}
		else
		{
		    //echo mysqli_error();
		    $array_out = array();
				
    		 $array_out[] = 
    			array(
    			"response" =>"problem");
    		
    		$output=array( "code" => "201", "msg" => $array_out);
    		print_r(json_encode($output, true));
		}
	}
	
	
	////
    
    function downloadFile()
    {
        require_once("config.php");
		$input = @file_get_contents("php://input");
	    $event_json = json_decode($input,true);
	    
	    if($event_json['video_id'])
	    {
	        $video_id=htmlspecialchars(strip_tags($event_json['video_id'] , ENT_QUOTES));
    	
    		
    	 	$qrry_1="select * from videos WHERE id ='".$video_id."' ";
    		$queryCall=mysqli_query($conn,$qrry_1);
    		$rd=mysqli_fetch_object($queryCall);
        	
        	
        	$qrry_11="select * from users WHERE fb_id ='".$rd->fb_id."' ";
    		$queryCall1=mysqli_query($conn,$qrry_11);
    		$rd1=mysqli_fetch_object($queryCall1);
    		
    		$videoURL=$rd->video;
    		$username=$rd1->username;
    		
            
            
        	if (function_exists('waterMark')) 
        	{
                waterMark($videoURL,$username);
            }
            else
            if(media_storage=="local" || media_storage=="s3")
        	{   
        	    $outputFile=$rd->video;
        	    $array_out = array();
    			$array_out[] = 
    			array(
    			    "download_url" => checkVideoUrl($outputFile)
    			);
    			
    			$output=array( "code" => "200", "msg" => $array_out);
    			print_r(json_encode($output, true));
        	}
           
	    }
	    
    }
    
    
   
    
    
    

?>

