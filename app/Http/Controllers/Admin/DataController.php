<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function authors()
    {
        $authors = Author::orderBy('name', 'ASC');
        return datatables()->of($authors)
            ->addColumn('action', function (Author $author) {
                return '<a href="' . route('admin.author.edit', $author) . '" class="btn btn-warning">Edit</a>';
            })
            ->addIndexColumn()
            ->toJson();
    }
}
