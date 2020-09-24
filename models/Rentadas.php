<?php

/**
 * modelo de peliculas
 */
class Rentadas
{
    private $id;
    private $name;
    private $description;
    private $user_id;
    private $status_id;
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getAll()
    {
        try {
            $strSql = 'SELECT m.*, u.name as user, s.name as status FROM movies m INNER JOIN users u INNER JOIN statuses s ON s.id=m.status_id AND u.id=m.user_id';
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function newRentadas($data)
    {
        try {
            $this->pdo->insert('renta', $data);
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function editRenta($data)
    {
        try {
            $strWhere = 'id=' . $data['id'];
            $this->pdo->update('renta', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function deleteRenta($data)
    {
        try {
            $strWhere = 'id=' . $data['id'];
            $this->pdo->delete('movies', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function getById($id)
    {
        try {
            $strSql = "SELECT * FROM renta WHERE id=:id";
            $array = ['id' => $id];
            $query = $this->pdo->select($strSql, $array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getLastId()
    {
        try {
            $strSql = "SELECT MAX(id) as id FROM renta";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function saveCategoryMovie($arrayCategories, $lastIdMovie)
    {
        try {
            foreach ($arrayCategories as $category) {
                $data = [
                    'movie_id'      =>  $lastIdMovie,
                    'category_id'   =>  $category["id"]
                ];

                $this->pdo->insert('category_movie', $data);
            } 

            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }    
    }

    
}