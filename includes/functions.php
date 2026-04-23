<?php
function cleanInput($data){
    return htmlspecialchars(strip_tags(trim($data)));
}
function isValidEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
?>