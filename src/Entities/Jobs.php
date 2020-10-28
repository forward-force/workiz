<?php

namespace ForwardForce\Workiz\Entities;

use ForwardForce\Workiz\Contracts\ApiAwareContract;
use ForwardForce\Workiz\HttpClient;
use GuzzleHttp\Exception\GuzzleException;

class Jobs extends HttpClient implements ApiAwareContract
{
    /**
     * Get all jobs (paginated)
     *
     * @return array
     * @throws GuzzleException
     */
    public function getAll(): array
    {
        return $this->get($this->buildQuery('job/all'));
    }

    /**
     * Get Job by its uuid
     *
     * @param string $uuid
     * @return array
     * @throws GuzzleException
     */
    public function getById(string $uuid): array
    {
        $job = $this->get('job/get/' . $uuid . '/');
        return !empty($job) ? reset($job) : [];
    }
}
