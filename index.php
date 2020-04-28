<?php

$return = array_merge($_GET, $_POST);

header('Content-Type: application/json');

echo json_encode(array_filter($return));