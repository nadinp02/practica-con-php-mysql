<?php
namespace Clases;
include_once 'database.php';


class Images extends Contents
{
    function __construct()
    {
        $dbh = parent::__construct();
       
    }

     public function list()
     {
         $items = [];

         try {
             $query = $this->connect()->query("SELECT * FROM images");

             while ($row = $query->fetch()) {
                 array_push($items, $row);
             }

             return $items;
        } catch (\PDOException $e) {
             return [];
         }
     }

    public function create($archivo)
    {
        $query = $this->connect()->prepare("INSERT INTO images (`url`) VALUES (:url)");
        try {
            $query->execute($archivo);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function getById($id)
    {
        $query = $this->connect()->prepare("SELECT * FROM images WHERE id = '". $id ."'");
        try {
            $query->execute();
            $row = $query->fetch();
            return $row;
        } catch (\PDOException $e) {
            return null;
        }
    }
    
    public function update($id, $url){
        $query = $this->connect()->prepare("UPDATE images SET url = :url WHERE id = '". $id ."'");
        
        try{
            $query->execute();

            return true;

        } catch (\PDOException $e) {
            return false;
        }

    }

    
     public function delete($id){
     $query = $this->connect()->prepare("DELETE FROM images  WHERE id ='". $id ."'");
        try{
            $query->execute();
            return true;
    
        } catch (\PDOException $e) {
            return false;
        }
    }

    function view($id)
    {
        $query = $this->connect()->prepare("SELECT * FROM contenido WHERE id ='". $id ."'");
        try {
            $query->execute();
            return  $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

}


