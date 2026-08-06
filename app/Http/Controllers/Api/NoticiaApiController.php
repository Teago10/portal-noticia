<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //GET
    {
        $noticias = Noticia::all();

        return response()->json($noticias);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //POST
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //GET
    {
        $noticias = Noticia::findOrFail($id);

        return response()->json($noticias);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //PUT
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) //DELETE
    {
        //
    }
}
