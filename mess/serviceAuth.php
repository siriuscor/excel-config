<?php
set_time_limit(0);
define('UPLOAD_PATH', dirname(__FILE__) . '/nxytools/upload/');
require_once "google-api-php-client/src/Google_Client.php";
require_once "google-api-php-client/src/contrib/Google_DriveService.php";
require_once "google-api-php-client/src/contrib/Google_Oauth2Service.php";
session_start();

$DRIVE_SCOPE = 'https://www.googleapis.com/auth/drive';
$SERVICE_ACCOUNT_EMAIL = '622870950133-07vbk3c2brlgr4akl1mdgt28f28rrr61@developer.gserviceaccount.com';
$SERVICE_ACCOUNT_PKCS12_FILE_PATH = 'google-doc-account-privatekey.p12';
$key = file_get_contents($SERVICE_ACCOUNT_PKCS12_FILE_PATH);
$auth = new Google_AssertionCredentials(
      $SERVICE_ACCOUNT_EMAIL,
      array($DRIVE_SCOPE),
      $key);
$client = new Google_Client();
$client->setUseObjects(true);
$client->setAssertionCredentials($auth);

$downloadUrl = "https://docs.google.com/feeds/download/spreadsheets/Export?key=0Ak-8t6vA7YRrdEpnZlVKckIwM1BLMV9YSVJGS202bEE&exportFormat=xlsx";
// $downloadUrl = "https://docs.google.com/spreadsheets/d/1wo2YZ6kMIYJZEOgZ5Px5rY-H8VVjQQYrtdSw7vtsGEk/export?format=xlsx&id=1wo2YZ6kMIYJZEOgZ5Px5rY-H8VVjQQYrtdSw7vtsGEk";
$downloadUrl = "https://docs.google.com/spreadsheets/d/1wo2YZ6kMIYJZEOgZ5Px5rY-H8VVjQQYrtdSw7vtsGEk/export?format=ods&id=1wo2YZ6kMIYJZEOgZ5Px5rY-H8VVjQQYrtdSw7vtsGEk";

$request = new Google_HttpRequest($downloadUrl, 'GET', null, null);
$httpRequest = Google_Client::$io->authenticatedRequest($request);

if ($httpRequest->getResponseHttpCode() == 200) {
  $response = $httpRequest->getResponseBody();
} else {
  $response = null;
}

if (!empty($response)) {
    file_put_contents(UPLOAD_PATH . 'config.ods', $response);
    header('Location: uploadConfig.php?local=yes');
} else {
    header('Location: uploadConfig.php?local=yes&error=unknown error');
}

