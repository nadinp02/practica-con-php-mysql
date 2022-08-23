<?php
namespace Clases;
include_once 'database.php';
 

class Content extends DB{
        public function __construct(){
            parent::__construct();
        }
}


    //     public function get(){
    //         $items =[];
    
    //         try{
    //             $query = $this->db->connect()->query("SELECT*FROM contenido");
    
    //             while($row = $query->fetch()){
    //                 $item = new Contenido();
    //                 $item->nombre = $row['nombre'];
    //                 $item->content = $row['content'];
    
    //                 array_push($items, $item);
    //             }
    
    //             return $items;
    
    //         }catch(PDOException $e){
    //             return [];
    //         }
    
    //     }
    
    //     public function getById($id){
    //         $item = new Contenido();
    
    //         $query = $this->db->connect()->prepare("SELECT * FROM contenido WHERE content = :content");
    //         try{
    //             $query->execute(['content' => $id]);
    
    //             while($row =$query->fetch()){
                  
    //                 $item->content = $row['content'];
    //                 $item->nombre = $row['nombre'];

    //             }
    //             return $item;

    //         }catch(PDOException $e){
    //             return null;
    
    //         }
    //     }
    
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
    

