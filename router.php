<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false; // serve the requested resource as-is
} else {
    include 'hello.php'; // serve hello.php for all other requests
}
?>
