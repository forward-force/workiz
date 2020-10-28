# Workiz API - PHP Wrapper | WIP

## Authentication

```php
$foo = new \ForwardForce\Workiz\Workiz();
$foo->getJobs();
```

## Contributions

To run locally, you can use the docker container provided here. You can run it like so:

```
docker-compose up
```

Then you can ssh into the `php-fpm` container. Please note, you need to set your WORKIZ API key and SECRET as 
environmental variables `$WORKIZ_TOKEN` and `$WORKIZ_SECRET` respectively.

