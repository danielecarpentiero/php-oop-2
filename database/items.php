<?php

$database = file_get_contents(__DIR__ . '/items.json');
$result = json_decode($database, true);
