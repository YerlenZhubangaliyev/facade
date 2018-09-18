<?php

/**
 * Image processing
 */
class Image implements MediaInterface
{

    const IMAGE_PNG = 'png';
    const IMAGE_JPG = 'png';

    /**
     * @param string $file
     *
     * @return boolean
     */
    public function processing(string $file):bool
    {
        $this->convert($file);
        $this->resize($file, 100, 20);

        return true;
    }

    /**
     * @param string $filePath
     * @param string $type
     *
     * @return boolean
     */
    public function convert(string $filePath, string $type = self::IMAGE_PNG): bool
    {
        return true;
    }

    /**
     * @param integer $width
     * @param integer $height
     *
     * @return boolean
     */
    public function resize(string $file, int $width, int $height): bool
    {
        return true;
    }
}
