<?php

namespace Clases;

include_once 'database.php';

class Contents extends DB
{
    public $imagenes;

    function __construct()
    {
        parent::__construct();
        $this->imagenes = new Images();
    }

    public function list()
    {
        $items = [];
        try {
            $query = $this->connect()->query("SELECT * FROM contenido");
            while ($row = $query->fetch()) {
                $imagenesData = $this->imagenes->getByCod($row['cod']);
                $row['imagenes'] = $imagenesData;
                array_push($items, $row);
            }
            return $items;
        } catch (\PDOException $e) {
            return [];
        }
    }

    public function create($item)
    {

        $query = $this->connect()->prepare("INSERT INTO contenido ( `title`, `content`, `keywords`, `description`, `category`,`cod`) VALUES (:title ,:content, :keywords, :description, :category, :cod)");
        try {
            $query->execute($item);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }


    public function getById($id)
    {
        $query = $this->connect()->prepare("SELECT * FROM contenido WHERE id = :id");
        try {
            $query->execute(['id' => $id]);
            $row = $query->fetch();
            $imagenesData = $this->imagenes->getByCod($row['cod']);
            $row['imagenes'] = $imagenesData;
            return $row;
        } catch (\PDOException $e) {
            return null;
        }
    }


    public function update($item, $id)
    {
        $query = $this->connect()->prepare("UPDATE contenido SET title = :title, content = :content, keywords = :keywords, description = :description, category = :category  WHERE id = '" . $id . "'");

        try {
            $query->execute($item);

            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }


    public function delete($id)
    {
        $imagenes = new Images();

        // $this->imagenes->delete($idImage);
        $item = $this->getById($id);
        var_dump($item);

        $imagenes->delete($item["imagenes"]['id']);


        $query = $this->connect()->prepare("DELETE FROM contenido  WHERE id ='" . $id . "'");
        try {
            $query->execute();
            // $imagenes->delete($item["imagenes"]['id']);
            // unlink($item["imagenes"]['url']);
            // foreach($item["imagenes"] as $imagen) {
            //     $this->imagenes->delete($imagen['id']);
            // }
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    function view($id)
    {
        $query = $this->connect()->prepare("SELECT * FROM contenido WHERE id ='" . $id . "'");
        try {
            $query->execute();
            return  $query->fetch(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            return false;
        }
    }
}
