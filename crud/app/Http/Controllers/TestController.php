<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospiti;

class TestController extends Controller
{
    public function ospiti(){

        $ospiti = Ospiti::all();

        return view('pages.home', compact(
            'ospiti'
        ));

    }

    public function ospite($id)
    {
        $ospite = Ospiti::findOrFail($id);

        return view('pages.ospite', compact('ospite'));
    }

    public function create()
    {
        return view('pages.form');

    }

    public function store(Request $request) {
        // dd($request -> all());

        $validate = $request -> validate([
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'date_of_birth' => 'required',
            'document_type' => 'required|max:255',
            'document_number' => 'required|max:255'
        ]);

        // dd($validate);
        $ospite = Ospiti::create($validate);
        return redirect() -> route('ospiti.ospite', $ospite -> id);

    }
}
