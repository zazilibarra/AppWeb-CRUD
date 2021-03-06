<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pastel;

use Illuminate\Support\Facades\Storage;

class PastelController extends Controller
{
    public function guardaPastel(Request $request){
        $pastel = new Pastel();
        $pastel->sabor = $request->sabor;
        $pastel->precio = $request->precio;

        $request->file('imagen')->storeAs('public', $pastel->sabor.'.'.$request->file('imagen')->getClientOriginalExtension());
        $pastel->rutaimg = $pastel->sabor.'.'.$request->file('imagen')->getClientOriginalExtension();
        
        $pastel->save();

        return redirect('/');
    }

    public function muestra(){
        $pasteles=Pastel::all();
        return view('welcome')->with('pasteles', $pasteles);
    }

    public function muestraEdicion($id){
        $pastel=Pastel::find($id);
        return view('editarPastel')->with('pastel', $pastel);
    }

    public function guardaEdicion(Request $request){
        $pastel=Pastel::find($request->id);
        $pastel->sabor = $request->sabor;
        $pastel->precio = $request->precio;
        $pastel->save();
        return redirect('/');
    }

    public function borrar($id){
        $pastel=Pastel::find($id);
        $pastel->delete();
        return redirect('/');
    }
}
