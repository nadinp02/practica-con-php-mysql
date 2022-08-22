<?php
namespace Clases;
include_once 'database.php';
 

class Content extends DB{
    public function __construct(){
        parent::__construct();
    }


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
}
?>