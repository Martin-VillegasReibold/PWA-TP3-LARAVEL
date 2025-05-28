<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getIndex()
    {
        return view('category.index');
    }
    public function getShow($id)
    {

        //compact('id') --> ['id' => $id]

        return view('category.show', compact('id'));
    }

    public function getCreate()
    {
        return view('category.create');
    }

    public function getEdit($id)
    {
        return view('category.edit', [
            'id' => $id
        ]);
    }
}
