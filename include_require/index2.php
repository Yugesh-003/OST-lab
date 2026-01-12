
<?php

// include       → warning + script continues
// require       → fatal error + script stops
// include_once  → loads once, ignores duplicates
// require_once  → loads once, stops if missing

include 'header.php';
// require 'page1.php';
echo "
<html>
<body>

<h2>About Our College</h2>

<p>
    SLCS College has been serving the community for over two decades with a strong
    focus on academic excellence and student success. Our curriculum is designed
    to meet industry standards and global education requirements.
</p>

<h2>Why Choose SLCS College?</h2>

<p>
    • Experienced and qualified faculty members<br>
    • Well-equipped laboratories and libraries<br>
    • Career guidance and placement support<br>
    • Student-friendly campus environment
</p>

<h2>Admissions</h2>

<p>
    Admissions are currently open for the upcoming academic year.
    Eligible students are encouraged to apply early to secure their seats.
</p>



</body>
</html>";
// include "button.php";
require_once 'footer.php';
?>