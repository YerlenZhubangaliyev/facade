<?php

/**
 * Interface MediaInterface
 */
interface MediaInterface
{

    /**
     * @param string $file
     *
     * @return mixed
     */
    public function processing(string $file): bool;

    /**
     * @param string $filePath
     * @param string $type
     *
     * @return boolean
     */
    public function convert(string $filePath, string $type): bool;
}
