<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $items = Author::Paginate(4);
        return view('index', ['items' => $items]);
    }
}