<?php

header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Content-Type: application/json');

/* if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
} */

// JWT секретный ключ
define('JWT_SECRET', 'JWT_секретный_ключ');
define('JWT_ALGORITHM', 'HS256');