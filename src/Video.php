<?php

/**
 * Video processing
 */
class Video implements MediaInterface
{

    const VIDEO_MPG = 'mpg';
    const VIDEO_MOV = 'mov';

    /**
     * @param string $file
     *
     * @return boolean
     */
    public function processing(string $file): bool
    {
        $this->convert($file);

        return true;
    }

    /**
     * @param string $filePath
     * @param string $type
     *
     * @return boolean
     */
    public function convert(string $filePath, string $type = self::VIDEO_MPG): bool
    {
        return true;
    }
}
