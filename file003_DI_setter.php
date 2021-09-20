<?php
class Photo{
    /**
     * @var PDO The connection to the database
     */
    protected $db;

    public function __construct() {}

    /**
     * Sets the database connection
     * @param PDO $dbConn The connection
     */
    public function setDB($dbConn)
    {
        $this->db = $dbConn;
    }
}

$photo = new Photo;
$photo->setDB($dbConn);