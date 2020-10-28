<?php

namespace ForwardForce\Workiz\Entities;

use ForwardForce\Workiz\Contracts\ApiAwareContract;
use ForwardForce\Workiz\HttpClient;
use GuzzleHttp\Exception\GuzzleException;

class Leads extends HttpClient implements ApiAwareContract
{
    /**
     * Get all leads (paginated)
     *
     * @return array
     * @throws GuzzleException
     */
    public function getAll(): array
    {
        return $this->get($this->buildQuery('lead/all'));
    }

    /**
     * Get Lead bu its uuid
     *
     * @param  string $uuid
     * @return array
     * @throws GuzzleException
     */
    public function getById(string $uuid): array
    {
        $lead = $this->get('lead/get/' . $uuid . '/');
        return !empty($lead) ? reset($lead) : [];
    }
}
