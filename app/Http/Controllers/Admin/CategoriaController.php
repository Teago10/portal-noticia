<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     * Lista de Notícias
     */
    public function index()
    {
        $categoria = Categoria::all();
        return view('admin.categorias.index', ['categoria' => $categoria]);
    }

    /**
     * Show the form for creating a new resource.
     * Mostrar formulário para cadastrar notícia
     */
    public function create()
    {
        return view('admin.categorias.cadastrar', [
            'categoria' => new Categoria()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => null,
            'cor' => 'required'
        ]);

        $categoria = new Categoria();

        $categoria->nome = $request->nome;
        $categoria->descricao = $request->descricao;
        $categoria->cor = $request->cor;

        $categoria->save();

        return redirect()->route('admin.categorias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    
        return view('admin.categorias.editar', [
            'categoria' => Categoria::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => null,
            'cor' => 'required'
        ]);

        $categoria = Categoria::findOrFail($id);

        $categoria->nome = $request->nome;
        $categoria->descricao = $request->descricao;
        $categoria->cor = $request->cor;

        $categoria->save();

        return redirect()->route('admin.categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('admin.categorias.index');
    }
}

