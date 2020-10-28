<?php

namespace ForwardForce\Workiz\Tests;

use ForwardForce\Workiz\HttpClient;
use PHPUnit\Framework\TestCase;

class HttpClientTest extends TestCase
{
    public function testBaseURL()
    {
        $fixture = new HttpClient('123456');

        try {
            $reflector = new \ReflectionProperty($fixture, 'client');
            $reflector->setAccessible(true);
            $path = $reflector->getValue($fixture)->getConfig()['base_uri']->getPath();
            $this->assertSame('/api/v1/123456/', $path);
        } catch (\ReflectionException $e) {
            $this->assertTrue(false);
        }
    }

    public function testBuildQuery()
    {
        try {
            $fixture = new HttpClient('123456');
            $reflector = new \ReflectionProperty($fixture, 'records');
            $reflector->setAccessible(true);
            $records = $reflector->getValue($fixture);

            $reflector = new \ReflectionProperty($fixture, 'offset');
            $reflector->setAccessible(true);
            $offset = $reflector->getValue($fixture);

            $reflector = new \ReflectionMethod($fixture, 'buildQuery');
            $reflector->setAccessible(true);

            $query = $reflector->invoke($fixture, 'test');
            $this->assertSame('test/?offset=' . $offset . '&records=' . $records, $query);

            $fixture = new HttpClient('123456');
            $fixture->addQueryParameter('foo', 'bar');
            $query = $reflector->invoke($fixture, 'test');
            $this->assertSame('test/?offset=' . $offset . '&records=' . $records . '&foo=bar', $query);
        } catch (\ReflectionException $e) {
            $this->assertTrue(false);
        }
    }

}
