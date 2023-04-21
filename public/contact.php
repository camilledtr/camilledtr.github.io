<?php
if (isset($_POST['message'])) {
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $subject = $_POST['subject'];
    // $message = $_POST['message'];

    $name = 'cam';
    $email = 'camilledr10@gmail.com';
    $subject = 'cc';
    $message = 'cccc';

    $mailTo = "camilledr10@gmail.com";
    $result = mail($mailTo, $subject, $message, 'From:' . $email);

    if ($result) {
        echo '<p class="form-status">Mail successfully sent!</p>';
    } else {
        echo '<p class="form-status">Something went wrong. Please try again or contact the administrator.</p>';
    }
}
?>
