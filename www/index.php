<?php

// with protocol 4.2 everything works
try {
    $connection = new PDO('dblib:version=4.2;host=sybase:5000', 'sa', 'myPassword');
    var_dump($connection);
} catch (Exception $e) {
    var_dump($e->getMessage());
}

// with dsn protocol 5.0 > errors
try {
    /**
     * generate error inside docker container sybase path: /opt/sybase/ASE-16_0/install/MYSYBASE.log
     * 00:0002:00000:00028:2024/02/29 14:56:44.89 server  Error: 1621, Severity: 18, State: 1
     * 00:0002:00000:00028:2024/02/29 14:56:44.89 server  Type '10' not allowed before login.
     */
    $connection = new PDO('dblib:version=5.0;host=sybase:5000', 'sa', 'myPassword');
    var_dump($connection);
} catch (Exception $e) {
    var_dump($e->getMessage());
}

