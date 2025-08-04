<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $phone_code = trim($_POST['phone_code'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validate required fields
    if (empty($name) || empty($email) || empty($company) || empty($phone) || empty($message)) {
        header("Location: contact.html?status=error");
        exit();
    }

    $full_phone = $phone_code . $phone;

    $stmt = $conn->prepare("INSERT INTO contacts (name, email, company, phone, message) VALUES (?, ?, ?, ?, ?)");

    if (!$stmt) {
        header("Location: contact.html?status=dberror");
        exit();
    }

    $stmt->bind_param("sssss", $name, $email, $company, $full_phone, $message);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        header("Location: contact.html?status=success");
        exit();
    } else {
        $stmt->close();
        $conn->close();
        header("Location: contact.html?status=fail");
        exit();
    }
}
header("Location: contact.html?success=1");
exit();

?>
