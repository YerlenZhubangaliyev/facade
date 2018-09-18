<?php

/**
 * Store media files [facade]
 */
final class Facade
{

    /**
     * @var Image
     */
    private $image;

    /**
     * @var Video
     */
    private $video;

    /**
     * @var Audio
     */
    private $audio;

    /**
     * @var Storage
     */
    private $storage;

    /**
     * @var File
     */
    private $file;

    /**
     * @var string
     */
    private $uploadedFile;

    /**
     * Facade constructor.
     */
    public function __construct()
    {
        $this->image   = new Image();
        $this->audio   = new Audio();
        $this->video   = new Video();
        $this->storage = new Storage();
        $this->file    = new File();
    }

    /**
     * @param string $file
     *
     * @return \Facade
     */
    public function upload(string $file): Facade
    {
        if (true === $this->file->isAllowed($file)) {
            /** @var MediaInterface $fileTypeInstance */
            $fileType         = $this->file->getType($file);
            $fileTypeInstance = $this->{$fileType};

            $fileTypeInstance->processing($file);

            $this->uploadedFile = $this->storage->upload($file);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl():string
    {
        return $this->storage->url();
    }
}
