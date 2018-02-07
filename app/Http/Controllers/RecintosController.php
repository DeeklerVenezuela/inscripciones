<?php

namespace App\Http\Controllers;

use App\Models\recintos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class RecintosController extends Controller
{

    /**
     * Display a listing of the recintos.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $recintosObjects = recintos::paginate(25);

        return view('recintos.index', compact('recintosObjects'));
    }

    /**
     * Show the form for creating a new recintos.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('recintos.create');
    }

    /**
     * Store a new recintos in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            recintos::create($data);

            return redirect()->route('recintos.recintos.index')
                             ->with('success_message', 'Recintos was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified recintos.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $recintos = recintos::findOrFail($id);

        return view('recintos.show', compact('recintos'));
    }

    /**
     * Show the form for editing the specified recintos.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $recintos = recintos::findOrFail($id);
        

        return view('recintos.edit', compact('recintos'));
    }

    /**
     * Update the specified recintos in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $recintos = recintos::findOrFail($id);
            $recintos->update($data);

            return redirect()->route('recintos.recintos.index')
                             ->with('success_message', 'Recintos was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified recintos from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $recintos = recintos::findOrFail($id);
            $recintos->delete();

            return redirect()->route('recintos.recintos.index')
                             ->with('success_message', 'Recintos was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'DESCRIPCION' => 'nullable|string|min:0|max:52',
            'DIRECCION' => 'nullable|string|min:0|max:51',
            'COD_MUNICIPIO' => 'nullable|string|min:0|max:13',
            'COD_CIUDAD' => 'nullable|string|min:0|max:10',
            'COD_SECTOR' => 'nullable|string|min:0|max:10',
            'COD_CIRCUNSCRIPCION' => 'nullable|string|min:0|max:19',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
