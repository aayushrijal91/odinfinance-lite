<?php
include __DIR__ . '/../functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_server_secret;
    $recaptcha_response = $_POST['token'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    try {
        if ($recaptcha->score < 0.5) {
            throw new Exception('Low Score');
        }

        $to = $admin_email;

        $subject = "Message from " . $site;

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $suburb = $_POST['suburb'];
        $abn = $_POST['abn'];
        $employmentStatus = $_POST['employmentStatus'];
        $weeklyIncome = $_POST['weeklyIncome'];
        $amountRequired = $_POST['amountRequired'];
        $bestSuits = $_POST['bestSuits'];
        $message = $_POST['message'];

        $message = '<!DOCTYPE html><html><body>' .
            'Name: <strong>' . strip_tags($firstName) . " " . strip_tags($lastName) . '</strong><br>' .
            'Phone: <strong>' . strip_tags($phone) . '</strong><br>' .
            'Email Address: <strong>' . strip_tags($email) . '</strong><br>' .
            'Suburb: <strong>' . strip_tags($suburb) . '</strong><br>' .
            'ABN: <strong>' . strip_tags($abn) . '</strong><br>' .
            'Employment Status: <strong>' . strip_tags($employmentStatus) . '</strong><br>' .
            'Weekly Income: <strong>' . strip_tags($weeklyIncome) . '</strong><br>' .
            'Amount Required: <strong>' . strip_tags($amountRequired) . '</strong><br>' .
            'What Best Suits You: <strong>' . strip_tags($bestSuits) . '</strong><br>' .
            'Message: <strong>' . strip_tags($message) . '</strong>';

        $headers = "MIME-Version: 1.0\r\n" .
            "Content-type: text/html; charset=utf-8\r\n" .
            "From: " . $site . " <" . $no_reply_email . ">" . "\r\n" .
            "Bcc: " . $bcc_email . "\r\n" .
            "Reply-To: " . $site . " <" . $no_reply_email . ">" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
        $result = mail($to, $subject, $message, $headers);

        if ($result) {
            header('location:./../thankyou');
        } else {
            throw new Exception('Failed, please submit form again or call us directly.');
        }
    } catch (Exception $e) {
        echo '<script language="javascript">alert("' . $e->getMessage() . '")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
    }
}
