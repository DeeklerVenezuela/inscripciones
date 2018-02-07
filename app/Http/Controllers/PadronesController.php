<?php

namespace App\Http\Controllers;

use App\Models\padrones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class PadronesController extends Controller
{

    /**
     * Display a listing of the padrones.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $padronesObjects = padrones::paginate(25);

        return view('padrones.index', compact('padronesObjects'));
    }

    /**
     * Show the form for creating a new padrones.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('padrones.create');
    }

    /**
     * Store a new padrones in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            padrones::create($data);

            return redirect()->route('padrones.padrones.index')
                             ->with('success_message', 'Padrones was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified padrones.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $padrones = padrones::findOrFail($id);

        return view('padrones.show', compact('padrones'));
    }

    /**
     * Show the form for editing the specified padrones.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $padrones = padrones::findOrFail($id);
        

        return view('padrones.edit', compact('padrones'));
    }

    /**
     * Update the specified padrones in the storage.
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
            
            $padrones = padrones::findOrFail($id);
            $padrones->update($data);

            return redirect()->route('padrones.padrones.index')
                             ->with('success_message', 'Padrones was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified padrones from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $padrones = padrones::findOrFail($id);
            $padrones->delete();

            return redirect()->route('padrones.padrones.index')
                             ->with('success_message', 'Padrones was successfully deleted!');

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
            'nombre' => 'required|string|min:1|max:60',
            'apellido1' => 'required|string|min:1|max:60',
            'apellido2' => 'nullable|string|min:0|max:45',
            'fechanac' => 'nullable|string|min:0',
            'sexo' => 'nullable|string|min:0|max:1',
            'estadocivil' => 'nullable|string|min:0|max:1',
            'codigocolegio' => 'nullable|string|min:0|max:7',
            'codigorecinto' => 'nullable|string|min:0|max:7',
            'recinto' => 'nullable|string|min:0|max:150',
            'iddistritomunicipal' => 'nullable|string|min:0|max:7',
            'distritomunicipal' => 'nullable|string|min:0|max:100',
            'codigocircunscripcion' => 'nullable|string|min:0|max:7',
            'idmunicipio' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'municipio' => 'nullable|string|min:0|max:100',
            'idprovincia' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'provincia' => 'nullable|string|min:0|max:100',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
