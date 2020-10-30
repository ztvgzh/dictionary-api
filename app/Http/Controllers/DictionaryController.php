<?php


namespace App\Http\Controllers;


class DictionaryController extends Controller
{
    public function translateWord()
    {
        return response()->json(['message'=>'Hello world!']);


    }


}
