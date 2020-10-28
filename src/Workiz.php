<?php

namespace ForwardForce\Workiz;

use ForwardForce\Workiz\Entities\Jobs;
use ForwardForce\Workiz\Entities\Leads;
use ForwardForce\Workiz\Entities\TimeOff;

class Workiz
{
    /**
     * Workiz API key
     *
     * @var string
     */
    protected string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Get jobs from API
     *
     * @return Jobs
     */
    public function jobs(): Jobs
    {
        return new Jobs($this->apiKey);
    }

    /**
     * Get leads from API
     *
     * @return Leads
     */
    public function leads(): Leads
    {
        return new Leads($this->apiKey);
    }

    /**
     * Get time off for users
     *
     * @return TimeOff
     */
    public function timeOff(): TimeOff
    {
        return new TimeOff($this->apiKey);
    }
}
