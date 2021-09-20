<?php

class IoC
{
    /**
     * @var PDO The connection to the database
     */
    protected $db;

    /**
     * Create a new instance of Photo and ser dependencies.
     */
    public static function newPhoto()
    {
        $photo = new Photo;
        $photo->setDB(static::$db);

        return $photo;
    }
}

$photo = IoC::newPhoto();