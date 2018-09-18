<?php

/**
 * File
 */
class File
{

    const TYPE_AUDIO = 'audio';
    const TYPE_VIDEO = 'video';
    const TYPE_IMAGE = 'image';
    const TYPE_DOCUMENT = 'document';

    /**
     * @var array
     */
    private $allowedTypes = [
        File::TYPE_AUDIO,
        File::TYPE_IMAGE,
        File::TYPE_VIDEO,
    ];

    /**
     * @param string $file
     *
     * @return string
     */
    public function getType(string $file): string
    {
        return self::TYPE_AUDIO;
    }

    /**
     * @param string $file
     *
     * @return boolean
     */
    public function isAllowed($file)
    {
        $fileType = $this->getType($file);

        return in_array($fileType, $this->allowedTypes, true);
    }
}
