<?php

use Model\Database;

namespace Model;

/**
 * BooksManager
 * Classe 
 * 
 * Liste des fonctions
 * - getBooks
 * - getLivres
 */
class BooksManager extends Database
{

    public function getBooks(int $id)
    {
        $db = $this->getPDO();
        $req = $db->prepare('SELECT * FROM books WHERE id = ?');
        $req->execute(array($id));
        $data = $req->fetch();

        return $data;
    }

    public function getLivres()
    {
        $db = $this->getPDO();
        $req = $db->query('SELECT * FROM books');

        return $req;
    }

    public function insertLivres($titre,$auteur,$description,$pages,$images){
        $db = $this->getPDO();
        $req = 'INSERT INTO books (title, author, description, nbPages, images) 
                VALUES (:titre, :auteur, :description, :nbPages, :images)';
        $stmt = $db->prepare($req);
        $resultat = $stmt->execute(array(
            "titre" => $titre,
            "auteur" => $auteur,
            "description" => $description,
            "nbPages" => $pages,
            "images" => $images,
        ));
        $stmt->closeCursor();
        if($resultat >0) return true;
        else return false;
    }
}
