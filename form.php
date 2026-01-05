<?php
echo"
<!DOCTYPE html>
<html>
<head>
    <title>College Admission Form</title>

    <style>
        body { font-family: Arial; text-align: center; margin-top: 80px; }
        input, button { padding: 6px; margin: 6px; width: 220px; }
    </style>
</head>

<body>

    <h2>College Admission Form</h2>

    <form onsubmit='showDetails(); return false;'>
        <input type='text' id='name' placeholder='Student Name' required><br>
        <input type='number' id='mobile' placeholder='Mobile Number' required><br>
        <input type='text' id='school' placeholder='School Name' required><br>
        <button type='submit'>Submit</button>
    </form>

    <script>
        function showDetails() {
            let name = document.getElementById('name').value;
            let mobile = document.getElementById('mobile').value;
            let school = document.getElementById('school').value;

            document.write(
                '<h1>Welcome ' + name + '</h1>' +
                '<p>Mobile: ' + mobile + '</p>' +
                '<p>School: ' + school + '</p>'
            );
        }
    </script>

</body>
</html>"
?>