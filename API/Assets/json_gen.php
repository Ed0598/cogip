<?php

function json_gen($success, $message)
{
    return json_encode([
        'success'=> $success,
        'message'=> $message
    ]);
}