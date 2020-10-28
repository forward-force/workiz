# Workiz API - PHP Wrapper

This is a wrapper around [Workiz API](https://workiz.com/). The API is very minimal, so this implementation is fairly simple.

## Authentication

In order to authenticate you need a token from Workiz. Head over to the developer portal to read updated procesure as how to
obtain one: https://developer.workiz.com/

Workiz is likely to give you a toke and a secret, the API requires the token only. 

## Jobs API

You can get all jobs via paginated list or a single job.

#### How to get all jobs:
```php
$workiz = new \ForwardForce\Workiz\Workiz('your-token');

try {
    $jobs = $workiz->jobs()->getAll();
    var_dump($jobs);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    var_dump($e->getMessage());
}
```

The example above will give you the first N number of jobs. N is the size of the page, set to 10 by default.

#### How to change the page size or paginate:
```php
$workiz = new \ForwardForce\Workiz\Workiz('your-token');

try {
    $jobs = $workiz->jobs()->take(25)->skip(10)->getAll();
    var_dump($jobs);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    var_dump($e->getMessage());
}
```

The example above illustrate how to change the page size (by using `take()`) and how to change the offset (by using `skip()`).
Therefore, the example above will take `25` records starting from the `10th` record (skipping the first 10). 

#### How to get a single job:
```php
$workiz = new \ForwardForce\Workiz\Workiz('your-token');

try {
    $jobs = $workiz->jobs()->getById('your-job-uuid');
    var_dump($jobs);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    var_dump($e->getMessage());
}
```
The example above illustrates how to get a single job by its uuid.

#### How to pass additional query parameters to the API:
```php
$workiz = new \ForwardForce\Workiz\Workiz('your-token');

try {
    $jobs = $workiz->jobs()->addQueryParameter('status', 'Pending')->getAll();
    var_dump($jobs);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    var_dump($e->getMessage());
}
```
The example above illustrates how to get only `pending` jobs. There are other helper methods as well such as `getQueryString`,
`resetQueryParameters`, `removeQueryParameter`, which may nor may not be useful. 

## Leads API

You can get all leads via paginated list or a single lead.

#### How to get all leads:
```php
$workiz = new \ForwardForce\Workiz\Workiz('your-token');

try {
    $leads = $workiz->leads()->getAll();
    var_dump($leads);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    var_dump($e->getMessage());
}
```

The example above will give you the first N number of leads. N is the size of the page, set to 10 by default.

#### How to change the page size or paginate:
```php
$workiz = new \ForwardForce\Workiz\Workiz('your-token');

try {
    $leads = $workiz->leads()->take(25)->skip(10)->getAll();
    var_dump($leads);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    var_dump($e->getMessage());
}
```

The example above illustrate how to change the page size (by using `take()`) and how to change the offset (by using `skip()`).
Therefore, the example above will take `25` records starting from the `10th` record (skipping the first 10). 

#### How to get a single lead:
```php
$workiz = new \ForwardForce\Workiz\Workiz('your-token');

try {
    $leads = $workiz->leads()->getById('your-lead-uuid');
    var_dump($leads);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    var_dump($e->getMessage());
}
```
The example above illustrates how to get a single lead by its uuid.

## Time Off API

You can get all timeOffs via paginated list or a single timeOff.

#### How to get all timeOffs:
```php
$workiz = new \ForwardForce\Workiz\Workiz('your-token');

try {
    $timeOffs = $workiz->timeOffs()->getAll();
    var_dump($timeOffs);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    var_dump($e->getMessage());
}
```

The example above will give you the first N number of timeOffs. N is the size of the page, set to 10 by default.

#### How to change the page size or paginate:
```php
$workiz = new \ForwardForce\Workiz\Workiz('your-token');

try {
    $timeOffs = $workiz->timeOffs()->take(25)->skip(10)->getAll();
    var_dump($timeOffs);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    var_dump($e->getMessage());
}
```

The example above illustrate how to change the page size (by using `take()`) and how to change the offset (by using `skip()`).
Therefore, the example above will take `25` records starting from the `10th` record (skipping the first 10). 

#### How to get a single timeOff:
```php
$workiz = new \ForwardForce\Workiz\Workiz('your-token');

try {
    $timeOffs = $workiz->timeOffs()->getById('your-timeOff-uuid');
    var_dump($timeOffs);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    var_dump($e->getMessage());
}
```
The example above illustrates how to get a single timeOff by its uuid.

## Contributions

To run locally, you can use the docker container provided here. You can run it like so:

```
docker-compose up
```

Then you can ssh into the `php-fpm` container. Please note, you need to set your WORKIZ API key and SECRET as 
environmental variables `$WORKIZ_TOKEN` and `$WORKIZ_SECRET` respectively. However, the secret is not needed at this time
you could set it to anything.

`xdebug` is fully configured to work as cli, hookup your favorite IDE to it and debug away!

There is auto-generated documentation as to how to run this library on local, please  take a look at [phpdocker/README.md](phpdocker/README.md)

#####If you find an issue, have a question, or a suggestion, please don't hesitate to open a github issue.

### Acknowledgments 

Thank you to [phpdocker.io](https://phpdocker.io) for making getting PHP environments effortless! 
