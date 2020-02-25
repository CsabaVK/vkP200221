<?php
$config = getConfig ($filePath);

$pdo=getConnect($config);

$users=getUsers($pdo);
