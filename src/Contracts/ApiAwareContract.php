<?php

namespace ForwardForce\Workiz\Contracts;

interface ApiAwareContract
{
    /**
     * Get all of entity
     *
     * @return array
     */
    public function getAll(): array;

    /**
     * Get entity by its id, could be uuid or some other identifier such as username
     *
     * @param string $uuid
     * @return array
     */
    public function getById(string $uuid): array;

}
