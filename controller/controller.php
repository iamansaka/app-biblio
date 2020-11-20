<?php

namespace Controller;

use Model\BooksManager;

class Controller
{

    private $booksManager;

    public function __construct()
    {
        $this->booksManager = new BooksManager;
        $this->booksManager->loadBooks();
    }


    // public function listBooks()
    // {
    //     $booksManager = $this->booksManager;
    //     $livres = $booksManager->getLivres();

    //     require "views/accueil.view.php";
    // }


    public function listBooks()
    {
        $books = $this->booksManager->getBook();
        require "views/accueil.view.php";
    }

    

    public function getBook()
    {
        $voirBook = $this->booksManager;
        $livre = $voirBook->getBooks($_GET['id']);

        require "views/books.view.php";
    }



    public function postBooks()
    {
        if (isset($_POST['titrePost']) && isset($_POST['auteurPost']) &&  isset($_POST['images']) && isset($_POST['nbPagesPost']) && isset($_POST['descriptionPost'])) {
            $titre = $_POST['titrePost'];
            $auteur = $_POST['auteurPost'];
            $images = $_POST['images'];
            $pages = $_POST['nbPagesPost'];
            $description = $_POST['descriptionPost'];
            $ajoutLivres = $this->booksManager;
            
            if ($ajoutLivres->insertLivres($titre, $auteur, $description, $pages, $images)) {
                header('Location: accueil');
            }
        }

        require "views/posts.view.php";
    }
}
