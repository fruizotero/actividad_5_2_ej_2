<?php

echo "<h2>Cookies creadas</h2>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
}


function FunctionName($name_cookies)
{

    echo '<table class="table table-striped">';
    echo "<thead>";
    echo "<tr>";
    echo "<th scope=\"col\">Cookie name</th>";
    echo "<th scope=\"col\">Cookie Cookie value</th>";
    echo "</tr>";
    echo "</>";
    foreach ($name_cookies as  $name_cookie) {
        $cookie = $_COOKIE[$name_cookie];
    }
    echo "</table>";
}
