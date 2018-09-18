<?php

use GuzzleClient;

/**
 * Object storage
 */
class Storage
{

    /**
     * @var \GuzzleClient
     */
    private $storageClient;

    /**
     * Storage constructor.
     */
    public function __construct()
    {
        $this->storageClient = new GuzzleClient();
    }

    /**
     * @param string $file
     *
     * @return boolean
     */
    public function upload(string $file): bool
    {
        return $this->storageClient->upload($file);
    }

    /**
     * @return string
     */
    public function url(): string
    {

    }
}
