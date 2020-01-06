<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book; // importez l'alias de la classe Book plus partique à utiliser dans le code 
use App\Author;
use App\Genre;

class FrontController extends Controller
{
    protected $paginate = 5;

    public function __construct(){

        // méthode pour injecter des données à une vue partielle 
        view()->composer('partials.menu', function($view){
            $genres = Genre::pluck('name', 'id')->all(); // on récupère un tableau associatif ['id' => 1]
            $view->with('genres', $genres ); // on passe les données à la vue
        });
    }

    public function index(){

        $books = Book::paginate($this->paginate); // pagination 

        return view('front.index', ['books' => $books]);

    }

    public function show(int $id){

        // vous ne récupérez qu'un seul livre 
        $book = Book::find($id);

        // que vous passez à la vue
        return view('front.show', ['book' => $book]);
    }

    public function showBookByAuthor(int $id){

        $author= Author::find($id); // récupérez les informations liés à l'auteur
        $books = $author->books()->paginate($this->paginate); // on récupère tous les livres d'un auteur

        // On passe les livres et le nom de l'auteur
        return view('front.author', ['books' => $books, 'author' => $author]);

    }

    public function showBookByGenre(int $id){
        // on récupère le modèle genre.id 
        $genre = Genre::find($id);

        $books = $genre->books()->paginate($this->paginate);

        return view('front.genre', ['books' => $books, 'genre' => $genre]);
    }

}

