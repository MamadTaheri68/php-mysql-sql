<?php
class Photo{
    /**
     * @var PDO The connection to the database
     */
    protected $db;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->db = DB::getInstance();
    }
}