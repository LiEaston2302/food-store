<?php
function error_handler($e_number, $e_message, $e_file, $e_line, $e_vars = [])
{
    $message = "<div style=\"color: red;\"><h3>An error occurred</h3>";
    $message .= "<p>";
    $message .= "<strong>File:</strong> $e_file<br>";
    $message .= "<strong>Line:</strong> $e_line<br>";
    $message .= "<strong>Message:</strong> $e_message<br>";
    $message .= "</p></div>";

    if (LOCAL) {
        echo $message;
        die();
    } else {
        if ($e_number == E_USER_ERROR) {
            $message = "<h3>An error occurred</h3>";
            $message .= "<p>Please try again later</p>";
            echo $message;
            die();
        }
    }
}
set_error_handler("error_handler");
