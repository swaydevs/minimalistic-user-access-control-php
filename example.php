<?php
include('AccessControl-class.php')

$accessControl = new AccessControl();

try {
  $accessControl->checkPermission('moderator', 'update');  // Returns true
  $accessControl->checkPermission('moderator', 'delete');  // Throws exception
} catch (Exception $e) {
  // Handle exception
}


?>
