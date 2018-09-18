<?php

/**
 * Storage client
 */
class StorageClient
{

    /**
     * @var string
     */
    private $file;

    /**
     * @param string $file
     *
     * @return bool
     */
    public function upload(string $file): bool
    {
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->file;
    }
}
