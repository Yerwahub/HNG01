<?php
$response = array();
$cdate =  gmdate("Y-m-d\TH:i:s\Z");
$cday = date ('l');
$github_file = "https://github.com/phist0/HNGX/blob/main/intership.php";
$github_repo = "https://github.com/phist0/HNGX";
$status = 200;
$slack_n = $_GET['ahmed_bukar'];
$track_n = $_GET['backend'];	

/*
// $response[0]["slack_name"] = "ahmed_bukar";
$response[0]["slack"] = slack_name;
$response[0]["current_day"] = $cday;
$response[0]["utc_time"] = $cdate;
// $response[0]["track"] = "backend";
$response[0]["track"] = $track_n;
$response[0]["github_file_url"] = $github_file;
$response[0]["github_repo_url"] = $github_repo;
$response[0]["status_code"] = $status;


echo json_encode($response, JSON_PRETTY_PRINT);

 */

$response2 = ["slack_name" => $slack_n, "current_day" => $cday, "utc_time" => $cdate, "track" => $track_n, "github_file_url" => $github_file, "github_repo_url" => $github_repo, "status_code" => $status];

header('Content-Type: application/json'); 

echo json_encode($response2);
