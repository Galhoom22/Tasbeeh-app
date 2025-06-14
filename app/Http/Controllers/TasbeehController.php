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

    public function create(){
        return view('tasbeeh.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Tasbeeh::create([
            'name' => $request->name,
            'count' => 0,
            'total_count' => 0,
        ]);

        return redirect()->route('tasbeeh.index')->with('success', 'تمت إضافة التسبيحة بنجاح!');
    }
    public function increment($id){
        $tasbeeh = Tasbeeh::findOrFail($id);
        $tasbeeh->increment('count');
        $tasbeeh->increment('total_count');
        return redirect()->route('tasbeeh.index');
    }
    public function destroy($id){
        $tasbeeh = Tasbeeh::findOrFail($id);
        $tasbeeh->delete();
        return redirect()->route('tasbeeh.index')->with('success', 'تم حذف التسبيحة بنجاح');
    }
}