<?php
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>SLCS College</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        header p {
            margin: 10px 0;
        }

        nav {
            margin-top: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to SLCS College</h1>

    <p>
        This is the landing page for our college.
        We offer various programs and courses.
    </p>

    <nav>
        <a href='index.php'>Home</a>
        <a href='admission.php'>Admissions</a>
        <a href='courses.php'>Courses</a>
        <a href='contact.php'>Contact</a>
    </nav>
</header>
";
?>
