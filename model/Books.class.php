<?php

namespace Model;

class Books {
    private $_id;
    private $_titre;
    private $_author;
    private $_description;
    private $_nbPages;
    private $_images;

    public function __construct(int $id, string $titre, string $author, string $description, int $nbPages, string $images)
    {
        $this->_id = $id;
        $this->_titre = $titre;
        $this->_author = $author;
        $this->_description = $description;
        $this->_nbPages = $nbPages;
        $this->_images = $images;
    }

        
    /**
     * Liste getter
     */
    public function getId(){return $this->_id;}
    public function getTitre(){return $this->_titre;}
    public function getAuteur(){return $this->_author;}
    public function getDescription(){return $this->_description;}
    public function getNbPages(){return $this->_nbPages;}
    public function getImages(){return $this->_images;}

    /**
     * Liste setter
     */
    public function setId($id){return $this->_id = $id;}
    public function setTitre($titre){return $this->_titre = $titre;}
    public function setAuteur($auteur){return $this->_author = $auteur;}
    public function setDescription($description){return $this->_description = $description;}
    public function setNbPages($nbPages){return $this->_nbPages = $nbPages;}
    public function setImages($images){return $this->_images = $images;}

}