<?php
namespace Clases;
include_once 'database.php';
include_once 'Contents.php';


class Images extends Contents
{
    function __construct()
    {
        $dbh = parent::__construct();
       
    }

}


