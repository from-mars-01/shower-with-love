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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Submission Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Shower with Love</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="navbar-nav ms-auto">
        <a class="nav-link" href="about.php">Our Story</a>
        <a class="nav-link" href="find-us.php">Find Us</a>
        <a class="nav-link" href="volunteer.php">Volunteer</a>
        <a class="nav-link" href="donate.php">Donate</a>
      </div>
    </div>
  </div>
</nav>
</header>
<body>
<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4">Form Submission Received</h1>
            <div class="output">
                <p>We appreciate your support and the difference you make in our community.</p>
                <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
                <p><strong>Task:</strong> <?php echo htmlspecialchars($task); ?></p>
                <p><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($message)); ?></p>
            </div>
        </div>
    </div>
</main>
</body>
</html>