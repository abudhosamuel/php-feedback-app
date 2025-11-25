# Prompt-Powered Kickstart: Beginner’s Toolkit for PHP
## Moringa AI Capstone Project

---

## 1. Title & Objective

**Title:** Getting Started with PHP for a Simple Feedback Web App – A Beginner’s Toolkit

**Objective:**  
This toolkit enables a beginner to:

- Install and run PHP locally
- Create a simple PHP web application
- Handle form input using POST
- Display dynamic output
- Use GenAI prompts to learn and debug
- Document the learning process clearly

The end goal is a working **PHP Feedback Web App** where a user submits their name and a message, and the server responds with a personalised confirmation message.

---

## 2. Quick Summary of the Technology

**What is PHP?**  
PHP (Hypertext Preprocessor) is a server-side scripting language designed for web development. It runs on the server and outputs HTML to the browser.

**Where is it used?**
- websites and blogs
- contact and registration forms
- login systems
- dashboards
- APIs
- content management systems

**Real-world example:**  
WordPress, which powers over 40% of websites globally, is built using PHP.

---

## 3. System Requirements

You can run this project on:

- Windows 10+
- Linux (Ubuntu recommended)
- macOS

**Tools Used:**
- PHP 8.x
- VS Code (text editor)
- Terminal / Command Line
- Web Browser (Chrome / Firefox / Edge)

Optional:
- XAMPP / WAMP / MAMP

---

## 4. Installation & Setup Instructions

### 4.1 Check if PHP is installed

```bash
php -v
```

If a PHP version appears, continue.  
If not, install PHP:

### Windows (XAMPP recommended)

1. Download XAMPP
2. Install and open a terminal
3. Run:

```bash
php -v
```

### macOS (Homebrew)

```bash
brew install php
```

### Ubuntu/Linux

```bash
sudo apt update
sudo apt install php
```

---

### 4.2 Create Project Folder

```bash
mkdir php-feedback-app
cd php-feedback-app
```

Open in VS Code:

```bash
code .
```

---

### 4.3 Run the PHP Development Server

```bash
php -S localhost:8000
```

Open:

```
http://localhost:8000
```

---

## 5. Minimal Working Example

### 5.1 Description

This example:

- Shows a feedback form
- Accepts a user’s name and message
- Validates input
- Displays a personalised thank-you message
- Shows the submitted message back to the user

No database is required.

---

### 5.2 Code (`index.php`)

```php
<?php
// index.php

$name = "";
$message = "";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name === "" || $message === "") {
        $error = "Please fill in both your name and your message.";
    } else {
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
        h1 { text-align: center; }
        .error { color: #b00020; margin-top: 10px; }
        .success { color: #006600; margin-top: 10px; }
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

    <?php if ($error !== ""): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <?php if ($success !== ""): ?>
        <div class="success"><?php echo htmlspecialchars($success); ?></div>
        <div class="message-box">
            <strong>Your message:</strong>
            <p><?php echo nl2br(htmlspecialchars($message)); ?></p>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Your Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">

        <label>Your Message:</label>
        <textarea name="message" rows="4"><?php echo htmlspecialchars($message); ?></textarea>

        <button type="submit">Send Feedback</button>
    </form>
</body>
</html>
```

---

### 5.3 Expected Output

When opening the app:

✅ Form appears  
✅ Submitting empty fields shows an error  
✅ Submitting valid data displays:

```
Thank you, [name]! We received your message:
[message]
```

---

## 6. AI Prompt Journal

A full prompt journal is included separately in:

```
prompt-journal.txt
```

It contains:

- prompts used
- AI responses
- reflections
- curriculum references
- AI limitations

---

## 7. Common Issues & Fixes

### Issue 1: `php` not found
**Fix:** Install PHP or add to PATH

### Issue 2: 404 error
**Fix:** Start server in correct folder:

```bash
php -S localhost:8000
```

### Issue 3: Undefined index warnings
**Fix:**

```php
if ($_SERVER["REQUEST_METHOD"] === "POST")
```

### Issue 4: PHP code displaying as text
**Fix:** Access via:

```
http://localhost:8000
```

not `file:///`

---

## 8. Testing & Peer Review

I tested:

✅ Form submission  
✅ Empty submission validation  
✅ Special characters handling  
✅ Page reload behaviour

**Peer Test:**

A peer ran the app using the README instructions and successfully reproduced the results.

---

## 9. AI Limitations Noticed

During development, GenAI:

- gave general responses at times
- provided installation steps that did not fully match my OS
- assumed different environments
- required critical evaluation
- occasionally gave outdated commands

I still needed documentation and testing to confirm accuracy.

---

## 10. Reflection

GenAI helped me:

- choose technology
- install PHP
- understand syntax
- debug errors
- build the form
- improve UI
- structure documentation

However:

- I remained responsible for testing
- I had to evaluate responses
- I made corrections manually

AI improved my learning speed but did not replace hands-on work.

---

## 11. References

- https://www.php.net/
- https://www.php.net/manual/en/getting-started.php
- https://developer.mozilla.org/en-US/docs/Learn/Forms
- https://www.w3schools.com/php/

---

## 12. Conclusion

This toolkit demonstrates how a beginner can:

- learn a new technology using GenAI
- build a working PHP application
- document the learning process clearly
- test and refine their work

This project showed the value of combining AI assistance with active problem-solving.

