<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrenador;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreEntrenadorRequest;

class EntrenadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrenadores = Entrenador::all();
        return view('Entrenadores.index', compact('entrenadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Entrenadores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntrenadorRequest $request)
    {

        if ($request->file("avatar")) {
            //dd($request->file("avatar"));
            $file = $request->file('avatar');
            $name = time() . $file->getClientOriginalName();

            $file->move(public_path() . '/images/', $name);
            //dd(public_path().'/images/');

        }

        $entrenador = new Entrenador();
        $entrenador->name = $request->name;
        $entrenador->slug = $request->name;
        $entrenador->descripcion = $request->descripcion;
        $entrenador->avatar = $name;

        $entrenador->save();
        return redirect()->route('Entrenador.index');
        //return 'guardado';
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
       $entrenador=Entrenador::where('slug','=',$slug)->firstOrFail();

        return view("Entrenadores.show",compact('entrenador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $entrenador=Entrenador::where('slug','=',$slug)->firstOrFail();

        return view("Entrenadores.edit",compact('entrenador'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $entrenador=Entrenador::where('slug','=',$slug)->firstOrFail();
        $entrenador->name = $request->get('name');
        $entrenador->descripcion = $request->get('descripcion');
        $entrenador->save();

        return redirect()->route('Entrenador.show',[$slug]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {

        $entrenador=Entrenador::where('slug','=',$slug)->firstOrFail();
        $file_path=public_path().'/images/'.$entrenador->avatar;
        \File::delete($file_path);
       $entrenador->delete();

       return redirect()->route('Entrenador.index');

    }



    public function editPhoto(Request $request, $slug)
    {
        $entrenador=Entrenador::where('slug','=',$slug)->firstOrFail();
        return view('Entrenadores.editphoto',compact('entrenador'));
    }

    
    public function updatePhoto(Request $request, $slug)
    {
        $entrenador=Entrenador::where('slug','=',$slug)->firstOrFail();
        if ($request->file("avatar")) {
            //dd($request->file("avatar"));
            $file = $request->file('avatar');
            $name = time() . $file->getClientOriginalName();

            $file->move(public_path() . '/images/', $name);
            //dd(public_path().'/images/');

        }
        $entrenador->avatar = $name;

        $entrenador->save();
          return redirect()->route('Entrenador.show',[$slug]);
    }
}
