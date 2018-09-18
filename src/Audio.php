<?php

/**
 * Audio processing
 */
class Audio implements MediaInterface
{

    const AUDIO_MP3 = 'mp3';
    const AUDIO_MPA = 'mpa';

    /**
     * @param string $file
     *
     * @return boolean
     */
    public function processing(string $file):bool
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
    public function convert(string $filePath, string $type = self::AUDIO_MP3): bool
    {
        return true;
    }
}
