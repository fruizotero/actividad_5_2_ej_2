<?php

// const array_cookies = ["a", "b", "c", "c"];

function table_cookies($name_cookies)
{
    echo "<h2>Cookies creadas</h2>";

    echo '<table class="table table-striped">';
    echo "<thead>";
    echo "<tr>";
    echo "<th scope=\"col\">Cookie name</th>";
    echo "<th scope=\"col\">Cookie Cookie value</th>";
    echo "</tr>";
    
    foreach ($name_cookies as  $name_cookie) {
        $cookie_value = $_COOKIE[$name_cookie];
        echo "<tr>";
        echo "<td>$name_cookie</td>";
        echo "<td>$cookie_value</td>";
        echo "</tr>";
    }
    echo "</table>";
}


// function set_cookies()
// {
//     setcookie("a", 1);
//     setcookie("b", 1);
//     setcookie("c", 1);
//     setcookie("d", 1);
// }
