<?php

/**
 * Object storage
 */
class Storage
{

    /**
     * @var \StorageClient
     */
    private $storageClient;

    /**
     * Storage constructor.
     */
    public function __construct()
    {
        $this->storageClient = new StorageClient();
    }

    /**
     * @param string $file
     *
     * @return boolean
     */
    public function upload(string $file): bool
    {
        $this->storageClient->upload($file);

        return true;
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return $this->storageClient->getFilePath();
    }
}
