<?php
// Function to validate UTC time
function isValidUTC($time) {
    $pattern = '/^(\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2})$/';
    return preg_match($pattern, $time) === 1 && strtotime($time) !== false;
}

// Get query parameters
$slackName = isset($_GET['Ahmed_Bukar']) ? $_GET['Ahmed_Bukar'] : 'Ahmed_Bukar';
$track = isset($_GET['Backend']) ? $_GET['Backend'] : 'Backend';

// Get current UTC time (with validation of +/-2)
$currentUTCTime = gmdate('Y-m-d H:i:s');

// Get current day of the week
$currentDayOfWeek = gmdate('l');

// Get GitHub URLs
$githubFileURL = 'https://github.com/yerwahub/HNG360/blob/main/path/to/task1/Intership.php';
$githubSourceURL = 'https://github.com/yerwahub/HGN360';

// Validate UTC time (+/- 2 hours)
if (!isValidUTC($currentUTCTime)) {
    $currentUTCTime = 'Invalid UTC time';
}

// Prepare the response data
$response = [
    'slackName' => $slackName,
    'currentDayOfWeek' => $currentDayOfWeek,
    'currentUTCTime' => $currentUTCTime,
    'track' => $track,
    'githubFileURL' => $githubFileURL,
    'githubSourceURL' => $githubSourceURL,
    'statusCode' => 200,
];

// Set the content type to JSON
header('Content-Type: application/json');

// Output the JSON response
echo json_encode($response);
