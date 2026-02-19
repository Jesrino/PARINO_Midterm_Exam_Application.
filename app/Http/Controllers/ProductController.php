<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
public function index()
{
    $movies = [
        ['title' => 'Inception', 'genre' => 'Sci-Fi', 'year' => 2010, 'director' => 'Christopher Nolan'],
        ['title' => 'The Godfather', 'genre' => 'Crime', 'year' => 1972, 'director' => 'Francis Ford Coppola'],
        ['title' => 'Spirited Away', 'genre' => 'Anime/Fantasy', 'year' => 2001, 'director' => 'Hayao Miyazaki'],
        ['title' => 'The Dark Knight', 'genre' => 'Action', 'year' => 2008, 'director' => 'Christopher Nolan'],
        ['title' => 'Pulp Fiction', 'genre' => 'Crime', 'year' => 1994, 'director' => 'Quentin Tarantino'],
        ['title' => 'Parasite', 'genre' => 'Thriller', 'year' => 2019, 'director' => 'Bong Joon-ho'],
        ['title' => 'Interstellar', 'genre' => 'Sci-Fi', 'year' => 2014, 'director' => 'Christopher Nolan'],
        ['title' => 'The Matrix', 'genre' => 'Sci-Fi', 'year' => 1999, 'director' => 'Lana & Lilly Wachowski'],
        ['title' => 'Goodfellas', 'genre' => 'Biography/Crime', 'year' => 1990, 'director' => 'Martin Scorsese'],
        ['title' => 'Your Name', 'genre' => 'Anime/Romance', 'year' => 2016, 'director' => 'Makoto Shinkai'],
        ['title' => 'The Shawshank Redemption', 'genre' => 'Drama', 'year' => 1994, 'director' => 'Frank Darabont'],
        ['title' => 'Gladiator', 'genre' => 'Action/Drama', 'year' => 2000, 'director' => 'Ridley Scott'],
        ['title' => 'Everything Everywhere All At Once', 'genre' => 'Sci-Fi/Adventure', 'year' => 2022, 'director' => 'Daniel Kwan & Daniel Scheinert'],
        ['title' => 'The Lion King', 'genre' => 'Animation/Adventure', 'year' => 1994, 'director' => 'Roger Allers & Rob Minkoff'],
        ['title' => 'Seven Samurai', 'genre' => 'Action/Drama', 'year' => 1954, 'director' => 'Akira Kurosawa'],
    ];

    return view('movies.index', compact('movies'));
}
}