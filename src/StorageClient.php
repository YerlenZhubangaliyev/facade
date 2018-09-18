<?php

/**
 * Storage client
 */
class StorageClient
{

    const BASE_DOMAIN = 'cdn.dogovor24.kz';

    /**
     * @var string
     */
    private $file;

    /**
     * @param string $file
     *
     * @return void
     */
    public function upload(string $file): void
    {
        $this->file = $file;
    }

    /**
     * @param string $file
     *
     * @return string
     */
    public function download(string $file): string
    {
        return (string)'';
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return sprintf(
            "https://%s/%s",
            self::BASE_DOMAIN,
            $this->file
        );
    }
}
