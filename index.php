<?php
// index.php

// Step 1: Initialise variables for later use
$name = "";
$message = "";
$error = "";
$success = "";

// Step 2: Check if the form was submitted using POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Trim removes extra spaces at the start and end of the string
    $name = trim($_POST["name"] ?? "");
    $message = trim($_POST["message"] ?? "");

    // Step 3: Basic validation
    if ($name === "" || $message === "") {
        $error = "Please fill in both your name and your message.";
    } else {
        // If both fields are filled, build a success message
        $success = "Thank you, " . htmlspecialchars($name) . "! We received your message:";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Feedback App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 40px auto;
            padding: 10px;
        }
        h1 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }
        button {
            margin-top: 15px;
            padding: 10px 15px;
            cursor: pointer;
        }
        .error {
            color: #b00020;
            margin-top: 10px;
        }
        .success {
            color: #006600;
            margin-top: 10px;
        }
        .message-box {
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #cccccc;
            background: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>PHP Feedback App</h1>
    <p>Enter your name and a short message, then submit the form.</p>

    <!-- Display error message if validation fails -->
    <?php if ($error !== ""): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <!-- Display success message and the user's feedback -->
    <?php if ($success !== ""): ?>
        <div class="success"><?php echo htmlspecialchars($success); ?></div>
        <div class="message-box">
            <strong>Your message:</strong>
            <p><?php echo nl2br(htmlspecialchars($message)); ?></p>
        </div>
    <?php endif; ?>

    <!-- Feedback form -->
    <form method="POST" action="">
        <label for="name">Your Name:</label>
        <input
            type="text"
            id="name"
            name="name"
            value="<?php echo htmlspecialchars($name); ?>"
            placeholder="e.g. Jane Doe"
        >

        <label for="message">Your Message:</label>
        <textarea
            id="message"
            name="message"
            rows="4"
            placeholder="Write something here..."
        ><?php echo htmlspecialchars($message); ?></textarea>

        <button type="submit">Send Feedback</button>
    </form>
</body>
</html>
