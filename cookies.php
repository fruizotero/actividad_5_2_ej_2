<?php 

function setearCookies(array $POST_ARRAY){
    $cookieName = $POST_ARRAY['cookie_name'];
    $cookieValue = $POST_ARRAY['cookie_value'];
    $cookieTime = $POST_ARRAY['cookie_expiration'];

    setCookie($cookieName, $cookieValue, time()+$cookieTime);
}