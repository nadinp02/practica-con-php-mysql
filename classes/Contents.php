<?php

namespace Clases;

include_once 'database.php';


class Contents extends DB
{
    function __construct()
    {
        parent::__construct();
    }


    public function list()
    {
        $items = [];

        try {
            $query = $this->connect()->query("SELECT*FROM contenido");

            while ($row = $query->fetch()) {
                array_push($items, $row);
            }

            return $items;
        } catch (\PDOException $e) {
            return [];
        }
    }

    public function create($item)
    {

        $query = $this->connect()->prepare("INSERT INTO contenido ( `title`, `content`, `keywords`, `description`, `category`) VALUES (:title ,:content, :keywords, :description, :category)");
        try {
            $query->execute($item);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
}



    
        // public function getById($id){
        //     $item = new Contents();
    
        //     $query = $this->db->connect()->prepare("SELECT * FROM contenido WHERE content = :content");
        //     try{
        //         $query->execute(['content' => $id]);
    
        //         while($row =$query->fetch()){
                  
        //             $item->content = $row['content'];
        //             $item->nombre = $row['title'];

        //         }
        //         return $item;

        //     }catch(PDOException $e){
        //         return null;
    
        //     }
        // }
    
    //     public function update($item){
    //         $query = $this->db->connect()->prepare("UPDATE contenido SET content = :content WHERE nombre = :nombre");
    //         try{
    //             $query->execute([
    //                 'content'=> $item['content'],
    //                 'nombre'=> $item['nombre'],
    //             ]);
    //             return true;
    
    //         }catch(PDOPException $e){
    //             return false;
    
    //         }
    
    //     }
    
    //     public function delete($id){
    //         $query = $this->db->connect()->prepare("DELETE FROM contenido  WHERE content = :id");
    //         try{
    //             $query->execute([
    //                 'id' => $id,
    //             ]);
    //             return true;
    
    //         }catch(PDOPException $e){
    //             return false;
    
    //         }
    
    //     }
    // }


    // public function update($contenido){
    //     $query = $this->db->connect()->prepare("UPDATE contenido SET nombre = :nombre, content = :content WHERE nombre = :nombre");
    //     try{
    //         $query->execute([
    //             'nombre'=> $contenido['nombre'],
    //             'content'=> $contenido['content'],
    //         ]);
    //         return true;

    //     }catch(PDOPException $e){
    //         return false;

    //     }

    // }

    // public function showResults(){
    //     return $this->connect()->query('SELECT * FROM contenido');
    // }
