<?php

namespace ForwardForce\Workiz\Entities;

use ForwardForce\Workiz\Contracts\ApiAwareContract;
use ForwardForce\Workiz\HttpClient;

class TimeOff extends HttpClient implements ApiAwareContract
{

    /**
     * @inheritDoc
     */
    public function getAll(): array
    {
        return $this->get('timeoff/get');
    }

    /**
     * @inheritDoc
     */
    public function getById(string $username): array
    {
        $timeOff = $this->get('timeoff/get/' . $username . '/');
        return !empty($timeOff) ? reset($timeOff) : [];
    }
}
