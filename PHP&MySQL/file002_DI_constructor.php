<?php
class Photo{
    /**
     * @var PDO The connection to the database
     */
    protected $db;

    /**
     * Construct
     * @param PDO $db_conn The database connection
     */
    public function __construct($dbConn)
    {
        $this->db = $dbConn;
    }
}

$photo = new Photo($dbConn);