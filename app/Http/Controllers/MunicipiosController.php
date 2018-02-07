<?php

namespace App\Http\Controllers;

use App\Models\municipios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class MunicipiosController extends Controller
{

    /**
     * Display a listing of the municipios.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $municipiosObjects = municipios::paginate(25);

        return view('municipios.index', compact('municipiosObjects'));
    }

    /**
     * Show the form for creating a new municipios.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('municipios.create');
    }

    /**
     * Store a new municipios in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            municipios::create($data);

            return redirect()->route('municipios.municipios.index')
                             ->with('success_message', 'Municipios was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified municipios.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $municipios = municipios::findOrFail($id);

        return view('municipios.show', compact('municipios'));
    }

    /**
     * Show the form for editing the specified municipios.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $municipios = municipios::findOrFail($id);
        

        return view('municipios.edit', compact('municipios'));
    }

    /**
     * Update the specified municipios in the storage.
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
            
            $municipios = municipios::findOrFail($id);
            $municipios->update($data);

            return redirect()->route('municipios.municipios.index')
                             ->with('success_message', 'Municipios was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified municipios from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $municipios = municipios::findOrFail($id);
            $municipios->delete();

            return redirect()->route('municipios.municipios.index')
                             ->with('success_message', 'Municipios was successfully deleted!');

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
            'descripcion' => 'nullable|string|min:0|max:35',
            'IDProvincia' => 'nullable|string|min:0|max:11',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
