<?php
namespace  Data;

class BookDataHandler{
    private $library_catalogue = array();
    
    public function __construct(){
        $book_file = '/deploy/book-manager/main/data/book_data.json';
        $json_data = file_get_contents($book_file);
        $book_data = json_decode($json_data, true);
        
        foreach ($book_data as $book){
            if ($book['status'] === 'archived'){
                $this->library_catalogue[] = $book;
            }
        }
    }
    
    public function getLibraryCatalogueArray(){
        return $this->library_catalogue;
    } 
}