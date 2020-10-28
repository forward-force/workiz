<?php


namespace ForwardForce\Workiz\Traits;


trait Parametarable
{
    protected array $query = [];

    /**
     * Add a query parameter
     *
     * @param string $key
     * @param $value
     * @return $this
     */
    protected function addQueryParameter(string $key, $value): self
    {
        $this->query[$key] = $value;
        return $this;
    }

    /**
     * Remove a query parameter
     *
     * @param string $key
     * @return $this
     */
    protected function removeQueryParameter(string $key): self
    {
        unset($this->query[$key]);
        return $this;
    }


    /**
     * Empty query parameter array
     *
     * @return $this
     */
    protected function resetQueryParameters(): self
    {
        $this->query = [];
        return $this;
    }

    /**
     * Get query string
     *
     * @return array
     */
    public function getQueryString(): array
    {
        return $this->query;
    }
}
