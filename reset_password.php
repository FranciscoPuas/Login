<?php // reset_password.php ?>
<?php
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    // Generate new password and update in database
}
?>