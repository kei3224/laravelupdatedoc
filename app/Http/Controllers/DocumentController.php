<?php

namespace App\Http\Controllers;

use App\Models\document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = document::all();
        return view('index', compact('documents'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $number = mt_rand(1000000000,9999999999);

        if ($this->documentCodeExists($number)) {
            $number = mt_rand(1000000000,9999999999);
        }

        $request['document_code'] = $number;
        Document::create($request->all());

        return redirect('/');
    }

    public function documentCodeExists($number)
    {
        return document::whereDocumentCode($number)->exists();
    }
}
