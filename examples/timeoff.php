<?php
require_once __DIR__ . '../../vendor/autoload.php';

use ForwardForce\Workiz\Workiz;
use GuzzleHttp\Exception\GuzzleException;

//assumes token is in env var, or you can pass directly
$token = getenv('WORKIZ_TOKEN');

//instance of the Workiz client
$workiz = new Workiz($token);

//get all timeOffs, paginated - 10 at a time
try {
    $timeOffs = $workiz->timeOffs()->getAll();
    var_dump($timeOffs);
} catch (GuzzleException $e) {
    var_dump($e->getMessage());
}


//how to use limit - take 50 records from API starting at 0
try {
    $timeOffs = $workiz->timeOffs()->take(50)->getAll();
    var_dump($timeOffs);
} catch (GuzzleException $e) {
    var_dump($e->getMessage());
}

//how to use offset - take 50 records starting from the 10th record, so 50 records from the 10th record
try {
    $timeOffs = $workiz->timeOffs()->take(50)->skip(10)->getAll();
    var_dump($timeOffs);
} catch (GuzzleException $e) {
    var_dump($e->getMessage());
}

//get single timeOff
try {
    $timeOff = $workiz->timeOffs()->getById('BGN1234');
    var_dump($timeOff);
} catch (GuzzleException $e) {
    var_dump($e->getMessage());
}
