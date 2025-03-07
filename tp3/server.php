<?php
function nettoyag_input($val)
{
    return filter_var(strip_tags(htmlspecialchars(trim($val))), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

$error_text = "";

//REGULAR EXPRESSIONS
$reg = "/^[a-zA-Z\s]+$/";



//validate the name
$name = nettoyag_input($_POST["nom"]);
if (!preg_match($reg, $name)) {
    $error_text .= "Name Error !! ";
}
//validate the mail
$mail = filter_var(nettoyag_input($_POST["mail"]), FILTER_SANITIZE_EMAIL);
if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
    $error_text .= " --- Mail Error !! ";
}

//validate the age
$age = filter_var(nettoyag_input($_POST["age"]), FILTER_SANITIZE_NUMBER_FLOAT);
if (filter_var($age, FILTER_VALIDATE_FLOAT) === false) {
    $error_text .= " --- Age Error !! ";
}

//validate the url
$url = filter_var(nettoyag_input($_POST["site"], FILTER_SANITIZE_URL));
if (filter_var($url, FILTER_VALIDATE_URL) === false) {
    $error_text .= "--- Url Error !! ";
}
//vaidate the msg
$msg = nettoyag_input($_POST["message"]);
if (!preg_match($reg, $msg) || strlen($msg) > 50) {
    $error_text .= "--- Message Error !! ";
}
if ($error_text) {
    echo $error_text;
} else {
    echo "name = " . $name . "</br>";
    echo "mail = " . $mail . "</br>";
    echo "age = " . $age . "</br>";
    echo "url = " . $url . "</br>";
    echo "msg = " . $msg . "</br>";
}

?>