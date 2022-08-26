<?php
namespace Clases;

class Images extends DB
{
    private $dbh;
    function __construct()
    {
        $dbh = parent::__construct();
    }

    function list() {
        $this->dbh->query("SELECT * FROM images");
        return;
    } 

}