# PHP Feedback App – Beginner’s Toolkit with GenAI
Moringa AI Capstone Project

---

## 📌 Overview

This project is a simple **PHP Feedback Web Application** created as part of the:

**Moringa School – Beginner’s Toolkit with GenAI Capstone**

The application allows a user to:

- enter their name and a short message
- submit the form
- receive a personalised confirmation response

It demonstrates how a beginner can learn a new technology using **PHP + GenAI support**.

---

## ✅ Features

- PHP-based web application
- Simple and clean UI
- POST form handling
- Input validation
- Displays user message back securely
- No database required
- Runs locally using the built-in PHP server

---

## 🧰 Requirements

To run this project, you need:

- PHP 8.x or later
- Terminal / Command Line
- Web browser (Chrome, Firefox, Edge)
- Text editor (VS Code recommended)

Optional:

- XAMPP / WAMP / MAMP

---

## 🚀 Installation & Setup

### Step 1: Clone the repository


git clone git@github.com:abudhosamuel/php-feedback-app.git
cd php-feedback-app

### Step 2: Start the PHP development server

php -S localhost:8000


### Step 3: Open the application
Go to: 

http://localhost:8000

###  Project Structure
php-feedback-app/
├── index.php
├── README.md
└── prompt-journal.txt (optional)


### 🧪 Testing
The application was tested for:
✅ Form submission
✅ Empty field validation
✅ Special character handling
✅ Page reload behaviour
Peer testing:
A peer followed the README instructions and successfully ran the app.

### 🤖 How GenAI Was Used
GenAI (ai.moringaschool.com / ChatGPT) helped with:
choosing the technology (PHP)
installing PHP and setting up the environment
understanding PHP syntax
building the form handling logic
debugging errors such as Undefined index
improving the UI with simple CSS
structuring documentation (Toolkit + README)

However:
I still needed to test the code manually
some instructions required adjustments
not all AI responses matched my OS environment



###  Common Issues & Fixes
php command not found
Install PHP or ensure it is added to PATH
Browser shows raw PHP code
Access via:
http://localhost:8000

not file:///
Undefined index warning
Ensure:
if ($_SERVER["REQUEST_METHOD"] === "POST")

is used before accessing $_POST

### 🔧 Technologies Used
PHP 8.x
HTML5
CSS (inline)
Built-in PHP Development Server


📜 Licence
This project is for educational purposes as part of the Moringa School AI Capstone.
You may reuse or adapt it for learning.

### 🙌 Acknowledgements
Moringa School
GenAI tools used during development





