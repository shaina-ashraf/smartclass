<?php
header('Content-type: application/json');

// Encode data
if(isset($response)) {
    echo json_encode($response);
}
else
    echo json_encode(array('error' => true));