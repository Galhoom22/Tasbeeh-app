<?php

namespace App\Http\Controllers;

use App\Models\Tasbeeh;
use Illuminate\Http\Request;

class TasbeehController extends Controller
{
    public function index(){
        $tasbeehs = Tasbeeh::all();
        return view('tasbeeh.index', compact('tasbeehs'));
    }
}
