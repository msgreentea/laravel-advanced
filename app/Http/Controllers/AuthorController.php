<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $items = Author::paginate(4);
        $param = ['items' => $items, 'user' => $user];
        return view('index', $param);
    }
}