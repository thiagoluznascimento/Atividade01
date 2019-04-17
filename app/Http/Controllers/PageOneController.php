<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageOneController extends Controller
{
    public function view1()
    {
        $nome="jaime";
        $telefone="(38) 98567667";
        return view('view1')->with('nome',$nome);
    }
    public function view2()
    {
        $email="MuriloSantos.com";
        $telefone="(38) 99075549";
        return view('view2')->with('email2',$email)->with('telefone2',$telefone);
    }
    public function view3()
    {
        $email="Thiagoluz.com";
        $telefone="(38) 9945775";
        return view('view3')->with('email3',$email)->with('telefone3',$telefone);
    }
}
