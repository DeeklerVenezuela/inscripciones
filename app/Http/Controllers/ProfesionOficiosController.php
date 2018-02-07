<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profesion_oficios;
use App\Http\Controllers\Controller;
use Exception;

class ProfesionOficiosController extends Controller
{

    /**
     * Display a listing of the profesion oficios.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $profesionOficiosObjects = profesion_oficios::paginate(25);

        return view('profesion_oficios.index', compact('profesionOficiosObjects'));
    }

    /**
     * Show the form for creating a new profesion oficios.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('profesion_oficios.create');
    }

    /**
     * Store a new profesion oficios in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            profesion_oficios::create($data);

            return redirect()->route('profesion_oficios.profesion_oficios.index')
                             ->with('success_message', 'Profesion Oficios was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified profesion oficios.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $profesionOficios = profesion_oficios::findOrFail($id);

        return view('profesion_oficios.show', compact('profesionOficios'));
    }

    /**
     * Show the form for editing the specified profesion oficios.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $profesionOficios = profesion_oficios::findOrFail($id);
        

        return view('profesion_oficios.edit', compact('profesionOficios'));
    }

    /**
     * Update the specified profesion oficios in the storage.
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
            
            $profesionOficios = profesion_oficios::findOrFail($id);
            $profesionOficios->update($data);

            return redirect()->route('profesion_oficios.profesion_oficios.index')
                             ->with('success_message', 'Profesion Oficios was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified profesion oficios from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $profesionOficios = profesion_oficios::findOrFail($id);
            $profesionOficios->delete();

            return redirect()->route('profesion_oficios.profesion_oficios.index')
                             ->with('success_message', 'Profesion Oficios was successfully deleted!');

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
            'PROFESION_OFICIO' => 'nullable|string|min:0|max:28',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
