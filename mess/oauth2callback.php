<?php
set_time_limit(0);
define('UPLOAD_PATH', dirname(__FILE__) . '/nxytools/upload/');
require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_DriveService.php';
// require_once 'google-api-php-client/src/contrib/Google_PlusService.php';

// Set your cached access token. Remember to replace $_SESSION with a
// real database or memcached.
session_start();

$client = new Google_Client();
$client->setApplicationName('Google+ PHP Starter Application');
// Visit https://code.google.com/apis/console?api=plus to generate your
// client id, client secret, and to register your redirect uri.
$client->setClientId('622870950133-r5bfcvkp4kp152f221clm4kn0lg521ta.apps.googleusercontent.com');
$client->setClientSecret('icXfrc3gbYfkl7oXbnPoWb9S');
$client->setRedirectUri('http://'.$_SERVER['HTTP_HOST'].'/tools/oauth2callback.php');
$client->setDeveloperKey('AIzaSyAVVo7IKa1fM0eBKEyyZEICG3TEDV8bRE8');
$client->setScopes(array(
  'https://www.googleapis.com/auth/drive',
  // 'https://www.googleapis.com/auth/userinfo.email',
  'https://www.googleapis.com/auth/userinfo.profile',
  // 'https://spreadsheets.google.com/feeds',
  // 'https://docs.google.com/feeds'
  ));
// $plus = new Google_PlusService($client);
// $service = new Google_DriveService($client);

if (isset($_GET['code'])) {
  $client->authenticate();
  $_SESSION['token'] = $client->getAccessToken();
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
  $client->setAccessToken($_SESSION['token']);
}
function downloadFile($service, $file) {
  // $downloadUrl = $file->getDownloadUrl();
  $downloadUrl = 'https://docs.google.com/feeds/download/spreadsheets/Export?key=0Ak-8t6vA7YRrdEpnZlVKckIwM1BLMV9YSVJGS202bEE&exportFormat=xlsx';
  if ($downloadUrl) {
    $request = new Google_HttpRequest($downloadUrl, 'GET', null, null);
    $httpRequest = Google_Client::$io->authenticatedRequest($request);

    // var_dump($httpRequest->getResponseBody());
    // die();
    if ($httpRequest->getResponseHttpCode() == 200) {
      return $httpRequest->getResponseBody();
    } else {
      // An error occurred.
      return null;
    }
  } else {
    // The file doesn't have any content stored on Drive.
    return null;
  }
}
if ($client->getAccessToken()) {
  // $activities = $plus->activities->listActivities('me', 'public');
  // print 'Your Activities: <pre>' . print_r($activities, true) . '</pre>';

  // We're not done yet. Remember to update the cached access token.
  // Remember to replace $_SESSION with a real database or memcached.
  $_SESSION['token'] = $client->getAccessToken();
  // var_dump($_SESSION['token']);
  
  
  
  // $list = $service->files->list();
  // var_dump($list);
  // $file = $service->files->get('0Ak-8t6vA7YRrdEpnZlVKckIwM1BLMV9YSVJGS202bEE');
  // 'https://docs.google.com/feeds/download/spreadsheets/Export?key=0Ak-8t6vA7YRrdEpnZlVKckIwM1BLMV9YSVJGS202bEE&exportFormat=xlsx';
  // var_dump($file);
$data = downloadFile(null, null);
if (!empty($data)) {
    file_put_contents(UPLOAD_PATH . 'config.xlsx', $data);
    header('Location: uploadConfig.php?local=yes');
} else {
    header('Location: uploadConfig.php?local=yes&error=unknown error');
}
// var_dump($data);

//back
// header();
} else {
  $authUrl = $client->createAuthUrl();
  header('Location: ' . $authUrl);
}