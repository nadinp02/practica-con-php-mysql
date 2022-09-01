<?php

namespace Clases;
include_once 'database.php';
include_once 'Contents.php';

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
?>

<h2 class="mt-4">Images</h2>
