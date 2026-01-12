
<?php

// include       → warning + script continues
// require       → fatal error + script stops
// include_once  → loads once, ignores duplicates
// require_once  → loads once, stops if missing

// include 'page1.php';
require 'page1.php';
echo "
<html>
<body>
<h1>Admission Form</h1>
    <form method='post' action=''>
        <label for='name'>Name:</label>
        <input type='text' id='name' name='name' required><br><br>
        
        <label for='email'>Email:</label>
        <input type='email' id='email' name='email' required><br><br>
        
        <label for='phone'>Phone:</label>
        <input type='tel' id='phone' name='phone' required><br><br>
        
        <input type='submit' value='Submit Application'>
    </form>
</body>
</html>";
?>