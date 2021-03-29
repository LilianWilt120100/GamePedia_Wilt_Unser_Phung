<?php

require_once __DIR__ . '/vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as DB;

use games\models\Character;
use games\models\Company;

$db = new DB();
$config = parse_ini_file(__DIR__.'/src/conf/db.config.ini');
if($config) {
    $db->addConnection($config);
}
$db->setAsGlobal();
$db->bootEloquent();
