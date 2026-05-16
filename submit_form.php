<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $task = trim($_POST['task'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if(empty($name) || empty($email)) {
        die("Please complete all required fields");
    }

    $name = strip_tags($name);
    $email = strip_tags($email);
    $phone = strip_tags($phone);
    $task = strip_tags($task);
    $message = strip_tags($message);

    include 'db_connect.php';

    $sql = "INSERT INTO volunteers_t (name, email, phone, task, message) VALUES (:name, :email, :phone, :task, :message)";

    $stmt = $pdo->prepare($sql);

    $stmt-> execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':task' => $task,
        ':message' => $message
    ]);

    echo "Thank you. Your volunteer form has been submitted successfully.";

} else {
    echo "No form data submitted.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Received</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
            margin: 40px auto;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        .output {
            background: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
        }

        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>

    <h1>Form Submission Received</h1>

    <div class="output">
        <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
        <p><strong>Task:</strong> <?php echo htmlspecialchars($task); ?></p>
        <p><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($message)); ?></p>
    </div>

</body>
</html>