<?php
class Images extends Contents
{
    private $dbh;
    function __construct()
    {
        $dbh = parent::__construct();
    }

    function list() {
        $this->dbh->query("SELECT * FROM contents");
        return 
    } 

}