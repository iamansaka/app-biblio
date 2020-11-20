<?php

use Model\Database;
use Model\Books;

namespace Model;

use PDO;

/**
 * BooksManager
 * Classe 
 * 
 * Liste des fonctions
 * - getBooks
 * - getLivres
 * - insertLivres
 * - addBooks
 * - getBook
 * - loadBooks
 */
class BooksManager extends Database
{
    private $myBooks = [];

    public function getBooks(int $id)
    {
        $db = $this->getPDO();
        $req = $db->prepare('SELECT * FROM books WHERE id = ?');
        $req->execute(array($id));
        $data = $req->fetch();

        return $data;
    }

    // public function getLivres()
    // {
    //     $db = $this->getPDO();
    //     $req = $db->query('SELECT * FROM books');

    //     return $req;
    // }

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

    
    public function addBooks($books)
    {
        $this->myBooks[] = $books;
    }

    public function getBook()
    {
        return $this->myBooks;
    }

    public function loadBooks()
    {
        $db = $this->getPDO();
        $req = $db->query('SELECT * FROM books');
        $req->execute();
        $myBooks = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach ($myBooks as $books) {
            $book = new Books($books['id'], $books['title'], $books['author'], $books['description'], $books['nbPages'], $books['images']);
            $this->addBooks($book);
        }
        
        $req->closeCursor();
    }
}
